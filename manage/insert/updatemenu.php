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
<!-- ************>>> This script is used for ajax // Getting data from database with function.php <<**************** -->
<script type="text/javascript" src="../_script/jquery.js"></script>
</script>
<script type="text/javascript">
$(document).ready(function(){
  $("#category").change(function(){
    $.post("functions.php",
    {
  		getlink: $(this).val()
	 },
    function(data){
       $("#link").html(data).show();
    });
  });

  $("#menu_type").change(function(){
	$.post("functions.php",
    {
  		MT: $(this).val()
	 },
    function(data){
       $("#parent").html(data).show();
    });
  });

});
</script>



<!-- ************>>> END OF this script is used for ajax // Getting data from database with function.php <<************ -->
<!-- TemplateParam name="class" type="text" value="content" -->
<?php
// ******************** MENU UPDATE CODE *************************************************************************
if (isset($_POST['insert'])=="editmenu") {
//  $id = $_GET['ID'];

$sql="UPDATE $_SESSION[user_id]_menu SET menu_name='$_POST[menu_name]', link='$_POST[link]', parent=$_POST[parent], menu_type='$_POST[menu_type]', category='$_POST[category]' WHERE id=".$_POST['id'];
if (!mysql_query($sql))
  {
  die('Error: ' . mysql_error());
  }
echo "<h1 align='center'>1 record Updated</h1>";
echo '<script type="text/javascript">window.history.go(-2);</script>';

}
?>


