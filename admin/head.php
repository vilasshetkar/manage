<?php $root = $_SERVER['DOCUMENT_ROOT'];
global $root; 
require($root.DIRECTORY_SEPARATOR.'admin'.DIRECTORY_SEPARATOR.'dbc.php');
require($root.DIRECTORY_SEPARATOR.'admin'.DIRECTORY_SEPARATOR.'config.php');
session_start(); 
$_SESSION['user_id'] = $user_id;
$_SESSION['domain'] = $domain ;
$_SESSION['email'] = $email ;
require($root.DIRECTORY_SEPARATOR.'admin'.DIRECTORY_SEPARATOR.'functions.php') ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php title(); ?></title>
<meta name="google-site-verification" content="xv_7TVb38wcem1jzXEBzqOKRs_i-vLYFRyQs-SVn6wI" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php meta(); ?>
<!--<script>
var isNS = (navigator.appName == "Netscape") ? 1 : 0;

if(navigator.appName == "Netscape") document.captureEvents(Event.MOUSEDOWN||Event.MOUSEUP);

function mischandler(){
return false;
}

function mousehandler(e){
var myevent = (isNS) ? e : event;
var eventbutton = (isNS) ? myevent.which : myevent.button;
if((eventbutton==2)||(eventbutton==3)) return false;
}
document.oncontextmenu = mischandler;
document.onmousedown = mousehandler;
document.onmouseup = mousehandler;

</script>-->
<link href="/manage/_script/Spray/SpryValidationTextField.css" rel="stylesheet" type="text/css"/>
<link href="/manage/_script/Spray/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
<script src="/manage/_script/Spray/SpryValidationTextField.js" type="text/javascript"></script>
<script src="/manage/_script/Spray/SpryValidationTextarea.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="/_script/fancy-box/jquery.fancybox.css"/>
<link href="/_css/main.css" rel="stylesheet" type="text/css" />
<link href="/_css/style.css" rel="stylesheet" type="text/css" />
<link href="/_css/content_style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/_script/jquery-1.6.2.min.js"></script>
<script type="text/javascript" src="/_script/roundabout.js"></script>
<script type="text/javascript" src="/_script/roundabout_shapes.js"></script>
<script type="text/javascript" src="/_script/jquery.validate.js"></script>
<script type="text/javascript" src="/_script/main.js"></script>
<script type="text/javascript" src="/_script/slider/jquery.bxSlider.min.js"></script>
<link rel="stylesheet" type="text/css" href="/_script/slider/bx_styles/bx_styles.css"/>
<link rel="stylesheet" type="text/css" href="/_script/fancy-box/jquery.fancybox.css"/>
<script type="text/javascript" src="/_script/fancy-box/jquery.fancybox.js?v=2.1.4"></script>
<script type="text/javascript" src="/_script/fancy-box/jquery.fancybox.pack.js?v=2.1.4"></script>
<script type="text/javascript">
  $(document).ready(function(){
  $('#slider1').bxSlider({
	auto: true,
	controls: true,
	captions: true,
	displaySlideQty:5,
	moveSlideQty:1,
	autoHover : true
  });
  $('.slider').bxSlider({
	mode: 'fade',
	auto: true,
	controls: false,
	captions: true,
	displaySlideQty:1,
	moveSlideQty:1,
	autoHover : true,
	pager : true
  });
  $('.projslide').bxSlider({
	mode: 'fade',
	auto: true,
	controls: false,
	captions: true,
	displaySlideQty:1,
	moveSlideQty:1,
	autoHover : true,
  });
});
</script>
<script type="text/javascript">
$(document).ready(function(){
  $(".nav li a").click(function(){
	$(".nav li a").removeClass("active");
    $(this).addClass("active");
  });
// This function is used for displaying submenu with jQuery and css ***************************************************
	$(".nav li ul").hide();
    $(".nav li").hover(function(){
		$(this).find('ul:first').css({visibility: "visible",display: "none", background:""}).show(500);
		},function(){
		$(this).find('ul:first').css({visibility: "hidden",display: "none"});
		});
});
</script>
<script type="text/javascript">
		$(document).ready(function() {
			$(".sendmail").fancybox({
				'height'	: '100%',
				'autoScale'	: true,
				'type'		: 'iframe',
				openEffect	: 'elastic',
				openSpeed	: 300,
				closeEffect : 'elastic',
				closeSpeed  : 300,
			});
			$("div.slider .fancybox").fancybox({
				'height'	: '100%',
				'autoScale'	: false,
				width		: '400px',
				type		: 'image',
				openEffect	: 'elastic',
				openSpeed	: 300,
				closeEffect : 'elastic',
				closeSpeed  : 300,
				autoPlay	: true,
				loop		: true
			});
		});
	</script>
</head>
<body ><!--oncontextmenu="return false" onselectstart="return false" ondragstart="return false"-->
<div class="main">
  <div class="logo" id="logo"><a href="index.php"><img src="/_images/logo.png" width="200" height="201" /></a></div>
  <div class="logo_right" id="logo2">
    <p><img src="/_images/Contact Us.png" width="109" height="140" align="right" /></p>
    <p>&nbsp;</p>
    <div align="center">
      <h2>9881331689 9881502939</h2>
    </div>
  </div>
  <div class="header">
    <div id="pageBanner"> <a href= "id=&quot;next&quot;"></a> <a href= "id=&quot;prev&quot;"></a>
      <ul id="roundBanner" class="roundabout-holder" >
        <li class="roundabout-moveable-item" ><img src="/_images/img.png" alt="The Nook" /></li>
        <li class="roundabout-moveable-item" ><img src="/_images/img1.png" alt="The Nook" /></li>
        <li class="roundabout-moveable-item" ><img src="/_images/img2.png" alt="The Nook" /></li>
        <li class="roundabout-moveable-item roundabout-in-focus" ><img src="/_images/img3.png" alt="The Nook" /></li>
        <li class="roundabout-moveable-item" ><img src="/_images/img4.png" alt="The Nook" /></li>
        <li class="roundabout-moveable-item" ><img src="/_images/img2.png" alt="The Nook" /></li>
      </ul>
      <div class="clear"></div>
    </div>
  </div>
</div>
<div class="navigation_div">
  <div class="center_cont">
    <?php  menu(0,0,'Top Menu'); // menu($parent, $level, $menu_type) ?>
    <div class="clear">
      <div align="left"></div>
    </div>
  </div>
</div>
<div class="main">
  <div class="content">