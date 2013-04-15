<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after.  Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers 3.0
 */
?>


 <footer>
	  
	  	<div class="container center-align">
	  	
	  		<p class="reading">The blog of</p>
	  	
	  		<h4>shane prendergast</h4>
	  		
	  		<p class="statement">web designer and developer</p>
	  		
	  		<p class="statement smaller">UK</p>
	  		
	  		<span class="mini-block"></span>
	  		
	  		<ul>
	   			<li><a href="mailto:contact@webknit.co.uk">Email</a></li>
	   			<li><a href="skype:webknit">Skype</a></li>
	   			<li><a target="_blank" href="https://www.facebook.com/pages/WebKnit/349266211816814">Facebook</a></li>
	   			<li><a target="_blank" href="http://twitter.com/#!/WebKnit">Twitter</a></li>
	   			<li><a target="_blank" href="http://dribbble.com/WebKnit">Dribbble</a></li>
	   			<li><a target="_blank" href="http://web.stagram.com/n/webknit/">Instagram</a></li>
	   			<li><a target="_blank" href="http://worthyofnote.co.uk">Worthy of Note</a></li>
	   			<li><a target="_blank" href="http://webknit.co.uk">Webknit</a></li>
	   		</ul>
	  	
	  	
	  	</div><!-- container -->
	  
	  </footer>
  
  </div><!-- page-fade-in -->
  
  
  
  
  
  
   <!-- JavaScript at the bottom for fast page loading -->

  <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="<?php bloginfo( 'stylesheet_directory' ); ?>/common/js/libs/jquery-1.7.1.min.js"><\/script>')</script>

  <!-- scripts concatenated and minified via build script -->
  <script src="<?php bloginfo( 'stylesheet_directory' ); ?>/common/js/plugins.js"></script>
  <script src="<?php bloginfo( 'stylesheet_directory' ); ?>/common/js/script.js"></script>
  <!-- end scripts -->
  
  <script>
	$(function() {
	
		// grab the initial top offset of the navigation 
		var sticky_navigation_offset_top = $('#sticky_navigation').offset().top;
		
		// our function that decides weather the navigation bar should have "fixed" css position or not.
		var sticky_navigation = function(){
			var scroll_top = $(window).scrollTop(); // our current vertical position from the top
			
			// if we've scrolled more than the navigation, change its position to fixed to stick to top, otherwise change it back to relative
			if (scroll_top > sticky_navigation_offset_top) { 
				$('#sticky_navigation').css({ 
					'position': 'fixed', 
					'top':0, 
					'left':0, 
					'width': '100%', 
					'background': '#ffffff',
					'margin-top': '0px',
					'-webkit-transform': 'translate3d(0px,0px,0px);',
					'z-index': '1'
				 });
				 $('#sticky_navigation').addClass('sticky');
			} else {
				$('#sticky_navigation').css({ 
					'position': 'relative',
					'margin-top': '0px' 
				}); 
				$('#sticky_navigation').removeClass('sticky');
			}   
		};
		
		// run our function on load
		sticky_navigation();
		
		// and run it again every time you scroll
		$(window).scroll(function() {
			 sticky_navigation();
		});
		
		// NOT required:
		// for this demo disable all links that point to "#"
		$('a[href="#"]').click(function(event){ 
			event.preventDefault(); 
		});
		
	});
	</script>


<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>
</body>
</html>