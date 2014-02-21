<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<a href="https://plus.google.com/111722178251533295668?rel=author">Google</a>
</head>

<body>

<p>
<?php
if(isset($_FILES['image'])){
    $errors= array();
	foreach($_FILES['image']['tmp_name'] as $key => $tmp_name ){
		$file_name = $_FILES['image']['name'][$key];
		$file_size =$_FILES['image']['size'][$key];
		$file_tmp =$_FILES['image']['tmp_name'][$key];
		$file_type=$_FILES['image']['type'][$key];	
        if($file_size > 1073741824){
			$errors[]='File size must be less than 1 GB';
        }
        $desired_dir="mail"; ///admin/uploaded/
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
        }else{
                print_r($errors);
				die('Error not uploaded');
        } }


// array with filenames to be sent as attachment
$dir = opendir('mail/'); 
while ($read = readdir($dir)) 
{
	if ($read!='.' && $read!='..') 
{ 
$files[] = 'mail/'.$read;
}}
closedir($dir); 

 
// email fields: to, from, subject, and so on
$to = "vilasshetkar@gmail.com";
$from = '"'.$_POST['name'].'"<noreply@wtouch.in>'. "\r\n" .
    'Reply-To: '.$_POST['email'];
$subject ="document text"; 
$message = $_POST['email']." ".$_POST['msg'];
$headers = "From: $from";
 
// boundary 
$semi_rand = md5(time()); 
$mime_boundary = "==Multipart_Boundary_x{$semi_rand}x"; 
 
// headers for attachment 
$headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\""; 
 
// multipart boundary 
$message = "This is a multi-part message in MIME format.\n\n" . "--{$mime_boundary}\n" . "Content-Type: text/html; charset=\"iso-8859-1\"\n" . "Content-Transfer-Encoding: 7bit\n\n" . $message . "\n\n"; 
$message .= "--{$mime_boundary}\n";
 
// preparing attachments
for($x=0;$x<count($files);$x++){
	$file = fopen($files[$x],"rb");
	$data = fread($file,filesize($files[$x]));
	fclose($file);
	$data = chunk_split(base64_encode($data));
	$message .= "Content-Type: {\"application/octet-stream\"};\n" . " name=\"$files[$x]\"\n" . 
	"Content-Disposition: attachment;\n" . " filename=\"$files[$x]\"\n" . 
	"Content-Transfer-Encoding: base64\n\n" . $data . "\n\n";
	$message .= "--{$mime_boundary}\n";
}
 
// send
 
$ok = mail($to, $subject, $message, $headers); 
if ($ok) { 
	echo "<b>Thank you for Post Your Property!</b>"; 
	for($x=0;$x<count($files);$x++){
	echo unlink($files[$x]);
	}

} else { 
	echo "<b>Something wrong!</b>". $ok->ErrorInfo."</br>"; 
	for($x=0;$x<count($files);$x++){
	echo unlink($files[$x]);
	}
	echo $from;echo $headers;

} 
 
 }
?>
</p>
<p>
<form method="post" action="" enctype="multipart/form-data">
  <p>
    <input name="image[]" type="file" multiple="multiple" required="required" id="image[]"/>
  </p>
  <p>
    <input name="name" type="text" id="name" onblur="validate_form_field(this.value,'contno')" value="" size="70" />
  </p>
  <p>
    <input name="email" type="text" id="email"  value="" size="70" />
  </p>
  <p>
    <textarea name="msg" cols="70" id="msg" required="required"></textarea>
  </p>
  <p>
    <input name="Submit" type="submit" id="Submit" style="width:150px; height:30px" value="Submit" />
  </p>
  </form>
</p>
</body>
</html>