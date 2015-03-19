<?php
/**
 * The Header for our theme.
 *
 * @package boiler
 */

?><!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />

<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="icon" type="image/gif" href="<?php bloginfo( 'template_url' ); ?>/images/favicon.gif"/>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<script src="//use.typekit.net/qxt3cqw.js"></script>
<script>try{Typekit.load();}catch(e){}</script>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
  <![endif]-->
  <!--navbar-->
	<div id="main">
	  <div class="navbar navbar-default main-nav" role="navigation">
	    <div class="grid">
	      <div class="navbar-header">
	      
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
	      <span class="sr-only">Toggle navigation</span>
	      <span class="icon-bar"></span>
	      <span class="icon-bar"></span>
	      <span class="icon-bar"></span>
	      </button>
	            
	      <a class="navbar-brand" href="<?php bloginfo('url')?>"><img class="visible-lg visible-md visible-sm hidden-xs" src="<?php bloginfo( 'template_url' ); ?>/images/logo_big.png"><img class="hidden-lg hidden-md hidden-sm visible-xs" src="<?php bloginfo( 'template_url' ); ?>/images/logo_small.png"></a>
	    </div>
	          
	    <div class="navbar-collapse collapse">
	    	<?php /* Primary navigation */
					wp_nav_menu( array(
					  'menu' => 'primary',
					  'depth' => 2,
					  'container' => false,
					  'menu_class' => 'nav navbar-nav navbar-right',
					  //Process nav menu using our custom nav walker
					  'walker' => new wp_bootstrap_navwalker())
					);
					?>
<!-- 	      <ul class="nav navbar-nav navbar-right">
	        <li class="dropdown">
	        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Products<span class="caret"></span></a>
	          <ul class="dropdown-menu" role="menu">
	            <li><a href="vision-fleet-capital.html">Vision Fleet Capital</a></li>
	            <li class="divider"></li>
	            <li><a href="vision-fleet-iq.html">Vision Fleet IQ</a></li>
	            <li class="divider"></li>
	            <li><a href="vision-fleet-assist.html">Vision Fleet Assist</a></li>
	          </ul>
	        </li>
	        <li><a href="projects.html">Projects</a></li>
	        <li><a href="about.html">About</a></li>
	        <li><a href="jobs.html">Jobs</a></li>
	        <li><a href="press.html">Press</a></li>
	        <li><a href="contact.html">Contact</a></li>
	      </ul> -->
	    </div><!--/.nav-collapse -->
	  </div>     
	</div>
	<!--navbar-->
