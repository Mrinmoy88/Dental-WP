<?php 
/*
Template Name: about us
*/
get_header();
?>

<!-- Title Bar -->
<div class="pbmit-title-bar-wrapper about" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/InnerPagebanner.png');">

			<div class="container">
				<div class="pbmit-title-bar-content">
					<div class="pbmit-title-bar-content-inner">
						<div class="pbmit-tbar">
							<div class="pbmit-tbar-inner container">
								<h1 class="pbmit-tbar-title"><?php the_title(); ?></h1>
							</div>
						</div>
						<!-- <div class="pbmit-breadcrumb">
							<div class="pbmit-breadcrumb-inner">
								<span>
									<a title="" href="#" class="home"><span>Xcare</span></a>
								</span>
								<span class="sep">
									<i class="pbmit-base-icon-angle-double-right"></i>
								</span>
								<span><span class="post-root post post-post current-item"> About Us</span></span>
							</div>
						</div> -->
					</div>
				</div> 
			</div> 
		</div>
		<!-- Title Bar End-->

		<!-- Page Content -->
		<div class="page-content">

		<?php if ( have_rows( 'services' ) ) : ?>
    <section class="section-xl">
        <div class="container">
            <div class="row">
                <?php while ( have_rows( 'services' ) ) : the_row(); ?>
                    <div class="col-md-4">
                        <div class="pbmit-ihbox-style-15 <?php echo (get_row_index() == 2) ? 'pbmit-ihbox-style_col2' : ''; ?>">
                            <div class="pbmit-ihbox-box">
                                <div class="pbmit-icon-wrap d-flex align-items-center">
                                    <div class="pbmit-ihbox-icon">
                                        <div class="pbmit-ihbox-icon-wrapper">
                                            <div class="pbmit-icon-wrapper pbmit-icon-type-icon">
                                                <i class="<?php the_sub_field( 'icon_class' ); ?>"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h2 class="pbmit-element-title"><?php the_sub_field( 'heading' ); ?></h2>
                                <div class="pbmit-content-wrapper">
                                    <div class="pbmit-heading-desc"><?php the_sub_field( 'description' ); ?></div>
                                </div>
                            </div>
                            <div class="pbmit-ihbox-btn">
                                <a href="<?php the_sub_field( 'button_link' ); ?>" target="_blank">
                                    <span class="pbmit-button-text"><?php the_sub_field( 'button_text' ); ?></span>
                                    <span class="pbmit-button-icon-wrapper">
                                        <span class="pbmit-button-icon">
                                            <i class="pbmit-base-icon-black-arrow-1"></i>
                                        </span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </section>
