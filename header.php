<!DOCTYPE html>
<html>
    <head>
        <meta charset="<?php bloginfo('charshet'); ?>">
        <meta name="viewport" content="width=device-width">
        <title><?php bloginfo('name'); ?></title>
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>

        <div class="container">

            <!-- site-header -->

            <div class="siteheader__logo">
                <a href="<?php echo home_url(); ?>">
                  <img src="<?php echo home_url(); ?>/resources/logo.png">
                </a>
            </div>

            <div class="siteheader__title">
                <a href="<?php echo home_url(); ?>">
                  <?php echo bloginfo('name'); ?>
                </a>
            </div>


              <form>
                <div class="searchbar">
                  <input type="text" name="lookfor" value="Search">
                </div>
              </form>


          <div class="site-nav" >
            <nav class="site-nav">
                <?php
                $args = array(
                    'theme_location' => 'primary'
                );
                ?>

                <?php wp_nav_menu( $args ); ?>

            </nav>

          </div>

          <div style="clear: both;"> </div>
