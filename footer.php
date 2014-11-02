<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
?>

<div id="validfooter">

<div class="fade">
<a href="<?php bloginfo('rss2_url'); ?>"><img src="/wp-content/themes/IngledowDesign/images/rss-feed.png" border="0" alt="RSS Feed"/></a>
     <div>
     <a href="<?php bloginfo('rss2_url'); ?>"><img src="/wp-content/themes/IngledowDesign/images/rss-feed-rollover.png" border="0" alt="RSS Feed"/></a>
     </div>
</div>

<div class="fade" style="padding-right:3px;">
<a href="http://validator.w3.org/check?uri=referer"><img src="/wp-content/themes/IngledowDesign/images/VALIDhtml.png" border="0" alt="Valid HTML"/></a>
     <div>
     <a href="http://validator.w3.org/check?uri=referer"><img src="/wp-content/themes/IngledowDesign/images/VALIDhtml-rollover.png" border="0" alt="Get A Quote"/></a>
     </div>
</div>

<div class="fade">
<a href="http://jigsaw.w3.org/css-validator/check/referer?profile=css3"><img src="/wp-content/themes/IngledowDesign/images/VALIDcss.png" border="0" alt="Valid HTML"/></a>
     <div>
     <a href="http://jigsaw.w3.org/css-validator/check/referer?profile=css3"><img src="/wp-content/themes/IngledowDesign/images/VALIDcss-rollover.png" border="0" alt="Valid CSS"/></a>
     </div>
</div>

</div>

<div id="adminlinks">
<p>
<?php
if ( is_user_logged_in() ) {
    echo '<a href="/wp-admin/">My Account</a> | ';
} else {
    echo '<a href="/wp-register.php">Register</a> | ';
};
?>
<?php wp_loginout( $redirect ="/"); ?></p>
</div>

<div id="copyright">
<p>Copyright &copy; Ingledow Design - <?php the_date('Y'); ?>.</p>
<p>This site has been lovingly made using <a href="http://wordpress.org/">Wordpress</a></p>
</div>

<?php wp_footer(); ?>

<!--GoogleAnalytics-->
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-11956172-2");
pageTracker._trackPageview();
} catch(err) {}</script>
