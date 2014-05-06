<?php 
include '../../login/dbc.php';
page_protect();
?>
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/Template.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- InstanceBeginEditable name="doctitle" -->
<title>Welcome to Administration</title>
<style type="text/css">
    .content table h1 {
	color: #C00;
	margin: 0px;
	padding: 0px;
	border-top-width: 1px;
	border-right-width: 1px;
	border-bottom-width: 1px;
	border-left-width: 1px;
	border-bottom-style: solid;
	border-top-color: #999;
	border-right-color: #999;
	border-bottom-color: #999;
	border-left-color: #999;
	font-size: 18px;
	font-weight: normal;
}
    .content table h2 {
	color: #267BFB;
	margin: 0px;
	padding: 0px;
	border-bottom-style: dotted;
	border-bottom-width: 1px;
	font-size: 16px;
	font-weight: normal;
}
    .content #menutbl tr th .nav {
	background-color: #FCF;
	display: block;
	width: 100px;
	float: left;
}
</style>
<link href="../../_script/Spray/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
<!-- InstanceEndEditable -->
<!--*********************>> Web Editor Tiny MCE Script << **************************************************** -->
<script type="text/javascript" src="../../_script/jquery-1.6.2.min.js"></script>
<script type="text/javascript" src="../../tiny_mce/tiny_mce.js"></script>
<script type="text/javascript">
tinyMCE.init({
        // General options
        mode : "exact",
        elements : "content,amenities,specifications,availability,contact,overview",
        theme : "advanced",
		convert_urls: false,
        plugins : "autolink,lists,spellchecker,pagebreak,style,layer,save,table,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template",
		
		file_browser_callback : "filebrowser",

        // Theme options
        theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,|,styleselect,formatselect,fontselect,fontsizeselect",
        theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
        theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
        theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,spellchecker,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,blockquote,pagebreak,|,insertfile,insertimage",
        theme_advanced_toolbar_location : "top",
        theme_advanced_toolbar_align : "left",
        theme_advanced_statusbar_location : "bottom",
        theme_advanced_resizing : true,

        // Skin options
        skin : "o2k7",
        skin_variant : "silver",

        // Example content CSS (should be your site CSS)
        content_css : "/manage/_css/body_style.css",

        // Drop lists for link/image/media/template dialogs
        template_external_list_url : "/manage/manage/tiny_mce/lists/template_list.js",
        external_link_list_url : "/manage/manage/tiny_mce/lists/link_list.js",
        external_image_list_url : "/manage/manage/tiny_mce/lists/image_list.js",
        media_external_list_url : "/manage/manage/tiny_mce/lists/media_list.js",

        // Replace values for the template plugin
        template_replace_values : {
                username : "Some User",
                staffid : "991234"
        }
});
function filebrowser(field_name, url, type, win) {
    
    fileBrowserURL = "/manage/manage/tiny_mce/pdw_file_browser/index.php?editor=tinymce&filter=" + type;
      
    tinyMCE.activeEditor.windowManager.open({
        title: "PDW File Browser",
        url: fileBrowserURL,
        width: 950,
        height: 650,
        inline: 0,
        maximizable: 1,
        close_previous: 0
      },{
        window : win,
        input : field_name
      }
    );    
  }
</script>
<!--*********************>> END of Web Editor Tiny MCE Script << **************************************************** -->


<!-- ************>>> this script is used Highlight a ACTIVE LINK <<**************** -->
<script type="text/javascript">
$(document).ready(function(){
$(".mainmenu a").each(function() {   
    if (this.href == window.location.href) {
        $(this).addClass("active");
    }
});
// This function is used for displaying submenu with jQuery and css ***************************************************
	$(".mainmenu li ul").hide();
    $(".mainmenu li").hover(function(){
		$(this).find('ul:first').css({visibility: "visible",display: "none", background:""}).slideDown(500);
		},function(){
		$(this).find('ul:first').css({visibility: "hidden",display: "none"});
		});

});
</script>

