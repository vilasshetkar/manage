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
<?php 
// Insert Project Image
if(isset($_FILES['proj_img'])){
    $errors= array();
	//foreach($_FILES['proj_img']['tmp_name'] as $key => $tmp_name ){
		$file_name = $_FILES['proj_img']['name'];
		$file_size =$_FILES['proj_img']['size'];
		$file_tmp =$_FILES['proj_img']['tmp_name'];
		$file_type=$_FILES['proj_img']['type'];
        if($file_size > 10097152){
			$errors[]='File size must be less than 2 MB';
        }
		if ((!$file_type == "image/jpeg") || (!$file_type == "image/png") || (!$file_type == "image/gif")){
			$errors[]='<strong>File type must be .gif, .png, .jpeg, .jpg only</strong>';			
				};
				

       $desired_dir= $propImgFolder; 
        if(empty($errors)==true){
            if(is_dir($desired_dir)==false){
                mkdir("$desired_dir", 0700);		// Create directory if it does not exist
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
				
        }
	if(empty($errors)){
		echo "Files uploaded Successfully ";
		$proj_img = "http://".$_SERVER['HTTP_HOST']."/".$desired_dir."/".$file_name;
	}else{
	$proj_img = $_POST['oldProj_img'];
}

}

// Insert Location Map
if(isset($_FILES['location_map'])){
    $errors= array();
	//foreach($_FILES['proj_img']['tmp_name'] as $key => $tmp_name ){
		$file_name = $_FILES['location_map']['name'];
		$file_size =$_FILES['location_map']['size'];
		$file_tmp =$_FILES['location_map']['tmp_name'];
		$file_type=$_FILES['location_map']['type'];
        if($file_size > 10097152){
			$errors[]='File size must be less than 2 MB';
        }
		if ((!$file_type == "image/jpeg") || (!$file_type == "image/png") || (!$file_type == "image/gif")){
			$errors[]='<strong>File type must be .gif, .png, .jpeg, .jpg only</strong>';			
				};
				

       $desired_dir= $propImgFolder; 
        if(empty($errors)==true){
            if(is_dir($desired_dir)==false){
                mkdir("$desired_dir", 0700);		// Create directory if it does not exist
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
				
        }
	if(empty($errors)){
		echo "Files uploaded Successfully ";
		$location_map = "http://".$_SERVER['HTTP_HOST']."/".$desired_dir."/".$file_name;
	}else{
	$location_map = $_POST['oldlocation_map'];
}
}


// Insert Location Map
if(isset($_FILES['layout_map'])){
    $errors= array();
	//foreach($_FILES['proj_img']['tmp_name'] as $key => $tmp_name ){
		$file_name = $_FILES['layout_map']['name'];
		$file_size =$_FILES['layout_map']['size'];
		$file_tmp =$_FILES['layout_map']['tmp_name'];
		$file_type=$_FILES['layout_map']['type'];
        if($file_size > 10097152){
			$errors[]='File size must be less than 2 MB';
        }
		if ((!$file_type == "image/jpeg") || (!$file_type == "image/png") || (!$file_type == "image/gif")){
			$errors[]='<strong>File type must be .gif, .png, .jpeg, .jpg only</strong>';			
				};
				

       $desired_dir= $propImgFolder; 
        if(empty($errors)==true){
            if(is_dir($desired_dir)==false){
                mkdir("$desired_dir", 0700);		// Create directory if it does not exist
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
				
        }
	if(empty($errors)){
		echo "Files uploaded Successfully ";
		$layout_map = "http://".$_SERVER['HTTP_HOST']."/".$desired_dir."/".$file_name;
	}else{
	$layout_map = $_POST['oldlayout_map'];
}
}


// Insert Location Map
if(isset($_FILES['floor_plans'])){
    $errors= array();
	//foreach($_FILES['proj_img']['tmp_name'] as $key => $tmp_name ){
		$file_name = $_FILES['floor_plans']['name'];
		$file_size =$_FILES['floor_plans']['size'];
		$file_tmp =$_FILES['floor_plans']['tmp_name'];
		$file_type=$_FILES['floor_plans']['type'];
        if($file_size > 10097152){
			$errors[]='File size must be less than 2 MB';
        }
		if ((!$file_type == "image/jpeg") || (!$file_type == "image/png") || (!$file_type == "image/gif")){
			$errors[]='<strong>File type must be .gif, .png, .jpeg, .jpg only</strong>';			
				};
				

       $desired_dir= $propImgFolder; 
        if(empty($errors)==true){
            if(is_dir($desired_dir)==false){
                mkdir("$desired_dir", 0700);		// Create directory if it does not exist
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
				
				
        }
	if(empty($errors)){
		echo "Files uploaded Successfully<br /> ";
		$floor_plans = "http://".$_SERVER['HTTP_HOST']."/".$desired_dir."/".$file_name;
	}else{
	$floor_plans = $_POST['oldfloor_plans'];
}

}
// Update project Script
if(isset($_POST['Update'])){
$sql = mysql_query("UPDATE `$_SESSION[user_id]_real_project` SET
`title`='$_POST[title]',
`featured`='$_POST[featured]',
`project_by`='$_POST[project_by]',
`category`='$_POST[category]',
`type`='$_POST[type]',
`location`= '$_POST[location]',
`overview`= '".str_replace("'","\'",$_POST['overview'])."',
`proj_img` = '$proj_img',
`amenities`= '".str_replace("'","\'",$_POST['amenities'])."',
`specifications`= '".str_replace("'","\'",$_POST['specifications'])."',
`location_map`='$location_map',
`layout_map`='$layout_map',
`floor_plans`='$floor_plans',
`availability`= '".str_replace("'","\'",$_POST['availability'])."',
`contact`= '".str_replace("'","\'",$_POST['contact'])."'
WHERE id='$_POST[id]'");
if(!$sql){
	echo 'Error: '.mysql_error();
	echo "Property not updated properly due to errors!";
	}
	else{
		echo '1 Project Added Sucessfully!';
		echo '<script type="text/javascript">window.history.go(-2);</script>';
		
		}
}


// Copy Project Script
if(isset($_POST['copy'])){
	?>
<?php
//$otherDomain = implode(',', $_POST['other_domain']);

$query = "INSERT INTO `$_SESSION[user_id]_real_project` (
`title`,
`project_by`,
`featured`,
`category`,
`type`,
`location`,
`overview`,
`proj_img`,
`amenities`,
`specifications`,
`location_map`,
`layout_map`,
`floor_plans`,
`availability`,
`contact`,
`domain`)

VALUES (

'$_POST[title]',
'$_POST[project_by]',
'$_POST[featured]',
'$_POST[category]',
'$_POST[type]',
'$_POST[location]',
'".str_replace("'","\'",$_POST['overview'])."',
'$proj_img',
'".str_replace("'","\'",$_POST['amenities'])."',
'".str_replace("'","\'",$_POST['specifications'])."',
'$location_map',
'$layout_map',
'$floor_plans',
'".str_replace("'","\'",$_POST['availability'])."',
'".str_replace("'","\'",$_POST['contact'])."',
'$otherDomain')";

$sql = mysql_query($query);
if(!$sql){
	echo 'Error: '.mysql_error();
	echo "Property not updated properly due to errors!";
	}
	else{
		echo '1 Project Added Sucessfully!';
		$prop_id = mysql_insert_id();
		}
}

?>
<!--Body Content from here-->
<?php if (isset($_GET['proj_id']) || isset($_GET['proj_copy'])) {
	if(isset($_GET['proj_id'])){
		$proj_id=$_GET['proj_id'];
	}else {
		$proj_id=$_GET['proj_copy'];
	}
	?>

<?php $result= mysql_query("SELECT * FROM `$_SESSION[user_id]_real_project` WHERE id=$proj_id");
while ($row= mysql_fetch_assoc($result)){  ?>
<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <table class="border">
    <tbody>
      <tr valign="top">
        <td colspan="10"><h1>Basic info:</h1></td>
      </tr>
      <tr valign="top">
        <td width="3%">&nbsp;</td>
        <td width="19%">* Project Title</td>
        <td width="78%" colspan="8"><textarea required="required" name="title" cols="70" id="title"><?php echo $row['title']; ?></textarea></td>
      </tr>
      <tr valign="top">
        <td id="text_cat_id_id2">&nbsp;</td>
        <td id="text_cat_id_id2">* Featured</td>
        <td colspan="8"><input name="featured" id="featured" type="radio" value="1" <?php if($row['featured']=='1') echo 'CHECKED'?> />
Yes 
  <input name="featured" id="featured" type="radio" value="0" <?php if($row['featured']=='0') echo 'CHECKED'?> />
No </td>
      </tr>
      <tr valign="top">
        <td id="text_cat_id_id">&nbsp;</td>
        <td id="text_cat_id_id">* Category</td>
        <td colspan="8"><select name="category" id="category" >
          
                 
                
         <option value="<?php echo $row['category'];?>"><?php echo $row['category'];?></option>
          
                 
                
          <option value="Residential Property">Residential Property</option>
          
                 
                
          <option value="Commercial Property">Commercial Property</option>
          
                 
                
          <option value="Agricultural land">Agricultural land</option>
          
                 
                
          <option value="Industrial Property">Industrial Property</option>
          
                 
              
        </select></td>
      </tr>
      <tr valign="top" id="subcatdisplay">
        <td id="text_sub_cat_id">&nbsp;</td>
        <td id="text_sub_cat_id">* Project Type</td>
        <td colspan="8"><input name="type" id="type" value="<?php echo $row['type'];?>" /></td>
      </tr>
      <tr valign="top">
        <td id="text_area_id">&nbsp;</td>
        <td id="text_area_id">* Location</td>
        <td colspan="8"><input name="location" type="text" id="location" value="<?php echo $row['location'];?>" required="required"/></td>
      </tr>
      <tr valign="top">
        <td id="text_landarea_id">&nbsp;</td>
        <td id="text_landarea_id">* Overview</td>
        <td colspan="8"><textarea name="overview" cols="50" rows="4" id="overview" required="required"><?php echo $row['overview'];?></textarea></td>
      </tr>
      <tr valign="top">
        <td id="text_sub_cat_id3">&nbsp;</td>
        <td id="text_sub_cat_id3">Project Image</td>
        <td colspan="8"><input name="proj_img" type="file" id="proj_img"/>
        <img src="<?php echo $row['proj_img'];?>" width="100" />
        <input type="hidden" name="oldProj_img" value="<?php echo $row['proj_img'];?>" />
        </td>
      </tr>
      <tr valign="top" id="subcatdisplay2">
        <td id="text_sub_cat_id2">&nbsp;</td>
        <td id="text_sub_cat_id2">* Project By</td>
        <td colspan="8"><input name="project_by" id="project_by" value="<?php echo $row['project_by'];?>" /></td>
      </tr>
      <tr valign="top">
        <td>&nbsp;</td>
        <td>* Amenities/Features</td>
        <td colspan="8"><textarea required="required" name="amenities" cols="50" rows="4" id="amenities" ><?php echo $row['amenities'];?></textarea></td>
      </tr>
      <tr valign="top" id="bedroomshide">
        <td>&nbsp;</td>
        <td>* Specifications</td>
        <td colspan="8"><textarea name="specifications" cols="50" rows="10" id="specifications" required="required"><?php echo $row['specifications'];?></textarea></td>
      </tr>
      <tr valign="top">
        <td>&nbsp;</td>
        <td>Location Map</td>
        <td colspan="8"><input name="location_map" type="file" id="location_map"/>
          <img src="<?php echo $row['location_map'];?>" width="100" />
          <input name="oldlocation_map" type="hidden" id="oldlocation_map" value="<?php echo $row['location_map'];?>" /></td>
      </tr>
      <tr valign="top">
        <td>&nbsp;</td>
        <td>layout_map</td>
        <td colspan="8"><input name="layout_map" type="file" id="layout_map"/>
          <img src="<?php echo $row['layout_map'];?>" width="100" />
          <input name="oldlayout_map" type="hidden" id="oldlayout_map" value="<?php echo $row['layout_map'];?>" /></td>
      </tr>
      <tr valign="top">
        <td>&nbsp;</td>
        <td>floor_plans</td>
        <td colspan="8"><input name="floor_plans" type="file" id="floor_plans"/>
          <img src="<?php echo $row['floor_plans'];?>" width="100" />
          <input name="oldfloor_plans" type="hidden" id="oldfloor_plans" value="<?php echo $row['floor_plans'];?>" /></td>
      </tr>
      <tr valign="top" id="bedroomshide2">
        <td>&nbsp;</td>
        <td>* Availabillity</td>
        <td colspan="8"><textarea name="availability" cols="50" rows="10" id="availability" required="required"><?php echo $row['availability'];?></textarea></td>
      </tr>
      <tr valign="top" id="bedroomshide3">
        <td>&nbsp;</td>
        <td>* Contact</td>
        <td colspan="8"><textarea name="contact" cols="50" rows="10" id="contact" required="required"><?php echo $row['contact'];?></textarea></td>
      </tr>
    </tbody>
    <tbody>
    </tbody>
    <tbody>
    </tbody>
    <tbody id="contnew">
    </tbody>
    <tbody>
      <tr valign="top"></tr>


    <tr valign="top">
      <td>&nbsp;</td>
      <td colspan="2"> 
        
        <input name="user_id" type="hidden" id="user_id" value="1" />
        <input name="id" type="hidden" id="id" value="<?php echo $row['id']; ?>" />
        <?php if (isset($_GET['proj_copy'])) { ?>
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
        <?php if (isset($_GET['proj_id'])) { ?>
          <input name="Update" type="submit" id="Update" style="width:150px; height:30px" onclick="return validatePropertyStep2();" value="Update" />
          <?php } else {?>
          <input name="copy" type="submit" id="copy" style="width:150px; height:30px" onclick="return validatePropertyStep2();" value="Copy Project" />
          <?php } ?>      </td>
    </tr>


      <tr valign="top">
        <td>&nbsp;</td>
        <td> 
         </td>
      </tr>
    </tbody>
  </table>
</form>
<?php }}?><!-- InstanceEndEditable -->
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
