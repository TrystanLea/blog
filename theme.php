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
    <link rel="stylesheet" type="text/css" href="<?php echo $path; ?>style.css?v=1" />
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
      <div class="menu-items" name="about">
          <div class="menu-item"><a href="about">1. Wild Impact</a></div>
          <div class="menu-item"><a href="thoughtexperiment">2. A Thought Experiment</a></div>
      </div>
            
      <div class="menu-title" name="midterracehome"><b>A mid terrace home</b></div>
      <div class="menu-items" name="midterracehome">
          <div class="menu-item"><a href="introduction">1. Introduction</a></div>
          <div class="menu-item"><a href="energyassessment">2. Home Energy Assessment</a></div>
          <div class="menu-item"><a href="retrofitscenario">3. Retrofit Scenario</a></div>
          <div class="menu-item"><a href="heatloss2d_p1">4. 2D Heat loss Agros2D</a></div>
          <div class="menu-item"><a href="heatloss2d_p2">5. 2D Heat loss part 2</a></div>
          <div class="menu-item"><a href="thermalmass1">6. Thermal Mass 1</a></div>
          <div class="menu-item"><a href="thermalmass2">7. Thermal Mass 2</a></div>
          <div class="menu-item"><a href="roombyroomheatloss">8. Room by room heat loss</a></div>
          <div class="menu-item"><a href="current-heating-system">9. Current heating system</a></div>
          <div class="menu-item"><a href="heatpumpradiators">10. Heat pump radiator design</a></div>
          <div class="menu-item"><a href="roombyroomheatloss2">11. Room by room heat loss 2</a></div>
      </div>
      
      <div class="menu-title" name="project2"><b>Project 2</b></div>
      <div class="menu-items" style="display:none" name="project2">
          <div class="menu-item"><a href="bothy">1. BothyLab</a></div>
          <div class="menu-item"><a href="study">2. Study</a></div>
          <div class="menu-item"><a href="house">3. Main House</a></div>
      </div>

      <div class="menu-title" name="other"><b>Other</b></div>
      <div class="menu-items" style="display:none" name="other">
          <div class="menu-item"><a href="solarselfconsumption">Solar self consumption</a></div>
          <div class="menu-item"><a href="reading-historic-data-wowmetoffice">Reading historic weather station data from wow.metoffice</a></div>
      </div>
            
      <div class="menu-title" name="blog"><b>Blog</b></div>
      <div class="menu-items" style="display:none" name="blog">
      <?php foreach ($posts as $post) {
          echo "<div class='menu-item'>";
          echo "<div><a href='".$post["link"]."'>".$post["title"]."</a></div>";
          echo "<div class='published' style='font-size:15px'>".$post["published"]."</div>";
          echo "</div>";
      } ?>
      </div>
      
      </div>
      
      <div class="menu-title"><b>Twitter</b></div>
      
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
    $(".menu-items[name="+name+"]").toggle();
});

</script>
