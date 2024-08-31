<?php
/*
Template Name: Blog 
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
                        <h1 class="pbmit-tbar-title"><?php the_title(); ?></h1>
                    </div>
                </div>
                <!-- <div class="pbmit-breadcrumb">
                    <div class="pbmit-breadcrumb-inner">
                        <span>
                            <a title="" href="<?php //echo home_url(); ?>" class="home"><span>Xcare</span></a>
                        </span>
                        <span class="sep">
                            <i class="pbmit-base-icon-angle-double-right"></i>
                        </span>
                        <span><span class="post-root post post-post current-item"><?php //the_title(); ?></span></span>
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
            // Query for fetching posts
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 6, // Adjust the number of posts as needed
            );
            $query = new WP_Query($args);
            if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post();
                    $categories = get_the_category();
                    $category_name = !empty($categories) ? esc_html($categories[0]->name) : '';
                    $category_link = !empty($categories) ? esc_url(get_category_link($categories[0]->term_id)) : '';
                    ?>
                    <article class="pbmit-blog-style-1 col-md-4">
                        <div class="post-item">
                            <div class="pbminfotech-box-content">
                                <div class="pbmit-featured-container">
                                    <div class="pbmit-featured-img-wrapper">
                                        <div class="pbmit-featured-wrapper">
                                            <?php if (has_post_thumbnail()) : ?>
                                                <img src="<?php the_post_thumbnail_url('full'); ?>" class="img-fluid" alt="<?php the_title(); ?>">
                                            <?php endif; ?>
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
                                            <!-- <a href="<?php //echo $category_link; ?>" rel="category tag"><?php //echo $category_name; ?></a> -->
                                        </div>
                                    </div>
                                    <a class="pbmit-link" href="<?php the_permalink(); ?>"></a>
                                </div>
                                <div class="pbmit-category-date-wraper d-flex align-items-center">
                                    <div class="pbmit-meta-date-wrapper pbmit-meta-line">
                                        <div class="pbmit-meta-date">
                                            <span class="pbmit-post-date">
                                                <i class="pbmit-base-icon-calendar-3"></i><?php echo get_the_date('F j, Y'); ?>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="pbmit-meta-author pbmit-meta-line">
                                        <span class="pbmit-post-author">
                                            <i class="pbmit-base-icon-user-3"></i><?php the_author(); ?>
                                        </span>
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
                wp_reset_postdata();
            else :
                echo '<p>' . esc_html__('No posts found', 'text-domain') . '</p>';
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
