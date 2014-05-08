<?php 
include '../../login/dbc.php';
page_protect();
include 'other-domain.php';
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
    </style>
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
<!-- ************>>> This script is used for View property or project in fancy box <<**************** -->
<style>
.cellborder tr.top-border td {
	border-top:3px solid #666 !important;
}
.cellborder tbody tr.top-border:first-child td {
	border-top:none !important;
}
</style>

<script type="text/javascript" src="../../_script/jquery-1.6.2.min.js"></script>
<link rel="stylesheet" type="text/css" href="../../_script/fancy-box/jquery.fancybox.css"/>
<script type="text/javascript" src="../../_script/fancy-box/jquery.fancybox.js"></script>
<script type="text/javascript" src="../../_script/fancy-box/jquery.fancybox.pack.js"></script>
<script type="text/javascript">
		$(document).ready(function() {
			$(".view-property").fancybox({
				'autoScale'	: true,
				//'height'	: '100%',
				//'width'		: '100%',
				'type'		: 'iframe',
				openEffect	: 'elastic',
				openSpeed	: 400,
				closeEffect : 'elastic',
				closeSpeed  : 400,
			});
			});
		$(document).ready(function() {
			$(".modal").fancybox({
				'autoScale'	: true,
				'type'		: 'image',
				openEffect	: 'elastic',
				openSpeed	: 400,
				closeEffect : 'elastic',
				closeSpeed  : 400,
			});
			});
