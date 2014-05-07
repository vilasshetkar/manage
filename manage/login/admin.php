<?php 
include 'dbc.php';
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
<?php 
if(!checkAdmin()) {
header("Location: login.php");
exit();
}

$page_limit = 10; 


$host  = $_SERVER['HTTP_HOST'];
$host_upper = strtoupper($host);
$login_path = @ereg_replace('admin','',dirname($_SERVER['PHP_SELF']));
$path   = rtrim($login_path, '/\\');

// filter GET values
foreach($_GET as $key => $value) {
	$get[$key] = filter($value);
}

foreach($_POST as $key => $value) {
	$post[$key] = filter($value);
}

if(isset($post['doBan']) == 'Ban') {

if(!empty($_POST['u'])) {
	foreach ($_POST['u'] as $uid) {
		$id = filter($uid);
		mysql_query("update users set banned='1' where id='$id' and `user_name` <> 'admin'");
	}
 }
 $ret = $_SERVER['PHP_SELF'] . '?'.$_POST['query_str'];;
 
 header("Location: $ret");
 exit();
}

if(isset($_POST['doUnban']) == 'Unban') {

if(!empty($_POST['u'])) {
	foreach ($_POST['u'] as $uid) {
		$id = filter($uid);
		mysql_query("update users set banned='0' where id='$id'");
	}
 }
 $ret = $_SERVER['PHP_SELF'] . '?'.$_POST['query_str'];;
 
 header("Location: $ret");
 exit();
}

if(isset($_POST['doDelete']) == 'Delete') {

if(!empty($_POST['u'])) {
	foreach ($_POST['u'] as $uid) {
		$id = filter($uid);
		mysql_query("delete from users where id='$id' and `user_name` <> 'admin'");
	}
 }
 $ret = $_SERVER['PHP_SELF'] . '?'.$_POST['query_str'];;
 
 header("Location: $ret");
 exit();
}

if(isset($_POST['doApprove']) == 'Approve') {

if(!empty($_POST['u'])) {
	foreach ($_POST['u'] as $uid) {
		$id = filter($uid);
		mysql_query("update users set approved='1' where id='$id'");
		
	list($to_email) = mysql_fetch_row(mysql_query("select user_email from users where id='$uid'"));	
 
$message = 
"Hello,\n
Thank you for registering with us. Your account has been activated...\n

*****LOGIN LINK*****\n
http://$host$path/login.php

Thank You

Administrator
$host_upper
______________________________________________________
THIS IS AN AUTOMATED RESPONSE. 
***DO NOT RESPOND TO THIS EMAIL****
";

@mail($to_email, "User Activation", $message,
    "From: \"Member Registration\" <auto-reply@$host>\r\n" .
     "X-Mailer: PHP/" . phpversion()); 
	 
	}
 }
 
 $ret = $_SERVER['PHP_SELF'] . '?'.$_POST['query_str'];	 
 header("Location: $ret");
 exit();
}

$rs_all = mysql_query("select count(*) as total_all from users") or die(mysql_error());
$rs_active = mysql_query("select count(*) as total_active from users where approved='1'") or die(mysql_error());
$rs_total_pending = mysql_query("select count(*) as tot from users where approved='0'");						   

list($total_pending) = mysql_fetch_row($rs_total_pending);
list($all) = mysql_fetch_row($rs_all);
list($active) = mysql_fetch_row($rs_active);


?>


