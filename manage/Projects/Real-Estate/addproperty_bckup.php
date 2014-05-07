<?php 
include '../../login/dbc.php';
page_protect();
?>
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/Template.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- InstanceBeginEditable name="doctitle" -->
    <title>Add New Property</title>
    <style type="text/css">
    .content table h1 {
	color: #C00;
	margin: 0px;
	padding: 0px;
	border-top-width: 1px;
	border-right-width: 1px;
	border-bottom-width: 1px;
	border-left-width: 1px;
	border-bottom-style: solid;
	border-top-color: #999;
	border-right-color: #999;
	border-bottom-color: #999;
	border-left-color: #999;
	font-size: 18px;
	font-weight: normal;
}
    .content table h2 {
	color: #267BFB;
	margin: 0px;
	padding: 0px;
	border-bottom-style: dotted;
	border-bottom-width: 1px;
	font-size: 16px;
	font-weight: normal;
}
    </style>
    <link href="../../_script/Spray/SpryValidationSelect.css" rel="stylesheet" type="text/css" />
    <link href="../../_script/Spray/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
    <link href="../../_script/Spray/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
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
<script src="../../_script/Spray/SpryValidationSelect.js" type="text/javascript"></script>
    <script src="../../_script/Spray/SpryValidationTextField.js" type="text/javascript"></script>
    <script src="../../_script/Spray/SpryValidationTextarea.js" type="text/javascript"></script>
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
// Report all errors except E_NOTICE   
error_reporting(E_ALL ^ E_NOTICE);

if (isset($_POST['insert'])=="newproperty") {

$sql="INSERT INTO `$_SESSION[user_id]_real_property` (`id`, `user_id`, `featured`, `property_for`, `category`, `type`, `buildup_area`, `build_unit`, `land_area`, `land_unit`, `carpet_area`, `carpet_unit`, `price`, `currency`, `bedrooms`, `bathrooms`, `country`, `state`, `city`, `address`, `location`, `title`, `society_name`, `prop_desc`, `cont_name`, `contact`, `email`, `cont_address`, `prop_age`, `furnished`, `transaction_type`, `prop_owner`, `floors`, `on_floor`, `parking`, `hospital`, `airport`, `railway`, `school`, `power`, `water`, `lift`, `res_parking`, `security`, `maintenance`, `gym`, `park`, `tarrace`, `swimming`, `quarters`, `club`, `facing`, domain, meta_desc, meta_key) VALUES (NULL, '$_POST[user_id]', '$_POST[featured]', '$_POST[property_for]', '$_POST[category]', '$_POST[type]', '$_POST[build_area]', '$_POST[build_unit]', '$_POST[land_area]', '$_POST[land_unit]', '$_POST[carpet_area]', '$_POST[carpet_unit]', '$_POST[price]', '$_POST[currency]', '$_POST[bedrooms]', '$_POST[bathrooms]', '$_POST[country]', '$_POST[state]', '$_POST[city]', '$_POST[address]', '$_POST[location]', '$_POST[title]', '$_POST[society_name]', '$_POST[prop_desc]', '$_POST[cont_name]', '$_POST[contact_no]', '$_POST[email]', '$_POST[cont_address]', '$_POST[prop_age]', '$_POST[furnished]', '$_POST[transaction_type]', '$_POST[prop_owner]', '$_POST[floors]', '$_POST[on_floor]', '$_POST[parking]', '$_POST[hospital]', '$_POST[airport]', '$_POST[railway]', '$_POST[school]', '$_POST[power]', '$_POST[water]', '$_POST[lift]', '$_POST[res_parking]', '$_POST[security]', '$_POST[maintenance]', '$_POST[gym]', '$_POST[park]', '$_POST[tarrace]', '$_POST[swimming]', '$_POST[quarters]', '$_POST[club]', '$_POST[facing]','$_SESSION[domain]','$_POST[meta_desc]','$_POST[meta_key]');";
if (!mysql_query($sql))
  {
  die('Error: ' . mysql_error());
  }
echo "1 New Article Added Sucessfully!";
		$prop_id = mysql_insert_id();

}
?>

