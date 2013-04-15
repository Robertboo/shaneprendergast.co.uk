<?php
/**
 * Template Name: Home page
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

get_header(); ?>


	<div class="page-fade-in">
  
	  <div class="background homepage">
	  </div><!-- .background -->
	  
	  <nav class="home-nav" id="sticky_navigation">
	  	
	  	<div class="container">
	  	
	  		<?php $site_url = network_site_url( '/' ); ?>
	  
		  	<a href="<?php echo $site_url; ?>">
		  		<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/common/graphics/logo-small.jpg" class="nav-logo" />
		  	</a>
		  
		  	<!--
<ul class="fade-in">
		  		<li class="blog"><a>Blog</a></li>
		  		<li class="about"><a>About</a></li>
		  		<li class="webknit"><a>WebKnit</a></li>
		  		<li class="contact"><a>Contact</a></li>
		  	</ul>
-->
			<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?> 

		  	
	  	
	  	</div><!-- .container -->
	  
	  </nav><!-- .home-nav -->
	  
	  	  
	  <section class="main blogpage">
	  
	  	<div class="container">
	  		
	  		<?php query_posts( 'posts_per_page=1&cat=-3' );?>
			
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	  	
	  		<div class="center-align">
	  		
	  			<h2 class="block-header">Recent post</h2>
	  			
	  		</div><!-- center-align -->
	  		
	  		<?php// if ( has_post_thumbnail()) the_post_thumbnail('large'); ?>
	  	
	  		<h3 class="title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
	  		<p class="date"><?php the_date(); ?></p>
	  			
	  		<span class="mini-block"></span>
	  		
	  		<div class="row">
	  		
		  		<div class="style-post">
	  		
	  				<p><?php the_content(); ?></p>
	  		
	  			</div><!-- style-post -->
		  		
		  		
		  		<div class="row">
	  		
			  		<div class="prev-mobile">
			  		
			  			<?php previous_post_link('%link', '%title',FALSE, '3'); ?>
			  		
			  		</div><!-- .prev-mobile -->
			  		
			  		<div class="next-mobile">
			  		
			  			<?php next_post_link('%link', '%title', FALSE, '3'); ?>
			  		
			  		</div><!-- .next-mobile -->
		  		
		  		</div><!-- .row -->
		  				  		
		  		
			
				<div class="center-align">
				
					<h4>Category</h4>
					<ul class="cats">
					
						<?php
							$categories = get_the_category();
							$separator = '';
							$output = '';
							if($categories){
								foreach($categories as $category) {
									$output .= '<li><a href="'.get_category_link( $category->term_id ).'" title="' . esc_attr( sprintf( __( "View all posts in %s" ), $category->name ) ) . '">'.$category->cat_name.'</a></li>'.$separator;
								}
							echo trim($output, $separator);
							}
						?>
					
					</ul>
					
					
				 <?php get_sidebar('share'); ?>	
					
					
				<?php endwhile; else: ?>
  				<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
  				<?php endif; ?>	
					
					<!-- <p>Leave <a href="#respond">a comment</a> / Share this on <script>function fbs_click() {u=location.href;t=document.title;window.open('http://www.facebook.com/sharer.php?u='+encodeURIComponent(u)+'&amp;t='+encodeURIComponent(t),'sharer','toolbar=0,status=0,width=626,height=436'); return false;}</script><a target="_blank" onclick="return fbs_click()" href="http://www.facebook.com/share.php?u=&lt;;url&gt;" rel="nofollow">Share on Facebook</a> / Give it a <a href="http://twitter.com/home/?status=Shane Prendergast - Inis Meain - http://shaneprendergast.co.uk/me/inis-meain/ - (via @webknit)" target="_blank">Tweet</a>.</p> -->
					
			    </div><!-- center-align -->
	
			</div><!-- .row -->
			
			
			 <?php get_sidebar('recents'); ?> 
			
			 <?php get_sidebar('advert'); ?> 
	  	
	  	</div><!-- container -->
	  
	  </section><!-- .main -->


<?php get_footer(); ?>