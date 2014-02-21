<?php 
include '../login/dbc.php';
page_protect();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/Template.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- InstanceBeginEditable name="doctitle" -->
    <title>Edit Module</title>
    <style type="text/css">
    .hide_module {
}
    </style>
    <link href="/manage/_script/Spray/SpryValidationSelect.css" rel="stylesheet" type="text/css" />
    <link href="/manage/_script/Spray/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
    <!-- InstanceEndEditable -->
<!--*********************>> Web Editor Tiny MCE Script << **************************************************** -->
<script type="text/javascript" src="/manage/_script/jquery-1.6.2.min.js"></script>
<script type="text/javascript" src="/manage/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript">
tinyMCE.init({
        // General options
        mode : "exact",
        elements : "content,amenities,specifications,availability,contact,overview",
        theme : "advanced",
		convert_urls: false,
        plugins : "autolink,lists,spellchecker,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template",

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
        template_external_list_url : "/manage/tiny_mce/lists/template_list.php",
        external_link_list_url : "/manage/tiny_mce/lists/link_list.php",
        external_image_list_url : "/manage/tiny_mce/lists/image_list.php",
        media_external_list_url : "/manage/tiny_mce/lists/media_list.php",

        // Replace values for the template plugin
        template_replace_values : {
                username : "Some User",
                staffid : "991234"
        }
});
</script>
<!--*********************>> END of Web Editor Tiny MCE Script << **************************************************** -->