<!-- Project Image Upload Script -->
<?php
if(isset($_FILES['prop_img'])){
    $errors= array();
	foreach($_FILES['prop_img']['tmp_name'] as $key => $tmp_name ){
		$file_name = $_FILES['prop_img']['name'][$key];
		$file_size =$_FILES['prop_img']['size'][$key];
		$file_tmp =$_FILES['prop_img']['tmp_name'][$key];
		$file_type=$_FILES['prop_img']['type'][$key];	
        if($file_size > 10097152){
			$errors[]='File size must be less than 2 MB';
        }
		if ((!$file_type == "image/jpeg") || (!$file_type == "image/png") || (!$file_type == "image/gif")){
			$errors[]='<strong>File type must be .gif, .png, .jpeg, .jpg only</strong>';			
				};

        $desired_dir="$propImgFolder"; ///admin/uploaded/
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
                echo $errors;
        }
    }
	if(empty($errors)){
		echo "Files uploaded Successfully";
	}
}
?>



<div class="content">
  <form id="form1" name="form1" method="post" action="" enctype="multipart/form-data" >
    <table class="border">
      <tbody>
        <tr valign="top">
          <td colspan="3"><h1>Basic info:</h1></td>
          </tr>
        <tr valign="top">
          <td width="4%">&nbsp;</td>
          <td width="23%">* Property for</td>
          <td width="73%"><input name="property_for" id="listfor" type="radio" value="Sale" checked="checked" onclick="channgePropertyCat(this.value)" />
            Sale 
            <input name="property_for" id="listfor" type="radio" value="Rent" onclick="channgePropertyCat(this.value)" />
            Rent 
            <input name="property_for" id="listfor" type="radio" value="PG" onclick="channgePropertyCat(this.value)" />
            PG</td>
          </tr>
        <tr valign="top">
          <td id="text_cat_id_id2">&nbsp;</td>
          <td id="text_cat_id_id2">* Featured</td>
          <td><input name="featured" id="featured" type="radio" value="1"  />
            Yes 
            <input name="featured" type="radio" id="featured" value="0" checked="checked" />
            No </td>
          </tr>
        <tr valign="top">
          <td id="text_cat_id_id">&nbsp;</td>
          <td id="text_cat_id_id">* Property Category</td>
          <td><span id="spryselect1">
            <select name="category" id="category">
              
              
                 
                
              
              <option value="">Select Category</option>
              
              
                 
                
              
              <option value="Residential Property">Residential Property</option>
              
              
                 
                
              
              <option value="Commercial Property">Commercial Property</option>
              
              
                 
                
              
              <option value="Agricultural land">Agricultural land</option>
              
              
                 
                
              
              <option value="Industrial Property">Industrial Property</option>
              
              
                 
              
            
            </select>
