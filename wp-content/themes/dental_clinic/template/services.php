<?php 
/*
Template Name: treatments
*/
get_header();
?>




<!-- Title Bar -->
<div class="pbmit-title-bar-wrapper">
    <div class="container">
        <div class="pbmit-title-bar-content">
            <div class="pbmit-title-bar-content-inner">
                <div class="pbmit-tbar">
                    <div class="pbmit-tbar-inner container">
                        <h1 class="pbmit-tbar-title">Treatments</h1>
                    </div>
                </div>
                <!-- <div class="pbmit-breadcrumb">
                    <div class="pbmit-breadcrumb-inner">
                        <span>
                            <a title="<?php //bloginfo('name'); ?>" href="<?php //echo home_url(); ?>" class="home"><span><?php //bloginfo('name'); ?></span></a>
                        </span>
                        <span class="sep">
                            <i class="pbmit-base-icon-angle-double-right"></i>
                        </span>
                        <span><span class="post-root post post-post current-item">Treatment</span></span>
                    </div>
                </div> -->
            </div>
        </div> 
    </div> 
</div>
<!-- Title Bar End-->

<div class="page-content">  

<!-- Blog Grid Col 3 -->
<section class="section-lgx pbmit-blog-column-three">
    <div class="container">
        <div class="row pbmit-element-posts-wrapper">
            <?php
            // WP_Query arguments
            $args = array(
                'post_type' => 'treatment', // Assuming your post type is 'post'
                'posts_per_page' => -1, // -1 to display all posts, adjust as needed
                //'category_name' => 'treatment', // Category slug for treatment posts
                // Add more parameters as needed, such as orderby, order, etc.
            );

            // The Query
            $query = new WP_Query($args);

            // The Loop
            if ($query->have_posts()) :
                while ($query->have_posts()) :
                    $query->the_post();
            ?>
            <article class="pbmit-blog-style-1 col-md-4">
                <div class="post-item">
                    <div class="pbminfotech-box-content">
                        <div class="pbmit-featured-container">
                            <div class="pbmit-featured-img-wrapper">
                                <div class="pbmit-featured-wrapper">
                                    <?php
                                    if (has_post_thumbnail()) {
                                        the_post_thumbnail('thumbnail', array('class' => 'img-fluid', 'alt' => get_the_title()));
                                    } 
                                    // else {
                                    //     // Placeholder image if no featured image available
                                    //     echo '<img src="' . get_template_directory_uri() . '/images/default-thumbnail.jpg" class="img-fluid" alt="Default Thumbnail">';
                                    // }
                                    ?>
                                </div>
                            </div>
                            <a class="pbmit-blog-btn" href="<?php the_permalink(); ?>">
                                <span class="pbmit-button-icon-wrapper">
                                    <span class="pbmit-button-icon">
                                        <i class="pbmit-base-icon-black-arrow-1"></i>
                                    </span>
                                </span>
                            </a>
                            <div class="pbmit-meta-cat-wrapper pbmit-meta-line">
                                <div class="pbmit-meta-category">
                                  <?php
                                    //$categories = get_the_category();
                                    //if (!empty($categories)) {
                                      //  echo '<a href="' . esc_url(get_category_link($categories[0]->term_id)) . '" rel="category tag">' . esc_html($categories[0]->name) . '</a>';
                                   // }
                                    ?> 
                                </div>
                            </div>
                            <a class="pbmit-link" href="<?php the_permalink(); ?>"></a>
                        </div>
                        <div class="pbmit-category-date-wraper d-flex align-items-center">
                            <div class="pbmit-meta-date-wrapper pbmit-meta-line">
                                <div class="pbmit-meta-date">
                                    <!-- <span class="pbmit-post-date">
                                        <i class="pbmit-base-icon-calendar-3"></i><?php //echo get_the_date('F j, Y'); ?>
                                    </span> -->
                                </div>
                            </div>
                            <div class="pbmit-meta-author pbmit-meta-line">
                                <!-- <span class="pbmit-post-author">
                                    <i class="pbmit-base-icon-user-3"></i><?php //the_author(); ?>
                                </span> -->
                            </div>
                        </div>
                        <div class="pbmit-content-wrapper">
                            <h3 class="pbmit-post-title">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h3>
                        </div>
                    </div>
                </div>
            </article>
            <?php
                endwhile;
                wp_reset_postdata(); // Reset post data to avoid conflicts
            else :
                echo '<p>No posts found</p>';
            endif;
            ?>
        </div>
    </div>
</section>
<!-- Blog Grid Col 3 End -->

</div>
<?php 
get_footer();
?>