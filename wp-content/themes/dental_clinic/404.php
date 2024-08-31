<?php get_header(); ?>
<section class="section-xl">
    <div class="container">
        <div class="pbmit-heading-subheading text-center">
<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <section class="error-404 not-found">
            <header class="page-header">
                <h1 class="page-title"><?php esc_html_e( 'Oops! Page not found', 'your-theme-textdomain' ); ?></h1>
            </header><!-- .page-header -->

            <div class="page-content">
                <p><?php esc_html_e( 'It looks like nothing was found at this location. Please try searching below:', 'your-theme-textdomain' ); ?></p>

                <?php get_search_form(); ?>
            </div><!-- .page-content -->
        </section><!-- .error-404 -->
    </main><!-- #main -->
</div><!-- #primary -->
</div>
</div>
</div>

<?php get_footer(); ?>