<!-- ************>>> this script is used Highlight a ACTIVE LINK <<**************** -->
<script type="text/javascript">
$(document).ready(function(){
    $(".mainmenu li:first a").addClass("active");

  $(".mainmenu li a").click(function(){
	$(".mainmenu li a").removeClass("active");
    $(this).addClass("active");

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
	max-width: 1100px;
	min-width: 780px;
	margin-right: auto;
	margin-left: auto;
	float: left;
}

/* ~~ This grouped selector gives the lists in the .content area space ~~ */
.content ul, .content ol {
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
	text-decoration: none;
	background-color: #F30;
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
	background-color: #FF6;
}
.mainmenu li a.active {
	color: #FFF;
	background-color: #306;
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
	border-bottom-style: none;
	border-left-style: none;
	background-color: #F30;
	color: #FFF;
	/* [disabled]height: 20px; */
	padding-top: 5px;
	padding-right: 10px;
	padding-bottom: 5px;
	padding-left: 10px;
	display: block;
}
.mainmenu li ul li a:hover {
	color: #006;
	background-color: #FF9;
}
.mainmenu li ul li a.active:hover {
	color: #006;
	background-color: #FF9;
}
.mainmenu li ul li a.active {
	color: #FFF;
	background-color: #F30;
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
    <script src="/manage/_script/Spray/SpryValidationSelect.js" type="text/javascript"></script>
    <script src="/manage/_script/Spray/SpryValidationTextField.js" type="text/javascript"></script>
    <!-- InstanceEndEditable -->
</head>
    
    <body>
    <div class="container">
    <div class="viewsite"><?php if(isset($_SESSION['domain_name'])){ echo'<a href="'.$_SESSION['domain_name'].'/index.php" target="_blank">View Site</a>';}?></div>
    <div class="header">
    <h2>
    Welcome <?php if(isset($_SESSION['user_name'])){echo $_SESSION['user_name'];}?>
    </h2>
	  <?php if(isset($_SESSION['domain'])){
echo '	<h1>You Are Editing: -&gt;</a>';
$result = mysql_query("SELECT * FROM `user_sites` WHERE id=".$_SESSION['domain']);
	while($row = mysql_fetch_array($result)){ ?>
 	 <a href="../select-site.php" title="Click to Chang Editing Site!"><?php echo $row['domain']; ?></a>
	<?php }}?>
	</h1>
    </div>
    <table width="100%" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="18%" rowspan="2" align="left" valign="top" bgcolor="#EADCAE">
        <div class="sidebar1">
          <ul class="nav">
            <li><a href="../index.php">Home</a></li>
            <li><a href="../insert/editcategory.php"> Category </a></li>
            <li><a href="../insert/editarticle.php"> Article</a></li>
            <li><a href="../insert/menutype.php">Menu Type</a></li>
            <li><a href="../insert/editmenu.php"> Menu</a></li>
            <li> <a href="../upload/upload.php"> Media</a></li>
            <li><a href="ad_management/view-ads.php">Ad Management</a></li>
            <li><a href="view-module.php">Modules</a> </li>
            <li> <a href="../login/logout.php">Log Out</a> </li>
            <p>
              <?php
if (checkAdmin()) {
/*******************************END**************************/
?>
            </p>
            <p>&nbsp; </p>
            <p> <a href="../login/admin.php">Admin CP </a></p>
            <?php } ?>
          </ul>
          <p></p>
          <!-- end .sidebar1 -->
        </div>
        </td>
        <td width="82%" align="center" valign="top"><div class="mainbar">
          <ul class="mainmenu">
            <li><a href="../Projects/Real-Estate/responses.php">My Responses</a>
              <ul>
                <li><a href="../Projects/Real-Estate/responses.php?respo_for=property">Property Sale/Rent Out</a></li>
                <li><a href="../Projects/Real-Estate/responses.php?respo_for=web">Website Queries</a></li>
                <li><a href="../Projects/Real-Estate/responses.php?respo_for=project">Projects Inquiry</a></li>
                <li><a href="../Projects/Real-Estate/responses.php?respo_for=refer">Refer Friends</a></li>

              </ul>
            </li>
            <li><a href="#">My Property</a>
              <ul>
                <li><a href="../Projects/Real-Estate/addproperty.php">Add Property</a></li>
                <li><a href="../Projects/Real-Estate/viewproperty.php">View Property</a></li>
                <li><a href="../Projects/Real-Estate/addproject.php">Add Project</a></li>
                <li><a href="../Projects/Real-Estate/viewproject.php">Manage Projects</a></li>
              </ul>
            </li>
            <li><a href="#">My Profile</a>
              <ul>
                <li><a href="../login/mysettings.php">Edit Profile/ Contacts</a></li>
                <li><a href="../select-site.php">View All Sites</a></li>
                <li><a href="#">Request for New Site</a></li>
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
<script type="text/javascript">
$(document).ready(function(){
	$("#Horizontal_size").hide();
	$("#ad_type").change(function() {
    $("#" + this.value + "_size").show().siblings(".ad_size").hide()
})
});
</script>

<?php
if(isset($_POST['menu_submit'])){
		$menu = mysql_query("UPDATE $_SESSION[user_id]_module SET `title`='$_POST[title]', `module_position`='$_POST[module_position]', `category`='$_POST[category]', `module_content`='0,0,$_POST[menu_type]', `status`='$_POST[status]', `domain`='$_SESSION[domain]', `module_function`='$_POST[module_function]' WHERE id=$_GET[edit]") or die(mysql_error());

if($menu) echo 'Menu Module UPDATED Successfully!!';
}	?>

<?php
if(isset($_POST['cont_submit'])){
		$menu = mysql_query("UPDATE $_SESSION[user_id]_module SET `title`='$_POST[title]', `module_position`='$_POST[module_position]', `category`='$_POST[category]', `module_content`='$_POST[content]', `status`='$_POST[status]', `domain`='$_SESSION[domain]' WHERE id=$_GET[edit]") or die(mysql_error());

if($menu) echo 'Contact Us Module UPDATED Successfully!!';
}	?>

<?php
if(isset($_POST['enq_submit'])){
		$menu = mysql_query("UPDATE $_SESSION[user_id]_module SET `title`='$_POST[title]', `module_position`='$_POST[module_position]', `category`='$_POST[category]', `module_content`='$_POST[module_content]', `status`='$_POST[status]', `domain`='$_SESSION[domain]', `module_function`='$_POST[module_function]', `module_file`='$_POST[module_file]' WHERE id=$_GET[edit]") or die(mysql_error());

if($menu) echo 'Enquiry Form Module UPDATED Successfully!!';
}	?>

<?php
if(isset($_POST['ad_submit'])){
		$menu = mysql_query("UPDATE $_SESSION[user_id]_module SET `title`='$_POST[title]', `module_position`='$_POST[module_position]', `category`='$_POST[category]', `module_content`='$_POST[ad_type],$_POST[ad_size]', `status`='$_POST[status]', `domain`='$_SESSION[domain]', `module_function`='$_POST[module_function]', `module_file`='$_POST[module_file]' WHERE id=$_GET[edit]") or die(mysql_error());

if($menu) echo 'Advertisement Module UPDATED Successfully!!';
}	?>
<?php
if(isset($_POST['prop_submit'])){
		$menu = mysql_query("UPDATE $_SESSION[user_id]_module SET `title`='$_POST[title]', `module_position`='$_POST[module_position]', `category`='$_POST[category]', `module_content`= '$_POST[module_content]', `status`='$_POST[status]', `domain`='$_SESSION[domain]', `module_function`='$_POST[module_function]', `module_file`='$_POST[module_file]' WHERE id=$_GET[edit]") or die(mysql_error());

if($menu) echo 'Post Your Property Module UPDATED Successfully!';
}	?>
<?php
if(isset($_POST['req_submit'])){
		$menu = mysql_query("UPDATE $_SESSION[user_id]_module SET `title`='$_POST[title]', `module_position`='$_POST[module_position]', `category`='$_POST[category]', `module_content`= '$_POST[module_content]', `status`='$_POST[status]', `domain`='$_SESSION[domain]', `module_function`='$_POST[module_function]', `module_file`='$_POST[module_file]' WHERE id=$_GET[edit]") or die(mysql_error());
if($menu) echo 'Post Your Requirement Module UPDATED Successfully!';
}	?>

<?php 
	$edit = mysql_query("SELECT * FROM $_SESSION[user_id]_module WHERE id=$_GET[edit]");
	while($module = mysql_fetch_array($edit)) {
?>
    <table width="100%" border="0" cellpadding="0" cellspacing="0" class="border">
<?php if($module['module_function']=="menu"){ ?>
  <tr class="hide_module" id="menu">
    <td width="17%" align="left" valign="top"><strong>Menu:</strong></td>
    <td width="83%" align="left" valign="top">
      <form id="form1" name="form1" method="post" action="">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="20%">Module Name:</td>
            <td colspan="2"><span id="sprytextfield1">
              <input type="text" name="title" id="title" value="<?php echo $module['title'];?>" />
              <span class="textfieldRequiredMsg">A value is required.</span></span></td>
            <td width="20%">Module Position:</td>
            <td><select name="module_position" id="module_position">
              <option value="Left" <?php if($module['module_position']=='Left')echo 'SELECTED'; ?>>Left</option>
              <option value="Right" <?php if($module['module_position']=='Right')echo 'SELECTED'; ?>>Right</option>
              <option value="Top" <?php if($module['module_position']=='Top')echo 'SELECTED'; ?>>Top</option>
              <option value="Bottom" <?php if($module['module_position']=='Bottom')echo 'SELECTED'; ?>>Bottom</option>
              <option value="Top Center" <?php if($module['module_position']=='Top Center')echo 'SELECTED'; ?>>Top Center</option>
              <option value="Bottom Center" <?php if($module['module_position']=='Bottom Center')echo 'SELECTED'; ?>>Bottom Center</option>
              </select></td>
            </tr>
          <tr>
            <td>Module Status:</td>
            <td width="15%"><input name="status" type="radio" id="status" value="1" <?php if($module['status']=='1')echo 'CHECKED'; ?> />
              Publish</td>
            <td width="15%"><input type="radio" name="status" id="status2" value="0" <?php if($module['status']=='0')echo 'CHECKED'; ?> />
              unPublish</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            </tr>
          <tr>
            <td>Menu Type:</td>
            <td colspan="2"><span id="spryselect4">
              <select name="menu_type" id="menu_type">
                <option value="<?php echo substr($module['status'],0,4); ?>"><?php echo substr($module['status'],0,4); ?></option>
                <?php $sql = mysql_query("SELECT * FROM $_SESSION[user_id]_menu_type WHERE domain = $_SESSION[domain]");
		  while($menu_type = mysql_fetch_array($sql)) {?>
                <option value="<?php echo $menu_type['menu_type']; ?>"><?php echo $menu_type['menu_type']; ?></option>
                <?php } ?>
              </select>
              <span class="selectRequiredMsg">Please select an item.</span></span></td>
            <td><input name="module_function" type="hidden" id="module_function" value="menu" />
              <input name="category" type="hidden" id="category" value="Content" /></td>
            <td>&nbsp;</td>
            </tr>
          <tr>
            <td>&nbsp;</td>
            <td colspan="2"><input type="submit" name="menu_submit" id="menu_submit" value="Submit" /></td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            </tr>
          </table>
        </form></td>
    </tr>
<?php } elseif($module['module_function']=="enquiry"){?>
  <tr class="hide_module" id="enquiry">
    <td align="left" valign="top" id="enquiry"><strong>Enquiry:</strong></td>
    <td align="left" valign="top"><form id="form3" name="form1" method="post" action="">
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="20%" align="left" valign="top">Module Name:</td>
          <td colspan="2" align="left" valign="top"><span id="sprytextfield3">
            <input type="text" name="title" id="title" value="<?php echo $module['title'];?>" />
            <span class="textfieldRequiredMsg">A value is required.</span></span></td>
          <td width="20%" align="left" valign="top">Module Position:</td>
          <td align="left" valign="top"><select name="module_position" id="module_position">
              <option value="Left" <?php if($module['module_position']=='Left')echo 'SELECTED'; ?>>Left</option>
              <option value="Right" <?php if($module['module_position']=='Right')echo 'SELECTED'; ?>>Right</option>
              <option value="Top" <?php if($module['module_position']=='Top')echo 'SELECTED'; ?>>Top</option>
              <option value="Bottom" <?php if($module['module_position']=='Bottom')echo 'SELECTED'; ?>>Bottom</option>
              <option value="Top Center" <?php if($module['module_position']=='Top Center')echo 'SELECTED'; ?>>Top Center</option>
              <option value="Bottom Center" <?php if($module['module_position']=='Bottom Center')echo 'SELECTED'; ?>>Bottom Center</option>
            </select></td>
          </tr>
        <tr>
          <td align="left" valign="top">Module Status:</td>
          <td width="15%" align="left" valign="top"><input name="status" type="radio" id="status5" value="1" <?php if($module['status']=='1')echo 'CHECKED'; ?> />
            Publish</td>
          <td width="15%" align="left" valign="top"><input type="radio" name="status" id="status6" value="0" <?php if($module['status']=='0')echo 'CHECKED'; ?> />
            unPublish</td>
          <td align="left" valign="top"><input name="module_function" type="hidden" id="module_function" value="enquiry" />
            <input name="category" type="hidden" id="category" value="Module" />
            <input name="module_content" type="hidden" id="module_content" value="web" />
            <input name="module_file" type="hidden" id="module_file" value="/admin/send-message.php" /></td>
          <td align="left" valign="top">&nbsp;</td>
          </tr>
        <tr>
          <td align="left" valign="top">&nbsp;</td>
          <td colspan="2" align="left" valign="top"><input type="submit" name="enq_submit" id="enq_submit" value="Submit" /></td>
          <td align="left" valign="top">&nbsp;</td>
          <td align="left" valign="top">&nbsp;</td>
          </tr>
        </table>
      </form></td>
    </tr>
<?php } elseif($module['module_function']=="ads"){?>
  <tr class="hide_module" id="ad-manage">
    <td align="left" valign="top" id="ad-management"><strong>Ad Management:</strong></td>
    <td align="left" valign="top"><form id="form4" name="form1" method="post" action="">
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="20%" align="left" valign="top">Module Name:</td>
          <td colspan="2" align="left" valign="top"><span id="sprytextfield4">
            <input type="text" name="title" id="title" value="<?php echo $module['title'];?>" />
            <span class="textfieldRequiredMsg">A value is required.</span></span></td>
          <td width="20%" align="left" valign="top">Module Position:</td>
          <td align="left" valign="top"><select name="module_position" id="module_position">
              <option value="Left" <?php if($module['module_position']=='Left')echo 'SELECTED'; ?>>Left</option>
              <option value="Right" <?php if($module['module_position']=='Right')echo 'SELECTED'; ?>>Right</option>
              <option value="Top" <?php if($module['module_position']=='Top')echo 'SELECTED'; ?>>Top</option>
              <option value="Bottom" <?php if($module['module_position']=='Bottom')echo 'SELECTED'; ?>>Bottom</option>
              <option value="Top Center" <?php if($module['module_position']=='Top Center')echo 'SELECTED'; ?>>Top Center</option>
              <option value="Bottom Center" <?php if($module['module_position']=='Bottom Center')echo 'SELECTED'; ?>>Bottom Center</option>
            </select></td>
          </tr>
        <tr>
          <td align="left" valign="top">Module Status:</td>
          <td width="15%" align="left" valign="top"><input name="status" type="radio" id="status7" value="1" <?php if($module['status']=='1')echo 'CHECKED'; ?> />
            Publish</td>
          <td width="15%" align="left" valign="top"><input type="radio" name="status" id="status8" value="0" <?php if($module['status']=='0')echo 'CHECKED'; ?> />
            unPublish</td>
          <td align="left" valign="top">&nbsp;</td>
          <td align="left" valign="top">&nbsp;</td>
          </tr>
        <tr>
          <td align="left" valign="top"><p>Ad Type:</p></td>
          <td colspan="2" align="left" valign="top"><select name="ad_type" id="ad_type">
            <option value="Horizontal" <?php if(substr($module['module_content'],0,10)=='Horizontal')echo 'SELECTED'; ?>>Horizontal</option>
            <option value="Vertical" <?php if(substr($module['module_content'],0,8)=='Vertical')echo 'SELECTED'; ?>>Vertical</option>
            </select></td>
          <td align="left" valign="top">Ad Size:</td>
          <td align="left" valign="top"><span id="spryselect2">
            <select name="ad_size2" class="ad_size" id="Horizontal_size">
              <option value="">Select Ad Size</option>
              <option value="200 x 100" <?php if(substr($module['module_content'],-9)=='200 x 100')echo 'SELECTED'; ?>>200 x 100</option>
              <option value="300 x 100" <?php if(substr($module['module_content'],-9)=='300 x 100')echo 'SELECTED'; ?>>300 x 100</option>
              <option value="500 x 100" <?php if(substr($module['module_content'],-9)=='500 x 100')echo 'SELECTED'; ?>>500 x 100</option>
              <option value="800 x 100" <?php if(substr($module['module_content'],-9)=='800 x 100')echo 'SELECTED'; ?>>800 x 100</option>
            </select>
            <span class="selectRequiredMsg">Please select an item.</span><span class="selectRequiredMsg">Please select an item.</span></span>
              <select name="ad_size" class="ad_size" id="Vertical_size">
                <option value="">Select Ad Size</option>
                <option value="200 x 100" <?php if(substr($module['module_content'],-9)=='200 x 100')echo 'SELECTED'; ?>>200 x 100</option>
                <option value="200 x 200" <?php if(substr($module['module_content'],-9)=='200 x 200')echo 'SELECTED'; ?>>200 x 200</option>
                <option value="200 x 300" <?php if(substr($module['module_content'],-9)=='200 x 300')echo 'SELECTED'; ?>>200 x 300</option>
                <option value="200 x 500" <?php if(substr($module['module_content'],-9)=='200 x 500')echo 'SELECTED'; ?>>200 x 500</option>
              </select>
              </td>
          </tr>
        <tr>
          <td align="left" valign="top">&nbsp;</td>
          <td colspan="2" align="left" valign="top"><input type="submit" name="ad_submit" id="ad_submit" value="Submit" />
            <input name="module_function" type="hidden" id="module_function" value="ads" />
            <input name="category" type="hidden" id="category" value="Content" />
            <input name="module_file" type="hidden" id="module_file" value="/admin/module/ad_management/view-ad-on-site.php" /></td>
          <td align="left" valign="top">&nbsp;</td>
          <td align="left" valign="top">&nbsp;</td>
          </tr>
        </table>
      </form></td>
    </tr>
<?php } elseif($module['module_function']=="login"){?>
  <tr class="hide_module" id="login">
    <td align="left" valign="top" id="login"><strong>Login Form:</strong></td>
    <td align="left" valign="top"><form id="form5" name="form1" method="post" action="">
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="20%" align="left" valign="top">Module Name:</td>
          <td colspan="2" align="left" valign="top"><span id="sprytextfield5">
            <input type="text" name="title" id="title" value="<?php echo $module['title'];?>" />
            <span class="textfieldRequiredMsg">A value is required.</span></span></td>
          <td width="20%" align="left" valign="top">Module Position:</td>
          <td align="left" valign="top"><select name="m_position4" id="m_position4">
              <option value="Left" <?php if($module['module_position']=='Left')echo 'SELECTED'; ?>>Left</option>
              <option value="Right" <?php if($module['module_position']=='Right')echo 'SELECTED'; ?>>Right</option>
              <option value="Top" <?php if($module['module_position']=='Top')echo 'SELECTED'; ?>>Top</option>
              <option value="Bottom" <?php if($module['module_position']=='Bottom')echo 'SELECTED'; ?>>Bottom</option>
              <option value="Top Center" <?php if($module['module_position']=='Top Center')echo 'SELECTED'; ?>>Top Center</option>
              <option value="Bottom Center" <?php if($module['module_position']=='Bottom Center')echo 'SELECTED'; ?>>Bottom Center</option>
            </select></td>
          </tr>
        <tr>
          <td align="left" valign="top">Module Status:</td>
          <td width="15%" align="left" valign="top"><input name="status" type="radio" id="status9" value="1" <?php if($module['status']=='1')echo 'CHECKED'; ?> />
            Publish</td>
          <td width="15%" align="left" valign="top"><input type="radio" name="status" id="status10" value="0" <?php if($module['status']=='0')echo 'CHECKED'; ?> />
            unPublish</td>
          <td align="left" valign="top">&nbsp;</td>
          <td align="left" valign="top">&nbsp;</td>
          </tr>
        <tr>
          <td align="left" valign="top"><p>Contact Details:</p>
            <p>(This detail will display on web page.)</p></td>
          <td colspan="4" align="left" valign="top"><textarea name="content4" id="content4" cols="45" rows="10"></textarea></td>
          </tr>
        </table>
      </form></td>
    </tr>
<?php } elseif($module['module_function']=="post_property"){?>
  <tr class="hide_module" id="post-property">
    <td align="left" valign="top" id="post-property"><strong>Post Your Property:</strong></td>
    <td align="left" valign="top"><form id="form6" name="form1" method="post" action="">
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="20%" align="left" valign="top">Module Name:</td>
          <td colspan="2" align="left" valign="top"><span id="sprytextfield6">
            <input type="text" name="title" id="title" value="<?php echo $module['title'];?>" />
            <span class="textfieldRequiredMsg">A value is required.</span></span></td>
          <td width="20%" align="left" valign="top">Module Position:</td>
          <td align="left" valign="top"><select name="module_position" id="module_position">
              <option value="Left" <?php if($module['module_position']=='Left')echo 'SELECTED'; ?>>Left</option>
              <option value="Right" <?php if($module['module_position']=='Right')echo 'SELECTED'; ?>>Right</option>
              <option value="Top" <?php if($module['module_position']=='Top')echo 'SELECTED'; ?>>Top</option>
              <option value="Bottom" <?php if($module['module_position']=='Bottom')echo 'SELECTED'; ?>>Bottom</option>
              <option value="Top Center" <?php if($module['module_position']=='Top Center')echo 'SELECTED'; ?>>Top Center</option>
              <option value="Bottom Center" <?php if($module['module_position']=='Bottom Center')echo 'SELECTED'; ?>>Bottom Center</option>
            </select></td>
          </tr>
        <tr>
          <td align="left" valign="top">Module Status:</td>
          <td width="15%" align="left" valign="top"><input name="status" type="radio" id="status11" value="1" <?php if($module['status']=='1')echo 'CHECKED'; ?> />
            Publish</td>
          <td width="15%" align="left" valign="top"><input type="radio" name="status" id="status12" value="0" <?php if($module['status']=='0')echo 'CHECKED'; ?> />
            unPublish</td>
          <td align="left" valign="top"><input name="module_function" type="hidden" id="module_function" value="post_property" />
            <input name="category" type="hidden" id="category" value="Module" />
            <input name="module_file" type="hidden" id="module_file" value="/admin/Projects/Real-Estate/post-property.php" />
            <input name="module_content" type="hidden" id="module_content" value="<?php $module['module_content'];?>" /></td>
          <td align="left" valign="top">&nbsp;</td>
          </tr>
        <tr>
          <td align="left" valign="top"><p>&nbsp;</p></td>
          <td colspan="2" align="left" valign="top"><input type="submit" name="prop_submit" id="prop_submit" value="Submit" /></td>
          <td align="left" valign="top">&nbsp;</td>
          <td align="left" valign="top">&nbsp;</td>
          </tr>
        </table>
      </form></td>
    </tr>
<?php } elseif($module['module_function']=="post_requirement"){?>
  <tr class="hide_module" id="post-requirement">
    <td align="left" valign="top" id="post-requirement"><strong>Post Your Requirement:</strong></td>
    <td align="left" valign="top"><form id="form7" name="form1" method="post" action="">
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="20%" align="left" valign="top">Module Name:</td>
          <td colspan="2" align="left" valign="top"><span id="sprytextfield7">
            <input type="text" name="title" id="title" value="<?php echo $module['title'];?>" />
            <span class="textfieldRequiredMsg">A value is required.</span></span></td>
          <td width="20%" align="left" valign="top">Module Position:</td>
          <td align="left" valign="top"><select name="module_position" id="module_position">
              <option value="Left" <?php if($module['module_position']=='Left')echo 'SELECTED'; ?>>Left</option>
              <option value="Right" <?php if($module['module_position']=='Right')echo 'SELECTED'; ?>>Right</option>
              <option value="Top" <?php if($module['module_position']=='Top')echo 'SELECTED'; ?>>Top</option>
              <option value="Bottom" <?php if($module['module_position']=='Bottom')echo 'SELECTED'; ?>>Bottom</option>
              <option value="Top Center" <?php if($module['module_position']=='Top Center')echo 'SELECTED'; ?>>Top Center</option>
              <option value="Bottom Center" <?php if($module['module_position']=='Bottom Center')echo 'SELECTED'; ?>>Bottom Center</option>
            </select></td>
          </tr>
        <tr>
          <td align="left" valign="top">Module Status:</td>
          <td width="15%" align="left" valign="top"><input name="status" type="radio" id="status13" value="1" <?php if($module['status']=='1')echo 'CHECKED'; ?> />
            Publish</td>
          <td width="15%" align="left" valign="top"><input type="radio" name="status" id="status14" value="0" <?php if($module['status']=='0')echo 'CHECKED'; ?> />
            unPublish</td>
          <td align="left" valign="top"><input name="module_function" type="hidden" id="module_function" value="post_requirement" />
            <input name="category" type="hidden" id="category" value="Module" />
            <input name="module_file" type="hidden" id="module_file" value="/admin/Projects/Real-Estate/post-requirement.php" />
            <input name="module_content" type="hidden" id="module_content" value="<?php $module['module_content'];?>" /></td>
          <td align="left" valign="top">&nbsp;</td>
          </tr>
        <tr>
          <td align="left" valign="top"><p>&nbsp;</p></td>
          <td colspan="2" align="left" valign="top"><input type="submit" name="req_submit" id="req_submit" value="Submit" /></td>
          <td align="left" valign="top">&nbsp;</td>
          <td align="left" valign="top">&nbsp;</td>
          </tr>
        </table>
      </form></td>
    </tr>
<?php } else {?>
    <tr class="hide_module" id="contact-us">
    <td align="left" valign="top" ><strong>Contact Us:</strong></td>
    <td align="left" valign="top"><form id="form2" name="form1" method="post" action="">
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="20%" align="left" valign="top">Module Name:</td>
          <td colspan="2" align="left" valign="top"><span id="sprytextfield2">
            <input type="text" name="title" id="title" value="<?php echo $module['title'];?>" />
            <span class="textfieldRequiredMsg">A value is required.</span></span></td>
          <td width="20%" align="left" valign="top">Module Position:</td>
          <td align="left" valign="top"><select name="module_position" id="module_position">
              <option value="Left" <?php if($module['module_position']=='Left')echo 'SELECTED'; ?>>Left</option>
              <option value="Right" <?php if($module['module_position']=='Right')echo 'SELECTED'; ?>>Right</option>
              <option value="Top" <?php if($module['module_position']=='Top')echo 'SELECTED'; ?>>Top</option>
              <option value="Bottom" <?php if($module['module_position']=='Bottom')echo 'SELECTED'; ?>>Bottom</option>
              <option value="Top Center" <?php if($module['module_position']=='Top Center')echo 'SELECTED'; ?>>Top Center</option>
              <option value="Bottom Center" <?php if($module['module_position']=='Bottom Center')echo 'SELECTED'; ?>>Bottom Center</option>
            </select></td>
          </tr>
        <tr>
          <td align="left" valign="top">Module Status:</td>
          <td width="15%" align="left" valign="top"><input name="status" type="radio" id="status3" value="1" <?php if($module['status']=='1')echo 'CHECKED'; ?> />
            Publish</td>
          <td width="15%" align="left" valign="top"><input type="radio" name="status" id="status4" value="0" <?php if($module['status']=='0')echo 'CHECKED'; ?> />
            unPublish</td>
          <td align="left" valign="top">&nbsp;</td>
          <td align="left" valign="top">&nbsp;</td>
          </tr>
        <tr>
          <td align="left" valign="top"><p>Contact Details:</p>
            <p>(This detail will display on web page.)</p></td>
          <td colspan="4" align="left" valign="top"><textarea name="content" id="content" cols="45" rows="10"><?php echo $module['module_content']; ?></textarea>
            <input name="category" type="hidden" id="category" value="Content" /></td>
          </tr>
        <tr>
          <td align="left" valign="top">&nbsp;</td>
          <td colspan="4" align="left" valign="top"><input type="submit" name="cont_submit" id="cont_submit" value="Submit" /></td>
          </tr>
        </table>
      </form></td>
    </tr>
<?php } ?>
</table>
<?php } ?>
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "none", {validateOn:["blur"]});
var spryselect4 = new Spry.Widget.ValidationSelect("spryselect4", {validateOn:["blur"]});
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2", "none", {validateOn:["blur"]});
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3", "none", {validateOn:["blur"]});
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4");
var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5", "none", {validateOn:["blur"]});
var sprytextfield6 = new Spry.Widget.ValidationTextField("sprytextfield6", "none", {validateOn:["blur"]});
var sprytextfield7 = new Spry.Widget.ValidationTextField("sprytextfield7", "none", {validateOn:["blur"]});
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