<!-- ************>>> this script is used for open link in new window <<**************** -->
<script type="text/javascript">
var newwindow;
function poptastic(url)
{
	newwindow=window.open(url,'name','height=660,width=980');
	if (window.focus) {newwindow.focus()}
} 
</script>
<!-- ************>>> END OF this this script is used for open link in new window <<**************** -->
    <style type="text/css">
    .content table tr td a.nav {
	display: block;
	background-color: #FCF;
	color: #006;
	text-decoration: none;
	text-align: center;
	vertical-align: middle;
	float: left;
	/* [disabled]width: 100%; */
	padding-top: 3px;
	padding-right: 10px;
	padding-bottom: 3px;
	padding-left: 10px;
}
    .content table tr td a:hover.nav {
	color: #FFF;
	background-color: #006;
}
    </style>
    <style type="text/css">
    .content table h1 {
	color: #C00;
	margin: 0px;
	padding: 0px;
	border-top-width: 1px;
	border-right-width: 1px;
	border-bottom-width: 1px;
	border-left-width: 1px;
	border-bottom-style: solid;
	border-top-color: #999;
	border-right-color: #999;
	border-bottom-color: #999;
	border-left-color: #999;
	font-size: 18px;
	font-weight: normal;
}
    .content table h2 {
	color: #267BFB;
	margin: 0px;
	padding: 0px;
	border-bottom-style: dotted;
	border-bottom-width: 1px;
	font-size: 16px;
	font-weight: normal;
}
    </style>

<style type="text/css">
    
    <!--
	*{
	margin: 0px;
	/* [disabled]padding: 0px; */
	font-size: 14px;
		}
	
	body {
	font: 100%/1.4 Verdana, Arial, Helvetica, sans-serif;
	background-color: #42413C;
	margin: 0;
	padding: 0;
	color: #000;
}

/* ~~ Element/tag selectors ~~ */
ul, ol, dl { /* Due to variations between browsers, it's best practices to zero padding and margin on lists. For consistency, you can either specify the amounts you want here, or on the list items (LI, DT, DD) they contain. Remember that what you do here will cascade to the .nav list unless you write a more specific selector. */
	padding: 0;
	margin: 0;
}
h2, h3, h4, h5, h6 {
	margin-top: 0;	 /* removing the top margin gets around an issue where margins can escape from their containing div. The remaining bottom margin will hold it away from any elements that follow. */
	padding-right: 15px;
	padding-left: 15px;
	color: #FF9;
	font-size: 24px;
	padding-top: 0px;
	padding-bottom: 10px;
	border-top-style: none;
	border-right-style: none;
	border-bottom-style: none;
	border-left-style: none;
}
h1{
	margin-top: 0;	 /* removing the top margin gets around an issue where margins can escape from their containing div. The remaining bottom margin will hold it away from any elements that follow. */
	padding-right: 15px;
	padding-left: 15px;
	color: #FF9;
	font-size: 18px;
	padding-top: 0px;
	padding-bottom: 5px;
	font-weight: normal;
}

a img { /* this selector removes the default blue border displayed in some browsers around an image when it is surrounded by a link */
	border: none;
}

/* ~~ Styling for your site's links must remain in this order - including the group of selectors that create the hover effect. ~~ */
a:link {
	color: #42413C;
	text-decoration: underline; /* unless you style your links to look extremely unique, it's best to provide underlines for quick visual identification */
}
a:visited {
	color: #6E6C64;
	text-decoration: underline;
}
a:hover, a:active, a:focus { /* this group of selectors will give a keyboard navigator the same hover experience as the person using a mouse. */
	text-decoration: none;
}

/* ~~ this fixed width container surrounds all other divs ~~ */
.container {
	width: 95%;
	background-color: #FFF;
	margin: 0 auto; /* the auto value on the sides, coupled with the width, centers the layout */
	overflow: hidden; /* this declaration makes the .container understand where the floated columns within ends and contain them */
	min-height: 600px;
	min-width: 960px;
	max-width: 1260px;
}

