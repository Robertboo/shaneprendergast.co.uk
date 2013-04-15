<?php
/**
 * Template Name: Info page
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
  
	  <div class="background">
	  </div><!-- .background -->
	  
	  <nav class="home-nav" id="sticky_navigation">
	  	
	  	<div class="container">
	  	
	  		<?php $site_url = network_site_url( '/' ); ?>
	  
		  	<a href="<?php echo $site_url; ?>"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/common/graphics/logo-small.jpg" class="nav-logo" /></a>
		  
		  	<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>

		</div><!-- .container -->
	  
	  </nav><!-- .home-nav -->
	  
	  <section class="main homepage">
	  
	  	<div class="container">
	  	
	  		<h2>Hi I'm Shane.</h2>
	  		
	  		<div class="two-col">
	  		
	  		<p>A twenty something web designer and developer based in the UK. I have a BSc (Hons) Web Design and Development degree from the University of Hull. I have a year’s industry experience and am currently employed as a Junior Developer by global marketing agency McCann.</p>
			<p>This is my personal website that mainly features blog posts that may or may not be related to web design.</p>
	
			<p><a href="http://www.webknit.co.uk/" target="_blank">WebKnit</a> is my web workshop. It features all of my freelance and personal work. I have a web resources website called <a href="http://worthyofnote.co.uk/" target="_blank">Worthy of Note</a> which is updated daily. I am also the creator of the <a href="http://base.webknit.co.uk/" target="_blank">Base</a> front-end web template.</p>
			
			<p>I specialise in the front end development of websites, making the most of computer languages such as HTML5, CSS3, jQuery, PHP and a few more. I'm mad on WordPress and you might notice that almost all my sites are done using this fantastic CMS. I also love to make websites responsive to mobile devices.</p>
			
			<p>I pride myself on being a quick learner and someone who is competent at what I do. I have a strong desire to continuously develop my skills in both design and development and to become a first class web designer.</p>
			
			<p>In the real world I like keeping fit, socialising and reading. I'm an avid Rugby League fan, supporting my birth town team <a target="_blank" href="http://www.warringtonwolves.org/">Warrington Wolves</a>. I also like football, cycling and anything Apple.</p>
			
			<p>Thanks for your interest in me and feel free to contact me regarding any suggestions or enquiries you may have.</p>
	
			</div><!-- two-col -->
			
			<div class="row key-points">
			
				<div class="one_three">
				
					<h3 class="block-header">Sites</h3>
					
					<ul>
						<li>
							<a href="http://www.webknit.co.uk/" target="_blank">
								Webknit
							</a>
						</li>
						<li>
							<a href="http://worthyofnote.co.uk/" target="_blank">
								Worthy of Note
							</a>
						</li>
						<li>
							<a href="http://base.webknit.co.uk/" target="_blank">
								Base
							</a>
						</li>
					</ul>
				
				</div><!-- one_three -->
				
				<div class="two_three">
				
					<h3 class="block-header">Achievements</h3>
					
					<ul>
						<li>
							<a href="http://www.netmagazine.com/features/net-awards-2013-best-online-portfolio" target="_blank">
								.net awards 2012 nominee
							</a>
						</li>
						<li>
							<a href="http://www.thebestdesigns.com/2013/01/11/webknit/" target="_blank">
								The best designs featured
							</a>
						</li>
						<li>
							<a href="http://www.designfridge.co.uk/inspiration/clean/webknit-2" target="_blank">
								Design fridge featured twice
							</a>
						</li>
					</ul>
					
						
				
				</div><!-- two_three -->
				
				<div class="three_three">
				
					<h3 class="block-header">Socially</h3>
					
					<ul>
						<li>
							<a target="_blank" href="http://twitter.com/#!/WebKnit">
								Twitter
							</a>
						</li>
						<li>
							<a target="_blank" href="https://www.facebook.com/pages/WebKnit/349266211816814">
								Facebook
							</a>
						</li>
	   					<li>
	   						<a target="_blank" href="http://dribbble.com/WebKnit">
	   							Dribbble
	   						</a>
	   					</li>
					</ul>
				
				</div><!-- three_three -->
			
			</div><!-- .row -->
			
			
			<div class="row center-align photos">
			
				<h3 class="block-header">photo gallery</h3>
				<p><i>Aren't I pretty.</i></p>
				
				<?php echo do_shortcode('[instapress userid="webknit" size="300" piccount="12"]'); ?> 
				
				<!--
<ul>
					<li><img src="<?php// bloginfo( 'stylesheet_directory' ); ?>/common/graphics/insta.jpg" /></li>
					
				</ul>
-->
			
			</div><!-- .row -->
	  	
	  	</div><!-- container -->
	  
	  </section><!-- .main -->


<?php get_footer(); ?>