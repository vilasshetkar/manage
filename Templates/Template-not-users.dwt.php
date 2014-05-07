<?php 
include '../admin/login/dbc.php';
page_protect();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- TemplateBeginEditable name="doctitle" -->
    <title>Welcome to Administration</title>
    <!-- TemplateEndEditable -->

<link rel="stylesheet" type="text/css" href="../css/style.css"/>
<!--*********************>> Web Editor Tiny MCE Script << **************************************************** -->
<script type="text/javascript" src="../manage/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript">
tinyMCE.init({
        // General options
        mode : "exact",
        elements : "content",
        theme : "advanced",
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
        content_css : "../_css/body_style.css",

        // Drop lists for link/image/media/template dialogs
        template_external_list_url : "../_script/template_list.js",
        external_link_list_url : "../_script/link_list.php",
        external_image_list_url : "../_script/image_list.js",
        media_external_list_url : "../_script/media.php",

        // Replace values for the template plugin
        template_replace_values : {
                username : "Some User",
                staffid : "991234"
        }
});
</script>
<!--*********************>> END of Web Editor Tiny MCE Script << **************************************************** -->


<!-- ************>>> this script is used Highlight a ACTIVE LINK <<**************** -->
<script type="text/javascript" src="../manage/_script/jquery.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $(".mainmenu li:first a").addClass("active");

  $(".mainmenu li a").click(function(){
	$(".mainmenu li a").removeClass("active");
    $(this).addClass("active");

  });
// This function is used for displaying submenu with jQuery and css ***************************************************
	$(".mainmenu li ul").hide();
    $(".mainmenu li").hover(function(){
		$(this).find('ul:first').css({visibility: "visible",display: "none", background:""}).show(500);
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

    <!-- TemplateBeginEditable name="head" -->
    <!-- TemplateEndEditable -->
</head>
    
    <body>
    <div class="container">
    <div class="viewsite"><a href="../index.php" target="_blank">View Site</a></div>
    <div class="header">
    <h2>
    Welcome <?php if(isset($_SESSION['user_name'])){echo $_SESSION['user_name'];}?>
    </h2>
	  <?php if(isset($_SESSION['domain'])){
	echo '<h1>You Are Editing: -&gt;';
$result = mysql_query("SELECT * FROM `user_sites` WHERE id=".$_SESSION['domain']);
	while($row = mysql_fetch_array($result)){ ?>
 	 <a href="../manage/select-site.php" title="Click to Chang Editing Site!"><?php echo $row['domain']; ?></a>
	<?php }}?>
	</h1>
    </div>
    <table width="100%" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="18%" rowspan="2" align="left" valign="top" bgcolor="#EADCAE">
        <div class="sidebar1">
          <ul class="nav">
            <li><a href="../index.php">Site Home</a></li>
            <li><a href="../manage/login/register.php">Register </a> </li>
            <li> <a href="../manage/login/login.php">Login</a></li>
            <li><!-- end .sidebar1 -->        </li>
          </ul>
        </div>
        </td>
        <td width="82%" align="center" valign="top">&nbsp;</td>
      </tr>
      <tr>
        <td valign="top">
		<div class="content">
<!-- TemplateBeginEditable name="content" -->
          <p><strong>Welcome to Administration Area:</strong></p>
          <p>This is CMS based site where you can edit your site with the help of our cms application.</p>
          <p>Side menu is used for editing your website.</p>
          <p>Best of Luck for editing.</p>
          <table border="0" cellspacing="5" class="border cellborder">
            <tr>
              <th scope="col">ffdsf </th>
              <td scope="col">fsdaf </td>
              <th scope="col">&nbsp;</th>
            </tr>
          </table>
          <p>&nbsp;</p>
        <!-- TemplateEndEditable -->
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
    </html>
