<?php 
include '../login/dbc.php';
page_protect();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/Template.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- InstanceBeginEditable name="doctitle" -->
    <title>Welcome to Administration</title>
    <style type="text/css">
    .img-block {
	display: block;
	margin: 5px;
	float: left;
	height: 250px;
	width: 150px;
	text-align: center;
	list-style-type: none;
	vertical-align: middle;
}
    .img-block .img {
	width: 100%;
	height: 200px;
	display: block;
	vertical-align: middle;
	color: #FFF;
	background-color: #5E005E;
}
    .img-block .img img {
	width: auto;
	height: 160px;
	border: 5px solid #FFF;
}
    .img-block a {
	display: block;
	text-align: center;
	vertical-align: middle;
}
    </style>
    <!-- InstanceEndEditable -->
<link rel="stylesheet" type="text/css" href="../../css/style.css"/>
<!--*********************>> Web Editor Tiny MCE Script << **************************************************** -->
<script type="text/javascript" src="../_script/jquery-1.6.2.min.js"></script>
<script type="text/javascript" src="../tiny_mce/tiny_mce.js"></script>
<script type="text/javascript">
tinyMCE.init({
        // General options
        mode : "exact",
        elements : "content,amenities,specifications,availability,contact,overview,location_map, layout_map, floor_plans",
        theme : "advanced",
		convert_urls: false,
        plugins : "autolink,lists,spellchecker,pagebreak,style,layer,save,table,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template",
		
		file_browser_callback : "filebrowser",

        // Theme options
        theme_advanced_buttons1 : "bold,italic,underline,strikethrough,|,sub,sup,|,justifyleft,justifycenter,justifyright,justifyfull,|,styleselect,formatselect,fontselect,fontsizeselect",
        theme_advanced_buttons2 : "forecolor,backcolor,|,cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,|,image,media,code,template",
        theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,|,fullscreen,|,styleprops,spellchecker,|,attribs,|,pagebreak,|,insertfile,insertimage",
        theme_advanced_toolbar_location : "top",
        theme_advanced_toolbar_align : "left",
        theme_advanced_statusbar_location : "bottom",
        theme_advanced_resizing : true,

        // Skin options
        skin : "o2k7",
        skin_variant : "silver",

        // Example content CSS (should be your site CSS)
        content_css : "/manage/_css/body_style.css",

        // Drop lists for link/image/media/template dialogs
        template_external_list_url : "/manage/tiny_mce/lists/template_list.php",
        external_link_list_url : "/manage/tiny_mce/lists/link_list.php",
        external_image_list_url : "/manage/tiny_mce/lists/image_list.php",
        media_external_list_url : "/manage/tiny_mce/lists/media_list.php",

        // Replace values for the template plugin
        template_replace_values : {
                username : "Some User",
                staffid : "991234"
        }
});
function filebrowser(field_name, url, type, win) {
    
    fileBrowserURL = "/manage/tiny_mce/pdw_file_browser/index.php?editor=tinymce&filter=" + type;
      
    tinyMCE.activeEditor.windowManager.open({
        title: "PDW File Browser",
        url: fileBrowserURL,
        width: 950,
        height: 650,
        inline: 0,
        maximizable: 1,
        close_previous: 0
      },{
        window : win,
        input : field_name
      }
    );    
  }
</script>
<!--*********************>> END of Web Editor Tiny MCE Script << **************************************************** -->


<!-- ************>>> this script is used Highlight a ACTIVE LINK <<**************** -->
<script type="text/javascript">
$(document).ready(function(){
$(".mainmenu a").each(function() {   
    if (this.href == window.location.href) {
        $(this).addClass("active");
    }
});
// This function is used for displaying submenu with jQuery and css ***************************************************
	$(".mainmenu li ul").hide();
    $(".mainmenu li").hover(function(){
		$(this).find('ul:first').css({visibility: "visible",display: "none", background:""}).slideDown(500);
		},function(){
		$(this).find('ul:first').css({visibility: "hidden",display: "none"});
		});

});
</script>

<!-- ************>>> this script is used for open link in new window <<**************** -->
<script type="text/javascript">
var newwindow;
function poptastic(url)
{
	newwindow=window.open(url,'name','height=660,width=980');
	if (window.focus) {newwindow.focus()}
} 
</script>
<!-- ************>>> END OF this this script is used for open link in new window <<**************** -->
    <!-- InstanceBeginEditable name="head" -->
    <!-- InstanceEndEditable -->