<link href="styles.css" rel="stylesheet" type="text/css" />
<script language="javascript" type="text/javascript" src="js/jquery-1.3.2.min.js"></script>

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
                <li><a href="mysettings.php">Edit Profile/ Contacts</a></li>
                <li><a href="../select-site.php">View All Sites</a></li>
                <li><a href="#">Request for New Site</a></li>
                <li><a href="logout.php">Logout</a></li>
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
        <div class="content">
  <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr></tr>
    <tr>
      <td width="74%" valign="top" style="padding: 10px;"><table width="100%" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="81%"><h1><font color="#FF0000">Administration 
            Page</font></h1></td>
          <td width="19%" valign="bottom">Date: <?php echo date("d/m/Y");?></td>
          </tr>
        </table>
        <table width="100%" border="0" cellpadding="5" cellspacing="0" class="myaccount">
          <tr>
            <td>Total users: <?php echo $all;?></td>
            <td>Active users: <?php echo $active; ?></td>
            <td>Pending users: <?php echo $total_pending; ?></td>
            </tr>
          </table>
        <p><?php 
	  if(!empty($msg)) {
	  echo $msg[0];
	  }
	  ?></p>
        <table width="80%" border="0" align="center" cellpadding="10" cellspacing="0" style="background-color: #E4F8FA;padding: 2px 5px;border: 1px solid #CAE4FF;" >
          <tr>
            <td><form action="admin.php" method="get" name="form1" id="form1">
              <p align="center">Search 
                <input name="q" type="text" id="q" size="40" />
                <br />
                [Type email or user name] </p>
              <p align="center"> 
                <input type="radio" name="qoption" value="pending" />
                Pending users 
                <input type="radio" name="qoption" value="recent" />
                Recently registered 
                <input type="radio" name="qoption" value="banned" />
                Banned users <br />
                <br />
                [You can leave search blank to if you use above options]</p>
              <p align="center"> 
                <input name="doSearch" type="submit" id="doSearch2" value="Search" />
                </p>
              </form></td>
            </tr>
          </table>
        <h2 onclick="$('#create').toggle('slow')"><font color="#FF0000"><br />
                Create New User</font></h2>
          <table width="100%" border="0" cellpadding="5" cellspacing="2" class="forms" id="create" style="display: none;">
            <tr>
              <td><form action="admin.php" method="post" name="form1" id="form1">
                <table width="800" border="0" cellpadding="2" cellspacing="0">
                  <tr>
                    <td width="15%" valign="top">User ID</td>
                    <td width="85%"><input name="user_name" type="text" id="user_name" size="40" />
                      (Type the username)</td>
                  </tr>
                  <tr>
                    <td valign="top">Email</td>
                    <td><input name="user_email" type="text" id="user_email" size="40" /></td>
                  </tr>
                  <tr>
                    <td valign="top">User Level</td>
                    <td><select name="user_level" id="user_level">
                      <option value="1">User</option>
                      <option value="5">Admin</option>
                    </select></td>
                  </tr>
                  <tr>
                    <td valign="top">Password</td>
                    <td><input name="pwd" type="text" id="pwd" size="40" />
                      (if empty a password will be auto generated)</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td><input name="send" type="checkbox" id="send" value="1" checked="checked" />
