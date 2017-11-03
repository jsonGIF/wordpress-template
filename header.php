<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title><?php bloginfo('name'); ?></title>

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css"  />
<link href="<?php bloginfo('template_url'); ?>/css/boostrap.css" type="text/css" />


<?php wp_head(); ?>
</head>

<body>

<div id="header">
	<div class="container">
		<div class="row">
			<div class="span12">

				<p class="title"><a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo("template_url"); ?>/images/logo.png" alt="" /></a></p>

    			<div id="menu">
      			<?php if ( has_nav_menu( 'main' ) ) {
    				wp_nav_menu( array( 
        			'theme_location' => 'main',
					'container' => '' 
    				));
					}
				?>
    	</div><!--end menu-->
			</div><!-- end span 12 -->
		</div><!-- end row -->
	</div><!-- end container -->
</div><!--end header-->