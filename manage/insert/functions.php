<?php 
include '../login/dbc.php';
page_protect();

?>
<?php
// ******************** MENU UPDATE INSERT CODE ***********************************************************************
if (isset($_POST['update'])=='update') {
$sql="UPDATE `$_SESSION[user_id]_menu_type` SET `menu_type`='$_POST[menu_type]', `description`='$_POST[description]', `order`='$_POST[order]', WHERE id='$_POST[id]'";
if (!mysql_query($sql))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added.</br> ";
}

?>

<!-- Get Article Link by Category >> on newmenu.php-->
<?php
if(isset($_POST['getlink'])){
	$table = $_SESSION['user_id'].'_content'; // select table for link
	$link_var = '?AID=';
	$where = 'WHERE status="1" AND domain='.$_SESSION['domain'];
	if($_POST['getlink']=="Property"){ 
		$table = $_SESSION['user_id'].'_real_property';
		$link_var = '?r_prop=';
	}
	elseif($_POST['getlink']=="Project"){ 
		$table = $_SESSION['user_id'].'_real_project';
		$link_var = '?r_proj=';
	}
	elseif($_POST['getlink']=="Module"){ 
		$table = $_SESSION['user_id'].'_module';
		$link_var = '?MOD=';
		$where = 'WHERE status="1" AND `category` ="'.$_POST['getlink'].'" AND domain='.$_SESSION['domain'];

	}
	elseif($_POST['getlink']!="ALL"){ 
		$table = $_SESSION['user_id'].'_content';
		$link_var = '?AID=';
		$where = 'WHERE status="1" AND `category` ="'.$_POST['getlink'].'" AND domain='.$_SESSION['domain'];
	}

	?>
<option value="?CAT=<?php echo $_POST['getlink'];?>" ><?php if($_POST['getlink']=='HOME'){ echo 'Home'; }else{ echo 'All';} ?></option>
<?php if($_POST['getlink']=='HOME'){ die();} ?>
<?php $category = mysql_query("SELECT category, COUNT(*) FROM `$table` $where GROUP BY `category`") or die('Group Error: '.mysql_error());
	while($group = mysql_fetch_array($category)){ ?>
<option style="background-color: #CCC; width:180px" value="" disabled="disabled"><?php echo $group[0]; ?></option>
	<?php $subgroup = mysql_query("SELECT * FROM `$table` WHERE status='1' AND domain=".$_SESSION['domain']." AND `category`='".$group[0]."'") or die('Object Error: '.mysql_error());
	while($object = mysql_fetch_array($subgroup)){ ?>
<option value="<?php echo $link_var.$object['id'];?>" ><?php echo substr($object['title'],0,40);?></option>
            
<?php }}} ?>

<!-- Show Parent where Menu Type >> On updatemenu.php -->

<?php 
if(isset($_POST['MT'])){
$result= mysql_query("SELECT * FROM `$_SESSION[user_id]_menu` WHERE menu_type='".$_POST['MT']."' AND domain=$_SESSION[domain]")or die(mysql_error());
?>            <option value="0"> </option>
<?php
while ($row_menu = mysql_fetch_assoc($result)){  
?>
            <option value="<?php echo $row_menu['id']?>" ><?php echo $row_menu['menu_name']?></option>
            <?php } } ?>

<!-- Show Menu where Menu Type >> On editmenu.php -->
<?php 
if(isset($_POST['menutype'])){  
$result = mysql_query("SELECT * FROM `$_SESSION[user_id]_menu` WHERE menu_type='$_POST[menutype]' AND domain=$_SESSION[domain]");?>
<table width="100%" align="center" class="border cellborder"  id="menutbl">
  <tr>
    <th width="6%"> Menu ID </th>
    <th colspan="3"> Menu Name </th>
    <th width="20%">Link</th>
    <th width="15%"> Menu Type </th>
  </tr>
  <?php		  	
	$i=1;
	while($row = mysql_fetch_array($result)){ ?>
  <tr>
    <td width="6%" align="center" valign="middle" id="editmenu2"><?php  echo $i++; ?></td>
    <td width="7%" align="center" valign="middle"><a href="updatemenu.php?UID=<?php echo $row['id'];?>&amp;LINK=<?php echo $row['link'];?>&amp;PARENT=<?php echo $row['parent'];?>&amp;MT=<?php echo $row['menu_type'];?>" id="mname">Edit</a></td>
    <td width="9%" align="center" valign="middle"><a href="updatemenu.php?DEL=<?php echo $row['id'];?>" id="delete">Delete</a></td>
    <td width="39%" align="left" valign="middle"><?php echo $row['menu_name'];?></td>
    <td width="20%" align="center" valign="middle"><?php echo $row['link'];?></td>
    <td width="19%" align="center" valign="middle"><?php echo $row['menu_type'];?></td>
  </tr>
  <?php }?>
</table>
<p>
  <?php    }
?>
  
  <!-- Menu Type -->
  
  <?php 
if(isset($_POST['link'])){  
$title= mysql_query("SELECT * FROM `$_SESSION[user_id]_content` WHERE and domain=$_SESSION[domain]");
while ($row = mysql_fetch_assoc($title)){  
?>
</p>
<option value="<?php echo $row['id'];?>" <?php if ($row['id']==$_POST['link']) {echo "SELECTED";} ?>><?php echo $row['title'];?></option>
<?php } ?>
<?php }?>

<!-- Show Table data Where Status Selected >> editarticle.php -->

<?php 
if(isset($_POST['status'])){  
if($_POST['status']!=="-2"){  
$status= mysql_query("SELECT * FROM `$_SESSION[user_id]_content` WHERE publish=".$_POST['status']);
?>
<table width="100%" align="center" class="border cellborder"  id="menutbl2">
  <tr>
    <th width="5%"> <p>Sr. No. </p></th>
    <th colspan="3">Title</th>
    <th width="12%">Category</th>
    <th width="11%">Author</th>
    <th width="11%">Created</th>
    <th width="11%"> Status </th>
  </tr>
  <?php		  	
	$i=1;
while($row = mysql_fetch_array($status)){ ?>
  <tr>
    <td width="5%" align="center" valign="middle" id="editmenu"><?php  echo $i++; ?></td>
    <td width="5%" align="center" valign="middle"><a href="updatearticle.php?UAID=<?php echo $row['id'];?>&amp;CAT=<?php echo $row['category'];?>" id="mname2">Edit</a></td>
    <td width="7%" align="center" valign="middle"><a href="updatearticle.php?DEL=<?php echo $row['id'];?>" id="delete2">Delete</a></td>
    <td width="30%" align="left" valign="middle"><?php echo $row['title'];?></td>
    <td align="center" valign="middle"><?php if (!$row['category']==""){$cat = mysql_query("SELECT * FROM `$_SESSION[user_id]_category` WHERE id=$row[category]"); while($row_cat = mysql_fetch_array($cat)){ echo $row_cat['category_name'];}}?></td>
    <td align="center" valign="middle"><?php echo $row['author'];?></td>
    <td align="center" valign="middle"><?php echo $row['created'];?></td>
    <td align="center" valign="middle"><?php if ($row['publish']==0){ echo 'Publish'; } else { echo 'Unpublish';}?></td>
  </tr>
  <?php } ?>
</table>
<?php	}} ?>
