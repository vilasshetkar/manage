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
    .content #menutbl tr th .nav {
	background-color: #FCF;
	display: block;
	width: 100px;
	float: left;
}
</style>
<link href="../../_script/Spray/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
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
<!-- ************>>> This script is used for ajax // Getting data from database with function.php <<**************** -->
<script type="text/javascript" src="../../_script/jquery.js"></script>
<!-- ************>>> This script is used to set Featured Property <<**************** -->

<?php
if(isset($_GET['featured'])){

$sql = mysql_query("UPDATE `$_SESSION[user_id]_real_responses` SET `featured` = '$_GET[featured]' WHERE `id` = $_GET[id]") or die(mysql_error());
if(!$sql){
echo '<script type="text/javascript">window.history.go(-1);</script>';
}}?>

<!-- ************>>> This script is used to set Delete Status of Response <<**************** -->

<?php
if(isset($_GET['respo_del'])){

$sql = mysql_query("UPDATE `$_SESSION[user_id]_real_response` SET `status` = 'Delete' WHERE `id` = '$_GET[respo_del]'") or die(mysql_error());
if($sql){
echo '<script type="text/javascript">window.history.go(-1)</script>';
}
}?>

<!-- ************>>> This script is used to set Delete Status of Response <<**************** -->

<?php
if(isset($_GET['respo_act'])){

$sql = mysql_query("UPDATE `$_SESSION[user_id]_real_response` SET `status` = 'Active' WHERE `id` = '$_GET[respo_act]'") or die(mysql_error());
echo '<script type="text/javascript">window.history.go(-1);</script>';
}?>
<!-- ************>>> This script is used to set Read Status of Response <<**************** -->

<?php
if(isset($_GET['mk_read'])){

$sql = mysql_query("UPDATE `$_SESSION[user_id]_real_response` SET `status` = 'Read' WHERE `id` = '$_GET[mk_read]'") or die(mysql_error());
}?>

<!-- ************>>> This script is used to set Reply Status of Response <<**************** -->

<?php
if(isset($_POST['reply'])){

$sql = mysql_query("UPDATE `$_SESSION[user_id]_real_response` SET `reply` = 'Yes', reply_msg='$_POST[reply_msg]' WHERE `id` = '$_POST[msg_id]'") or die(mysql_error());
echo '<script type="text/javascript">window.history.go(-3),location.reload();</script>';

$ml = mail($_POST['to'],$_POST['subject'],$_POST['reply_msg'],"From: ".$_POST['from']);
if($ml){
	echo 'Mail has sent to: '.$_POST['to'].'.';
	}


}?>


<div class="content">
<!-- ************ View Messages Function ************************************************************************************ -->
<?php 
$condition='respo_for="web"';
if(isset($_GET['respo_for'])){
	if(isset($_GET['status'])){
		$condition=' respo_for="'.$_GET['respo_for'].'" AND status="'.$_GET['status'].'"';
	}
	else {
			$condition=' respo_for="'.$_GET['respo_for'].'" AND status !="Delete"';

		}
	}
$result = mysql_query("SELECT * FROM `$_SESSION[user_id]_real_response` WHERE ".$condition." ORDER BY `id` DESC");
if(!$result){
	echo 'Error: '.mysql_error();
	}
