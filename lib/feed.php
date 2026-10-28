<?php
// Atom feed of the latest posts, served at /feed.xml
global $path;

$posts = array_slice(array_filter($posts, function ($post) { return $post["time"]; }), 0, 20);
$updated = count($posts) ? reset($posts)["time"] : time();

echo '<?xml version="1.0" encoding="utf-8"?>'."\n";
?>
<feed xmlns="http://www.w3.org/2005/Atom" xml:base="<?php echo h($path); ?>">
  <title><?php echo h($site_name); ?></title>
  <link href="<?php echo h($path); ?>"/>
  <link rel="self" href="<?php echo h($path); ?>feed.xml"/>
  <id><?php echo h($path); ?></id>
  <updated><?php echo date(DATE_ATOM, $updated); ?></updated>
  <author><name><?php echo h($site_name); ?></name></author>
<?php foreach ($posts as $post) {
    list($content) = render_page($post);
    $summary = $post["description"] ? $post["description"] : page_summary($content);
?>
  <entry>
    <title><?php echo h($post["title"]); ?></title>
    <link href="<?php echo h($path.$post["link"]); ?>"/>
    <id><?php echo h($path.$post["link"]); ?></id>
    <updated><?php echo date(DATE_ATOM, $post["time"]); ?></updated>
    <?php if ($summary) { ?><summary><?php echo h($summary); ?></summary><?php } ?>

    <?php if ($post["type"] != "php") { ?><content type="html"><?php echo h($content); ?></content><?php } ?>

  </entry>
<?php } ?>
</feed>
