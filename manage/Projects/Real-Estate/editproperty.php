<?php 
include '../../login/dbc.php';
page_protect();
?>
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/Template.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- InstanceBeginEditable name="doctitle" -->
    <title>Edit | Copy Property</title>
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
<?php // ******************** ARTICLE INSERT CODE *************************************************************************

//echo $_POST['prop_img'];
if(isset($_FILES['prop_img'])){
	
    $errors= array();
	//foreach($_FILES['prop_img']['tmp_name'] as $key => $tmp_name ){
		$file_name = $_FILES['prop_img']['name'];
		$file_size =$_FILES['prop_img']['size'];
		$file_tmp =$_FILES['prop_img']['tmp_name'];
		$file_type=$_FILES['prop_img']['type'];	
        if($file_size > 10097152){
			$errors[]='File size must be less than 2 MB';
        }
		if ((!$file_type == "image/jpeg") || (!$file_type == "image/png") || (!$file_type == "image/gif")){
			$errors[]='<strong>File type must be .gif, .png, .jpeg, .jpg only</strong>';			
				};
				

       $desired_dir= $propImgFolder; 
        if(empty($errors)==true){
            if(is_dir($desired_dir)==false){
                mkdir($root."/".$desired_dir, 0700);		// Create directory if it does not exist
            }
            if(file_exists($root."/".$desired_dir."/".$file_name)==false){
                move_uploaded_file($file_tmp,$root."/".$desired_dir."/".$file_name);
            }else{									// rename the file if another one exist
                
				$file_name=time()."-".$file_name;
                 rename($file_tmp, $root."/".$desired_dir."/".$file_name) ;	
				 chmod($root."/".$desired_dir."/".$file_name, 0644);			
            }
        }else{
                foreach($errors as $er) { echo $er.'<br />'; };
				echo "Property not updated properly due to errors!";
				
        }
    
	if(empty($errors)){
		echo "Files uploaded Successfully ";
		$fileName = "http://".$_SERVER['HTTP_HOST']."/".$desired_dir."/".$file_name;
	}
}else{ 
	$fileName = $_POST['prop_image'];
}



if (isset($_POST['copy'])) {

$sql="INSERT INTO `$_SESSION[user_id]_real_property` (`id`, `user_id`, `featured`, `prop_image`, `property_for`, `category`, `type`, `buildup_area`, `build_unit`, `land_area`, `land_unit`, `carpet_area`, `carpet_unit`, `price`, `currency`, `bedrooms`, `bathrooms`, `country`, `state`, `city`, `address`, `location`, `title`, `society_name`, `prop_desc`, `cont_name`, `contact`, `email`, `cont_address`, `prop_age`, `furnished`, `transaction_type`, `prop_owner`, `floors`, `on_floor`, `parking`, `hospital`, `airport`, `railway`, `school`, `power`, `water`, `lift`, `res_parking`, `security`, `maintenance`, `gym`, `park`, `tarrace`, `swimming`, `quarters`, `club`, `facing`, other_domain, meta_desc, meta_key) VALUES (NULL, '$_POST[user_id]', '$_POST[featured]', '$fileName', '$_POST[property_for]', '$_POST[category]', '$_POST[type]', '$_POST[build_area]', '$_POST[build_unit]', '$_POST[land_area]', '$_POST[land_unit]', '$_POST[carpet_area]', '$_POST[carpet_unit]', '$_POST[price]', '$_POST[currency]', '$_POST[bedrooms]', '$_POST[bathrooms]', '$_POST[country]', '$_POST[state]', '$_POST[city]', '$_POST[address]', '$_POST[location]', '$_POST[title]', '$_POST[society_name]', '$_POST[prop_desc]', '$_POST[cont_name]', '$_POST[contact_no]', '$_POST[email]', '$_POST[cont_address]', '$_POST[prop_age]', '$_POST[furnished]', '$_POST[transaction_type]', '$_POST[prop_owner]', '$_POST[floors]', '$_POST[on_floor]', '$_POST[parking]', '$_POST[hospital]', '$_POST[airport]', '$_POST[railway]', '$_POST[school]', '$_POST[power]', '$_POST[water]', '$_POST[lift]', '$_POST[res_parking]', '$_POST[security]', '$_POST[maintenance]', '$_POST[gym]', '$_POST[park]', '$_POST[tarrace]', '$_POST[swimming]', '$_POST[quarters]', '$_POST[club]', '$_POST[facing]','$_POST[other_domain]','$_POST[meta_desc]','$_POST[meta_key]');";
if (!mysql_query($sql))
  {
  die('Error: ' . mysql_error());
  }
echo "1 New Property Copied Sucessfully!";
		$prop_id = mysql_insert_id();

}
?>