/* ~~ These are the columns for the layout. ~~ 

1) Padding is only placed on the top and/or bottom of the divs. The elements within these divs have padding on their sides. This saves you from any "box model math". Keep in mind, if you add any side padding or border to the div itself, it will be added to the width you define to create the *total* width. You may also choose to remove the padding on the element in the div and place a second div within it with no width and the padding necessary for your design.

2) No margin has been given to the columns since they are all floated. If you must add margin, avoid placing it on the side you're floating toward (for example: a right margin on a div set to float right). Many times, padding can be used instead. For divs where this rule must be broken, you should add a "display:inline" declaration to the div's rule to tame a bug where some versions of Internet Explorer double the margin.

3) Since classes can be used multiple times in a document (and an element can also have multiple classes applied), the columns have been assigned class names instead of IDs. For example, two sidebar divs could be stacked if necessary. These can very easily be changed to IDs if that's your preference, as long as you'll only be using them once per document.

4) If you prefer your nav on the right instead of the left, simply float these columns the opposite direction (all right instead of all left) and they'll render in reverse order. There's no need to move the divs around in the HTML source.

*/
.sidebar1 {
	float: left;
	background-color: #EADCAE;
	padding-bottom: 10px;
	min-height: 510px;
	position: relative;
	width: 100%;
}
.content {
	padding: 10px;
	width: 98%;
	font-size: 100%;
	max-width: 1235px;
	min-width: 780px;
	margin-right: auto;
	margin-left: auto;
	float: left;
	line-height: 140%;
}

/* ~~ This grouped selector gives the lists in the .content area space ~~ */
.content ul, .content ol {
}
th{
	line-height:230%;
}

/* ~~ The navigation list styles (can be removed if you choose to use a premade flyout menu like Spry) ~~ */
ul.nav {
	list-style: none; /* this removes the list marker */
	border-top: 1px solid #666; /* this creates the top border for the links - all others are placed using a bottom border on the LI */
	margin-bottom: 15px; /* this creates the space between the navigation on the content below */
	width: 100%;
}
ul.nav li {
	border-bottom: 1px solid #666;
}
ul.nav a, ul.nav a:visited { /* grouping these selectors makes sure that your links retain their button look even after being visited */
	padding: 5px 5px 5px 15px;
	display: block; /* this gives the link block properties causing it to fill the whole LI containing it. This causes the entire area to react to a mouse click. */
	width: auto;  /*this width makes the entire button clickable for IE6. If you don't need to support IE6, it can be removed. Calculate the proper width by subtracting the padding on this link from the width of your sidebar container. */
	text-decoration: none;
	background-color: #C6D580;
}
ul.nav a:hover, ul.nav a:active, ul.nav a:focus { /* this changes the background and text color for both mouse and keyboard navigators */
	background-color: #ADB96E;
	color: #FFF;
}

