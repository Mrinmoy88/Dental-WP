<?php get_header(); ?>

<div class="pbmit-title-bar-wrapper">
	<div class="container">
		<div class="pbmit-title-bar-content">
			<div class="pbmit-title-bar-content-inner">
				<div class="pbmit-tbar">
					<div class="pbmit-tbar-inner container">
						<h1 class="pbmit-tbar-title"><?php the_title(); ?></h1>
					</div>
				</div>
				<div class="pbmit-breadcrumb">
					<div class="pbmit-breadcrumb-inner">
						<!-- <span>
							<a title="" href="<?php //echo esc_url(home_url('/')); 
												?>" class="home"><span>Xcare</span></a>
						</span> -->
						<!-- <span class="sep">
							<i class="pbmit-base-icon-angle-double-right"></i>
						</span> -->
						<!-- <span>
							<span class="post-root post post-post current-item"><?php //the_category(', '); 
																				?></span>
						</span> -->
						<!-- <span class="sep">
							<i class="pbmit-base-icon-angle-double-right"></i>
						</span> -->
						<span>
							<span class="post-root post post-post current-item"><?php //the_title(); 
																				?></span>
						</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Title Bar End-->

<!-- Page Content -->
<div class="page-content">
	<!-- Blog Single Details -->
	<section class="site_content blog-details">
		<div class="container">
			<div class="row">
				<div class="col-lg-9 blog-right-col">
					<div class="row">
						<div class="col-md-12">
							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
									<article>
										<div class="post blog-classic">
											<div class="pbmit-featured-img-wrapper">
												<div class="pbmit-featured-wrapper">
													<?php $banner = get_field('banner');
													if ($banner) {
														echo '<img src="' . esc_url($banner) . '" alt="Banner">';
													} ?>

												</div>
												<span class="pbmit-meta pbmit-meta-cat">
													<?php //the_category(' '); 
													?>
												</span>
											</div>
											<div class="pbmit-blog-classic-inner">
												<div class="pbmit-blog-meta pbmit-blog-meta-top">
													<span class="pbmit-meta pbmit-meta-date">
														<i class="pbmit-base-icon-calendar-3"></i>
														<!-- <a href="<?php //the_permalink(); 
																		?>" rel="bookmark"> -->
														<time class="entry-date published" datetime="<?php echo get_the_date('c'); ?>"><?php echo get_the_date(); ?></time>
														<!-- </a> -->
													</span>
													<span class="pbmit-meta pbmit-meta-author">
														<i class="pbmit-base-icon-user-3"></i>
														<!-- <a class="pbmit-author-link" href="<?php //echo get_author_posts_url(get_the_author_meta('ID')); 
																								?>"></a> -->
														<?php the_author(); ?>
													</span>
													<span class="pbmit-meta pbmit-meta-comments pbmit-comment-bigger-than-zero">
														<i class="pbmit-base-icon-chat-3"></i>
														<?php comments_number('No Comments', '1 Comment', '% Comments'); ?>
													</span>
												</div>
												<div class="pbmit-entry-content">
													<?php the_content(); ?>
												</div>
												<div class="pbmit-blog-meta-bottom">
													<div class="pbmit-blog-meta-bottom-left">
														<span class="pbmit-meta-tags">
															<?php the_tags('', ' ', ''); ?>
														</span>
													</div>
												</div>
											</div>
										</div>
										<nav class="navigation post-navigation" aria-label="Posts">
											<div class="nav-links">
												<div class="nav-previous">
													<?php previous_post_link('%link', '<span class="pbmit-post-nav-icon"><i class="pbmit-base-icon-left-arrow-1"></i><span class="pbmit-post-nav-head">Previous Post</span></span><span class="pbmit-post-nav-wrapper"><span class="pbmit-post-nav nav-title">%title</span></span>'); ?>
												</div>
												<div class="nav-next">
													<?php next_post_link('%link', '<span class="pbmit-post-nav-icon"><span class="pbmit-post-nav-head">Next Post</span><i class="pbmit-base-icon-next"></i></span><span class="pbmit-post-nav-wrapper"><span class="pbmit-post-nav nav-title">%title</span></span>'); ?>
												</div>
											</div>
										</nav>
										<!-- <div class="pbmit-author-box">
										<div class="pbmit-author-image">
											<?php //echo get_avatar(get_the_author_meta('ID'), 96, '', '', array('class' => 'img-fluid')); 
											?>		
										</div>
										<div class="pbmit-author-content">
											<span class="pbmit-author-name">
												<a href="<?php //echo get_author_posts_url(get_the_author_meta('ID')); 
															?>" title="Posted by <?php the_author(); ?>" rel="author"><?php the_author(); ?></a>
											</span>
											<p class="pbmit-text pbmit-author-bio"><?php //the_author_meta('description'); 
																					?></p>
										</div>
									</div> -->
									</article>
									<div class="comments-area">
										<?php
										// If comments are open or we have at least one comment, load up the comment template.
										if (comments_open() || get_comments_number()) :
											comments_template();
										endif;
										?>
									</div>
							<?php endwhile;
							endif; ?>
						</div>
					</div>
				</div>
				<div class="col-md-12 col-lg-3 blog-left-col">
					<aside class="sidebar">
						<!-- <aside class="widget widget-search">
                        <h2 class="widget-title">Search</h2>
                        <form class="search-form" method="get" action="<?php //echo esc_url(home_url('/')); 
																		?>">
                            <input type="search" class="search-field" placeholder="Search …" value="<? php //echo get_search_query(); 
																									?>" name="s" title="Search for:" />
                            <button type="submit" class="search-submit"><span class="screen-reader-text">Search</span></button>
                            <input type="hidden" name="post_type" value="post">
                        </form>
                        <div class="search-results"></div>
                    </aside> -->

						<!-- <aside class="widget widget-categories">
							<h2 class="widget-title">Categories</h2>
							<ul>
								<?php //wp_list_categories(array('title_li' => '', 'show_count' => true)); 
								?>
							</ul>
						</aside> -->
						<aside class="widget widget-recent-post">
							<h2 class="widget-title">Recent Post </h2>
							<ul class="recent-post-list">
								<?php
								$recent_posts = wp_get_recent_posts(array('numberposts' => 3, 'post_status' => 'publish'));
								foreach ($recent_posts as $post) :
								?>
									<li class="recent-post-list-li">
										<a class="recent-post-thum" href="<?php echo get_permalink($post['ID']); ?>">
											<?php echo get_the_post_thumbnail($post['ID'], 'thumbnail', array('class' => 'img-fluid')); ?>
										</a>
										<div class="pbmit-rpw-content">
											<span class="pbmit-rpw-date">
												<a href="<?php echo get_permalink($post['ID']); ?>"><?php echo get_the_date('', $post['ID']); ?></a>
											</span>
											<span class="pbmit-rpw-title">
												<a href="<?php echo get_permalink($post['ID']); ?>"><?php echo $post['post_title']; ?></a>
											</span>
										</div>
									</li>
								<?php endforeach;
								wp_reset_query(); ?>
							</ul>
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
									<a class="pbmit-btn" href="#">
										<span class="pbmit-button-content-wrapper">
											<span class="pbmit-button-icon pbmit-align-icon-right">
												<svg xmlns="http://www.w3.org/2000/svg" width="22.76" height="22.76" viewBox="0 0 22.76 22.76">
													<title>black-arrow</title>
													<path d="M22.5,12.09a1.26,1.26,0,0,0-.4-1L12.63.56a1.32,1.32,0,0,0-1.84,1.88l7.84,7.81H1.34a1.32,1.32,0,1,0,0,2.64H18.63l-7.84,7.81a1.32,1.32,0,0,0,1.84,1.88l9.47-9.47A1.26,1.26,0,0,0,22.5,12.09Z" transform="translate(0 -0.09)" fill="#ffffff"></path>
												</svg>					
											</span>
											<span class="pbmit-button-text">Subscribe now</span>
										</span>
									</a>
								</div>						
							</div>
						</aside> -->
					</aside>
				</div>
			</div>
		</div>
	</section>
	<!-- Blog Single Details End -->

</div>
<!-- Page Content End -->



<?php get_footer(); ?>