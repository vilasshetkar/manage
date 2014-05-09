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
    <link href="../../../SpryAssets/SpryTabbedPanels.css" rel="stylesheet" type="text/css" />
    <!-- InstanceEndEditable -->
<link rel="stylesheet" type="text/css" href="../../../css/style.css"/>
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
        theme_advanced_buttons1 : "bold,italic,underline,strikethrough,|,sub,sup,|,justifyleft,justifycenter,justifyright,justifyfull,|,styleselect,formatselect,fontselect,fontsizeselect",
        theme_advanced_buttons2 : "forecolor,backcolor,|,cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,|,image,media,code,template",
        theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,|,fullscreen,|,styleprops,spellchecker,|,attribs,|,pagebreak,|,insertfile,insertimage",
        theme_advanced_toolbar_location : "top",
        theme_advanced_toolbar_align : "left",
        theme_advanced_statusbar_location : "bottom",
        theme_advanced_resizing : true,

		width : "95%",
		height : "400px",

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
function filebrowser(field_name, url, type, win) {
    
    fileBrowserURL = "/manage/tiny_mce/pdw_file_browser/index.php?editor=tinymce&filter=" + type;
      
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
    <!-- InstanceBeginEditable name="head" -->
    <script src="../../../SpryAssets/SpryTabbedPanels.js" type="text/javascript"></script>
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


<script type="text/javascript">
tinyMCE.init({
        // General options
        mode : "exact",
        elements : "location_map, layout_map, floor_plans,logo",
        theme : "advanced",
		convert_urls: false,
        plugins : "autolink,lists,spellchecker,pagebreak,style,layer,save,table,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template",
		
		file_browser_callback : "filebrowser",
		

        // Theme options
        //theme_advanced_buttons2 : "bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,|,styleselect,formatselect,fontselect,fontsizeselect",
		
        theme_advanced_buttons1 : "image,media,code,template,|,fullscreen",
        theme_advanced_buttons2 : "",
        theme_advanced_buttons3 : "",

		
        theme_advanced_toolbar_location : "top",
        theme_advanced_toolbar_align : "left",
        theme_advanced_statusbar_location : "bottom",
        theme_advanced_resizing : true,
		width : "95%",
		height : "400px",

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

function filebrowser(field_name, url, type, win) {
    
    fileBrowserURL = "/manage/tiny_mce/pdw_file_browser/index.php?editor=tinymce&filter=" + type;
      
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

$(document).ready(function(e) {
    var cont = $("#location_map, #layout_map, #floor_plans");
	if(cont.html() == ""){
		//alert("empty");
		$.get("/manage/tiny_mce/lists/templates/layout.html", function(content) {
			cont.html(content);
		});
		
	}
});


</script>


<?php 

// Insert Project Image
if(isset($_FILES['proj_img'])){
    $errors= array();
	//foreach($_FILES['proj_img']['tmp_name'] as $key => $tmp_name ){
		$file_name = $_FILES['proj_img']['name'];
		$file_size =$_FILES['proj_img']['size'];
		$file_tmp =$_FILES['proj_img']['tmp_name'];
		$file_type=$_FILES['proj_img']['type'];
        if($file_size > 2097152){
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
				echo "Property not updated properly due to errors!";
				
        }
	if(empty($errors)){
		echo "Files uploaded Successfully ";
		$proj_img = "http://".$_SERVER['HTTP_HOST']."/".$desired_dir."/".$file_name;
	}
}




// Add Project Script
if(isset($_POST['insert'])=='addproject' && empty($errors)){
	?>
<?php
$otherDomain = implode(',', $_POST['other_domain']);

$sql = mysql_query("INSERT INTO `$_SESSION[user_id]_real_project` (
`title`,
`browsertitle`,
`metakey`,
`metadesc`,
`project_by`,
`featured`,
`category`,
`type`,
`location`,
`overview`,
proj_img,
`amenities`,
`specifications`,
`location_map`,
`layout_map`,
`floor_plans`,
`availability`,
`contact`,
`logo`,
`domain`)

VALUES (

'$_POST[title]',
'$_POST[browsertitle]',
'$_POST[metakey]',
'$_POST[metadesc]',
'$_POST[project_by]',
'$_POST[featured]',
'$_POST[category]',
'$_POST[type]',
'$_POST[location]',
'".str_replace("'","\'",$_POST['overview'])."',
'$proj_img',
'".str_replace("'","\'",$_POST['amenities'])."',
'".str_replace("'","\'",$_POST['specifications'])."',
'".str_replace("'","\'",$_POST['location_map'])."',
'".str_replace("'","\'",$_POST['layout_map'])."',
'".str_replace("'","\'",$_POST['floor_plans'])."',
'".str_replace("'","\'",$_POST['availability'])."',
'".str_replace("'","\'",$_POST['contact'])."',
'".str_replace("'","\'",$_POST['logo'])."',
'$otherDomain')");

if(!$sql){
	echo 'Error: '.mysql_error();
	}
	else{
		echo '1 Project Added Sucessfully!';
		$prop_id = mysql_insert_id();
		}}
?>









<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
<table class="border">
  <tbody>
      <tr valign="top">
        <td colspan="10"><h1>Project info:</h1></td>
        </tr>
      <tr valign="top">
        <td width="1%">&nbsp;</td>
        <td width="21%">* Project Title</td>
        <td width="66" colspan="8"><textarea required="required" name="title" cols="70" id="title"></textarea></td>
        </tr>
      <tr valign="top">
        <td>&nbsp;</td>
        <td>* Browser Title</td>
        <td colspan="8"><textarea name="browsertitle" cols="70" id="browsertitle"><?php echo $row['title']; ?></textarea></td>
        </tr>
      <tr valign="top">
        <td id="text_landarea_id2">&nbsp;</td>
        <td id="text_landarea_id2">Meta Keywords</td>
        <td colspan="8"><textarea name="metakey" cols="70" rows="4" id="metakey" required="required"></textarea></td>
        </tr>
      <tr valign="top">
        <td id="text_landarea_id3">&nbsp;</td>
        <td id="text_landarea_id3">Meta Description</td>
        <td colspan="8"><textarea name="metadesc" cols="70" rows="4" id="overview3" required="required"></textarea></td>
        </tr>
      <tr valign="top">
        <td id="text_cat_id_id2">&nbsp;</td>
        <td id="text_cat_id_id2">* Featured</td>
        <td colspan="8"><input name="featured" id="featured" type="radio" value="1"  />
          Yes 
          <input name="featured" type="radio" id="featured" value="0" checked="checked" />
          No </td>
        </tr>
      <tr valign="top">
        <td id="text_cat_id_id">&nbsp;</td>
        <td id="text_cat_id_id">* Category</td>
        <td colspan="8"><select name="category" id="category" >
          <option value="">Select Category</option>
          <option value="Residential Property">Residential Property</option>
          <option value="Commercial Property">Commercial Property</option>
          <option value="Agricultural land">Agricultural land</option>
          <option value="Industrial Property">Industrial Property</option>
          </select></td>
        </tr>
      <tr valign="top" id="subcatdisplay">
        <td id="text_sub_cat_id">&nbsp;</td>
        <td id="text_sub_cat_id">* Project Type</td>
        <td colspan="8"><input name="type" id="type" value="" required="required" /></td>
        </tr>
      <tr valign="top">
        <td id="text_area_id">&nbsp;</td>
        <td id="text_area_id">* Location</td>
        <td colspan="8"><input name="location" type="text" id="location" value="" required="required"/></td>
        </tr>
      <tr valign="top">
        <td id="text_landarea_id">&nbsp;</td>
        <td id="text_landarea_id">* Overview</td>
        <td colspan="8"><textarea name="overview" cols="50" rows="4" id="overview" required="required"></textarea></td>
        </tr>
      <tr valign="top">
        <td>&nbsp;</td>
        <td>* Project Image</td>
        <td colspan="8">
          <input name="proj_img" type="file" required="required" id="proj_img"/>
          <input type="hidden" name="dir" value="../../upload/uploaded-files" />
          <input type="hidden" name="path" value="/admin/upload/uploaded-files" />
          <input type="hidden" name="file_for" value="<?php echo "proj-".$_GET['proj_floor_plans']."-floor_plans"; ?>" /></td>
        </tr>
      <tr valign="top">
        <td>&nbsp;</td>
        <td>* Project Logo</td>
        <td colspan="8"><textarea name="logo" id="logo" cols="50" rows="5" ></textarea></td>
      </tr>
      <tr valign="top">
        <td>&nbsp;</td>
        <td>* Project By</td>
        <td colspan="8"><input name="project_by" id="project_by" value="" required="required" /></td>
        </tr>
      <tr valign="top">
        <td>&nbsp;</td>
        <td>* Amenities/Features</td>
        <td colspan="8"><textarea required="required" name="amenities" cols="50" rows="4" id="amenities" ></textarea></td>
        </tr>
      <tr valign="top" id="bedroomshide">
        <td>&nbsp;</td>
        <td>* Specifications</td>
        <td colspan="8"><textarea name="specifications" cols="50" rows="10" id="specifications" required="required"></textarea></td>
        </tr>
      <tr valign="top">
        <td>&nbsp;</td>
        <td>Location Map</td>
        <td colspan="8"><textarea name="location_map" id="location_map" cols="50" rows="10" ></textarea>
        </td>
        </tr>
      <tr valign="top">
        <td>&nbsp;</td>
        <td>layout_map</td>
        <td colspan="8"><textarea name="layout_map" id="layout_map" cols="50" rows="10" ></textarea>
        </td>
        </tr>
      <tr valign="top">
        <td>&nbsp;</td>
        <td>floor_plans</td>
        <td colspan="8"><textarea name="floor_plans" id="floor_plans" cols="50" rows="10" ></textarea></td>
        </tr>
      <tr valign="top" id="bedroomshide2">
        <td>&nbsp;</td>
        <td>* Availabillity</td>
        <td colspan="8"><textarea name="availability" cols="50" rows="10" id="availability" required="required"></textarea></td>
        </tr>
      <tr valign="top" id="bedroomshide3">
        <td>&nbsp;</td>
        <td>* Contact</td>
        <td colspan="8"><textarea name="contact" cols="50" rows="10" id="specifications3" required="required"></textarea></td>
        </tr>
      </tbody>
    <tbody>
      </tbody>
    <tbody>
      </tbody>
    <tbody id="contnew">
      </tbody>
    <tbody>
      <tr valign="top">
        <td colspan="3"><h1>Select Sites:</h1></td>
        </tr>
      <tr valign="top">
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td colspan="8">
          <table width="98%" border="1" bordercolor="#CCCCCC">
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
          <input name="user_id" type="hidden" id="user_id" value="<?php echo $_SESSION['user_id']; ?>" />
          <input name="insert" type="hidden" id="insert" value="addproject" /></td>
        <td colspan="8"><input name="submit" type="submit" id="submit" style="width:150px; height:30px" value="Submit" onclick="tinyMCE.triggerSave();" /></td>
        </tr>
      </tbody>
  </table>
</form>
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
