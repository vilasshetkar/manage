<?php 
include '../login/dbc.php';
page_protect();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/Template.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- InstanceBeginEditable name="doctitle" -->
    <title>View Modules</title>
    <style type="text/css">
    .hide_module {
}
    </style>
    <!-- InstanceEndEditable -->
<link rel="stylesheet" type="text/css" href="../../css/style.css"/>
<!--*********************>> Web Editor Tiny MCE Script << **************************************************** -->
<script type="text/javascript" src="../_script/jquery-1.6.2.min.js"></script>
<script type="text/javascript" src="../tiny_mce/tiny_mce.js"></script>
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
});
});
</script>
<!-- CODE FOR UPDATE AD DATA INTO DATABASE -->
<?php 
if(isset($_GET['module_status'])){
	$ad_status = mysql_query("UPDATE `$_SESSION[user_id]_module` SET `status` = '".$_GET['module_status']."' WHERE id = ".$_GET['module_id']) or die(mysql_error());
	if($ad_status){ echo "Module status updated successfully!" ; }
	}
?>
<?php 
if(isset($_POST['order'])){
	$order = mysql_query("UPDATE `$_SESSION[user_id]_module` SET `order` = '".$_POST['order']."' WHERE id = ".$_POST['id']) or die(mysql_error());
	if($order){ echo "Module status updated successfully!" ; }
	}
?>

<!-- CODE FOR DELETE AD DATA INTO DATABASE -->
<?php 
if(isset($_GET['del_module'])){
	$ad_status = mysql_query("DELETE FROM `$_SESSION[user_id]_module` WHERE `id` = ".$_GET['del_module']) or die(mysql_error());
	if($ad_status){ echo "One record deleted successfully!"; }
	}
?>


<?php
$menu = mysql_query("SELECT * FROM $_SESSION[user_id]_module WHERE domain='$_SESSION[domain]' ORDER BY `order`") or die(mysql_error());
?>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="44%"><a href="/manage/module/new-module.php" class="nav">New Module</a></td>
    <td width="36%">&nbsp;</td>
    <td width="10%">&nbsp;</td>
    <td width="10%">&nbsp;</td>
  </tr>
</table>
    <table border="0" cellpadding="0" cellspacing="0" class="border cellborder">
      <tr>
        <th width="5%" align="left" valign="top">Sr.</th>
        <th width="28%" align="left" valign="top">Module Name</th>
        <th width="15%" align="left" valign="top">Order</th>
        <th width="19%" align="left" valign="top">Module Position</th>
        <th width="15%" align="left" valign="top">Module Status</th>
        <th width="18%" align="left" valign="top">Manage</th>
        </tr>
  <?php $i = 1;
while($mod = mysql_fetch_array($menu)) { ?>
      <tr>
        <td align="left" valign="top"><?php echo $i++ ?></td>
        <td align="left" valign="top"><?php echo $mod['title']; ?></td>
        <td align="center" valign="top">
        <input name="order" type="text" id="order<?php echo $mod['id'];?>" size="8" value="<?php echo $mod['order'];?>" onchange='$(this).blur(function(){
  txt = $("#order<?php echo $mod['id'];?>").val();
  $.post("view-module.php",{order:txt, id:<?php echo $mod['id'];?> },function(data,status){
    alert(status);
  });
});' />
        </td>
        <td align="left" valign="top"><?php echo $mod['module_position'];?></td>
        <td align="left" valign="top"><?php if($mod['status']==1) echo 'Published'; else echo 'Unpublished'; ?>
          <br />
          <?php if($mod['status']==0) echo '<a href="?module_status=1&amp;module_id='. $mod['id'].'" onclick="confirmation()">Set Publish</a>'; else echo '<a href="?module_status=0&amp;module_id='. $mod['id'].'" >Set unPublish</a>'; ?></td>
        <td align="left" valign="top">
          <a href="edit-module.php?edit=<?php echo $mod['id'];?>" title="Edit this Module">
            Edit Module
            </a>
            <br />
			<a href="?del_module=<?php echo $mod['id']; ?>" onclick="confirmation()">Delete</a><br />
            
          </td>
        </tr>
  <?php } ?>
    </table>
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
