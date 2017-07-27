<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <!--character set-->
        <meta charset="<?php bloginfo('charset'); ?>">
        <!--make site responsive-->
        <meta name="viewport" content="width=device-with">
        <title><?php bloginfo('name'); ?></title>
        <?php wp_head(); ?>        
    </head>

  <body <?php body_class(); ?>>
    
    <div class="container">
    	
    
      <!--site-header-->
      <header class="site-header">
      	    <h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
      	    <h5><?php bloginfo('description'); ?><?php if(is_page('about')) {?>
                -Thank you for viewing our work
            <?php }?></h5>

            <!--site-nav-->
                <nav class="site-nav">

                    <?php
                        $args = array(
                            'theme_location' => 'primary'
                          );
                    ?>
                    
                    <?php wp_nav_menu($args); ?>
                </nav>
            <!-- site-nav -->

      </header>
      <!--/site-header-->