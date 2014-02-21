<?php 
include '../login/dbc.php';
page_protect();
?>
<script type="text/javascript" src="/manage/_script/jquery-1.6.2.min.js"></script>
  <style type="text/css">
  table tr td img {
	height: auto;
	width: 100px;
	border: 5px solid #CCC;
}
  .body-area {
	width: 800px;
	margin-right: auto;
	margin-left: auto;
	overflow: auto;
	float: left;
}
  .body-area table {
	float: left;
	width: 360px;
}
  .clear {
	clear: both;
}
  </style>
<?php 
if(isset($_POST['rename'])){
// This is ftp file rename function //
$ftp_details = mysql_query("SELECT * FROM user_sites WHERE id=".$_SESSION['domain']);
while($ftp = mysql_fetch_array($ftp_details)){
// get FTP access parameters
$host = $ftp['server'];
$user = $ftp['ftpuser'];
$pass = $ftp['ftppass'];
}
// open connection
$conn = ftp_connect($host) or die ("Cannot initiate connection to
 host");

// send access parameters
ftp_login($conn, $user, $pass) or die("Cannot login");
ftp_rename($conn,'/admin/upload/uploaded-files/'.$_POST['old_file_name'],'/admin/upload/uploaded-files/'.$_POST['file_name']);

// close the FTP stream
ftp_close($conn);

// rename file name in database... //
	$rename = mysql_query( "UPDATE ".$_SESSION['user_id']."_upload_data SET file_name='$_POST[file_name]', path='/admin/upload/uploaded-files/$_POST[file_name]' WHERE id=".$_POST['file-id']) or die(mysql_error()); 

// This is local file rename function //
$filerename = rename("$root/admin/upload/uploaded-files/$_POST[old_file_name]","$root/admin/upload/uploaded-files/$_POST[file_name]");
	if(!$rename && $filerename){
		echo "Error : File not rename successfull.";
		} else {
			echo 'File Rename Successfully!';
			}

	}
?>
<?php 
	if(isset($_POST['order'])){
	$rename = mysql_query( "UPDATE ".$_SESSION['user_id']."_upload_data SET `order` = ".$_POST['order']." WHERE id=".$_POST['file-id']) or die(mysql_error()); 
	}
?>



<!-- Rename file for Web Uploaded Image Management -->

<?php 
	if (isset($_GET['rename-file'])){
?>

  <?php
$f_path = mysql_query( "SELECT * FROM $_SESSION[user_id]_upload_data WHERE domain='".$_SESSION['domain']."' AND id=".$_GET['rename-file']) or die(mysql_error()); 
?>
  <?php while($row = mysql_fetch_array($f_path)){?>
  
        <div class="body-area">
          <table width="100%" border="0" cellpadding="0" cellspacing="5">
            <tr>
              <td width="16%" align="left" valign="top"><img src="<?php echo $row['path']?>" /></td>
              <td width="84%" align="left" valign="top"><form name="form1" method="post" action="">
                <label for="rename-file"></label>
                <textarea name="file_name" cols="30" rows="5" id="file_name"><?php echo $row['file_name']?></textarea>
                <input type="hidden" name="file-id" id="file-id" value="<?php echo $row['id']?>">
                <input type="hidden" name="old_file_name" id="old_file_name" value="<?php echo $row['file_name']?>">
<br>
                <input type="submit" name="rename" id="rename" value="Rename File">
              </form></td>
            </tr>
          </table>
  <?php }?>
          <div class="clear"></div>
        </div>
  <?php }?>
      
<!-- ------------------------------------------------------------------------------------------------------------------ -->

<!-- Rename file for Uploaded PROJECT IMAGE Management -->


<?php 
	if (isset($_GET['proj_proj_img'])){
?>

  <?php
$f_path = mysql_query( "SELECT * FROM $_SESSION[user_id]_upload_data WHERE domain='".$_SESSION['domain']."' AND file_for='proj-".$_GET['proj_proj_img']."-proj_img' ORDER BY `order`") or die(mysql_error()); 
?>
        <div class="body-area">
<form action="upload.php" method="post" enctype="multipart/form-data">
      <p>Upload Image:
        <input type="file" name="files[]" multiple required/>
        <input type="hidden" name="dir" value="<?php echo $root;?>/admin/upload/uploaded-files" />
        <input type="hidden" name="path" value="/admin/upload/uploaded-files" />
        <input type="hidden" name="file_for" value='<?php echo "proj-".$_GET['proj_proj_img']."-proj_img"; ?>' />
        <input type="submit"/>
    </p>
    </form>
      <?php while($row = mysql_fetch_array($f_path)){?>
  
          <table border="0" cellpadding="0" cellspacing="5">
            <tr>
              <td width="16%" align="left" valign="top"><img src="<?php echo $row['path']?>" /></td>
              <td width="84%" align="left" valign="top"><form name="form1" method="post" action="">
                <label for="rename-file"></label>
                <textarea name="file_name" cols="30" rows="5" id="file_name"><?php echo $row['file_name']?></textarea>
                <br>
                Order No:
                <input type="text" name="order" id="order" value="<?php echo $row['order']?>">
                <input type="hidden" name="file-id" id="file-id" value="<?php echo $row['id']?>">
                <input type="hidden" name="old_file_name" id="old_file_name" value="<?php echo $row['file_name']?>">
<br>
                <input type="submit" name="rename" id="rename" value="Change">
                <a href="upload.php?del-file=<?php echo $row['path']?>"&amp;pro=>Delete</a>
              </form></td>
            </tr>
          </table>
   <?php }?>
         <div class="clear"></div>
        </div>
  <?php }?>

<!-- ------------------------------------------------------------------------------------------------------------------ -->

<!-- Rename file for ***** Uploaded LOCATION MAP *****  Management -->


<?php 
	if (isset($_GET['proj_location_map'])){
?>

  <?php
$f_path = mysql_query( "SELECT * FROM $_SESSION[user_id]_upload_data WHERE domain='".$_SESSION['domain']."' AND file_for='proj-".$_GET['proj_location_map']."-location_map' ORDER BY `order`") or die(mysql_error()); 
?>
        <div class="body-area">
<form action="upload.php" method="post" enctype="multipart/form-data">
      <p>Upload Image:
        <input type="file" name="files[]" multiple required/>
        <input type="hidden" name="dir" value="<?php echo $root;?>/admin/upload/uploaded-files" />
        <input type="hidden" name="path" value="/admin/upload/uploaded-files" />
        <input type="hidden" name="file_for" value='<?php echo "proj-".$_GET['proj_location_map']."-location_map"; ?>' />
        <input type="submit"/>
    </p>
    </form>
      <?php while($row = mysql_fetch_array($f_path)){?>
          <table border="0" cellpadding="0" cellspacing="5">
            <tr>
              <td width="16%" align="left" valign="top"><img src="<?php echo $row['path']?>" /></td>
              <td width="84%" align="left" valign="top"><form name="form1" method="post" action="">
                <label for="rename-file"></label>
                <textarea name="file_name" cols="30" rows="5" id="file_name"><?php echo $row['file_name']?></textarea>
                <br>
                Order No:
                <input type="text" name="order" id="order" value="<?php echo $row['order']?>">
                <input type="hidden" name="file-id" id="file-id" value="<?php echo $row['id']?>">
                <input type="hidden" name="old_file_name" id="old_file_name" value="<?php echo $row['file_name']?>">
<br>
                <input type="submit" name="rename" id="rename" value="Change">
                <a href="upload.php?del-file=<?php echo $row['path']?>"&amp;pro=>Delete</a>
              </form></td>
            </tr>
          </table>
   <?php }?>
         <div class="clear"></div>
        </div>
  <?php }?>

<!-- ------------------------------------------------------------------------------------------------------------------ -->

<!-- Rename file for ***** Uploaded LAYOUT MAP *****  Management -->


<?php 
	if (isset($_GET['proj_layout_map'])){
?>

  <?php
$f_path = mysql_query( "SELECT * FROM $_SESSION[user_id]_upload_data WHERE domain='".$_SESSION['domain']."' AND file_for='proj-".$_GET['proj_layout_map']."-layout_map' ORDER BY `order`") or die(mysql_error()); 
?>
        <div class="body-area">
<form action="upload.php" method="post" enctype="multipart/form-data">
      <p>Upload Image:
        <input type="file" name="files[]" multiple required/>
        <input type="hidden" name="dir" value="<?php echo $root;?>/admin/upload/uploaded-files" />
        <input type="hidden" name="path" value="/admin/upload/uploaded-files" />
        <input type="hidden" name="file_for" value='<?php echo "proj-".$_GET['proj_layout_map']."-layout_map"; ?>' />
        <input type="submit"/>
    </p>
    </form>
      <?php while($row = mysql_fetch_array($f_path)){?>
          <table border="0" cellpadding="0" cellspacing="5">
            <tr>
              <td width="16%" align="left" valign="top"><img src="<?php echo $row['path']?>" /></td>
              <td width="84%" align="left" valign="top"><form name="form1" method="post" action="">
                <label for="rename-file"></label>
                <textarea name="file_name" cols="30" rows="5" id="file_name"><?php echo $row['file_name']?></textarea>
                <br>
                Order No:
                <input type="text" name="order" id="order" value="<?php echo $row['order']?>">
                <input type="hidden" name="file-id" id="file-id" value="<?php echo $row['id']?>">
                <input type="hidden" name="old_file_name" id="old_file_name" value="<?php echo $row['file_name']?>">
<br>
                <input type="submit" name="rename" id="rename" value="Change">
                <a href="upload.php?del-file=<?php echo $row['path']?>"&amp;pro=>Delete</a>
              </form></td>
            </tr>
         </table>
   <?php }?>
          <div class="clear"></div>
        </div>
  <?php }?>


<!-- ------------------------------------------------------------------------------------------------------------------ -->

<!-- Rename file for ***** Uploaded LAYOUT MAP *****  Management -->


<?php 
	if (isset($_GET['proj_floor_plans'])){
?>

  <?php
$f_path = mysql_query( "SELECT * FROM $_SESSION[user_id]_upload_data WHERE domain='".$_SESSION['domain']."' AND file_for='proj-".$_GET['proj_floor_plans']."-floor_plans' ORDER BY `order`") or die(mysql_error()); 
?>
        <div class="body-area">
<form action="upload.php" method="post" enctype="multipart/form-data">
      <p>Upload Image:
        <input type="file" name="files[]" multiple required/>
        <input type="hidden" name="dir" value="<?php echo $root;?>/admin/upload/uploaded-files" />
        <input type="hidden" name="path" value="/admin/upload/uploaded-files" />
        <input type="hidden" name="file_for" value='<?php echo "proj-".$_GET['proj_floor_plans']."-floor_plans"; ?>' />
        <input type="submit"/>
    </p>
    </form>
      <?php while($row = mysql_fetch_array($f_path)){?>
          <table border="0" cellpadding="0" cellspacing="5">
            <tr>
              <td width="16%" align="left" valign="top"><img src="<?php echo $row['path']?>" /></td>
              <td width="84%" align="left" valign="top"><form name="form1" method="post" action="">
                <label for="rename-file"></label>
                <textarea name="file_name" cols="30" rows="5" id="file_name"><?php echo $row['file_name']?></textarea>
                <br>
                Order No:
                <input type="text" name="order" id="order" value="<?php echo $row['order']?>">
                <input type="hidden" name="file-id" id="file-id" value="<?php echo $row['id']?>">
                <input type="hidden" name="old_file_name" id="old_file_name" value="<?php echo $row['file_name']?>">
<br>
                <input type="submit" name="rename" id="rename" value="Change">
                <a href="upload.php?del-file=<?php echo $row['path']?>"&amp;pro=>Delete</a>
              </form></td>
            </tr>
          </table>
  <?php }?>
          <div class="clear"></div>
        </div>
  <?php }?>

<!-- ------------------------------------------------------------------------------------------------------------------ -->

<!-- Rename file for ***** Uploaded LAYOUT MAP *****  Management -->


<?php 
	if (isset($_GET['proj_logo'])){
?>

  <?php
$f_path = mysql_query( "SELECT * FROM $_SESSION[user_id]_upload_data WHERE domain='".$_SESSION['domain']."' AND file_for='proj-".$_GET['proj_logo']."-logo' ORDER BY `order`") or die(mysql_error()); 
?>
        <div class="body-area">
<form action="upload.php" method="post" enctype="multipart/form-data">
      <p>Upload Image:
        <input type="file" name="files[]" multiple required/>
        <input type="hidden" name="dir" value="<?php echo $root;?>/admin/upload/uploaded-files" />
        <input type="hidden" name="path" value="/admin/upload/uploaded-files" />
        <input type="hidden" name="file_for" value='<?php echo "proj-".$_GET['proj_logo']."-logo"; ?>' />
        <input type="submit"/>
    </p>
    </form>
      <?php while($row = mysql_fetch_array($f_path)){?>
          <table border="0" cellpadding="0" cellspacing="5">
            <tr>
              <td width="16%" align="left" valign="top"><img src="<?php echo $row['path']?>" /></td>
              <td width="84%" align="left" valign="top"><form name="form1" method="post" action="">
                <label for="rename-file"></label>
                <textarea name="file_name" cols="30" rows="5" id="file_name"><?php echo $row['file_name']?></textarea>
                <br>
                Order No:
                <input type="text" name="order" id="order" value="<?php echo $row['order']?>">
                <input type="hidden" name="file-id" id="file-id" value="<?php echo $row['id']?>">
                <input type="hidden" name="old_file_name" id="old_file_name" value="<?php echo $row['file_name']?>">
<br>
                <input type="submit" name="rename" id="rename" value="Change">
                <a href="upload.php?del-file=<?php echo $row['path']?>"&amp;pro=>Delete</a>
              </form></td>
            </tr>
          </table>
  <?php }?>
          <div class="clear"></div>
        </div>
  <?php }?>

<!-- ------------------------------------------------------------------------------------------------------------------ -->

<!-- Rename file for ***** Uploaded LAYOUT MAP *****  Management -->


<?php 
	if (isset($_GET['prop_prop_img'])){
?>

  <?php
$f_path = mysql_query( "SELECT * FROM $_SESSION[user_id]_upload_data WHERE domain='".$_SESSION['domain']."' AND file_for='prop-".$_GET['prop_prop_img']."-prop_img' ORDER BY `order`") or die(mysql_error()); 
?>
        <div class="body-area">
<form action="upload.php" method="post" enctype="multipart/form-data">
      <p>Upload Image:
        <input type="file" name="files[]" multiple required/>
        <input type="hidden" name="dir" value="<?php echo $root;?>/admin/upload/uploaded-files" />
        <input type="hidden" name="path" value="/admin/upload/uploaded-files" />
        <input type="hidden" name="file_for" value='<?php echo "prop-".$_GET['prop_prop_img']."-prop_img"; ?>' />
        <input type="submit"/>
    </p>
    </form>
      <?php while($row = mysql_fetch_array($f_path)){?>
          <table border="0" cellpadding="0" cellspacing="5">
            <tr>
              <td width="16%" align="left" valign="top"><img src="<?php echo $row['path']?>" /></td>
              <td width="84%" align="left" valign="top"><form name="form1" method="post" action="">
                <label for="rename-file"></label>
                <textarea name="file_name" cols="30" rows="5" id="file_name"><?php echo $row['file_name']?></textarea>
                <br>
                Order No:
                <input type="text" name="order" id="order" value="<?php echo $row['order']?>">
                <input type="hidden" name="file-id" id="file-id" value="<?php echo $row['id']?>">
                <input type="hidden" name="old_file_name" id="old_file_name" value="<?php echo $row['file_name']?>">
<br>
                <input type="submit" name="rename" id="rename" value="Change">
                <a href="upload.php?del-file=<?php echo $row['path']?>"&amp;pro=>Delete</a>
              </form></td>
            </tr>
          </table>
  <?php }?>
          <div class="clear"></div>
        </div>
  <?php }?>

<!-- ------------------------------------------------------------------------------------------------------------------ -->

<!-- Rename file for ***** Uploaded LAYOUT MAP *****  Management -->


<?php 
	if (isset($_GET['prop_location_map'])){
?>

  <?php
$f_path = mysql_query( "SELECT * FROM $_SESSION[user_id]_upload_data WHERE domain='".$_SESSION['domain']."' AND file_for='prop-".$_GET['prop_location_map']."-location_map' ORDER BY `order`") or die(mysql_error()); 
?>
        <div class="body-area">
<form action="upload.php" method="post" enctype="multipart/form-data">
      <p>Upload Image:
        <input type="file" name="files[]" multiple required/>
        <input type="hidden" name="dir" value="<?php echo $root;?>/admin/upload/uploaded-files" />
        <input type="hidden" name="path" value="/admin/upload/uploaded-files" />
        <input type="hidden" name="file_for" value='<?php echo "prop-".$_GET['prop_location_map']."-location_map"; ?>' />
        <input type="submit"/>
    </p>
    </form>
      <?php while($row = mysql_fetch_array($f_path)){?>
          <table border="0" cellpadding="0" cellspacing="5">
            <tr>
              <td width="16%" align="left" valign="top"><img src="<?php echo $row['path']?>" /></td>
              <td width="84%" align="left" valign="top"><form name="form1" method="post" action="">
                <label for="rename-file"></label>
                <textarea name="file_name" cols="30" rows="5" id="file_name"><?php echo $row['file_name']?></textarea>
                <br>
                Order No:
                <input type="text" name="order" id="order" value="<?php echo $row['order']?>">
                <input type="hidden" name="file-id" id="file-id" value="<?php echo $row['id']?>">
                <input type="hidden" name="old_file_name" id="old_file_name" value="<?php echo $row['file_name']?>">
<br>
                <input type="submit" name="rename" id="rename" value="Change">
                <a href="upload.php?del-file=<?php echo $row['path']?>"&amp;pro=>Delete</a>
              </form></td>
            </tr>
          </table>
  <?php }?>
          <div class="clear"></div>
        </div>
  <?php }?>
