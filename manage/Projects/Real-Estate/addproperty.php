<?php 
include '../../login/dbc.php';
page_protect();
?>
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/Template.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- InstanceBeginEditable name="doctitle" -->
    <title>Add New Property</title>
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
    <link href="../../_script/Spray/SpryValidationSelect.css" rel="stylesheet" type="text/css" />
    <link href="../../_script/Spray/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
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
	max-width: 1100px;
	min-width: 780px;
	margin-right: auto;
	margin-left: auto;
	float: left;
	line-height: 140%;
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
<script src="../../_script/Spray/SpryValidationSelect.js" type="text/javascript"></script>
    <script src="../../_script/Spray/SpryValidationTextField.js" type="text/javascript"></script>
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
<?php // ******************** ARTICLE INSERT CODE *************************************************************************


if (isset($_POST['insert'])=="newproperty") {

if(isset($_FILES['prop_img'])){
    $errors= array();
	foreach($_FILES['prop_img']['tmp_name'] as $key => $tmp_name ){
		$file_name = $_FILES['prop_img']['name'][$key];
		$file_size =$_FILES['prop_img']['size'][$key];
		$file_tmp =$_FILES['prop_img']['tmp_name'][$key];
		$file_type=$_FILES['prop_img']['type'][$key];	
        if($file_size > 10097152){
			$errors[]='File size must be less than 2 MB';
        }
		if ((!$file_type == "image/jpeg") || (!$file_type == "image/png") || (!$file_type == "image/gif")){
			$errors[]='<strong>File type must be .gif, .png, .jpeg, .jpg only</strong>';			
				};
				

       $desired_dir= $root."/".$propImgFolder; 
        if(empty($errors)==true){
            if(is_dir($desired_dir)==false){
                mkdir("$desired_dir", 0700);		// Create directory if it does not exist
            }
            if(file_exists("$desired_dir/".$file_name)==false){
                move_uploaded_file($file_tmp,"$desired_dir/".$file_name);
            }else{									// rename the file if another one exist
                
				$new_file="$desired_dir/".time().$file_name;
                 rename($file_tmp,$new_file) ;				
            }
        }else{
                die($errors);
        }
    }
	if(empty($errors)){
		echo "Files uploaded Successfully ";
	}
}
$posts = $_POST;
foreach ($posts as $i => $post) {
   if (empty($post[$i]))
      $post[$i] = NULL;
}
$otherDomain = implode(',', $_POST['other_domain']);
$sql="INSERT INTO `$_SESSION[user_id]_real_property` (`id`, `user_id`, `featured`, `prop_image`, `property_for`, `category`, `type`, `buildup_area`, `build_unit`, `land_area`, `land_unit`, `carpet_area`, `carpet_unit`, `price`, `bedrooms`, `bathrooms`, `country`, `state`, `city`, `address`, `location`, `title`, `society_name`, `prop_desc`, `cont_name`, `contact`, `email`, `cont_address`, `prop_age`, `furnished`, `transaction_type`, `prop_owner`, `floors`, `on_floor`, `parking`, `hospital`, `airport`, `railway`, `school`, `power`, `water`, `lift`, `res_parking`, `security`, `maintenance`, `gym`, `park`, `tarrace`, `swimming`, `quarters`, `club`, `facing`, meta_desc, meta_key, `other_domain`) VALUES (NULL, '$_POST[user_id]', '$_POST[featured]','http://$new_file', '$_POST[property_for]', '$_POST[category]', '$_POST[type]', '$_POST[build_area]', '$_POST[build_unit]', '$_POST[land_area]', '$_POST[land_unit]', '$_POST[carpet_area]', '$_POST[carpet_unit]', '$_POST[price]',  '$_POST[bedrooms]', '$_POST[bathrooms]', '$_POST[country]', '$_POST[state]', '$_POST[city]', '$_POST[address]', '$_POST[location]', '$_POST[title]', '$_POST[society_name]', '$_POST[prop_desc]', '$_POST[cont_name]', '$_POST[contact_no]', '$_POST[email]', '$_POST[cont_address]', '$_POST[prop_age]', '$_POST[furnished]', '$_POST[transaction_type]', '$_POST[prop_owner]', '$_POST[floors]', '$_POST[on_floor]', '$_POST[parking]', '$_POST[hospital]', '$_POST[airport]', '$_POST[railway]', '$_POST[school]', '$_POST[power]', '$_POST[water]', '$_POST[lift]', '$_POST[res_parking]', '$_POST[security]', '$_POST[maintenance]', '$_POST[gym]', '$_POST[park]', '$_POST[tarrace]', '$_POST[swimming]', '$_POST[quarters]', '$_POST[club]', '$_POST[facing]','$_POST[meta_desc]','$_POST[meta_key]','$otherDomain');";
if (!mysql_query($sql))
  {
  die('Error: ' . mysql_error());
  }
echo "1 New Article Added Sucessfully!";
		$prop_id = mysql_insert_id();

}
?>

<!-- Project Image Upload Script -->
<?php
?>



<div class="content">

  <form id="form1" name="form1" method="post" action="" enctype="multipart/form-data" >
    <table class="border">
      <tbody>
        <tr valign="top">
          <td colspan="3"><h1>Basic info:</h1></td>
          </tr>
        <tr valign="top">
          <td width="4%">&nbsp;</td>
          <td width="23%">* Property for</td>
          <td width="73%"><input name="property_for" id="listfor" type="radio" value="Sale" checked="checked" onclick="channgePropertyCat(this.value)" />
            Sale 
            <input name="property_for" id="listfor" type="radio" value="Rent" onclick="channgePropertyCat(this.value)" />
            Rent 
            <input name="property_for" id="listfor" type="radio" value="PG" onclick="channgePropertyCat(this.value)" />
            PG</td>
          </tr>
        <tr valign="top">
          <td id="text_cat_id_id2">&nbsp;</td>
          <td id="text_cat_id_id2">* Featured</td>
          <td><input name="featured" id="featured" type="radio" value="1"  />
            Yes 
            <input name="featured" type="radio" id="featured" value="0" checked="checked" />
            No </td>
          </tr>
        <tr valign="top">
          <td id="text_cat_id_id">&nbsp;</td>
          <td id="text_cat_id_id">* Property Category</td>
          <td><span id="spryselect1">
            <select name="category" id="category">
              <option value="">Select Category</option>
              <option value="Residential Property">Residential Property</option>
              <option value="Commercial Property">Commercial Property</option>
              <option value="Agricultural land">Agricultural land</option>
              <option value="Industrial Property">Industrial Property</option>
            </select>
