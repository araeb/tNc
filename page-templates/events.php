<?php
/*
 * Template Name: Events
 */

get_header(); ?>
?>
  <h1 class="page-header">Events</h1>
  <div class="group">
    <?php
    echo gigpress_shows(array('group_artists' => 'no'));
    ?>
  </div>
<?php
get_footer();
?>
