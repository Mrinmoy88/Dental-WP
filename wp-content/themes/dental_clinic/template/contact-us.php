<?php 
/*
Template Name: Contact US
*/
get_header();
?>
<div class="pbmit-title-bar-wrapper">
		<div class="container">
			<div class="pbmit-title-bar-content">
				<div class="pbmit-title-bar-content-inner">
					<div class="pbmit-tbar">
						<div class="pbmit-tbar-inner container">
							<h1 class="pbmit-tbar-title"> Contact Us</h1>
						</div>
					</div>
					<!-- <div class="pbmit-breadcrumb">
						<div class="pbmit-breadcrumb-inner">
							<span>
								<a title="" href="<?php //echo home_url(); ?>" class="home"><span>Xcare</span></a>
							</span>
							<span class="sep">
								<i class="pbmit-base-icon-right-1"></i>
							</span>
							<span><span class="post-root post post-post current-item"> Contact Us</span></span>
						</div>
					</div> -->
				</div>
			</div> 
		</div> 
	</div>
	<!-- Title Bar End-->

		<!-- Contact Us Content -->
		<div class="page-content contact_us">  

			<!-- Ihbox -->
			<section class="section-xl">
				<div class="container">
					<div class="row">
					<div class="col-md-6 col-xl-4">
    <div class="pbmit-ihbox-style-15">
        <div class="pbmit-ihbox-box">
            <div class="pbmit-icon-wrap d-flex align-items-center">
                <div class="pbmit-ihbox-icon">
                    <div class="pbmit-ihbox-icon-wrapper">
                        <div class="pbmit-icon-wrapper pbmit-icon-type-icon">
                            <i class="pbmit-xcare-icon pbmit-xcare-icon-email"></i>
                        </div>
                    </div>
                </div>
            </div>
            <h2 class="pbmit-element-title"><?php the_field('title'); ?></h2>
            <div class="pbmit-content-wrapper">
                <div class="pbmit-heading-desc">
                    <?php if( have_rows('email_addresses') ): ?>
                        <?php while( have_rows('email_addresses') ): the_row(); ?>
                            <?php $email = get_sub_field('email_address'); ?>
                            <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a><br>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="pbmit-ihbox-btn">
		<a href="javascript:void(0);">
                <span class="pbmit-button-text">Read More</span>
                <span class="pbmit-button-icon-wrapper">
                    <span class="pbmit-button-icon">
                        <i class="pbmit-base-icon-black-arrow-1"></i>
                    </span>
                </span>
            </a>
        </div>
    </div>
</div>


<div class="col-md-6 col-xl-4">
    <div class="pbmit-ihbox-style-15">
        <div class="pbmit-ihbox-box">
            <div class="pbmit-icon-wrap d-flex align-items-center">
                <div class="pbmit-ihbox-icon">
                    <div class="pbmit-ihbox-icon-wrapper">
                        <div class="pbmit-icon-wrapper pbmit-icon-type-icon">
                            <i class="pbmit-xcare-icon pbmit-xcare-icon-phone-call"></i>
                        </div>
                    </div>
                </div>
            </div>
            <h2 class="pbmit-element-title"><?php the_field('ph_title'); ?></h2>
            <div class="pbmit-content-wrapper">
                <div class="pbmit-heading-desc">
                    <?php if( have_rows('phone_numbers') ): ?>
                        <?php while( have_rows('phone_numbers') ): the_row(); ?>
                            <?php 
                            $phone_number = get_sub_field('phone_number'); 
                            $type = get_sub_field('type'); 
                            ?>
                            <?php echo $type; ?> <a href="tel:<?php echo $phone_number; ?>"><?php echo $phone_number; ?></a><br>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="pbmit-ihbox-btn">
		<a href="javascript:void(0);">
                <span class="pbmit-button-text">Read More</span>
                <span class="pbmit-button-icon-wrapper">
                    <span class="pbmit-button-icon">
                        <i class="pbmit-base-icon-black-arrow-1"></i>
                    </span>
                </span>
            </a>
        </div>
    </div>
