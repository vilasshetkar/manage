<?php 
include '../../login/dbc.php';
page_protect();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/Template.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- InstanceBeginEditable name="doctitle" -->
    <title>Create New Ad</title>
    <link href="/manage/_script/Spray/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
    <link href="/manage/_script/Spray/SpryValidationSelect.css" rel="stylesheet" type="text/css" />
    <link href="/manage/_script/Spray/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
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
    <script src="/manage/_script/Spray/SpryValidationTextField.js" type="text/javascript"></script>
    <script src="/manage/_script/Spray/SpryValidationSelect.js" type="text/javascript"></script>
    <script src="/manage/_script/Spray/SpryValidationTextarea.js" type="text/javascript"></script>
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
            <li><a href="../../Projects/Real-Estate/responses.php">My Responses</a>
              <ul>
                <li><a href="../../Projects/Real-Estate/responses.php?respo_for=property">Property Sale/Rent Out</a></li>
                <li><a href="../../Projects/Real-Estate/responses.php?respo_for=web">Website Queries</a></li>
                <li><a href="../../Projects/Real-Estate/responses.php?respo_for=project">Projects Inquiry</a></li>
              </ul>
            </li>
            <li><a href="#">My Property</a>
              <ul>
                <li><a href="../../Projects/Real-Estate/addproperty.php">Add Property</a></li>
                <li><a href="../../Projects/Real-Estate/viewproperty.php">View Property</a></li>
                <li><a href="../../Projects/Real-Estate/addproject.php">Add Project</a></li>
                <li><a href="../../Projects/Real-Estate/viewproject.php">Manage Projects</a></li>
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
<!-- CODE FOR INSERT AD DATA INTO DATABASE -->
<script type="text/javascript">
$(document).ready(function(){
	$("#Horizontal_size").hide();
	$("#ad_type").change(function() {
    $("#" + this.value + "_size").show().siblings(".ad_size").hide()
})
});
</script>

<?php
if(isset($_POST['ad_name'])){
	$sql = mysql_query("INSERT INTO `ads`(`ad_name`, `ad_type`, `ad_size`, `ad_content`, `ad_link`, `domain`, `user`, `status`) VALUES ('$_POST[ad_name]', '$_POST[ad_type]', '$_POST[ad_size]', '".$_POST['content']."', '$_POST[ad_link]', $_SESSION[domain], $_SESSION[user_id], '$_POST[status]')") or die(mysql_error());
	if($sql){
		$msg = '<h2><font color="#990000">One advertisement has added successfully!</font></h2>';
		echo $msg;
		}
}
?>
<?php if(!isset($msg)){ ?>
<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <table border="0" cellpadding="0" cellspacing="0" class="border cellborder">
    <tr>
      <td colspan="5"><h1>Create New Advertisement:</h1></td>
      </tr>
    <tr>
      <td align="left" valign="top">Ad Name:</td>
      <td colspan="4" align="left" valign="top"><span id="sprytextfield1">
        <input name="ad_name" type="text" id="ad_name" size="40" />
        <span class="textfieldRequiredMsg">A value is required.</span></span></td>
    </tr>
    <tr>
      <td align="left" valign="top">Status:</td>
      <td colspan="4" align="left" valign="top"><input name="status" type="radio" id="Publish" value="1" checked="checked" />
        Publish 
          <input type="radio" name="status" id="Publish2" value="0" />
UnPublish</td>
    </tr>
    <tr>
      <td align="left" valign="top">Ad Type:</td>
      <td colspan="4" align="left" valign="top"><span id="spryselect1">
        <select name="ad_type" id="ad_type">
<option value="Vertical">Vertical</option>
<option value="Horizontal">Horizontal</option>
        </select>
        <span class="selectRequiredMsg">Please select an item.</span></span></td>
    </tr>
    <tr>
      <td width="15%" align="left" valign="top"><p>Ad Size:</p></td>
      <td colspan="4" align="left" valign="top"><select name="ad_size" class="ad_size" id="Horizontal_size">
        <option value="">Select Ad Size</option>
        <option value="200 x 100">200 x 100</option>
        <option value="300 x 100">300 x 100</option>
        <option value="500 x 100">500 x 100</option>
        <option value="800 x 100">800 x 100</option>
      </select>
        <select name="ad_size" class="ad_size" id="Vertical_size">
        <option value="">Select Ad Size</option>
          <option value="200 x 100">200 x 100</option>
          <option value="200 x 200">200 x 200</option>
          <option value="200 x 300">200 x 300</option>
          <option value="200 x 500">200 x 500</option>
      </select></td>
    </tr>
    <tr>
      <td align="left" valign="top"><p>Ad Body:</p>
        <p>(In ad body insert image/flash through media upload OR Put text with proper formate.)</p></td>
      <td colspan="4" align="left" valign="top"><span id="ad-text">
        <textarea name="content" id="content" cols="60" rows="20"></textarea>
        </td>
    </tr>
    <tr>
      <td align="left" valign="top">Ad Link:</td>
      <td colspan="4" align="left" valign="top"><span id="sprytextfield3">
        <span id="sprytextfield3">
        <input name="ad_link" type="text" id="ad_link" size="40" />
        <span class="textfieldRequiredMsg">A value is required.</span></span> (Type here your ads redirect link.)</td>
    </tr>
    <tr>
      <td align="left" valign="top">&nbsp;</td>
      <td colspan="4" align="left" valign="top"><input type="submit" name="submit" id="submit" value="Submit" /></td>
    </tr>
  </table>
</form>
<?php } ?>
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "none", {validateOn:["blur"]});
var spryselect1 = new Spry.Widget.ValidationSelect("spryselect1", {validateOn:["blur"]});
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3", "none", {validateOn:["blur"]});
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
