<style>
  .notification-top-bar p {
  padding: 0;
  margin: 0;
}

.notification-top-bar {
  padding: 20px 0;
  margin: 0;
  background: #AABBCC;
}


.notification-top-bar p a {
  padding: 5px 20px;
  /* border-radius: 3px; */
  /* background: #FFF; */
  /* color: #1ABC9C; */
  font-weight: bold;
  text-decoration: none;
  font-size: 18px;
  
}

.notification-top-bar .container{
  display: flex;
  flex-direction: row;
  justify-content: space-evenly;
  align-items: center;
}

@media (max-width: 1000px) {
  .notification-top-bar p a {
    padding: 0;
  }

  .notification-top-bar .container img {
    width: 160px;
  }
}

@media (max-width: 600px) {
  .notification-top-bar .container {
    display: block;
  }
}
</style>

<div class="notification-top-bar">
  <div class="container">
  <p>
    <image src="<?=the_field('developed_by_comapany_logo', 'option');?>"></image>
  </p >
  <p ><?=the_field('developed_by', 'option');?></p>
  </div>
</div>

<footer class="site-footer">
  <div class="pbmit-footer-big-area-wrapper">
    <div class="footer-wrap pbmit-footer-big-area">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-xl-4"></div>
          <div class="col-md-12 col-xl-8 pbmit-footer-right">
            <h3 class="pbmit-title">
              <?php echo get_field('footer_text', 'option') ?>
            </h3>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="pbmit-footer-widget-area">
    <div class="container">
      <div class="row">
        <div class="pbmit-footer-widget-col-1 col-md-6 col-lg-3">
          <aside class="widget widget_text">
            <div class="textwidget">
              <div class="pbmit-footer-logo">
                <a href="<?php echo esc_url(home_url('/')); ?>">
                  <?php
                  $footer_logo = get_field('footer_logo', 'option');
                  $footer_logo_url = $footer_logo['url'];
                  $footer_logo_alt = $footer_logo['alt'];
                  ?>
                  <img class="pbmit-sticky-logo" src="<?php echo esc_url($footer_logo_url); ?>" alt="<?php echo esc_attr($footer_logo_alt); ?>" />
                </a>
              </div>
              <div class="pbmit-footer-text">
                <?php echo get_field('social_text', 'option'); ?>
              </div>
              <ul class="pbmit-social-links">
                <li class="pbmit-social-li pbmit-social-facebook">
                  <a title="Facebook" href="<?php echo get_field('facebook_link', 'option') ?>" target="_blank" rel="noopener">
                    <span><i class="pbmit-base-icon-facebook-f"></i></span>
                  </a>
                </li>
                <!-- <li class="pbmit-social-li pbmit-social-twitter">
                        <a
                          title="Twitter"
                          href="<?php //echo get_field('twitter_link','option') 
                                ?>"
                          target="_blank"
                          rel="noopener"
                        >
                          <span><i class="pbmit-base-icon-twitter-2"></i></span>
                        </a>
                      </li> -->
                <!-- <li class="pbmit-social-li pbmit-social-linkedin">
                        <a
                          title="LinkedIn"
                          href="<?php //echo get_field('linkedin_link','option') 
                                ?>"
                          target="_blank"
                          rel="noopener"
                        >
                          <span
                            ><i class="pbmit-base-icon-linkedin-in"></i
                          ></span>
                        </a>
                      </li> -->
                <li class="pbmit-social-li pbmit-social-instagram">
                  <a title="Instagram" href="<?php echo get_field('insta_link', 'option') ?>" target="_blank" rel="noopener">
                    <span><i class="pbmit-base-icon-instagram"></i></span>
                  </a>
                </li>
              </ul>
            </div>
          </aside>
        </div>
        <div class="pbmit-footer-widget-col-2 col-md-6 col-lg-3">
          <div class="widget">
            <h2 class="widget-title">Information</h2>
            <div class="textwidget">
              <?php
              wp_nav_menu(array(
                'theme_location' => 'footer-menu',
                'container' => 'ul',
                'menu_class' => 'footer-menu',
              ));
              ?>
            </div>
          </div>
        </div>
        <div class="pbmit-footer-widget-col-3 col-md-6 col-lg-3">
          <div class="widget">
            <h2 class="widget-title">Working Time</h2>
            <?php if (have_rows('opening_hours', 'option')) : ?>
              <div class="pbmit-timelist-wrapper">
                <ul class="pbmit-timelist-list">
                  <?php while (have_rows('opening_hours', 'option')) : the_row(); ?>
                    <li>
                      <span class="pbmit-timelist-li-title">
                        <?php the_sub_field('day_time'); ?>
                      </span>
                    </li>
                  <?php endwhile; ?>
                </ul>
              </div>
            <?php endif; ?>
          </div>
        </div>
        <div class="pbmit-footer-widget-col-4 col-md-6 col-lg-3">
          <aside class="widget">
            <h2 class="widget-title">Our address</h2>
            <div class="pbmit-contact-widget-line pbmit-contact-widget-address">
              <?php echo get_field('our_adress', 'option') ?>
            </div>
          </aside>
        </div>
      </div>
    </div>
  </div>
  <div class="pbmit-footer-text-area">
    <div class="container">
      <div class="pbmit-footer-text-inner">
        <div class="row">
          <div class="col-md-12">
            <div class="pbmit-footer-copyright-text-area">
              Copyright © <?php echo date('Y'); ?> All rights reserved by Dr. Arup Chattopadhyay Dental Clinic | Designed and Developed by<a href="https://www.artemisys.com/" target="_blank"> Artemisys</a>

            </div>

          </div>
          <div class="col-md-6">
            <?php
            //wp_nav_menu( array(
            //'theme_location' => 'secondery-menu',
            //'container' => 'ul',
            //'menu_class' => 'pbmit-footer-menu',
            //) );
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
<!-- footer End -->
</div>
<!-- page wrapper End -->

