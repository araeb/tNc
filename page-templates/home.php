<?php
/*
 * Template Name: Home
 */

get_header(); ?>

<div id="home" class="body">
	<div class="text">
			<?php
    // TO SHOW THE PAGE CONTENTS
    while ( have_posts() ) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->
        <div class="entry-content-page">
            <?php the_content(); ?> <!-- Page Content -->
        </div><!-- .entry-content-page -->

    <?php
    endwhile; //resetting the page loop
    wp_reset_query(); //resetting the page query
    ?>

	</div><!-- .text-->

	<div id="banner">
		<?php the_post_thumbnail(); ?>
	</div>
	
</div>
	

	

<?php get_footer();
