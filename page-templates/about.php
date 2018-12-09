<?php
/*
 * Template Name: About
 */

get_header(); ?>
?>
<div id="content">
  <div id="about-container">
    <h1>About Us</h1>
    <?php  echo apply_filters('the_content', $post->post_content); ?>
  </div> 
</div>
<?php
get_footer();
?>
