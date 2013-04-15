<?php
/**
 * Template Name: Work Page
 *
 * A custom page template without sidebar.
 *
 * The "Template Name:" bit above allows this to be selectable
 * from a dropdown menu on the edit page screen.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers 3.0
 */

get_header('standard'); ?>

				 
	<div class="page-fade-in">
  
	  <section class="main timeline">
	  
	  	<div class="container">
	  	
	  		<div class="center-align">
		
				<h3 class="block-header">timeline</h3>
				
				<span class="smaller"><i>Check out <a href="http://base.webknit.co.uk" target="_blank">Webknit</a>, my web workshop for the whole shebang. The following is a brief timeline of my work and career</i></span>
				
	  		
	  		</div><!-- .center-align -->
	  			
	  		<span class="mini-block"></span>
	  		
	  		<div class="row">
	  		
	  			<div class="timeline-container">
			
				<div class="event">
					<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/common/graphics/timeline/mccann.jpg" />
					<h2>McCann</h2>
					<p><i>December 2012</i></p>
					<p>I have a year's industry experience and am now employed as a Junior Developer by global marketing agency <a title="McCann" href="http://www.mccannmanchester.com/">McCann</a>.</p>
				</div><!-- END OF EVENT -->
			
				<div class="event">
					<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/common/graphics/timeline/base.jpg" />
					<h2>Base</h2>
					<p><i>December 2012</i></p>
					<p><a href="http://base.webknit.co.uk" target="_blank">Base</a> is my front-end web template. It's the main starting point for all my web projects.</p>
				</div><!-- END OF EVENT -->
			
			
				<div class="event">
					<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/common/graphics/timeline/moustache-timeline.jpg" />
					<h2>Moustache</h2>
					<p><i>November 2012</i></p>
					<p><a href="http://moustache.webknit.co.uk" target="_blank">Moustache</a> is a charity website I made in order to raise money and awareness for male cancer. This website was featured on many inspiration websites including <a href="http://www.designfridge.co.uk/inspiration/minimal/moustache" target="_blank">Design Fridge</a>.</p>

				</div><!-- END OF EVENT -->
			
			
				<div class="event">
					<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/common/graphics/timeline/webknit-timeline.jpg" />
					<h2>Webknit</h2>
					<p><i>September 2012</i></p>
					<p>I created <a href="http://webknit.co.uk" target="_blank">WebKnit</a> as the base for all my web work. It's known as my 'Web Workshop'.</p>

				</div><!-- END OF EVENT -->
			
			
				<div class="event">
					
					<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/common/graphics/timeline/graduation.jpg" />
					<h2>Graduation</h2>
					<p><i>May 2012</i></p>
					<p>I graduated from University with a second-class honors degree. Immediately after graduating I started full time at MadeByPi and entered the world of Web.</p>

				</div><!-- END OF EVENT -->
			
			
				<div class="event">
				
					<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/common/graphics/timeline/madebypi.jpg" />
					<h2>MadeByPi</h2>
					<p><i>March 2012</i></p>
					<p>I was employed by award winning digital agency <a href="http://www.madebypi.co.uk/">MadeByPi</a> prior to finishing university. Initially working two days a week until my university obligations were over. I was absolutely delighted to have found such a fantastic first job with a company who possess many talented individuals in addition to a wide range of high profile clients.</p>

				</div><!-- END OF EVENT -->
			
			
			
				<div class="event">
				
					<h2>Four Degrees West</h2>
					<p><i>October 2011</i></p>
					<p>I went to work for <a href="http://www.fourdegreeswest.co.uk/" target="_blank">4DW</a> on a voluntary placement. This placement enabled me to gain some invaluable work experience. It was here I was introduced to something amazing. WordPress.</p>

				</div><!-- END OF EVENT -->
				
				
				<div class="event">
				
					
					<h2>Worthy of note</h2>
					<p><i>October 2011</i></p>
					<p><a href="http://worthyofnote.co.uk/" target="_blank">Worthy of note</a> was one of the first 'real' websites I created. It offers a wide range of resources to help assist anyone in the web industry. I update the site daily and I hope that when you read this the site is still going strong.</p>

				</div><!-- END OF EVENT -->
			
			
			
				<div class="event">
				
					<h2>University</h2>
					<p><i>September 2009</i></p>
					<p>I enrolled at the University of Hull on a Web Design and Development course. I had never even heard of HTML or Photoshop.</p>

				</div><!-- END OF EVENT -->	
			
				<div class="timeline-line"></div>
				
				
			</div><!-- timeline-container -->	  		
			
				   
		  </div><!-- .row -->

			
			 <?php get_sidebar('recents'); ?> 
			
			 <?php get_sidebar('advert'); ?> 
	  	
	  	</div><!-- container -->
	  
	  </section><!-- .main -->


<?php get_footer(); ?>