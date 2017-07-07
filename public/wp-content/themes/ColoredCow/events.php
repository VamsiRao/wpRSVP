<?php

/**
 * Template Name: Events
 */

    get_header();
?>
<div class="container">
	<div class="row">
		<div class="col-md-12 col-xs-12">
	
<?php
	$args = array( 'post_type' => 'event', 'posts_per_page' => 10 );
	$loop = new WP_Query( $args );
	while ( $loop->have_posts() ) : $loop->the_post();	 
	  	
		 $eventName=get_post_meta(get_the_ID(),'Event Name',true);
		 $eventTheme=get_post_meta(get_the_ID(),'Event Theme',true);
		 $eventDate=get_post_meta(get_the_ID(),'Event Date',true);
		 $eventVenue=get_post_meta(get_the_ID(),'Event Venue',true);

		 echo"<h1 id='banner_name' style='text-align: center;'>Event: $eventName </h1><br>".
			"<h1 id='banner_theme' style='text-align: center;'>Theme: $eventTheme</h1><br>".
			"<h1 id='banner_date' style='text-align: center;'><i class='fa fa-calendar-o' aria-hidden='true'></i>  $eventDate</h1><br>".
			"<h1 id='banner_venue' style='text-align: center;'><i class='fa fa-map-marker' aria-hidden='true'></i>  $eventVenue</h3> <br><br>";
		  
		
	endwhile;

	wp_reset_postdata();
?>
		</div>
	</div>
</div>



<?php 
    get_footer(); 
?>