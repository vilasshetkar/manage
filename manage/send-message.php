<?php if (!isset($_GET['MOD'])){
require("login/dbc.php");
}?>

<style type="text/css">
.content {
	padding: 10px;
	width: 98%;
	font-size: 100%;
	max-width: 1100px;
	min-width: 780px;
	margin-right: auto;
	margin-left: auto;
	float: left;
	font-family: Tahoma, Geneva, sans-serif;
}
@font-face {
	font-family: 'Century Gothic';
	src: url('../admin/GOTHIC.TTF') format('truetype');
}
form.enquiry    {
	background: -webkit-gradient(linear, bottom, left 175px, from(#CCCCCC), to(#EEEEEE));
	width: 98%;
	font-family: Tahoma, Geneva, sans-serif;
	font-size: 12px;
	font-weight: bold;
	color: #099;
	text-decoration: none;
	-webkit-border-radius: 10px;
	-moz-border-radius: 10px;
	border-radius: 10px;
	padding: 10px;
	border: 1px solid #999;
	border: inset 1px solid #333;
	-webkit-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
	-moz-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
	box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
	background-color: #E7FFCE;
	background-position: bottom;
	min-width: 190px;
	margin-top: 5px;
	margin-right: auto;
	margin-bottom: 5px;
	margin-left: auto;
	max-width: 960px;
	position: relative;
}
.enquiry input   {
	width: 100%;
	border: 1px solid #999;
	height: 25px;
	-webkit-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
	-moz-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
	box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
	display: block;
}
.enquiry textarea    {
	width: 95%;
	border: 1px solid #999;
	-webkit-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
	-moz-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
	box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
	display: block;
}
.enquiry textarea:focus, input:focus {
border: 1px solid #09C;
}
#submit {
	width: 100px;
	margin-right: 10px;
	margin-bottom: 10px;
	background-color: #CCC;
	box-shadow: 2px 2px 10px #999;
}
#submit:hover {
	background-color: #C00;
	color: #FFF;
	border: 1px solid #FFF;
}
#form1 h1 {
	font-size: 16px;
	color: #339;
	margin: 0px;
	padding: 5px;
	display: block;
	background-color: #CCF;
}
#form1 table {
	margin: 0px;
	padding: 0px;
}
</style>
<link href="_script/Spray/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<link href="_script/Spray/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
<script src="_script/Spray/SpryValidationTextField.js" type="text/javascript"></script>
<script src="_script/Spray/SpryValidationTextarea.js" type="text/javascript"></script>
<?php 

$respo_for='web';
$subject='Website Enquiry';
if (isset($_GET['proj_enq'])){
	$respo_for='project';
	$subject='Project Enquiry for project ID: PROJ'.$_GET['proj_enq'];
	}
if (isset($_GET['r_proj'])){
	$respo_for='project';
	$subject='Project Enquiry for project ID: PROJ'.$_GET['r_proj'];
	}
if (isset($_GET['prop_enq'])){
	$respo_for='property';
	$subject='Property Enquiry for property ID: REL'.$_GET['prop_enq'];
	}

if (isset($_POST['submit'])=='Submit'){
$sql="INSERT INTO `2_real_response`(`first_name`, `last_name`, `company`, `address`, `email`, `phone`, `subject`, `message`, `respo_for`, `domain`) VALUES ('$_POST[first_name]','$_POST[last_name]','$_POST[company]','$_POST[address]','$_POST[email]','$_POST[phone]','$_POST[subject]','$_POST[message]','$respo_for', '$_SESSION[domain]')";
if (!mysql_query($sql))
  {
  die('Error: ' . mysql_error());
  }
$to = 'vilasshetkar@gmail.com' ;//$_SESSION['email'] ;
$from = 'website_url' ;
$msg_subject = $subject ;
$message =  'This is system generated mail: \r\n
			From : '.$_POST['email'].'\r\n
			Full Name : '.$_POST['first_name'].' '.$_POST['last_name'].' \r\n
			Company : $_POST[company] \r\n
			Phone : $_POST[phone] \r\n \r\n \r\n
			Message : \r\n
			$_POST[message]' ;
$headers = 'From: '.$from."\r\n" .
    'X-Mailer: PHP/' . phpversion();
$send_mail = mail($to,$msg_subject,$message,$headers) or die();
$thank="<form><h1 align='center'>Thank you! We will contact you soon!</h1></form>";
echo $thank;
		}
?>
<?php if (!isset($thank)){ ?>
<div class="content">
  <form action="" method="post" name="form1" class="enquiry" id="form1">
    <h1>Send Enquiry:</h1>
    <table width="98%" border="0" align="center" cellpadding="0" cellspacing="5">
      <tr>
        <td><span id="sprytextfield1">
          First Name
          <input type="text" name="first_name" id="first_name" />
        <span class="textfieldRequiredMsg">A value is require</span></span></td>
      </tr>
      <tr>
        <td><span id="sprytextfield2">
          Last Name 
          <input type="text" name="last_name" id="last_name" />
        <span class="textfieldRequiredMsg">A value is required.</span></span></td>
      </tr>
      <tr>
        <td><span id="sprytextfield3">
          Email ID
          <input type="text" name="email" id="email" />
        <span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldInvalidFormatMsg">Please provide a valid email id.</span></span></td>
      </tr>
      <tr>
        <td><span id="sprytextfield4">
          Mobile No.
          <input type="text" name="phone" id="phone" />
        <span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldInvalidFormatMsg">Please provide 10 digit mobile no.</span></span></td>
      </tr>
      <tr>
        <td>Company Name<span id="sprytextfield6">
          <input type="text" name="company" id="company" />
        </span></td>
      </tr>
      <tr>
        <td><span id="sprytextfield5">
          Address
          <input type="text" name="address" id="address" />
        <span class="textfieldRequiredMsg">A value is required.</span></span></td>
      </tr>
      <tr>
        <td><span id="sprytextarea1">
          Message
          <textarea name="message" id="message" cols="45" rows="3"></textarea>
        Characters left <span id="countsprytextarea1"></span><span class="textareaMaxCharsMsg">Exceeded maximum number of characters.</span></span></td>
      </tr>
      <tr>
        <td valign="middle">
          <input name="respo_for" type="hidden" id="respo_for" value="<?php echo $respo_for; ?>" />
          <input name="subject" type="hidden" id="subject" value="<?php echo $subject; ?>" />
        <input type="submit" name="submit" id="submit" value="Send Enquiry" /></td>
      </tr>
    </table>
  </form>
</div>
<?php } ?>
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "none", {validateOn:["blur"]});
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2", "none", {validateOn:["blur"]});
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3", "email", {validateOn:["blur"]});
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4", "phone_number", {format:"phone_custom", pattern:"0000000000", validateOn:["blur"]});
var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5", "none", {validateOn:["blur"]});
var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1", {isRequired:false, maxChars:200, counterType:"chars_remaining", counterId:"countsprytextarea1"});
var sprytextfield6 = new Spry.Widget.ValidationTextField("sprytextfield6", "none", {isRequired:false});
</script>