<span class="selectRequiredMsg">Please select a Category.</span></span></td>
          </tr>
        <tr valign="top" id="subcatdisplay">
          <td id="text_sub_cat_id">&nbsp;</td>
          <td id="text_sub_cat_id">* Property Type</td>
          <td><span id="sprytextfield1">
            <input name="type" id="type" value="" required="required" />
            <span class="textfieldRequiredMsg">A value is required.</span></span></td>
          </tr>
        <tr valign="top">
          <td id="text_area_id">&nbsp;</td>
          <td id="text_area_id">* Built Up Area</td>
          <td><span id="sprytextfield2">
            <input name="build_area" type="text" id="build_area" maxlength="8" value="" required="required"/>
            <span class="textfieldRequiredMsg">A value is required.</span></span><span id="spryselect2">
            <select name="build_unit" id="build_unit">
              
                   
                  
              <option value="">Unit Area</option>
              
                   	
                  
              <option value="Sq. Feet">Sq. Feet</option>
              
                   		
                  
              <option value="Cent">Cent</option>
              
                   		
                  
              <option value="Sq. Yards">Sq. Yards</option>
              
                   		
                  
              <option value="Acre">Acre</option>
              
                   		
                  
              <option value="Sq. Meter">Sq. Meter</option>
              
                   		
                  
              <option value="Bigha">Bigha</option>
              
                   		
                  
              <option value="Hectares">Hectares</option>
              
                   		
                  
              <option value="Guntha">Guntha</option>
              
                   		
                  
              <option value="Marla">Marla</option>
              
                   	
                
            </select>
            <span class="selectRequiredMsg">Please select an item.</span></span></td>
          </tr>
        <tr valign="top">
          <td id="text_landarea_id">&nbsp;</td>
          <td id="text_landarea_id">* Plot / Land Area</td>
          <td><span id="sprytextfield3">
            <input name="land_area" type="text" id="land_area" maxlength="8" value="" required="required"/>
            <span class="textfieldRequiredMsg">A value is required.</span></span><span id="spryselect3">
            <select name="land_unit" id="land_unit" >
              
                   
                  
              <option value="">Unit Area</option>
              
                   	
                  
              <option value="Sq. Feet">Sq. Feet</option>
              
                   		
                  
              <option value="Cent">Cent</option>
              
                   		
                  
              <option value="Sq. Yards">Sq. Yards</option>
              
                   		
                  
              <option value="Acre">Acre</option>
              
                   		
                  
              <option value="Sq. Meter">Sq. Meter</option>
              
                   		
                  
              <option value="Bigha">Bigha</option>
              
                   		
                  
              <option value="Hectares">Hectares</option>
              
                   		
                  
              <option value="Guntha">Guntha</option>
              
                   		
                  
              <option value="Marla">Marla</option>
              
                   	
                
            </select>
            <span class="selectRequiredMsg">Please select an item.</span></span></td>
          </tr>
        <tr valign="top">
          <td>&nbsp;</td>
          <td>Carpet Area</td>
          <td>
            <input name="carpet_area" type="text" id="carpet_area" maxlength="8" value="" onkeypress="return disableEnterKey(event)" onblur="validate_form_field(this.value,'landarea')" />
            <select name="carpet_unit" id="carpet_unit">
                   
                  <option value="">Unit Area</option>
                   	
                  <option value="Sq. Feet">Sq. Feet</option>
                   		
                  <option value="Cent">Cent</option>
                   		
                  <option value="Sq. Yards">Sq. Yards</option>
                   		
                  <option value="Acre">Acre</option>
                   		
                  <option value="Sq. Meter">Sq. Meter</option>
                   		
                  <option value="Bigha">Bigha</option>
                   		
                  <option value="Hectares">Hectares</option>
                   		
                  <option value="Guntha">Guntha</option>
                   		
                  <option value="Marla">Marla</option>
                   	
                </select>
            </td>
          </tr>
        <tr valign="top">
          <td>&nbsp;</td>
          <td>Property Price</td>
          <td><input name="price" type="text" id="price" maxlength="8" value="" onkeypress="return disableEnterKey(event)" onblur="validate_form_field(this.value,'landarea')" />
            <select name="currency " id="currency " onchange="if(this.value=='100000'){document.getElementById('optn').innerHTML='&lt;select name=\'price4\' style=\'width:80px\'&gt;&lt;option value=0&gt;Select&lt;/option&gt;&lt;option value=100&gt;Hundred&lt;/option&gt;&lt;option value=1000&gt;Thousand&lt;/option&gt;&lt;/select&gt;';}else{document.getElementById('optn').innerHTML='&lt;select name=\'price4\' id=\'price4\' style=\'width:80px\'&gt;&lt;option value=0&gt;Select&lt;/option&gt;&lt;option value=100&gt;Hundred&lt;/option&gt;&lt;option value=1000&gt;Thousand&lt;/option&gt;&lt;option value=100000&gt;Lac&lt;/option&gt;&lt;/select&gt;';}">
               
              <option value="">In Rupees</option>
               
              <option value="Thousand">Thousand</option>
               
              <option value="Lac">Lac</option>
               
              <option value="Crore">Crore</option>
               
            </select></td>
          </tr>
        <tr valign="top" id="bedroomshide">
          <td>&nbsp;</td>
          <td>Bedrooms</td>
          <td><select name="bedrooms" id="bedrooms">
          
               
              
          <option value="">Select one</option>
          
               	
              
          <option value="1">1</option>
          
               		
              
          <option value="2">2</option>
          
               		
              
          <option value="3">3</option>
          
               		
              
          <option value="4">4</option>
          
               		
              
          <option value="5">5</option>
          
               		
              
          <option value="6">6</option>
          
               		
              
          <option value="7">7</option>
          
               		
              
          <option value="8">8</option>
          
               		
              
          <option value="9">9</option>
          
               		
              
          <option value="10">10</option>
          
               		
              
          <option value="11">11</option>
          
               		
              
          <option value="12">12</option>
          
               		
              
          <option value="13">13</option>
          
               		
              
          <option value="14">14</option>
          
               		
              
          <option value="15">15</option>
          
               		
              
          <option value="16">16</option>
          
               		
              
          <option value="17">17</option>
          
               		
              
          <option value="18">18</option>
          
               		
              
          <option value="19">19</option>
          
               		
              
          <option value="20">20</option>
          
               		
              
          <option value="21">21</option>
          
               		
              
          <option value="22">22</option>
          
               		
              
          <option value="23">23</option>
          
               		
              
          <option value="24">24</option>
          
               		
              
          <option value="25">25</option>
          
               		
              
          <option value="26">26</option>
          
               		
              
          <option value="27">27</option>
          
               		
              
          <option value="28">28</option>
          
               		
              
          <option value="29">29</option>
          
               		
              
          <option value="30">30</option>
          
               		
              
          <option value="31">31</option>
          
               		
              
          <option value="32">32</option>
          
               		
              
          <option value="33">33</option>
          
               		
              
          <option value="34">34</option>
          
               		
              
          <option value="35">35</option>
          
               		
              
          <option value="36">36</option>
          
               		
              
          <option value="37">37</option>
          
               		
              
          <option value="38">38</option>
          
               		
              
          <option value="39">39</option>
          
               		
              
          <option value="40">40</option>
          
               		
              
          <option value="41">41</option>
          
               		
              
          <option value="42">42</option>
          
               		
              
          <option value="43">43</option>
          
               		
              
          <option value="44">44</option>
          
               		
              
          <option value="45">45</option>
          
               		
              
          <option value="46">46</option>
          
               		
              
          <option value="47">47</option>
          
               		
              
          <option value="48">48</option>
          
               		
              
          <option value="49">49</option>
          
               		
              
          <option value="50">50</option>
          
               		
              
          <option value="51">51</option>
          
               		
              
          <option value="52">52</option>
          
               		
              
          <option value="53">53</option>
          
               		
              
          <option value="54">54</option>
          
               		
              
          <option value="55">55</option>
          
               		
              
          <option value="56">56</option>
          
               		
              
          <option value="57">57</option>
          
               		
              
          <option value="58">58</option>
          
               		
              
          <option value="59">59</option>
          
               		
              
          <option value="60">60</option>
          
               		
              
          <option value="61">61</option>
          
               		
              
          <option value="62">62</option>
          
               		
              
          <option value="63">63</option>
          
               		
              
          <option value="64">64</option>
          
               		
              
          <option value="65">65</option>
          
               		
              
          <option value="66">66</option>
          
               		
              
          <option value="67">67</option>
          
               		
              
          <option value="68">68</option>
          
               		
              
          <option value="69">69</option>
          
               		
              
          <option value="70">70</option>
          
               		
              
          <option value="71">71</option>
          
               		
              
          <option value="72">72</option>
          
               		
              
          <option value="73">73</option>
          
               		
              
          <option value="74">74</option>
          
               		
              
          <option value="75">75</option>
          
               		
              
          <option value="76">76</option>
          
               		
              
          <option value="77">77</option>
          
               		
              
          <option value="78">78</option>
          
               		
              
          <option value="79">79</option>
          
               		
              
          <option value="80">80</option>
          
               		
              
          <option value="81">81</option>
          
               		
              
          <option value="82">82</option>
          
               		
              
          <option value="83">83</option>
          
               		
              
          <option value="84">84</option>
          
               		
              
          <option value="85">85</option>
          
               		
              
          <option value="86">86</option>
          
               		
              
          <option value="87">87</option>
          
               		
              
          <option value="88">88</option>
          
               		
              
          <option value="89">89</option>
          
               		
              
          <option value="90">90</option>
          
               		
              
          <option value="91">91</option>
          
               		
              
          <option value="92">92</option>
          
               		
              
          <option value="93">93</option>
          
               		
              
          <option value="94">94</option>
          
               		
              
          <option value="95">95</option>
          
               		
              
          <option value="96">96</option>
          
               		
              
          <option value="97">97</option>
          
               		
              
          <option value="98">98</option>
          
               		
              
          <option value="99">99</option>
          
               		
              
          <option value="100">100</option>
          
               	
            
        </select>
            No(s).</td>
          </tr>
        <tr valign="top" id="bathroomshide">
          <td>&nbsp;</td>
          <td>Bathrooms</td>
          <td><select name="bathrooms" id="bathrooms">
          
               
              
          <option value="">Select one</option>
          
               	
              
          <option value="1">1</option>
          
               		
              
          <option value="2">2</option>
          
               		
              
          <option value="3">3</option>
          
               		
              
          <option value="4">4</option>
          
               		
              
          <option value="5">5</option>
          
               		
              
          <option value="6">6</option>
          
               		
              
          <option value="7">7</option>
          
               		
              
          <option value="8">8</option>
          
               		
              
          <option value="9">9</option>
          
               		
              
          <option value="10">10</option>
          
               		
              
          <option value="11">11</option>
          
               		
              
          <option value="12">12</option>
          
               		
              
          <option value="13">13</option>
          
               		
              
          <option value="14">14</option>
          
               		
              
          <option value="15">15</option>
          
               		
              
          <option value="16">16</option>
          
               		
              
          <option value="17">17</option>
          
               		
              
          <option value="18">18</option>
          
               		
              
          <option value="19">19</option>
          
               		
              
          <option value="20">20</option>
          
               		
              
          <option value="21">21</option>
          
               		
              
          <option value="22">22</option>
          
               		
              
          <option value="23">23</option>
          
               		
              
          <option value="24">24</option>
          
               		
              
          <option value="25">25</option>
          
               		
              
          <option value="26">26</option>
          
               		
              
          <option value="27">27</option>
          
               		
              
          <option value="28">28</option>
          
               		
              
          <option value="29">29</option>
          
               		
              
          <option value="30">30</option>
          
               		
              
          <option value="31">31</option>
          
               		
              
          <option value="32">32</option>
          
               		
              
          <option value="33">33</option>
          
               		
              
          <option value="34">34</option>
          
               		
              
          <option value="35">35</option>
          
               		
              
          <option value="36">36</option>
          
               		
              
          <option value="37">37</option>
          
               		
              
          <option value="38">38</option>
          
               		
              
          <option value="39">39</option>
          
               		
              
          <option value="40">40</option>
          
               		
              
          <option value="41">41</option>
          
               		
              
          <option value="42">42</option>
          
               		
              
          <option value="43">43</option>
          
               		
              
          <option value="44">44</option>
          
               		
              
          <option value="45">45</option>
          
               		
              
          <option value="46">46</option>
          
               		
              
          <option value="47">47</option>
          
               		
              
          <option value="48">48</option>
          
               		
              
          <option value="49">49</option>
          
               		
              
          <option value="50">50</option>
          
               		
              
          <option value="51">51</option>
          
               		
              
          <option value="52">52</option>
          
               		
              
          <option value="53">53</option>
          
               		
              
          <option value="54">54</option>
          
               		
              
          <option value="55">55</option>
          
               		
              
          <option value="56">56</option>
          
               		
              
          <option value="57">57</option>
          
               		
              
          <option value="58">58</option>
          
               		
              
          <option value="59">59</option>
          
               		
              
          <option value="60">60</option>
          
               		
              
          <option value="61">61</option>
          
               		
              
          <option value="62">62</option>
          
               		
              
          <option value="63">63</option>
          
               		
              
          <option value="64">64</option>
          
               		
              
          <option value="65">65</option>
          
               		
              
          <option value="66">66</option>
          
               		
              
          <option value="67">67</option>
          
               		
              
          <option value="68">68</option>
          
               		
              
          <option value="69">69</option>
          
               		
              
          <option value="70">70</option>
          
               		
              
          <option value="71">71</option>
          
               		
              
          <option value="72">72</option>
          
               		
              
          <option value="73">73</option>
          
               		
              
          <option value="74">74</option>
          
               		
              
          <option value="75">75</option>
          
               		
              
          <option value="76">76</option>
          
               		
              
          <option value="77">77</option>
          
               		
              
          <option value="78">78</option>
          
               		
              
          <option value="79">79</option>
          
               		
              
          <option value="80">80</option>
          
               		
              
          <option value="81">81</option>
          
               		
              
          <option value="82">82</option>
          
               		
              
          <option value="83">83</option>
          
               		
              
          <option value="84">84</option>
          
               		
              
          <option value="85">85</option>
          
               		
              
          <option value="86">86</option>
          
               		
              
          <option value="87">87</option>
          
               		
              
          <option value="88">88</option>
          
               		
              
          <option value="89">89</option>
          
               		
              
          <option value="90">90</option>
          
               		
              
          <option value="91">91</option>
          
               		
              
          <option value="92">92</option>
          
               		
              
          <option value="93">93</option>
          
               		
              
          <option value="94">94</option>
          
               		
              
          <option value="95">95</option>
          
               		
              
          <option value="96">96</option>
          
               		
              
          <option value="97">97</option>
          
               		
              
          <option value="98">98</option>
          
               		
              
          <option value="99">99</option>
          
               		
              
          <option value="100">100</option>
          
               	
            
        </select>
            No(s).</td>
          </tr>
        <tr valign="top">
          <td>&nbsp;</td>
          <td>* Property Images</td>
          <td><input name="prop_img[]" type="file" multiple="multiple" required="required" id="prop_img[]"/>
            <input type="hidden" name="dir" value="../../upload/uploaded-files" />
            <input type="hidden" name="path" value="/admin/upload/uploaded-files" /></td>
        </tr>
        <tr valign="top">
          <td colspan="3"><h2>Property Location:</h2></td>
          </tr>
        <tr valign="top">
          <td>&nbsp;</td>
          <td>Country</td>
          <td><input name="country" type="text" id="country" onblur="validate_form_field(this.value,'prop_address')" onkeypress="return disableEnterKey(event)" value="INDIA" readonly="readonly" /></td>
          </tr>
        <tr valign="top">
          <td id="text_prop_state_id_id">&nbsp;</td>
          <td id="text_prop_state_id_id">* State</td>
          <td><span id="spryselect4">
            <select name="state" id="state" onchange="get_prop_state_city(this.value,'http://www.realestateindia.com','/ajax/prop_state_city_drop_down.php?id=show_city_subcity&amp;&amp;onblur_func=Y', 'city_disp')" onblur="validate_form_field(this.value,'prop_state_id')">
              <option value="" selected="selected">Select State</option>
              <option value="Andaman &amp; Nicobar">Andaman &amp; Nicobar</option>
              <option value="Andhra Pradesh">Andhra Pradesh</option>
              <option value="Arunachal Pradesh">Arunachal Pradesh</option>
              <option value="Assam">Assam</option>
              <option value="Bihar">Bihar</option>
              <option value="Chandigarh">Chandigarh </option>
              <option value="Chhattisgarh">Chhattisgarh</option>
              <option value="Dadra &amp; Nagar Haveli">Dadra &amp; Nagar Haveli</option>
              <option value="Daman &amp; Diu">Daman &amp; Diu</option>
              <option value="Delhi">Delhi</option>
              <option value="Gujarat">Gujarat</option>
              <option value="Haryana">Haryana</option>
              <option value="Himachal Pradesh">Himachal Pradesh</option>
              <option value="Jammu &amp; Kashmir">Jammu &amp; Kashmir</option>
              <option value="Jharkhand">Jharkhand</option>
              <option value="Karnataka">Karnataka</option>
              <option value="Kerala">Kerala</option>
              <option value="Lakshadweep">Lakshadweep</option>
              <option value="Madhya Pradesh">Madhya Pradesh</option>
              <option value="Maharashtra">Maharashtra</option>
              <option value="Manipur">Manipur</option>
              <option value="Meghalaya">Meghalaya</option>
              <option value="Mizoram">Mizoram </option>
              <option value="Nagaland">Nagaland</option>
              <option value="Odisha">Odisha</option>
              <option value="Pondicherry">Pondicherry</option>
              <option value="Punjab">Punjab</option>
              <option value="Rajasthan">Rajasthan</option>
              <option value="Sikkim">Sikkim</option>
              <option value="Tamil Nadu">Tamil Nadu</option>
              <option value="Tripura">Tripura</option>
              <option value="Uttar Pradesh">Uttar Pradesh</option>
              <option value="Uttaranchal">Uttaranchal</option>
              <option value="West Bengal">West Bengal</option>
              <option value="Goa">Goa</option>
            </select>
            <span class="selectRequiredMsg">Please select an item.</span></span></td>
          </tr>
        <tr valign="top">
          <td id="text_prop_city_id_id">&nbsp;</td>
          <td id="text_prop_city_id_id">* City</td>
          <td><span id="sprytextfield4">
            <input name="city" id="city" value="" required="required" />
            <span class="textfieldRequiredMsg">A value is required.</span></span></td>
          </tr>
        <tr valign="top">
          <td id="text_prop_address_id">&nbsp;</td>
          <td id="text_prop_address_id">* Address</td>
          <td><span id="sprytextarea1">
          <textarea name="address" cols="70" id="address" required="required"></textarea>
          <br />
          Remaining Chrs.: <span id="countsprytextarea1">&nbsp;</span><span class="textareaRequiredMsg">A value is required.</span><span class="textareaMaxCharsMsg">Exceeded maximum number of characters.</span></span></td>
          </tr>
        <tr valign="top">
          <td>&nbsp;</td>
          <td>* Area / Location</td>
          <td><span id="sprytextfield5">
            <input name="location" type="text" id="location" required="required" value="" size="70" maxlength="200" />
            <span class="textfieldRequiredMsg">A value is required.</span></span></td>
          </tr>
        <tr valign="top">
          <td colspan="3"><h2>Description Title:</h2></td>
        </tr>
        <tr valign="top">
          <td>&nbsp;</td>
          <td>* Property Title <br />
            ( Display in your website )</td>
          <td><span id="sprytextarea2">
          <textarea name="title" cols="70" id="title"></textarea>
          <br />
          Remaining Chrs.: <span id="countsprytextarea2">&nbsp;</span><span class="textareaRequiredMsg">A value is required.</span><span class="textareaMaxCharsMsg">Exceeded maximum number of characters.</span></span></td>
          </tr>
        <tr valign="top">
          <td>&nbsp;</td>
          <td>*  Meta Description</td>
          <td><span id="sprytextarea3">
          <textarea name="meta_desc" cols="70" id="meta_desc"></textarea>
          <br />
          Remaining Chrs.: <span id="countsprytextarea3">&nbsp;</span><span class="textareaRequiredMsg">A value is required.</span><span class="textareaMaxCharsMsg">Exceeded maximum number of characters.</span></span></td>
          </tr>
        <tr valign="top">
          <td>&nbsp;</td>
          <td>* Meta Keywords</td>
          <td><span id="sprytextarea4">
          <textarea name="meta_key" cols="70" id="meta_key"></textarea>
          <br />
          Remaining Chrs.: <span id="countsprytextarea4">&nbsp;</span><span class="textareaRequiredMsg">A value is required.</span><span class="textareaMaxCharsMsg">Exceeded maximum number of characters.</span></span></td>
          </tr>
        <tr valign="top">
          <td>&nbsp;</td>
          <td>* Society Name <br />
            ( 50 characters Only )</td>
          <td><span id="sprytextfield6">
          <input name="society_name" type="text" id="society_name" value="" size="70" maxlength="50" />
          <span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldMaxCharsMsg">Exceeded maximum number of characters.</span></span></td>
          </tr>
        <tr valign="top">
          <td id="text_prop_desc_id">&nbsp;</td>
          <td id="text_prop_desc_id">* Property Description</td>
          <td><span id="sprytextarea5">
          <textarea name="prop_desc" cols="70" rows="4" id="prop_desc" onblur="validate_form_field(this.value,'prop_desc')" onkeydown="textLimitCounter('prop_desc','limit_char',2000)" onkeyup="textLimitCounter('prop_desc','limit_char',2000)"></textarea>
          <br />
          Remaining Chrs.:          <span id="countsprytextarea5">&nbsp;</span><span class="textareaRequiredMsg">A value is required.</span><span class="textareaMaxCharsMsg">Exceeded maximum number of characters.</span></span></td>
          </tr>
        </tbody>
      <tbody>
        <tr valign="top">
          <td colspan="3"><h2>Property Contact Detail:</h2></td>
          </tr>
        </tbody>
      <tbody>
        </tbody>
      <tbody id="contnew">
        <tr valign="top">
          <td id="text_contname_id">&nbsp;</td>
          <td id="text_contname_id">* Name</td>
          <td><span id="sprytextfield7">
            <input name="cont_name" type="text" id="cont_name" onblur="validate_form_field(this.value,'contname')" value="" size="70" />
            <span class="textfieldRequiredMsg">A value is required.</span></span></td>
          </tr>
        <tr valign="top">
          <td id="text_contno_id">&nbsp;</td>
          <td id="text_contno_id">* Contact No.</td>
          <td><span id="sprytextfield8">
          <input name="contact_no" type="text" id="contact_no" onblur="validate_form_field(this.value,'contno')" value="" size="70" maxlength="18" />
          <span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldInvalidFormatMsg">Invalid format.</span></span></td>
          </tr>
        <tr valign="top">
          <td id="text_contno_id2">&nbsp;</td>
          <td id="text_contno_id2">* Email</td>
          <td><span id="sprytextfield9">
          <input name="email" type="text" id="email" onblur="validate_form_field(this.value,'contno')" value="" size="70" />
          <span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldInvalidFormatMsg">Invalid format.</span></span></td>
          </tr>
        <tr valign="top">
          <td id="text_contaddress_id">&nbsp;</td>
          <td id="text_contaddress_id">* Address</td>
          <td><span id="sprytextarea6">
          <textarea name="cont_address" cols="70" rows="2" id="cont_address" onblur="validate_form_field(this.value,'contaddress')"></textarea>
          <br />
          Remaining Chrs.: <span id="countsprytextarea6">&nbsp;</span><span class="textareaRequiredMsg">A value is required.</span><span class="textareaMaxCharsMsg">Exceeded maximum number of characters.</span></span></td>
          </tr>
        </tbody>
      
      <tbody>
        <tr valign="top">
          <td colspan="3"><h1>Optional Property Details:</h1></td>
          </tr>
        <tr valign="top">
          <td width="4%">&nbsp;</td>
          <td width="23%">Age of the Property</td>
          <td><select name="prop_age" id="prop_age">
        
             	
            
        <option value="">Select one</option>
        
             			
            
        <option value="Under Construction">Under Construction</option>
        
             				
            
        <option value="New Construction">New Construction</option>
        
             				
            
        <option value="0 to 5 years">0 to 5 years</option>
        
             				
            
        <option value="5 to 10 years">5 to 10 years</option>
        
             				
            
        <option value="10 to 15 years">10 to 15 years</option>
        
             				
            
        <option value="15 to 20 years">15 to 20 years</option>
        
             				
            
        <option value="Above 20 years">Above 20 years</option>
        
             			
          
      </select></td>
          </tr>
        <tr valign="top">
          <td width="4%">&nbsp;</td>
          <td width="23%">Furnished</td>
          <td><select name="furnished" id="furnished">
        
             	
            
        <option value="">Select one</option>
        
             			
            
        <option value="Furnished">Furnished</option>
        
             				
            
        <option value="Unfurnished">Unfurnished</option>
        
             				
            
        <option value="Semi-Furnished">Semi-Furnished</option>
        
             			
          

      </select></td>
          </tr>
        <tr valign="top">
          <td width="4%">&nbsp;</td>
          <td width="23%">Transaction Type</td>
          <td><select name="transaction_type" id="transaction_type">
        
             	
            
        <option value="">Select one</option>
        
             			
            
        <option value="Resale Property">Resale Property</option>
        
             				
            
        <option value="New Property">New Property</option>
        
             			
          
      </select></td>
          </tr>
        <tr valign="top">
          <td width="4%">&nbsp;</td>
          <td width="23%">Property Ownership</td>
          <td><select name="prop_owner" id="prop_owner">
        
             	
            
        <option value="">Select one</option>
        
             	
            
        <option value="Individual">Individual</option>
        
             	
            
        <option value="others">others</option>
        
             	
            
        <option value="A Broker/Agent">A Broker/Agent</option>
        
             	
            
        <option value="A Builder/Promoter">A Builder/Promoter</option>
        
             	
          
      </select></td>
          </tr>
        <tr valign="top">
          <td width="4%">&nbsp;</td>
          <td width="23%">Total Number of Floors</td>
          <td><select name="floors" id="floors">
        
             	
            
        <option value="">Select one</option>
        
             		    
            
        <option value="1">1 </option>
        
             	  		    
            
        <option value="2">2 </option>
        
             	  		    
            
        <option value="3">3 </option>
        
             	  		    
            
        <option value="4">4 </option>
        
             	  		    
            
        <option value="5">5 </option>
        
             	  		    
            
        <option value="6">6 </option>
        
             	  		    
            
        <option value="7">7 </option>
        
             	  		    
            
        <option value="8">8 </option>
        
             	  		    
            
        <option value="9">9 </option>
        
             	  		    
            
        <option value="10">10 </option>
        
             	  		    
            
        <option value="11">11 </option>
        
             	  		    
            
        <option value="12">12 </option>
        
             	  		    
            
        <option value="13">13 </option>
        
             	  		    
            
        <option value="14">14 </option>
        
             	  		    
            
        <option value="15">15 </option>
        
             	  		    
            
        <option value="16">16 </option>
        
             	  		    
            
        <option value="17">17 </option>
        
             	  		    
            
        <option value="18">18 </option>
        
             	  		    
            
        <option value="19">19 </option>
        
             	  		    
            
        <option value="20">20 </option>
        
             	  		    
            
        <option value="21">21 </option>
        
             	  		    
            
        <option value="22">22 </option>
        
             	  		    
            
        <option value="23">23 </option>
        
             	  		    
            
        <option value="24">24 </option>
        
             	  		    
            
        <option value="25">25 </option>
        
             	  		    
            
        <option value="26">26 </option>
        
             	  		    
            
        <option value="27">27 </option>
        
             	  		    
            
        <option value="28">28 </option>
        
             	  		    
            
        <option value="29">29 </option>
        
             	  		    
            
        <option value="30">30 </option>
        
             	  		    
            
        <option value="31">31 </option>
        
             	  		    
            
        <option value="32">32 </option>
        
             	  		    
            
        <option value="33">33 </option>
        
             	  		    
            
        <option value="34">34 </option>
        
             	  		    
            
        <option value="35">35 </option>
        
             	  		    
            
        <option value="36">36 </option>
        
             	  		    
            
        <option value="37">37 </option>
        
             	  		    
            
        <option value="38">38 </option>
        
             	  		    
            
        <option value="39">39 </option>
        
             	  		    
            
        <option value="40">40 </option>
        
             	  		    
            
        <option value="41">41 </option>
        
             	  		    
            
        <option value="42">42 </option>
        
             	  		    
            
        <option value="43">43 </option>
        
             	  		    
            
        <option value="44">44 </option>
        
             	  		    
            
        <option value="45">45 </option>
        
             	  		    
            
        <option value="46">46 </option>
        
             	  		    
            
        <option value="47">47 </option>
        
             	  		    
            
        <option value="48">48 </option>
        
             	  		    
            
        <option value="49">49 </option>
        
             	  		    
            
        <option value="50">50 </option>
        
             	  		
          
      </select></td>
          </tr>
        <tr valign="top">
          <td width="4%">&nbsp;</td>
          <td width="23%">Facing</td>
          <td><select name="facing" id="facing">
        
             	
            
        <option value="0" selected="selected">Select</option>
        
             	
            
        <option value="East">East</option>
        
             	
            
        <option value="South">South</option>
        
             	
            
        <option value="West">West</option>
        
             	
            
        <option value="North">North</option>
        
             	
            
        <option value="South East">South East</option>
        
             	
            
        <option value="South West">South West</option>
        
             	
            
        <option value="North West">North West</option>
        
             	
            
        <option value="North East">North East</option>
        
             	
          
      </select></td>
          </tr>
        <tr valign="top">
          <td width="4%">&nbsp;</td>
          <td width="23%">Property On Floor</td>
          <td><select name="on_floor" id="on_floor">
        
             	
            
        <option value="">Select</option>
        
             	
            
        <option value="Ground">Ground</option>
        
             			
            
        <option value="1">1 </option>
        
             				
            
        <option value="2">2 </option>
        
             				
            
        <option value="3">3 </option>
        
             				
            
        <option value="4">4 </option>
        
             				
            
        <option value="5">5 </option>
        
             				
            
        <option value="6">6 </option>
        
             				
            
        <option value="7">7 </option>
        
             				
            
        <option value="8">8 </option>
        
             				
            
        <option value="9">9 </option>
        
             				
            
        <option value="10">10 </option>
        
             				
            
        <option value="11">11 </option>
        
             				
            
        <option value="12">12 </option>
        
             				
            
        <option value="13">13 </option>
        
             				
            
        <option value="14">14 </option>
        
             				
            
        <option value="15">15 </option>
        
             				
            
        <option value="16">16 </option>
        
             				
            
        <option value="17">17 </option>
        
             				
            
        <option value="18">18 </option>
        
             				
            
        <option value="19">19 </option>
        
             				
            
        <option value="20">20 </option>
        
             				
            
        <option value="21">21 </option>
        
             				
            
        <option value="22">22 </option>
        
             				
            
        <option value="23">23 </option>
        
             				
            
        <option value="24">24 </option>
        
             				
            
        <option value="25">25 </option>
        
             				
            
        <option value="26">26 </option>
        
             				
            
        <option value="27">27 </option>
        
             				
            
        <option value="28">28 </option>
        
             				
            
        <option value="29">29 </option>
        
             				
            
        <option value="30">30 </option>
        
             				
            
        <option value="31">31 </option>
        
             				
            
        <option value="32">32 </option>
        
             				
            
        <option value="33">33 </option>
        
             				
            
        <option value="34">34 </option>
        
             				
            
        <option value="35">35 </option>
        
             				
            
        <option value="36">36 </option>
        
             				
            
        <option value="37">37 </option>
        
             				
            
        <option value="38">38 </option>
        
             				
            
        <option value="39">39 </option>
        
             				
            
        <option value="40">40 </option>
        
             				
            
        <option value="41">41 </option>
        
             				
            
        <option value="42">42 </option>
        
             				
            
        <option value="43">43 </option>
        
             				
            
        <option value="44">44 </option>
        
             				
            
        <option value="45">45 </option>
        
             				
            
        <option value="46">46 </option>
        
             				
            
        <option value="47">47 </option>
        
             				
            
        <option value="48">48 </option>
        
             				
            
        <option value="49">49 </option>
        
             				
            
        <option value="50">50 </option>
        
             			
          
      </select></td>
          </tr>
        <tr valign="top">
          <td width="4%">&nbsp;</td>
          <td width="23%">No. of Car Parking</td>
          <td><select name="parking" id="parking">
        
             	
            
        <option value="0">Select</option>
        
             			
            
        <option value="1">1 </option>
        
             				
            
        <option value="2">2 </option>
        
             				
            
        <option value="3">3 </option>
        
             				
            
        <option value="4">4 </option>
        
             				
            
        <option value="5">5 </option>
        
             				
            
        <option value="6">6 </option>
        
             				
            
        <option value="7">7 </option>
        
             				
            
        <option value="8">8 </option>
        
             				
            
        <option value="9">9 </option>
        
             				
            
        <option value="10">10 </option>
        
             			
          
      </select></td>
          </tr>
        <tr valign="top">
          <td colspan="3"><h2>Land Mark:</h2></td>
          </tr>
        <tr valign="top">
          <td>&nbsp;</td>
          <td>Hospitals</td>
          <td><input name="hospital" id="hospital" maxlength="100" type="text" value="" />
            kms</td>
          </tr>
        <tr valign="top">
          <td>&nbsp;</td>
          <td>Airport</td>
          <td><input name="airport" id="airport" maxlength="100" type="text" value="" />
            kms</td>
          </tr>
        <tr valign="top">
          <td>&nbsp;</td>
          <td>Railway Station</td>
          <td><input name="railway" id="railway" maxlength="100" type="text" value="" />
            kms</td>
          </tr>
        <tr valign="top">
          <td>&nbsp;</td>
          <td>School</td>
          <td><input name="school" id="school" maxlength="100" type="text" value="" />
            kms</td>
          </tr>
        <tr valign="top">
          <td colspan="3"><h2>Amenities:</h2></td>
          </tr>
        <tr valign="top">
          <td></td>
          <td colspan="2"><table width="98%" border="1" bordercolor="#CCCCCC">
            <tbody>
              <tr>
                <td width="5%" align="center"><input name="power" type="checkbox" id="power" value="1" /></td>
                <td width="28%">Power Backup</td>
                <td width="5%" align="center"><input name="water" type="checkbox" id="water" value="1" /></td>
                <td width="28%">Water Storage</td>
                <td width="5%" align="center"><input name="lift" type="checkbox" id="lift" value="1" /></td>
                <td>Lift</td>
                </tr>
              <tr>
                <td align="center"><input name="res_parking" type="checkbox" id="res_parking" value="1" /></td>
                <td>Reserve Parking</td>
                <td align="center"><input name="security" type="checkbox" id="security" value="1" /></td>
                <td>Security</td>
                <td align="center"><input name="maintenance" type="checkbox" id="maintenance" value="1" /></td>
                <td>Maintenance Staff</td>
                </tr>
              <tr>
                <td align="center"><input name="gym" type="checkbox" id="gym" value="1" /></td>
                <td>GYM</td>
                <td align="center"><input name="park" type="checkbox" id="park" value="1" /></td>
                <td>Park</td>
                <td align="center"><input name="tarrace" type="checkbox" id="tarrace" value="1" /></td>
                <td>Private Tarrace</td>
                </tr>
              <tr>
                <td align="center"><input name="swimming" type="checkbox" id="swimming" value="1" /></td>
                <td>Swimming Pool</td>
                <td align="center"><input name="quarters" type="checkbox" id="quarters" value="1" /></td>
                <td>Servant Quarters</td>
                <td align="center"><input name="club" type="checkbox" id="club" value="1" /></td>
                <td>Club House</td>
                </tr>
              <tr></tr>
              </tbody>
            </table></td>
          </tr>
        <tr valign="top">
          <td colspan="3"><h1>Select Sites:</h1></td>
        </tr>
        <tr valign="top">
          <td>&nbsp;</td>
          <td colspan="2"><table width="98%" border="1" bordercolor="#CCCCCC">
            <tbody>
