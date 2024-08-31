<?php get_header(); ?>

<section class="section-lgx pbmit-blog-column-three">
    <div class="container">
        <div class="row pbmit-element-posts-wrapper">
<div class="search-results-container">
    <h1 class="page-title"><?php printf( esc_html__( 'Search Results for: %s', 'your-theme-textdomain' ), '<span>' . get_search_query() . '</span>' ); ?></h1>

    <?php if ( have_posts() ) : ?>
        <div class="search-results">
            <?php while ( have_posts() ) : the_post(); ?>
                <div class="search-result-item">
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <div class="search-result-excerpt">
                        <?php the_excerpt(); ?>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    <?php else : ?>
        <div class="no-results">
            <h2><?php esc_html_e( 'Nothing Found', 'your-theme-textdomain' ); ?></h2>
            <p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with different keywords.', 'your-theme-textdomain' ); ?></p>
            <?php get_search_form(); ?>
        </div>
    <?php endif; ?>
</div>
</div>
    </div>
</section>
<?php get_footer(); ?>
