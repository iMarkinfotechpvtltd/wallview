<!DOCTYPE html>
<html>

<head>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
 <?php wp_head();?>
  <link rel="icon" type="image/x-icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/images/fav.png">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/animate.css">

  
  <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/layout.css">

  <link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/style.css">
 
  <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/owl-carousel/owl.carousel.css" rel="stylesheet">
  <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/owl-carousel/owl.theme.css" rel="stylesheet">
  <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/lightbox.css" rel="stylesheet">




  <!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>a
	<![endif]-->

</head>

<body>
 <div id="top"></div>
 <!-- Header Starts-->
 <header class="head">
  <div class="top-header">
   <div class="container">
    <div class="logo">
	<?php
$logo=get_post_meta(5,"header_logo",true);
$thumb = wp_get_attachment_image_src($logo, 'logo_img' );						
?> 
     <a href="<?php echo site_url();?>"><img src="<?php echo $thumb['0'];?>" alt="Logo" /></a>
    </div>

    <div class="mid-area">
     <p>
      <?php the_field("header_text",5);?>
     </p>
    </div>

    <div class="header-contact">
     <ul>
      <li><a href="tel:<?php the_field("header_phone",5);?>" class="phone-info"><i class="fa fa-phone" aria-hidden="true"></i>
 <?php the_field("header_phone",5);?></a></li>
      <li><a href="mailto:<?php the_field("header_email",5);?> " class="mail-info"><i class="fa fa-envelope" aria-hidden="true"></i> <?php the_field("header_email",5);?> </a></li>
     </ul>
    </div>
   </div>
  </div>




  <div class="menu">
   <div class="container">

    <nav class="navbar">
     <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
       <span class="sr-only">Toggle navigation</span>
       <span class="icon-bar"></span>
       <span class="icon-bar"></span>
       <span class="icon-bar"></span>
      </button>
     </div>
	  <ul class="nav navbar-nav navbar-right">
       <li><a href="#quick" class="mob-qot-menu">Quick Quote</a></li>
      </ul>
     <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
       <?php 
										$defaults = array(
										'theme_location'  => '',
										'menu'            => 'header_menu',
										'container'       => '',
										'container_class' => '',
										'container_id'    => '',
										'menu_class'      => 'menu',
										'menu_id'         => '',
										'echo'            => true,
										'fallback_cb'     => 'wp_page_menu',
										'before'          => '',
										'after'           => '',
										'link_before'     => '',
										'link_after'      => '',
										'items_wrap'      => '%3$s',
										'depth'           => 0,
										'walker'          => ''
										);
										
										wp_nav_menu( $defaults ); 
										
					?>
      </ul>
      <ul class="nav navbar-nav navbar-right">
       <li><a href="#quick" class="qot-menu">Quick Quote</a></li>
      </ul>
	  
     </div>
     <!--/.nav-collapse -->
    </nav>

   </div>
  </div>

 </header>