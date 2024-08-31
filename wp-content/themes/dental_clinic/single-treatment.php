<?php get_header(); ?>


 <!-- Title Bar -->
 <div class="pbmit-title-bar-wrapper">
    <div class="container">
        <div class="pbmit-title-bar-content">
            <div class="pbmit-title-bar-content-inner">
                <div class="pbmit-tbar">
                    <div class="pbmit-tbar-inner container">
                        <h3 class="pbmit-tbar-subtitle">Treatment</h3>
                        <h1 class="pbmit-tbar-title">
                            <?php
                            if ( is_singular( 'treatment' ) ) {
                                // Single post view for 'treatment' custom post type
                                echo get_the_title();
                            } else {
                                // Default title fallback
                                echo 'Default Service Title';
                            }
                            ?>
                        </h1>
                    </div>
                </div>
                <!-- <div class="pbmit-breadcrumb">
                    <div class="pbmit-breadcrumb-inner">
                        <span>
                            <a href="<?php //echo esc_url( home_url( '/' ) ); ?>" title="<?php //echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" class="home">
                                <span><?php //echo get_bloginfo( 'name' ); ?></span>
                            </a>
                        </span>
                        <span class="sep">
                            <i class="pbmit-base-icon-angle-double-right"></i>
                        </span>
                        <?php //if ( is_singular( 'treatment' ) ) : ?>
                            <span><span class="post-root post post-post current-item"><?php //echo get_the_title(); ?></span></span>
                        <?php //else : ?>
                            <span>
                                <a href="#" class="home"><span>Services</span></a>
                            </span>
                            <span class="sep">
                                <i class="pbmit-base-icon-angle-double-right"></i>
                            </span>
                            <span>
                                <a href="#" class="home"><span>Dentist</span></a>
                            </span>
                            <span class="sep">
                                <i class="pbmit-base-icon-angle-double-right"></i>
                            </span>
                            <span><span class="post-root post post-post current-item">Default Service Title</span></span>
                        <?php //endif; ?>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</div>


        <!-- Title Bar End-->

        <!-- Page Content -->
        <div class="page-content">

            <!-- Service Details --> 
            <section class="site_content service_details">
				<div class="container">
					<div class="row">
						<div class="col-lg-9 service-right-col">
							<div class="pbmit-service-feature-image">
								<img src="images/service/service-single-01.jpg" class="img-fluid w-100" alt="">
							</div>
							<div class="pbmit-entry-content">
								<div class="pbmit-service_content">
									<div class="pbmit-heading animation-style2">
										<h3 class="pbmit-title mb-3"><?php echo get_field('section_title') ?></h3>
									</div>
									<p class="pbmit-firstletter">
										<?php echo get_field('section_text') ?>
									</p>
									<p><?php echo get_field('section_description') ?></p>
									<?php if( have_rows('icon_list_columns') ): ?>
											<div class="row">
												<?php while( have_rows('icon_list_columns') ): the_row(); ?>
													<div class="col-md-6">
														<ul class="list-group list-group-borderless">
															<?php if( have_rows('list_items') ): ?>
																<?php while( have_rows('list_items') ): the_row(); ?>
																	<li class="list-group-item">
																		<span class="pbmit-icon-list-icon">
																			<i aria-hidden="true" class="<?php the_sub_field('icon'); ?>"></i>
																		</span>
																		<span class="pbmit-icon-list-text"><?php the_sub_field('text'); ?></span>
																	</li>
																<?php endwhile; ?>
															<?php endif; ?>
														</ul>
													</div>
												<?php endwhile; ?>
											</div>
										<?php endif; ?>
                                        <div class="pbmit-heading animation-style2">
										<h3 class="pbmit-title mb-3"><?php echo get_field('section_name') ?></h3>
									</div>
									<p class="pbmit-firstletter">
										<?php echo get_field('section_excerpt') ?>
									</p>
									<p><?php echo get_field('section_details') ?></p>
									<?php if( have_rows('icon_list') ): ?>
											<div class="row">
												<?php while( have_rows('icon_list') ): the_row(); ?>
													<div class="col-md-6">
														<ul class="list-group list-group-borderless">
															<?php if( have_rows('listed_items') ): ?>
																<?php while( have_rows('listed_items') ): the_row(); ?>
																	<li class="list-group-item">
																		<span class="pbmit-icon-list-icon">
																			<i aria-hidden="true" class="<?php the_sub_field('tick_icon'); ?>"></i>
																		</span>
																		<span class="pbmit-icon-list-text"><?php the_sub_field('tick_text'); ?></span>
																	</li>
																<?php endwhile; ?>
															<?php endif; ?>
														</ul>
													</div>
												<?php endwhile; ?>
											</div>
										<?php endif; ?>
									<div class="pbmit-heading animation-style2">
										<h3 class="pbmit-title mb-3"><?php echo get_field('section_header') ?></h3>
									</div>
									<p><?php echo get_field('process_description') ?></p>
								</div>
								<div class="ihbox_style_box">
								<?php if( have_rows('process_steps') ): ?>
    <div class="row">
        <?php while( have_rows('process_steps') ): the_row(); 
            $image = get_sub_field('image');
            $step_number = get_sub_field('step_number');
            $title = get_sub_field('title');
            $description = get_sub_field('description');
        ?>
            <article class="pbmit-miconheading-style-18 col-md-4">
                <div class="pbmit-ihbox-style-18">
                    <div class="pbmit-ihbox-headingicon">
                        <div class="pbmit-icon-wrap">
                            <div class="pbmit-ihbox-wrapper">
                                <div class="pbmit-ihbox-icon-type-image">
                                    <?php if( $image ): ?>
                                        <img src="<?php echo esc_url($image['url']); ?>" class="img-fluid" alt="<?php echo esc_attr($image['alt']); ?>">
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="pbmit-ihbox-box-number"><?php echo esc_html($step_number); ?></div>
                        </div>
                        <div class="pbmit-ihbox-contents">
                            <h2 class="pbmit-element-title">
                                <?php echo esc_html($title); ?>
                            </h2>
                            <div class="pbmit-heading-desc"><?php echo esc_html($description); ?></div>
                        </div>
                    </div>
                </div>
            </article>
        <?php endwhile; ?>
    </div>
