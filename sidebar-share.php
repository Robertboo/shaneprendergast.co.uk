	
	<h4>Share it</h4>
	<ul class="social">
		
		<a href="<?php the_permalink(); ?>#comments-section" title="<?php the_title(); ?>">
			<li>
				<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/common/graphics/leave-comment.png" />
				<h4><?php comments_number( 'No responses', 'One response', '% responses' ); ?> on <?php the_title(); ?></h4>
			</li>
		</a>
		
		<a target="_blank" href="http://twitter.com/home/?status=Shane Prendergast - <?php the_title(); ?> - <?php the_permalink(); ?> - (via @webknit)">
			<li>
				<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/common/graphics/leave-tweet.png" />
				<h4>Tweet Tweet</h4>
			</li>
		</a>
		
		<script>function fbs_click() {u=location.href;t=document.title;window.open('http://www.facebook.com/sharer.php?u='+encodeURIComponent(u)+'&t='+encodeURIComponent(t),'sharer','toolbar=0,status=0,width=626,height=436'); return false;}</script><a rel="nofollow" href="http://www.facebook.com/share.php?u=<;url>" onclick="return fbs_click()" target="_blank">
			<li>
				<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/common/graphics/leave-facebook.png" />
				<h4>Share on Facebook</h4>
			</li>
		</a>
		
	</ul>
	
	  		
   		