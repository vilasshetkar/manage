<?php 
include '../../login/dbc.php';
page_protect();
?>
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/Template.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- InstanceBeginEditable name="doctitle" -->
    <title>Edit | Copy Property</title>
    <!-- InstanceEndEditable -->
<link rel="stylesheet" type="text/css" href="../../../css/style.css"/>
<!--*********************>> Web Editor Tiny MCE Script << **************************************************** -->
<script type="text/javascript" src="../../_script/jquery-1.6.2.min.js"></script>
<script type="text/javascript" src="../../tiny_mce/tiny_mce.js"></script>
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
 	 <a href="../../select-site.php" title="Click to Chang Editing Site!"><?php echo $row['domain']; ?></a>
	<?php }}?>
	</h1>
    </div>
    <table width="100%" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="100%" align="center" valign="top"><div class="mainbar">
          <ul class="mainmenu">
            <li><a href="responses.php">My Responses</a>
              <ul>
                <li><a href="responses.php?respo_for=property">Property Sale/Rent Out</a></li>
                <li><a href="responses.php?respo_for=web">Website Queries</a></li>
                <li><a href="responses.php?respo_for=project">Projects Inquiry</a></li>
              </ul>
            </li>
            <li><a href="#">My Property</a>
              <ul>
                <li><a href="addproperty.php">Add Property</a></li>
                <li><a href="viewproperty.php">View Property</a></li>
                <li><a href="addproject.php">Add Project</a></li>
                <li><a href="viewproject.php">Manage Projects</a></li>
              </ul>
            </li>
            <li><a href="#">My Profile</a>
              <ul>
                <li><a href="../../login/mysettings.php">Edit Profile/ Contacts</a></li>
                <li><a href="../../select-site.php">View All Sites</a></li>
                <li><a href="#">Request for New Site</a></li>
                <li><a href="../../login/logout.php">Logout</a></li>
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
<?php // ******************** ARTICLE INSERT CODE *************************************************************************

//echo $_POST['prop_img'];
if(isset($_FILES['prop_img'])){
	
    $errors= array();
	//foreach($_FILES['prop_img']['tmp_name'] as $key => $tmp_name ){
		$file_name = $_FILES['prop_img']['name'];
		$file_size =$_FILES['prop_img']['size'];
		$file_tmp =$_FILES['prop_img']['tmp_name'];
		$file_type=$_FILES['prop_img']['type'];	
        if($file_size > 2097152){
			$errors[]='File size must be less than 2 MB';
        }
		if ((!$file_type == "image/jpeg") || (!$file_type == "image/png") || (!$file_type == "image/gif")){
			$errors[]='<strong>File type must be .gif, .png, .jpeg, .jpg only</strong>';			
				};
				

       $desired_dir= $propImgFolder; 
        if(empty($errors)==true){
            if(is_dir($desired_dir)==false){
                mkdir($root."/".$desired_dir, 0700);		// Create directory if it does not exist
            }
            if(file_exists($root."/".$desired_dir."/".$file_name)==false){
                move_uploaded_file($file_tmp,$root."/".$desired_dir."/".$file_name);
            }else{									// rename the file if another one exist
                
				$file_name=time()."-".$file_name;
                 rename($file_tmp, $root."/".$desired_dir."/".$file_name) ;	
				 chmod($root."/".$desired_dir."/".$file_name, 0644);			
            }
        }else{
                foreach($errors as $er) { echo $er.'<br />'; };
				echo "Property not updated properly due to errors!";
				
        }
    
	if(empty($errors)){
		echo "Files uploaded Successfully ";
		$fileName = "http://".$_SERVER['HTTP_HOST']."/".$desired_dir."/".$file_name;
	}
}else{ 
	$fileName = $_POST['prop_image'];
}



if (isset($_POST['copy'])) {

$sql="INSERT INTO `$_SESSION[user_id]_real_property` (`id`, `user_id`, `featured`, `prop_image`, `property_for`, `category`, `type`, `buildup_area`, `build_unit`, `land_area`, `land_unit`, `carpet_area`, `carpet_unit`, `price`, `currency`, `bedrooms`, `bathrooms`, `country`, `state`, `city`, `address`, `location`, `title`,`browsertitle`, `society_name`, `prop_desc`, `cont_name`, `contact`, `email`, `cont_address`, `prop_age`, `furnished`, `transaction_type`, `prop_owner`, `floors`, `on_floor`, `parking`, `hospital`, `airport`, `railway`, `school`, `power`, `water`, `lift`, `res_parking`, `security`, `maintenance`, `gym`, `park`, `tarrace`, `swimming`, `quarters`, `club`, `facing`, other_domain, meta_desc, meta_key, browsertitle) VALUES (NULL, '$_POST[user_id]', '$_POST[featured]', '$fileName', '$_POST[property_for]', '$_POST[category]', '$_POST[type]', '$_POST[build_area]', '$_POST[build_unit]', '$_POST[land_area]', '$_POST[land_unit]', '$_POST[carpet_area]', '$_POST[carpet_unit]', '$_POST[price]', '$_POST[currency]', '$_POST[bedrooms]', '$_POST[bathrooms]', '$_POST[country]', '$_POST[state]', '$_POST[city]', '$_POST[address]', '$_POST[location]', '$_POST[title]', '$_POST[browsertitle]', '$_POST[society_name]', '$_POST[prop_desc]', '$_POST[cont_name]', '$_POST[contact_no]', '$_POST[email]', '$_POST[cont_address]', '$_POST[prop_age]', '$_POST[furnished]', '$_POST[transaction_type]', '$_POST[prop_owner]', '$_POST[floors]', '$_POST[on_floor]', '$_POST[parking]', '$_POST[hospital]', '$_POST[airport]', '$_POST[railway]', '$_POST[school]', '$_POST[power]', '$_POST[water]', '$_POST[lift]', '$_POST[res_parking]', '$_POST[security]', '$_POST[maintenance]', '$_POST[gym]', '$_POST[park]', '$_POST[tarrace]', '$_POST[swimming]', '$_POST[quarters]', '$_POST[club]', '$_POST[facing]','$_POST[other_domain]','$_POST[meta_desc]','$_POST[meta_key]','$_POST[browsertitle]');";
if (!mysql_query($sql))
  {
  die('Error: ' . mysql_error());
  }
echo "1 New Property Copied Sucessfully!";
		$prop_id = mysql_insert_id();

}
?>

