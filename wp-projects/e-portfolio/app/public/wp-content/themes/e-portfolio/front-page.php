<?php get_header(); 
$personal_information = get_field('personal_information');
if($personal_information) :
?>

      <section id="about" class="container-fluid">
         <div class="col-xs-12 col-md-6 col-lg-6 profile-picture">
            <img src="<?php echo $personal_information['portrait']; ?>" alt="John" class="img-circle" />
            <h1><?php echo $personal_information['promt']; ?></h1>
         </div>

         <div class="col-xs-12 col-md-6 col-lg-6 info">
            <div class="heading">
               <div id="intro">
                  <h3><?php echo $personal_information['section_title']; ?></h3>
                  <div class="white-divider"></div>
                  <br />
                  <p>
                     <?php echo $personal_information['information']; ?>
                  </p>
                  <a href="<?php echo $personal_information['linkedin']; ?>" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/linkedin.png" /></a>
                  <a href="<?php echo $personal_information['github']; ?>" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/github.png" /></a>
                  <br />
                  <a href="<?php echo $personal_information['cv_file']; ?>" class="button1">Download CV</a>
               </div>
            </div>
         </div>
      </section>
<?php endif; 

if(have_rows('skills')) :
   while(have_rows('skills')) : 
      the_row();
?>
      <section id="skills">
         <div class="red-divider"></div>
         <?php $section_title = get_sub_field('section_title'); ?>
         <div class="heading"><h2><?php echo $section_title; ?></h2></div>
         <div class="container">
            <div class="row">
               <?php 
               $first_skill = get_sub_field('first_skill');
               $second_skill = get_sub_field('second_skill');
               $third_skill = get_sub_field('third_skill');
               $fourth_skill = get_sub_field('fourth_skill');
               $fifth_skill = get_sub_field('fifth_skill');
               $sixth_skill = get_sub_field('sixth_skill');

               $first_skill_percentage = get_sub_field('first_skill_percentage');
               $second_skill_percentage = get_sub_field('second_skill_percentage');
               $third_skill_percentage = get_sub_field('third_skill_percentage');
               $fourth_skill_percentage = get_sub_field('fourth_skill_percentage');
               $fifth_skill_percentage = get_sub_field('fifth_skill_percentage');
               $sixth_skill_percentage = get_sub_field('sixth_skill_percentage');
               ?>
               <div class="col-md-6">
                  <div class="progress">
                     <div
                        class="progress-bar"
                        role="progressbar"
                        aria-valuenow="<?php echo $first_skill_percentage; ?>"
                        aria-valuemin="0"
                        aria-valuemax="100"
                        style="width: <?php echo $first_skill_percentage; ?>%;">
                        <h5><?php echo $first_skill; ?></h5>
                     </div>
                  </div>

                  <div class="progress">
                     <div
                        class="progress-bar"
                        role="progressbar"
                        aria-valuenow="<?php echo $second_skill_percentage; ?>"
                        aria-valuemin="0"
                        aria-valuemax="100"
                        style="width:<?php echo $second_skill_percentage; ?>%">
                        <h5><?php echo $second_skill; ?></h5>
                     </div>
                  </div>

                  <div class="progress">
                     <div
                        class="progress-bar"
                        role="progressbar"
                        aria-valuenow="<?php echo $third_skill_percentage; ?>"
                        aria-valuemin="0"
                        aria-valuemax="100"
                        style="width:<?php echo $third_skill_percentage; ?>%">
                        <h5><?php echo $third_skill; ?></h5>
                     </div>
                  </div>
               </div>

               <div class="col-md-6">
                  <div class="progress">
                     <div
                        class="progress-bar"
                        role="progressbar"
                        aria-valuenow="<?php echo $fourth_skill_percentage; ?>"
                        aria-valuemin="0"
                        aria-valuemax="100"
                        style="width:<?php echo $fourth_skill_percentage; ?>%">
                        <h5><?php echo $fourth_skill; ?></h5>
                     </div>
                  </div>

                  <div class="progress">
                     <div
                        class="progress-bar"
                        role="progressbar"
                        aria-valuenow="<?php echo $fifth_skill_percentage; ?>"
                        aria-valuemin="0"
                        aria-valuemax="100"
                        style="width:<?php echo $fifth_skill_percentage; ?>%">
                        <h5><?php echo $fifth_skill; ?></h5>
                     </div>
                  </div>

                  <div class="progress">
                     <div
                        class="progress-bar"
                        role="progressbar"
                        aria-valuenow="<?php echo $sixth_skill_percentage; ?>"
                        aria-valuemin="0"
                        aria-valuemax="100"
                        style="width:<?php echo $sixth_skill_percentage; ?>%">
                        <h5><?php echo $sixth_skill; ?></h5>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
