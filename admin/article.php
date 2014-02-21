<?php
$id = $_GET['AID'];
function content(){
$id = $_GET['AID'];
$result = mysql_query("SELECT * FROM ".$_SESSION['user_id']."_content WHERE domain='$_SESSION[domain]' AND id =".$id);
if(!$result){ mysql_error();} // this condition for database error
while($row = mysql_fetch_array($result)){
	echo $row['content'];
	}}

function title(){
$id = $_GET['AID'];
$result = mysql_query("SELECT * FROM ".$_SESSION['user_id']."_content WHERE id =".$id);
if(!$result){ mysql_error(); }
	while($row = mysql_fetch_array($result)){
	echo $row['title'];
	}}


function meta(){
$id = $_GET['AID'];
$result = mysql_query("SELECT * FROM ".$_SESSION['user_id']."_content WHERE id =".$id);
if(!$result){ mysql_error(); }
	while($row = mysql_fetch_array($result)){ ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="<?php echo $row['metakeyword']; ?>" />
<meta name="description" content="<?php echo $row['metadescription']; ?>" />
<META NAME="robots" CONTENT="noindex">

    <?php 
	}}
?>
