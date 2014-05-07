<?php
$root = $_SERVER['DOCUMENT_ROOT'];
include ($root."/manage/login/dbc.php");
session_start();
?>
<?php // This list may be created by a server logic page PHP/ASP/ASPX/JSP in some backend system.
// There links will be displayed as a dropdown in all link dialogs if the "external_link_list_url"
// option is defined in TinyMCE init.

?>
<?php 
$where = 'domain = '.$_SESSION['domain'];
$table = $_SESSION['user_id'].'_content';
//==================================================================================
$total = mysql_query("SELECT * FROM `$table` ");
$count = mysql_num_rows($total);
$less = $count - 1 ;
// -------------- Mysql Query for less than 1 rows selection -------------------
$less_1 = mysql_query("SELECT * FROM `$table` LIMIT 0, ".$less) or die(mysql_error());
//***************** CHANGE THIS *********************************************
echo 'var tinyMCELinkList = new Array(
	// Name, URL
		';
while($row = mysql_fetch_array($less_1)){
//***************** CHANGE THIS *********************************************
	echo'["'.substr(($row["title"]),0, 50).'", "index.php?AID='.$row["id"].'"],
	'; 
}
// ------------------- Mysql Query for last row selection -------------------
$last = mysql_query("SELECT * FROM `$table` LIMIT $less, $count") or die(mysql_error());
while($row = mysql_fetch_array($last)){
//***************** CHANGE THIS *********************************************
	echo'["'.substr(($row["title"]),0, 50).'", "index.php?AID='.$row["id"].'"]
	'; 
}
echo '); ';
?>