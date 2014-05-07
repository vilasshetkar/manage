<?php 
include '../login/dbc.php';
page_protect();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/Template.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- InstanceBeginEditable name="doctitle" -->
    <title>Create New Module</title>
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
	$(".hide_module").hide();
	$("#module-type").change(function() {
    $("#" + this.value).show(500).siblings(".hide_module").hide()
})
});
</script>
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
		$menu = mysql_query("INSERT INTO $_SESSION[user_id]_module (`title`, `module_position`, `category`, `module_content`, `status`, `domain`, `module_function`) VALUE ('$_POST[title]','$_POST[module_position]','$_POST[category]','0,0,$_POST[menu_type]', '$_POST[status]','$_SESSION[domain]','$_POST[module_function]')") or die(mysql_error());

if($menu) echo 'Menu Module created Successfully!!';
}	?>

<?php
if(isset($_POST['cont_submit'])){
		$menu = mysql_query("INSERT INTO $_SESSION[user_id]_module (`title`, `module_position`, `category`, `module_content`, `status`, `domain`) VALUE ('$_POST[title]','$_POST[module_position]','$_POST[category]','$_POST[content]','$_POST[status]','$_SESSION[domain]')") or die(mysql_error());

if($menu) echo 'Contact Us Module created Successfully!!';
}	?>

<?php
if(isset($_POST['enq_submit'])){
		$menu = mysql_query("INSERT INTO $_SESSION[user_id]_module (`title`, `module_position`, `category`, `module_content`, `status`, `domain`, `module_function`, `module_file`) VALUE ('$_POST[title]','$_POST[module_position]','$_POST[category]','$_POST[content]','$_POST[status]','$_SESSION[domain]','$_POST[module_function]', '$_POST[module_file]')") or die(mysql_error());

if($menu) echo 'Enquiry Form Module created Successfully!!';
}	?>

<?php
if(isset($_POST['ad_submit'])){
		$menu = mysql_query("INSERT INTO $_SESSION[user_id]_module (`title`, `module_position`, `category`, `module_content`, `status`, `domain`, `module_function`, `module_file`) VALUE ('$_POST[title]','$_POST[module_position]','$_POST[category]','$_POST[ad_type],$_POST[ad_size]', '$_POST[status]', '$_SESSION[domain]', '$_POST[module_function]', '$_POST[module_file]')") or die(mysql_error());

if($menu) echo 'Advertisement Module created Successfully!!';
}	?>
<?php
if(isset($_POST['prop_submit'])){
		$menu = mysql_query("INSERT INTO $_SESSION[user_id]_module (`title`, `module_position`, `category`, `status`, `domain`, `module_function`,`module_file`) VALUE ('$_POST[title]','$_POST[module_position]','$_POST[category]', '$_POST[status]','$_SESSION[domain]','$_POST[module_function]','$_POST[module_file]')") or die(mysql_error());

	$insert_id = mysql_insert_id();
	$update = mysql_query("UPDATE $_SESSION[user_id]_module SET `module_content`= '$insert_id' WHERE id = $insert_id");

if($menu && $update) echo 'Post Your Property Module created Successfully!';
}	?>
<?php
if(isset($_POST['req_submit'])){
		$menu = mysql_query("INSERT INTO $_SESSION[user_id]_module (`title`, `module_position`, `category`, `module_content`, `status`, `domain`, `module_function`,`module_file`) VALUE ('$_POST[title]','$_POST[module_position]','$_POST[category]','".$insert_id."', '$_POST[status]','$_SESSION[domain]','$_POST[module_function]','$_POST[module_file]')") or die(mysql_error());

	$insert_id = mysql_insert_id() + 1;
	$update = mysql_query("UPDATE $_SESSION[user_id]_module SET `module_content`= '$insert_id' WHERE id = $insert_id");

if($menu && $update) echo 'Post Your Requirement Module created Successfully!';
}	?>

