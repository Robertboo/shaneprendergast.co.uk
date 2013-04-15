	
	<div class="row recents center-align">
			
		<div class="one_two">
		
			<h3 class="block-header">Recent Posts</h3>
			
			<ul>
			
				<?php query_posts( 'posts_per_page=10' );?>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
								
					<li><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></li>
				   	 					
				<?php endwhile; else: ?>
				<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
				<?php endif; ?>	
				
			</ul>
		
		</div><!-- one_two -->
		
		<div class="two_two">
		
			<h3 class="block-header">Categories</h3>
			
			<ul>
				<?php wp_list_categories( 'number=10&exclude=1&title_li=' ); ?>
			</ul>
			
				
		
		</div><!-- two_two -->
		
	
	</div><!-- .row -->