</head>
    
    <body>
    <div class="container">
    <div class="viewsite"><?php if(isset($_SESSION['domain_name'])){ echo'<a href="http://'.$_SESSION['domain_name'].'/index.php" target="_blank">View Site</a>';}?></div>
    <div class="header">
    <h2>
    Welcome <?php if(isset($_SESSION['user_name'])){echo $_SESSION['user_name'];}?>
    </h2>
	  <?php if(isset($_SESSION['domain'])){
echo '	<h1>You Are Editing: -&gt;</a>';
$result = mysql_query("SELECT * FROM `user_sites` WHERE id=".$_SESSION['domain']);
	while($row = mysql_fetch_array($result)){ ?>
 	 <a href="../select-site.php" title="Click to Chang Editing Site!"><?php echo $row['domain']; ?></a>
	<?php }}?>
	</h1>
    </div>
    <table width="100%" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="100%" align="center" valign="top"><div class="mainbar">
          <ul class="mainmenu">
            <li><a href="../Projects/Real-Estate/responses.php">My Responses</a>
              <ul>
                <li><a href="../Projects/Real-Estate/responses.php?respo_for=property">Property Sale/Rent Out</a></li>
                <li><a href="../Projects/Real-Estate/responses.php?respo_for=web">Website Queries</a></li>
                <li><a href="../Projects/Real-Estate/responses.php?respo_for=project">Projects Inquiry</a></li>
              </ul>
            </li>
            <li><a href="#">My Property</a>
              <ul>
                <li><a href="../Projects/Real-Estate/addproperty.php">Add Property</a></li>
                <li><a href="../Projects/Real-Estate/viewproperty.php">View Property</a></li>
                <li><a href="../Projects/Real-Estate/addproject.php">Add Project</a></li>
                <li><a href="../Projects/Real-Estate/viewproject.php">Manage Projects</a></li>
              </ul>
            </li>
            <li><a href="#">My Profile</a>
              <ul>
                <li><a href="../login/mysettings.php">Edit Profile/ Contacts</a></li>
                <li><a href="../select-site.php">View All Sites</a></li>
                <li><a href="#">Request for New Site</a></li>
                <li><a href="../login/logout.php">Logout</a></li>
              </ul>
            </li>
          </ul>
          <div class="clear"></div>
        </div></td>
      </tr>
      <tr>
        <td valign="top">
		<div class="content">
<!-- InstanceBeginEditable name="content" -->
<script type="text/javascript" src="/manage/_script/jquery-1.6.2.min.js"></script>
<link rel="stylesheet" type="text/css" href="/manage/_script/fancy-box/jquery.fancybox.css"/>
<script type="text/javascript" src="/manage/_script/fancy-box/jquery.fancybox.js"></script>
<script type="text/javascript" src="/manage/_script/fancy-box/jquery.fancybox.pack.js"></script>
<?php
if(isset($_FILES['files'])){
    $errors= array();
	foreach($_FILES['files']['tmp_name'] as $key => $tmp_name ){
		$file_name = $_FILES['files']['name'][$key];
		$file_size =$_FILES['files']['size'][$key];
		$file_tmp =$_FILES['files']['tmp_name'][$key];
		$file_type=$_FILES['files']['type'][$key];	
        if($file_size > 10097152){
			$errors[]='File size must be less than 2 MB';
        }
		if ((!$file_type == "image/jpeg") || (!$file_type == "image/png") || (!$file_type == "image/gif")){
			$errors[]='<strong>File type must be .gif, .png, .jpeg, .jpg only</strong>';			
				};

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
        }
    }
	if(empty($errors)){
		echo "Files uploaded Successfully";
	}
}
?>
<?php 
	if (isset($_GET['del-file'])){
		if(!unlink('../'.substr($_GET['del-file'],7))){
			echo 'Error File not deleted.';
			};
		$filedelete = mysql_query('DELETE FROM '.$_SESSION['user_id'].'_upload_data WHERE path="'.$_GET['del-file'].'"') or die(mysql_error());
			echo '<script type="text/javascript">history.go(-1);</script>';
			
			}
?>


<table border="0" cellpadding="0" cellspacing="5" class="border">
  <tr>
    <td><form action="" method="post" enctype="multipart/form-data">
      <p>Upload Image:
        <input type="file" name="files[]" multiple="multiple" required="required"/>
        <input type="hidden" name="dir" value="<?php echo $root;?>/admin/upload/uploaded-files" />
        <input type="hidden" name="path" value="/admin/upload/uploaded-files" />
        <input type="hidden" name="file_for" value="web" />
        <input type="submit"/>
    </p>
    </form></td>
  </tr>
  <tr>
    <td valign="top"><ul>

<?php
	$f_path = mysql_query( "SELECT * FROM $_SESSION[user_id]_upload_data WHERE domain='".$_SESSION['domain']."' AND file_for='web'") or die(mysql_error()); 
?>
<?php while($row = mysql_fetch_array($f_path)){?>
      <li class="img-block">
        <p class="img">
		<?php echo substr($row['file_name'],0,20)?>
        <a class="fancybox" rel="gall" href="<?php echo $row['path']?>"><img src="<?php echo $row['path']?>" /></a></p>
      <a class="change" href="rename.php?rename-file=<?php echo $row['id']?>" title="<?php echo $row['file_name']?>">Rename</a>
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
			$(".fancybox").fancybox({
				'height'	: '300',
				'width'		: '500',
				'autoSize'	: false,
				'type'		: 'image',
				autoPlay	: true,
			});
		});
	</script>
<!-- InstanceEndEditable -->
        </div>
        </td>
      </tr>
    </table>
    <div class="footer">
    <p align="center">
    This site is Created &amp; Maintained by <a href="http://www.vilas.co.in" title="Free Website Designing &amp; hosting">Vilas Shetkar</a>
    </p>
    </div>
    </div>
</body>
    <!-- InstanceEnd --></html>