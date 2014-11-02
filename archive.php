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



	<?php if (have_posts()) : ?>

 	  <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
 	  <?php /* If this is a category archive */ if (is_category('Portfolio')) { ?>
		<h1><?php single_cat_title(); ?></h1>

<p class="foliolinks"><a href="/category/portfolio/">All</a> &bull; <a href="/category/portfolio/web-design/">Web Design</a> &bull; <a href="/category/portfolio/logo-design/">Logo Design</a> &bull; <a href="/category/portfolio/photoshop-art/">Photoshop Art</a> &bull; <a href="/category/portfolio/motion-graphics/">Motion Graphics</a></p>
	
    <?php } elseif (is_category(array('Logo Design', 'Motion Graphics', 'Photoshop Art', 'Web Design'))) { ?>
    <h1><?php wp_title('', true, 'right'); ?></h1>
	<p class="foliolinks"><a href="/category/portfolio/">All</a> &bull; <a href="/category/portfolio/web-design/">Web Design</a> &bull; <a href="/category/portfolio/logo-design/">Logo Design</a> &bull; <a href="/category/portfolio/photoshop-art/">Photoshop Art</a> &bull; <a href="/category/portfolio/motion-graphics/">Motion Graphics</a></p>
    
	<?php } else { ?>
	<h1><?php wp_title('', true, 'right'); ?></h1>
<?php } ?>

		<div id="portfolio">


		<?php while (have_posts()) : the_post(); ?>
        
		<div <?php post_class() ?>>
        
        <div class="folioentry">
        
		<div class="Title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></div>
        
        

				<div class="entry">
					<?php if ( is_category() || is_archive() ) {
	the_excerpt();
} else {
	the_content();
} ?>
				</div>
                
                </div>
                
                

			</div>

		<?php endwhile; ?>
        
        </div>

		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
		</div>
        
	<?php else :

		if ( is_category() ) { // If this is a category archive
			printf("<h1 class='center'>Sorry, but there aren't any posts in the %s category yet.</h1>", single_cat_title('',false));
		} else if ( is_date() ) { // If this is a date archive
			echo("<h1>Sorry, but there aren't any posts with this date.</h1>");
		} else if ( is_author() ) { // If this is a category archive
			$userdata = get_userdatabylogin(get_query_var('author_name'));
			printf("<h1 class='center'>Sorry, but there aren't any posts by %s yet.</h1>", $userdata->display_name);
		} else {
			echo("<h1 class='center'>No posts found.</h1>");
		}

	endif;
?>


</div>

</div><!--end main-->         
<div id="side">

</div><!--Side-->
</div><!--Content-->

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
