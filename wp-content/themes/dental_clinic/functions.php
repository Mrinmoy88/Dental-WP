<?php
// Theme setup
function dental_clinic_setup() {
    // Make theme available for translation
    load_theme_textdomain( 'dental-clinic', get_template_directory() . '/languages' );

    // Add default posts and comments RSS feed links to head
    add_theme_support( 'automatic-feed-links' );

    add_theme_support(
        'post-formats',
        array(
            'link',
            'aside',
            'gallery',
            'image',
            'quote',
            'status',
            'video',
            'audio',
            'chat',
        )
    );
    // Let WordPress manage the document title
    add_theme_support( 'title-tag' );

    // Enable support for Post Thumbnails on posts and pages
    add_theme_support( 'post-thumbnails' );

    // Switch default core markup for search form, comment form, and comments to output valid HTML5
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ) );

    // Enable support for custom logo
    add_theme_support( 'custom-logo', array(
        'height'      => 50,
        'width'       => 200,
        'flex-height' => true,
        'flex-width'  => true,
    ) );

    // Add theme support for selective refresh for widgets
    add_theme_support( 'customize-selective-refresh-widgets' );

    // Add support for editor styles
    add_theme_support( 'editor-styles' );
    add_editor_style( 'style-editor.css' );
}
add_action( 'after_setup_theme', 'dental_clinic_setup' );

function register_my_menus() {
    register_nav_menus(
        array(
            'primary-menu' => __('Primary Menu'),
            'footer-menu' => __( 'Footer Menu' ),
            'secondery-menu'=> __('Secondery Menu'),
            'blog-menu'=>__('Blog Menu')
        )
    );
}
add_action('init', 'register_my_menus');

if(function_exists('acf_add_options_page')){
    acf_add_options_page();

    acf_add_options_page(array(
        'page_title'=> 'Admin Logo Settings',
        'menu_title'=>  'Admin Logo',
        'menu_slug' =>  'admin-logo-settings',
        'capability'=> 'manage-options',
        'redirect' => false
    ));
}


add_action('init', 'flush_rewrite_rules');


