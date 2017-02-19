<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title(''); ?>Heart Of Hanford</title>

    <link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">  
    <link href='https://fonts.googleapis.com/css?family=Cinzel:900,700,400' rel='stylesheet' type='text/css'>

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="p:domain_verify" content="cff646d5d75de9c16917475496d0abb7"/>    
    <meta name="msvalidate.01" content="E0FF6DEA36932D20F07907DE0E1800BD" />
    <title>Heart Of Hanford</title>    
        

    

    <?php wp_head(); ?>
    <script>
        
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

  </head>

      <body <?php body_class(); ?>>
      

        <!-- wrapper -->
        <!-- <div class="wrapper">-->

          <!-- header -->
          <!--<header class="header clear" role="banner">-->
                <nav class="navbar navbar-default  trans" ">
                <div class="navbar  navbar-custom" style="border-radius:0px;"> 
                    <!-- Brand and toggle get grouped for better mobile display --> 
                        <div class="container"> 
                            <div class="row">
                                <div class="col-xs-12 col-md-6 main-img">
                                    <a href="<?php bloginfo('url');?>" class="navbar-brand">Heart Of Hanford</a>

                                </div>
                                
                                <div class="col-xs-12 col-md-6 hamburger">
                                    <div class="row">
                                        
                                             <div class="col-xs-9 col-md-12">
                                                <button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
                                                <span class="icon-bar"></span> 
                                                <span class="icon-bar"></span> 
                                                <span class="icon-bar"></span> 
                                                </button>
                                              </div> 
                                 
                                        <!-- Collect the nav links, forms, and other content for toggling --> 
                                            <div class="collapse navbar-collapse navHeaderCollapse pull-right"> 
                                                <div class="col-xs-12 main-nav">
                                                    <?php /* Primary navigation */
                                                        wp_nav_menu( array(
                                                        'menu' => 'primary',
                                                        'theme-location' => 'primary',
                                                        'depth' => 2,
                                                        'menu_class' => 'nav navbar-nav ',
                                                        'fallback-cb' => 'wp_bootstrap_navwalker::fallback',
                                                        //Process nav menu using our custom nav walker
                                                        'walker' => new wp_bootstrap_navwalker())
                                                        );
                                                    ?>
                                                </div>
                                            </div>
                                    </div>

                                </div><!--end div class collapse navbar-collapse navHeaderCollapse -->
                            </div>
            
                        </div><!--end div class container-fluid-->
                    </div><!--end div class navbar  navbar-static-top navbar-custom-->
                </nav> 
                <!--end nav-->
