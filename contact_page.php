<?php
/**
 * Template Name: Contact Page
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
  
	  <section class="main blogpage contact center-align">
	  
	  	<div class="container">
	  	
	  		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	  		
	  			<h2 class="block-header"><?php the_title(); ?></h2>
	  			
	  				<p><?php the_content(); ?></p>
		      				
			<?php endwhile; else: ?>
			<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
			<?php endif; ?>

	  	
	  		<?php get_sidebar('recents'); ?> 
			
			 <?php get_sidebar('advert'); ?> 
	  	
	  	</div><!-- container -->
	  
	  </section><!-- .main -->



<?php get_footer(); ?>