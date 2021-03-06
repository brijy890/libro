<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
  <title><?php bloginfo('title'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(); ?></title>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

  <nav id="colorlib-main-nav" role="navigation">
    <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle active"><i></i></a>
    <div class="js-fullheight colorlib-table">
      <div class="colorlib-table-cell js-fullheight">
        <div class="row d-flex justify-content-end">
          <div class="col-md-12 px-5">
            <ul class="mb-5">
              <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </nav>

  <div id="colorlib-page">
    <header>
      <div class="container-fluid">
        <div class="row no-gutters">
          <div class="col-md-12">
            <div class="colorlib-navbar-brand">
              <a class="colorlib-logo" href="<?php echo get_option('siteurl'); ?>"><?php bloginfo('title'); ?></a>
            </div>
            <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
          </div>
        </div>
      </div>
    </header>

    <section class="ftco-fixed clearfix">
      <div class="image js-fullheight float-left">
        <div class="home-slider owl-carousel js-fullheight">
          <div class="slider-item js-fullheight" style="background-image: url(<?php echo get_theme_mod('showcase_one_image', get_bloginfo('template_directory').'/images/bg_1.jpg'); ?>);">
            <div class="overlay"></div>
            <div class="container">
              <div class="row slider-text align-items-end" data-scrollax-parent="true">
                <div class="col-md-10 col-sm-12 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                  <p class="cat"><span><?php echo get_theme_mod('showcase_one_cat', 'Fashion'); ?></span></p>
                  <h1 class="mb-3" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><?php echo get_theme_mod('showcase_one_heading', 'Libro showcase_one'); ?></h1>
                </div>
              </div>
            </div>
          </div>

          <div class="slider-item js-fullheight" style="background-image: url(<?php echo get_theme_mod('showcase_two_image', get_bloginfo('template_directory').'/images/bg_1.jpg'); ?>);">
            <div class="overlay"></div>
            <div class="container">
              <div class="row slider-text align-items-end" data-scrollax-parent="true">
                <div class="col-md-10 col-sm-12 ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                  <p class="cat"><span><?php echo get_theme_mod('showcase_two_cat', 'Fashion'); ?></span></p>
                  <h1 class="mb-3" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><?php echo get_theme_mod('showcase_two_heading', 'Libro showcase_one'); ?></h1>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>