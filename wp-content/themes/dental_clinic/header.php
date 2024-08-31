<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
  <!-- Google tag (gtag.js) by Abhishikta -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-6P8SC3R03X"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-6P8SC3R03X');
  </script>
  <meta charset="utf-8" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title><?php wp_title('-', true, 'right'); ?></title>
  <meta name="robots" content="index, follow" />
  <meta name="description" content="Expert dental care at Arup Chattopadhyay Dental Clinic. Services include root canal, implants, cosmetic dentistry, and more. Your smile, our priority." />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- CSS
			============================================ -->
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" />

  <?php wp_head(); ?>

</head>

<body>
  <!-- page wrapper -->
  <div class="page-wrapper pbmit-bg-color-light">
    <!-- Header Main Area -->
    <header class="site-header header-style-2">
      <div class="container-fluid">
        <div class="pbmit-header-content d-flex justify-content-between align-items-center">
          <div class="pbmit-logo-menuarea d-flex align-items-center">
            <div class="site-branding">
              <h1 class="site-title">
                <a href="<?php echo esc_url(home_url('/')); ?>">
                  <?php
                  $site_logo = get_field('site_logo', 'option');
                  $site_logo_url = $site_logo['url'];
                  $site_logo_alt = $site_logo['alt'];
                  ?>
                  <img class="pbmit-sticky-logo" src="<?php echo esc_url($site_logo_url); ?>" alt="<?php echo esc_attr($site_logo_alt); ?>" />
                </a>
              </h1>
            </div>
          </div>
          <div class="d-flex justify-content-between align-items-center">
            <div class="site-navigation">
              <nav class="main-menu navbar-expand-xl navbar-light">
                <div class="navbar-header">
                  <!-- Toggle Button -->
                  <button class="navbar-toggler" type="button">
                    <i class="pbmit-base-icon-menu-1"></i>
                  </button>
                </div>
                <div class="pbmit-mobile-menu-bg"></div>
                <div class="collapse navbar-collapse clearfix show" id="pbmit-menu">
                  <div class="pbmit-menu-wrap">
                    <span class="closepanel">
                      <svg class="qodef-svg--close qodef-m" xmlns="http://www.w3.org/2000/svg" width="20.163" height="20.163" viewBox="0 0 26.163 26.163">
                        <rect width="36" height="1" transform="translate(0.707) rotate(45)"></rect>
                        <rect width="36" height="1" transform="translate(0 25.456) rotate(-45)"></rect>
                      </svg>
                    </span>
                    <?php
                    wp_nav_menu(array(
                      'theme_location' => 'primary-menu',
                      'menu_class' => 'navigation clearfix',
                      'container' => false,
                    ));
                    ?>
                  </div>
                </div>
              </nav>
            </div>
          </div>

          <div class="pbmit-right-box d-flex align-items-center">
            <div class="pbmit-button-box">
              <div class="pbmit-header-button">
                <a href="tel:+9876543210">
                  <span class="pbmit-header-button-text-1">+9876543210</span>
                </a>
              </div>
            </div>
            <div class="pbmit-header-search-btn">
              <a href="#" title="Search">
                <i class="pbmit-base-icon-search-1"></i>
              </a>
            </div>
            <div class="pbmit-button-box-second">
              <?php
              $appointment_link = get_field('appointment_link', 'option');
              if ($appointment_link) :
                $appointment_link_url = $appointment_link['url'];
                $appointment_link_title = $appointment_link['title'];
              ?>
                <a class="pbmit-btn" href="<?php echo $appointment_link_url; ?>">
                  <span class="pbmit-button-content-wrapper">
                    <span class="pbmit-button-icon pbmit-align-icon-right">
                      <svg xmlns="http://www.w3.org/2000/svg" width="22.76" height="22.76" viewBox="0 0 22.76 22.76">
                        <title>black-arrow</title>
                        <path d="M22.34,1A14.67,14.67,0,0,1,12,5.3,14.6,14.6,0,0,1,6.08,4.06,14.68,14.68,0,0,1,1.59,1" transform="translate(-0.29 -0.29)" fill="none" stroke="#000" stroke-width="2"></path>
                        <path d="M22.34,1a14.67,14.67,0,0,0,0,20.75" transform="translate(-0.29 -0.29)" fill="none" stroke="#000" stroke-width="2"></path>
                        <path d="M22.34,1,1,22.34" transform="translate(-0.29 -0.29)" fill="none" stroke="#000" stroke-width="2"></path>
                      </svg>
                    </span>
                    <span class="pbmit-button-text"><?php echo  $appointment_link_title; ?></span>
                  </span>
                </a>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    </header>