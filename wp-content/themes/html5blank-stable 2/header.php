<!doctype html>
<!--[if IE 7 ]>    <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en-gb" class="no-js"> <!--<![endif]-->

<head>
	<title>Randall B. Isenberg | Dallas Criminal Lawyer</title>
	
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="keywords" content="" />
	<meta name="description" content="" />
    
    <!-- Favicon --> 
	<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/images/favicon.ico">
    
    <!-- this styles only adds some repairs on idevices  -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Google fonts - witch you want to use - (rest you can just remove) -->
   	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Dancing+Script:400,700' rel='stylesheet' type='text/css'>
    
    <!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
    
    <!-- ######### CSS STYLES ######### -->
	
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/reset.css" type="text/css" />
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/styles.css" type="text/css" />
    
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/font-awesome/css/font-awesome.min.css">

    <!-- animations -->
    <link href="<?php bloginfo('template_url'); ?>/js/animations/css/animations.min.css" rel="stylesheet" type="text/css" media="all" />
    
    <!-- responsive devices styles -->
	<link rel="stylesheet" media="screen" href="<?php bloginfo('template_url'); ?>/css/responsive-leyouts.css" type="text/css" />
    
    <!-- shortcodes -->
    <link rel="stylesheet" media="screen" href="<?php bloginfo('template_url'); ?>/css/shortcodes.css" type="text/css" /> 
    
    <!-- mega menu -->
    <link href="<?php bloginfo('template_url'); ?>/js/mainmenu/bootstrap.min.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url'); ?>/js/mainmenu/menu.css" rel="stylesheet">
    
    <!-- MasterSlider -->
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/js/masterslider/style/masterslider.css" />
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/js/masterslider/skins/default/style.css" />
	
    <!-- owl carousel -->
    <link href="<?php bloginfo('template_url'); ?>/js/carouselowl/owl.transitions.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url'); ?>/js/carouselowl/owl.carousel.css" rel="stylesheet">
    
    <!-- cubeportfolio -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/js/cubeportfolio/cubeportfolio.min.css">
    
    <!-- forms -->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/js/form/sky-forms.css" type="text/css" media="all">
    
    <!-- tabs -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/js/tabs/assets/css/responsive-tabs2.css">
    
</head>

<body>

<div class="site_wrapper">

<header id="header">

	<!-- Top header bar -->
	<div id="topHeader">
    
	<div class="wrapper">
         
        <div class="top_nav">
        <div class="container">
        	
            <div class="left">

                <?php 

                    /*********************************************/
                    /*         
                        Get Homepage Variable Text
                    */
                    /*********************************************/

                    $args = array(

                        'pagename' => 'homepage-text'

                    );

                    $text = new WP_Query($args);

                        if ( $text->have_posts() ) {
                            while ( $text->have_posts() ) {
                                $text->the_post(); 

                                $post_id = get_the_ID();

                                $facebook = get_field('facebook',$post_id);
                                $twitter = get_field('twitter',$post_id);
                                $google_plus = get_field('google_plus',$post_id);
                                $youtube = get_field('youtube',$post_id);
                                $rss = get_field('rss',$post_id);

                                $contact_phone_number = get_field('contact_phone_number',$post_id);
                                $contact_email = get_field('contact_email',$post_id);

                            }
                        } else {
                                // no posts found
                        }
                        wp_reset_postdata();
                        
                ?>
            
            	<ul class="topsocial">
                    <li><a href="<?php echo $facebook ?>"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="<?php echo $google_plus ?>"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="<?php echo $youtube ?>"><i class="fa fa-youtube"></i></a></li>
                </ul>
            
            </div><!-- end left links -->
            
            <div class="right">
                
                Call Us: <span class="red"><strong><?php echo $contact_phone_number ?></strong></span>       
                
            <div class="topsitesearch">
                <form method="get" id="topsitesearchform" action="index.html">
                    <div>
                    <input class="input-text" name="s" id="s" value="Search..." onFocus="if (this.value == 'Search...') {this.value = '';}" onBlur="if (this.value == '') {this.value = 'Search...';}" type="text" />
                    <input id="searchsubmit" value="Search" type="submit" />
                    </div>
                </form>
            </div><!-- end site search -->
            
            
        </div><!-- end right links -->
        
        </div>
        </div>
            
 	</div>
    
	</div><!-- end top navigations -->
	
    
	<div id="trueHeader">
    
	<div class="wrapper">
    
     <div class="container">
    
		<!-- Logo -->
		<div class="logo"><a href="/" id="logo"></a></div>
		
	<!-- Navigation Menu -->
	<nav class="menu_main">
        
	<div class="navbar yamm navbar-default">
    
    <div class="container">
      <div class="navbar-header">
        <div class="navbar-toggle .navbar-collapse .pull-right " data-toggle="collapse" data-target="#navbar-collapse-1"  > <span>Menu</span>
          <button type="button" > <i class="fa fa-bars"></i></button>
        </div>
      </div>
       
      <div id="navbar-collapse-1" class="navbar-collapse collapse pull-right">
      <div class="header-menu">
        <ul class="nav navbar-nav">

        <?php wp_nav_menu(); ?>
        
        </ul>
        </div>
      </div>
      </div>
     </div>
     
	</nav><!-- end Navigation Menu -->
        
	</div>
		
	</div>
    
	</div>
    
</header>