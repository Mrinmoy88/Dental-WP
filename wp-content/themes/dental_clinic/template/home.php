<?php
/*
Template Name: Home
*/
get_header();
?>


<!-- page content -->
<div class="page-content">
  <!-- Hero Banner -->
  <section class="hero_banner">
    <div class="pbmit-slider-social">
      <a title="Facebook" href="<?php echo get_field('facebook_link') ?>" target="_blank">
        <span><i class="pbmit-base-icon-facebook-f"></i></span>
      </a>
      <!-- <a title="Twitter" href="<?php //echo get_field('twitter_link') 
                                    ?>" target="_blank">
                <span><i class="pbmit-base-icon-twitter-2"></i></span>
            </a> -->
      <!-- <a title="LinkedIn" href="<?php //echo get_field('linkedin_link') 
                                      ?>" target="_blank">
                <span><i class="pbmit-base-icon-linkedin-in"></i></span>
            </a> -->
      <a title="Instagram" href="<?php echo get_field('insta_link') ?>" target="_blank">
        <span><i class="pbmit-base-icon-instagram"></i></span>
      </a>
    </div>
    <div class="pbmit-slider-area pbmit-slider-one">
      <div class="swiper-slider" data-autoplay="true" data-loop="true" data-dots="true" data-arrows="false" data-columns="1" data-margin="0" data-effect="fade">
        <div class="swiper-wrapper">
          <?php if (have_rows('slides')) : ?>
            <?php while (have_rows('slides')) :
              the_row();
              $background_image = get_sub_field('background_image');
              $sub_title = get_sub_field('sub_title');
              $title = get_sub_field('title');
              $title_strong = get_sub_field('title_strong');
              $read_more_link = get_sub_field('read_more_link');
              $contact_us_link = get_sub_field('contact_us_link');
            ?>
              <div class="swiper-slide">
                <div class="pbmit-slider-item">
                  <div class="pbmit-slider-bg" style="background-image: url('<?php echo $background_image['url']; ?>');">
                  </div>
                  <div class="container">
                    <div class="row text-center">
                      <div class="col-md-12">
                        <div class="pbmit-slider-content">
                          <h5 class="pbmit-sub-title transform-top transform-delay-1"><?php echo $sub_title; ?></h5>
                          <h2 class="pbmit-title transform-bottom transform-delay-2">
                            <?php echo $title; ?><br /><strong><?php echo $title_strong; ?></strong></h2>
                          <div class="pbmit-button transform-bottom transform-delay-3">
                            <a class="pbmit-btn pbmit-btn-outline" href="<?php echo $read_more_link; ?>" target="_blank">
                              <span class="pbmit-button-content-wrapper">
                                <span class="pbmit-button-icon pbmit-align-icon-right">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="22.76" height="22.76" viewBox="0 0 22.76 22.76">
                                    <title>black-arrow</title>
                                    <path d="M22.34,1A14.67,14.67,0,0,1,12,5.3,14.6,14.6,0,0,1,6.08,4.06,14.68,14.68,0,0,1,1.59,1" transform="translate(-0.29 -0.29)" fill="none" stroke="#000" stroke-width="2"></path>
                                    <path d="M22.34,1a14.67,14.67,0,0,0,0,20.75" transform="translate(-0.29 -0.29)" fill="none" stroke="#000" stroke-width="2"></path>
                                    <path d="M22.34,1,1,22.34" transform="translate(-0.29 -0.29)" fill="none" stroke="#000" stroke-width="2"></path>
                                  </svg>
                                </span>
                                <span class="pbmit-button-text">read more</span>
                              </span>
                            </a>
                            <a class="pbmit-btn" href="<?php echo $contact_us_link; ?>" target="_blank">
                              <span class="pbmit-button-content-wrapper">
                                <span class="pbmit-button-icon pbmit-align-icon-right">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="22.76" height="22.76" viewBox="0 0 22.76 22.76">
                                    <title>black-arrow</title>
                                    <path d="M22.34,1A14.67,14.67,0,0,1,12,5.3,14.6,14.6,0,0,1,6.08,4.06,14.68,14.68,0,0,1,1.59,1" transform="translate(-0.29 -0.29)" fill="none" stroke="#000" stroke-width="2"></path>
                                    <path d="M22.34,1a14.67,14.67,0,0,0,0,20.75" transform="translate(-0.29 -0.29)" fill="none" stroke="#000" stroke-width="2"></path>
                                    <path d="M22.34,1,1,22.34" transform="translate(-0.29 -0.29)" fill="none" stroke="#000" stroke-width="2"></path>
                                  </svg>
                                </span>
                                <span class="pbmit-button-text">contact us</span>
                              </span>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            <?php endwhile; ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </section>
  <!-- Hero Banner End -->



  <!-- Inner Box Start -->
  <section class="section-xl inner-box_area">
    <div class="container">
      <div class="row">
        <?php
        // Assuming you have already fetched the ACF fields data for this specific post/page
        // Replace 'get_field' with the appropriate ACF function if using within the WordPress Loop
        $schedule_hours = get_field('schedule_hours');
        $timelist_items = get_field('timelist_items');
        ?>

        <div class="col-md-6 col-lg-4 position-relative">
          <div class="pbmit-widget_icon">
            <div class="pbmit_icon">
              <i class="pbmit-xcare-icon pbmit-xcare-icon-appointment"></i>
            </div>
          </div>
          <div class="inner-box_style inner-box_1">
            <div class="pbmit-heading_title">
              <h5><?php echo esc_html($schedule_hours); ?></h5>
            </div>
            <ul class="pbmit-timelist-list">
              <?php foreach ($timelist_items as $item) : ?>
                <li>
                  <span class="pbmit-timelist-li-title"><?php echo esc_html($item['day']); ?></span>
                  <span class="pbmit-timelist-li-value"><?php echo esc_html($item['hours']); ?></span>
                </li>
              <?php endforeach; ?>
            </ul>
          </div>
        </div>
        <?php
        // Assuming you have already fetched the ACF fields data for this specific post/page
        // Replace 'get_field' with the appropriate ACF function if using within the WordPress Loop
        $location_title = get_field('location_title');
        $location_description = get_field('location_description');
        $button_text = get_field('button_text');
        $button_link = get_field('button_link');
        ?>

        <div class="col-md-6 col-lg-4 position-relative">
          <div class="pbmit-widget_icon">
            <div class="pbmit_icon">
              <i class="pbmit-xcare-icon pbmit-xcare-icon-placeholder"></i>
            </div>
          </div>
          <div class="inner-box_style inner-box_2">
            <div class="pbmit-heading_title">
              <h5><?php echo esc_html($location_title); ?></h5>
            </div>
            <div class="pbmit-text_aditor">
              <?php echo esc_html($location_description); ?>
            </div>
            <a class="pbmit-btn pbmit-btn-outline" href="<?php echo esc_url($button_link); ?>" target="_blank">
              <span class="pbmit-button-content-wrapper">
                <span class="pbmit-button-icon pbmit-align-icon-right">
                  <svg xmlns="http://www.w3.org/2000/svg" width="22.76" height="22.76" viewBox="0 0 22.76 22.76">
                    <title>black-arrow</title>
                    <path d="M22.34,1A14.67,14.67,0,0,1,12,5.3,14.6,14.6,0,0,1,6.08,4.06,14.68,14.68,0,0,1,1.59,1" transform="translate(-0.29 -0.29)" fill="none" stroke="#000" stroke-width="2"></path>
                    <path d="M22.34,1a14.67,14.67,0,0,0,0,20.75" transform="translate(-0.29 -0.29)" fill="none" stroke="#000" stroke-width="2"></path>
                    <path d="M22.34,1,1,22.34" transform="translate(-0.29 -0.29)" fill="none" stroke="#000" stroke-width="2"></path>
                  </svg>
                </span>
                <span class="pbmit-button-text"><?php echo esc_html($button_text); ?></span>
              </span>
            </a>
          </div>
        </div>

        <?php
        // Assuming you have already fetched the ACF fields data for this specific post/page
        // Replace 'get_field' with the appropriate ACF function if using within the WordPress Loop
        $call_title = get_field('call_title');
        $call_description = get_field('call_description');
        $emergency_cases_heading = get_field('emergency_cases_heading');
        $emergency_cases_number = get_field('emergency_cases_number');
        ?>

        <div class="col-md-6 col-lg-4 position-relative">
          <div class="pbmit-widget_icon">
            <div class="pbmit_icon">
              <i class="pbmit-xcare-icon pbmit-xcare-icon-doctor"></i>
            </div>
          </div>
          <div class="inner-box_style inner-box_3">
            <div class="pbmit-bg_overlay"></div>
            <div class="pbmit-heading_title">
              <h5><?php echo esc_html($call_title); ?></h5>
            </div>
            <div class="pbmit-text_aditor">
              <?php echo esc_html($call_description); ?>
            </div>
            <div class="pbmit-ihbox-style-19">
              <div class="pbmit-ihbox-box">
                <div class="pbmit-ihbox-icon">
                  <div class="pbmit-ihbox-icon-wrapper">
                    <div class="pbmit-icon-wrapper pbmit-icon-type-icon">
                      <i class="pbmit-xcare-icon pbmit-xcare-icon-live-chat"></i>
                    </div>
                  </div>
                </div>
                <div class="pbmit-ihbox-contents">
                  <h4 class="pbmit-element-heading"><?php echo esc_html($emergency_cases_heading); ?></h4>
                  <a href="tel:<?php echo get_field('emergency_cases_number') ?>">
                    <h2 class="pbmit-element-title"><?php echo esc_html($emergency_cases_number); ?></h2>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
  <!-- Inner Box end -->

  <!-- About Us Start -->
  <?php
  // Assuming you have already fetched the ACF fields data for this specific post/page
  // Replace 'get_field' with the appropriate ACF function if using within the WordPress Loop
  $about_us_subtitle = get_field('about_us_subtitle');
  $about_us_title = get_field('about_us_title');
  $about_us_description = get_field('about_us_description');
  $infection_prevention_title = get_field('infection_prevention_title');
  $infection_prevention_description = get_field('infection_prevention_description');
  $preventive_care_title = get_field('preventive_care_title');
  $preventive_care_description = get_field('preventive_care_description');
  $cardio_oncology_progress = get_field('cardio_oncology_progress');
  $heart_surgery_progress = get_field('heart_surgery_progress');
  $about_us_image = get_field('about_us_image');
  $about_image = get_field('about_image'); // ACF image field
  ?>

  <section class="about-us-section_two">
    <div class="container">
      <div class="pbmit-sticky-special pbmit-bg-color-white">
        <div class="row">
          <div class="col-md-5 about-us-two_col1">
            <div class="about-us-two_img">
              <img src="<?php echo esc_url($about_us_image['url']); ?>" class="img-fluid" alt="<?php echo esc_attr($about_us_image['alt']); ?>" />
            </div>
          </div>
          <div class="col-md-7 about-us-two_col2 pbmit-sticky-col2-special">
            <div class="about-us-two_rightbox">
              <div class="pbmit-heading-subheading animation-style2">
                <h4 class="pbmit-subtitle"><?php echo esc_html($about_us_subtitle); ?></h4>
                <h2 class="pbmit-title"><?php echo esc_html($about_us_title); ?></h2>
              </div>
              <div class="about-us-two_innerbox">
                <div>
                  <?php echo esc_html($about_us_description); ?>
                </div>
                <div class="pbmit-ihbox-style-12">
                  <div class="pbmit-ihbox-box d-flex align-items-center">
                    <div class="pbmit-ihbox-icon">
                      <div class="pbmit-ihbox-icon-wrapper">
                        <div class="pbmit-icon-wrapper pbmit-icon-type-icon">
                          <i class="pbmit-xcare-icon pbmit-xcare-icon-medicine-1"></i>
                        </div>
                      </div>
                    </div>
                    <div class="pbmit-ihbox-contents">
                      <h2 class="pbmit-element-title"><?php echo esc_html($infection_prevention_title); ?></h2>
                      <div class="pbmit-heading-desc">
                        <?php echo esc_html($infection_prevention_description); ?>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="pbmit-ihbox-style-12">
                  <div class="pbmit-ihbox-box d-flex align-items-center">
                    <div class="pbmit-ihbox-icon">
                      <div class="pbmit-ihbox-icon-wrapper">
                        <div class="pbmit-icon-wrapper pbmit-icon-type-icon">
                          <i class="pbmit-xcare-icon pbmit-xcare-icon-avatar"></i>
                        </div>
                      </div>
                    </div>
                    <div class="pbmit-ihbox-contents">
                      <h2 class="pbmit-element-title"><?php echo esc_html($preventive_care_title); ?></h2>
                      <div class="pbmit-heading-desc">
                        <?php echo esc_html($preventive_care_description); ?>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="img_box">
                  <img src="<?php echo $about_image['url']; ?>" class="img-fluid" alt="" />
                </div>
                <!-- <div class="progressbar">
                <span class="progress-label"><?php //echo get_field('cardiology_title') 
                                              ?></span>
                <div class="progress progress-lg progress-percent-bg">
                  <div class="progress-bar aos-init" data-aos="slide-right" data-aos-delay="200" data-aos-duration="1000" data-aos-easing="ease-in-out" role="progressbar" aria-valuenow="<?php echo esc_attr($cardio_oncology_progress); ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo esc_attr($cardio_oncology_progress); ?>%">
                    <span class="progress-percent"><?php //echo esc_html($cardio_oncology_progress); 
                                                    ?>%</span>
                  </div>
                </div>
              </div>
              <div class="progressbar">
                <span class="progress-label"><?php //echo get_field('heart_title') 
                                              ?></span>
                <div class="progress progress-lg progress-percent-bg">
                  <div class="progress-bar aos-init" data-aos="slide-right" data-aos-delay="200" data-aos-duration="1000" data-aos-easing="ease-in-out" role="progressbar" aria-valuenow="<?php echo esc_attr($heart_surgery_progress); ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo esc_attr($heart_surgery_progress); ?>%">
                    <span class="progress-percent"><?php //echo esc_html($heart_surgery_progress); 
                                                    ?>%</span>
                  </div>
                </div>
              </div> -->
                <h4 class="pbmit-heading_title"><?php echo get_field('digital_title') ?></h4>
                <div>
                  <?php echo get_field('digital_description') ?>
                </div>
                <div class="list-group_box">
                  <div class="row">
                    <div class="col-md-6">
                      <ul class="list-group list-group-borderless">
                        <li class="list-group-item">
                          <span class="pbmit-icon-list-icon">
                            <i aria-hidden="true" class="ti-check"></i>
                          </span>
                          <span class="pbmit-icon-list-text">Avoid ultra-processed foods</span>
                        </li>
                        <li class="list-group-item">
                          <span class="pbmit-icon-list-icon">
                            <i aria-hidden="true" class="ti-check"></i>
                          </span>
                          <span class="pbmit-icon-list-text">Don’t eat heavily meats</span>
                        </li>
                        <li class="list-group-item">
                          <span class="pbmit-icon-list-icon">
                            <i aria-hidden="true" class="ti-check"></i>
                          </span>
                          <span class="pbmit-icon-list-text">Minimize your sugar intake</span>
                        </li>
                      </ul>
                    </div>
                    <div class="col-md-6">
                      <ul class="list-group list-group-borderless">
                        <li class="list-group-item">
                          <span class="pbmit-icon-list-icon">
                            <i aria-hidden="true" class="ti-check"></i>
                          </span>
                          <span class="pbmit-icon-list-text">Avoid bright lights before sleep</span>
                        </li>
                        <li class="list-group-item">
                          <span class="pbmit-icon-list-icon">
                            <i aria-hidden="true" class="ti-check"></i>
                          </span>
                          <span class="pbmit-icon-list-text">Drink only safe water</span>
                        </li>
                        <li class="list-group-item">
                          <span class="pbmit-icon-list-icon">
                            <i aria-hidden="true" class="ti-check"></i>
                          </span>
                          <span class="pbmit-icon-list-text">Avoid harmful use of alcohol</span>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- About Us end -->

  <section class="pbmit-sticky-section section-xl">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-5 pbmit-sticky-col">
          <div class="pbmit-ele-header-area">
            <div class="pbmit-heading-subheading">
              <h4 class="pbmit-subtitle"><?php echo get_field('our_service_subtitle') ?></h4>
              <h2 class="pbmit-title">
                <?php echo get_field('our_service_title') ?>
              </h2>
              <div class="pbmit-heading-desc">
                <?php echo get_field('our_service_description') ?>
              </div>
            </div>
            <a class="pbmit-btn" href="<?php echo get_field('treatment_link') ?>" target="_blank">
              <span class="pbmit-button-content-wrapper">
                <span class="pbmit-button-icon pbmit-align-icon-right">
                  <svg xmlns="http://www.w3.org/2000/svg" width="22.76" height="22.76" viewBox="0 0 22.76 22.76">
                    <title>black-arrow</title>
                    <path d="M22.34,1A14.67,14.67,0,0,1,12,5.3,14.6,14.6,0,0,1,6.08,4.06,14.68,14.68,0,0,1,1.59,1" transform="translate(-0.29 -0.29)" fill="none" stroke="#000" stroke-width="2"></path>
                    <path d="M22.34,1a14.67,14.67,0,0,0,0,20.75" transform="translate(-0.29 -0.29)" fill="none" stroke="#000" stroke-width="2"></path>
                    <path d="M22.34,1,1,22.34" transform="translate(-0.29 -0.29)" fill="none" stroke="#000" stroke-width="2"></path>
                  </svg>
                </span>
                <span class="pbmit-button-text"><?php echo get_field('treatment_link_text') ?></span>
              </span>
            </a>
          </div>
        </div>
        <div class="col-md-12 col-lg-7 pbmit-servicebox-right">
          <?php
          // WP_Query arguments
          $args = array(
            'post_type' => 'treatment',
            'posts_per_page' => 5, // Number of posts to display
            'orderby' => 'date', // Order by date
            'order' => 'DESC', // Show latest posts first
          );

          // The Query
          $query = new WP_Query($args);

          // The Loop
          if ($query->have_posts()) :
            while ($query->have_posts()) :
              $query->the_post();
          ?>
              <article class="pbmit-service-style-4">
                <div class="pbminfotech-post-item">
                  <div class="pbminfotech-box-content">
                    <div class="pbmit-box-content-wrap">
                      <div class="pbmit-featured-img-wrapper">
                        <div class="pbmit-featured-wrapper">
                          <a href="<?php the_permalink(); ?>">
                            <?php
                            if (has_post_thumbnail()) {
                              the_post_thumbnail('full', array('class' => 'img-fluid'));
                            } else {
                              echo '<img src="' . get_template_directory_uri() . '/images/default-thumbnail.jpg" class="img-fluid" alt="Default Thumbnail">';
                            }
                            ?>
                          </a>
                        </div>
                      </div>
                      <div class="pbmit-box-content-inner">
                        <div class="pbmit-content-inner-wrap">
                          <div class="pbmit-contant-box">
                            <div class="pbmit-serv-cat">
                              <?php
                              // $categories = get_the_terms( get_the_ID(), 'category' );
                              // if ( $categories && ! is_wp_error( $categories ) ) {
                              //     $category_names = array();
                              //     foreach ( $categories as $category ) {
                              //         $category_names[] = '<a href="' . esc_url( get_term_link( $category ) ) . '" rel="tag">' . $category->name . '</a>';
                              //     }
                              //     echo implode( ', ', $category_names );
                              // }
                              ?>
                            </div>
                            <h3 class="pbmit-service-title">
                              <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h3>
                          </div>
                          <div class="pbmit-service-icon">
                            <?php
                            // Get the icon class from ACF field
                            // $icon_class = get_field('icon_class');
                            // if ($icon_class): 
                            ?>
                            <!-- <i class="<?php //echo esc_attr($icon_class); 
                                            ?>"></i> -->
                            <?php //endif; 
                            ?>
                            <img src="<?php the_field('icon_image'); ?>" alt="<?php echo esc_attr($icon_image['alt']); ?>" />
                          </div>
                        </div>
                        <div class="pbmit-service-description">
                          <?php the_excerpt(); ?>
                        </div>
                      </div>
                    </div>
                    <a class="pbmit-service-btn" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                      <span class="pbmit-button-icon-wrapper">
                        <span class="pbmit-button-icon">
                          <i class="pbmit-base-icon-black-arrow-1"></i>
                        </span>
                      </span>
                    </a>
                  </div>
                  <a class="pbmit-link" href="<?php the_permalink(); ?>" target="_blank"></a>
                </div>
              </article>
          <?php
            endwhile;
            // Restore original Post Data
            wp_reset_postdata();
          else :
            // If no posts are found
            echo '<p>No services found.</p>';
          endif;
          ?>
        </div>
      </div>
    </div>
  </section>



  <?php if (have_rows('portfolio_items')) : ?>
    <!-- Portfolio Start -->
    <section class="section-lgt portfolio_two">
      <div class="container-fluid">
        <div class="swiper-slider portfolio-two_slider" data-autoplay="false" data-loop="true" data-dots="false" data-arrows="false" data-columns="4" data-margin="30" data-effect="slide">
          <div class="swiper-wrapper">
            <?php while (have_rows('portfolio_items')) :
              the_row();
              $portfolio_image = get_sub_field('portfolio_image');
              $portfolio_category = get_sub_field('portfolio_category');
              $portfolio_title = get_sub_field('portfolio_title');
            ?>
              <div class="swiper-slide">
                <article class="pbmit-portfolio-style-2">
                  <div class="pbminfotech-post-content">
                    <div class="pbmit-featured-img-wrapper">
                      <div class="pbmit-featured-wrapper">
                        <img src="<?php echo esc_url($portfolio_image['url']); ?>" class="img-fluid" alt="<?php echo esc_attr($portfolio_image['alt']); ?>" />
                      </div>
                    </div>
                    <div class="pbminfotech-box-content">
                      <div class="pbminfotech-titlebox">
                        <div class="pbmit-port-cat">
                          <!-- <a href="<?php //echo esc_url($portfolio_category_link); 
                                        ?>" -->
                          <!-- rel="tag"></a> -->
                          <?php echo esc_html($portfolio_category); ?>
                        </div>
                        <h3 class="pbmit-portfolio-title">
                          <?php
                          $portfolio_title_link = get_sub_field('portfolio_link');
                          if ($portfolio_title_link) :
                            $portfolio_title_link_url = $portfolio_title_link['url'];
                            $portfolio_title_link_title = $portfolio_title_link['title'];
                          ?>
                            <!-- <a href="<?php //echo $portfolio_title_link_url; 
                                          ?>"></a> -->
                            <?php echo $portfolio_title_link_title; ?>
                          <?php endif; ?>
                        </h3>
                      </div>
                    </div>
                  </div>
                </article>
              </div>
            <?php endwhile; ?>
          </div>
        </div>
      </div>
    </section>
    <!-- Portfolio End -->
  <?php endif; ?>

  <!-- Portfolio End -->

  <!-- Testimonial Start -->
  <section class="section-xl testimonial">
    <div class="container">
      <div class="position-relative">
        <div class="pbmit-heading-subheading animation-style2">
          <h4 class="pbmit-subtitle"><?php echo get_field('testimonial_sub_heading') ?></h4>
          <h2 class="pbmit-title"><?php echo get_field('testimonial_heading') ?></h2>
        </div>
        <div class="testimonial_arrow swiper-btn-custom d-flex flex-row-reverse"></div>
      </div>
      <!-- <div class="swiper-slider" data-arrows-class="testimonial_arrow" data-autoplay="true" data-loop="true" data-dots="false" data-arrows="true" data-columns="3" data-margin="30" data-effect="slide">
      <div class="swiper-wrapper">
        
         
      </div> -->
      <?php echo do_shortcode('[grw id=544]') ?>
    </div>