<?php // ******************** ARTICLE UPDATE CODE *************************************************************************
if (isset($_POST['Update'])) {
//  $id = $_GET['ID'];

$sql="UPDATE `$_SESSION[user_id]_real_property` SET
 `user_id`='$_POST[user_id]', 
 `featured`= '$_POST[featured]', 
 `prop_image` = '$fileName',
 `property_for`='$_POST[property_for]',
 `category`= '$_POST[category]',
 `type`= '$_POST[type]',
 `buildup_area`= '$_POST[build_area]',
 `build_unit`= '$_POST[build_unit]',
 `land_area`= '$_POST[land_area]',
 `land_unit`= '$_POST[land_unit]',
 `carpet_area`= '$_POST[carpet_area]',
 `carpet_unit`= '$_POST[carpet_unit]',
 `price`= '$_POST[price]',
 `currency`= '$_POST[currency]',
 `bedrooms`= '$_POST[bedrooms]',
 `bathrooms`= '$_POST[bathrooms]',
 `country`= '$_POST[country]',
 `state`= '$_POST[state]',
 `city`= '$_POST[city]', 
 `address`='$_POST[address]',
 `location`= '$_POST[location]', 
 `title`= '$_POST[title]',
 `society_name`= '$_POST[society_name]',
 `prop_desc`= '$_POST[prop_desc]',
 `cont_name`= '$_POST[cont_name]',
 `contact`= '$_POST[contact]',
 `email`= '$_POST[email]',
 `cont_address`= '$_POST[cont_address]', 
 `prop_age`='$_POST[prop_age]',
 `furnished`= '$_POST[furnished]',
 `transaction_type`= '$_POST[transaction_type]',
 `prop_owner`= '$_POST[prop_owner]',
 `floors`= '$_POST[floors]',
 `on_floor`= '$_POST[on_floor]',
 `parking`= '$_POST[parking]',
 `hospital`= '$_POST[hospital]',
 `airport`= '$_POST[airport]',
 `railway`= '$_POST[railway]',
 `school`= '$_POST[school]',
 `power`= '$_POST[power]',
 `water`= '$_POST[water]',
 `lift`= '$_POST[lift]',
 `res_parking`= '$_POST[res_parking]',
 `security`= '$_POST[security]',
 `maintenance`= '$_POST[maintenance]',
 `gym`= '$_POST[gym]',
 `park`= '$_POST[park]',
 `tarrace`= '$_POST[tarrace]',
 `swimming`= '$_POST[swimming]',
 `quarters`= '$_POST[quarters]',
 `club`= '$_POST[club]',
 `meta_desc`= '$_POST[meta_desc]',
 `meta_key`= '$_POST[meta_key]',
 `facing`= '$_POST[facing]' WHERE id='$_POST[id]'";
if (!mysql_query($sql))
  {
  die('Error: ' . mysql_error());
  }
else {echo "1 New Article Added Sucessfully!";
//echo '<script type="text/javascript">window.history.go(-2);</script>';

}}
?>

