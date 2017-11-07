<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="<?php bloginfo('description'); ?>">

    <title>
        <?php bloginfo('name'); ?> | 
        <?php is_front_page() ? bloginfo('description') : wp_title(); ?>
    </title>

    <!-- Bootstrap core CSS -->
    <link href="<?php bloginfo('template_url'); ?>/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
    <script src="https://use.fontawesome.com/b4b014f1e6.js"></script>

    <?php wp_head(); ?>

  </head>

  <body>

    <div class="blog-masthead">
      <div class="container">
        <nav class="blog-nav">
        <?php
        wp_nav_menu( array(
            'menu'              => 'primary',
            'theme_location'    => 'primary',
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse',
            'container_id'      => 'bs-example-navbar-collapse-1',
            'menu_class'        => 'nav navbar-nav',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker()
            )
        );
    ?>
        </nav>
      </div>
    </div>


    <section class="showcase">
            <div class="container">
                <h1><?php echo get_theme_mod('showcase_heading', 'Custom Bootstrap WordPress Theme'); ?></h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                <a href="#" class="btn btn-primary btn-lg">Read More</a>
            </div>
        </section>

        <section class="boxes">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                            <?php if(is_active_sidebar('box1')) : ?>
                                <?php dynamic_sidebar('box1'); ?>
                            <?php endif; ?>
                    </div>

                    <div class="col-md-4">
                            <?php if(is_active_sidebar('box2')) : ?>
                                <?php dynamic_sidebar('box2'); ?>
                            <?php endif; ?>
                    </div>

                    <div class="col-md-4">
                            <?php if(is_active_sidebar('box3')) : ?>
                                <?php dynamic_sidebar('box3'); ?>
                            <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>

    <footer class="blog-footer">
      <p>&copy; <?php echo date('Y'); ?> - <?php bloginfo('name'); ?></p>
      <p>
        <a href="#">Back to top</a>
      </p>
    </footer>
    <?php wp_footer(); ?>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/bootstrap.js"></script>

  </body>
</html>