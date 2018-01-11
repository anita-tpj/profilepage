<?php
$theme_opts = get_option('tap_opts');
?>
<!DOCTYPE html>
<html <?php language_attributes();?>>
    <head>

      	<meta charset="<?php bloginfo('charset'); ?>">
      	<!-- <meta http-equiv="content-type" content="text/html; charset=utf-8">-->
        <meta name="description" content="<?php bloginfo('description'); ?>">
        <meta name="author" content="Anita Tapaji">
        <meta name="keywords" content="Front end developer, frontend development, front-end, web design, web development, javaScript, jQuery, Bootstrap, CSS, HTML, SCSS">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no shrink-to-fit=no">
        <meta name="format-detection" content="telephone=no">

        <!-- Global Site Tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-106958479-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments)};
          gtag('js', new Date());

          gtag('config', 'UA-106958479-1');
        </script>

        <title><?php bloginfo('name'); ?><?php wp_title('|'); ?></title>
        <?php wp_head(); ?>
    </head>

    <body <?php body_class();?>>
      <!-- Top menu -->
      <header id="top" class="container-fluid">
        <nav class="navbar navbar-inverse navbar-fixed-top cbp-af-header">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
          <!-- Social media links-->
            <div class="social-nav-icons">
              <ul class="nav navbar-nav navbar-right">
                <?php if(!empty($theme_opts['facebook'])): ?>
                  <li><a href="https://www.facebook.com<?php echo $theme_opts['facebook']; ?>"><i class="fa fa-facebook"></i></a></li>
                <?php endif;
                if(!empty($theme_opts['twitter'])): ?>
                  <li><a href="https://twitter.com/<?php echo $theme_opts['facebook']; ?>"><i class="fa fa-twitter"></i></a></li>
                <?php endif;
                if(!empty($theme_opts['linkedin'])): ?>
                  <li><a href="https://www.linkedin.com/in/<?php echo $theme_opts['linkedin']; ?>"><i class="fa fa-linkedin"></i></a></li>
                <?php endif;
                if(!empty($theme_opts['youtube'])): ?>
                  <li><a href="https://www.youtube.com/<?php echo $theme_opts['youtube']; ?>"><i class="fa fa-youtube"></i></a></li>
                <?php endif;
                if(!empty($theme_opts['github'])): ?>
                  <li><a href="https://github.com/<?php echo $theme_opts['github']; ?>"><i class="fa fa-github"></i></a></li>
                <?php endif;
                if(!empty($theme_opts['codepen'])): ?>
                  <li><a href="https://codepen.io/<?php echo $theme_opts['codepen']; ?>"><i class="fa fa-codepen"></i></a></li>
                <?php endif;
                if(!empty($theme_opts['freecodecamp'])): ?>
                  <li><a href="https://www.freecodecamp.org/<?php echo $theme_opts['freecodecamp']; ?>"><i class="fa fa-free-code-camp"></i></a></li>
                <?php endif; ?>
              </ul>
           </div>



            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <?php if($theme_opts['logo_type'] == 1): ?>
                <a class="navbar-brand" href="index.html"><?php bloginfo('name'); ?></a>
            <?php else:?>
                <a href="index.html"><img src="<?php echo $theme_opts['logo_img']; ?>"></a>
            <?php endif; ?>


           </div><!-- /.navbar-header -->
           <!-- Collect the nav links, forms, and other content for toggling -->

           <?php
           if(is_front_page()):
             wp_nav_menu( array(
                        'menu'              => 'primary',
                        'theme_location'    => 'primary',
                        'depth'             => 2,
                        'container'         => 'div',
                        'container_class'   => 'collapse navbar-collapse',
                        'container_id'      => 'bs-example-navbar-collapse-1',
                        'menu_class'        => 'nav navbar-nav navbar-right',
                        'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                        'walker'            => new WP_Bootstrap_Navwalker())
                    );
            else:

              wp_nav_menu( array(
                         'menu'              => 'secondary',
                         'theme_location'    => 'secondary',
                         'depth'             => 2,
                         'container'         => 'div',
                         'container_class'   => 'collapse navbar-collapse',
                         'container_id'      => 'bs-example-navbar-collapse-1',
                         'menu_class'        => 'nav navbar-nav navbar-right',
                         'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                         'walker'            => new WP_Bootstrap_Navwalker())
                     );

            endif;
           ?>

          </nav>

        </header><!-- /.container-fluid -->
        <div class="blog-header">
          <div class="container-fluid">
            <h1 class="blog-title"><?php bloginfo('name'); ?></h1>
            <p class="lead blog-description"><?php bloginfo('description')?></p>
          </div>
        </div>

      <!-- Content -->
       <main class="container-fluid">