</div>
</section>
<!-- Testimonial End -->


<!-- Blog Start -->
<section class="section-xl">
  <div class="container">
    <div class="pbmit-heading-subheading text-center">
      <h4 class="pbmit-subtitle">Our Blogs</h4>
      <h2 class="pbmit-title">Our latest featured articles</h2>
    </div>
    <div class="row align-items-center">
      <div class="col-md-12 col-xl-5">
        <div class="blog-style-4_box">
          <div class="row">
            <?php
            $args = array(
              'posts_per_page' => 3,
              'post_type' => 'post',
              'offset' => 1, // Skip the newest post for this section
            );
            $query = new WP_Query($args);
            if ($query->have_posts()) :
              while ($query->have_posts()) :
                $query->the_post();
            ?>
                <div class="col-md-12">
                  <article class="pbmit-blog-style-4">
                    <div class="post-item">
                      <div class="pbminfotech-box-content">
                        <div class="pbminfotech-content-inner d-flex align-items-center">
                          <div class="pbmit-featured-img-wrapper">
                            <div class="pbmit-featured-wrapper">
                              <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('full', array('class' => 'img-fluid')); ?>
                              <?php else : ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/default-image.jpg" class="img-fluid" alt="<?php the_title(); ?>" />
                              <?php endif; ?>
                            </div>
                          </div>
                          <div class="pbmit-meta-wraper">
                            <div class="pbmit-meta-date-wrapper pbmit-meta-line">
                              <div class="pbmit-meta-date">
                                <span class="pbmit-post-date">
                                  <i class="pbmit-base-icon-calendar-3"></i>
                                  <?php the_time('F j, Y'); ?>
                                </span>
                              </div>
                            </div>
                            <div class="pbmit-meta-author pbmit-meta-line">
                              <span class="pbmit-post-author">
                                <i class="pbmit-base-icon-user-3"></i><?php the_author(); ?>
                              </span>
                            </div>
                            <div class="pbmit-content-wrapper">
                              <h3 class="pbmit-post-title">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                              </h3>
                            </div>
                          </div>
                        </div>
                      </div>
                      <a class="pbmit-link" href="<?php the_permalink(); ?>"></a>
                    </div>
                  </article>
                </div>
            <?php endwhile;
              wp_reset_postdata();
            endif; ?>
          </div>
        </div>
      </div>
      <div class="col-md-12 col-xl-7">
        <div class="swiper-slider blog-two_slider" data-autoplay="false" data-loop="true" data-dots="false" data-arrows="false" data-columns="1" data-margin="30" data-effect="slide">
          <div class="swiper-wrapper">
            <?php
            $args = array(
              'posts_per_page' => 1, // Fetch only the newest post for this section
              'post_type' => 'post',
            );
            $query = new WP_Query($args);
            if ($query->have_posts()) :
              while ($query->have_posts()) :
                $query->the_post();
            ?>
                <div class="swiper-slide">
                  <article class="pbmit-blog-style-3">
                    <div class="post-item d-flex">
                      <div class="pbmit-featured-container">
                        <div class="pbmit-bg-image" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');">
                          <div class="pbmit-featured-img-wrapper">
                            <div class="pbmit-featured-wrapper">
                              <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('full', array('class' => 'img-fluid')); ?>
                              <?php else : ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/default-image.jpg" class="img-fluid" alt="<?php the_title(); ?>" />
                              <?php endif; ?>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="pbminfotech-box-wrap">
                        <div class="pbminfotech-box-content">
                          <div class="pbmit-date-admin-wraper d-flex align-items-center">
                            <div class="pbmit-meta-date pbmit-meta-line">
                              <span class="pbmit-post-date">
                                <i class="pbmit-base-icon-calendar-3"></i>
                                <?php the_time('F j, Y'); ?>
                              </span>
                            </div>
                            <div class="pbmit-meta-author pbmit-meta-line">
                              <span class="pbmit-post-author">
                                <i class="pbmit-base-icon-user-3"></i><?php the_author(); ?>
                              </span>
                            </div>
                          </div>
                          <h3 class="pbmit-post-title">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                          </h3>
                          <div class="pbminfotech-box-desc">
                            <?php echo wp_trim_words(get_the_excerpt(), 15, '...'); ?>
                          </div>
                        </div>
                        <a class="pbmit-blog-btn" href="<?php the_permalink(); ?>">
                          <span class="pbmit-button-icon-wrapper">
                            <span class="pbmit-button-icon">
                              <i class="pbmit-base-icon-black-arrow-1"></i>
                            </span>
                          </span>
                        </a>
                      </div>
                      <a class="pbmit-link" href="<?php the_permalink(); ?>"></a>
                    </div>
                  </article>
                </div>
            <?php endwhile;
              wp_reset_postdata();
            endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- Blog End -->
