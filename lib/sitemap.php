<?php
// Sitemap for search engines, served at /sitemap.xml
global $path;

echo '<?xml version="1.0" encoding="utf-8"?>'."\n";
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
  <url><loc><?php echo h($path); ?></loc></url>
<?php foreach ($posts as $post) { ?>
  <url>
    <loc><?php echo h($path.$post["link"]); ?></loc>
    <?php if ($post["time"]) { ?><lastmod><?php echo date("Y-m-d", $post["time"]); ?></lastmod><?php } ?>

  </url>
<?php } ?>
</urlset>