?>
  <table border="0" cellspacing="5" class="cellborder">
    <tr>
      <td align="right"><a href="?respo_for=web" class="nav">Web Response</a></td>
      <td align="right"><a href="?respo_for=property" class="nav">Property Response</a></td>
      <td align="right"><a href="?respo_for=project" class="nav">Project Response</a></td>
      </tr>
    </table>
  <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0" class="border"  id="menutbl">
    <tr>
  <?php if (isset($_GET['respo_for'])) { ?>
  <?php	if ($_GET['respo_for']=='property') { ?>
      <td colspan="6"><table border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td><a href="?respo_for=property" class="nav">All</a></td>
          <td><a href="?respo_for=property&amp;status=New" class="nav">New</a></td>
          <td><a href="?respo_for=property&amp;status=Read" class="nav">Read</a></td>
          <td><a href="?respo_for=property&amp;status=Delete" class="nav">Delete</a></td>
          </tr>
        </table></td>
  <?php }?>
  <?php	if ($_GET['respo_for']=='project') { ?>
      <td colspan="6">
        <table border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><a href="?respo_for=project" class="nav">All</a></td>
            <td><a href="?respo_for=project&amp;status=New" class="nav">New</a></td>
            <td><a href="?respo_for=project&amp;status=Read" class="nav">Read</a></td>
            <td><a href="?respo_for=project&amp;status=Delete" class="nav">Delete</a></td>
            </tr>
          </table></td>
  <?php }?>
  <?php	if ($_GET['respo_for']=='web') { ?>
      <td colspan="6">
        <table border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><a href="?respo_for=web" class="nav">All</a></td>
            <td><a href="?respo_for=web&amp;status=New" class="nav">New</a></td>
            <td><a href="?respo_for=web&amp;status=Read" class="nav">Read</a></td>
            <td> <a href="?respo_for=web&amp;status=Delete" class="nav">Delete</a></td>
            </tr>
          </table></td>
  <?php }?>
  <?php } else {?>
  <?php   ?>
      <td colspan="6">
        <table border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><a href="?respo_for=web" class="nav">All</a></td>
            <td><a href="?respo_for=web&amp;status=New" class="nav">New</a></td>
            <td><a href="?respo_for=web&amp;status=Read" class="nav">Read</a></td>
            <td> <a href="?respo_for=web&amp;status=Delete" class="nav">Delete</a></td>
            </tr>
          </table></td>
  <?php }?>
      </tr>
    </table>
  <?php if(!isset($_GET['view_mail'])){?>
  <table class="border cellborder">
    <tr>
      <th width="5%" bgcolor="#99FFCC"> <p>Sr. No. </p></th>
      <th width="21%" bgcolor="#99FFCC">From</th>
      <th bgcolor="#99FFCC">Subject</th>
      <th width="12%" bgcolor="#99FFCC">Replied</th>
      <th width="12%" bgcolor="#99FFCC">Date</th>
      <th width="11%" bgcolor="#99FFCC">Action</th>
      </tr>
  <?php		  	

$result = mysql_query("SELECT * FROM `$_SESSION[user_id]_real_response` WHERE ".$condition." ORDER BY `id` DESC");
$i=1;

while($row = mysql_fetch_array($result)){ 
?>
    <tr>
      <td width="8%" align="right" valign="top" id="editmenu"><?php  echo $i++; ?></td>
      <td align="left" valign="top"><a href="?view_mail=<?php echo $row['id'];?><?php if(($row['status']=='New') || $row['status']==''){echo '&amp;mk_read='.$row['id'];} ?>"> <?php echo $row['first_name'];?> <?php echo $row['last_name'];?></a></td>
      <td align="left" valign="top">
        <a href="?view_mail=<?php echo $row['id'];?><?php if(($row['status']=='New') || $row['status']==''){echo '&amp;mk_read='.$row['id'];} ?>"><?php echo $row['subject'];?></a>
        </td>
      <td align="left" valign="top">
        <?php echo $row['reply'];?>  
      </td>
      <td align="left" valign="top">
        <?php echo $row['date'];?>  
        </td>
      <td align="left" valign="top">
        <?php if($row['status']!='Delete'){?>
        <a href="?respo_del=<?php echo $row['id'];?>"><font color="#FF0000">Delete</font></a>
        <?php }else {?>
        <a href="?respo_act=<?php echo $row['id'];?>">Make Active</a>
        <?php }?>
        </td>
      </tr>
    <?php }?>
    </table>
  <?php }?>
<?php 
if(isset($_GET['view_mail'])){
	$view_mail = mysql_query("SELECT * FROM `$_SESSION[user_id]_real_response` WHERE id=".$_GET['view_mail']);
if(!$view_mail){
	echo 'Error: '.mysql_error();
	}

?>

  <table width="100%" border="0" cellpadding="0" cellspacing="0" class="border cellborder">
  <?php		  	
while($row = mysql_fetch_array($view_mail)){ ?>
    <tr>
      <td><a href="javascript: void(0);" class="nav" onclick="javascript: history.go(-1)">&lt;-Back</a></td>
      <td colspan="2"><a href="?view_mail=<?php echo $row['id'];?><?php if($row['status']=='New'){echo '&amp;mk_read='.$row['id'];} ?>"><?php echo $row['subject'];?></a></td>
      </tr>
    <tr>
      <td>&nbsp;</td>
      <td><?php echo $row['first_name'];?> <?php echo $row['last_name'];?> {email: <?php echo $row['email'];?>}</td>
      <td width="27%"><?php echo $row['date'];?></td>
      </tr>
    <tr>
      <td>&nbsp;</td>
      <td><div style="min-height:200px;"><?php echo $row['message'];?></div></td>
      <td>&nbsp;</td>
      </tr>
    <tr>
      <td width="8%" valign="top">Reply:</td>
      <td width="65%"><form id="form1" name="form1" method="post" action="">
        <?php if($row['reply_msg']=="") { ?>
        Subject:<br />
        <input type="text" style="width:80%" name="subject" id="subject" value="Thank You for enquiry : Jaidev Landmarks"/><br /><br />
        Reply From:<br />
        <input type="text" style="width:80%;"  name="from" id="from" value="<?php echo $_SESSION['user_email'];?>"/>
        <br /><br />
        <?php } ?>
        <span id="sprytextarea1">
        Reply Message:<br />
        <textarea name="reply_msg" style="width:80%" id="reply_msg" cols="60" rows="5" <?php if($row['reply_msg']!="") echo 'disabled="disabled"';?> ><?php echo $row['reply_msg'];?></textarea><br />
        Remaining Chars.: <span id="countsprytextarea1">&nbsp;</span><span class="textareaMinCharsMsg">Minimum number of characters not met.</span><span class="textareaMaxCharsMsg">Exceeded maximum number of characters.</span><span class="textareaRequiredMsg">A value is required.</span></span>
        <input type="hidden" name="msg_id" id="msg_id" value="<?php echo $row['id'];?>"/>
        <input type="hidden" name="to" id="to" value="<?php echo $row['email'];?>"/>
        <input type="submit" name="reply" id="reply" value="Send Reply"  <?php if($row['reply_msg']!="") echo 'disabled="disabled"';?>  />
      </form></td>
      <td valign="top">&nbsp;</td>
      </tr>
    <?php }?>
    </table>
    <?php }?>
  <p>&nbsp;</p>
  <!-- ************ Update Menu Function ********************************************************************************** -->
</div>
<script type="text/javascript">
var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1", {minChars:20, maxChars:2000, counterId:"countsprytextarea1", counterType:"chars_remaining"});
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
