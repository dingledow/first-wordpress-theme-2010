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
		<a href="/"><img src="/wp-content/themes/IngledowDesign/images/logo.png" border="0" alt="Ingledow Design Logo"/></a>
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

	<?php if (have_posts()) : ?>

		<h2 class="pagetitle">Search Results</h2>

		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
		</div>


		<?php while (have_posts()) : the_post(); ?>

			<div <?php post_class() ?>>
				<h3 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
				<small><?php the_time('l, F jS, Y') ?></small>

				<p class="postmetadata"><?php the_tags('Tags: ', ', ', '<br />'); ?> Posted in <?php the_category(', ') ?> | <?php edit_post_link('Edit', '', ' | '); ?>  <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></p>
			</div>

		<?php endwhile; ?>

		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
		</div>

	<?php else : ?>

		<h2 class="center">No posts found. Try a different search?</h2>
		<?php get_search_form(); ?>

	<?php endif; ?>

	</div>

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