<!-- Search Box Start Here -->
<div class="pbmit-search-overlay">
  <div class="pbmit-icon-close">
    <svg class="qodef-svg--close qodef-m" xmlns="http://www.w3.org/2000/svg" width="28.163" height="28.163" viewBox="0 0 26.163 26.163">
      <rect width="36" height="1" transform="translate(0.707) rotate(45)"></rect>
      <rect width="36" height="1" transform="translate(0 25.456) rotate(-45)"></rect>
    </svg>
  </div>
  <div class="pbmit-search-outer">
    <?php get_search_form(); ?>
  </div>
</div>
<!-- Search Box End Here -->

<!-- Scroll To Top -->
<div class="pbmit-progress-wrap">
  <svg class="pbmit-progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
    <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"></path>
  </svg>
</div>
<!-- Scroll To Top End -->

<!-- JS
		============================================ -->
<!-- jQuery JS -->
<!-- <script>
    jQuery(document).ready(function($) {
    $('.pbmit-icon-close').click(function() {
        $('.pbmit-search-overlay').hide();
    });

    // Add other necessary JavaScript for opening/closing the search overlay
});
</script> -->
<Script>
  $(document).ready(function() {
    $("#close-btn").click(function() {
      // remove active class from all images
      $(".small-image").removeClass("active");
      $("body").removeClass("active-overlay relative");
      $("#show_image_popup").slideUp();
    });

    $(".small-image").click(function() {
      $(".small-image").removeClass("active");
      $(this).addClass("active");

      $("body").addClass("active-overlay relative");
      $(".small-image").removeClass("active-overlay relative");

      var image_path = $(this).attr("src");
      $("#show_image_popup").fadeOut();
      $("#show_image_popup").fadeIn();
      $("#large-image").attr("src", image_path);
    });
  });
</Script>




<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/js/all.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
<!-- jquery Waypoints JS -->
<!-- Scripts JS -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/custom_js/scripts.js"></script>

<script>
  $(document).ready(function() {
    $('#phone').on('keypress', function(e) {
      var phone = $(this).val();

      // Allow only numbers
      if (e.which < 48 || e.which > 57) {
        e.preventDefault();
      }

      // Limit to 10 digits
      if (phone.length >= 10) {
        e.preventDefault();
      }
    });

    $('#name').on('keypress', function(e) {
      var currentValue = $(this).val();
      var charCode = e.which || e.keyCode;

      // Check if the pressed key is a letter (A-Z or a-z)
      if ((charCode >= 65 && charCode <= 90) || (charCode >= 97 && charCode <= 122)) {
        // Letters are allowed
      } else if (charCode === 32 && currentValue.length > 0 && currentValue.trim().length > 0) {
        // Allow space only if there's at least one letter
      } else {
        e.preventDefault(); // Prevent non-letter characters and improper space usage
      }
    });
  });
</script>

<script>
  window.onload = function() {
    console.log('loaded');
    var phoneField = document.getElementById('fieldname3_1');
    var nameField = document.getElementById('fieldname2_1');
    var emailField = document.getElementById('fieldname4_1');


    phoneField.addEventListener('keypress', function(e) {
      var phone = phoneField.value;

      // Allow only numbers
      if (e.which < 48 || e.which > 57) {
        e.preventDefault();
      }

      // Limit to 10 digits
      if (phone.length >= 10) {
        e.preventDefault();
      }
    });

    nameField.addEventListener('keypress', function(e) {
      var currentValue = nameField.value;
      var charCode = e.which || e.keyCode;

      // Check if the pressed key is a letter (A-Z or a-z)
      if ((charCode >= 65 && charCode <= 90) || (charCode >= 97 && charCode <= 122)) {
        // Letters are allowed
      } else if (charCode === 32 && currentValue.length > 0 && currentValue.trim().length > 0) {
        // Allow space only if there's at least one letter
      } else {
        e.preventDefault(); // Prevent non-letter characters and improper space usage
      }
    });

    emailField.addEventListener('keypress', function(e) {
      var currentValue = emailField.value;
      var charCode = e.which || e.keyCode;

      // Check if the pressed key is a letter (A-Z or a-z)
      if (charCode === 32) {
        e.preventDefault();
      } 
    });
  };
</script>

<script>
  Fancybox.bind("[data-fancybox]", {});  
</script>



<?php wp_footer(); ?>
</body>

</html>