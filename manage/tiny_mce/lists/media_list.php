<?php
$root = $_SERVER['DOCUMENT_ROOT'];
include ($root."/manage/login/dbc.php");
session_start();
?>
<?php // This list may be created by a server logic page PHP/ASP/ASPX/JSP in some backend system.
// There flash movies will be displayed as a dropdown in all media dialog if the "media_external_list_url"
// option is defined in TinyMCE init.

?>
<?php 
$where = "file_type in('audio/mpeg','audio/ogg','audio/wav','audio/mp3','video/x-flv','video/mp4','video/webm','video/ogg','video/mpeg','application/x-shockwave-flash')";
$table = $_SESSION['user_id'].'_upload_data';
//==================================================================================
$total = mysql_query("SELECT * FROM `$table` WHERE $where") or die('Error in total: '.mysql_error());
$count = mysql_num_rows($total);
$less = $count - 1 ;
//***************** CHANGE THIS *********************************************
echo 'var tinyMCEMediaList = [
	// Name, URL
		';
if($less != 0 or $less != -1){// -------------- Mysql Query for less than 1 rows selection -------------------
$less_1 = mysql_query("SELECT * FROM `$table` WHERE $where LIMIT 0, ".$less) or die(mysql_error());
while($row = mysql_fetch_array($less_1)){
//***************** CHANGE THIS *********************************************
	echo'["'.substr(($row["file_name"]),0, 50).'", "'.$row["path"].'"],
	'; 
}}
// ------------------- Mysql Query for last row selection -------------------
$last = mysql_query("SELECT * FROM `$table` WHERE $where LIMIT $less, $count") or die(mysql_error());
while($row = mysql_fetch_array($last)){
//***************** CHANGE THIS *********************************************
	echo'["'.substr(($row["file_name"]),0, 50).'", "'.$row["path"].'"]
	'; 
}
echo ']; ';
?>