</div>

<div class="col-md-12 col-xl-4">
    <div class="pbmit-ihbox-style-15">
        <div class="pbmit-ihbox-box">
            <div class="pbmit-icon-wrap d-flex align-items-center">
                <div class="pbmit-ihbox-icon">
                    <div class="pbmit-ihbox-icon-wrapper">
                        <div class="pbmit-icon-wrapper pbmit-icon-type-icon">
                            <i class="pbmit-xcare-icon pbmit-xcare-icon-placeholder"></i>
                        </div>
                    </div>
                </div>
            </div>
            <h2 class="pbmit-element-title"><?php the_field('address_title'); ?></h2>
            <div class="pbmit-content-wrapper">
                <div class="pbmit-heading-desc"><?php the_field('location_description'); ?></div>
            </div>
        </div>
        <div class="pbmit-ihbox-btn">
		<a href="javascript:void(0);">
                <span class="pbmit-button-text">Read More</span>
                <span class="pbmit-button-icon-wrapper">
                    <span class="pbmit-button-icon">
                        <i class="pbmit-base-icon-black-arrow-1"></i>
                    </span>
                </span>
            </a>
        </div>
    </div>
</div>

					</div>
				</div>
			</section>



			<!-- Ihbox End -->

			<!-- Contact Form -->
			<section>
				<div class="container">
					<div class="row g-0">
						<div class="col-md-12 col-xl-6">
							<div class="contact-us-left_img"></div>
						</div>
						<div class="col-md-12 col-xl-6">
							<div class="contact-form-one_right pbmit-bg-color-white">
								<div class="pbmit-heading-subheading">
									<h4 class="pbmit-subtitle"><?php echo get_field('contact_us_subtitle') ?></h4>
									<h2 class="pbmit-title"><?php echo get_field('contact_us_description') ?></h2>
								</div>
								<?php echo do_shortcode('[contact-form-7 id="f3280d6" title="Contact Us"]') ?>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- Contact Form End -->

			<!-- Client Start -->
			<section class="section-lg">
	<div class="container">
		<div class="swiper-slider" data-autoplay="true" data-loop="true" data-dots="false" data-arrows="false" data-columns="6" data-margin="30" data-effect="slide">
			<div class="swiper-wrapper">
				<?php //if( have_rows('clients') ): ?>
					<?php //while( have_rows('clients') ): the_row(); 
						//$client_name = get_sub_field('client_name');
						//$client_hover_image = get_sub_field('client_hover_image');
						//$client_dark_image = get_sub_field('client_dark_image');
					?>
					<div class="swiper-slide">
						<article class="pbmit-client-style-1">
							<div class="pbmit-border-wrapper">
								<div class="pbmit-client-wrapper pbmit-client-with-hover-img">
									<h4 class="pbmit-hide"><?php //echo esc_html($client_name); ?></h4>
									<div class="pbmit-client-hover-img">
										<img src="<?php //echo esc_url($client_hover_image['url']); ?>" alt="<?php //echo esc_attr($client_hover_image['alt']); ?>">
									</div>
									<div class="pbmit-featured-img-wrapper">
										<div class="pbmit-featured-wrapper">
											<img src="<?php //echo esc_url($client_dark_image['url']); ?>" class="img-fluid" alt="<?php //echo esc_attr($client_dark_image['alt']); ?>">
										</div>
									</div>
								</div>
							</div>
						</article>
					</div>
					<?php //endwhile; ?>
				<?php//endif; ?>
			</div>
		</div>
	</div>
</section>

			<!-- Client End -->
			
			<!-- Iframe -->
			<section class="iframe_section section-lgb">
				<div class="container-fluid">
					<div class="iframe_box">
						<?php echo get_field('map') ?>
					</div>
				</div>
			</section>
			<!-- Iframe End-->

		</div>
		<!-- Contact Us Content End -->

        <?php 
        get_footer();
        ?>