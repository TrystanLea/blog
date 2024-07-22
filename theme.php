<?php global $path; 

$print_view = 0;
if (isset($_GET['print'])) $print_view = 1;

?>
<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">

  <head>
    <link rel="stylesheet" type="text/css" href="<?php echo $path; ?>font/ubuntu.css?family=Ubuntu:light,bold&subset=Latin">
    <title>Trystan Lea</title>
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo $path; ?>style.css?v=5" />
    <script type="text/javascript" src="<?php echo $path; ?>lib/jquery-1.11.3.min.js"></script>
  </head>

  <body>
  
    <div class="topnav" style="display:none">
      <div class="logo-bound-top">
        <div class="logo"></div>
        <div class="logo-title">Trystan Lea</div>
      </div>
    </div>
  
    <div class="sidenav">
      <div class="sidenav_inner">
      <div class="logo-bound-side">
        <div class="logo"></div>
        <div class="logo-title">Trystan Lea</div>
      </div>
      
      <div style="clear:both"></div>
      
      <br>
      <!--
      <div class="menu-items" name="about">
          <div class="menu-item"><a href="about">1. Wild Impact</a></div>
          <div class="menu-item"><a href="thoughtexperiment">2. A Thought Experiment</a></div>
      </div>
      -->
      
      <?php
      foreach ($menu as $group=>$items) {
          echo '<div class="menu-title" name="'.$group.'"><b>'.$group.'</b></div>';
          if ($active_group==$group) $group_vis_html = ""; else $group_vis_html = 'style="display:none"';
          echo '<div class="menu-items" '.$group_vis_html.' name="'.$group.'">';
          foreach ($items as $href=>$val) {
              echo '<div class="menu-item"><a href="'.$href.'">'.$val.'</a></div>';
          }
          echo '</div>';
      }
      ?>
           
      <div class="menu-title" name="blog"><b>Latest</b></div>
      <div class="menu-items" style="display:none" name="blog">
      <?php foreach ($posts as $post) {
          echo "<div class='menu-item'>";
          echo "<div><a href='".$post["link"]."'>".$post["title"]."</a></div>";
          echo "<div class='published' style='font-size:15px'>".$post["published"]."</div>";
          echo "</div>";
      } ?>
      </div>
      
      </div>
      
      <div class="menu-title" name="twitter"><b>Twitter</b></div>
      
    </div>

    <div class="page">
      <div class="page_inner">
        <h2><?php echo $title; ?></h2>
        <div class='published'>Published: <?php echo $published; ?></div>
        <?php echo $content; ?>
      </div>
    </div>
    
    <!--<div id="footer"></div>-->

  </body>
</html>

<script>

var print_view = <?php echo $print_view; ?>;
var sidenav_visible = true;
var window_width = 0;

function resize() {
  window_width = $(window).width();

  var sidenav_space = (window_width-960)*0.5;

  if (sidenav_space>300) {
      sidenav_visible = true;
  } else {
      sidenav_visible = false;
  }
  draw();
  
  if (print_view) {
      $(".topnav").hide();
      $(".sidenav").hide();
      $(".published").hide();
  }
}


$(window).on('load', function(){
  resize();
});

$(window).resize(function() {
  resize();
});

$(".logo").click(function(){
    if (sidenav_visible) {
        sidenav_visible = false;
    } else {
        sidenav_visible = true;
    }
    
    draw();
});


function draw() {
    if (sidenav_visible) {
        $(".sidenav").show();
        $(".topnav").hide();
    } else {
        $(".sidenav").hide();
        $(".topnav").show();    
    } 
}

$(".menu-title").click(function(){
    var name = $(this).attr("name");
    $(".menu-items[name='"+name+"']").toggle();
    
    if (name=="twitter") window.location = "https://twitter.com/trystanlea";
});

</script>