<?php endif; ?>

            <!-- Service End -->

			
    <section>
        <div class="container">
            <div class="row g-0 align-items-center">
                <div class="col-md-12 col-xl-6">
                    <div class="about-us-left_box">
                        <div class="about-us_img1 pbmit-animation-style4">
                            <?php $image_1 = get_field('main_image'); ?>
                            <?php if ($image_1): ?>
                                <img src="<?php echo esc_url($image_1['url']); ?>" class="img-fluid" alt="<?php echo esc_attr($image_1['alt']); ?>">
                            <?php endif; ?>
                        </div>
                        <div class="about-us_img2 pbmit-animation-style3">
                            <?php $image_2 = get_field('secondary_image'); ?>
                            <?php if ($image_2): ?>
                                <img src="<?php echo esc_url($image_2['url']); ?>" class="img-fluid" alt="<?php echo esc_attr($image_2['alt']); ?>">
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-xl-6">
                    <div class="about-us-right_box">
                        <div class="pbmit-heading-subheading">
                            <h4 class="pbmit-subtitle"><?php the_field('subtitle'); ?></h4>
                            <h2 class="pbmit-title"><?php the_field('main_title'); ?></h2>
                            <div class="pbmit-heading-desc">
                                <?php the_field('description'); ?>
                            </div>
                        </div>
                        <div class="row">
                            <?php if (have_rows('statistics')): ?>
                                <?php while (have_rows('statistics')): the_row(); ?>
                                    <div class="pbmit-ihbox-style-20 col-md-12">
                                        <div class="pbmit-ihbox-headingicon">
                                            <div class="pbmit-ihbox-icon">
                                                <div class="pbmit-ihbox-icon-wrapper pbmit-ihbox-icon-type-text">
                                                    <?php the_sub_field('stat_number'); ?>
                                                </div>
                                            </div>
                                            <div class="pbmit-ihbox-contents">
                                                <h2 class="pbmit-element-title">
                                                    <?php the_sub_field('stat_description'); ?>
                                                </h2>
                                            </div>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                        <a class="pbmit-btn" href="<?php the_field('button_url'); ?>">
                            <span class="pbmit-button-content-wrapper">
                                <span class="pbmit-button-icon pbmit-align-icon-right">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="22.76" height="22.76" viewBox="0 0 22.76 22.76">
                                        <title>black-arrow</title>
                                        <path d="M22.34,1A14.67,14.67,0,0,1,12,5.3,14.6,14.6,0,0,1,6.08,4.06,14.68,14.68,0,0,1,1.59,1" transform="translate(-0.29 -0.29)" fill="none" stroke="#000" stroke-width="2"></path>
                                        <path d="M22.34,1a14.67,14.67,0,0,0,0,20.75" transform="translate(-0.29 -0.29)" fill="none" stroke="#000" stroke-width="2"></path>
                                        <path d="M22.34,1,1,22.34" transform="translate(-0.29 -0.29)" fill="none" stroke="#000" stroke-width="2"></path>
                                    </svg>
                                </span>
                                <span class="pbmit-button-text"><?php the_field('button_text'); ?></span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>



			<!-- Marquee --> 
			<section class="section-lgt">
    <div class="container-fluid p-0">
        <div class="swiper-slider marquee">
            <div class="swiper-wrapper">
                <?php if (have_rows('swiper_slides')): ?>
                    <?php while (have_rows('swiper_slides')): the_row(); ?>
                        <div class="swiper-slide">
                            <article class="pbmit-marquee-effect-style-1">
                                <div class="pbmit-tag-wrapper">
                                    <h2 class="pbmit-element-title" data-text="<?php the_sub_field('slide_title'); ?>">
                                        <?php the_sub_field('slide_title'); ?>
                                    </h2>
                                </div>
                            </article>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

			<!-- Marquee end --> 

			<!-- Service Start --> 
			<section class="pbmit-sticky-section section-xl">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-5 pbmit-sticky-col">
                <div class="pbmit-ele-header-area">
                    <div class="pbmit-heading-subheading">
                        <h4 class="pbmit-subtitle"><?php echo get_field('our_service_subtitle'); ?></h4>
                        <h2 class="pbmit-title">
                           <?php echo get_field('our_service_title'); ?>
                        </h2>
                        <div class="pbmit-heading-desc">
                        <?php echo get_field('our_service_description'); ?>
                        </div>
                    </div>
                    <a class="pbmit-btn" href="<?php echo get_field('treatment_link') ?>">
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
                $query = new WP_Query( $args );

                // The Loop
                if ( $query->have_posts() ) :
                    while ( $query->have_posts() ) :
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
                                                    if ( has_post_thumbnail() ) {
                                                        the_post_thumbnail( 'full', array( 'class' => 'img-fluid' ) );
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
                                            // Get the icon image URL from the ACF field
                                            //$icon_image = get_field('icon_image');
                                            //if ($icon_image): ?>
                                                <img src="<?php  the_field('icon_image'); ?>" alt="<?php echo esc_attr($icon_image['alt']); ?>" />
                                            <?php// endif; ?>
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
                                <a class="pbmit-link" href="<?php the_permalink(); ?>"></a>
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

			<!-- Tab Start --> 
			<section class="section-xl pbmit-bg-color-global pbmit-extend-animation tab_section">
    <div class="container">
        <div class="pbmit-heading-subheading text-white text-center">
            <h4 class="pbmit-subtitle"><?php the_field('services_subtitle'); ?></h4>
            <h2 class="pbmit-title"><?php the_field('services_title'); ?></h2>
        </div>
        <div class="pbmit-tab">
            <ul class="nav nav-tabs" role="tablist">
                <?php if (have_rows('services_tab')): ?>
                    <?php $count = 0; ?>
                    <?php while (have_rows('services_tab')): the_row(); ?>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link <?php echo $count === 0 ? 'active' : ''; ?>" data-bs-toggle="tab" href="#tab-2-<?php echo $count + 1; ?>" aria-selected="<?php echo $count === 0 ? 'true' : 'false'; ?>" role="tab">
                                <span><?php the_sub_field('service_title'); ?></span>
                            </a>
                        </li>
                        <?php $count++; ?>
                    <?php endwhile; ?>
                <?php endif; ?>
            </ul>
            <div class="tab-content">
                <?php if (have_rows('services_tab')): ?>
                    <?php $count = 0; ?>
                    <?php while (have_rows('services_tab')): the_row(); ?>
                        <div class="tab-pane <?php echo $count === 0 ? 'show active' : ''; ?>" id="tab-2-<?php echo $count + 1; ?>" role="tabpanel">
                            <div class="pbmit-column-inner">
                                <div class="row g-0 align-items-center">
                                    <div class="col-md-12 col-xl-6 pbmit-tab-img">
                                        <?php $image = get_sub_field('service_image'); ?>
                                        <img src="<?php echo $image['url']; ?>" class="img-fluid" alt="<?php echo $image['alt']; ?>">
                                    </div>
                                    <div class="col-md-12 col-xl-6 pbmit-tab-list">
                                        <?php the_sub_field('service_description'); ?>
                                        <?php if (have_rows('service_list')): ?>
                                            <ul class="list-group list-group-borderless">
                                                <?php while (have_rows('service_list')): the_row(); ?>
                                                    <li class="list-group-item">
                                                        <span class="pbmit-icon-list-icon">
                                                            <i aria-hidden="true" class="ti-check"></i>
                                                        </span>
                                                        <span class="pbmit-icon-list-text"><?php the_sub_field('list_item'); ?></span>
                                                    </li>
                                                <?php endwhile; ?>
                                            </ul>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php $count++; ?>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

			


			
<!-- Team Start -->

    <!-- Team Start --> 
    <section class="section-xl">
        <div class="container">
            <div class="position-relative">
                <div class="pbmit-heading-subheading">
                    <h4 class="pbmit-subtitle">Our Team</h4>
                    <h2 class="pbmit-title">Our Specialist Doctors</h2>
                </div>
                <div class="team_arrow swiper-btn-custom d-flex flex-row-reverse"></div>
            </div>
            <div class="swiper-slider" data-arrows-class="team_arrow" data-autoplay="false" data-loop="true" data-dots="false" data-arrows="true" data-columns="4" data-margin="30" data-effect="slide">
                <div class="swiper-wrapper">
                <?php
                        // Check if the repeater field has rows of data
                        if( have_rows('specialist_doctors') ): ?>
                    <?php while ( have_rows('specialist_doctors') ) : the_row(); 
                        $image = get_sub_field('image');
                        $name = get_sub_field('name');
                        $position = get_sub_field('position');
                        ?>
                        <div class="swiper-slide">
                            <article class="pbmit-team-style-1">
                                <div class="pbminfotech-post-item">
                                    <div class="pbmit-featured-wrap">
                                        <div class="pbmit-featured-img-wrapper">
                                            <div class="pbmit-featured-wrapper">
                                                <img src="<?php echo esc_url($image['url']); ?>" class="img-fluid" alt="<?php echo esc_attr($image['alt']); ?>">
                                            </div>
                                        </div>
                                        <div class="pbmit-team-btn">
                                            <a class="pbmit-team-text" href="#">
                                                <i class="pbmit-base-icon-share-1"></i>
                                            </a>
                                            <div class="pbminfotech-box-social-links">
                                                <ul class="pbmit-social-links pbmit-team-social-links">
                                                    <?php if( have_rows('social_links') ): 
                                                        while ( have_rows('social_links') ) : the_row(); 
                                                        $platform = get_sub_field('platform');
                                                        $url = get_sub_field('url');
                                                        ?>
                                                        <li class="pbmit-social-li pbmit-social-<?php echo esc_attr($platform); ?>">
                                                            <a href="<?php echo esc_url($url); ?>" title="<?php echo esc_attr($platform); ?>" target="_blank">
                                                                <span><i class="pbmit-base-icon-<?php echo esc_attr($platform); ?>"></i></span>
                                                            </a>
                                                        </li>
                                                    <?php endwhile; endif; ?>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pbminfotech-box-content">
                                        <div class="pbminfotech-box-content-inner">
                                            <div class="pbminfotech-box-team-position"><?php echo esc_html($name); ?></div>
                                            <h3 class="pbmit-team-title">
                                                <!-- <a href="team-single-detail.html"></a> -->
                                                <?php echo esc_html($position); ?>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
    <!-- Team End -->


<!-- Team End -->



		<!-- Testimonial Start -->
<section class="section-xl">
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
            <!-- Testimonial End -->

			<!-- Client Start -->
			<section class="section-lg">
	<div class="container">
		<div class="swiper-slider" data-autoplay="true" data-loop="true" data-dots="false" data-arrows="false" data-columns="6" data-margin="30" data-effect="slide">
			<div class="swiper-wrapper">
				<?php if( have_rows('clients') ): ?>
					<?php while( have_rows('clients') ): the_row(); 
						$client_name = get_sub_field('client_name');
						$client_hover_image = get_sub_field('client_hover_image');
						$client_dark_image = get_sub_field('client_dark_image');
					?>
					<div class="swiper-slide">
						<article class="pbmit-client-style-1">
							<div class="pbmit-border-wrapper">
								<div class="pbmit-client-wrapper pbmit-client-with-hover-img">
									<h4 class="pbmit-hide"><?php echo esc_html($client_name); ?></h4>
									<div class="pbmit-client-hover-img">
										<img src="<?php echo esc_url($client_hover_image['url']); ?>" alt="<?php echo esc_attr($client_hover_image['alt']); ?>">
									</div>
									<div class="pbmit-featured-img-wrapper">
										<div class="pbmit-featured-wrapper">
											<img src="<?php echo esc_url($client_dark_image['url']); ?>" class="img-fluid" alt="<?php echo esc_attr($client_dark_image['alt']); ?>">
										</div>
									</div>
								</div>
							</div>
						</article>
					</div>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>

			<!-- Client End -->

		</div>
		<!-- Page Content End -->

<?php 
get_footer();
?>