<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers 3.0
 */
?>
<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!-- Consider adding a manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>

  <meta charset="<?php bloginfo( 'charset' ); ?>" />

  <!-- Use the .htaccess and remove these lines to avoid edge case issues.
       More info: h5bp.com/i/378 -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title><?php wp_title( '|', true, 'right' ); ?></title>
  <meta name="description" content="Welcome to Shane Prendergast's portfolio, Web designer &amp; Developer based in the UK.">
  <meta name='keywords' content='Shane Prendergast, Web Designer & Developer, Web Design, Branding, Logos, Websites,' />
  <meta name='author' content='Shane Prendergast' />

  <!-- Mobile viewport optimized: h5bp.com/viewport -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  
  <script type="text/javascript" src="//use.typekit.net/neq7wik.js"></script>
  <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
  
  <link rel="profile" href="http://gmpg.org/xfn/11" />
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  
  <!-- Place favicon.ico and apple-touch-icon.png in the root directory: mathiasbynens.be/notes/touch-icons -->
  <link rel='icon' type='image/png' href='graphics/favicon.ico' />
  
  <!-- Boilerplate first then onto Base styles (Mobile First) and then other media queries  -->
  <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_directory' ); ?>/common/css/boilerplate.css" media="screen">
  <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
  <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_directory' ); ?>/common/css/min-480.css" media="only screen and (min-width: 480px)">
  <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_directory' ); ?>/common/css/min-768.css" media="only screen and (min-width: 768px)">
  <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_directory' ); ?>/common/css/desktop.css" media="only screen and (min-width: 1170px)">
  <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_directory' ); ?>/common/css/high-res.css" media="print, (-o-min-device-pixel-ratio: 5/4), (-webkit-min-device-pixel-ratio: 1.25), (min-resolution: 120dpi)">
  

  <!-- More ideas for your <head> here: h5bp.com/d/head-Tips -->

  <!-- All JavaScript at the bottom, except this Modernizr build.
       Modernizr enables HTML5 elements & feature detects for optimal performance.
       Create your own custom Modernizr build: www.modernizr.com/download/ -->
  <script src="common/js/libs/modernizr-2.5.3.min.js"></script>
  	
    
  <!--Internet Explorer up to version 8.0 can't read HTML5 tags properly, you can't style them.-->
  <!--[if lt IE 9]>
	   <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  
  <script type="text/javascript">

	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-26260989-1']);
	  _gaq.push(['_trackPageview']);
	
	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();

  </script>
  
  
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
</head>


<body <?php body_class(); ?>>

<!-- Prompt IE 6 users to install Chrome Frame. Remove this if you support IE 6.
       chromium.org/developers/how-tos/chrome-frame-getting-started -->
  <!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->

	
	
   			<?php// wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?> 
  <header class="about">
  
  	<div class="container">
  	
  		<?php $site_url = network_site_url( '/' ); ?>
	  
		  	<a href="<?php echo $site_url; ?>" class="">
		  	
		  		<img id="home" class="logo" src="<?php bloginfo( 'stylesheet_directory' ); ?>/common/graphics/logo.jpg" />
		  		
		  	</a>
  
  	
  	</div><!-- .container -->
  	
  </header>
	
	
	
	
		
	