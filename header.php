<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
?>

<meta name="google-site-verification" content="B9ibk1MCxSsKGweOTHmZbUj-qEEpO6vTxJaH39PKL40" />

<meta name="description" content="Freelance web designer and developer based in Carlisle, Cumbria. I am driven by creating beautiful and affordable website designs that give great solutions to my clients and their business." />

<meta name="keywords" content="web developer in carlisle, web designer in cumbria, carlisle, cumbria, website, web, design, develop, uk, ingledow, affordable, cheap web design, cheap web developer, cheap, local, business, cheapest, directory, graphic, art, development, designing, wordpress, cms, flash, html, css, mysql, phpmyadmin, php, blog, inspiration, interactive, social media" />

<meta name="author" content="David Ingledow" />

<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<!--[if IE]>
<script type="text/javascript">

var arVersion = navigator.appVersion.split("MSIE")
var version = parseFloat(arVersion[1])

function correctPNG() // correctly handle PNG transparency in Win IE 5.5 and 6.
{
   if ((version >= 5.5) && (document.body.filters)) 
   {
       for(var i=0; i<document.images.length; i++)
       {
	      var img = document.images[i]
	      var imgName = img.src.toUpperCase()
	      if (imgName.substring(imgName.length-3, imgName.length) == "PNG")
	      {
		     var imgID = (img.id) ? "id='" + img.id + "' " : ""
		     var imgClass = (img.className) ? "class='" + img.className + "' " : ""
		     var imgTitle = (img.title) ? "title='" + img.title + "' " : "title='" + img.alt + "' "
		     var imgStyle = "display:inline-block;" + img.style.cssText 
		     var imgAttribs = img.attributes;
		     for (var j=0; j<imgAttribs.length; j++)
			 {
			    var imgAttrib = imgAttribs[j];
			    if (imgAttrib.nodeName == "align")
			    {		  
			       if (imgAttrib.nodeValue == "left") imgStyle = "float:left;" + imgStyle
			       if (imgAttrib.nodeValue == "right") imgStyle = "float:right;" + imgStyle
			       break
			    }
             }
		     var strNewHTML = "<span " + imgID + imgClass + imgTitle
		     strNewHTML += " style=\"" + "width:" + img.width + "px; height:" + img.height + "px;" + imgStyle + ";"
	         strNewHTML += "filter:progid:DXImageTransform.Microsoft.AlphaImageLoader"
		     strNewHTML += "(src='" + img.src + "', sizingMethod='scale');\""
		     strNewHTML += " onmouseover=\"PNGswap('" + img.id + "');\" onmouseout=\"PNGswap('" + img.id +"');\""
		     strNewHTML += "></span>" 
		     img.outerHTML = strNewHTML
		     i = i-1
	      }
       }
   }
}
window.attachEvent("onload", correctPNG);

function PNGswap(myID)
{
   var strOver  = "_on"
   var strOff = "_off"
   var oSpan = document.getElementById(myID)
   var currentAlphaImg = oSpan.filters(0).src
   if (currentAlphaImg.indexOf(strOver) != -1)
      oSpan.filters(0).src = currentAlphaImg.replace(strOver,strOff)
   else
      oSpan.filters(0).src = currentAlphaImg.replace(strOff,strOver)
}

</script>
<![endif]-->

<script language="JavaScript" type="text/javascript">
<!--
function imgSwap(oImg)
{
   var strOver  = "_on"    // image to be used with mouse over
   var strOff = "_off"     // normal image
   var strImg = oImg.src
   if (strImg.indexOf(strOver) != -1) 
      oImg.src = strImg.replace(strOver,strOff)
   else
      oImg.src = strImg.replace(strOff,strOver)
}
//-->
</script>

<!--[if lte IE 6]>
<script src="/wp-content/themes/IngledowDesign/javascript/ie6/warning.js"></script><script>window.onload=function(){e("/wp-content/themes/IngledowDesign/javascript/ie6/")}</script>
<![endif]-->

<!--[if IE 7]>
<![endif]-->

<script src="/wp-content/themes/IngledowDesign/javascript/jquery.js" type="text/javascript"></script>

<script type="text/javascript">

$(document).ready(function () {

     $('div.fade').hover(function() {
          //hover in
          var div = $('> div', this);

          if (div.is(':animated')) {
               div.stop().fadeTo(250, 1);
          } else {
               div.fadeIn(250);
          }
     }, function () {
          // hover out
          var div = $('> div', this);
          if (div.is(':animated')) {
               div.stop().fadeTo(250, 0);
          } else {
               div.fadeOut(250);
          }
     });
});
  
</script>
