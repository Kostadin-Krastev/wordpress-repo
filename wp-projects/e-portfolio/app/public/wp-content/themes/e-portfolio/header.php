<!DOCTYPE html>
<html>
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <link rel="icon" type="image/jpg" href="images/portrait.jpg" />
      <title>E-Portfolio</title>
      <?php wp_head(); ?>
      <?php $theme_color = get_field('theme_color'); 
      if($theme_color) :
      ?>
      <style>
         .red-divider,
         .navbar,
         #about,
         #skills .progress-bar,
         #experience,
         #portfolio,
         .carousel-indicators li.active {
            background-color: <?php echo $theme_color; ?> !important;
         }

      .navbar-nav li a:hover,
      .navbar-nav li.active a,
      .button1:hover,
      #skills .heading h2,
       .internship-block h3,
      .competition-block h3,
      .internship-block h6,
      .competition-block h6,
      .timeline-heading h4,
      #education .heading h2,
      .education-block h6 a,
      .education-block h6 a:hover,
      .education-block h3,
      #motivation .heading h2,
      .carousel-control.left, 
      .carousel-control.right,
      .carousel-inner .item h3,
      footer .glyphicon,
      .timeline li .timeline-badge,
      section .heading {
         color: <?php echo $theme_color; ?> !important;
      }

      .carousel-indicators li {
         border-color: <?php echo $theme_color; ?> !important;
      }
      </style>
      <?php endif; ?>
   </head>

   <body data-spy="scroll" data-target=".navbar" data.offset="60">
      <nav class="navbar navbar-default navbar-fixed-top">
         <div class="container">
            <div class="navbar-header">
               <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#monMenu">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
               </button>
            </div>
            <!-- This is the static menu. I dont need it because I created it below a dynamic menu with php -->
            <!-- <div class="collapse navbar-collapse" id="monMenu">
               <ul class="nav navbar-nav">
                  <li><a href="#about">Me</a></li>
                  <li><a href="#skills">Skills</a></li>
                  <li><a href="#internships">Internships</a></li>
                  <li><a href="#experience">Experiences</a></li>
                  <li><a href="#education">Education</a></li>
                  <li><a href="#portfolio">Portfolio</a></li>
               </ul>
            </div> -->

            <!-- add main menu functionality -->
             <?php
             wp_nav_menu(array(
               'theme_location' => 'main_menu',
               'menu_class' => 'nav navbar-nav',
               'container' => 'div',
               'container_class' => 'collapse navbar-collapse',
               'container_id' => 'monMenu',
             ));
             ?>
         </div>
      </nav>