</script>
<script type="text/javascript">
$(document).ready(function(e) {
	$("#status").change(function() {
		    var url = window.location.href;
			if((url.search("viewStatus") === -1) && (url.search("[?]") === -1)){
				url = window.location.href + "?viewStatus=" + $(this).val() ;
			}else if(url.search("viewStatus") === -1 ){
				url = window.location.href + "&viewStatus=" + $(this).val() ;
			};
		    var regEx = /([?&]viewStatus)=([^#&]*)/g;
		    var newurl = url.replace(regEx, '$1=' + $(this).val());
			window.location = newurl;
    });
	// Set status here
	$("#viewOrder").change(function() {
		    var url = window.location.href;
			if((url.search("viewOrder") === -1) && (url.search("[?]") === -1)){
				url = window.location.href + "?viewOrder=" + $(this).val() ;
			}else if(url.search("viewOrder") === -1 ){
				url = window.location.href + "&viewOrder=" + $(this).val() ;
			};
		    var regEx = /([?&]viewOrder)=([^#&]*)/g;
		    var newurl = url.replace(regEx, '$1=' + $(this).val());
			window.location = newurl;
    });
	// Set order here
	$("#viewFeatured").change(function() {
		    var url = window.location.href;
			if((url.search("viewFeatured") === -1) && (url.search("[?]") === -1)){
				url = window.location.href + "?viewFeatured=" + $(this).val() ;
			}else if(url.search("viewFeatured") === -1 ){
				url = window.location.href + "&viewFeatured=" + $(this).val() ;
			};
		    var regEx = /([?&]viewFeatured)=([^#&]*)/g;
		    var newurl = url.replace(regEx, '$1=' + $(this).val());
			window.location = newurl;
    });
	// Set viewFeatured here
	$("#viewDomain").change(function() {
		    var url = window.location.href;
			if((url.search("viewDomain") === -1) && (url.search("[?]") === -1)){
				url = window.location.href + "?viewDomain=" + $(this).val() ;
			}else if(url.search("viewDomain") === -1 ){
				url = window.location.href + "&viewDomain=" + $(this).val() ;
			};
		    var regEx = /([?&]viewDomain)=([^#&]*)/g;
		    var newurl = url.replace(regEx, '$1=' + $(this).val());
			window.location = newurl;
    });
	// Set viewFeatured here

});
</script>
<!-- ************>>> This script is used to set Featured Property <<**************** -->

<?php
if(isset($_GET['featured'])){

$sql = mysql_query("UPDATE `$_SESSION[user_id]_real_project` SET `featured` = '$_GET[featured]' WHERE `id` = $_GET[id]") or die(mysql_error());
if(!$sql){
echo '<script type="text/javascript">window.history.go(-1);</script>';
}}?>

<!-- ************>>> This script is used to set Status of Property <<**************** -->

<?php
if(isset($_GET['status'])){

$sql = mysql_query("UPDATE `$_SESSION[user_id]_real_project` SET `status` = '$_GET[status]' WHERE `id` = $_GET[id]") or die(mysql_error());
if(!$sql){
echo '<script type="text/javascript">window.history.go(-1);</script>';
}
}?>


<div class="content">
  <!-- ************Edit Menu Function ************************************************************************************ -->
  <table width="99%" border="0" align="center" cellspacing="5">
    <tr>
      <td align="right">
      <label for="viewOrder">Sort by Order </label>
      <select name="viewOrder" id="viewOrder">
        <option value="DESC" <?php if(($_GET['viewOrder']==1) || (!isset($_GET['viewOrder']))) echo ' SELECTED'  ?>>Descending</option>
        <option value="ASC" <?php if(isset($_GET['viewOrder']) && ($_GET['viewOrder'])==0) { echo ' SELECTED' ; } ?>>Ascending</option>
      </select>
      </td>
      <td align="right">
      <label for="status">Select Status</label>
      <select name="status" id="status">
        <option value="1" <?php if(($_GET['viewStatus']==1) || (!isset($_GET['viewStatus']))) echo ' SELECTED'  ?>>Active</option>
        <option value="0" <?php if(isset($_GET['viewStatus']) && ($_GET['viewStatus'])==0) { echo ' SELECTED' ; } ?>>Deleted</option>
      </select>
      </td>
      <td align="right">Filter By Featured
        <select name="viewFeatured" id="viewFeatured">
        <option value="" SELECTED >Select Featured</option>
        <option value="1" <?php if(($_GET['viewFeatured'] == 1)) echo ' SELECTED'  ?>>Featured</option>
        <option value="0" <?php if($_GET['viewFeatured'] == "0") { echo ' SELECTED' ; } ?>>Not Featured</option>
      </select></td>
      <td align="right">
      <?php $sql = mysql_query("SELECT * FROM user_sites WHERE user_id = '$_SESSION[user_id]' AND status = '1'") or die(mysql_error()); ?>
      
      Select Domain : 
      <select name="viewDomain" id="viewDomain">
        <option value="" selected="selected">All</option>
      <?php while($row = mysql_fetch_array($sql)){ ?>
        <option value="<?php echo $row['domain'] ?>"  <?php if(isset($_GET['viewDomain']) && ($_GET['viewDomain'])==$row['domain']) { echo ' SELECTED' ; } ?>><?php echo $row['domain'] ?></option>
      <?php } ?>
      </select>

      </td>
    </tr>
  </table>

  <?php 
if(isset($_GET["viewStatus"])){	$viewStatus = " `status` = '".$_GET["viewStatus"]."'"; }else{ $viewStatus = " `status` = '1' "; }

if(isset($_GET["viewFeatured"]) && $_GET["viewFeatured"] !== "" ){	$viewFeatured = " AND `featured` = '".$_GET["viewFeatured"]."'"; }else{ $viewFeatured = " "; }

if(isset($_GET["viewDomain"])){	$viewDomain = " AND `domain` LIKE '%".$_GET["viewDomain"]."%'"; }else{ $viewDomain = " "; }

if(isset($_GET["viewOrder"])){	$viewOrder = " ORDER BY `id` ".$_GET["viewOrder"]; }else{ $viewOrder = " ORDER BY `id` DESC "; }


$result = mysql_query("SELECT * FROM `$_SESSION[user_id]_real_project` WHERE $viewStatus $viewFeatured $viewDomain $viewOrder ") or die(mysql_error());
?>
  <table width="100%" border="1" align="center" cellpadding="5" cellspacing="0" class="border cellborder"  id="menutbl">
  <thead>
    <tr>
      <th width="8%" bgcolor="#99FFCC"> <p>Sr. No. </p></th>
      <th width="8%" bgcolor="#99FFCC">Image</th>
      <th colspan="2" bgcolor="#99FFCC">Project Details</th>
      <th width="12%" bgcolor="#99FFCC">Featured</th>
      <th width="12%" bgcolor="#99FFCC">Status</th>
      <th width="19%" bgcolor="#99FFCC">Domains</th>
      <th width="19%" bgcolor="#99FFCC">Manage</th>
    </tr>
    </thead>
    <tbody>
    <?php
	if(mysql_num_rows($result)===0){ ?>
    <tr>
    	<td colspan="8" align="center"> <strong>***************** No Record found ****************</strong> </td>
	<?php }else{
	$i=1;
while($row = mysql_fetch_array($result)){ ?>
    <tr class="top-border">
      <td width="8%" rowspan="4" align="right" valign="top" id="editmenu"><?php  echo $i++; ?></td>
      <td width="8%" rowspan="4" align="right" valign="top" id="editmenu">
      <a href="<?php echo $row['proj_img'];?>" class="modal">
      <img src="<?php echo $row['proj_img'];?>" width="100" />
      </a>
      </td>
      <td width="12%" align="left" valign="top">Project Title</td>
      <td width="21%" align="left" valign="top"><strong>[<?php echo "Proj-ID: ".$row['id'];?>] - </strong><?php echo $row['title'];?></td>
      <td align="center" valign="middle">
        <?php if ($row['featured']==1){ echo '<font color="#009900"><strong>FEATURED</font></strong>';} else {echo '<font color="#FF0000">NOT FEATURED</font>';}?> 
        
      </td>
      <td align="center" valign="middle">
      <?php if ($row['status']==1){ echo '<font color="#009900"><strong>Active</font></strong>';} else {echo '<font color="#FF0000">Deleted</font>';}?>
      
       </td>
      <td width="19%" rowspan="4" align="left" valign="middle">
      <?php domains($row['domain'],$row['id'],"project"); ?>
      </td>
      <td width="19%" rowspan="2" align="left" valign="middle"><a href="editproject.php?proj_id=<?php echo $row['id'];?>" id="mname">Edit</a></td>
      </tr>
    <tr>
      <td align="left" valign="top"> Category</td>
      <td align="left" valign="top"><?php echo $row['category'];?></td>
      <td align="center" valign="middle">
	  <?php if ($row['featured']==1){ echo '<a class="featured" href="?id='.$row["id"].'&amp;featured=0" ><input type="button" value="Set Not Featured" /></a>';} 
	  else if($row['featured']==0) {echo '<a class="featured" href="?id='.$row["id"].'&amp;featured=1" ><input type="button" value="Set Featured" /></a>';}?>
      <td align="center" valign="middle">
        <?php if ($row['status']==1){ echo '<a class="featured" href="?id='.$row["id"].'&amp;status=0" ><input type="button" value="Delete Project" /></a>';} 
	  else if($row['status']==0) {echo '<a class="featured" href="?id='.$row["id"].'&amp;status=1" ><input type="button" value="Make Active" /></a>';}?></td>
      </tr>
    <tr>
      <td align="left" valign="top"> Type</td>
      <td align="left" valign="top"><?php echo $row['type'];?></td>
      <td colspan="2" rowspan="2" align="center" valign="middle">
        <a href="editproject.php?proj_copy=<?php echo $row['id'];?>" id="copy" title="Copy this project to other domains.">Copy Project</a>
      </td>
      <?php $testDomain ; ?>
      <td width="19%" rowspan="2" align="left" valign="middle"><a class="view-property" href="http://<?php echo $testDomain;?>/index.php?view=project&layout=singleproject&tmpl=component&option=com_realestate&id=<?php echo $row['id'];?>" >View Project</a></td>
      </tr>
    <tr>
      <td align="left" valign="top"> Address</td>
      <td align="left" valign="top"><?php echo $row['location'];?></td>
    </tr>
    <?php } }?>
    </tbody>
</table>
  <p>&nbsp;</p>
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
