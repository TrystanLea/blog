<?php
// Home page sections shown below the intro in pages/<lang>/home.md
global $path;
?>
<h2>Series</h2>
<div class="cards">
  <?php foreach ($menu as $group=>$items) { $first = array_key_first($items); ?>
  <a class="card" href="<?php echo h($path.$first); ?>">
    <span class="card-icon"><?php echo icon(isset($menu_icons[$group]) ? $menu_icons[$group] : "document"); ?></span>
    <span class="card-text">
      <strong><?php echo h($group); ?></strong>
      <span><?php echo count($items); ?> posts, starting with <?php echo h(preg_replace('/^\d+\.\s*/', '', $items[$first])); ?></span>
    </span>
  </a>
  <?php } ?>
</div>

<h2>Latest posts</h2>
<ul class="post-list">
  <?php foreach (array_slice($posts, 0, 8) as $post) {
      $summary = $post["description"];
      if (!$summary && $post["type"] != "php") {
          list($content) = render_page($post);
          $summary = page_summary($content);
      }
  ?>
  <li>
    <a href="<?php echo h($path.$post["link"]); ?>"><?php echo h($post["title"]); ?></a>
    <div class="published"><?php echo $post["published"]; ?></div>
    <?php if ($summary) { ?><p><?php echo h($summary); ?></p><?php } ?>
  </li>
  <?php } ?>
</ul>
<p><a href="<?php echo $path; ?>feed.xml">Subscribe to the feed</a></p>
