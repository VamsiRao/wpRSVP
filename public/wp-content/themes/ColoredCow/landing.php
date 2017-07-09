<?php

/**
 * Template Name: Landing
 */

    get_header();
?>
<div class="jumbotron jumbotron-inverse jumbotron-hero jumbo-bg">
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
					
					<br><br><br><br>

					<div class="col-md-12 col-xs-12">
						<h3>Want to join us?</h3>
					</div>
					<br>
					<div class="col-md-12 col-xs-12">
						<button type="button" class="btn btn-success btn-green-round-lg btn-lg" >Request Invite</button>
					</div>

				</div>
			</div>			
		</div>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-md-12 col-xs-12">
						
			<div class="col-md-6 col-xs-12">
				<div id="events_corousel" class="corousel slide">
					<ol class="corousel-indicators">
						<li data-target="#events_corousel" data-slide-to="0" class="active"></li>
						<li data-target="events_corousel" data-slide-to="1"></li>
						<li data-target="events_corousel" data-slide-to="2"></li>
					</ol>
					<!-- <div class="corousel-inner">
						<div class="item-active">
							<img src="soiree1.jpg" alt="1">
						</div>
						<div class="item">
							<img src="soiree2.jpg" alt="2">
						</div>
						<div class="item">
							<img src="soiree3.jpg" alt="3">
						</div>
					</div> -->
					<a class="left carousel-control" href="#events_corousel" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#events_corousel" data-slide="next">
					    <span class="glyphicon glyphicon-chevron-right"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>

			</div>
			<div class="col-md-6 col-xs-12 notebook">
				<p>We at ColoredCow celebrate conversations. Conversations that stir our soul and are more than a blur in this worldly rumble. With that aim we started to build a tribe of people who resonate with the thought.</p>
				<p>The theme for Tribe Soiree #2 was Travel and as Tim Cahill once said that “A journey is best measured in friends, rather than miles” , we invited our friends who have been part of our journey to toast the enriching concept of traveling.</p>
				<p>In midst of music, food, laughter, dance and conversations we relived our happy travel memories again</p>
					
			</div>	
		</div>
	</div>	
</div>

<?php 
    get_footer(); 
?>