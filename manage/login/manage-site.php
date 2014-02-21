<?php 
include 'dbc.php';
// ******************** Domain INSERT CODE *************************************************************************
if(isset($_POST['insert'])){
$sql="INSERT INTO `user_sites`(`user_id`, `domain`, `status`, `path`, `server`, `ftpuser`, `ftppass`) VALUES ('$_POST[user_id]','$_POST[domain]','$_POST[status]','$_POST[path]', '$_POST[server]', '$_POST[ftpuser]', '$_POST[ftppass]')";
if (!mysql_query($sql))
  {
  die('Error: ' . mysql_error());
  } ?>
<?php 
$sql =mysql_query("
CREATE TABLE IF NOT EXISTS `$_POST[user_id]_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) NOT NULL,
  `parent` int(11) NOT NULL,
  `category_desc` varchar(255) NOT NULL,
  `del` enum('0','1') NOT NULL DEFAULT '1',
  `domain` int(11) NOT NULL,
  PRIMARY KEY (`id`)
)");

$sql =mysql_query("
CREATE TABLE IF NOT EXISTS `$_POST[user_id]_content` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menu` int(11) NOT NULL,
  `title` text NOT NULL,
  `metakeyword` text NOT NULL,
  `metadescription` text NOT NULL,
  `metacontent` text NOT NULL,
  `category` int(11) NOT NULL,
  `author` varchar(255) NOT NULL,
  `created` varchar(36) NOT NULL,
  `publish` text NOT NULL,
  `content` longtext NOT NULL,
  `domain` int(11) NOT NULL,
  PRIMARY KEY (`id`)
)");

$sql =mysql_query("
CREATE TABLE IF NOT EXISTS `$_POST[user_id]_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_name` varchar(100) NOT NULL,
  `link` int(11) NOT NULL,
  `parent` int(11) NOT NULL,
  `menu_type` varchar(36) NOT NULL,
  `domain` int(11) NOT NULL,
  `user_sites` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id`)
)");

$sql =mysql_query("
CREATE TABLE IF NOT EXISTS `$_POST[user_id]_menu_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_type` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `order` int(11) NOT NULL,
  `domain` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `menu_type` (`menu_type`)
)");

$sql =mysql_query("
CREATE TABLE IF NOT EXISTS `$_POST[user_id]_real_project` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `project_by` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `featured` enum('0','1') NOT NULL,
  `category` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `overview` text NOT NULL,
  `proj_img` varchar(255) NOT NULL,
  `menu` text NOT NULL,
  `amenities` text NOT NULL,
  `specifications` text NOT NULL,
  `location_map` text NOT NULL,
  `layout_map` text NOT NULL,
  `floor_plans` text NOT NULL,
  `gallery` text NOT NULL,
  `availability` text NOT NULL,
  `contact` text NOT NULL,
  `domain` int(11) NOT NULL,
  PRIMARY KEY (`id`)
)");

$sql =mysql_query("
CREATE TABLE IF NOT EXISTS `$_POST[user_id]_real_property` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `featured` enum('0','1') NOT NULL,
  `property_for` enum('Sale','Rent','PG') NOT NULL,
  `category` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `buildup_area` int(11) NOT NULL,
  `build_unit` varchar(255) NOT NULL,
  `land_area` int(11) NOT NULL,
  `land_unit` varchar(255) NOT NULL,
  `carpet_area` int(11) NOT NULL,
  `carpet_unit` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `currency` varchar(255) NOT NULL,
  `bedrooms` varchar(255) NOT NULL,
  `bathrooms` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `map` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `society_name` varchar(255) NOT NULL,
  `prop_desc` text NOT NULL,
  `cont_name` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `cont_address` varchar(255) NOT NULL,
  `prop_age` varchar(255) NOT NULL,
  `furnished` varchar(255) NOT NULL,
  `transaction_type` varchar(255) NOT NULL,
  `prop_owner` varchar(255) NOT NULL,
  `floors` varchar(255) NOT NULL,
  `on_floor` varchar(255) NOT NULL,
  `parking` varchar(255) NOT NULL,
  `hospital` varchar(255) NOT NULL,
  `airport` varchar(255) NOT NULL,
  `railway` varchar(255) NOT NULL,
  `school` varchar(255) NOT NULL,
  `power` enum('0','1') NOT NULL,
  `water` enum('0','1') NOT NULL,
  `lift` enum('0','1') NOT NULL,
  `res_parking` enum('0','1') NOT NULL,
  `security` enum('0','1') NOT NULL,
  `maintenance` enum('0','1') NOT NULL,
  `gym` enum('0','1') NOT NULL,
  `park` enum('0','1') NOT NULL,
  `tarrace` enum('0','1') NOT NULL,
  `swimming` enum('0','1') NOT NULL,
  `quarters` enum('0','1') NOT NULL,
  `club` enum('0','1') NOT NULL,
  `facing` varchar(255) NOT NULL,
  `status` enum('0','1') NOT NULL,
  `domain` int(11) NOT NULL,
  PRIMARY KEY (`id`)
)");


$sql =mysql_query("
CREATE TABLE IF NOT EXISTS `$_POST[user_id]_real_response` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `status` enum('All','New','Read','Delete') NOT NULL,
  `reply` enum('Yes','No') NOT NULL,
  `reply_msg` text NOT NULL,
  `respo_for` varchar(255) NOT NULL,
  `domain` int(11) NOT NULL,
  PRIMARY KEY (`id`)
)");

if(!$sql){
	echo 'Error: '.mysql_error();
	}

$sql =mysql_query("
CREATE TABLE IF NOT EXISTS `$_POST[user_id]_upload_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `domain` varchar(255) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `file_size` varchar(255) NOT NULL,
  `file_type` varchar(255) NOT NULL,
  `file_for` varchar(255) NOT NULL,
  `order` int(11) NOT NULL,
  `path` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `file_name` (`file_name`)
)");

if(!$sql){
	echo 'Error: '.mysql_error();
	}


?>
<?php echo "1 record added";
echo '<script type="text/javascript">window.history.go(-1).location.reload()</script>';
	}
