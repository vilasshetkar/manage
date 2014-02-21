<?php
$root = $_SERVER['DOCUMENT_ROOT'];
include ($root."/manage/login/dbc.php");
session_start();
?>
<?php
// This list may be created by a server logic page PHP/ASP/ASPX/JSP in some backend system.
// There templates will be displayed as a dropdown in all media dialog if the "template_external_list_url"
// option is defined in TinyMCE init.

/*
	var tinyMCETemplateList = [
	// Name, URL, Description
	["Simple snippet", "templates/snippet1.htm", "Simple HTML snippet."],
	["Layout", "templates/layout1.htm", "HTML Layout."]
	];
*/ 

$where = 'file_type in("text/html","text/plain") AND domain = '.$_SESSION['domain'].' AND file_for = "web"';
$table = $_SESSION['user_id'].'_upload_data';
//==================================================================================
$total = mysql_query("SELECT * FROM `$table` WHERE $where");
$count = mysql_num_rows($total);
$less = $count - 1 ;
// -------------- Mysql Query for less than 1 rows selection -------------------
$less_1 = mysql_query("SELECT * FROM `$table` WHERE $where LIMIT 0, ".$less) or die(mysql_error());
//***************** CHANGE THIS *********************************************
echo 'var tinyMCETemplateList = [
	// Name, URL, Description
		';
while($row = mysql_fetch_array($less_1)){
//***************** CHANGE THIS *********************************************
	echo'["'.substr(($row["file_name"]),0,50).'", "'.$row["path"].'", "'.$row["path"].'"],
	'; 
}
// ------------------- Mysql Query for last row selection -------------------
$last = mysql_query("SELECT * FROM `$table` WHERE $where LIMIT $less, $count") or die(mysql_error());
while($row = mysql_fetch_array($last)){
//***************** CHANGE THIS *********************************************
	echo'["'.substr(($row["file_name"]),0,50).'", "'.$row["path"].'", "'.$row["path"].'"]'; 
}
echo ']; ';
?>