/* ~~ miscellaneous float/clear classes ~~ */
.fltrt {  /* this class can be used to float an element right in your page. The floated element must precede the element it should be next to on the page. */
	float: right;
	margin-left: 8px;
}
.fltlft { /* this class can be used to float an element left in your page. The floated element must precede the element it should be next to on the page. */
	float: left;
	margin-right: 8px;
}
.clearfloat { /* this class can be placed on a <br /> or empty div as the final element following the last floated div (within the #container) if the overflow:hidden on the .container is removed */
	clear:both;
	height:0;
	font-size: 1px;
	line-height: 0px;
}
.header {
	background-color: #BF0000;
	/* [disabled]height: 80px; */
	padding-top: 10px;
	padding-right: 10px;
	padding-left: 10px;
}
.footer {
	background-color: #000033;
	height: 20px;
	clear: both;
	color: #999;
	padding-top: 5px;
	padding-right: 10px;
	padding-bottom: 5px;
	padding-left: 10px;
	margin: 0px;
	bottom: 0px;
	position: relative;
}
.footer p {
	color: #999;
	margin: 0px;
}
.footer p a {
	color: #CCC;
	text-decoration: none;
}
.container .content table tr th {
	font-size: 14px;
	background-color: #C60005;
	padding: 2px;
	color: #FFF;
	border-top-color: #E1FFFF;
	border-right-color: #E1FFFF;
	border-bottom-color: #E1FFFF;
	border-left-color: #E1FFFF;
}
.viewsite {
	float: right;
	width: 100px;
	margin: 15px;
}
.viewsite a {
	color: #003;
	text-decoration: none;
	padding: 10px;
	border-radius: 15px;
	background-color: #CCCCCC;
}
.viewsite a:hover {
	background-color: #FF9;
	color: #C00;
}
.mainmenu {
	list-style-type: none;
	display: block;
	z-index: 99;
	position: relative;
	width: 100%;
}
.mainmenu li {
	text-align: center;
	vertical-align: middle;
	display: block;
	float: left;
	list-style-type: none;
}
.clear {
	clear: both;
}
.mainmenu li a {
	color: #FFF;
	background-color: #336;
	text-decoration: none;
	padding-top: 5px;
	padding-right: 10px;
	padding-bottom: 5px;
	padding-left: 10px;
	border-top-width: 1px;
	border-right-width: 1px;
	border-bottom-width: 1px;
	border-left-width: 1px;
	border-right-style: solid;
	border-top-color: #FFF;
	border-right-color: #FFF;
	border-bottom-color: #FFF;
	border-left-color: #FFF;
	height: 20px;
	min-width: 140px;
	display: block;
}
.mainmenu li a:hover {
	color: #333;
	background-color: #E9A6FF;
}
.mainmenu li a.active {
	color: #333;
	background-color: #E9A6FF;
}
.mainmenu li ul {
	list-style-type: none;
	position: absolute;
	/* [disabled]width: 140px; */
	display: none;
}
.mainmenu li ul li {
	display: block;
	color: #FFF;
	background-color: #F30;
	text-align: left;
	float: none;
}
.mainmenu li ul.activ {
	display: block;
}
.mainbar {
	width: 100%;
	position: relative;
	/* [disabled]margin-left: 170px; */
	/* [disabled]margin-top: 10px; */
	float: left;
	margin-bottom: 10px;
}
.container .content .mainbar .mainmenu li ul li ul {
	position: absolute;
	left: 160px;
	margin-top: -30px;
}
.mainmenu li ul li a {
	border-top-style: none;
	border-right-style: none;
	border-bottom-style: solid;
	border-left-style: none;
	color: #FFF;
	background-color: #336;
	/* [disabled]height: 20px; */
	padding-top: 5px;
	padding-right: 10px;
	padding-bottom: 5px;
	padding-left: 10px;
	display: block;
	border-bottom-width: .05em;
	border-bottom-color: #FFF;
}
.mainmenu li ul li a {
	border-top-style: solid;
	color: #FFF;
	background-color: #336;
	border-top-width: .1em;
	border-top-color: #FFF;
}
.mainmenu li ul li a:hover {
	color: #333;
	background-color: #E9A6FF;
}
.mainmenu li ul li a.active:hover {
	color: #333;
	background-color: #E9A6FF;
}
.mainmenu li ul li a.active {
	color: #333;
	background-color: #E9A6FF;
}
.content table.border {
	width: 100%;
	background-color: #E4F8FA;
	border: 1px solid #E2E2E2;
}
.content table.border tr td {
	padding: 3px;
	margin: 0px;
	font-size: 14px;
	border-top-color: #CCC;
	border-right-color: #CCC;
	border-bottom-color: #CCC;
	border-left-color: #CCC;
}
.content table.cellborder tr td {
	border: 1px solid #E2E2E2;
}
.content table.cellborder tr th {
	border: 1px solid #E2E2E2;
}
.header h1 a {
	font-size: 16px;
	color: #7CFE6D;
	font-weight: normal;
	text-decoration: none;
	display: inline;
	width: 300px;
	padding-top: 5px;
	padding-right: 10px;
	padding-bottom: 5px;
	padding-left: 10px;
}
.header h1 a:hover {
	color: #900;
	background-color: #B3DDFF;
}
-->
    
    </style>
    <!-- InstanceBeginEditable name="head" -->
    <script src="../../_script/Spray/SpryValidationTextarea.js" type="text/javascript"></script>
    <!-- InstanceEndEditable -->