</div>
<!-- page content End -->

<!-- footer -->
<div class="footer-top-section pbmit-bg-color-blackish">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-2 pbmit-col_2">
        <div class="pbmit-ihbox-style-13">
          <div class="pbmit-ihbox-box">
            <div class="pbmit-ihbox-icon">
              <div class="pbmit-ihbox-icon-wrapper">
                <div class="pbmit-icon-wrapper pbmit-icon-type-icon">
                  <i class="pbmit-xcare-icon pbmit-xcare-icon-phone-call"></i>
                </div>
              </div>
            </div>
            <div class="pbmit-ihbox-contents">
              <a href="tel:<?php echo get_field('phone_number') ?>">
                <h2 class="pbmit-element-title"><?php echo get_field('phone_number') ?></h2>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-2 pbmit-col_3">
        <div class="pbmit-ihbox-style-13">
          <div class="pbmit-ihbox-box">
            <div class="pbmit-ihbox-icon">
              <div class="pbmit-ihbox-icon-wrapper">
                <div class="pbmit-icon-wrapper pbmit-icon-type-icon">
                  <i class="pbmit-xcare-icon pbmit-xcare-icon-email"></i>
                </div>
              </div>
            </div>
            <div class="pbmit-ihbox-contents">
              <a href="mailto:<?php echo get_field('email') ?>">
                <h2 class="pbmit-element-title"><?php echo get_field('email') ?></h2>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-8 pbmit-col_1">
        <?php echo do_shortcode('[newsletter_form]'); ?>
        <!-- <ul class="pbmit-icon-list-items pbmit-inline-items">
                <li class="pbmit-icon-list-item pbmit-inline-item">
                  <a href="#">
                    <span class="pbmit-icon-list-text">Our Mission</span>
                  </a>
                </li>
                <li class="pbmit-icon-list-item pbmit-inline-item">
                  <a href="#">
                    <span class="pbmit-icon-list-text">Awards</span>
                  </a>
                </li>
                <li class="pbmit-icon-list-item pbmit-inline-item">
                  <a href="#">
                    <span class="pbmit-icon-list-text">Experience</span>
                  </a>
                </li>
                <li class="pbmit-icon-list-item pbmit-inline-item">
                  <a href="#">
                    <span class="pbmit-icon-list-text">Success Story</span>
                  </a>
                </li>
              </ul> -->
      </div>
    </div>
  </div>
</div>

<?php
get_footer();
?>