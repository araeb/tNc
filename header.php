
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="en-US">

<head profile="http://gmpg.org/xfn/11">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

  <title> Table &amp; Chairs</title>

  <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/style.css?v=6" type="text/css" media="screen" />

  <link href="<?php bloginfo('template_directory') ?>/assets/js/script.js" type="script" />

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="col-10"></div>
<div id="page" class="site col-80">

	<div id="header">
      <div class="logo">
        <a href="/">&nbsp;</a>
      </div>

      <div class="links">
        <div class="nav-icon">
          <div></div>
          <div></div>
          <div></div>
        </div>
        <div class="nav">
          <?php wp_nav_menu(array('theme_location' => 'primary')); ?>
        </div>
        
      </div>

      <div class="social">
        <ul>
          <li><a class="facebook" href="http://www.facebook.com/tableandchairs"><img src="<?php bloginfo('template_directory') ?>/assets/img/icons/facebook.png"></a></li>
          <li><a class="twitter" href="http://www.twitter.com/tableNchairs"><img src="<?php bloginfo('template_directory') ?>/assets/img/icons/twitter.png"></a></li>
          <li><a class="soundcloud" href="http://www.soundcloud.com/tableandchairs"><img src="<?php bloginfo('template_directory') ?>/assets/img/icons/soundcloud.png"></a></li>
          <li><a class="rss" href="#"><img src="<?php bloginfo('template_directory') ?>/assets/img/icons/rss.png"></a></li>
        </ul>
      </div>
    </div>
<!--
	<?php

	/*
	 * If a regular post or page, and not the front page, show the featured image.
	 * Using get_queried_object_id() here since the $post global may not be set before a call to the_post().
	 
	if ( ( is_single() || ( is_page() && ! twentyseventeen_is_frontpage() ) ) && has_post_thumbnail( get_queried_object_id() ) ) :
		echo '<div class="single-featured-image-header">';
		echo get_the_post_thumbnail( get_queried_object_id(), 'twentyseventeen-featured-image' );
		echo '</div><!-- .single-featured-image-header -->';
	endif;
  */
	?>
-->
