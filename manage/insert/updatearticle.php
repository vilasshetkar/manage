 <?php 
include '../login/dbc.php';
page_protect();
?>
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/Template.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- InstanceBeginEditable name="doctitle" -->
    <title>Welcome to Administration</title>
    
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
<?php // ******************** ARTICLE UPDATE CODE *************************************************************************
if (isset($_POST['insert'])=="editarticle") {
//  $id = $_GET['ID'];

$sql="UPDATE $_SESSION[user_id]_content SET title='$_POST[title]', metakeyword='$_POST[metakeyword]', metadescription='$_POST[metadescription]', category=$_POST[category], author='$_POST[author]', created='$_POST[created]', status='$_POST[status]', content='$_POST[content]', `featured`='$_POST[featured]' WHERE id='$_POST[id]'";
if (!mysql_query($sql))
  {
  die('Error: ' . mysql_error());
  }
echo "<h1 align='center'>1 record Updated</h1>";
echo '<script type="text/javascript">window.history.go(-2);</script>';

}

?>


<!-- TemplateParam name="class" type="text" value="content" -->


<div class="content">
  <!-- ************ New Article Function ********************************************************************************* -->
<?php if (isset($_GET['UAID'])) { ?>

  <form action="" method="post" name="form4" id="form4">
    <table align="center" class="border">
      <tr valign="baseline">
        <th colspan="4" align="left" nowrap="nowrap">Edit Article:</th>
      </tr>
      <tr valign="baseline">
        <td width="21%" align="right" nowrap="nowrap">Category:</td>
        <td colspan="3"><select name="category" id="category" style="width:180px">
          <option value="0">No Category</option>
<?php $result= mysql_query("SELECT * FROM `$_SESSION[user_id]_category` WHERE domain=$_SESSION[domain]");
while ($row_menu = mysql_fetch_assoc($result)){  ?>
          <option value="<?php echo $row_menu['id']; ?>" <?php if ($row_menu['id']==$_GET['CAT']){ echo "SELECTED";} ?>><?php echo $row_menu['category_name'];?></option>
          <?php
}
?>
        </select></td>
      </tr>
      <tr valign="baseline">
        <td nowrap="nowrap" align="right">Title:</td>
        <td colspan="3"><?php
$ucontent= mysql_query("SELECT * FROM `$_SESSION[user_id]_content` WHERE id=".$_GET['UAID']);
     while ($row_editarticle = mysql_fetch_assoc($ucontent)){  
?>
          <input type="text" name="title" value="<?php echo $row_editarticle['title'];?>" size="70" /></td>
        </tr>
      <tr valign="baseline">
        <td nowrap="nowrap" align="right" valign="top">Metakeyword:</td>
        <td colspan="3"><textarea name="metakeyword" cols="70" rows="2"><?php echo $row_editarticle['metakeyword']?></textarea></td>
        </tr>
      <tr valign="baseline">
        <td nowrap="nowrap" align="right" valign="top">Metadescription:</td>
        <td colspan="3"><textarea name="metadescription" cols="70" rows="2"><?php echo $row_editarticle['metadescription'] ?></textarea></td>
        </tr>
      <tr valign="baseline">
        <td nowrap="nowrap" align="right">Author:</td>
        <td colspan="3"><input type="text" name="author" value="<?php echo $row_editarticle['author'] ?>" size="32" /></td>
        </tr>
      <tr valign="baseline">
        <td nowrap="nowrap" align="right">Created:</td>
        <td colspan="3"><input type="text" name="created" size="32" value="<?php echo $row_editarticle['created'] ?>" id="created"/>
          <p></p>
		</td>
        </tr>
      <tr valign="baseline">
        <td nowrap="nowrap" align="right">Publish:</td>
        <td width="23%" valign="baseline"><table>
          <tr>
            <td><input type="radio" name="status" value="1" <?php if ($row_editarticle['status']==1) {echo "checked=\"checked\"";} ?> />
              Publish</td>
            </tr>
          <tr>
            <td><input type="radio" name="status" value="0" <?php if ($row_editarticle['status']==0) {echo "checked=\"checked\"";} ?> />
              Unpublish</td>
            </tr>
        </table></td>
        <td width="14%" align="left" valign="top">Featured:</td>
        <td width="42%" align="left" valign="top"><table>
          <tr>
            <td><input type="radio" name="featured" value="1" <?php if ($row_editarticle['featured']==1) {echo "checked=\"checked\"";} ?> />
              Featured</td>
          </tr>
          <tr>
            <td><input type="radio" name="featured" value="0" <?php if ($row_editarticle['featured']==0) {echo "checked=\"checked\"";} ?> />
              Not Featured</td>
          </tr>
        </table></td>
        </tr>
      <tr valign="baseline">
        <td nowrap="nowrap" align="right" valign="top">Content:</td>
        <td colspan="3"><textarea name="content" cols="70" rows="30" id="upcontent"><?php echo $row_editarticle['content']; ?></textarea>
          <script language="javascript" type="text/javascript">
  generate_wysiwyg('upcontent');
  </script></td>
        </tr>
      <tr valign="baseline">
        <td nowrap="nowrap" align="right">&nbsp;</td>
        <td colspan="3"><input type="submit" value="Update record" /></td>
        </tr>
      </table>
    <input type="hidden" name="insert" value="editarticle" />
    <input type="hidden" name="id" value="<?php echo $row_editarticle['id']; ?>" />
  </form>
  <?php }} ?>
  
  <!-- ************ Edit Article Function ********************************************************************************* -->
  
  
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
