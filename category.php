<?php
/**
 * The template for displaying Category Archive pages.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers 3.0
 */

get_header('standard'); ?>

	<div class="page-fade-in">
  
	  <section class="main blogpage category-blogpage">
	  
	  	<div class="container center-align">
	  	
	  	
	  		
	  			<h2 class="block-header"><?php single_cat_title(); ?></h2>
	  			
	  		
	  		<ul class="categories">
   		
		   		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		  		
		  			<li>
		   				<h3 class="title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
		   				<p class="date"><?php the_date(); ?></p>
		   			</li>
		   			
		   			<span class="mini-block"></span>
		  			
		  			
		  		<?php endwhile; else: ?>
				<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
				<?php endif; ?>	
   			
   			</ul>
	  	
			
			
			
			
			
			
			
			  	
			<div class="row">
			
			<?php /* Display navigation to next/previous pages when applicable */ ?>
			<?php if (  $wp_query->max_num_pages > 1 ) : ?>
	  		
			  		<div class="prev-mobile">
			  		
			  			<?php previous_posts_link( __( 'Newer posts', 'twentyten' ) ); ?>
			  		
			  		</div><!-- .prev-mobile -->
			  		
			  		<div class="next-mobile">
			  		
			  			<?php next_posts_link( __( 'Older posts', 'twentyten' ) ); ?>
			  		
			  		</div><!-- .next-mobile -->
			  <?php endif; ?>
		  	</div><!-- .row -->
			
				
			

					
			<?php get_sidebar('recents'); ?> 
			
			 <?php get_sidebar('advert'); ?> 
			 
	  	
	  	</div><!-- container -->
	  
	  </section><!-- .main -->
		
<?php get_footer(); ?>