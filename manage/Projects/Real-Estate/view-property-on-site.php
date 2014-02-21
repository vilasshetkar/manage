<?php
if(isset($_GET['r_prop'])){
function content(){
if(isset($_GET['r_prop'])){
	$id= $_GET['r_prop'];
	}
$result = mysql_query("SELECT * FROM ".$_SESSION['user_id']."_real_property WHERE domain=".$_SESSION['domain']." AND id =".$id);
if(!$result){ mysql_error();} // this condition for database error
while($row = mysql_fetch_array($result)){ ?>


<style type="text/css">
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
	width: auto;
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
	padding: 0px;
	margin-top: 0px;
	margin-right: 10px;
	margin-bottom: 0px;
	margin-left: 10px;
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
	width: 380px;
}
.project-detail .tbl-width tr td .slider a {
	float: left;
	width: 380px;
	display: block;
	height: 220px;
}
</style>

	<div class="project-detail">
	  <h1> <?php echo $row['title']?> </h1>
	  <p class="detail"><?php echo $row['prop_desc']?></p>
	  <table border="0" align="center" cellpadding="5" cellspacing="0" class="tbl-width" style="background-color:#D2FFB7;">
	    <tr>
	      <td align="left" valign="top"><h3>Property Details:</h3></td>
	      <td width="40%" rowspan="2" align="center" valign="middle">
          <div class="slider">
              <?php
			$f_path = mysql_query( "SELECT * FROM $_SESSION[user_id]_upload_data WHERE domain='".$_SESSION['domain']."' AND file_for='prop-".$row['id']."-prop_img'") or die(mysql_error()); 
				?>
			<?php while($rows = mysql_fetch_array($f_path)){?>
            <a class="fancybox" rel="gall1" href="<?php echo $rows['path'];?>">
        <img src="<?php echo $rows['path']?>" />
			<?php } ?>

              </a>
          </div>
          </td>
        </tr>
	    <tr>
	      <td width="60%" align="left" valign="top">
          <table width="100%" cellpadding="5"  cellspacing="0" class="border">
	        <tbody>
	          <tr valign="top">
	            <td width="2%" align="left" valign="top">&nbsp;</td>
	            <td width="37%" align="left" valign="top">Property For</td>
	            <td width="3%" align="left" valign="top"><strong>:</strong></td>
	            <td width="58%" align="left" valign="top"><?php echo $row['property_for']?></td>
              </tr>
	          <tr valign="top">
	            <td align="left" valign="top">&nbsp;</td>
	            <td align="left" valign="top">Property Type</td>
	            <td align="left" valign="top"><strong>:</strong></td>
	            <td align="left" valign="top"><?php echo $row['type']?></td>
              </tr>
	          <tr valign="top">
	            <td align="left" valign="top">&nbsp;</td>
	            <td align="left" valign="top">Price</td>
	            <td align="left" valign="top"><strong>:</strong></td>
	            <td align="left" valign="top"><?php if($row['price']==0){echo "Contact Us!";}else {echo $row['price'];}?></td>
              </tr>
	          <tr valign="top">
	            <td align="left" valign="top">&nbsp;</td>
	            <td align="left" valign="top">Location</td>
	            <td align="left" valign="top"><strong>:</strong></td>
	            <td align="left" valign="top"><?php echo $row['location']?></td>
              </tr>
	          <tr valign="top">
	            <td align="left" valign="top">&nbsp;</td>
	            <td align="left" valign="top">Area</td>
	            <td align="left" valign="top"><strong>:</strong></td>
	            <td align="left" valign="top"><?php echo $row['buildup_area']?> <?php echo $row['build_unit']?></td>
              </tr>
            </tbody>
          </table></td>
        </tr>
      </table>
	  <h3>Property Built Up Details:</h3>
      <table border="0" align="center" cellpadding="5" cellspacing="0" class="tbl-width cont border">
        <tbody>
	        <tr>
	          <td width="12%" align="left"><strong>Furnishing</strong></td>
	          <td width="12%" align="left"><strong>Transaction</strong></td>
	          <td width="12%" align="left"><strong>Bedrooms</strong></td>
	          <td width="12%" align="left"><strong>Bathrooms</strong></td>
	          <td width="12%" align="left"><strong>Reserved Parking</strong></td>
          </tr>
	        <tr>
	          <td><?php echo $row['furnished']?></td>
	          <td><?php echo $row['transaction_type']?></td>
	          <td><?php echo $row['bedrooms']?></td>
	          <td><?php echo $row['bathrooms']?></td>
	          <td><?php echo $row['res_parking']?></td>
            </tr>
        </tbody>
      </table>
      <br />
	  <h3>Amenities:</h3>
	  <p class="detail"><?php if($row['power']=='1'){ echo 'Power Backup, ';}?><?php if($row['water']=='1'){ echo 'Water Storage, ';}?></p>
	  <h3>Property Address:</h3>
	  <p class="detail"><?php echo $row['address']?></p>
	  <h3>Property Seller Detail :      </h3>
	  <table width="100%" cellpadding="5" cellspacing="0" class="cont tbl-width">
        <tbody>
	        <tr valign="top">
	          <td width="20%">Contact Person</td>
	          <td width="4%">:</td>
	          <td width="76%"><?php echo $row['cont_name']?></td>
            </tr>
	        <tr valign="top">
	          <td width="20%">Mobile</td>
	          <td width="4%">:</td>
	          <td width="76%"><?php echo $row['contact']?></td>
            </tr>
	        <tr valign="top">
	          <td>Email</td>
	          <td>:</td>
	          <td colspan="3"><?php echo $row['email']?></td>
            </tr>
	        <tr valign="top">
	          <td>Contact Address</td>
	          <td>:</td>
	          <td colspan="3"><?php echo $row['cont_address']?></td>
            </tr>
        </tbody>
      </table>
	</div>


<?php 	}} ?>
<!-- End Content Area -->
<?php 
function title(){
if(isset($_GET['r_prop'])){
	$id= $_GET['r_prop'];
	}
$result = mysql_query("SELECT * FROM ".$_SESSION['user_id']."_real_property WHERE domain='$_SESSION[domain]' AND id =".$id);
if(!$result){ mysql_error(); }
	while($row = mysql_fetch_array($result)){
	echo $row['title'];
	}}

function meta(){
if(isset($_GET['r_prop'])){
	$id= $_GET['r_prop'];
	}
$result = mysql_query("SELECT * FROM ".$_SESSION['user_id']."_real_property WHERE domain='$_SESSION[domain]' AND id =".$id);
if(!$result){ mysql_error(); }
	while($row = mysql_fetch_array($result)){ ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="<?php echo $row['meta_key']; ?>" />
<meta name="description" content="<?php echo $row['meta_desc']; ?>" />
<META NAME="robots" CONTENT="noindex">
    <?php 
	}}
}
?>
<?php 
if(isset($_GET['admin'])){
include '../../login/dbc.php';
session_start();
content();	}
?>