<div class="content">
<!-- ************Edit Menu Function ************************************************************************************ -->
<?php
  if (isset($_GET['UID'])){
?>
<form action="" method="post" name="form2" id="form2">
  <table align="center" class="border">
    <tr valign="baseline">
      <th colspan="3" align="left" nowrap="nowrap">Edit Menu:</th>
      </tr>
    <tr valign="baseline">
      <td width="28%" align="right" nowrap="nowrap">Menu Name:</td>
      <td colspan="2">
      <?php 
$result= mysql_query("SELECT * FROM `$_SESSION[user_id]_menu` WHERE id=".$_GET['UID']);
while ($row=mysql_fetch_assoc($result)){  
?>
<input type="text" name="menu_name" value="<?php echo $row['menu_name']; ?>" size="32" />
<?php } ?>

</td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Category:</td>
      <td width="30%"><select name="category" id="category" style="width:200px">
        <option  value="HOME">Home</option>
		<option  value="ALL">All Category</option>
<?php 
$category= mysql_query("SELECT * FROM `$_SESSION[user_id]_category` WHERE domain=$_SESSION[domain]");
while ($cat_row = mysql_fetch_array($category)) {  
?>
        <option value="<?php echo $cat_row['id']?>" <?php if($cat_row['id']==$_GET['CAT']){echo 'SELECTED';}?> ><?php echo $cat_row['category_name']?></option>
        <?php }  ?>
  			    <option style="background-color: #CCC" disabled="disabled" value=""> >>>> Real Estate <<<< </option>
                <option value="Property" <?php if($_GET['CAT']=='Property'){echo 'SELECTED';}?>>Property</option>
                <option value="Project" <?php if($_GET['CAT']=='Project'){echo 'SELECTED';}?>>Project</option>
  			    <option style="background-color: #CCC" disabled="disabled" value=""> >>>> Module <<<< </option>
                <option value="Module" <?php if($_GET['CAT']=='Module'){echo 'SELECTED';}?>>Module</option>
      </select></td>
      <td width="42%">Link:
		<select name="link" id="link" style="width:200px">
<?php
if(isset($_GET['CAT'])){
	$table = $_SESSION['user_id'].'_content'; // select table for link
	$link_var = '?AID=';
	$where = 'WHERE status = "1" AND domain='.$_SESSION['domain'];
	if($_GET['CAT']=="Property"){ 
		$table = $_SESSION['user_id'].'_real_property';
		$link_var = '?r_prop=';
		$where = 'WHERE status = "1" AND domain='.$_SESSION['domain'].' || domain LIKE "%'.$_SESSION['domain'].'%"';
	}
	elseif($_GET['CAT']=="Project"){ 
		$table = $_SESSION['user_id'].'_real_project';
		$link_var = '?r_proj=';
	}
	elseif($_GET['CAT']=="Module"){ 
		$table = $_SESSION['user_id'].'_module';
		$link_var = '?MOD=';
		$where = 'WHERE status = "1" AND `category` ="'.$_GET['CAT'].'" AND domain='.$_SESSION['domain'];
	}
	elseif($_GET['CAT']!="ALL"){ 
		$table = $_SESSION['user_id'].'_content';
		$link_var = '?AID=';
		$where = 'WHERE status = "1" AND `category` ="'.$_GET['CAT'].'" AND domain='.$_SESSION['domain'];
	}

	?>
<option value="?CAT=<?php echo $_GET['CAT'];?>" ><?php if($_GET['CAT']=='HOME'){ echo 'Home'; }else{ echo 'All';} ?></option>
<?php $category = mysql_query("SELECT category, COUNT(*) FROM `$table` $where GROUP BY `category`") or die('Group Error: '.mysql_error());
		while($group = mysql_fetch_array($category)){ ?>
<option style="background-color: #CCC; width:180px" value="" disabled="disabled"><?php echo $group[0]; ?></option>
	<?php $subgroup = mysql_query("SELECT * FROM `$table` WHERE status='1' AND domain=".$_SESSION['domain']." AND `category`='".$group[0]."'") or die('Object Error: '.mysql_error());
			while($object = mysql_fetch_array($subgroup)){ ?>
<option value="<?php echo $link_var.$object['id'];?>" <?php if(($link_var.$object['id'])==$_GET['LINK'])echo 'SELECTED';?>><?php echo substr($object['title'],0,40);?></option>
            
<?php }}} ?>
        </select>
      </td>
    </tr>
        <tr> 
          <td nowrap="nowrap" align="right">Menu Type:</td>
          
          <td colspan="2">
            <select name="menu_type" id="menu_type" style="width:200px">
              <?php 
$result= mysql_query("SELECT * FROM `$_SESSION[user_id]_menu_type` WHERE domain=$_SESSION[domain]");

while ($row_menu = mysql_fetch_assoc($result)){  
?>
              <option value="<?php echo $row_menu['menu_type']?>" <?php if ($row_menu['menu_type']==$_GET['MT']){ echo 'selected="selected"'; } ?> ><?php echo $row_menu['menu_type']?></option>
              <?php } ?>
              
              </select></td>
        </tr>
        <tr valign="baseline">
          <td nowrap="nowrap" align="right">Parent:</td>
          <td colspan="2"><select name="parent" id="parent" style="width:200px">
<?php 
if(isset($_GET['MT'])){
$result= mysql_query("SELECT * FROM `$_SESSION[user_id]_menu` WHERE menu_type='".$_GET['MT']."' AND domain=$_SESSION[domain]")or die(mysql_error());
?>            <option value="0"> </option>
<?php
while ($row_menu = mysql_fetch_assoc($result)){  
?>
            <option value="<?php echo $row_menu['id']?>" <?php if ($row_menu['id']==$_GET['PARENT']){ echo 'selected="selected"'; } ?>><?php echo $row_menu['menu_name']?></option>
            <?php } } ?>
          </select></td>
        </tr>

    <tr valign="baseline">
      <td nowrap="nowrap" align="right">&nbsp;</td>
      <td colspan="2"><input type="submit" value="Update record" /></td>
    </tr>
  </table>
  <input type="hidden" name="insert" value="editmenu" />
        <?php 
$result= mysql_query("SELECT * FROM `$_SESSION[user_id]_menu` WHERE id=".$_GET['UID']);

while ($row_menu = mysql_fetch_assoc($result)){  
?>

  <input type="hidden" name="id" value="<?php echo $row_menu['id']; ?>" />
<?php } ?>

</form>
<?php } ?>
<!-- ************ Update Menu Function ********************************************************************************** -->



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