?>
<?php
// ******************** Domain UPDATE CODE *******************************************************
if (isset($_POST['update'])) {
$sql="UPDATE user_sites SET domain='$_POST[domain]', path='$_POST[path]', status='$_POST[status]', server='$_POST[server]', ftpuser='$_POST[ftpuser]', ftppass='$_POST[ftppass]' WHERE id=".$_POST['id'];
if (!mysql_query($sql))
  {
  die('Error: ' . mysql_error());
  }
echo "<h1 align='center'>1 record Updated</h1>";
echo '<script type="text/javascript">window.history.go(-1).location.reload()</script>';

}?>
<?php 
if (isset($_POST['delete'])) {
$sql = "DROP TABLE `2_category`, `2_content`, `2_menu`, `2_menu_type`, `2_real_project`, `2_real_property`, `2_real_response`;";
}?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="styles.css" rel="stylesheet" type="text/css" />
</head>

<body>
<?php 
if (isset($_GET['domain_id'])!=""){
$domain = mysql_query("select * from user_sites WHERE id=".$_GET['domain_id']) or die(mysql_error());
while ($site = mysql_fetch_array($domain)) {?>
<form action="manage-site.php" method="post" name="form1" id="form1">
  <input type="hidden" name="id" id="id" value="<?php echo $site['id']; ?>" />
  <table width="70%" border="0" cellpadding="1" cellspacing="0" class="forms">
    <tr>
      <td width="20%" scope="col">Domain Name:</td>
      <td scope="col"><input required="required" name="domain" type="text" id="domain" value="<?php echo $site['domain']; ?>" size="50" /></td>
      <td width="20%" valign="bottom" scope="col"><br /></td>
    </tr>
    <tr>
      <td width="20%">Status: </td>
      <td><input name="status" type="radio" id="radio3" value="1" <?php if($site['status']==1){echo 'CHECKED';} ?> />
        <label for="status">ACTIVE</label>
        <input type="radio" name="status" id="radio4" value="0" <?php if($site['status']==0){echo 'CHECKED';} ?>/>
        <label for="status">DELETE</label></td>
      <td width="20%" valign="bottom" scope="col">&nbsp;</td>
    </tr>
    <tr>
      <td width="20%">Server:</td>
      <td><input name="server" type="text" id="server" size="50" value="<?php echo $site['server']; ?>" /></td>
      <td width="20%" valign="bottom" scope="col">&nbsp;</td>
    </tr>
    <tr>
      <td>Username:</td>
      <td><input name="ftpuser" type="text" id="ftpuser" size="50" value="<?php echo $site['ftpuser']; ?>"/></td>
      <td width="20%" valign="bottom" scope="col">&nbsp;</td>
    </tr>
    <tr>
      <td>Password:</td>
      <td><input name="ftppass" type="text" id="ftppass" size="50" value="<?php echo $site['ftppass']; ?>"/></td>
      <td width="20%" valign="bottom" scope="col">&nbsp;</td>
    </tr>
    <tr>
      <td>FTP Path:</td>
      <td><input required="required" name="path" type="text" id="path" value="<?php echo $site['path']; ?>" size="50" /></td>
      <td width="20%" valign="bottom" scope="col">&nbsp;</td>
    </tr>
    <tr>
      <td></td>
      <td><input name="update" type="submit" id="update" value="Change" /></td>
      <td width="20%" valign="bottom" scope="col"><a  onclick='$("#domain<?php echo $_GET['r_id'];?>").hide("slow");' href="javascript:void(0);">close</a></td>
    </tr>
  </table>
</form>
<?php }} ?>
<?php 
if (isset($_GET['user_id'])!=""){ ?>
<form action="manage-site.php" method="post" name="form1" id="form2">
  <input type="hidden" name="user_id" id="user_id" value="<?php echo $_GET['user_id']; ?>" />
  <table width="70%" border="0" cellpadding="1" cellspacing="0" class="forms">
    <tr>
      <td width="20%" scope="col">Domain Name:</td>
      <td width="439" scope="col"><input name="domain" type="text" id="domain" size="50" /></td>
      <td width="20%" valign="bottom" scope="col">&nbsp;</td>
    </tr>
    <tr>
      <td>Status: </td>
      <td><input name="status" type="radio" id="radio" value="1" checked="checked" />
        <label for="status">ACTIVE</label>
        <input type="radio" name="status" id="radio2" value="0" />
        <label for="status">DELETE</label></td>
      <td width="20%" valign="bottom" scope="col">&nbsp;</td>
    </tr>
    <tr>
      <td>Server:</td>
      <td><input name="server" type="text" id="server" size="50" /></td>
      <td valign="bottom" scope="col">&nbsp;</td>
    </tr>
    <tr>
      <td>Username:</td>
      <td><input name="ftpuser" type="text" id="ftpuser" size="50"/></td>
      <td valign="bottom" scope="col">&nbsp;</td>
    </tr>
    <tr>
      <td>Password:</td>
      <td><input name="ftppass" type="text" id="ftppass" size="50"/></td>
      <td valign="bottom" scope="col">&nbsp;</td>
    </tr>
    <tr>
      <td>FTP Path:</td>
      <td><input required="required" name="path" type="text" id="path3" size="50" /></td>
      <td valign="bottom" scope="col">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input name="insert" type="submit" id="insert" value="Save" />
        <br /></td>
      <td width="20%" valign="bottom" scope="col"><a  onclick='$(&quot;#domain<?php echo $_GET['r_id'];?>&quot;).hide(&quot;slow&quot;);' href="javascript:void(0);">close</a></td>
    </tr>
  </table>
</form>
<?php } ?>
</body>
</html>