<?php endif; ?>

								</div>
								<div class="service-detail-accordion_box">
									<div class="pbmit-heading animation-style2">
										<h3 class="pbmit-title mb-3"><?php echo get_field('faq_title') ?></h3>
									</div>
									<p><?php echo get_field('faq_description') ?></p>
									<?php if( have_rows('accordion_items') ): ?>
    <div class="accordion" id="accordionExample1">
        <?php $i = 1; ?>
        <?php while( have_rows('accordion_items') ): the_row(); 
            $title = get_sub_field('title');
            $content = get_sub_field('content');
            $collapsed = $i === 1 ? '' : 'collapsed';
            $show = $i === 1 ? 'show' : '';
            $aria_expanded = $i === 1 ? 'true' : 'false';
        ?>
            <div class="accordion-item <?php echo $i === 1 ? 'active' : ''; ?>" id="heading<?php echo $i; ?>">
                <h2 class="accordion-header">
                    <button class="accordion-button <?php echo $collapsed; ?>" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapse<?php echo $i; ?>" aria-expanded="<?php echo $aria_expanded; ?>" aria-controls="collapse<?php echo $i; ?>">
                        <span class="pbmit-accordion-icon pbmit-accordion-icon-right">
                            <span class="pbmit-accordion-icon-closed">
                                <i class="fa fa-angle-up"></i>
                            </span>
                            <span class="pbmit-accordion-icon-opened">
                                <i class="fa fa-angle-down"></i>
                            </span>
                        </span>
                        <span class="pbmit-accordion-title">
                            <span class="pbmit-global-color"><?php printf('%02d.', $i); ?></span>
                            <?php echo esc_html($title); ?>
                        </span>
                    </button>
                </h2>
                <div id="collapse<?php echo $i; ?>" class="accordion-collapse collapse <?php echo $show; ?>" aria-labelledby="heading<?php echo $i; ?>"
                    data-bs-parent="#accordionExample1">
                    <div class="accordion-body">
                        <?php echo $content; ?>
                    </div>
                </div>
            </div>
            <?php $i++; ?>
        <?php endwhile; ?>
    </div>