Send Email</td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td><input name="doSubmit" type="submit" id="doSubmit" value="Create" /></td>
                  </tr>
                </table>
                <p>**All created users will be approved by default.</p>
              </form></td>
            </tr>
          </table>
          <p><br />
            
            <?php if (isset($get['doSearch']) == 'Search') {
	  $cond = '';
	  if(isset($get['qoption']) == 'pending') {
	  $cond = "where `approved`='0' order by date desc";
	  }
	  if(isset($get['qoption']) == 'recent') {
	  $cond = "order by date desc";
	  }
	  if(isset($get['qoption']) == 'banned') {
	  $cond = "where `banned`='1' order by date desc";
	  }
	  
	  if($get['q'] == '') { 
	  $sql = "select * from users $cond"; 
	  } 
	  else { 
	  $sql = "select * from users where `user_email` = '$_REQUEST[q]' or `user_name`='$_REQUEST[q]' ";
	  }

	  
	  $rs_total = mysql_query($sql) or die(mysql_error());
	  $total = mysql_num_rows($rs_total);
	  
	  if (!isset($_GET['page']) )
		{ $start=0; } else
		{ $start = ($_GET['page'] - 1) * $page_limit; }
	  
	  $rs_results = mysql_query($sql . " limit $start,$page_limit") or die(mysql_error());
	  $total_pages = ceil($total/$page_limit);
	  
	  ?>
Approve -&gt; A notification email will be sent to user notifying activation.<br />
            Ban -&gt; No notification email will be sent to the user. 
            </p><p><strong>*Note: </strong>Once the user is banned, he/she will never be 
              able to register new account with same email address. 
              </p><p align="right"> 
                <?php 
	  
	  // outputting the pages
		if ($total > $page_limit)
		{
		echo "<div><strong>Pages:</strong> ";
		$i = 0;
		while ($i < $page_limit)
		{
		
		
		$page_no = $i+1;
		$qstr = ereg_replace("&page=[0-9]+","",$_SERVER['QUERY_STRING']);
		echo "<a href=\"admin.php?$qstr&page=$page_no\">$page_no</a> ";
		$i++;
		}
		echo "</div>";
		}  ?>
                </p>
        <form action="admin.php" method="post" name="name" id="name" "searchform">
        <table align="center" cellpadding="2" cellspacing="0" class="border cellborder">
      <tr bgcolor="#E6F3F9"> 
          <th width="4%"><strong>ID</strong></th>
          <th width="11%"> <strong>Date</strong></th>
          <th width="16%"><strong>User Name</strong></th>
          <th width="20%"><strong>Email</strong></th>
          <th width="10%"><strong>Approval</strong></th>
          <th width="8%"> <strong>Banned</strong></th>
          <th width="20%"><strong>Registered Domains</strong></th>
          <th width="11%">&nbsp;</th>
          </tr>
    <?php while ($rrows = mysql_fetch_array($rs_results)) {?>
    <tr> 
      <td valign="top"><input name="u[]" type="checkbox" value="<?php echo $rrows['id']; ?>" id="u[]" /></td>
      <td valign="top"><?php echo $rrows['date']; ?></td>
      <td valign="top"> <?php echo $rrows['user_name'];?></td>
      <td valign="top"><?php echo $rrows['user_email']; ?></td>
      <td valign="top"> <span id="approve<?php echo $rrows['id']; ?>"> 
        <?php if(!$rrows['approved']) { echo "Pending"; } else {echo "Active"; }?>
        </span> </td>
      <td valign="top"><span id="ban<?php echo $rrows['id']; ?>"> 
        <?php if(!$rrows['banned']) { echo "no"; } else {echo "yes"; }?>
        </span> </td>
      <td valign="top">
        
        <table width="102%" border="0" cellpadding="0" cellspacing="0">
        <?php $domain = mysql_query("select * from user_sites WHERE user_id=".$rrows['id']) or die(mysql_error());
while ($site = mysql_fetch_array($domain)) { ?>
			<tr>
            <td>
        <a href="javascript:void(0);" onclick='$.get("manage-site.php",{ domain_id: "<?php echo $site['id']?>", r_id: "<?php echo $rrows['id']; ?>" } ,function(data){ $("#domain<?php echo $rrows['id']; ?>").html(data).show("slow"); });'><?php if($site['status']==0){ echo '<font color="#FF0000">'. $site['domain'].'</font>';}else {echo $site['domain'];}?></a></br>
            </td>
          </tr><?php	 } ?>
          <tr>
            <td>
        <a href="javascript:void(0);" onclick='$.get("manage-site.php",{ user_id: "<?php echo $rrows['id']; ?>", r_id: "<?php echo $rrows['id']; ?>" } ,function(data){ $("#domain<?php echo $rrows['id']; ?>").html(data).show("slow"); });'>Add New Site</a>
            </td>
          </tr>
        </table>
        
        </td>
      <td valign="top"> <p><font size="2"><a href="javascript:void(0);" onclick='$.get("do.php",{ cmd: "approve", id: "<?php echo $rrows['id']; ?>" } ,function(data){ $("#approve<?php echo $rrows['id']; ?>").html(data); });'>Approve</a></font></p>
        <p><font size="2"><a href="javascript:void(0);" onclick='$.get("do.php",{ cmd: "ban", id: "<?php echo $rrows['id']; ?>" } ,function(data){ $("#ban<?php echo $rrows['id']; ?>").html(data); });'>Ban</a></font></p>
        <p><font size="2"><a href="javascript:void(0);" onclick='$.get("do.php",{ cmd: "unban", id: "<?php echo $rrows['id']; ?>" } ,function(data){ $("#ban<?php echo $rrows['id']; ?>").html(data); });'>        Unban</a></font></p>
        <p><font size="2"><a href="javascript:void(0);" onclick='$("#edit<?php echo $rrows['id'];?>").show("slow");'>            Edit</a> 
        </font></p></td>
      </tr>
    <tr> 
      <td colspan="8">
        
        <div style="font: normal 11px arial; padding: 10px; display: none; background-color: #CCC;" id="edit<?php echo $rrows['id']; ?>">
          
          <input type="hidden" name="id<?php echo $rrows['id']; ?>" id="id<?php echo $rrows['id']; ?>" value="<?php echo $rrows['id']; ?>" />
          <table border="0" cellpadding="0" cellspacing="0" class="forms">
            <tr>
              <td valign="bottom">User Name: 
                <input name="user_name<?php echo $rrows['id']; ?>" id="user_name<?php echo $rrows['id']; ?>" type="text" size="10" value="<?php echo $rrows['user_name']; ?>" /></td>
              <td valign="bottom">User Email:
                <input id="user_email<?php echo $rrows['id']; ?>" name="user_email<?php echo $rrows['id']; ?>" type="text" size="20" value="<?php echo $rrows['user_email']; ?>" /></td>
              <td valign="bottom">Level:
                <input id="user_level<?php echo $rrows['id']; ?>" name="user_level<?php echo $rrows['id']; ?>" type="text" size="5" value="<?php echo $rrows['user_level']; ?>" />
                1-&gt;user,5-&gt;admin </td>
              <td rowspan="2" valign="bottom"><a  onclick='$("#edit<?php echo $rrows['id'];?>").hide();' href="javascript:void(0);">close</a></td>
              </tr>
            <tr>
              <td valign="bottom">New Password:
                <input id="pass<?php echo $rrows['id']; ?>" name="pass<?php echo $rrows['id']; ?>" type="text" size="20" value="" /></td>
              <td valign="bottom"> (leave blank) </td>
              <td valign="bottom"><input name="doSave" type="button" id="doSave" value="Save" 
			onclick='$.get("do.php",{ cmd: "edit", pass:$("input#pass<?php echo $rrows['id']; ?>").val(),user_level:$("input#user_level<?php echo $rrows['id']; ?>").val(),user_email:$("input#user_email<?php echo $rrows['id']; ?>").val(),user_name: $("input#user_name<?php echo $rrows['id']; ?>").val(),id: $("input#id<?php echo $rrows['id']; ?>").val() } ,function(data){ $("#msg<?php echo $rrows['id']; ?>").html(data); });' /></td>
              </tr>
          </table>
          <div style="color:red" id="msg<?php echo $rrows['id']; ?>" name="msg<?php echo $rrows['id']; ?>"></div>
          </div>
        <div style="font: normal 11px arial; padding: 10px; display: none; background-color: #CCC;" id="domain<?php echo $rrows['id']; ?>">
        </div></td>
      </tr>
    <?php } ?>
  </table>
  <br />
          <input name="doApprove" type="submit" id="doApprove" value="Approve" />
          <input name="doBan" type="submit" id="doBan" value="Ban" />
          <input name="doUnban" type="submit" id="doUnban" value="Unban" />
          <input name="doDelete" type="submit" id="doDelete" value="Delete" />
          <br />
          <input name="query_str" type="hidden" id="query_str" value="<?php echo $_SERVER['QUERY_STRING']; ?>" />
          <strong>Note:</strong> If you delete the user can register again, instead 
          ban the user. </p>
          <p><strong>Edit Users:</strong> To change email, user name or password, 
            you have to delete user first and create new one with same email and 
            user name.</p>
          </form>
          <?php } ?>
          <?php
	  if(isset($_POST['doSubmit']) == 'Create')
{
$rs_dup = mysql_query("select count(*) as total from users where user_name='$post[user_name]' OR user_email='$post[user_email]'") or die(mysql_error());
list($dups) = mysql_fetch_row($rs_dup);

if($dups > 0) {
	die("The user name or email already exists in the system");
	}

if(!empty($_POST['pwd'])) {
  $pwd = $post['pwd'];	
  $hash = PwdHash($post['pwd']);
 }  
 else
 {
  $pwd = GenPwd();
  $hash = PwdHash($pwd);
  
 }
 
mysql_query("INSERT INTO users (`user_name`,`user_email`,`pwd`,`approved`,`date`,`user_level`)
			 VALUES ('$post[user_name]','$post[user_email]','$hash','1',now(),'$post[user_level]')
			 ") or die(mysql_error()); 



$message = 
"Thank you for registering with us. Here are your login details...\n
User Email: $post[user_email] \n
Passwd: $pwd \n

*****LOGIN LINK*****\n
http://$host$path/login.php

Thank You

Administrator
$host_upper
______________________________________________________
THIS IS AN AUTOMATED RESPONSE. 
***DO NOT RESPOND TO THIS EMAIL****
";

if($_POST['send'] == '1') {

	mail($post['user_email'], "Login Details", $message,
    "From: \"Member Registration\" <auto-reply@$host>\r\n" .
     "X-Mailer: PHP/" . phpversion()); 
 }
echo "<div class=\"msg\">User created with password $pwd....done.</div>"; 
}

	  ?>
          
</td>
          </tr>
  </table>
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
