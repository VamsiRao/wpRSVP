<?php
/**
 * Template for displaying all single posts
 *
 * @package ColoredCow
 */

get_header(); ?>

<?php	if ( have_posts() ) :
			 while ( have_posts() )	: 
			 		the_post();
			 		the_title();
			 		the_meta();
			 		the_content();
			endwhile;
		endif;
 ?>

<?php get_footer(); ?>