<span class="selectRequiredMsg">Please select a Category.</span></span></td>
          </tr>
        <tr valign="top" id="subcatdisplay">
          <td id="text_sub_cat_id">&nbsp;</td>
          <td id="text_sub_cat_id">* Property Type</td>
          <td><span id="sprytextfield1">
            <input name="type" id="type" value="" required="required" />
            <span class="textfieldRequiredMsg">A value is required.</span></span></td>
          </tr>
        <tr valign="top">
          <td id="text_area_id">&nbsp;</td>
          <td id="text_area_id">* Built Up Area</td>
          <td><span id="sprytextfield2">
            <input name="build_area" type="text" id="build_area" maxlength="8" value="" required="required"/>
            <span class="textfieldRequiredMsg">A value is required.</span></span><span id="spryselect2">
            <select name="build_unit" id="build_unit">
              
                   
                  
              <option value="">Unit Area</option>
              
                   	
                  
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
            <span class="selectRequiredMsg">Please select an item.</span></span></td>
          </tr>
        <tr valign="top">
          <td id="text_landarea_id">&nbsp;</td>
          <td id="text_landarea_id">* Plot / Land Area</td>
          <td><span id="sprytextfield3">
            <input name="land_area" type="text" id="land_area" maxlength="8" value="" required="required"/>
            <span class="textfieldRequiredMsg">A value is required.</span></span><span id="spryselect3">
            <select name="land_unit" id="land_unit" >
              
                   
                  
              <option value="">Unit Area</option>
              
                   	
                  
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
            <span class="selectRequiredMsg">Please select an item.</span></span></td>
          </tr>
        <tr valign="top">
          <td>&nbsp;</td>
          <td>Carpet Area</td>
          <td>
            <input name="carpet_area" type="text" id="carpet_area" maxlength="8" value="" onkeypress="return disableEnterKey(event)" onblur="validate_form_field(this.value,'landarea')" />
            <select name="carpet_unit" id="carpet_unit">
                   
                  <option value="">Unit Area</option>
                   	
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
          <td><input name="price" type="text" id="price" maxlength="8" value="" onkeypress="return disableEnterKey(event)" onblur="validate_form_field(this.value,'landarea')" />
            <select name="currency " id="currency " onchange="if(this.value=='100000'){document.getElementById('optn').innerHTML='&lt;select name=\'price4\' style=\'width:80px\'&gt;&lt;option value=0&gt;Select&lt;/option&gt;&lt;option value=100&gt;Hundred&lt;/option&gt;&lt;option value=1000&gt;Thousand&lt;/option&gt;&lt;/select&gt;';}else{document.getElementById('optn').innerHTML='&lt;select name=\'price4\' id=\'price4\' style=\'width:80px\'&gt;&lt;option value=0&gt;Select&lt;/option&gt;&lt;option value=100&gt;Hundred&lt;/option&gt;&lt;option value=1000&gt;Thousand&lt;/option&gt;&lt;option value=100000&gt;Lac&lt;/option&gt;&lt;/select&gt;';}">
               
              <option value="">In Rupees</option>
               
              <option value="Thousand">Thousand</option>
               
              <option value="Lac">Lac</option>
               
              <option value="Crore">Crore</option>
               
            </select></td>
          </tr>
        <tr valign="top" id="bedroomshide">
          <td>&nbsp;</td>
          <td>Bedrooms</td>
          <td><select name="bedrooms" id="bedrooms">
          
               
              
          <option value="">Select one</option>
          
               	
              
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
          <td><select name="bathrooms" id="bathrooms">
          
               
              
          <option value="">Select one</option>
          
               	
              
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
          <td><input name="prop_img[]" type="file" multiple="multiple" required="required" id="prop_img[]"/>
            <input type="hidden" name="dir" value="../../upload/uploaded-files" />
            <input type="hidden" name="path" value="/admin/upload/uploaded-files" /></td>
        </tr>
        <tr valign="top">
          <td colspan="3"><h2>Property Location:</h2></td>
          </tr>
        <tr valign="top">
          <td>&nbsp;</td>
          <td>Country</td>
          <td><input name="country" type="text" id="country" onblur="validate_form_field(this.value,'prop_address')" onkeypress="return disableEnterKey(event)" value="INDIA" readonly="readonly" /></td>
          </tr>
        <tr valign="top">
          <td id="text_prop_state_id_id">&nbsp;</td>
          <td id="text_prop_state_id_id">* State</td>
          <td><span id="spryselect4">
            <select name="state" id="state" onchange="get_prop_state_city(this.value,'http://www.realestateindia.com','/ajax/prop_state_city_drop_down.php?id=show_city_subcity&amp;&amp;onblur_func=Y', 'city_disp')" onblur="validate_form_field(this.value,'prop_state_id')">
              <option value="" selected="selected">Select State</option>
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
            </select>
            <span class="selectRequiredMsg">Please select an item.</span></span></td>
          </tr>
        <tr valign="top">
          <td id="text_prop_city_id_id">&nbsp;</td>
          <td id="text_prop_city_id_id">* City</td>
          <td><span id="sprytextfield4">
            <input name="city" id="city" value="" required="required" />
            <span class="textfieldRequiredMsg">A value is required.</span></span></td>
          </tr>
        <tr valign="top">
          <td id="text_prop_address_id">&nbsp;</td>
          <td id="text_prop_address_id">* Address</td>
          <td><span id="sprytextarea1">
          <textarea name="address" cols="70" id="address" required="required"></textarea>
          <br />
          Remaining Chrs.: <span id="countsprytextarea1">&nbsp;</span><span class="textareaRequiredMsg">A value is required.</span><span class="textareaMaxCharsMsg">Exceeded maximum number of characters.</span></span></td>
          </tr>
        <tr valign="top">
          <td>&nbsp;</td>
          <td>* Area / Location</td>
          <td><span id="sprytextfield5">
            <input name="location" type="text" id="location" required="required" value="" size="70" maxlength="200" />
            <span class="textfieldRequiredMsg">A value is required.</span></span></td>
          </tr>
        <tr valign="top">
          <td colspan="3"><h2>Description Title:</h2></td>
        </tr>
        <tr valign="top">
          <td>&nbsp;</td>
          <td>* Property Title <br />
            ( Display in your website )</td>
          <td><span id="sprytextarea2">
          <textarea name="title" cols="70" id="title"></textarea>
          <br />
          Remaining Chrs.: <span id="countsprytextarea2">&nbsp;</span><span class="textareaRequiredMsg">A value is required.</span><span class="textareaMaxCharsMsg">Exceeded maximum number of characters.</span></span></td>
          </tr>
        <tr valign="top">
          <td>&nbsp;</td>
          <td>*  Meta Description</td>
          <td><span id="sprytextarea3">
          <textarea name="meta_desc" cols="70" id="meta_desc"></textarea>
          <br />
          Remaining Chrs.: <span id="countsprytextarea3">&nbsp;</span><span class="textareaRequiredMsg">A value is required.</span><span class="textareaMaxCharsMsg">Exceeded maximum number of characters.</span></span></td>
          </tr>
        <tr valign="top">
          <td>&nbsp;</td>
          <td>* Meta Keywords</td>
          <td><span id="sprytextarea4">
          <textarea name="meta_key" cols="70" id="meta_key"></textarea>
          <br />
          Remaining Chrs.: <span id="countsprytextarea4">&nbsp;</span><span class="textareaRequiredMsg">A value is required.</span><span class="textareaMaxCharsMsg">Exceeded maximum number of characters.</span></span></td>
          </tr>
        <tr valign="top">
          <td>&nbsp;</td>
          <td>* Society Name <br />
            ( 50 characters Only )</td>
          <td><span id="sprytextfield6">
          <input name="society_name" type="text" id="society_name" value="" size="70" maxlength="50" />
          <span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldMaxCharsMsg">Exceeded maximum number of characters.</span></span></td>
          </tr>
        <tr valign="top">
          <td id="text_prop_desc_id">&nbsp;</td>
          <td id="text_prop_desc_id">* Property Description</td>
          <td><span id="sprytextarea5">
          <textarea name="prop_desc" cols="70" rows="4" id="prop_desc" onblur="validate_form_field(this.value,'prop_desc')" onkeydown="textLimitCounter('prop_desc','limit_char',2000)" onkeyup="textLimitCounter('prop_desc','limit_char',2000)"></textarea>
          <br />
          Remaining Chrs.:          <span id="countsprytextarea5">&nbsp;</span><span class="textareaRequiredMsg">A value is required.</span><span class="textareaMaxCharsMsg">Exceeded maximum number of characters.</span></span></td>
          </tr>
        </tbody>
      <tbody>
        <tr valign="top">
          <td colspan="3"><h2>Property Contact Detail:</h2></td>
          </tr>
        </tbody>
      <tbody>
        </tbody>
      <tbody id="contnew">
        <tr valign="top">
          <td id="text_contname_id">&nbsp;</td>
          <td id="text_contname_id">* Name</td>
          <td><span id="sprytextfield7">
            <input name="cont_name" type="text" id="cont_name" onblur="validate_form_field(this.value,'contname')" value="" size="70" />
            <span class="textfieldRequiredMsg">A value is required.</span></span></td>
          </tr>
        <tr valign="top">
          <td id="text_contno_id">&nbsp;</td>
          <td id="text_contno_id">* Contact No.</td>
          <td><span id="sprytextfield8">
          <input name="contact_no" type="text" id="contact_no" onblur="validate_form_field(this.value,'contno')" value="" size="70" maxlength="18" />
          <span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldInvalidFormatMsg">Invalid format.</span></span></td>
          </tr>
        <tr valign="top">
          <td id="text_contno_id2">&nbsp;</td>
          <td id="text_contno_id2">* Email</td>
          <td><span id="sprytextfield9">
          <input name="email" type="text" id="email" onblur="validate_form_field(this.value,'contno')" value="" size="70" />
          <span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldInvalidFormatMsg">Invalid format.</span></span></td>
          </tr>
        <tr valign="top">
          <td id="text_contaddress_id">&nbsp;</td>
          <td id="text_contaddress_id">* Address</td>
          <td><span id="sprytextarea6">
          <textarea name="cont_address" cols="70" rows="2" id="cont_address" onblur="validate_form_field(this.value,'contaddress')"></textarea>
          <br />
          Remaining Chrs.: <span id="countsprytextarea6">&nbsp;</span><span class="textareaRequiredMsg">A value is required.</span><span class="textareaMaxCharsMsg">Exceeded maximum number of characters.</span></span></td>
          </tr>
        </tbody>
      
      <tbody>
        <tr valign="top">
          <td colspan="3"><h1>Optional Property Details:</h1></td>
          </tr>
        <tr valign="top">
          <td width="4%">&nbsp;</td>
          <td width="23%">Age of the Property</td>
          <td><select name="prop_age" id="prop_age">
        
             	
            
        <option value="">Select one</option>
        
             			
            
        <option value="Under Construction">Under Construction</option>
        
             				
            
        <option value="New Construction">New Construction</option>
        
             				
            
        <option value="0 to 5 years">0 to 5 years</option>
        
             				
            
        <option value="5 to 10 years">5 to 10 years</option>
        
             				
            
        <option value="10 to 15 years">10 to 15 years</option>
        
             				
            
        <option value="15 to 20 years">15 to 20 years</option>
        
             				
            
        <option value="Above 20 years">Above 20 years</option>
        
             			
          
      </select></td>
          </tr>
        <tr valign="top">
          <td width="4%">&nbsp;</td>
          <td width="23%">Furnished</td>
          <td><select name="furnished" id="furnished">
        
             	
            
        <option value="">Select one</option>
        
             			
            
        <option value="Furnished">Furnished</option>
        
             				
            
        <option value="Unfurnished">Unfurnished</option>
        
             				
            
        <option value="Semi-Furnished">Semi-Furnished</option>
        
             			
          
      </select></td>
          </tr>
        <tr valign="top">
          <td width="4%">&nbsp;</td>
          <td width="23%">Transaction Type</td>
          <td><select name="transaction_type" id="transaction_type">
        
             	
            
        <option value="">Select one</option>
        
             			
            
        <option value="Resale Property">Resale Property</option>
        
             				
            
        <option value="New Property">New Property</option>
        
             			
          
      </select></td>
          </tr>
        <tr valign="top">
          <td width="4%">&nbsp;</td>
          <td width="23%">Property Ownership</td>
          <td><select name="prop_owner" id="prop_owner">
        
             	
            
        <option value="">Select one</option>
        
             	
            
        <option value="Individual">Individual</option>
        
             	
            
        <option value="others">others</option>
        
             	
            
        <option value="A Broker/Agent">A Broker/Agent</option>
        
             	
            
        <option value="A Builder/Promoter">A Builder/Promoter</option>
        
             	
          
      </select></td>
          </tr>
        <tr valign="top">
          <td width="4%">&nbsp;</td>
          <td width="23%">Total Number of Floors</td>
          <td><select name="floors" id="floors">
        
             	
            
        <option value="">Select one</option>
        
             		    
            
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
          <td width="4%">&nbsp;</td>
          <td width="23%">Facing</td>
          <td><select name="facing" id="facing">
        
             	
            
        <option value="0" selected="selected">Select</option>
        
             	
            
        <option value="East">East</option>
        
             	
            
        <option value="South">South</option>
        
             	
            
        <option value="West">West</option>
        
             	
            
        <option value="North">North</option>
        
             	
            
        <option value="South East">South East</option>
        
             	
            
        <option value="South West">South West</option>
        
             	
            
        <option value="North West">North West</option>
        
             	
            
        <option value="North East">North East</option>
        
             	
          
      </select></td>
          </tr>
        <tr valign="top">
          <td width="4%">&nbsp;</td>
          <td width="23%">Property On Floor</td>
          <td><select name="on_floor" id="on_floor">
        
             	
            
        <option value="">Select</option>
        
             	
            
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
          <td width="4%">&nbsp;</td>
          <td width="23%">No. of Car Parking</td>
          <td><select name="parking" id="parking">
        
             	
            
        <option value="0">Select</option>
        
             			
            
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
          <td colspan="3"><h2>Land Mark:</h2></td>
          </tr>
        <tr valign="top">
          <td>&nbsp;</td>
          <td>Hospitals</td>
          <td><input name="hospital" id="hospital" maxlength="100" type="text" value="" />
            kms</td>
          </tr>
        <tr valign="top">
          <td>&nbsp;</td>
          <td>Airport</td>
          <td><input name="airport" id="airport" maxlength="100" type="text" value="" />
            kms</td>
          </tr>
        <tr valign="top">
          <td>&nbsp;</td>
          <td>Railway Station</td>
          <td><input name="railway" id="railway" maxlength="100" type="text" value="" />
            kms</td>
          </tr>
        <tr valign="top">
          <td>&nbsp;</td>
          <td>School</td>
          <td><input name="school" id="school" maxlength="100" type="text" value="" />
            kms</td>
          </tr>
        <tr valign="top">
          <td colspan="3"><h2>Amenities:</h2></td>
          </tr>
        <tr valign="top">
          <td></td>
          <td colspan="2"><table width="98%" border="1" bordercolor="#CCCCCC">
            <tbody>
              <tr>
                <td width="5%" align="center"><input name="power" type="checkbox" id="power" value="1" /></td>
                <td width="28%">Power Backup</td>
                <td width="5%" align="center"><input name="water" type="checkbox" id="water" value="1" /></td>
                <td width="28%">Water Storage</td>
                <td width="5%" align="center"><input name="lift" type="checkbox" id="lift" value="1" /></td>
                <td>Lift</td>
                </tr>
              <tr>
                <td align="center"><input name="res_parking" type="checkbox" id="res_parking" value="1" /></td>
                <td>Reserve Parking</td>
                <td align="center"><input name="security" type="checkbox" id="security" value="1" /></td>
                <td>Security</td>
                <td align="center"><input name="maintenance" type="checkbox" id="maintenance" value="1" /></td>
                <td>Maintenance Staff</td>
                </tr>
              <tr>
                <td align="center"><input name="gym" type="checkbox" id="gym" value="1" /></td>
                <td>GYM</td>
                <td align="center"><input name="park" type="checkbox" id="park" value="1" /></td>
                <td>Park</td>
                <td align="center"><input name="tarrace" type="checkbox" id="tarrace" value="1" /></td>
                <td>Private Tarrace</td>
                </tr>
              <tr>
                <td align="center"><input name="swimming" type="checkbox" id="swimming" value="1" /></td>
                <td>Swimming Pool</td>
                <td align="center"><input name="quarters" type="checkbox" id="quarters" value="1" /></td>
                <td>Servant Quarters</td>
                <td align="center"><input name="club" type="checkbox" id="club" value="1" /></td>
                <td>Club House</td>
                </tr>
              <tr></tr>
              </tbody>
            </table></td>
          </tr>
        <tr valign="top">
          <td>&nbsp;</td>
          <td> 
            <input name="user_id" type="hidden" id="user_id" value="1" />
            <input name="insert" type="hidden" id="insert" value="newproperty" /></td>
          <td><input name="Submit" type="submit" id="Submit" style="width:150px; height:30px" value="Submit" /></td>
          </tr>
        </tbody>
  </table>
    </form>
