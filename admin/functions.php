<?php //All Menu
// ---------- DISPLAY MENU FUNCTION --> all_menu(); ------------------------ //
// ------- This function is used for all horizontal or vertical multi level menu call this function where you want to put dynamic menu ----------------------------------- //
function menu($parent, $level, $menu_type) {
    $result = mysql_query("SELECT a.id, a.menu_name, a.link, Deriv1.Count FROM `".$_SESSION['user_id']."_menu` a  LEFT OUTER JOIN (SELECT parent, COUNT(*) AS Count FROM `".$_SESSION['user_id']."_menu` GROUP BY parent) Deriv1 ON a.id = Deriv1.parent WHERE a.menu_type='".$menu_type."' AND a.parent=" . $parent);
if(!$result){echo 'Error: '.mysql_error();}
    echo '<ul class="nav" >';
    while ($row = mysql_fetch_assoc($result)) {
        if ($row['Count'] > 0) {
            echo "<li><a href='" . $row['link'] . "''target='_self'>" . $row['menu_name'] . "</a>";
            menu($row['id'], $level + 1,$menu_type);
            echo "</li>";
        } elseif ($row['Count']==0) {
            echo "<li><a href='" . $row['link'] . "'target='_self'>" . $row['menu_name'] . "</a></li>";
        } else;
    }
    echo "</ul>";
}

// **************************************************************************************** //
		?>
<?php 
// ----------- This function is used for Get Content from Database ---> content(); ----------------------------------------//
if(isset($_GET['MOD'])){
	global $root ;
	include ($root.'/admin/send-message.php');
}
elseif(isset($_GET['AID'])){
	include($root.'/admin/article.php');
}
elseif(isset($_GET['CAT'])){
	if(($_GET['CAT'])=='Property'){
	include($root.'/admin/property.php');
	}
	elseif(($_GET['CAT'])=='Project'){
	include($root.'/admin/project.php');
	}
	elseif(($_GET['CAT'])=='HOME'){
	include($root.'/admin/featured.php');
	}
	else{
	include($root.'/admin/category.php');
	}
}
elseif(isset($_GET['r_proj'])){
	include($root.'/admin/Projects/Real-Estate/view-project-on-site.php');
}
elseif(isset($_GET['r_prop'])){
	include($root.'/admin/Projects/Real-Estate/view-property-on-site.php');
}
else{
	include($root.'/admin/featured.php');
}
?>