</head>
    
    <body>
    <div class="container">
    <div class="viewsite"><?php if(isset($_SESSION['domain_name'])){ echo'<a href="http://'.$_SESSION['domain_name'].'/index.php" target="_blank">View Site</a>';}?></div>
    <div class="header">
    <h2>
    Welcome <?php if(isset($_SESSION['user_name'])){echo $_SESSION['user_name'];}?>
    </h2>
	  <?php if(isset($_SESSION['domain'])){
echo '	<h1>You Are Editing: -&gt;</a>';
$result = mysql_query("SELECT * FROM `user_sites` WHERE id=".$_SESSION['domain']);
	while($row = mysql_fetch_array($result)){ ?>
 	 <a href="../../select-site.php" title="Click to Chang Editing Site!"><?php echo $row['domain']; ?></a>
	<?php }}?>
	</h1>
    </div>
    <table width="100%" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="100%" align="center" valign="top"><div class="mainbar">
          <ul class="mainmenu">
            <li><a href="responses.php">My Responses</a>
              <ul>
                <li><a href="responses.php?respo_for=property">Property Sale/Rent Out</a></li>
                <li><a href="responses.php?respo_for=web">Website Queries</a></li>
                <li><a href="responses.php?respo_for=project">Projects Inquiry</a></li>
                <li><a href="responses.php?respo_for=refer">Refer Friends</a></li>

              </ul>
            </li>
            <li><a href="#">My Property</a>
              <ul>
                <li><a href="addproperty.php">Add Property</a></li>
                <li><a href="viewproperty.php">View Property</a></li>
                <li><a href="addproject.php">Add Project</a></li>
                <li><a href="viewproject.php">Manage Projects</a></li>
              </ul>
            </li>
            <li><a href="#">My Profile</a>
              <ul>
                <li><a href="../../login/mysettings.php">Edit Profile/ Contacts</a></li>
                <li><a href="../../select-site.php">View All Sites</a></li>
                <li><a href="#">Request for New Site</a></li>
                <li><a href="../../login/logout.php">Logout</a></li>
              </ul>
            </li>
          </ul>
          <div class="clear"></div>
        </div></td>
      </tr>
      <tr>
        <td valign="top">
		<div class="content">
<!-- InstanceBeginEditable name="content" -->
<!-- ************>>> This script is used for ajax // Getting data from database with function.php <<**************** -->
<script type="text/javascript" src="../../_script/jquery.js"></script>
<!-- ************>>> This script is used to set Featured Property <<**************** -->

<?php
if(isset($_GET['featured'])){

$sql = mysql_query("UPDATE `$_SESSION[user_id]_real_responses` SET `featured` = '$_GET[featured]' WHERE `id` = $_GET[id]") or die(mysql_error());
if(!$sql){
echo '<script type="text/javascript">window.history.go(-1);</script>';
}}?>

<!-- ************>>> This script is used to set Delete Status of Response <<**************** -->

<?php
if(isset($_GET['respo_del'])){

$sql = mysql_query("UPDATE `$_SESSION[user_id]_real_response` SET `status` = 'Delete' WHERE `id` = '$_GET[respo_del]'") or die(mysql_error());
if($sql){
echo '<script type="text/javascript">window.history.go(-1)</script>';
}
}?>

<!-- ************>>> This script is used to set Delete Status of Response <<**************** -->

<?php
if(isset($_GET['respo_act'])){

$sql = mysql_query("UPDATE `$_SESSION[user_id]_real_response` SET `status` = 'Active' WHERE `id` = '$_GET[respo_act]'") or die(mysql_error());
echo '<script type="text/javascript">window.history.go(-1);</script>';
}?>
<!-- ************>>> This script is used to set Read Status of Response <<**************** -->

<?php
if(isset($_GET['mk_read'])){

$sql = mysql_query("UPDATE `$_SESSION[user_id]_real_response` SET `status` = 'Read' WHERE `id` = '$_GET[mk_read]'") or die(mysql_error());
}?>

<!-- ************>>> This script is used to set Reply Status of Response <<**************** -->

<?php
if(isset($_POST['reply'])){

$sql = mysql_query("UPDATE `$_SESSION[user_id]_real_response` SET `reply` = 'Yes', reply_msg='$_POST[reply_msg]' WHERE `id` = '$_POST[msg_id]'") or die(mysql_error());
echo '<script type="text/javascript">window.history.go(-3),location.reload();</script>';

$ml = mail($_POST['to'],$_POST['subject'],$_POST['message'],"From: ".$_POST['from']);
if($ml){
	echo 'Mail has sent to: '.$_POST['to'].'.';
	}


}?>