<?php // ******************** ARTICLE UPDATE CODE *************************************************************************
if (isset($_POST['Update'])) {
//  $id = $_GET['ID'];

$sql="UPDATE `$_SESSION[user_id]_real_property` SET
 `user_id`='$_POST[user_id]', 
 `featured`= '$_POST[featured]', 
 `prop_image` = '$fileName',
 `property_for`='$_POST[property_for]',
 `category`= '$_POST[category]',
 `type`= '$_POST[type]',
 `buildup_area`= '$_POST[build_area]',
 `build_unit`= '$_POST[build_unit]',
 `land_area`= '$_POST[land_area]',
 `land_unit`= '$_POST[land_unit]',
 `carpet_area`= '$_POST[carpet_area]',
 `carpet_unit`= '$_POST[carpet_unit]',
 `price`= '$_POST[price]',
 `currency`= '$_POST[currency]',
 `bedrooms`= '$_POST[bedrooms]',
 `bathrooms`= '$_POST[bathrooms]',
 `country`= '$_POST[country]',
 `state`= '$_POST[state]',
 `city`= '$_POST[city]', 
 `address`='$_POST[address]',
 `location`= '$_POST[location]', 
 `title`= '$_POST[title]',
 `browsertitle`= '$_POST[browsertitle]',
 `society_name`= '$_POST[society_name]',
 `prop_desc`= '$_POST[prop_desc]',
 `cont_name`= '$_POST[cont_name]',
 `contact`= '$_POST[contact]',
 `email`= '$_POST[email]',
 `cont_address`= '$_POST[cont_address]', 
 `prop_age`='$_POST[prop_age]',
 `furnished`= '$_POST[furnished]',
 `transaction_type`= '$_POST[transaction_type]',
 `prop_owner`= '$_POST[prop_owner]',
 `floors`= '$_POST[floors]',
 `on_floor`= '$_POST[on_floor]',
 `parking`= '$_POST[parking]',
 `hospital`= '$_POST[hospital]',
 `airport`= '$_POST[airport]',
 `railway`= '$_POST[railway]',
 `school`= '$_POST[school]',
 `power`= '$_POST[power]',
 `water`= '$_POST[water]',
 `lift`= '$_POST[lift]',
 `res_parking`= '$_POST[res_parking]',
 `security`= '$_POST[security]',
 `maintenance`= '$_POST[maintenance]',
 `gym`= '$_POST[gym]',
 `park`= '$_POST[park]',
 `tarrace`= '$_POST[tarrace]',
 `swimming`= '$_POST[swimming]',
 `quarters`= '$_POST[quarters]',
 `club`= '$_POST[club]',
 `meta_desc`= '$_POST[meta_desc]',
 `meta_key`= '$_POST[meta_key]',
 `browsertitle`= '$_POST[browsertitle]',
 `facing`= '$_POST[facing]' WHERE id='$_POST[id]'";
if (!mysql_query($sql))
  {
  die('Error: ' . mysql_error());
  }
else {echo "1 New Article Added Sucessfully!";
//echo '<script type="text/javascript">window.history.go(-2);</script>';

}}
?>