<table width="100%" border="0" cellpadding="0" cellspacing="0" class="border">
  <tr>
    <th width="17%" align="left" valign="top">Module Type: </th>
    <th width="83%" align="left" valign="top"><select name="module-type" id="module-type">
      <option value=" ">Select Module Type</option>
      <option value="menu">Menu</option>
      <option value="contact-us">Contact Us</option>
      <option value="enquiry">Enquiry</option>
      <option value="ad-manage">Ad Management</option>
      <option value="login" disabled="disabled">Login Form</option>
      <option value="post-property">Post Your Property</option>
      <option value="post-requirement">Post Your Requirement</option>
      </select></th>
    </tr>
  <tr class="hide_module" id="menu">
    <td align="left" valign="top"><strong>Menu:</strong></td>
    <td align="left" valign="top">
      <form id="form1" name="form1" method="post" action="">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="20%">Module Name:</td>
            <td colspan="2"><span id="sprytextfield1">
              <input type="text" name="title" id="title" />
              <span class="textfieldRequiredMsg">A value is required.</span></span></td>
            <td width="20%">Module Position:</td>
            <td><select name="module_position" id="module_position">
              <option value="Left">Left</option>
              <option value="Right">Right</option>
              <option value="Top">Top</option>
              <option value="Bottom">Bottom</option>
              <option value="Top Center">Top Center</option>
              <option value="Bottom Center">Bottom Center</option>
              </select></td>
            </tr>
          <tr>
            <td>Module Status:</td>
            <td width="15%"><input name="status" type="radio" id="status" value="1" checked="checked" />
              Publish</td>
            <td width="15%"><input type="radio" name="status" id="status2" value="0" />
              unPublish</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            </tr>
          <tr>
            <td>Menu Type:</td>
            <td colspan="2"><span id="spryselect4">
              <select name="menu_type" id="menu_type">
                <option value=" "> </option>
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
  <tr class="hide_module" id="contact-us">
    <td align="left" valign="top" ><strong>Contact Us:</strong></td>
    <td align="left" valign="top"><form id="form2" name="form1" method="post" action="">
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="20%" align="left" valign="top">Module Name:</td>
          <td colspan="2" align="left" valign="top"><span id="sprytextfield2">
            <input type="text" name="title" id="title" />
            <span class="textfieldRequiredMsg">A value is required.</span></span></td>
          <td width="20%" align="left" valign="top">Module Position:</td>
          <td align="left" valign="top"><select name="module_position" id="module_position">
            <option value="Left">Left</option>
            <option value="Right">Right</option>
            <option value="Top">Top</option>
            <option value="Bottom">Bottom</option>
            <option value="Top Center">Top Center</option>
            <option value="Bottom Center">Bottom Center</option>
            </select></td>
          </tr>
        <tr>
          <td align="left" valign="top">Module Status:</td>
          <td width="15%" align="left" valign="top"><input name="status" type="radio" id="status3" value="1" checked="checked" />
            Publish</td>
          <td width="15%" align="left" valign="top"><input type="radio" name="status" id="status4" value="0" />
            unPublish</td>
          <td align="left" valign="top">&nbsp;</td>
          <td align="left" valign="top">&nbsp;</td>
          </tr>
        <tr>
          <td align="left" valign="top"><p>Contact Details:</p>
            <p>(This detail will display on web page.)</p></td>
          <td colspan="4" align="left" valign="top"><textarea name="content" id="content" cols="45" rows="10"></textarea>
            <input name="category" type="hidden" id="category" value="Content" /></td>
          </tr>
        <tr>
          <td align="left" valign="top">&nbsp;</td>
          <td colspan="4" align="left" valign="top"><input type="submit" name="cont_submit" id="cont_submit" value="Submit" /></td>
          </tr>
        </table>
      </form></td>
    </tr>
  <tr class="hide_module" id="enquiry">
    <td align="left" valign="top" id="enquiry"><strong>Enquiry:</strong></td>
    <td align="left" valign="top"><form id="form3" name="form1" method="post" action="">
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="20%" align="left" valign="top">Module Name:</td>
          <td colspan="2" align="left" valign="top"><span id="sprytextfield3">
            <input type="text" name="title" id="title" />
            <span class="textfieldRequiredMsg">A value is required.</span></span></td>
          <td width="20%" align="left" valign="top">Module Position:</td>
          <td align="left" valign="top"><select name="module_position" id="module_position">
            <option value="Left">Left</option>
            <option value="Right">Right</option>
            <option value="Top">Top</option>
            <option value="Bottom">Bottom</option>
            <option value="Top Center">Top Center</option>
            <option value="Bottom Center">Bottom Center</option>
            </select></td>
          </tr>
        <tr>
          <td align="left" valign="top">Module Status:</td>
          <td width="15%" align="left" valign="top"><input name="status" type="radio" id="status5" value="1" checked="checked" />
            Publish</td>
          <td width="15%" align="left" valign="top"><input type="radio" name="status" id="status6" value="0" />
            unPublish</td>
          <td align="left" valign="top"><input name="module_function" type="hidden" id="module_function" value="enquiry" />
            <input name="category" type="hidden" id="category" value="Module" />
            <input name="content" type="hidden" id="content" value="web" />
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
  <tr class="hide_module" id="ad-manage">
    <td align="left" valign="top" id="ad-management"><strong>Ad Management:</strong></td>
    <td align="left" valign="top"><form id="form4" name="form1" method="post" action="">
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="20%" align="left" valign="top">Module Name:</td>
          <td colspan="2" align="left" valign="top"><span id="sprytextfield4">
            <input type="text" name="title" id="title" />
            <span class="textfieldRequiredMsg">A value is required.</span></span></td>
          <td width="20%" align="left" valign="top">Module Position:</td>
          <td align="left" valign="top"><select name="module_position" id="module_position">
            <option value="Left">Left</option>
            <option value="Right">Right</option>
            <option value="Top">Top</option>
            <option value="Bottom">Bottom</option>
            <option value="Top Center">Top Center</option>
            <option value="Bottom Center">Bottom Center</option>
            </select></td>
          </tr>
        <tr>
          <td align="left" valign="top">Module Status:</td>
          <td width="15%" align="left" valign="top"><input name="status" type="radio" id="status7" value="1" checked="checked" />
            Publish</td>
          <td width="15%" align="left" valign="top"><input type="radio" name="status" id="status8" value="0" />
            unPublish</td>
          <td align="left" valign="top">&nbsp;</td>
          <td align="left" valign="top">&nbsp;</td>
          </tr>
        <tr>
          <td align="left" valign="top"><p>Ad Type:</p></td>
          <td colspan="2" align="left" valign="top"><select name="ad_type" id="ad_type">
            <option value="Horizontal">Horizontal</option>
            <option value="Vertical">Vertical</option>
            </select></td>
          <td align="left" valign="top">Ad Size:</td>
          <td align="left" valign="top"><span id="spryselect2">
            <select name="ad_size2" class="ad_size" id="Horizontal_size">
              <option value="">Select Ad Size</option>
              <option value="200 x 100">200 x 100</option>
              <option value="300 x 100">300 x 100</option>
              <option value="500 x 100">500 x 100</option>
              <option value="800 x 100">800 x 100</option>
            </select>
            <span class="selectRequiredMsg">Please select an item.</span><span class="selectRequiredMsg">Please select an item.</span></span>
              <select name="ad_size" class="ad_size" id="Vertical_size">
                <option value="">Select Ad Size</option>
                <option value="200 x 100">200 x 100</option>
                <option value="200 x 200">200 x 200</option>
                <option value="200 x 300">200 x 300</option>
                <option value="200 x 500">200 x 500</option>
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
  <tr class="hide_module" id="login">
    <td align="left" valign="top" id="login"><strong>Login Form:</strong></td>
    <td align="left" valign="top"><form id="form5" name="form1" method="post" action="">
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="20%" align="left" valign="top">Module Name:</td>
          <td colspan="2" align="left" valign="top"><span id="sprytextfield5">
            <input type="text" name="title" id="title" />
            <span class="textfieldRequiredMsg">A value is required.</span></span></td>
          <td width="20%" align="left" valign="top">Module Position:</td>
          <td align="left" valign="top"><select name="m_position4" id="m_position4">
            <option value="Left">Left</option>
            <option value="Right">Right</option>
            <option value="Top">Top</option>
            <option value="Bottom">Bottom</option>
            <option value="Top Center">Top Center</option>
            <option value="Bottom Center">Bottom Center</option>
            </select></td>
          </tr>
        <tr>
          <td align="left" valign="top">Module Status:</td>
          <td width="15%" align="left" valign="top"><input name="status" type="radio" id="status9" value="1" checked="checked" />
            Publish</td>
          <td width="15%" align="left" valign="top"><input type="radio" name="status" id="status10" value="0" />
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
  <tr class="hide_module" id="post-property">
    <td align="left" valign="top" id="post-property"><strong>Post Your Property:</strong></td>
    <td align="left" valign="top"><form id="form6" name="form1" method="post" action="">
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="20%" align="left" valign="top">Module Name:</td>
          <td colspan="2" align="left" valign="top"><span id="sprytextfield6">
            <input type="text" name="title" id="title" />
            <span class="textfieldRequiredMsg">A value is required.</span></span></td>
          <td width="20%" align="left" valign="top">Module Position:</td>
          <td align="left" valign="top"><select name="module_position" id="module_position">
            <option value="Left">Left</option>
            <option value="Right">Right</option>
            <option value="Top">Top</option>
            <option value="Bottom">Bottom</option>
            <option value="Top Center">Top Center</option>
            <option value="Bottom Center">Bottom Center</option>
            </select></td>
          </tr>
        <tr>
          <td align="left" valign="top">Module Status:</td>
          <td width="15%" align="left" valign="top"><input name="status" type="radio" id="status11" value="1" checked="checked" />
            Publish</td>
          <td width="15%" align="left" valign="top"><input type="radio" name="status" id="status12" value="0" />
            unPublish</td>
          <td align="left" valign="top"><input name="module_function" type="hidden" id="module_function" value="post_property" />
            <input name="category" type="hidden" id="category" value="Module" />
            <input name="module_file" type="hidden" id="module_file" value="/admin/Projects/Real-Estate/post-property.php" /></td>
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
  <tr class="hide_module" id="post-requirement">
    <td align="left" valign="top" id="post-requirement"><strong>Post Your Requirement:</strong></td>
    <td align="left" valign="top"><form id="form7" name="form1" method="post" action="">
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="20%" align="left" valign="top">Module Name:</td>
          <td colspan="2" align="left" valign="top"><span id="sprytextfield7">
            <input type="text" name="title" id="title" />
            <span class="textfieldRequiredMsg">A value is required.</span></span></td>
          <td width="20%" align="left" valign="top">Module Position:</td>
          <td align="left" valign="top"><select name="module_position" id="module_position">
            <option value="Left">Left</option>
            <option value="Right">Right</option>
            <option value="Top">Top</option>
            <option value="Bottom">Bottom</option>
            <option value="Top Center">Top Center</option>
            <option value="Bottom Center">Bottom Center</option>
            </select></td>
          </tr>
        <tr>
          <td align="left" valign="top">Module Status:</td>
          <td width="15%" align="left" valign="top"><input name="status" type="radio" id="status13" value="1" checked="checked" />
            Publish</td>
          <td width="15%" align="left" valign="top"><input type="radio" name="status" id="status14" value="0" />
            unPublish</td>
          <td align="left" valign="top"><input name="module_function" type="hidden" id="module_function" value="post_requirement" />
            <input name="category" type="hidden" id="category" value="Module" />
            <input name="module_file" type="hidden" id="module_file" value="/admin/Projects/Real-Estate/post-requirement.php" /></td>
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
</table>
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
