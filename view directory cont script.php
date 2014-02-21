<?php 
if (isset($_GET['link'])){
echo $_GET['link'];	
echo 'My Name is vilas shetkar';
}

?>
<?php // ********************* PHP v5>> List of Content in folder with link *****************
$dir = 'admin/'; 
$files = scandir($dir); 
foreach($files as $ind_file){ 
?> 
<li><a href="<?php echo $dir."/".$ind_file;?>"><?php echo $ind_file;?></li> 
<?php 
} 
?> 
</ul> 
<?php // ********************* PHP older Versions>> List of Content in folder with link *****************
$dir = opendir('admin/'); 
	echo '<ul>';
while ($read = readdir($dir)) 
{
	if ($read!='.' && $read!='..') 
{ 
	echo '<li><a href="files/'.$read.'">'.$read.'</a></li>'; 
}}
	echo '</ul>';
closedir($dir); 
?> 

<?php // ********************* Upload with Restrictions *****************
if(isset($_FILES['file'])){

$allowedExts = array("gif", "jpeg", "jpg", "png");
$extension = end(explode(".", $_FILES["file"]["name"]));
if (($_FILES["file"]["size"] < 200000) && in_array($extension, $allowedExts))
  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
    }
  else
    {
    echo "Upload: " . $_FILES["file"]["name"] . "<br>";
    echo "Type: " . $_FILES["file"]["type"] . "<br>";
    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
    echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";

    if (file_exists("upload/" . $_FILES["file"]["name"]))
      {
      echo $_FILES["file"]["name"] . " already exists. ";
      }
    else
      {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "upload/" . $_FILES["file"]["name"]);
      echo "Stored in: " . "upload/" . $_FILES["file"]["name"];
      }
    }
  }
else
  {
  echo "Invalid file";
  }}
?>

<form action="" method="POST">
	Upload Image: 
	<input type="file" name="file" multiple required="required"/>
	<input type="submit"/>
</form>
<style> 
.happy{
	width: 92px;
	height: 66px;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
	background-color: #ff008a;
	-webkit-box-shadow: 1px 1px 3px rgba(0,0,0,.75), inset 0 33px rgba(255,255,255,.21), inset 0 0 17px rgba(255,255,190,.41);
	-moz-box-shadow: 1px 1px 3px rgba(0,0,0,.75), inset 0 33px rgba(255,255,255,.21), inset 0 0 17px rgba(255,255,190,.41);
	box-shadow: 1px 1px 3px rgba(0,0,0,.75), inset 0 33px rgba(255,255,255,.21), inset 0 0 17px rgba(255,255,190,.41);
	border: solid 1px #ff5337;
background-image: -webkit-linear-gradient(bottom, #017101, #b1fa6a);
	background-image: -moz-linear-gradient(bottom, #017101, #b1fa6a);
	background-image: -o-linear-gradient(bottom, #017101, #b1fa6a);
	background-image: -ms-linear-gradient(bottom, #017101, #b1fa6a);
	background-image: linear-gradient(to top, #017101, #b1fa6a);
	display:block
	
}</style>
<p class="happy">Happy</p>