</div>
<script type="text/javascript">
var spryselect1 = new Spry.Widget.ValidationSelect("spryselect1", {validateOn:["blur"]});
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "none", {validateOn:["blur"]});
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2", "none", {validateOn:["blur"]});
var spryselect2 = new Spry.Widget.ValidationSelect("spryselect2");
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3", "none", {validateOn:["blur"]});
var spryselect3 = new Spry.Widget.ValidationSelect("spryselect3", {validateOn:["blur"]});
var spryselect4 = new Spry.Widget.ValidationSelect("spryselect4", {validateOn:["blur"]});
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4", "none", {validateOn:["blur"]});
var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1", {maxChars:255, counterId:"countsprytextarea1", counterType:"chars_remaining", validateOn:["blur"]});
var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5", "none", {validateOn:["blur"]});
var sprytextarea2 = new Spry.Widget.ValidationTextarea("sprytextarea2", {maxChars:255, counterId:"countsprytextarea2", counterType:"chars_remaining", validateOn:["blur"]});
var sprytextarea3 = new Spry.Widget.ValidationTextarea("sprytextarea3", {maxChars:2000, counterId:"countsprytextarea3", validateOn:["blur"], counterType:"chars_remaining", hint:"First 160 characters are effective for search engine optimization. So important data must be in first 160chrs."});
var sprytextarea4 = new Spry.Widget.ValidationTextarea("sprytextarea4", {maxChars:2000, counterId:"countsprytextarea4", counterType:"chars_remaining", validateOn:["blur"]});
var sprytextfield6 = new Spry.Widget.ValidationTextField("sprytextfield6", "none", {maxChars:50, validateOn:["blur"]});
var sprytextarea5 = new Spry.Widget.ValidationTextarea("sprytextarea5", {maxChars:2000, counterId:"countsprytextarea5", counterType:"chars_remaining", validateOn:["blur"]});
var sprytextfield7 = new Spry.Widget.ValidationTextField("sprytextfield7", "none", {validateOn:["blur"]});
var sprytextfield8 = new Spry.Widget.ValidationTextField("sprytextfield8", "phone_number", {format:"phone_custom", pattern:"0000000000", validateOn:["blur"], hint:"10 Digit Mobile no."});
var sprytextfield9 = new Spry.Widget.ValidationTextField("sprytextfield9", "email", {validateOn:["blur"]});
var sprytextarea6 = new Spry.Widget.ValidationTextarea("sprytextarea6", {maxChars:255, counterId:"countsprytextarea6", counterType:"chars_remaining"});
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
