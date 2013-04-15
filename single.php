


<?php get_header('standard'); ?>

  
  <div class="page-fade-in">
  
	  
	  	
	  		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	  		
	  		<?php
			$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 5600,1000 ), false, '' );
			?>
			
			<?php if(has_post_thumbnail()) { ?>
			
				<section class="main blogpage single-blogpage featured-image">
				
				
			
				<div class="background-single" style="background: url(<?php echo $src[0]; ?> ); background-size:cover;" >
	  	</div><!-- .background-single -->
			
			<?php } else { ?>
			
				<section class="main blogpage single-blogpage">
			
			<?php } ?>
	  
	  	
	  
	  	<div class="container">
	  	
	  		
			
			<?php// if ( has_post_thumbnail()) the_post_thumbnail('large'); ?>
		
			<h3 class="title"><?php the_title(); ?></h3>
	  		<p class="date"><?php echo get_the_date(); ?></p>
	  			
	  		<span class="mini-block"></span>
	  		
	  		<div class="row">
	  		
	  		<div class="style-post">
	  		
	  			<p><?php the_content(); ?></p>
	  		
	  		</div><!-- style-post -->
	  		
			
			<div class="row prev-next-mobile">
	  		
			  		<div class="prev-mobile">
			  		
			  			<?php previous_post_link('%link', '%title',FALSE, '3'); ?>
			  		
			  		</div><!-- .prev-mobile -->
			  		
			  		<div class="next-mobile">
			  		
			  			<?php next_post_link('%link', '%title', FALSE, '3'); ?>
			  		
			  		</div><!-- .next-mobile -->
		  		
		  		</div><!-- .row -->
		  		
	  		
	  		<div class="next">
			  	
			  	<?php previous_post_link('%link', '%title',FALSE, '3'); ?>
			  </div>
			  
			  <div class="prev">
			  	
			  	<?php next_post_link('%link', '%title', FALSE, '3'); ?>
			 </div>
				   
		  		
			
			<div class="center-align">
				
					
					<ul class="cats">
					
						<h4>Category</h4>
					
						<?php
								$categories = get_the_category();
								$seperator = ' ';
								$output = '';
								if($categories){
									foreach($categories as $category) {
										$output .= '<li><a href="'.get_category_link($category->term_id ).'" title="' . esc_attr( sprintf( __( "View all posts in %s" ), $category->name ) ) . '">'.$category->cat_name.'</a></li>'.$seperator;
									}
								echo trim($output, $seperator);
								}
							?>
					
					</ul>
					
					
					
					<?php get_sidebar('share'); ?> 
					
					
					<h4>Comments</h4>
					
				</div><!-- .center-align -->
				
				<div id="comments-section">
				   	 					
				   <?php comments_template(); ?> 
				   	 					
				 </div>
					
				<?php endwhile; else: ?>
  				<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
  				<?php endif; ?>	

					
					
					
					
					<!-- <p>Leave <a href="#respond">a comment</a> / Share this on <script>function fbs_click() {u=location.href;t=document.title;window.open('http://www.facebook.com/sharer.php?u='+encodeURIComponent(u)+'&amp;t='+encodeURIComponent(t),'sharer','toolbar=0,status=0,width=626,height=436'); return false;}</script><a target="_blank" onclick="return fbs_click()" href="http://www.facebook.com/share.php?u=&lt;;url&gt;" rel="nofollow">Share on Facebook</a> / Give it a <a href="http://twitter.com/home/?status=Shane Prendergast - Inis Meain - http://shaneprendergast.co.uk/me/inis-meain/ - (via @webknit)" target="_blank">Tweet</a>.</p> -->
				
				
	
			</div><!-- .row -->

			
			 <?php get_sidebar('recents'); ?> 
			
			 <?php get_sidebar('advert'); ?> 
	  	
	  	</div><!-- container -->
	  
	  </section><!-- .main -->


<?php get_footer(); ?>


