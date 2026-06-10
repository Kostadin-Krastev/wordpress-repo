<!DOCTYPE html>
<html>
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <link rel="icon" type="image/jpg" href="images/portrait.jpg" />
      <title>E-Portfolio</title>
      <?php wp_head(); ?>
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