<div class="content">
<?php if (isset($_GET['prop_id']) || isset($_GET['prop_copy'])) {
	if (isset($_GET['prop_id'])) {
		$pro_id = $_GET['prop_id'];
	}else {
		$pro_id = $_GET['prop_copy'];
		} ?>
<?php $result= mysql_query("SELECT * FROM `$_SESSION[user_id]_real_property` WHERE id=$pro_id");
while ($row= mysql_fetch_assoc($result)){  ?>
  <form id="form1" name="form1" method="post" action="" enctype="multipart/form-data">
  <table class="border">
    <tbody>
      <tr valign="top">
        <td colspan="4"><h1>Property info</h1></td>
      </tr>
      <tr valign="top">
        <td width="1%">&nbsp;</td>
        <td width="20%">* Property for</td>
        <td colspan="2"><input name="property_for" id="listfor" value="Sale" type="radio" <?php if($row['property_for']=='Sale'){ echo 'CHECKED';}?>  />
          Sale
            <input name="property_for" id="listfor" type="radio" value="Rent" <?php if($row['property_for']=='Rent'){ echo 'CHECKED';}?>/>Rent 
        <input name="property_for" id="listfor" type="radio" value="PG" <?php if($row['property_for']=='PG'){ echo 'CHECKED';}?>/>PG</td>
      </tr>
      <tr valign="top">
        <td id="text_cat_id_id2">&nbsp;</td>
        <td id="text_cat_id_id2">* Featured</td>
        <td colspan="2"><input name="featured" id="listfor2" type="radio" value="1" <?php if($row['featured']=='1') echo 'CHECKED'?> />
Yes 
  <input name="featured" id="listfor2" type="radio" value="0" <?php if($row['featured']=='0') echo 'CHECKED'?> />
No </td>
      </tr>
      <tr valign="top">
        <td id="text_cat_id_id">&nbsp;</td>
        <td id="text_cat_id_id">* Property Category</td>
        <td colspan="2">
              <select name="category" id="category">
                 
                <option value="<?php echo $row['category'];?>"><?php echo $row['category'];?></option>
                 
                <option value="Residential Property">Residential Property</option>
                 
                <option value="Commercial Property">Commercial Property</option>
                 
                <option value="Agricultural land">Agricultural land</option>
                 
                <option value="Industrial Property">Industrial Property</option>
                 
              </select>
      </td>
      </tr>
      <tr valign="top" id="subcatdisplay">
        <td id="text_sub_cat_id">&nbsp;</td>
        <td id="text_sub_cat_id">* Property Type</td>
        <td colspan="2">
              <input name="type" id="type" value="<?php echo $row['type'];?>">
	  </td>
      </tr>
      <tr valign="top">
        <td id="text_area_id">&nbsp;</td>
        <td id="text_area_id">* Built Up Area</td>
        <td colspan="2">
              <input name="build_area" type="text" id="build_area" maxlength="8" value="<?php echo $row['buildup_area'];?>" />
                <select name="build_unit" id="build_unit" >
                  <option value=""></option>
                  <option value="<?php echo $row['build_unit'];?>"><?php echo $row['build_unit'];?></option>
                  <option value="Sq. Feet">Sq. Feet</option>
                   		
                  <option value="Cent">Cent</option>
                   		
                  <option value="Sq. Yards">Sq. Yards</option>
                   		
                  <option value="Acre">Acre</option>
                   		
                  <option value="Sq. Meter">Sq. Meter</option>
                   		
                  <option value="Bigha">Bigha</option>
                   		
                  <option value="Hectares">Hectares</option>
                   		
                  <option value="Guntha">Guntha</option>
                   		
                  <option value="Marla">Marla</option>
               </select>
		</td>
      </tr>
      <tr valign="top">
        <td id="text_landarea_id">&nbsp;</td>
        <td id="text_landarea_id">* Plot / Land Area</td>
        <td colspan="2">
              <input name="land_area" type="text" id="land_area" maxlength="8" value="<?php echo $row['land_area'];?>"  />
                <select name="land_unit" id="land_unit" >
                   
                  <option value="<?php echo $row['land_unit'];?>"><?php echo $row['land_unit'];?></option>
                   	
                  <option value="Sq. Feet">Sq. Feet</option>
                   		
                  <option value="Cent">Cent</option>
                   		
                  <option value="Sq. Yards">Sq. Yards</option>
                   		
                  <option value="Acre">Acre</option>
                   		
                  <option value="Sq. Meter">Sq. Meter</option>
                   		
                  <option value="Bigha">Bigha</option>
                   		
                  <option value="Hectares">Hectares</option>
                   		
                  <option value="Guntha">Guntha</option>
                   		
                  <option value="Marla">Marla</option>
                   	
                </select>
		</td>
      </tr>
      <tr valign="top">
        <td>&nbsp;</td>
        <td>Carpet Area</td>
        <td colspan="2">
                <input name="carpet_area" type="text" id="carpet_area" maxlength="8" value="<?php echo $row['carpet_area'];?>"  />
                <select name="carpet_unit" id="carpet_unit">
                   
                  <option value="<?php echo $row['carpet_unit'];?>"><?php echo $row['carpet_unit'];?></option>
                   	
                  <option value="Sq. Feet">Sq. Feet</option>
                   		
                  <option value="Cent">Cent</option>
                   		
                  <option value="Sq. Yards">Sq. Yards</option>
                   		
                  <option value="Acre">Acre</option>
                   		
                  <option value="Sq. Meter">Sq. Meter</option>
                   		
                  <option value="Bigha">Bigha</option>
                   		
                  <option value="Hectares">Hectares</option>
                   		
                  <option value="Guntha">Guntha</option>
                   		
                  <option value="Marla">Marla</option>
                   	
                </select>
          </td>
      </tr>
      <tr valign="top">
        <td>&nbsp;</td>
        <td>Property Price</td>
        <td colspan="2"><input name="price" type="text" id="price" maxlength="8" value="<?php echo $row['price'];?>" />
          <select name="currency " id="currency ">
               
              <option value="<?php echo $row['currency'];?>"><?php echo $row['currency'];?></option>
               
              <option value="Thousand">Thousand</option>
               
              <option value="Lac">Lac</option>
               
              <option value="Crore">Crore</option>
               
            </select></td>
      </tr>
      <tr valign="top" id="bedroomshide">
        <td>&nbsp;</td>
        <td>Bedrooms</td>
        <td colspan="2"><select name="bedrooms" id="bedrooms">
          
               
              
          <option value="<?php echo $row['bedrooms'];?>"><?php echo $row['bedrooms'];?></option>
          
               	
              
          <option value="1">1</option>
          
               		
              
          <option value="2">2</option>
          
               		
              
          <option value="3">3</option>
          
               		
              
          <option value="4">4</option>
          
               		
              
          <option value="5">5</option>
          
               		
              
          <option value="6">6</option>
          
               		
              
          <option value="7">7</option>
          
               		
              
          <option value="8">8</option>
          
               		
              
          <option value="9">9</option>
          
               		
              
          <option value="10">10</option>
          
               		
              
          <option value="11">11</option>
          
               		
              
          <option value="12">12</option>
          
               		
              
          <option value="13">13</option>
          
               		
              
          <option value="14">14</option>
          
               		
              
          <option value="15">15</option>
          
               		
              
          <option value="16">16</option>
          
               		
              
          <option value="17">17</option>
          
               		
              
          <option value="18">18</option>
          
               		
              
          <option value="19">19</option>
          
               		
              
          <option value="20">20</option>
          
               		
              
          <option value="21">21</option>
          
               		
              
          <option value="22">22</option>
          
               		
              
          <option value="23">23</option>
          
               		
              
          <option value="24">24</option>
          
               		
              
          <option value="25">25</option>
          
               		
              
          <option value="26">26</option>
          
               		
              
          <option value="27">27</option>
          
               		
              
          <option value="28">28</option>
          
               		
              
          <option value="29">29</option>
          
               		
              
          <option value="30">30</option>
          
               		
              
          <option value="31">31</option>
          
               		
              
          <option value="32">32</option>
          
               		
              
          <option value="33">33</option>
          
               		
              
          <option value="34">34</option>
          
               		
              
          <option value="35">35</option>
          
               		
              
          <option value="36">36</option>
          
               		
              
          <option value="37">37</option>
          
               		
              
          <option value="38">38</option>
          
               		
              
          <option value="39">39</option>
          
               		
              
          <option value="40">40</option>
          
               		
              
          <option value="41">41</option>
          
               		
              
          <option value="42">42</option>
          
               		
              
          <option value="43">43</option>
          
               		
              
          <option value="44">44</option>
          
               		
              
          <option value="45">45</option>
          
               		
              
          <option value="46">46</option>
          
               		
              
          <option value="47">47</option>
          
               		
              
          <option value="48">48</option>
          
               		
              
          <option value="49">49</option>
          
               		
              
          <option value="50">50</option>
          
               		
              
          <option value="51">51</option>
          
               		
              
          <option value="52">52</option>
          
               		
              
          <option value="53">53</option>
          
               		
              
          <option value="54">54</option>
          
               		
              
          <option value="55">55</option>
          
               		
              
          <option value="56">56</option>
          
               		
              
          <option value="57">57</option>
          
               		
              
          <option value="58">58</option>
          
               		
              
          <option value="59">59</option>
          
               		
              
          <option value="60">60</option>
          
               		
              
          <option value="61">61</option>
          
               		
              
          <option value="62">62</option>
          
               		
              
          <option value="63">63</option>
          
               		
              
          <option value="64">64</option>
          
               		
              
          <option value="65">65</option>
          
               		
              
          <option value="66">66</option>
          
               		
              
          <option value="67">67</option>
          
               		
              
          <option value="68">68</option>
          
               		
              
          <option value="69">69</option>
          
               		
              
          <option value="70">70</option>
          
               		
              
          <option value="71">71</option>
          
               		
              
          <option value="72">72</option>
          
               		
              
          <option value="73">73</option>
          
               		
              
          <option value="74">74</option>
          
               		
              
          <option value="75">75</option>
          
               		
              
          <option value="76">76</option>
          
               		
              
          <option value="77">77</option>
          
               		
              
          <option value="78">78</option>
          
               		
              
          <option value="79">79</option>
          
               		
              
          <option value="80">80</option>
          
               		
              
          <option value="81">81</option>
          
               		
              
          <option value="82">82</option>
          
               		
              
          <option value="83">83</option>
          
               		
              
          <option value="84">84</option>
          
               		
              
          <option value="85">85</option>
          
               		
              
          <option value="86">86</option>
          
               		
              
          <option value="87">87</option>
          
               		
              
          <option value="88">88</option>
          
               		
              
          <option value="89">89</option>
          
               		
              
          <option value="90">90</option>
          
               		
              
          <option value="91">91</option>
          
               		
              
          <option value="92">92</option>
          
               		
              
          <option value="93">93</option>
          
               		
              
          <option value="94">94</option>
          
               		
              
          <option value="95">95</option>
          
               		
              
          <option value="96">96</option>
          
               		
              
          <option value="97">97</option>
          
               		
              
          <option value="98">98</option>
          
               		
              
          <option value="99">99</option>
          
               		
              
          <option value="100">100</option>
          
               	
            
        </select>
No(s).</td>
      </tr>
      <tr valign="top" id="bathroomshide">
        <td>&nbsp;</td>
        <td>Bathrooms</td>
        <td colspan="2"><select name="bathrooms" id="bathrooms">
          
               
              
          <option value="<?php echo $row['bathrooms'];?>"><?php echo $row['bathrooms'];?></option>
          
               	
              
          <option value="1">1</option>
          
               		
              
          <option value="2">2</option>
          
               		
              
          <option value="3">3</option>
          
               		
              
          <option value="4">4</option>
          
               		
              
          <option value="5">5</option>
          
               		
              
          <option value="6">6</option>
          
               		
              
          <option value="7">7</option>
          
               		
              
          <option value="8">8</option>
          
               		
              
          <option value="9">9</option>
          
               		
              
          <option value="10">10</option>
          
               		
              
          <option value="11">11</option>
          
               		
              
          <option value="12">12</option>
          
               		
              
          <option value="13">13</option>
          
               		
              
          <option value="14">14</option>
          
               		
              
          <option value="15">15</option>
          
               		
              
          <option value="16">16</option>
          
               		
              
          <option value="17">17</option>
          
               		
              
          <option value="18">18</option>
          
               		
              
          <option value="19">19</option>
          
               		
              
          <option value="20">20</option>
          
               		
              
          <option value="21">21</option>
          
               		
              
          <option value="22">22</option>
          
               		
              
          <option value="23">23</option>
          
               		
              
          <option value="24">24</option>
          
               		
              
          <option value="25">25</option>
          
               		
              
          <option value="26">26</option>
          
               		
              
          <option value="27">27</option>
          
               		
              
          <option value="28">28</option>
          
               		
              
          <option value="29">29</option>
          
               		
              
          <option value="30">30</option>
          
               		
              
          <option value="31">31</option>
          
               		
              
          <option value="32">32</option>
          
               		
              
          <option value="33">33</option>
          
               		
              
          <option value="34">34</option>
          
               		
              
          <option value="35">35</option>
          
               		
              
          <option value="36">36</option>
          
               		
              
          <option value="37">37</option>
          
               		
              
          <option value="38">38</option>
          
               		
              
          <option value="39">39</option>
          
               		
              
          <option value="40">40</option>
          
               		
              
          <option value="41">41</option>
          
               		
              
          <option value="42">42</option>
          
               		
              
          <option value="43">43</option>
          
               		
              
          <option value="44">44</option>
          
               		
              
          <option value="45">45</option>
          
               		
              
          <option value="46">46</option>
          
               		
              
          <option value="47">47</option>
          
               		
              
          <option value="48">48</option>
          
               		
              
          <option value="49">49</option>
          
               		
              
          <option value="50">50</option>
          
               		
              
          <option value="51">51</option>
          
               		
              
          <option value="52">52</option>
          
               		
              
          <option value="53">53</option>
          
               		
              
          <option value="54">54</option>
          
               		
              
          <option value="55">55</option>
          
               		
              
          <option value="56">56</option>
          
               		
              
          <option value="57">57</option>
          
               		
              
          <option value="58">58</option>
          
               		
              
          <option value="59">59</option>
          
               		
              
          <option value="60">60</option>
          
               		
              
          <option value="61">61</option>
          
               		
              
          <option value="62">62</option>
          
               		
              
          <option value="63">63</option>
          
               		
              
          <option value="64">64</option>
          
               		
              
          <option value="65">65</option>
          
               		
              
          <option value="66">66</option>
          
               		
              
          <option value="67">67</option>
          
               		
              
          <option value="68">68</option>
          
               		
              
          <option value="69">69</option>
          
               		
              
          <option value="70">70</option>
          
               		
              
          <option value="71">71</option>
          
               		
              
          <option value="72">72</option>
          
               		
              
          <option value="73">73</option>
          
               		
              
          <option value="74">74</option>
          
               		
              
          <option value="75">75</option>
          
               		
              
          <option value="76">76</option>
          
               		
              
          <option value="77">77</option>
          
               		
              
          <option value="78">78</option>
          
               		
              
          <option value="79">79</option>
          
               		
              
          <option value="80">80</option>
          
               		
              
          <option value="81">81</option>
          
               		
              
          <option value="82">82</option>
          
               		
              
          <option value="83">83</option>
          
               		
              
          <option value="84">84</option>
          
               		
              
          <option value="85">85</option>
          
               		
              
          <option value="86">86</option>
          
               		
              
          <option value="87">87</option>
          
               		
              
          <option value="88">88</option>
          
               		
              
          <option value="89">89</option>
          
               		
              
          <option value="90">90</option>
          
               		
              
          <option value="91">91</option>
          
               		
              
          <option value="92">92</option>
          
               		
              
          <option value="93">93</option>
          
               		
              
          <option value="94">94</option>
          
               		
              
          <option value="95">95</option>
          
               		
              
          <option value="96">96</option>
          
               		
              
          <option value="97">97</option>
          
               		
              
          <option value="98">98</option>
          
               		
              
          <option value="99">99</option>
          
               		
              
          <option value="100">100</option>
          
               	
            
        </select>
No(s).</td>
      </tr>
      <tr valign="top">
        <td>&nbsp;</td>
        <td>* Property Images</td>
        <td colspan="2">
        <input name="prop_img" type="file" id="prop_img"/> <img src="<?php echo $row['prop_image'];?>" width="100" />
        <input type="hidden" name="prop_image" value="<?php echo $row['prop_image'];?>" />
		</td>
      </tr>
      <tr valign="top">
        <td colspan="4"><h2>Property Location</h2></td>
      </tr>
      <tr valign="top">
        <td>&nbsp;</td>
        <td>Country</td>
        <td colspan="2"><input name="country" type="text" id="country" onblur="validate_form_field(this.value,'prop_address')" onkeypress="return disableEnterKey(event)" value="INDIA" readonly="readonly" /></td>
      </tr>
      <tr valign="top">
        <td id="text_prop_state_id_id">&nbsp;</td>
        <td id="text_prop_state_id_id">* State</td>
        <td colspan="2"><select name="state" id="state" >
          <option value="<?php echo $row['state'];?>" selected="selected"><?php echo $row['state'];?></option>
          <option value="Andaman &amp; Nicobar">Andaman &amp; Nicobar</option>
          <option value="Andhra Pradesh">Andhra Pradesh</option>
          <option value="Arunachal Pradesh">Arunachal Pradesh</option>
          <option value="Assam">Assam</option>
          <option value="Bihar">Bihar</option>
          <option value="Chandigarh">Chandigarh </option>
          <option value="Chhattisgarh">Chhattisgarh</option>
          <option value="Dadra &amp; Nagar Haveli">Dadra &amp; Nagar Haveli</option>
          <option value="Daman &amp; Diu">Daman &amp; Diu</option>
          <option value="Delhi">Delhi</option>
          <option value="Gujarat">Gujarat</option>
          <option value="Haryana">Haryana</option>
          <option value="Himachal Pradesh">Himachal Pradesh</option>
          <option value="Jammu &amp; Kashmir">Jammu &amp; Kashmir</option>
          <option value="Jharkhand">Jharkhand</option>
          <option value="Karnataka">Karnataka</option>
          <option value="Kerala">Kerala</option>
          <option value="Lakshadweep">Lakshadweep</option>
          <option value="Madhya Pradesh">Madhya Pradesh</option>
          <option value="Maharashtra">Maharashtra</option>
          <option value="Manipur">Manipur</option>
          <option value="Meghalaya">Meghalaya</option>
          <option value="Mizoram">Mizoram </option>
          <option value="Nagaland">Nagaland</option>
          <option value="Odisha">Odisha</option>
          <option value="Pondicherry">Pondicherry</option>
          <option value="Punjab">Punjab</option>
          <option value="Rajasthan">Rajasthan</option>
          <option value="Sikkim">Sikkim</option>
          <option value="Tamil Nadu">Tamil Nadu</option>
          <option value="Tripura">Tripura</option>
          <option value="Uttar Pradesh">Uttar Pradesh</option>
          <option value="Uttaranchal">Uttaranchal</option>
          <option value="West Bengal">West Bengal</option>
          <option value="Goa">Goa</option>
        </select></td>
      </tr>
      <tr valign="top">
        <td id="text_prop_city_id_id">&nbsp;</td>
        <td id="text_prop_city_id_id">* City</td>
        <td colspan="2"><input type="text" name="city" id="city" value="<?php echo $row['city'];?>">
      </td>
      </tr>
      <tr valign="top">
        <td id="text_prop_address_id">&nbsp;</td>
        <td id="text_prop_address_id">* Address</td>
        <td colspan="2"><textarea name="address" cols="30" id="address"><?php echo $row['address'];?></textarea></td>
      </tr>
      <tr valign="top">
        <td>&nbsp;</td>
        <td>Area / Location</td>
        <td colspan="2"><input name="location" type="text" id="location" value="<?php echo $row['location'];?>" size="40" maxlength="200" /></td>
      </tr>
      <tr valign="top">
        <td colspan="4"><h2>Description Title</h2></td>
      </tr>
      <tr valign="top">
        <td>&nbsp;</td>
        <td>Property Title</td>
        <td colspan="2"><textarea name="title" cols="70" id="title"><?php echo $row['title'];?></textarea></td>
      </tr>
      <tr valign="top">
        <td>&nbsp;</td>
        <td>Browser Title <br />
          ( Display in your website )</td>
        <td colspan="2"><textarea name="browsertitle" cols="70" id="browsertitle"><?php echo $row['browsertitle'];?></textarea></td>
      </tr>
      <tr valign="top">
        <td>&nbsp;</td>
        <td>Property Meta Description <br /></td>
        <td colspan="2"><textarea name="meta_desc" cols="70" id="meta_desc"><?php echo $row['meta_desc'];?></textarea></td>
      </tr>
      <tr valign="top">
        <td>&nbsp;</td>
        <td>Property Meta Keywords <br /></td>
        <td colspan="2"><textarea name="meta_key" cols="70" id="meta_key"><?php echo $row['meta_key'];?></textarea></td>
      </tr>
      <tr valign="top">
        <td>&nbsp;</td>
        <td>Society Name <br />
          ( 50 characters Only )</td>
        <td colspan="2">
<?php 
	  $projResult = mysql_query("SELECT * FROM `$_SESSION[user_id]_real_project` WHERE `status` = '1' GROUP BY `title`") or die(mysql_error()) ;
		  
?>
            <select name="society_name" id="society_name" >
		<?php while($projrow = mysql_fetch_array($projResult)){ ?>
			  <option value="<?php echo $projrow['title']; ?>" <?php if($projrow['title'] == $row['society_name']) echo "SELECTED" ; ?> ><?php echo $projrow['title']; ?></option>
			  
		<?php  } ?>            
            </select>
      </td>
      </tr>
      <tr valign="top">
        <td id="text_prop_desc_id">&nbsp;</td>
        <td id="text_prop_desc_id">* Property Description</td>
        <td colspan="2"><textarea name="prop_desc" cols="30" rows="4" id="prop_desc"><?php echo $row['prop_desc'];?></textarea></td>
      </tr>
    </tbody>
    <tbody>
      <tr valign="top">
        <td colspan="4"><h2>Property Contact Detail</h2></td>
      </tr>
    </tbody>
    <tbody>
    </tbody>
  <tbody id="contnew">
    <tr valign="top">
      <td id="text_contname_id">&nbsp;</td>
      <td id="text_contname_id">* Name</td>
      <td colspan="2"><input type="text" name="cont_name" id="cont_name" value="<?php echo $row['cont_name'];?>" /></td>
    </tr>
    <tr valign="top">
      <td id="text_contno_id">&nbsp;</td>
      <td id="text_contno_id">* Contact No.</td>
      <td colspan="2"><input type="text" name="contact" id="contact" value="<?php echo $row['contact'];?>"/> </td>
    </tr>
    <tr valign="top">
      <td id="text_contno_id2">&nbsp;</td>
      <td id="text_contno_id2">* Email</td>
      <td colspan="2"><input type="text" name="email" id="email" value="<?php echo $row['email'];?>"/></td>
    </tr>
    <tr valign="top">
      <td id="text_contaddress_id">&nbsp;</td>
      <td id="text_contaddress_id">* Address</td>
      <td colspan="2"><textarea name="cont_address" cols="30" rows="2" id="cont_address"><?php echo $row['cont_address'];?></textarea></td>
    </tr>
  </tbody>

  <tbody>
    <tr valign="top">
      <td colspan="4"><h1>Optional Property Details</h1></td>
    </tr>
    <tr valign="top">
      <td width="1%">&nbsp;</td>
      <td width="20%">Age of the Property</td>
      <td colspan="2"><select name="prop_age" id="prop_age">
        
             	
            
        <option value="">Select one</option>
        
             			
            
        <option value="Under Construction" <?php if($row['prop_age']=='Under Construction'){ echo 'SELECTED';}?>>Under Construction</option>
        
             				
            
        <option value="New Construction" <?php if($row['prop_age']=='New Construction'){ echo 'SELECTED';}?>>New Construction</option>
        
             				
            
        <option value="0 to 5 years" <?php if($row['prop_age']=='0 to 5 years'){ echo 'SELECTED';}?>>0 to 5 years</option>
        
             				
            
        <option value="5 to 10 years" <?php if($row['prop_age']=='5 to 10 years'){ echo 'SELECTED';}?>>5 to 10 years</option>
        
             				
            
        <option value="10 to 15 years" <?php if($row['prop_age']=='10 to 15 years'){ echo 'SELECTED';}?>>10 to 15 years</option>
        
             				
            
        <option value="15 to 20 years" <?php if($row['prop_age']=='15 to 20 years'){ echo 'SELECTED';}?>>15 to 20 years</option>
        
             				
            
        <option value="Above 20 years" <?php if($row['prop_age']=='Above 20 years'){ echo 'SELECTED';}?>>Above 20 years</option>
        
             			
          
      </select></td>
    </tr>
    <tr valign="top">
      <td width="1%">&nbsp;</td>
      <td width="20%">Furnished</td>
      <td colspan="2"><select name="furnished" id="furnished">
        
             	
            
        <option value="">Select one</option>
        
             			
            
        <option value="Furnished" <?php if($row['furnished']=='Furnished'){ echo 'SELECTED';}?>>Furnished</option>
        
             				
            
        <option value="Unfurnished" <?php if($row['furnished']=='Unfurnished'){ echo 'SELECTED';}?>>Unfurnished</option>
        
             				
            
        <option value="Semi-Furnished" <?php if($row['furnished']=='Semi-Furnished'){ echo 'SELECTED';}?>>Semi-Furnished</option>
        
             			
          
      </select></td>
    </tr>
    <tr valign="top">
      <td width="1%">&nbsp;</td>
      <td width="20%">Transaction Type</td>
      <td colspan="2"><select name="transaction_type" id="transaction_type">
        
             	
            
        <option value="">Select one</option>
        
             			
            
        <option value="Resale Property" <?php if($row['transaction_type']=='Resale Property'){ echo 'SELECTED';}?>>Resale Property</option>
        
             				
            
        <option value="New Property" <?php if($row['transaction_type']=='New Property'){ echo 'SELECTED';}?>>New Property</option>
        
             			
          
      </select></td>
    </tr>
    <tr valign="top">
      <td width="1%">&nbsp;</td>
      <td width="20%">Property Ownership</td>
      <td colspan="2"><select name="prop_owner" id="prop_owner">
        
             	
            
        <option value="">Select one</option>
        
             	
            
        <option value="Individual" <?php if($row['prop_owner']=='Individual'){ echo 'SELECTED';}?>>Individual</option>
        
             	
            
        <option value="others" <?php if($row['prop_owner']=='others'){ echo 'SELECTED';}?>>others</option>
        
             	
            
        <option value="A Broker/Agent" <?php if($row['prop_owner']=='A Broker/Agent'){ echo 'SELECTED';}?>>A Broker/Agent</option>
        
             	
            
        <option value="A Builder/Promoter" <?php if($row['prop_owner']=='A Builder/Promoter'){ echo 'SELECTED';}?>>A Builder/Promoter</option>
        
             	
          
      </select></td>
    </tr>
    <tr valign="top">
      <td width="1%">&nbsp;</td>
      <td width="20%">Total Number of Floors</td>
      <td colspan="2"><select name="floors" id="floors">
        
             	
            
        <option value="<?php echo $row['floors'];?>" selected="selected"><?php echo $row['floors'];?></option>
        
             		    
            
        <option value="1">1 </option>
        
             	  		    
            
        <option value="2">2 </option>
        
             	  		    
            
        <option value="3">3 </option>
        
             	  		    
            
        <option value="4">4 </option>
        
             	  		    
            
        <option value="5">5 </option>
        
             	  		    
            
        <option value="6">6 </option>
        
             	  		    
            
        <option value="7">7 </option>
        
             	  		    
            
        <option value="8">8 </option>
        
             	  		    
            
        <option value="9">9 </option>
        
             	  		    
            
        <option value="10">10 </option>
        
             	  		    
            
        <option value="11">11 </option>
        
             	  		    
            
        <option value="12">12 </option>
        
             	  		    
            
        <option value="13">13 </option>
        
             	  		    
            
        <option value="14">14 </option>
        
             	  		    
            
        <option value="15">15 </option>
        
             	  		    
            
        <option value="16">16 </option>
        
             	  		    
            
        <option value="17">17 </option>
        
             	  		    
            
        <option value="18">18 </option>
        
             	  		    
            
        <option value="19">19 </option>
        
             	  		    
            
        <option value="20">20 </option>
        
             	  		    
            
        <option value="21">21 </option>
        
             	  		    
            
        <option value="22">22 </option>
        
             	  		    
            
        <option value="23">23 </option>
        
             	  		    
            
        <option value="24">24 </option>
        
             	  		    
            
        <option value="25">25 </option>
        
             	  		    
            
        <option value="26">26 </option>
        
             	  		    
            
        <option value="27">27 </option>
        
             	  		    
            
        <option value="28">28 </option>
        
             	  		    
            
        <option value="29">29 </option>
        
             	  		    
            
        <option value="30">30 </option>
        
             	  		    
            
        <option value="31">31 </option>
        
             	  		    
            
        <option value="32">32 </option>
        
             	  		    
            
        <option value="33">33 </option>
        
             	  		    
            
        <option value="34">34 </option>
        
             	  		    
            
        <option value="35">35 </option>
        
             	  		    
            
        <option value="36">36 </option>
        
             	  		    
            
        <option value="37">37 </option>
        
             	  		    
            
        <option value="38">38 </option>
        
             	  		    
            
        <option value="39">39 </option>
        
             	  		    
            
        <option value="40">40 </option>
        
             	  		    
            
        <option value="41">41 </option>
        
             	  		    
            
        <option value="42">42 </option>
        
             	  		    
            
        <option value="43">43 </option>
        
             	  		    
            
        <option value="44">44 </option>
        
             	  		    
            
        <option value="45">45 </option>
        
             	  		    
            
        <option value="46">46 </option>
        
             	  		    
            
        <option value="47">47 </option>
        
             	  		    
            
        <option value="48">48 </option>
        
             	  		    
            
        <option value="49">49 </option>
        
             	  		    
            
        <option value="50">50 </option>
        
             	  		
          
      </select></td>
    </tr>
    <tr valign="top">
      <td width="1%">&nbsp;</td>
      <td width="20%">Facing</td>
      <td colspan="2"><select name="facing" id="facing">
        
             	
            
        <option value="" <?php if($row['facing']==''){ echo 'SELECTED';}?>>Select</option>
        
             	
            
        <option value="East" <?php if($row['facing']=='East'){ echo 'SELECTED';}?>>East</option>
        
             	
            
        <option value="South" <?php if($row['facing']=='South'){ echo 'SELECTED';}?>>South</option>
        
             	
            
        <option value="West" <?php if($row['facing']=='West'){ echo 'SELECTED';}?>>West</option>
        
             	
            
        <option value="North" <?php if($row['facing']=='North'){ echo 'SELECTED';}?>>North</option>
        
             	
            
        <option value="South East" <?php if($row['facing']=='South East'){ echo 'SELECTED';}?>>South East</option>
        
             	
            
        <option value="South West" <?php if($row['facing']=='South West'){ echo 'SELECTED';}?>>South West</option>
        
             	
            
        <option value="North West" <?php if($row['facing']=='North West'){ echo 'SELECTED';}?>>North West</option>
        
             	
            
        <option value="North East" <?php if($row['facing']=='North East'){ echo 'SELECTED';}?>>North East</option>
        
             	
          
      </select></td>
    </tr>
    <tr valign="top">
      <td width="1%">&nbsp;</td>
      <td width="20%">Property On Floor</td>
      <td colspan="2"><select name="on_floor" id="on_floor">
        
             	
            
        <option value="<?php echo $row['on_floor'];?>" selected="selected"><?php echo $row['on_floor'];?></option>
        
             	
            
        <option value="Ground">Ground</option>
        
             			
            
        <option value="1">1 </option>
        
             				
            
        <option value="2">2 </option>
        
             				
            
        <option value="3">3 </option>
        
             				
            
        <option value="4">4 </option>
        
             				
            
        <option value="5">5 </option>
        
             				
            
        <option value="6">6 </option>
        
             				
            
        <option value="7">7 </option>
        
             				
            
        <option value="8">8 </option>
        
             				
            
        <option value="9">9 </option>
        
             				
            
        <option value="10">10 </option>
        
             				
            
        <option value="11">11 </option>
        
             				
            
        <option value="12">12 </option>
        
             				
            
        <option value="13">13 </option>
        
             				
            
        <option value="14">14 </option>
        
             				
            
        <option value="15">15 </option>
        
             				
            
        <option value="16">16 </option>
        
             				
            
        <option value="17">17 </option>
        
             				
            
        <option value="18">18 </option>
        
             				
            
        <option value="19">19 </option>
        
             				
            
        <option value="20">20 </option>
        
             				
            
        <option value="21">21 </option>
        
             				
            
        <option value="22">22 </option>
        
             				
            
        <option value="23">23 </option>
        
             				
            
        <option value="24">24 </option>
        
             				
            
        <option value="25">25 </option>
        
             				
            
        <option value="26">26 </option>
        
             				
            
        <option value="27">27 </option>
        
             				
            
        <option value="28">28 </option>
        
             				
            
        <option value="29">29 </option>
        
             				
            
        <option value="30">30 </option>
        
             				
            
        <option value="31">31 </option>
        
             				
            
        <option value="32">32 </option>
        
             				
            
        <option value="33">33 </option>
        
             				
            
        <option value="34">34 </option>
        
             				
            
        <option value="35">35 </option>
        
             				
            
        <option value="36">36 </option>
        
             				
            
        <option value="37">37 </option>
        
             				
            
        <option value="38">38 </option>
        
             				
            
        <option value="39">39 </option>
        
             				
            
        <option value="40">40 </option>
        
             				
            
        <option value="41">41 </option>
        
             				
            
        <option value="42">42 </option>
        
             				
            
        <option value="43">43 </option>
        
             				
            
        <option value="44">44 </option>
        
             				
            
        <option value="45">45 </option>
        
             				
            
        <option value="46">46 </option>
        
             				
            
        <option value="47">47 </option>
        
             				
            
        <option value="48">48 </option>
        
             				
            
        <option value="49">49 </option>
        
             				
            
        <option value="50">50 </option>
        
             			
          
      </select></td>
    </tr>
    <tr valign="top">
      <td width="1%">&nbsp;</td>
      <td width="20%">No. of Car Parking</td>
      <td colspan="2"><select name="parking" id="parking">
        
             	
            
        <option value="<?php echo $row['parking'];?>" selected="selected"><?php echo $row['parking'];?></option>
        
             			
            
        <option value="1">1 </option>
        
             				
            
        <option value="2">2 </option>
        
             				
            
        <option value="3">3 </option>
        
             				
            
        <option value="4">4 </option>
        
             				
            
        <option value="5">5 </option>
        
             				
            
        <option value="6">6 </option>
        
             				
            
        <option value="7">7 </option>
        
             				
            
        <option value="8">8 </option>
        
             				
            
        <option value="9">9 </option>
        
             				
            
        <option value="10">10 </option>
        
             			
          
      </select></td>
    </tr>
    <tr valign="top">
      <td colspan="4"><h2>Land Mark</h2></td>
    </tr>
    <tr valign="top">
      <td>&nbsp;</td>
      <td>Hospitals</td>
      <td colspan="2"><input name="hospital" id="hospital" maxlength="100" type="text" value="<?php echo $row['hospital'];?>" />
        kms</td>
    </tr>
    <tr valign="top">
      <td>&nbsp;</td>
      <td>Airport</td>
      <td colspan="2"><input name="airport" id="airport" maxlength="100" type="text" value="<?php echo $row['airport'];?>" />
kms</td>
    </tr>
    <tr valign="top">
      <td>&nbsp;</td>
      <td>Railway Station</td>
      <td colspan="2"><input name="railway" id="railway" maxlength="100" type="text" value="<?php echo $row['railway'];?>" />
kms</td>
    </tr>
    <tr valign="top">
      <td>&nbsp;</td>
      <td>School</td>
      <td colspan="2"><input name="school" id="school" maxlength="100" type="text" value="<?php echo $row['school'];?>" />
kms</td>
    </tr>
    <tr valign="top">
      <td colspan="4"><h2>Amenities</h2></td>
    </tr>
    <tr valign="top">
      <td></td>
      <td colspan="3"><table width="98%" border="1" bordercolor="#CCCCCC">
        <tbody>
          <tr>
            <td width="5%">
            <input name="power" type="checkbox" id="power" value="1" <?php if($row['power']=='1'){ echo 'CHECKED';}?>/>
            </td>
            <td width="28%">Power Backup</td>
            <td width="5%"><input name="water" type="checkbox" id="water" value="1" <?php if($row['water']=='1'){ echo 'CHECKED';}?>/></td>
            <td width="28%">Water Storage</td>
            <td width="5%"><input name="lift" type="checkbox" id="lift" value="1" <?php if($row['lift']=='1'){ echo 'CHECKED';}?>/></td>
            <td>Lift</td>
          </tr>
          <tr>
            <td><input name="res_parking" type="checkbox" id="res_parking" value="1" <?php if($row['res_parking']=='1'){ echo 'CHECKED';}?>/></td>
            <td>Reserve Parking</td>
            <td><input name="security" type="checkbox" id="security" value="1" <?php if($row['security']=='1'){ echo 'CHECKED';}?>/></td>
            <td>Security</td>
            <td><input name="maintenance" type="checkbox" id="maintenance" value="1" <?php if($row['maintenance']=='1'){ echo 'CHECKED';}?>/></td>
            <td>Maintenance Staff</td>
          </tr>
          <tr>
            <td><input name="gym" type="checkbox" id="gym" value="1" <?php if($row['gym']=='1'){ echo 'CHECKED';}?>/></td>
            <td>GYM</td>
            <td><input name="park" type="checkbox" id="park" value="1" <?php if($row['park']=='1'){ echo 'CHECKED';}?>/></td>
            <td>Park</td>
            <td><input name="tarrace" type="checkbox" id="tarrace" value="1" <?php if($row['tarrace']=='1'){ echo 'CHECKED';}?>/></td>
            <td>Private Tarrace</td>
          </tr>
          <tr>
            <td><input name="swimming" type="checkbox" id="swimming" value="1" <?php if($row['swimming']=='1'){ echo 'CHECKED';}?>/></td>
            <td>Swimming Pool</td>
            <td><input name="quarters" type="checkbox" id="quarters" value="1" <?php if($row['quarters']=='1'){ echo 'CHECKED';}?>/></td>
            <td>Servant Quarters</td>
            <td><input name="club" type="checkbox" id="club" value="1" <?php if($row['club']=='1'){ echo 'CHECKED';}?>/></td>
            <td>Club House</td>
          </tr>
          <tr></tr>
        </tbody>
      </table></td>
      </tr>
    <tr valign="top">
      <td>&nbsp;</td>
      <td colspan="2"> 
        
        <input name="user_id" type="hidden" id="user_id" value="1" />
        <input name="id" type="hidden" id="id" value="<?php echo $row['id']; ?>" />
        <?php if (isset($_GET['prop_copy'])) { ?>
          <?php $result = mysql_query("SELECT * FROM `user_sites` WHERE user_id='$_SESSION[user_id]' and status='1'") or die(mysql_error()); ?>
          Select Site to copy:
          <select name="other_domain" id="other_domain" style="width:150px">
            <?php while($row = mysql_fetch_array($result)){ ?>
            <option value="<?php echo $row['domain']; ?>"><?php echo $row['domain'] ; ?></option>
            <?php } ?>
            </select>
          <?php } ?>
      </td>
      <td width="29%">
        <?php if (isset($_GET['prop_id'])) { ?>
          <input name="Update" type="submit" id="Update" style="width:150px; height:30px" onclick="return validatePropertyStep2();" value="Update" />
          <?php } else {?>
          <input name="copy" type="submit" id="copy" style="width:150px; height:30px" onclick="return validatePropertyStep2();" value="Copy Property" />
          <?php } ?>      </td>
    </tr>
  </tbody>
</table>
  </form>
<?php }} ?>
</div>
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