<?php 
endwhile;
endif;

$internship = get_field('internships');

if($internship) :
   $section_title = $internship['section_title'];
   $first_internship = $internship['first_internship'];
   $second_internship = $internship['second_internship'];
?>
      <section id="internships">
         <div class="container">
            <div class="grey-divider"></div>
            <div class="heading">
               <h2><?php echo $section_title; ?></h2>
            </div>
            <div class="row">
               <div class="col-md-6">
                  <div class="internship-block">
                     <h5><?php echo $first_internship['period']; ?></h5>
                     <img src="<?php echo $first_internship['place_image']; ?>" alt="Craiova" height="150" width="200" />
                     <h3><?php echo $first_internship['country']; ?></h3>
                     <h4><?php echo $first_internship['place']; ?></h4>
                     <div class="red-divider"></div>
                     <p><?php echo $first_internship['certificate']; ?></p>
                     <h6><?php echo $first_internship['sponsor']; ?></h6>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="internship-block">
                     <h5><?php echo $second_internship['period']; ?></h5>
                     <img src="<?php echo $second_internship['place_image']; ?>" alt="Warsaw" height="150" width="200" />
                     <h3><?php echo $second_internship['country']; ?></h3>
                     <h4><?php echo $second_internship['place']; ?></h4>
                     <div class="red-divider"></div>
                     <p><?php echo $second_internship['certificate']; ?></p>
                     <h6><?php echo $second_internship['sponsor'] ?></h6>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <?php 
      endif;

      $professional_experience = get_field('expeirience');

      if($professional_experience) :
         $section_title = $professional_experience['section_title'];
      ?>
      <section id="experience">
         <div class="container"></div>
         <div class="white-divider"></div>
         <div class="heading">
            <h2><?php echo $professional_experience['section_title']; ?></h2>
         </div>
         <ul class="timeline">
            <?php $first_experience = $professional_experience['first_experience'];
            
            if($first_experience) :
            ?>
            <li>
               <div class="timeline-badge"><span class="glyphicon glyphicon-briefcase gauche"></span></div>
               <div class="timeline-panel-container-inverted">
                  <div class="timeline-panel">
                     <div class="timeline-heading">
                        <h3><?php echo $first_experience['job_title']; ?></h3>
                        <h4>
                           <a href="<?php echo $first_experience['company_website']; ?>"><?php echo $first_experience['company']; ?></a>
                        </h4>
                        <p class="textt">
                           <small class="glyphicon glyphicon-time"></small> <?php echo $first_experience['experience_period']; ?>, <?php echo $first_experience['experience_place']; ?>
                        </p>
                     </div>
                     <div class="timeline-body">
                        <h5>Project(s)</h5>
                        <p>
                           <a href="<?php echo $first_experience['project_link']; ?>"><?php echo $first_experience['project']; ?></a>
                        </p>
                        <h5>Task(s)</h5>
                        <?php echo $first_experience['tasks']; ?>
                     </div>
                  </div>
               </div>
            </li>
               <?php endif; 
               
               $second_experience = $professional_experience['second_experience'];

               if($second_experience) :
               ?>

            <li>
               <div class="timeline-badge"><span class="glyphicon glyphicon-briefcase gauche"></span></div>
               <div class="timeline-panel-container">
                  <div class="timeline-panel">
                     <div class="timeline-heading">
                        <h3><?php echo $second_experience['job_title']; ?></h3>
                        <h4>
                           <a href="<?php echo $second_experience['company_website']; ?>" alt="" style="text-decoration: none"><?php echo $second_experience['company']; ?></a>
                        </h4>
                        <p class="textt">
                           <small class="glyphicon glyphicon-time"></small> <?php echo $second_experience['experience_period']; ?>, <?php echo $second_experience['experience_place']; ?>
                        </p>
                     </div>
                     <div class="timeline-body">
                        <h5>Project(s)</h5>
                        <p>
                           -
                           <a href="<?php echo $second_experience['project_link']; ?>"><?php echo $second_experience['project']; ?></a>.
                        </p>
                        <h5>Task(s)</h5>
                        <?php echo $second_experience['tasks']; ?>
                     </div>
                  </div>
               </div>
            </li>

            <?php 
            endif;

            $third_experience = $professional_experience['third_experience'];

            if($third_experience) :
            ?>

            <li>
               <div class="timeline-badge"><span class="glyphicon glyphicon-briefcase gauche"></span></div>
               <div class="timeline-panel-container-inverted">
                  <div class="timeline-panel">
                     <div class="timeline-heading">
                        <h3><?php echo $third_experience['job_title']; ?></h3>
                        <h4><a href="<?php echo $third_experience['company_website']; ?>"><?php echo $third_experience['company']; ?></a></h4>
                        <p class="textt">
                           <small class="glyphicon glyphicon-time"></small> <?php echo $third_experience['experience_period']; ?>, <?php echo $third_experience['experience_place']; ?>
                        </p>
                     </div>
                     <div class="timeline-body">
                        <h5>Project(s)</h5>
                        <p>
                           <a href="<?php echo $third_experience['project_link']; ?>"><?php echo $third_experience['project']; ?></a>
                        </p>
                        <h5>Task(s)</h5>
                        <?php echo $third_experience['tasks']; ?>
                     </div>
                  </div>
               </div>
            </li>
            <?php 
            endif;
            ?>
         </ul>
      </section>
      <?php 
      endif;
      ?>

      <section id="education">
         <div class="container">
            <div class="red-divider"></div>
            <div class="heading"><h2>Education</h2></div>

            <div class="row">
               <div class="col-sm-4">
                  <div class="education-block">
                     <h5>2018-2022</h5>
                     <span class="glyphicon glyphicon-education"></span>
                     <h3>Harvard University</h3>
                     <h4>Bachelor of Software Engineering</h4>
                     <div class="red-divider"></div>
                     <p>
                        • Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                        been the industry's standard dummy text ever since the 1500s...
                     </p>
                  </div>
               </div>

               <div class="col-sm-4">
                  <div class="education-block">
                     <h5>2022-2024</h5>
                     <span class="glyphicon glyphicon-education"></span>
                     <h3>Harvard University</h3>
                     <h4>Master of Artificial Intelligence</h4>
                     <div class="red-divider"></div>
                     <p>
                        • Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                        been the industry's standard dummy text ever since the 1500s...
                     </p>
                  </div>
               </div>

               <div class="col-sm-4">
                  <div class="education-block">
                     <h5>2023-2024</h5>
                     <span class="glyphicon glyphicon-education"></span>
                     <h3>Toronto University</h3>
                     <br />
                     <h4>MBA diploma</h4>
                     <div class="red-divider"></div>
                     <p>
                        • Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                        been the industry's standard dummy text ever since the 1500s...
                     </p>
                  </div>
               </div>
            </div>

           </div>
         </div>
      </section>

      <section id="portfolio">
         <div class="container">
            <div class="white-divider"></div>
            <div class="heading">
               <h2>Portfolio</h2>
            </div>

            <div class="row">
                <div class="col-sm-4">
                    <a
                       class="thumbnail"
                       href="https://www.youtube.com/"
                       target="_blank"
                       alt="Food Recipe"
                       ><img src="images/Forkify.png" style="width: 600px; height: 260px"
                    /></a>
                 </div>
               <div class="col-sm-4">
                  <a class="thumbnail" href="http://test.com/" target="_blank" alt="Auxilium"
                     ><img src="images/auxilium.png" style="width: 600px; height: 260px"
                  /></a>
               </div>
               <div class="col-sm-4">
                <a class="thumbnail" href="http://yahoo.com/" target="_blank" alt="Mobilmed"
                   ><img src="images/mobilmed.png" style="width: 600px; height: 260px"
                /></a>
             </div>
            </div>
         </div>
      </section>

      <section id="testimonials" style="background: #333">
         <div class="container">
            <div class="white-divider"></div>
            <div class="heading">
               <h2><span style="color: #fff">TESTIMONIALS</span></h2>
            </div>
            <div class="row">
               <div class="col-sm-12">
                  <div id="carousel-testimonials" class="carousel slide" data-ride="carousel">
                     <ol class="carousel-indicators cr">
                        <li data-target="#carousel-testimonials" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-testimonials" data-slide-to="1"></li>
                        <li data-target="#carousel-testimonials" data-slide-to="2"></li>
                     </ol>

                     <div class="carousel-inner">
                        <div class="item active text-center">
                           <img src="images/portrait_1-scaled.jpg" class="center-block" alt="Lorem Ipsum" />
                           <h2 style="color: white">Lorem Ipsum</h2>
                           <h4 style="color: #c0c0c0">Software Developer at Yahoo</h4>

                           <blockquote class="blockquote">
                              <span class="bubble"><img src="<?php bloginfo('template_directory'); ?>/images/bubble.png" /></span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                           </blockquote>
                        </div>
                        <div class="item text-center">
                           <img src="images/jake-nackos-IF9TK5Uy-KI-unsplash-scaled.jpg" class="center-block" alt="Lorem Ipsum" />
                           <h2 style="color: white">Lorem Ipsum</h2>
                           <h4 style="color: #c0c0c0">Project Manager at Google</h4>

                           <blockquote class="blockquote">
                              <span class="bubble"><img src="<?php bloginfo('template_directory'); ?>/images/bubble.png" /></span> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                           </blockquote>
                        </div>
                        <div class="item text-center">
                           <img src="images/joseph-gonzalez-iFgRcqHznqg-unsplash-scaled.jpg" class="center-block" alt="Lorem Ipsum" />
                           <h2 style="color: white">Lorem Ipsum</h2>
                           <h4 style="color: #c0c0c0">Senior Director at Linkedin</h4>

                           <blockquote class="blockquote">
                              <span class="bubble"><img src="<?php bloginfo('template_directory'); ?>/images/bubble.png" /></span> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                           </blockquote>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>

      <section id="motivation">
         <div class="container">
            <div class="red-divider"></div>
            <div class="heading"><h2>Motivation</h2></div>
            <div id="monCarousel" class="carousel slide text-center" data-ride="carousel">
               <ol class="carousel-indicators">
                  <li data-target="#monCarousel" data-slide-to="0"></li>
                  <li data-target="#monCarousel" data-slide-to="1" class="active"></li>
                  <li data-target="#monCarousel" data-slide-to="2"></li>
               </ol>
               <div class="carousel-inner" role="listbox">
                  <div class="item active">
                     <h3>
                        "Exploration is really the essence of the human spirit."
                     </h3>
                     <h4>Exploration</h4>
                  </div>
                  <div class="item">
                     <h3>"Changes call for innovation, and innovation leads to progress."</h3>
                     <h4>Innovation</h4>
                  </div>
                  <div class="item">
                     <h3>"Research is creating new knowledge."</h3>
                     <h4>Research</h4>
                  </div>
               </div>

               <a href="#monCarousel" class="left carousel-control" role="button" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left"></span>
               </a>
               <a href="#monCarousel" class="right carousel-control" role="button" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right"></span>
               </a>
            </div>
         </div>
      </section>

<?php get_footer(); ?>