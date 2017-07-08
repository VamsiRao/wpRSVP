<?php

/**
 * Template Name: Landing
 */

    get_header();
?>
<div class="jumbotron jumbotron-inverse jumbotron-hero">
<div class="container">
	<div class="row">
		<div class="col-md-12 col-xs-12">
			<div class="col-md-6 col-xs-12">
	
				<?php
					$args = array( 'post_type' => 'event', 'posts_per_page' => 1 );
					$loop = new WP_Query( $args );
					while ( $loop->have_posts() ) : $loop->the_post();	 
					  	
						 $eventName=get_post_meta(get_the_ID(),'Event Name',true);
						 $eventTheme=get_post_meta(get_the_ID(),'Event Theme',true);
						 $eventDate=get_post_meta(get_the_ID(),'Event Date',true);
						 $eventVenue=get_post_meta(get_the_ID(),'Event Venue',true);

						 echo"<h2 id='banner_name' style='text-align: center;'>Event: $eventName </h2><br>".
							 "<h2 id='banner_theme' style='text-align: center;'>Theme: $eventTheme</h2><br>".
							 "<h2 id='banner_date' style='text-align: center;'><i class='fa fa-calendar-o' aria-hidden='true'></i>  $eventDate</h2><br>".
							 "<h2 id='banner_venue' style='text-align: center;'><i class='fa fa-map-marker' aria-hidden='true'></i>  $eventVenue</h2> <br><br>";
						  
						
					endwhile;

					wp_reset_postdata();
				?>	
			</div>
			<div class="col-md-6 col-xs-12" style="text-align:center;">
				
				<br><br><br><br><br><br><br>
				
				<div class="col-md-12 col-xs-12">
					Want to join us?
				</div>
				
				<div class="col-md-12 col-xs-12">
					<button type="button" class="btn btn-primary btn-green-round-lg btn-lg" >Request Invite</button>
				</div>

			</div>
		</div>
	</div>
</div>
</div>

<?php 
    get_footer(); 
?>