<?php
// Home page: hero with the intro from pages/<lang>/home.md, series and latest posts
global $path;

// menu group of each page, used for the thumbnail fallback icon
$href_group = array();
foreach ($menu as $group=>$items) { foreach ($items as $href=>$val) $href_group[$href] = $group; }
?>
<header class="hero">
  <?php if ($page["image"]) { ?><img class="hero-image" src="<?php echo h($path.$page["image"]); ?>" alt=""><?php } ?>
  <div class="hero-text">
    <h1><?php echo h($page["title"]); ?></h1>
    <?php echo $intro; ?>
  </div>
</header>

<h2 class="section-title">Series</h2>
<div class="cards">
  <?php foreach ($menu as $group=>$items) { $first = array_key_first($items); ?>
  <a class="card" href="<?php echo h($path.$first); ?>">
    <?php $icon = isset($menu_icons[$group]) ? $menu_icons[$group] : "document"; ?>
    <span class="card-icon icon-<?php echo h($icon); ?>"><?php echo icon($icon); ?></span>
    <span class="card-text">
      <strong><?php echo h($group); ?></strong>
      <span><?php echo count($items); ?> posts, starting with <?php echo h(preg_replace('/^\d+\.\s*/', '', $items[$first])); ?></span>
    </span>
  </a>
  <?php } ?>
</div>

<h2 class="section-title">Latest posts</h2>
<div class="post-grid">
  <?php foreach (array_slice($posts, 0, 9) as $post) {
      $summary = $post["description"];
      $thumb = $post["image"] ? $path.$post["image"] : "";
      if ($post["type"] != "php") {
          list($content) = render_page($post);
          if (!$summary) $summary = page_summary($content, 140);
          if (!$thumb) $thumb = first_image($content);
      }
      $group = isset($href_group[$post["link"]]) ? $href_group[$post["link"]] : false;
      $icon = ($group && isset($menu_icons[$group])) ? $menu_icons[$group] : "document";
  ?>
  <a class="post-card" href="<?php echo h($path.$post["link"]); ?>">
    <?php if ($thumb) { ?>
    <img class="post-thumb" src="<?php echo h($thumb); ?>" alt="" loading="lazy">
    <?php } else { ?>
    <span class="post-thumb post-thumb-icon icon-<?php echo h($icon); ?>"><?php echo icon($icon); ?></span>
    <?php } ?>
    <span class="post-card-body">
      <span class="post-card-meta"><?php echo $post["published"]; ?><?php if ($group) echo " · ".h($group); ?></span>
      <strong><?php echo h($post["title"]); ?></strong>
      <?php if ($summary) { ?><span class="post-card-summary"><?php echo h($summary); ?></span><?php } ?>
    </span>
  </a>
  <?php } ?>
</div>
