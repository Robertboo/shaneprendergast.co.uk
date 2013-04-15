<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the wordpress construct of pages
 * and that other 'pages' on your wordpress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers 3.0
 */

get_header('standard'); ?>

	<div class="page-fade-in">
	  
	  <section class="main homepage">
	  
	  	<div class="container">
	  	
	  		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<?php if ( has_post_thumbnail()) the_post_thumbnail('large'); ?>
		
			<div class="center-align">
				<h3 class="block-header"><?php the_title(); ?></h3>
			</div><!-- center-align -->
	  		
	  			
	  		<span class="mini-block"></span>
	  		
	  		<div class="row">
	  		
	  		<p><?php the_content(); ?></p>
	  		
	  		<?php endwhile; else: ?>
  				<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
  				<?php endif; ?>	
  				
  			</div><!-- .row -->
			
			<div class="row key-points">
			
				<div class="one_three">
				
					<h3 class="block-header">Sites</h3>
					
					<ul>
						<li>Webknit</li>
						<li>Worthy of Note</li>
						<li>Base</li>
					</ul>
				
				</div><!-- one_three -->
				
				<div class="two_three">
				
					<h3 class="block-header">Achievements</h3>
					
					<ul>
						<li>.net awards 2012 nominee</li>
						<li>The best designs featured</li>
						<li>Design fridge featured</li>
					</ul>
					
						
				
				</div><!-- two_three -->
				
				<div class="three_three">
				
					<h3 class="block-header">Socially</h3>
					
					<ul>
						<li>Twitter</li>
						<li>Facebook</li>
						<li>Dribbble</li>
					</ul>
				
				</div><!-- three_three -->
			
			</div><!-- .row -->
			
			
			<div class="row center-align photos">
			
				<h3 class="block-header">photo gallery</h3>
				<p><i>Aren't I pretty.</i></p>
				
				<ul>
					<li><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/common/graphics/insta.jpg" /></li>
					<li><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/common/graphics/insta.jpg" /></li>
					<li><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/common/graphics/insta.jpg" /></li>
					<li><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/common/graphics/insta.jpg" /></li>
					<li><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/common/graphics/insta.jpg" /></li>
					<li><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/common/graphics/insta.jpg" /></li>
					<li><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/common/graphics/insta.jpg" /></li>
					<li><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/common/graphics/insta.jpg" /></li>
				</ul>
			
			</div><!-- .row -->
	  	
	  	</div><!-- container -->
	  
	  </section><!-- .main -->

	

<?php get_footer(); ?>