<?php  $sql = mysql_query("SELECT * FROM user_sites WHERE user_id = '$_SESSION[user_id]' AND status = '1'") or die(mysql_error()); ?>
<?php		while($row = mysql_fetch_array($sql)){ ?>
<tr><td>
<label><input type="checkbox" name="other_domain[]" value="<?php echo $row['domain'] ?>" <?php if($row['domain']==$_SERVER['HTTP_HOST']) { echo "CHECKED"; } ?> /> <?php echo $row['domain'] ?></label>
</td></tr><?php } ?>

                
            </tbody>
          </table>
          </td>
          </tr>
        <tr valign="top">
          <td>&nbsp;</td>
          <td> 
            <input name="user_id" type="hidden" id="user_id" value="1" />
            <input name="insert" type="hidden" id="insert" value="newproperty" /></td>
          <td><input name="Submit" type="submit" id="Submit" style="width:150px; height:30px" value="Submit" /></td>
          </tr>
        </tbody>
  </table>
    </form>
</div>
<script type="text/javascript">
var spryselect1 = new Spry.Widget.ValidationSelect("spryselect1", {validateOn:["blur"]});
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "none", {validateOn:["blur"]});
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2", "none", {validateOn:["blur"]});
var spryselect2 = new Spry.Widget.ValidationSelect("spryselect2");
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3", "none", {validateOn:["blur"]});
var spryselect3 = new Spry.Widget.ValidationSelect("spryselect3", {validateOn:["blur"]});
var spryselect4 = new Spry.Widget.ValidationSelect("spryselect4", {validateOn:["blur"]});
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4", "none", {validateOn:["blur"]});
var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1", {maxChars:255, counterId:"countsprytextarea1", counterType:"chars_remaining", validateOn:["blur"]});
var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5", "none", {validateOn:["blur"]});
var sprytextarea2 = new Spry.Widget.ValidationTextarea("sprytextarea2", {maxChars:255, counterId:"countsprytextarea2", counterType:"chars_remaining", validateOn:["blur"]});
var sprytextarea3 = new Spry.Widget.ValidationTextarea("sprytextarea3", {maxChars:2000, counterId:"countsprytextarea3", validateOn:["blur"], counterType:"chars_remaining", hint:"First 160 characters are effective for search engine optimization. So important data must be in first 160chrs."});
var sprytextarea4 = new Spry.Widget.ValidationTextarea("sprytextarea4", {maxChars:2000, counterId:"countsprytextarea4", counterType:"chars_remaining", validateOn:["blur"]});
var sprytextfield6 = new Spry.Widget.ValidationTextField("sprytextfield6", "none", {maxChars:50, validateOn:["blur"]});
var sprytextarea5 = new Spry.Widget.ValidationTextarea("sprytextarea5", {maxChars:2000, counterId:"countsprytextarea5", counterType:"chars_remaining", validateOn:["blur"]});
var sprytextfield7 = new Spry.Widget.ValidationTextField("sprytextfield7", "none", {validateOn:["blur"]});
var sprytextfield8 = new Spry.Widget.ValidationTextField("sprytextfield8", "phone_number", {format:"phone_custom", pattern:"0000000000", validateOn:["blur"], hint:"10 Digit Mobile no."});
var sprytextfield9 = new Spry.Widget.ValidationTextField("sprytextfield9", "email", {validateOn:["blur"]});
var sprytextarea6 = new Spry.Widget.ValidationTextarea("sprytextarea6", {maxChars:255, counterId:"countsprytextarea6", counterType:"chars_remaining"});
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
