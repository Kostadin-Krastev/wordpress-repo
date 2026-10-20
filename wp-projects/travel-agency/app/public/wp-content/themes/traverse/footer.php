<footer class="footerWideScreen">
    <div class="row widgets">
      <div class="myWidget col-lg-4 col-md-4 col-sm-4">
       <?php 
          if(is_active_sidebar('footer_1')) :
            dynamic_sidebar('footer_1');
          endif;
       ?>
      </div>
      <div class="myWidget col-lg-4 col-md-4 col-sm-4">
        <?php 
          if(is_active_sidebar('footer_2')) :
            dynamic_sidebar('footer_2');
          endif;
        ?>
      </div>
      <div class="myWidget col-lg-4 col-md-4 col-sm-4">
        <h4>Destinations</h4>
        <ul>
          <li>
            <a href="#">Lorem Ipsum</a>
          </li>
          <li>
            <a href="#">Lorem Ipsum</a>
          </li>
          <li>
            <a href="#">Lorem Ipsum</a>
          </li>
        </ul>
      </div>
    </div>
    <div class="copyright">
      <div class="traverse">
        <p>Created By</p>
        <img loading="lazy"
          src="assets/images/logo.png"
          width="120" height="28" />
      </div>
      <div class="copyrightText">
        <p>Copyright © 2024 Traverse. Your Travel Guide. | <a href="privacy-policy.html"
            target="_blank">Privacy Policy</a></p>
      </div>
    </div>
  </footer>

  <footer class="footerMobileScreen">
    <div class="widgets">
      <div class="myWidget">
          <?php 
          if(is_active_sidebar('footer_1')) :
            dynamic_sidebar('footer_1');
          endif;
       ?>
      </div>
      <div class="myWidget">
        <?php 
          if(is_active_sidebar('footer_2')) :
            dynamic_sidebar('footer_2');
          endif;
        ?>
      </div>
      <div class="myWidget">
        <h4>Destinations</h4>
        <ul>
          <li>
            <a href="#">Lorem Ipsum</a>
          </li>
          <li>
            <a href="#">Lorem Ipsum</a>
          </li>
          <li>
            <a href="#">Lorem Ipsum</a>
          </li>
        </ul>
      </div>
    </div>
    <div class="copyright">
      <div class="traverse">
        <p>Created By</p>
        <img loading="lazy"
          src="assets/images/logo.png"
          width="120" height="28" />
      </div>
      <div class="copyrightText">
        <p>Copyright © 2024 Traverse. Your Travel Guide. | <a href="privacy-policy.html"
            target="_blank">Privacy Policy</a></p>
      </div>
    </div>
  </footer>
  <?php wp_footer() ?>
</body>

</html>