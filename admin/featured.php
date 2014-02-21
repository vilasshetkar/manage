<?php
function content(){
	?>

    <h2>Featured Property: </h2>
<?php 
$result = mysql_query("SELECT * FROM `".$_SESSION['user_id']."_real_property` WHERE featured='1' AND status='1' AND domain=".$_SESSION['domain']);
?>
    <?php		  	
while($row = mysql_fetch_array($result)){ ?>
    <div class="featured_property">
      <table border="0" cellpadding="0" cellspacing="0" class="property-img">
        <tr>
          <td><div class="property_img">
              <?php
			$f_path = mysql_query( "SELECT * FROM $_SESSION[user_id]_upload_data WHERE domain='".$_SESSION['domain']."' AND file_for='prop-".$row['id']."-prop_img' LIMIT 0,1") or die(mysql_error()); 
				?>
              <?php while($rows = mysql_fetch_array($f_path)){?>
              <a class="fancybox" href="?r_prop=<?php echo $row['id']; ?>"> <img src="<?php echo $rows['path']?>" />
              <?php } ?>
              </a> </div></td>
        </tr>
      </table>
      <h2><a href="?r_prop=<?php echo $row['id']; ?>"><?php echo $row['title']; ?></a></h2>
      <table border="1" cellpadding="5" cellspacing="0">
        <tr valign="top"></tr>
        <tr valign="top">
          <th width="19%">Property Type</th>
          <td width="81%"><?php echo $row['type']; ?> &rArr;<strong> For <?php echo $row['property_for']?></strong></td>
        </tr>
        <tr valign="top">
          <th>Built Up</th>
          <td><?php echo $row['buildup_area'].' '.$row['build_unit']; ?>, <?php echo $row['bedrooms']; ?> Bedroom(s), <?php echo $row['bathrooms']; ?> Bathroom(s)</td>
        </tr>
        <tr valign="top">
          <th>Location</th>
          <td><?php echo $row['address']; ?></td>
        </tr>
        <tr valign="top">
          <th>Price</th>
          <td><?php if($row['price']==0){echo "Contact Us!";}else {echo $row['price'];} ?></td>
        </tr>
        <tr valign="top">
          <th> </th>
          <td><a href="?r_prop=<?php echo $row['id']; ?>">More Detail</a> | <a class="sendmail" href="admin/send-message.php?prop_enq=<?php echo $row['id']; ?>&amp;domain=<?php echo $domain; ?>">Send Email</a> | <a href="#">Refer Friend</a></td>
        </tr>
      </table>
      <div class="clear"></div>
    </div>
    <?php } ?>
    <h2 align="justify">Featured Project: </h2>
    <div class="featured_project">
      <?php 

$result = mysql_query("SELECT * FROM `".$_SESSION['user_id']."_real_project` WHERE featured='1' AND status='1' AND domain=".$_SESSION['domain']);
?>
      <ul id="slider1">
        <?php		  	
while($row = mysql_fetch_array($result)){ ?>
        <li>
          <div class="project_box">
            <table width="100%" height="76" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td width="146" scope="col"><h1><?php echo $row['title']; ?></h1></td>
              </tr>
              <tr>
                <td align="center" valign="middle" class="projslide" scope="col"><?php
$f_path = mysql_query( "SELECT * FROM $_SESSION[user_id]_upload_data WHERE domain='".$_SESSION['domain']."' AND file_for='proj-".$row['id']."-proj_img'") or die(mysql_error()); 
?>
                  <?php while($rows = mysql_fetch_array($f_path)){?>
                  <a href="?r_proj=<?php echo $row['id']; ?>"> <img src="<?php echo $rows['path']?>" />
                  <?php } ?>
                  </a></td>
              </tr>
            </table>
            <table width="100%" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td width="77" align="left" valign="top" scope="col"><strong>Location:</strong></td>
                <td width="147" align="left" valign="top" scope="col"><?php echo $row['location']; ?></td>
              </tr>
              <tr>
                <td align="left" valign="top"><strong>Type:</strong></td>
                <td align="left" valign="top"><?php echo $row['type']; ?></td>
              </tr>
              <tr>
                <td colspan="2" align="left" valign="top"><a href="?r_proj=<?php echo $row['id']; ?>">More Detail</a></td>
              </tr>
            </table>
          </div>
        </li>
        <?php } ?>
      </ul>
    </div>
<?php
}

function title(){
$result = mysql_query("SELECT * FROM `".$_SESSION['user_id']."_real_property` WHERE status='1' AND domain=".$_SESSION['domain']);
if(!$result){ mysql_error(); }
	while($row = mysql_fetch_array($result)){
	echo $row['title'];
	}}


function meta(){
$result = mysql_query("SELECT * FROM `".$_SESSION['user_id']."_real_property` WHERE status='1' AND domain=".$_SESSION['domain']);
if(!$result){ mysql_error(); }
	while($row = mysql_fetch_array($result)){ ?>
<meta name="keywords" content="<?php echo $row['meta_key']; ?>" />
<meta name="description" content="<?php echo $row['meta_desc']; ?>" />
<META NAME="robots" CONTENT="noindex">

    <?php 
	}} 

?>
