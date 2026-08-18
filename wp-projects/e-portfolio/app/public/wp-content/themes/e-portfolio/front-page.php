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

      $education = get_field('education');
         if($education) :
      ?>

      <section id="education">
         <div class="container">
            <div class="red-divider"></div>
            <div class="heading"><h2><?php echo $education['section_title']; ?></h2></div>

            <div class="row">
               <?php $first_education = $education['first_education']; 
                  if($first_education) :
               ?>
               <div class="col-sm-4">
                  <div class="education-block">
                     <h5><?php echo $first_education['period']; ?></h5>
                     <span class="glyphicon glyphicon-education"></span>
                     <h3><?php echo $first_education['university']; ?></h3>
                     <h4><?php echo $first_education['diploma']; ?></h4>
                     <div class="red-divider"></div>
                     <p>
                        <?php echo $first_education['thesis']; ?>
                     </p>
                  </div>
               </div>
               <?php 
                  endif;
               ?>

               <div class="col-sm-4">
                  <?php  $second_education = $education['second_education']; 
                     if($second_education) :
                  ?>
                  <div class="education-block">
                     <h5><?php echo $second_education['period']; ?></h5>
                     <span class="glyphicon glyphicon-education"></span>
                     <h3><?php echo $second_education['university']; ?></h3>
                     <h4><?php echo $second_education['diploma']; ?></h4>
                     <div class="red-divider"></div>
                     <p>
                      <?php echo $second_education['thesis']; ?>
                     </p>
                  </div>
               </div>
               <?php 
                  endif;
               ?>

               <div class="col-sm-4">
                  <?php $third_education = $education['third_education']; 
                     if($third_education) :
                  ?>
                  <div class="education-block">
                     <h5><?php echo $third_education['period']; ?></h5>
                     <span class="glyphicon glyphicon-education"></span>
                     <h3><?php echo $third_education['university']; ?></h3>
                     <br />
                     <h4><?php echo $third_education['diploma']; ?></h4>
                     <div class="red-divider"></div>
                     <p>
                        <?php echo $third_education['thesis']; ?>
                     </p>
                  </div>
               </div>
               <?php 
                  endif;
               ?>
            </div>

           </div>
         </div>
      </section>

      <?php 
      endif;

      $portfolio = get_field('portfolio');
      if($portfolio) :
      ?>

      <section id="portfolio">
         <div class="container">
            <div class="white-divider"></div>
            <div class="heading">
               <h2><?php echo $portfolio['section_title']; ?></h2>
            </div>

            <div class="row">
                <div class="col-sm-4">
                  <?php 
                     $first_showcase = $portfolio['first_showcase'];
                     if($first_showcase) :
                  ?>
                    <a
                       class="thumbnail"
                       href="<?php echo $first_showcase['showcase_link']; ?>"
                       target="_blank"
                       alt="Food Recipe"
                       ><img src="<?php echo $first_showcase['showcase_image']; ?>" style="width: 600px; height: 260px"
                    /></a>
                 </div>
                 <?php 
                     endif;
                 ?>
               <div class="col-sm-4">
                  <?php 
                     $second_showcase = $portfolio['second_showcase'];
                     if($second_showcase) :
                  ?>
                  <a class="thumbnail" href="<?php echo $second_showcase['showcase_link']; ?>" target="_blank" alt="Auxilium"
                     ><img src="<?php echo $second_showcase['showcase_image']; ?>" style="width: 600px; height: 260px"
                  /></a>
               </div>
               <?php 
                  endif;
               ?>
               <div class="col-sm-4">
                  <?php $third_showcase = $portfolio['third_showcase'];
                     if($third_showcase) :
                  ?>
                <a class="thumbnail" href="<?php echo $third_showcase['showcase_link']; ?>" target="_blank" alt="Mobilmed"
                   ><img src="<?php echo $third_showcase['showcase_image']; ?>" style="width: 600px; height: 260px"
                /></a>
             </div>
             <?php 
               endif;
             ?>
            </div>
         </div>
      </section>
         <?php 
            endif;
            // Custom query to get posts from the custom post type 'testimonial'
            $args = array(
               'post_type' => 'testimonial',
               'posts_per_page' => 3 // Number of items to retrieve
            );
            $custom_query = new WP_Query($args); // Execute the quey
         ?>
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
                        <?php 
                        if($custom_query->have_posts()): 
                           $count = 0;
                        while($custom_query->have_posts()) : $custom_query->the_post();
                           ?>
                        <li data-target="#carousel-testimonials" data-slide-to="<?php echo $count; ?>" class="<?php echo ($count == 0) ? 'active' : ''; ?>"></li>
                        <?php
                        $count ++;
                        endwhile;
                        wp_reset_postdata(); //Reset the query 
                        endif; 
                        ?>
                     </ol>

                     <div class="carousel-inner">
                        <?php 
                        if($custom_query->have_posts()) : $count = 0;
                        while($custom_query->have_posts()) : $custom_query->the_post();
                        ?>
                        <div class="item <?php echo ($count == 0) ? 'active' : ''; ?> text-center">
                           <?php 
                           $testimonial = get_field('testimonial');
                           $portrait = $testimonial['portrait'];
                           $name = $testimonial['name'];
                           $position = $testimonial['position'];
                           $quote = $testimonial['quote'];
                           ?>
                           <?php if($portrait): ?>
                           <img src="<?php echo $portrait; ?>" class="center-block" alt="Lorem Ipsum" />
                           <?php
                           endif;
                           if($name) :
                           ?>
                           <h2 style="color: white"><?php echo $name; ?></h2>
                           <?php 
                           endif; 
                           if($position) :
                           ?>
                           <h4 style="color: #c0c0c0"><?php echo $position; ?></h4>
                           <?php 
                           endif;
                           if($quote) :
                           ?>

                           <blockquote class="blockquote">
                              <span class="bubble"><img src="<?php bloginfo('template_directory'); ?>/images/bubble.png" /></span><?php echo $quote; ?>
                           </blockquote>
                           <?php endif; ?>
                        </div>
                        <?php
                        $count++; 
                        endwhile;
                        wp_reset_postdata(); // Reset the query
                        endif;
                        ?>
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