<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">

  <head>
    <link rel="stylesheet" type="text/css" href="font/ubuntu.css?family=Ubuntu:light,bold&subset=Latin">
    <title>Trystan Lea</title>
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css?v=1" />
    <script type="text/javascript" src="lib/jquery-1.11.3.min.js"></script>
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
      <div class="menu-item"><b>A mid terrace home</b></div>
      <div class="menu-item"><a href="introduction">1. Introduction</a></div>
      <div class="menu-item"><a href="energyassessment">2. Home Energy Assessment</a></div>
      
      
      
      <br>
      <div class="menu-item"><b>Blog</b></div>
      
      <?php foreach ($posts as $post) {
          echo "<div class='menu-item'>";
          echo "<div><a href='".$post["link"]."'>".$post["title"]."</a></div>";
          echo "<div style='font-size:15px'>".$post["published"]."</div>";
          echo "</div>";
      } ?>
      
      
      </div>
      
      <br>
      <div class="menu-item"><b>Twitter</b></div>
      
      <!--
      <div style="padding:10px">
        <a class="twitter-timeline" data-tweet-limit=1 href="https://twitter.com/TrystanLea?ref_src=twsrc%5Etfw"></a> 
        <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> 
      </div>-->
      
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

</script>