<div class="content">
<!-- ************ View Messages Function ************************************************************************************ -->
<?php 
$condition='respo_for="web"';
if(isset($_GET['respo_for'])){
	if(isset($_GET['status'])){
		$condition=' respo_for="'.$_GET['respo_for'].'" AND status="'.$_GET['status'].'"';
	}
	else {
			$condition=' respo_for="'.$_GET['respo_for'].'" AND status !="Delete"';

		}
	}
$result = mysql_query("SELECT * FROM `$_SESSION[user_id]_real_response` WHERE ".$condition." ORDER BY `id` DESC");
if(!$result){
	echo 'Error: '.mysql_error();
	}
?>
  <table border="0" cellspacing="5" class="cellborder">
    <tr>
      <td align="right"><a href="?respo_for=web" class="nav">Web Response</a></td>
      <td align="right"><a href="?respo_for=property" class="nav">Property Response</a></td>
      <td align="right"><a href="?respo_for=project" class="nav">Project Response</a></td>
      </tr>
    </table>
  <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0" class="border"  id="menutbl">
    <tr>
  <?php if (isset($_GET['respo_for'])) { ?>
  <?php	if ($_GET['respo_for']=='property') { ?>
      <td colspan="6"><table border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td><a href="?respo_for=property" class="nav">All</a></td>
          <td><a href="?respo_for=property&amp;status=New" class="nav">New</a></td>
          <td><a href="?respo_for=property&amp;status=Read" class="nav">Read</a></td>
          <td><a href="?respo_for=property&amp;status=Delete" class="nav">Delete</a></td>
          </tr>
        </table></td>
  <?php }?>
  <?php	if ($_GET['respo_for']=='project') { ?>
      <td colspan="6">
        <table border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><a href="?respo_for=project" class="nav">All</a></td>
            <td><a href="?respo_for=project&amp;status=New" class="nav">New</a></td>
            <td><a href="?respo_for=project&amp;status=Read" class="nav">Read</a></td>
            <td><a href="?respo_for=project&amp;status=Delete" class="nav">Delete</a></td>
            </tr>
          </table></td>
  <?php }?>
  <?php	if ($_GET['respo_for']=='web') { ?>
      <td colspan="6">
        <table border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><a href="?respo_for=web" class="nav">All</a></td>
            <td><a href="?respo_for=web&amp;status=New" class="nav">New</a></td>
            <td><a href="?respo_for=web&amp;status=Read" class="nav">Read</a></td>
            <td> <a href="?respo_for=web&amp;status=Delete" class="nav">Delete</a></td>
            </tr>
          </table></td>
  <?php }?>
  <?php } else {?>
  <?php   ?>
      <td colspan="6">
        <table border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><a href="?respo_for=web" class="nav">All</a></td>
            <td><a href="?respo_for=web&amp;status=New" class="nav">New</a></td>
            <td><a href="?respo_for=web&amp;status=Read" class="nav">Read</a></td>
            <td> <a href="?respo_for=web&amp;status=Delete" class="nav">Delete</a></td>
            </tr>
          </table></td>
  <?php }?>
      </tr>
    </table>
  <?php if(!isset($_GET['view_mail'])){?>
  <table class="border cellborder">
    <tr>
      <th width="5%" bgcolor="#99FFCC"> <p>Sr. No. </p></th>
      <th width="21%" bgcolor="#99FFCC">From</th>
      <th bgcolor="#99FFCC">Subject</th>
      <th width="12%" bgcolor="#99FFCC">Replied</th>
      <th width="12%" bgcolor="#99FFCC">Date</th>
      <th width="11%" bgcolor="#99FFCC">Action</th>
      </tr>
  <?php		  	

$result = mysql_query("SELECT * FROM `$_SESSION[user_id]_real_response` WHERE ".$condition." ORDER BY `id` DESC");
$i=1;

while($row = mysql_fetch_array($result)){ 
?>
    <tr>
      <td width="8%" align="right" valign="top" id="editmenu"><?php  echo $i++; ?></td>
      <td align="left" valign="top"><a href="?view_mail=<?php echo $row['id'];?><?php if(($row['status']=='New') || $row['status']==''){echo '&amp;mk_read='.$row['id'];} ?>"> <?php echo $row['first_name'];?> <?php echo $row['last_name'];?></a></td>
      <td align="left" valign="top">
        <a href="?view_mail=<?php echo $row['id'];?><?php if(($row['status']=='New') || $row['status']==''){echo '&amp;mk_read='.$row['id'];} ?>"><?php echo $row['subject'];?></a>
        </td>
      <td align="left" valign="top">
        <?php echo $row['reply'];?>  
      </td>
      <td align="left" valign="top">
        <?php echo $row['date'];?>  
        </td>
      <td align="left" valign="top">
        <?php if($row['status']!='Delete'){?>
        <a href="?respo_del=<?php echo $row['id'];?>"><font color="#FF0000">Delete</font></a>
        <?php }else {?>
        <a href="?respo_act=<?php echo $row['id'];?>">Make Active</a>
        <?php }?>
        </td>
      </tr>
    <?php }?>
    </table>
  <?php }?>
