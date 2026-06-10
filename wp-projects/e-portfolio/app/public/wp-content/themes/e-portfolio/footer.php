 <footer class="text-center">
   <?php $theme_color = get_field('theme_color'); ?>
         <a href="#about">
            <span class="glyphicon glyphicon-chevron-up"></span>
         </a>
         <h5>© Online CV 2024<br /><br />Developped by <font color="<?php 
         if($theme_color) : echo $theme_color; ?>">ME</font></h5>
         <?php endif; ?>
      </footer>
      <?php
      wp_footer(); 
       ?>
   </body>
</html>