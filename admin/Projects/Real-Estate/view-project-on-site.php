<?php
function content(){
	$id= $_GET['r_proj'];
$result = mysql_query("SELECT * FROM ".$_SESSION['user_id']."_real_project WHERE domain=".$_SESSION['domain']." AND id =".$id);
if(!$result){ mysql_error();} // this condition for database error
while($row = mysql_fetch_array($result)){ ?>


<style type="text/css">
.mail_content {
	padding: 10px;
	width: 98%;
	font-size: 100%;
	max-width: 1100px;
	min-width: 190px;
	margin-right: auto;
	margin-left: auto;
	float: left;
	font-family: Tahoma, Geneva, sans-serif;
	position: relative;
}
@font-face {
	font-family: 'Century Gothic';
	src: url('GOTHIC.TTF') format('truetype');
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
	margin-right: auto;
	margin-bottom: 5px;
	margin-left: auto;
	max-width: 960px;
	position: relative;
	margin-top: 0px;
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

.project-detail .border tr td {
	background-color: #FFF;
	border-bottom-width: 1px;
	border-bottom-style: solid;
	border-bottom-color: #060;
}
.project-detail .tbl-width {
	width: 100%;
	background-color: #D2FFB7;
	padding-top: 0px;
	padding-right: 0px;
	padding-bottom: 0px;
	padding-left: 0px;
	margin-top: 10px;
	margin-right: 0px;
	margin-bottom: 0px;
	margin-left: 0px;
}
.project-detail {
	width: auto;
	padding-right: 20px;
	padding-left: 20px;
}
.project-detail .tbl-width tr td img {
	width: 350px;
	border: 10px solid #FFF;
	height: 200px;
}
.project-detail h3 {
	font-size: 18px;
	color: #060;
	margin-top: 20px;
	margin-right: 0px;
	margin-bottom: 5px;
	margin-left: 0px;
	display: block;
	padding-top: 5px;
	padding-right: 10px;
	padding-bottom: 5px;
	padding-left: 10px;
	background-color: #D2FFB7;
	box-shadow: 2px 2px 4px #999;
}
.project-detail .tbl-width tr td h3 {
	margin-left: 20px;
	padding: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	border-top-style: none;
	border-right-style: none;
	border-bottom-style: none;
	border-left-style: none;
	box-shadow: none;
	background-color: #D2FFB7;
	color: #060;
}
.project-detail .tbl-width tr td .border {
	margin-top: 0px;
	margin-right: 10px;
	margin-bottom: 0px;
	margin-left: 0px;
	padding-top: 0px;
	padding-right: 0px;
	padding-bottom: 0px;
	padding-left: 0px;
}
.project-detail p.detail {
	display: block;
	margin-right: 0px;
	padding: 10px;
	margin-top: 10px;
	margin-bottom: 20px;
	margin-left: 40px;
	border: 1px solid #CCC;
	background-color: #FFF;
}
.project-detail .cont tr td {
	background-color: #FFF;
}

.project-detail .cont.tbl-width {
	padding-left: 0px;
	margin-left: 40px;
	width: 95%;
	border-top-style: none;
	border-right-style: none;
	border-bottom-style: none;
	border-left-style: none;
}

.project-detail .tbl-width tr td .slider {
	width: 370px;
}
.project-detail .tbl-width tr td .slider a {
	float: left;
	width: 370px;
	display: block;
	height: 220px;
}
.proj-enquiry {
	width: 27%;
	float: right;
	margin: 0px;
	padding: 10px;
	position: relative;
}
.project-detail .width-thirty {
	width: 70%;
	margin: 0;
	padding: 0px;
	/* [disabled]display: none; */
	float: left;
}
.navigation {
	display: block;
	height: 30px;
	border: 1px solid #CCC;
	width: 100%;
	padding: 0px;
	margin-top: 10px;
	margin-right: 0px;
	margin-bottom: 10px;
	margin-left: 0px;
	float: none;
}
.project-detail .navigation li {
	display: block;
	float: left;
	padding-top: 5px;
	padding-right: 10px;
	padding-bottom: 5px;
	padding-left: 10px;
	list-style-type: none;
	margin: 0px;
	border-right-width: 1px;
	border-right-style: solid;
	border-right-color: #CCC;
}
.project-detail .navigation li a {
}
</style>
<script type="text/javascript">
$(document).ready(function(){
// This function is used for displaying submenu with jQuery and css ***************************************************
    $(".width-thirty").hide();
	$('#overview').slideDown(1000);

});
</script>

	<div class="project-detail">
	  <h1><?php echo $row['title']?> </h1>
	  <ul class="navigation">
	    <li><a href="jacascript:void(0);" onclick="$('.width-thirty').hide();$('#overview').slideDown(1000);">Overview </a></li>
	    <li><a href="jacascript:void(0);" onclick="$('.width-thirty').hide();$('#amenities').slideDown(1000);">Amenities/Features</a></li>
	    <li><a href="jacascript:void(0);" onclick="$('.width-thirty').hide();$('#specifications').slideDown(1000);">Specifications </a></li>
	    <li><a href="jacascript:void(0);" onclick="$('.width-thirty').hide();$('#location-map').slideDown(1000);">Location Map</a></li>
	    <li><a href="jacascript:void(0);" onclick="$('.width-thirty').hide();$('#layout-plan').slideDown(1000);">Layout Map</a></li>
	    <li><a href="jacascript:void(0);" onclick="$('.width-thirty').hide();$('#floor-plans').slideDown(1000);">Floor Plans</a></li>
	    <li><a href="jacascript:void(0);" onclick="$('.width-thirty').hide();$('#availability').slideDown(1000);">Availability</a></li>
      </ul>
	  <div class="proj-enquiry">
  <form action="?MOD=enquiry-form" method="post" name="form1" class="enquiry" id="form1">
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
          <input name="respo_for" type="hidden" id="respo_for" value="<?php echo 'project'; ?>" />
          <input name="subject" type="hidden" id="subject" value="<?php echo 'Project Enquiry for project ID: PROJ'.$_GET['r_proj'] ?>" />
        <input type="submit" name="submit" id="submit" value="Send Enquiry" /></td>
      </tr>
    </table>
  </form>

      </div>
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "none", {validateOn:["blur"]});
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2", "none", {validateOn:["blur"]});
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3", "email", {validateOn:["blur"]});
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4", "phone_number", {format:"phone_custom", pattern:"0000000000", validateOn:["blur"]});
var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5", "none", {validateOn:["blur"]});
var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1", {isRequired:false, maxChars:200, counterType:"chars_remaining", counterId:"countsprytextarea1"});
var sprytextfield6 = new Spry.Widget.ValidationTextField("sprytextfield6", "none", {isRequired:false});
</script>

	  <table width="70%" border="0" cellpadding="0" cellspacing="0" class="width-thirty" id="overview">
	    <tr>
	      <td width="82%" align="left" valign="top">
          <table border="0" align="center" cellpadding="5" cellspacing="0" class="tbl-width" style="background-color:#D2FFB7;">
	        <tr>
	          <td width="39%" rowspan="2" align="left" valign="top"><div class="slider">
	            <?php
			$f_path = mysql_query( "SELECT * FROM $_SESSION[user_id]_upload_data WHERE domain='".$_SESSION['domain']."' AND file_for='proj-".$row['id']."-proj_img'") or die(mysql_error()); 
				?>
	            <?php while($rows = mysql_fetch_array($f_path)){?>
	            <a class="fancybox" rel="gall1" href="<?php echo $rows['path'];?>"> <img src="<?php echo $rows['path']?>" alt="" />
	              <?php } ?>
              </a> </div></td>
	        </tr>
	        <tr>
	          <td align="left" valign="top"><table width="100%" cellpadding="5"  cellspacing="0" class="border">
	            <tbody>
	              <tr valign="top">
	                <td width="37%" align="left" valign="top">Project Type</td>
	                <td width="3%" align="left" valign="top"><strong>:</strong></td>
	                <td width="58%" align="left" valign="top"><?php echo $row['type']?></td>
                  </tr>
	              <tr valign="top">
	                <td align="left" valign="top">Location</td>
	                <td align="left" valign="top"><strong>:</strong></td>
	                <td align="left" valign="top"><?php echo $row['location']?></td>
                  </tr>
                </tbody>
              </table></td>
	        </tr>
	        </table>
            <h3>Overview:</h3>
          <p class="detail"><?php echo $row['overview']?></p></td>
        </tr>
      </table>
	  <table width="70%" border="0" cellpadding="0" cellspacing="0" class="width-thirty" id="amenities">
	    <tr>
	      <td width="82%" align="left" valign="top"><table border="0" align="center" cellpadding="5" cellspacing="0" class="tbl-width" style="background-color:#D2FFB7;">
	        <tr>
	          <td width="39%" align="left" valign="top"><h3>Amenities:</h3>
              <p class="detail"><?php echo $row['amenities']?></p></td>
	        </tr>
	        </table></td>
        </tr>
      </table>
	  <table width="70%" border="0" cellpadding="0" cellspacing="0" class="width-thirty" id="specifications">
	    <tr>
	      <td width="82%" align="left" valign="top"><table border="0" align="center" cellpadding="5" cellspacing="0" class="tbl-width" style="background-color:#D2FFB7;">
	        <tr>
	          <td width="39%" align="left" valign="top"><h3>Specifications:</h3>
	            <p class="detail"><?php echo $row['specifications']?></p></td>
	        </tr>
          </table></td>
        </tr>
      </table>
	  <table width="70%" border="0" cellpadding="0" cellspacing="0" class="width-thirty" id="location-map">
	    <tr>
	      <td width="82%" align="left" valign="top"><table border="0" align="center" cellpadding="5" cellspacing="0" class="tbl-width" style="background-color:#D2FFB7;">
	        <tr>
	          <td width="39%" align="left" valign="top"><h3>Location Map:</h3><?php echo $row['location_map']?></td>
	        </tr>
          </table></td>
        </tr>
      </table>
	  <table width="70%" border="0" cellpadding="0" cellspacing="0" class="width-thirty" id="layout-plan">
	    <tr>
	      <td width="82%" align="left" valign="top"><table border="0" align="center" cellpadding="5" cellspacing="0" class="tbl-width" style="background-color:#D2FFB7;">
	        <tr>
	          <td width="39%" align="left" valign="top"><h3>Layout Map:</h3>
              <?php echo $row['layout_map']?></td>
	        </tr>
          </table></td>
        </tr>
      </table>
	  <table width="70%" border="0" cellpadding="0" cellspacing="0" class="width-thirty" id="floor-plans">
	    <tr>
	      <td width="82%" align="left" valign="top"><table border="0" align="center" cellpadding="5" cellspacing="0" class="tbl-width" style="background-color:#D2FFB7;">
	        <tr>
	          <td width="39%" align="left" valign="top"><h3>Floor Plans:</h3>
	            <?php echo $row['floor_plans']?></td>
	        </tr>
          </table></td>
        </tr>
      </table>
	  <table width="70%" border="0" cellpadding="0" cellspacing="0" class="width-thirty" id="availability">
	    <tr>
	      <td width="82%" align="left" valign="top"><table border="0" align="center" cellpadding="5" cellspacing="0" class="tbl-width" style="background-color:#D2FFB7;">
	        <tr>
	          <td width="39%" align="left" valign="top"><h3>Availability:</h3>
	            <p class="detail"><?php echo $row['availability']?></p></td>
	        </tr>
          </table></td>
        </tr>
      </table>
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      </table>
<div class="clear"></div>
	</div>


<?php 	} }?>
<!-- End Content Area -->

<?php
function title(){
	$id= $_GET['r_proj'];
$result = mysql_query("SELECT * FROM ".$_SESSION['user_id']."_real_project WHERE domain='$_SESSION[domain]' AND id =".$id);
if(!$result){ mysql_error(); }
	while($row = mysql_fetch_array($result)){
	echo $row['title'];
	}}

function meta(){
	$id= $_GET['r_proj'];
$result = mysql_query("SELECT * FROM ".$_SESSION['user_id']."_real_project WHERE domain='$_SESSION[domain]' AND id =".$id);
if(!$result){ mysql_error(); }
	while($row = mysql_fetch_array($result)){ ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="<?php echo $row['title']; ?>" />
<meta name="description" content="<?php echo $row['title']; ?>" />
<META NAME="robots" CONTENT="noindex">
    <?php 
	}}

?>	