// Add custom classes to specific menu items
function custom_menu_item_classes($classes, $item, $args) {
    // Check if this is the menu item you want to target (based on ID)
    if ($item->ID == 349) {
        // Add your custom class to the existing classes array
        $classes[] = 'dropdown'; // Replace 'dropdown-class' with your desired class name
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'custom_menu_item_classes', 10, 3);

function enqueue_custom_search_script() {
    wp_enqueue_script('custom-search-toggle', get_template_directory_uri() . '/js/custom-search-toggle.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_custom_search_script');




function my_theme_enqueue_styles() {
    // Bootstrap CSS
    wp_enqueue_style(
        'bootstrap-css',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css',
        array(),
        '5.0.2'
    );

    // Fontawesome
    wp_enqueue_style(
        'fontawesome-css',
        get_template_directory_uri() . '/assets/css/fontawesome.css',
        array(),
        '1.0.0'
    );

    // Flaticon
    wp_enqueue_style(
        'flaticon-css',
        get_template_directory_uri() . '/assets/css/flaticon.css',
        array(),
        '1.0.0'
    );

    // Base Icons
    wp_enqueue_style(
        'pbminfotech-base-icons-css',
        get_template_directory_uri() . '/assets/css/pbminfotech-base-icons.css',
        array(),
        '1.0.0'
    );

    // Themify Icons
    wp_enqueue_style(
        'themify-icons-css',
        get_template_directory_uri() . '/assets/css/themify-icons.css',
        array(),
        '1.0.0'
    );

    // Swiper
    wp_enqueue_style(
        'swiper-css',
        get_template_directory_uri() . '/assets/css/swiper.min.css',
        array(),
        '1.0.0'
    );

    // Magnific Popup
    wp_enqueue_style(
        'magnific-popup-css',
        get_template_directory_uri() . '/assets/css/magnific-popup.css',
        array(),
        '1.0.0'
    );

    // AOS
    wp_enqueue_style(
        'aos-css',
        get_template_directory_uri() . '/assets/css/aos.css',
        array(),
        '1.0.0'
    );

    // Shortcode CSS
    wp_enqueue_style(
        'shortcode-css',
        get_template_directory_uri() . '/assets/css/shortcode.css',
        array(),
        '1.0.0'
    );

    // Base CSS
    wp_enqueue_style(
        'base-css',
        get_template_directory_uri() . '/assets/css/base.css',
        array(),
        '1.0.0'
    );

    // Custom Style CSS
    wp_enqueue_style(
        'custom-style-css',
        get_template_directory_uri() . '/assets/css/custom_style.css',
        array(),
        '1.0.0'
    );

    // Responsive CSS
    wp_enqueue_style(
        'responsive-css',
        get_template_directory_uri() . '/assets/css/responsive.css',
        array(),
        '1.0.0'
    );
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');

function my_theme_enqueue_scripts() {
    // jQuery
    wp_enqueue_script(
        'jquery',
        'https://code.jquery.com/jquery-3.7.1.js',
        array(),
        '3.7.1',
        true
    );

    // Popper.js
    wp_enqueue_script(
        'popper',
        'https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js',
        array(),
        '2.9.2',
        true
    );

    // Bootstrap JS
    wp_enqueue_script(
        'bootstrap',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js',
        array('jquery', 'popper'),
        '5.0.2',
        true
    );

    // jQuery Waypoints
    wp_enqueue_script(
        'jquery-waypoints',
        get_template_directory_uri() . '/assets/custom_js/jquery.waypoints.min.js',
        array('jquery'),
        '1.0.0',
        true
    );

    // jQuery Appear
    wp_enqueue_script(
        'jquery-appear',
        get_template_directory_uri() . '/assets/custom_js/jquery.appear.js',
        array('jquery'),
        '1.0.0',
        true
    );

    // Numinate
    wp_enqueue_script(
        'numinate',
        get_template_directory_uri() . '/assets/custom_js/numinate.min.js',
        array('jquery'),
        '1.0.0',
        true
    );

    // Swiper JS
    wp_enqueue_script(
        'swiper',
        'https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.js',
        array('jquery'),
        '11.0.5',
        true
    );

    // Magnific Popup
    wp_enqueue_script(
        'magnific-popup',
        'https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.2.0/jquery.magnific-popup.min.js',
        array('jquery'),
        '1.2.0',
        true
    );

    // Circle Progress
    wp_enqueue_script(
        'circle-progress',
        get_template_directory_uri() . '/assets/custom_js/circle-progress.js',
        array('jquery'),
        '1.0.0',
        true
    );

    // jQuery Countdown
    wp_enqueue_script(
        'jquery-countdown',
        get_template_directory_uri() . '/assets/custom_js/jquery.countdown.min.js',
        array('jquery'),
        '1.0.0',
        true
    );

    // AOS
    wp_enqueue_script(
        'aos',
        get_template_directory_uri() . '/assets/custom_js/aos.js',
        array('jquery'),
        '1.0.0',
        true
    );

    // GSAP
    wp_enqueue_script(
        'gsap',
        'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js',
        array('jquery'),
        '3.12.5',
        true
    );

    // ScrollTrigger
    wp_enqueue_script(
        'scrolltrigger',
        'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js',
        array('jquery', 'gsap'),
        '3.12.5',
        true
    );

    // SplitText
    wp_enqueue_script(
        'splittext',
        get_template_directory_uri() . '/assets/custom_js/SplitText.js',
        array('jquery', 'gsap'),
        '1.0.0',
        true
    );

    // Magnetic
    wp_enqueue_script(
        'magnetic',
        get_template_directory_uri() . '/assets/custom_js/magnetic.js',
        array('jquery'),
        '1.0.0',
        true
    );

    // GSAP Animation
    wp_enqueue_script(
        'gsap-animation',
        get_template_directory_uri() . '/assets/custom_js/gsap-animation.js',
        array('jquery', 'gsap'),
        '1.0.0',
        true
    );

    // Custom Scripts
    wp_enqueue_script(
        'custom-scripts',
        get_template_directory_uri() . '/assets/custom_js/scripts.js',
        array('jquery'),
        '1.0.0',
        true
    );
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_scripts');




// Register Custom Post Type
function custom_register_treatment_post_type() {
    $labels = array(
        'name' => 'Treatments',
        'singular_name' => 'Treatment',
        'menu_name' => 'Treatments',
        'add_new' => 'Add New',
        'add_new_item' => 'Add New Treatment',
        'edit_item' => 'Edit Treatment',
        'new_item' => 'New Treatment',
        'view_item' => 'View Treatment',
        'search_items' => 'Search Treatments',
        'not_found' => 'No treatments found',
        'not_found_in_trash' => 'No treatments found in Trash',
        'parent_item_colon' => 'Parent Treatment:',
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'rewrite' => array( 'slug' => 'treatment' ),
        'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields' ),
    );

    register_post_type( 'treatment', $args );
}
add_action( 'init', 'custom_register_treatment_post_type' );

// Register Custom Taxonomy
function custom_register_treatment_taxonomy() {
    $labels = array(
        'name' => 'Treatment Categories',
        'singular_name' => 'Treatment Category',
        'search_items' => 'Search Treatment Categories',
        'all_items' => 'All Treatment Categories',
        'parent_item' => 'Parent Treatment Category',
        'parent_item_colon' => 'Parent Treatment Category:',
        'edit_item' => 'Edit Treatment Category',
        'update_item' => 'Update Treatment Category',
        'add_new_item' => 'Add New Treatment Category',
        'new_item_name' => 'New Treatment Category Name',
        'menu_name' => 'Treatment Categories',
    );

    $args = array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array( 'slug' => 'treatment-category' ),
    );

    register_taxonomy( 'treatment_category', array( 'treatment' ), $args );
}
add_action( 'init', 'custom_register_treatment_taxonomy' );


function create_image_post_type() {
    $labels = array(
        'name'                  => _x('Images', 'Post Type General Name', 'text_domain'),
        'singular_name'         => _x('Image', 'Post Type Singular Name', 'text_domain'),
        'menu_name'             => __('Images', 'text_domain'),
        'name_admin_bar'        => __('Image', 'text_domain'),
        'archives'              => __('Image Archives', 'text_domain'),
        'attributes'            => __('Image Attributes', 'text_domain'),
        'parent_item_colon'     => __('Parent Image:', 'text_domain'),
        'all_items'             => __('All Images', 'text_domain'),
        'add_new_item'          => __('Add New Image', 'text_domain'),
        'add_new'               => __('Add New', 'text_domain'),
        'new_item'              => __('New Image', 'text_domain'),
        'edit_item'             => __('Edit Image', 'text_domain'),
        'update_item'           => __('Update Image', 'text_domain'),
        'view_item'             => __('View Image', 'text_domain'),
        'view_items'            => __('View Images', 'text_domain'),
        'search_items'          => __('Search Image', 'text_domain'),
        'not_found'             => __('Not found', 'text_domain'),
        'not_found_in_trash'    => __('Not found in Trash', 'text_domain'),
        'featured_image'        => __('Featured Image', 'text_domain'),
        'set_featured_image'    => __('Set featured image', 'text_domain'),
        'remove_featured_image' => __('Remove featured image', 'text_domain'),
        'use_featured_image'    => __('Use as featured image', 'text_domain'),
        'insert_into_item'      => __('Insert into image', 'text_domain'),
        'uploaded_to_this_item' => __('Uploaded to this image', 'text_domain'),
        'items_list'            => __('Images list', 'text_domain'),
        'items_list_navigation' => __('Images list navigation', 'text_domain'),
        'filter_items_list'     => __('Filter images list', 'text_domain'),
    );

    $args = array(
        'label'                 => __('Image', 'text_domain'),
        'description'           => __('A custom post type for images', 'text_domain'),
        'labels'                => $labels,
        'supports'              => array('title', 'thumbnail'),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
    );

    register_post_type('image_post', $args);
}
add_action('init', 'create_image_post_type', 0);


function custom_cf7_js() {
    ?>
    <script>
    jQuery(document).ready(function($) {
        $('.wpcf7-form').on('submit', function(event) {
            var isValid = true;

            // Clear previous error messages
            $('#phone-error-message').hide();
            $('.form-control').removeClass('error');

            // Validate name field (minimum 3 characters)
            var nameField = $('#name');
            if (nameField.val().trim().length < 3) {
                isValid = false;
                nameField.addClass('error');
            }

            // Validate email field (basic email format)
            var emailField = $('#email');
            var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailPattern.test(emailField.val().trim())) {
                isValid = false;
                emailField.addClass('error');
            }

            // Validate phone field (exactly 10 digits)
            var phoneField = $('#phone');
            var phonePattern = /^\d{10}$/;
            if (!phonePattern.test(phoneField.val().trim())) {
                isValid = false;
                phoneField.addClass('error');
                $('#phone-error-message').show();
            }

            // Validate subject field (minimum 3 characters)
            var subjectField = $('#subject');
            if (subjectField.val().trim().length < 3) {
                isValid = false;
                subjectField.addClass('error');
            }

            // Validate message field (minimum 10 characters)
            var messageField = $('#message');
            if (messageField.val().trim().length < 10) {
                isValid = false;
                messageField.addClass('error');
            }

            if (!isValid) {
                event.preventDefault(); // Prevent form submission
            }
        });
    });
    </script>
    <?php
}
add_action('wp_footer', 'custom_cf7_js');














