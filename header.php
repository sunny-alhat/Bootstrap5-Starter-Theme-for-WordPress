<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php
        // Insert wp head scripts 
        wp_head();

        // Header Scripts Widget
        dynamic_sidebar('header-scripts-widget') 
    ?>

  </head>
  <body>

    <header class="mb-5">

        <!-- Navigation bar -->
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">

                    <!-- Display Custom Logo Here     -->
                    <?php
                        if( function_exists('the_custom_logo') ){
                            
                            $custom_logo_id = get_theme_mod('custom_logo');
                            $logo = wp_get_attachment_image_src($custom_logo_id);

                        }
                    ?>
                    <img src="<?= $logo[0] ?>" alt="" style="width:50px;">

                    <!-- Display custom site name here -->
                    <?= get_bloginfo('name') ?>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <!-- dynamic custom menu -->
                    <?php
                        wp_nav_menu(
                            array(
                                'menu'  => 'primary',
                                'container' => '',
                                'theme_location' => 'primary',
                                'items_wrap' => '<ul id="bswp-navbar" class="navbar-nav ms-auto mb-2 mb-lg-0">%3$s</ul>'
                            )
                        );
                    ?>

                </div>
            </div>
        </nav>

    </header>