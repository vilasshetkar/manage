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
<link rel="stylesheet" type="text/css" href="../../css/style.css"/>
<!--*********************>> Web Editor Tiny MCE Script << **************************************************** -->
<script type="text/javascript" src="../_script/jquery-1.6.2.min.js"></script>
<script type="text/javascript" src="../tiny_mce/tiny_mce.js"></script>
<script type="text/javascript">
tinyMCE.init({
        // General options
        mode : "exact",
        elements : "content,amenities,specifications,availability,contact,overview,location_map, layout_map, floor_plans",
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
    <script src="/manage/_script/Spray/SpryValidationSelect.js" type="text/javascript"></script>
    <script src="/manage/_script/Spray/SpryValidationTextField.js" type="text/javascript"></script>
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
 	 <a href="../select-site.php" title="Click to Chang Editing Site!"><?php echo $row['domain']; ?></a>
	<?php }}?>
	</h1>
    </div>
    <table width="100%" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="100%" align="center" valign="top"><div class="mainbar">
          <ul class="mainmenu">
            <li><a href="../Projects/Real-Estate/responses.php">My Responses</a>
              <ul>
                <li><a href="../Projects/Real-Estate/responses.php?respo_for=property">Property Sale/Rent Out</a></li>
                <li><a href="../Projects/Real-Estate/responses.php?respo_for=web">Website Queries</a></li>
                <li><a href="../Projects/Real-Estate/responses.php?respo_for=project">Projects Inquiry</a></li>
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
                <li><a href="../login/logout.php">Logout</a></li>
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