<?php endif; ?>

								</div>
							</div>
						</div>
						<div class="col-lg-3 service-left-col sidebar">
							<aside class="service-sidebar">
							<aside class="widget post-list">
    <h2 class="widget-title">Our Treatments</h2>
    <div class="all-post-list">
    <?php
// Get the current treatment ID
$current_treatment_id = get_the_ID(); // Assuming this gets the current treatment ID

// WP_Query arguments
$args = array(
    'post_type' => 'treatment', // Specify the post type
    'posts_per_page' => -1, // Retrieve all posts
    'orderby' => 'title',
    'order' => 'ASC', // Order by title ascending
);

// The Query
$query = new WP_Query( $args );

// The Loop
if ( $query->have_posts() ) {
    ?>
    <ul class="service-list">
    <?php
    while ( $query->have_posts() ) {
        $query->the_post();
        $treatment_id = get_the_ID();
        $highlight_class = $treatment_id === $current_treatment_id ? 'current-treatment' : '';
        ?>
        <li class="service-item <?php echo $highlight_class; ?>">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </li>
        <?php
    }
    ?>
    </ul>
    <?php
    // Restore original Post Data
    wp_reset_postdata();
} else {
    // no posts found
    echo '<p>No services found.</p>';
}
?>


    </div>
</aside>


								<!-- <aside class="widget pbmit-service-ad">
									<div class="textwidget">
										<div class="pbmit-service-ads">
											<h5 class="pbmit-ads-subheding">Our Newsletter</h5>
											<h4 class="pbmit-ads-subtitle">Ready to start learn ?</h4>
											<h3 class="pbmit-ads-title">Sign up now!</h3>
											<div class="pbmit-ads-desc">
												<i class="pbmit-base-icon-phone-call-1"></i>+(123) 1234-567-8901
											</div>
											<a class="pbmit-btn" href="service-details.html">
												<span class="pbmit-button-content-wrapper">
													<span class="pbmit-button-icon pbmit-align-icon-right">
														<svg xmlns="http://www.w3.org/2000/svg" width="22.76" height="22.76" viewBox="0 0 22.76 22.76">
															<title>black-arrow</title>
															<path d="M22.34,1A14.67,14.67,0,0,1,12,5.3,14.6,14.6,0,0,1,6.08,4.06,14.68,14.68,0,0,1,1.59,1" transform="translate(-0.29 -0.29)" fill="none" stroke="#000" stroke-width="2"></path>
															<path d="M22.34,1a14.67,14.67,0,0,0,0,20.75" transform="translate(-0.29 -0.29)" fill="none" stroke="#000" stroke-width="2"></path>
															<path d="M22.34,1,1,22.34" transform="translate(-0.29 -0.29)" fill="none" stroke="#000" stroke-width="2"></path>
														</svg>
													</span>
													<span class="pbmit-button-text">Register now</span>
												</span>
											</a>
										</div>
									</div>
								</aside> -->
								<!-- <aside class="widget">
									<h2 class="widget-title">Company profile</h2>
									<div class="textwidget">
										<div class="download">
											<div class="item-download">
												<a href="#" target="_blank" rel="noopener noreferrer">
													<span class="pbmit-download-content">
														<i class="pbmit-base-icon-pdf-file-format-symbol-1"></i> Download Pdf File 
													</span>
													<span class="pbmit-download-item">
														<i class="pbminfotech-base-icons pbmit-righticon pbmit-base-icon-download"></i>
													</span>
												</a>
											</div>
											<div class="item-download">
												<a href="#" target="_blank" rel="noopener noreferrer">
													<span class="pbmit-download-content">
														<i class="pbmit-base-icon-doc-file-format"></i> Download Word File 
													</span>
													<span class="pbmit-download-item">
														<i class="pbminfotech-base-icons pbmit-righticon pbmit-base-icon-download"></i>
													</span>
												</a>
											</div>
										</div>
									</div>
								</aside>
							</aside> -->
						</div>
					</div>
				</div>
            </section>
            <!-- Service Details End -->

        </div>
        <!-- Page Content End -->

<?php get_footer(); ?>