<div class="content">
<?php if (isset($_GET['prop_id']) || isset($_GET['prop_copy'])) {
	if (isset($_GET['prop_id'])) {
		$pro_id = $_GET['prop_id'];
	}else {
		$pro_id = $_GET['prop_copy'];
		} ?>
<?php $result= mysql_query("SELECT * FROM `$_SESSION[user_id]_real_property` WHERE id=$pro_id");
while ($row= mysql_fetch_assoc($result)){  ?>
  <form id="form1" name="form1" method="post" action="" enctype="multipart/form-data">
  <table class="border">
    <tbody>
      <tr valign="top">
        <td colspan="4"><h1>Basic info</h1></td>
      </tr>
      <tr valign="top">
        <td width="1%">&nbsp;</td>
        <td width="20%">* Property for</td>
        <td colspan="2"><input name="property_for" id="listfor" value="Sale" type="radio" <?php if($row['property_for']=='Sale'){ echo 'CHECKED';}?>  />
          Sale
            <input name="property_for" id="listfor" type="radio" value="Rent" <?php if($row['property_for']=='Rent'){ echo 'CHECKED';}?>/>Rent 
        <input name="property_for" id="listfor" type="radio" value="PG" <?php if($row['property_for']=='PG'){ echo 'CHECKED';}?>/>PG</td>
      </tr>
      <tr valign="top">
        <td id="text_cat_id_id2">&nbsp;</td>
        <td id="text_cat_id_id2">* Featured</td>
        <td colspan="2"><input name="featured" id="listfor2" type="radio" value="1" <?php if($row['featured']=='1') echo 'CHECKED'?> />
Yes 
  <input name="featured" id="listfor2" type="radio" value="0" <?php if($row['featured']=='0') echo 'CHECKED'?> />
No </td>
      </tr>
      <tr valign="top">
        <td id="text_cat_id_id">&nbsp;</td>
        <td id="text_cat_id_id">* Property Category</td>
        <td colspan="2">
              <select name="category" id="category">
                 
                <option value="<?php echo $row['category'];?>"><?php echo $row['category'];?></option>
                 
                <option value="Residential Property">Residential Property</option>
                 
                <option value="Commercial Property">Commercial Property</option>
                 
                <option value="Agricultural land">Agricultural land</option>
                 
                <option value="Industrial Property">Industrial Property</option>
                 
              </select>
      </td>
      </tr>
      <tr valign="top" id="subcatdisplay">
        <td id="text_sub_cat_id">&nbsp;</td>
        <td id="text_sub_cat_id">* Property Type</td>
        <td colspan="2">
              <input name="type" id="type" value="<?php echo $row['type'];?>">
	  </td>
      </tr>
      <tr valign="top">
        <td id="text_area_id">&nbsp;</td>
        <td id="text_area_id">* Built Up Area</td>
        <td colspan="2">
              <input name="build_area" type="text" id="build_area" maxlength="8" value="<?php echo $row['buildup_area'];?>" />
                <select name="build_unit" id="build_unit" >
                  <option value=""></option>
                  <option value="<?php echo $row['build_unit'];?>"><?php echo $row['build_unit'];?></option>
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
        <td id="text_landarea_id">&nbsp;</td>
        <td id="text_landarea_id">* Plot / Land Area</td>
        <td colspan="2">
              <input name="land_area" type="text" id="land_area" maxlength="8" value="<?php echo $row['land_area'];?>"  />
                <select name="land_unit" id="land_unit" >
                   
                  <option value="<?php echo $row['land_unit'];?>"><?php echo $row['land_unit'];?></option>
                   	
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
        <td>Carpet Area</td>
        <td colspan="2">
                <input name="carpet_area" type="text" id="carpet_area" maxlength="8" value="<?php echo $row['carpet_area'];?>"  />
                <select name="carpet_unit" id="carpet_unit">
                   
                  <option value="<?php echo $row['carpet_unit'];?>"><?php echo $row['carpet_unit'];?></option>
                   	
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
        <td colspan="2"><input name="price" type="text" id="price" maxlength="8" value="<?php echo $row['price'];?>" />
          <select name="currency " id="currency ">
               
              <option value="<?php echo $row['currency'];?>"><?php echo $row['currency'];?></option>
               
              <option value="Thousand">Thousand</option>
               
              <option value="Lac">Lac</option>
               
              <option value="Crore">Crore</option>
               
            </select></td>
      </tr>
      <tr valign="top" id="bedroomshide">
        <td>&nbsp;</td>
        <td>Bedrooms</td>
        <td colspan="2"><select name="bedrooms" id="bedrooms">
          
               
              
          <option value="<?php echo $row['bedrooms'];?>"><?php echo $row['bedrooms'];?></option>
          
               	
              
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
        <td colspan="2"><select name="bathrooms" id="bathrooms">
          
               
              
          <option value="<?php echo $row['bathrooms'];?>"><?php echo $row['bathrooms'];?></option>
          
               	
              
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
        <td colspan="2">
        <input name="prop_img" type="file" id="prop_img"/> <img src="<?php echo $row['prop_image'];?>" width="100" />
        <input type="hidden" name="prop_image" value="<?php echo $row['prop_image'];?>" />
		</td>
      </tr>
      <tr valign="top">
        <td colspan="4"><h2>Property Location</h2></td>
      </tr>
      <tr valign="top">
        <td>&nbsp;</td>
        <td>Country</td>
        <td colspan="2"><input name="country" type="text" id="country" onblur="validate_form_field(this.value,'prop_address')" onkeypress="return disableEnterKey(event)" value="INDIA" readonly="readonly" /></td>
      </tr>
      <tr valign="top">
        <td id="text_prop_state_id_id">&nbsp;</td>
        <td id="text_prop_state_id_id">* State</td>
        <td colspan="2"><select name="state" id="state" >
          <option value="<?php echo $row['state'];?>" selected="selected"><?php echo $row['state'];?></option>
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
        </select></td>
      </tr>
      <tr valign="top">
        <td id="text_prop_city_id_id">&nbsp;</td>
        <td id="text_prop_city_id_id">* City</td>
        <td colspan="2"><input type="text" name="city" id="city" value="<?php echo $row['city'];?>">
      </td>
      </tr>
      <tr valign="top">
        <td id="text_prop_address_id">&nbsp;</td>
        <td id="text_prop_address_id">* Address</td>
        <td colspan="2"><textarea name="address" cols="30" id="address"><?php echo $row['address'];?></textarea></td>
      </tr>
      <tr valign="top">
        <td>&nbsp;</td>
        <td>Area / Location</td>
        <td colspan="2"><input name="location" type="text" id="location" value="<?php echo $row['location'];?>" size="40" maxlength="200" /></td>
      </tr>
      <tr valign="top">
        <td colspan="4"><h2>Description Title</h2></td>
      </tr>
      <tr valign="top">
        <td>&nbsp;</td>
        <td>Property Title <br />
          ( Display in your website )</td>
        <td colspan="2"><textarea name="title" cols="70" id="title"><?php echo $row['title'];?></textarea></td>
      </tr>
      <tr valign="top">
        <td>&nbsp;</td>
        <td>Property Meta Description <br /></td>
        <td colspan="2"><textarea name="meta_desc" cols="70" id="meta_desc"><?php echo $row['meta_desc'];?></textarea></td>
      </tr>
      <tr valign="top">
        <td>&nbsp;</td>
        <td>Property Meta Keywords <br /></td>
        <td colspan="2"><textarea name="meta_key" cols="70" id="meta_key"><?php echo $row['meta_key'];?></textarea></td>
      </tr>
      <tr valign="top">
        <td>&nbsp;</td>
        <td>Society Name <br />
          ( 50 characters Only )</td>
        <td colspan="2">
            <input name="society_name" type="text" id="society_name" value="<?php echo $row['society_name'];?>" size="70" maxlength="50" />
      </td>
      </tr>
      <tr valign="top">
        <td id="text_prop_desc_id">&nbsp;</td>
        <td id="text_prop_desc_id">* Property Description</td>
        <td colspan="2"><textarea name="prop_desc" cols="30" rows="4" id="prop_desc"><?php echo $row['prop_desc'];?></textarea></td>
      </tr>
    </tbody>
    <tbody>
      <tr valign="top">
        <td colspan="4"><h2>Property Contact Detail</h2></td>
      </tr>
    </tbody>
    <tbody>
    </tbody>
  <tbody id="contnew">
    <tr valign="top">
      <td id="text_contname_id">&nbsp;</td>
      <td id="text_contname_id">* Name</td>
      <td colspan="2"><input type="text" name="cont_name" id="cont_name" value="<?php echo $row['cont_name'];?>" /></td>
    </tr>
    <tr valign="top">
      <td id="text_contno_id">&nbsp;</td>
      <td id="text_contno_id">* Contact No.</td>
      <td colspan="2"><input type="text" name="contact" id="contact" value="<?php echo $row['contact'];?>"/> </td>
    </tr>
    <tr valign="top">
      <td id="text_contno_id2">&nbsp;</td>
      <td id="text_contno_id2">* Email</td>
      <td colspan="2"><input type="text" name="email" id="email" value="<?php echo $row['email'];?>"/></td>
    </tr>
    <tr valign="top">
      <td id="text_contaddress_id">&nbsp;</td>
      <td id="text_contaddress_id">* Address</td>
      <td colspan="2"><textarea name="cont_address" cols="30" rows="2" id="cont_address"><?php echo $row['cont_address'];?></textarea></td>
    </tr>
  </tbody>

  <tbody>
    <tr valign="top">
      <td colspan="4"><h1>Optional Property Details</h1></td>
    </tr>
    <tr valign="top">
      <td width="1%">&nbsp;</td>
      <td width="20%">Age of the Property</td>
      <td colspan="2"><select name="prop_age" id="prop_age">
        
             	
            
        <option value="">Select one</option>
        
             			
            
        <option value="Under Construction" <?php if($row['prop_age']=='Under Construction'){ echo 'SELECTED';}?>>Under Construction</option>
        
             				
            
        <option value="New Construction" <?php if($row['prop_age']=='New Construction'){ echo 'SELECTED';}?>>New Construction</option>
        
             				
            
        <option value="0 to 5 years" <?php if($row['prop_age']=='0 to 5 years'){ echo 'SELECTED';}?>>0 to 5 years</option>
        
             				
            
        <option value="5 to 10 years" <?php if($row['prop_age']=='5 to 10 years'){ echo 'SELECTED';}?>>5 to 10 years</option>
        
             				
            
        <option value="10 to 15 years" <?php if($row['prop_age']=='10 to 15 years'){ echo 'SELECTED';}?>>10 to 15 years</option>
        
             				
            
        <option value="15 to 20 years" <?php if($row['prop_age']=='15 to 20 years'){ echo 'SELECTED';}?>>15 to 20 years</option>
        
             				
            
        <option value="Above 20 years" <?php if($row['prop_age']=='Above 20 years'){ echo 'SELECTED';}?>>Above 20 years</option>
        
             			
          
      </select></td>
    </tr>
    <tr valign="top">
      <td width="1%">&nbsp;</td>
      <td width="20%">Furnished</td>
      <td colspan="2"><select name="furnished" id="furnished">
        
             	
            
        <option value="">Select one</option>
        
             			
            
        <option value="Furnished" <?php if($row['furnished']=='Furnished'){ echo 'SELECTED';}?>>Furnished</option>
        
             				
            
        <option value="Unfurnished" <?php if($row['furnished']=='Unfurnished'){ echo 'SELECTED';}?>>Unfurnished</option>
        
             				
            
        <option value="Semi-Furnished" <?php if($row['furnished']=='Semi-Furnished'){ echo 'SELECTED';}?>>Semi-Furnished</option>
        
             			
          
      </select></td>
    </tr>
    <tr valign="top">
      <td width="1%">&nbsp;</td>
      <td width="20%">Transaction Type</td>
      <td colspan="2"><select name="transaction_type" id="transaction_type">
        
             	
            
        <option value="">Select one</option>
        
             			
            
        <option value="Resale Property" <?php if($row['transaction_type']=='Resale Property'){ echo 'SELECTED';}?>>Resale Property</option>
        
             				
            
        <option value="New Property" <?php if($row['transaction_type']=='New Property'){ echo 'SELECTED';}?>>New Property</option>
        
             			
          
      </select></td>
    </tr>
    <tr valign="top">
      <td width="1%">&nbsp;</td>
      <td width="20%">Property Ownership</td>
      <td colspan="2"><select name="prop_owner" id="prop_owner">
        
             	
            
        <option value="">Select one</option>
        
             	
            
        <option value="Individual" <?php if($row['prop_owner']=='Individual'){ echo 'SELECTED';}?>>Individual</option>
        
             	
            
        <option value="others" <?php if($row['prop_owner']=='others'){ echo 'SELECTED';}?>>others</option>
        
             	
            
        <option value="A Broker/Agent" <?php if($row['prop_owner']=='A Broker/Agent'){ echo 'SELECTED';}?>>A Broker/Agent</option>
        
             	
            
        <option value="A Builder/Promoter" <?php if($row['prop_owner']=='A Builder/Promoter'){ echo 'SELECTED';}?>>A Builder/Promoter</option>
        
             	
          
      </select></td>
    </tr>
    <tr valign="top">
      <td width="1%">&nbsp;</td>
      <td width="20%">Total Number of Floors</td>
      <td colspan="2"><select name="floors" id="floors">
        
             	
            
        <option value="<?php echo $row['floors'];?>" selected="selected"><?php echo $row['floors'];?></option>
        
             		    
            
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
      <td width="1%">&nbsp;</td>
      <td width="20%">Facing</td>
      <td colspan="2"><select name="facing" id="facing">
        
             	
            
        <option value="" <?php if($row['facing']==''){ echo 'SELECTED';}?>>Select</option>
        
             	
            
        <option value="East" <?php if($row['facing']=='East'){ echo 'SELECTED';}?>>East</option>
        
             	
            
        <option value="South" <?php if($row['facing']=='South'){ echo 'SELECTED';}?>>South</option>
        
             	
            
        <option value="West" <?php if($row['facing']=='West'){ echo 'SELECTED';}?>>West</option>
        
             	
            
        <option value="North" <?php if($row['facing']=='North'){ echo 'SELECTED';}?>>North</option>
        
             	
            
        <option value="South East" <?php if($row['facing']=='South East'){ echo 'SELECTED';}?>>South East</option>
        
             	
            
        <option value="South West" <?php if($row['facing']=='South West'){ echo 'SELECTED';}?>>South West</option>
        
             	
            
        <option value="North West" <?php if($row['facing']=='North West'){ echo 'SELECTED';}?>>North West</option>
        
             	
            
        <option value="North East" <?php if($row['facing']=='North East'){ echo 'SELECTED';}?>>North East</option>
        
             	
          
      </select></td>
    </tr>
    <tr valign="top">
      <td width="1%">&nbsp;</td>
      <td width="20%">Property On Floor</td>
      <td colspan="2"><select name="on_floor" id="on_floor">
        
             	
            
        <option value="<?php echo $row['on_floor'];?>" selected="selected"><?php echo $row['on_floor'];?></option>
        
             	
            
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
      <td width="1%">&nbsp;</td>
      <td width="20%">No. of Car Parking</td>
      <td colspan="2"><select name="parking" id="parking">
        
             	
            
        <option value="<?php echo $row['parking'];?>" selected="selected"><?php echo $row['parking'];?></option>
        
             			
            
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
      <td colspan="4"><h2>Land Mark</h2></td>
    </tr>
    <tr valign="top">
      <td>&nbsp;</td>
      <td>Hospitals</td>
      <td colspan="2"><input name="hospital" id="hospital" maxlength="100" type="text" value="<?php echo $row['hospital'];?>" />
        kms</td>
    </tr>
    <tr valign="top">
      <td>&nbsp;</td>
      <td>Airport</td>
      <td colspan="2"><input name="airport" id="airport" maxlength="100" type="text" value="<?php echo $row['airport'];?>" />
kms</td>
    </tr>
    <tr valign="top">
      <td>&nbsp;</td>
      <td>Railway Station</td>
      <td colspan="2"><input name="railway" id="railway" maxlength="100" type="text" value="<?php echo $row['railway'];?>" />
kms</td>
    </tr>
    <tr valign="top">
      <td>&nbsp;</td>
      <td>School</td>
      <td colspan="2"><input name="school" id="school" maxlength="100" type="text" value="<?php echo $row['school'];?>" />
kms</td>
    </tr>
    <tr valign="top">
      <td colspan="4"><h2>Amenities</h2></td>
    </tr>
    <tr valign="top">
      <td></td>
      <td colspan="3"><table width="98%" border="1" bordercolor="#CCCCCC">
        <tbody>
          <tr>
            <td width="5%">
            <input name="power" type="checkbox" id="power" value="1" <?php if($row['power']=='1'){ echo 'CHECKED';}?>/>
            </td>
            <td width="28%">Power Backup</td>
            <td width="5%"><input name="water" type="checkbox" id="water" value="1" <?php if($row['water']=='1'){ echo 'CHECKED';}?>/></td>
            <td width="28%">Water Storage</td>
            <td width="5%"><input name="lift" type="checkbox" id="lift" value="1" <?php if($row['lift']=='1'){ echo 'CHECKED';}?>/></td>
            <td>Lift</td>
          </tr>
          <tr>
            <td><input name="res_parking" type="checkbox" id="res_parking" value="1" <?php if($row['res_parking']=='1'){ echo 'CHECKED';}?>/></td>
            <td>Reserve Parking</td>
            <td><input name="security" type="checkbox" id="security" value="1" <?php if($row['security']=='1'){ echo 'CHECKED';}?>/></td>
            <td>Security</td>
            <td><input name="maintenance" type="checkbox" id="maintenance" value="1" <?php if($row['maintenance']=='1'){ echo 'CHECKED';}?>/></td>
            <td>Maintenance Staff</td>
          </tr>
          <tr>
            <td><input name="gym" type="checkbox" id="gym" value="1" <?php if($row['gym']=='1'){ echo 'CHECKED';}?>/></td>
            <td>GYM</td>
            <td><input name="park" type="checkbox" id="park" value="1" <?php if($row['park']=='1'){ echo 'CHECKED';}?>/></td>
            <td>Park</td>
            <td><input name="tarrace" type="checkbox" id="tarrace" value="1" <?php if($row['tarrace']=='1'){ echo 'CHECKED';}?>/></td>
            <td>Private Tarrace</td>
          </tr>
          <tr>
            <td><input name="swimming" type="checkbox" id="swimming" value="1" <?php if($row['swimming']=='1'){ echo 'CHECKED';}?>/></td>
            <td>Swimming Pool</td>
            <td><input name="quarters" type="checkbox" id="quarters" value="1" <?php if($row['quarters']=='1'){ echo 'CHECKED';}?>/></td>
            <td>Servant Quarters</td>
            <td><input name="club" type="checkbox" id="club" value="1" <?php if($row['club']=='1'){ echo 'CHECKED';}?>/></td>
            <td>Club House</td>
          </tr>
          <tr></tr>
        </tbody>
      </table></td>
      </tr>
    <tr valign="top">
      <td>&nbsp;</td>
      <td colspan="2"> 
        
        <input name="user_id" type="hidden" id="user_id" value="1" />
        <input name="id" type="hidden" id="id" value="<?php echo $row['id']; ?>" />
        <?php if (isset($_GET['prop_copy'])) { ?>
          <?php $result = mysql_query("SELECT * FROM `user_sites` WHERE user_id='$_SESSION[user_id]' and status='1'") or die(mysql_error()); ?>
          Select Site to copy:
          <select name="other_domain" id="other_domain" style="width:150px">
            <?php while($row = mysql_fetch_array($result)){ ?>
            <option value="<?php echo $row['domain']; ?>"><?php echo $row['domain'] ; ?></option>
            <?php } ?>
            </select>
          <?php } ?>
      </td>
      <td width="29%">
        <?php if (isset($_GET['prop_id'])) { ?>
          <input name="Update" type="submit" id="Update" style="width:150px; height:30px" onclick="return validatePropertyStep2();" value="Update" />
          <?php } else {?>
          <input name="copy" type="submit" id="copy" style="width:150px; height:30px" onclick="return validatePropertyStep2();" value="Copy Property" />
          <?php } ?>      </td>
    </tr>
  </tbody>
</table>
  </form>
<?php }} ?>
</div>
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
