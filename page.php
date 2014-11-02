<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">

<?php get_header(); ?>

<title><?php wp_title('-', true, 'right'); ?> <?php bloginfo('name'); ?></title>

<link rel="stylesheet" href="/wp-content/themes/IngledowDesign/styleNoBanner.css" type="text/css" media="screen" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

</head>

<body>

<div id="header">
		<div id="logo">
		<a href="/"><img src="/wp-content/themes/IngledowDesign/images/logo.png" border="0" alt="Ingledow Design Logo" width="285" height="116"/></a>
        </div><!--end logo-->
        
        <div id="nav">
        <ul>
		<li><a href="/">Home</a></li>
        <li><a href="/about">About</a></li>
        <li><a href="/category/portfolio">Portfolio</a></li>
        <li><a href="/blog">Blog</a></li>
        <li><a href="/contact">Contact</a></li>
        </ul>
		</div>
        
        <div id="banner" class="clear">
		<div id="banner-text">
		</div><!--end banner-text-->
		</div><!--end banner-->
</div>

<div id="container">

<div id="content" class="clear">
<div id="main">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post" id="post-<?php the_ID(); ?>">
		<h1><?php the_title(); ?></h1>
			<div class="entry">
				<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>

				<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

			</div>
		</div>
		<?php endwhile; endif; ?>
	<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>

</div><!--end main-->         
<div id="side">

</div><!--Side-->
</div><!--Content-->
</div><!--Container-->




<div id="footer-container">
<div id="footer">

<?php get_footer(); ?>

</div><!--Footer-->    
</div><!--Footer Container-->
 <!--Twitter Script-->
<script type="text/javascript" src="http://twitter.com/javascripts/blogger.js"></script>
<script type="text/javascript" src="http://twitter.com/statuses/user_timeline/dingledow.json?callback=twitterCallback2&amp;count=1"></script>
</body>
</html>
