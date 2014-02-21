<?php require_once('../../dbc.php'); ?>
<?php 
include '../../login/dbc.php';
page_protect();
?>

<!-- Get Article Link by Category >> on newmenu.php-->
<?php
if(isset($_GET['featured'])){

// $sql = "UPDATE `real_property` SET `featured` = $_GET[featured] WHERE `id` =$_GET[id]" or die(mysql_error());
$sql = mysql_query("UPDATE `$_SESSION[user_id]_real_property` SET `featured` = $_GET[featured] WHERE `real_property`.`id` = $_GET[id]") or die(mysql_error());
if($sql){
echo 'sucess feature';}
}?>


<!-- Show Menu where Menu Type >> On editmenu.php -->
<?php 
if(isset($_POST['menutype'])){  
$result = mysql_query("SELECT * FROM `$_SESSION[user_id]_menu` WHERE menu_type='$_POST[menutype]' AND domain=$_SESSION[domain]");?>
<p>
  <?php    } ?>