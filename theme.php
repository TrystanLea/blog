<?php global $path;

$site_name = "Trystan Lea";
$page_title = ($title && $title != $site_name) ? "$title | $site_name" : $site_name;

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo h($page_title); ?></title>
    <?php if ($description) { ?><meta name="description" content="<?php echo h($description); ?>">
    <?php } ?>
    <?php if ($canonical) { ?><link rel="canonical" href="<?php echo h($canonical); ?>">
    <?php } ?>
    <meta property="og:site_name" content="<?php echo h($site_name); ?>">
    <meta property="og:type" content="article">
    <meta property="og:title" content="<?php echo h($title ? $title : $site_name); ?>">
    <?php if ($description) { ?><meta property="og:description" content="<?php echo h($description); ?>">
    <?php } ?>
    <?php if ($canonical) { ?><meta property="og:url" content="<?php echo h($canonical); ?>">
    <?php } ?>
    <?php if ($image) { ?><meta property="og:image" content="<?php echo h($image); ?>">
    <meta name="twitter:card" content="summary_large_image">
    <?php } ?>
    <link rel="alternate" type="application/atom+xml" title="<?php echo h($site_name); ?>" href="<?php echo h($path); ?>feed.xml">
    <link rel="stylesheet" href="<?php echo asset("style.css"); ?>">
    <!-- jQuery is used by some pages (e.g. the energy model tutorial) -->
    <script src="<?php echo h($path); ?>lib/jquery-3.6.0.min.js"></script>
    <script>var path = <?php echo json_encode($path); ?>;</script>
  </head>

  <body<?php if (isset($_GET['print'])) echo ' class="print"'; ?>>

    <header class="topnav">
      <a class="logo-bound" href="<?php echo h($path); ?>">
        <span class="logo"></span>
        <span class="logo-title"><?php echo h($site_name); ?></span>
      </a>
      <button class="menu-toggle" aria-controls="sidenav" aria-expanded="false">Menu</button>
    </header>

    <nav class="sidenav" id="sidenav" aria-label="Site">
      <a class="logo-bound" href="<?php echo h($path); ?>">
        <span class="logo"></span>
        <span class="logo-title"><?php echo h($site_name); ?></span>
      </a>

      <?php foreach ($menu as $group=>$items) { ?>
      <details class="menu-group"<?php if ($active_group==$group) echo " open"; ?>>
        <summary class="menu-title"><?php echo h($group); ?></summary>
        <ul class="menu-items">
          <?php foreach ($items as $href=>$val) { ?>
          <li class="menu-item"><a href="<?php echo h($path.$href); ?>"<?php if ($q==$href) echo ' aria-current="page"'; ?>><?php echo h($val); ?></a></li>
          <?php } ?>
        </ul>
      </details>
      <?php } ?>

      <details class="menu-group">
        <summary class="menu-title">Latest</summary>
        <ul class="menu-items">
          <?php foreach ($posts as $post) { ?>
          <li class="menu-item">
            <a href="<?php echo h($path.$post["link"]); ?>"<?php if ($q==$post["link"]) echo ' aria-current="page"'; ?>><?php echo h($post["title"]); ?></a>
            <div class="published"><?php echo $post["published"]; ?></div>
          </li>
          <?php } ?>
        </ul>
      </details>

      <a class="menu-title" href="https://twitter.com/trystanlea">Twitter</a>
    </nav>

    <main class="page">
      <article class="page_inner">
        <h1><?php echo h($title); ?></h1>
        <?php if ($published) { ?><div class="published">Published: <?php echo $published; ?></div>
        <?php } ?>
        <?php if (count($toc) >= 3) { ?>
        <details class="toc">
          <summary>Contents</summary>
          <ul>
            <?php foreach ($toc as $item) { ?>
            <li class="toc-h<?php echo $item["level"]; ?>"><a href="#<?php echo $item["id"]; ?>"><?php echo h($item["text"]); ?></a></li>
            <?php } ?>
          </ul>
        </details>
        <?php } ?>
        <?php echo $content; ?>

        <?php if ($series) { ?>
        <nav class="series-nav" aria-label="<?php echo h($active_group); ?>">
          <?php if ($series["prev"]) { ?><a class="series-prev" href="<?php echo h($path.$series["prev"]["href"]); ?>"><span>Previous</span><?php echo h($series["prev"]["label"]); ?></a><?php } ?>
          <?php if ($series["next"]) { ?><a class="series-next" href="<?php echo h($path.$series["next"]["href"]); ?>"><span>Next</span><?php echo h($series["next"]["label"]); ?></a><?php } ?>
        </nav>
        <?php } ?>
      </article>
    </main>

    <script>
    // Small screens: the menu button opens the side navigation over the page
    (function () {
      var toggle = document.querySelector(".menu-toggle");

      function set_nav_open(open) {
        document.body.classList.toggle("nav-open", open);
        toggle.setAttribute("aria-expanded", open ? "true" : "false");
      }

      toggle.addEventListener("click", function () {
        set_nav_open(!document.body.classList.contains("nav-open"));
      });
      document.querySelector(".page").addEventListener("click", function () { set_nav_open(false); });
      document.addEventListener("keydown", function (e) { if (e.key === "Escape") set_nav_open(false); });
    })();
    </script>
  </body>
</html>