<?php 
if(isset($_GET['view_mail'])){
	$view_mail = mysql_query("SELECT * FROM `$_SESSION[user_id]_real_response` WHERE id=".$_GET['view_mail']);
if(!$view_mail){
	echo 'Error: '.mysql_error();
	}

?>

  <table width="100%" border="0" cellpadding="0" cellspacing="0" class="border cellborder">
  <?php		  	
while($row = mysql_fetch_array($view_mail)){ ?>
    <tr>
      <td><a href="javascript: void(0);" class="nav" onclick="javascript: history.go(-1)">&lt;-Back</a></td>
      <td colspan="2"><a href="?view_mail=<?php echo $row['id'];?><?php if($row['status']=='New'){echo '&amp;mk_read='.$row['id'];} ?>"><?php echo $row['subject'];?></a></td>
      </tr>
    <tr>
      <td>&nbsp;</td>
      <td><?php echo $row['first_name'];?> <?php echo $row['last_name'];?> {email: <?php echo $row['email'];?>}</td>
      <td width="27%"><?php echo $row['date'];?></td>
      </tr>
    <tr>
      <td>&nbsp;</td>
      <td><div style="min-height:200px;"><?php echo $row['message'];?></div></td>
      <td>&nbsp;</td>
      </tr>
    <tr>
      <td width="8%" valign="top">Reply:</td>
      <td width="65%"><form id="form1" name="form1" method="post" action="">
        <span id="sprytextarea1">
        <textarea name="reply_msg" id="reply_msg" cols="60" rows="5" <?php if($row['reply_msg']!="") echo 'disabled="disabled"';?> ><?php echo $row['reply_msg'];?></textarea><br />
        Remaining Chars.: <span id="countsprytextarea1">&nbsp;</span><span class="textareaMinCharsMsg">Minimum number of characters not met.</span><span class="textareaMaxCharsMsg">Exceeded maximum number of characters.</span><span class="textareaRequiredMsg">A value is required.</span></span>
        <input type="hidden" name="msg_id" id="msg_id" value="<?php echo $row['id'];?>"/>
        <input type="hidden" name="from" id="from" value="<?php echo $_SESSION['user_email'];?>"/>
        <input type="hidden" name="to" id="to" value="<?php echo $row['email'];?>"/>
        <input type="hidden" name="subject" id="subject" value="<?php echo $row['email'];?>"/>
        <input type="submit" name="reply" id="reply" value="Send Reply"  <?php if($row['reply_msg']!="") echo 'disabled="disabled"';?>  />
      </form></td>
      <td valign="top">&nbsp;</td>
      </tr>
    <?php }?>
    </table>
    <?php }?>
  <p>&nbsp;</p>
  <!-- ************ Update Menu Function ********************************************************************************** -->
</div>
<script type="text/javascript">
var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1", {minChars:20, maxChars:2000, counterId:"countsprytextarea1", counterType:"chars_remaining"});
</script>
<!-- InstanceEndEditable -->
        </div>
        </td>
      </tr>
    </table>
    <div class="footer">
    <p align="center">
    This site is Created &amp; Maintained by <a href="http://www.vilas.co.in" title="Free Website Designing &amp; hosting">Vilas Shetkar</a>
    </p>
    </div>
    </div>
</body>
    <!-- InstanceEnd --></html>
