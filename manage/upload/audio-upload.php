<?php 
//include '../login/dbc.php';
//page_protect();
?>
    <style type="text/css">
    .audio-img {
	display: block;
	margin: 5px;
	float: left;
	height: 120px;
	width: 230px;
	text-align: center;
	list-style-type: none;
	vertical-align: middle;
}
    .audio-img .img {
	width: 100%;
	height: 75px;
	display: block;
	vertical-align: middle;
	color: #FFF;
	background-color: #5E005E;
}
    .audio-img .img img {
	width: 135px;
	height: auto;
	border: 5px solid #FFF;
	max-height: 160px;
}
    .audio-img a {
	display: block;
	text-align: center;
	vertical-align: middle;
}
    .audio-img .img audio {
	/* [disabled]height: auto; */
	/* [disabled]width: auto; */
	/* [disabled]max-height: 170px; */
	max-width: 190px;
	margin-top: 5px;
	margin-bottom: 5px;
}
    </style>

<script type="text/javascript" src="/manage/_script/jquery-1.6.2.min.js"></script>
<link rel="stylesheet" type="text/css" href="/manage/_script/fancy-box/jquery.fancybox.css"/>
<script type="text/javascript" src="/manage/_script/fancy-box/jquery.fancybox.js"></script>
<script type="text/javascript" src="/manage/_script/fancy-box/jquery.fancybox.pack.js"></script>
<?php
if(isset($_FILES['audio'])){
    $errors= array();
	foreach($_FILES['audio']['tmp_name'] as $key => $tmp_name ){
		$file_name = $_FILES['audio']['name'][$key];
		$file_size =$_FILES['audio']['size'][$key];
		$file_tmp =$_FILES['audio']['tmp_name'][$key];
		$file_type=$_FILES['audio']['type'][$key];	
        if($file_size > 1073741824){
			$errors[]='File size must be less than 1 GB';
        }
		$fname_chk = mysql_query( "SELECT `file_name` FROM $_SESSION[user_id]_upload_data WHERE file_name='".$file_name."'") or die(mysql_error());
		$fname_exist = mysql_num_rows($fname_chk);
		if ($fname_exist > 0){ $errors[]='File Already Exist. Please select another file.';}
		
        $query="INSERT into $_SESSION[user_id]_upload_data (`domain`,`file_name`,`file_size`,`file_type`, `file_for`, path) VALUES('$_SESSION[domain]','$file_name','$file_size','$file_type', '$_POST[file_for]', '$_POST[path]/$file_name'); " ;
        $desired_dir="$_POST[dir]"; ///admin/uploaded/
        if(empty($errors)==true){
            if(is_dir($desired_dir)==false){
                mkdir("$desired_dir", 0700);		// Create directory if it does not exist
            }
            if(file_exists("$desired_dir/".$file_name)==false){
                move_uploaded_file($file_tmp,"$desired_dir/".$file_name);
            }else{									// rename the file if another one exist
                
				$new_dir="$desired_dir/".time().$file_name;
                 rename($file_tmp,$new_dir) ;				
            }
		 mysql_query($query) or die(mysql_error());			
        }else{
                print_r($errors);
				die();
        }
	 ?>
<?php
$ftp_details = mysql_query("SELECT * FROM user_sites WHERE domain='".$_SESSION['domain_name']."'") or die(mysql_error());
while($ftp = mysql_fetch_array($ftp_details)){
// get FTP access parameters
$host = $ftp['server'];
$user = $ftp['ftpuser'];
$pass = $ftp['ftppass'];
$destDir = $_POST['path'];
$workDir = $desired_dir; // define this as per local system
}

// open connection
$conn = ftp_connect($host) or die ("Cannot initiate connection to
 host");

// send access parameters
ftp_login($conn, $user, $pass) or die("Cannot login");

// perform file upload
$upload = ftp_put($conn, $destDir.'/'.$file_name,
$workDir.'/'.$file_name, FTP_BINARY) or die($destDir.'/'.$file_name.'File cannot uploaded'.$workDir.'/'.$file_name);

// check upload status
// display message
if (!$upload) {
  echo "Cannot upload";
} else {
  echo "Upload complete";
}
// close the FTP stream
ftp_close($conn);
    }
	if(empty($errors)){
		echo "Files uploaded Successfully";
?>
<?php }} ?>


<table border="0" cellpadding="0" cellspacing="5" class="border">
  <tr>
    <td><form action="" method="post" enctype="multipart/form-data">
      <p>Upload Audio:
        <input type="file" name="audio[]" multiple required id="audio[]"/>
        <input type="hidden" name="dir" value="<?php echo $root.DIRECTORY_SEPARATOR.'admin'.DIRECTORY_SEPARATOR.'upload'.DIRECTORY_SEPARATOR.'uploaded-files';?>" />
        <input type="hidden" name="path" value="<?php echo '/admin/upload/uploaded-files';?>" />
        <input type="hidden" name="file_for" value="web" />
        <input type="submit"/>
        File format:  .mp3, .ogg, .wav only      </p>
    </form></td>
  </tr>
  <tr>
    <td valign="top"><ul>

<?php
	$f_path = mysql_query( "SELECT * FROM $_SESSION[user_id]_upload_data WHERE file_type in('audio/mpeg','audio/ogg','audio/wav','audio/mp3') AND domain='".$_SESSION['domain']."' AND file_for='web'") or die(mysql_error()); 
?>
<?php while($row = mysql_fetch_array($f_path)){?>
      <li class="audio-img">
        <p class="img">
		<?php echo substr($row['file_name'],0,15)?>
        <a class="video" rel="gall" href="<?php echo $row['path']?>">
        <audio width="135px" src="<?php echo $row['path']?>" controls="controls"></audio></a></p>
      <a class="change" href="rename.php?image-upload=&amp;rename-file=<?php echo $row['id']?>" title="<?php echo $row['file_name']?>">Rename</a>
      <a href="?del-file=<?php echo $row['path']?>">Delete</a>
      </li>
<?php } ?>

    </ul></td>
  </tr>
</table>
	<script type="text/javascript">
		$(document).ready(function() {
			$(".change").fancybox({
				'height'	: '300',
				'width'		: '500',
				'autoSize'	: false,
				'type'		: 'iframe',
				openEffect	: 'elastic',
				openSpeed	: 300,
				closeEffect : 'elastic',
				closeSpeed  : 300,
			});
			$(".videof").fancybox({
				'height'	: '300',
				'width'		: '500',
				'autoSize'	: false,
				'type'		: 'image',
			});
		});
	</script>
