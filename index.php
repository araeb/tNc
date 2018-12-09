<?php
/*
 * The main template file
 */

get_header(); ?>

<div class="body">

<?php
			if ( have_posts() ) :

				/* Start the Loop */
				while ( have_posts() ) : the_post();

				endwhile;
				?>

</div><!-- .wrap -->

<?php get_footer(); 
