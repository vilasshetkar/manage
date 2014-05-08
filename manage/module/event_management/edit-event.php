<?php 
include '../../login/dbc.php';
page_protect();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/Template.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- InstanceBeginEditable name="doctitle" -->
    <title>Edit Event</title>
    <link href="/manage/_script/Spray/SpryValidationSelect.css" rel="stylesheet" type="text/css" />
    <link href="/manage/_script/Spray/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
    <!-- InstanceEndEditable -->
<link rel="stylesheet" type="text/css" href="../../../css/style.css"/>
<!--*********************>> Web Editor Tiny MCE Script << **************************************************** -->
<script type="text/javascript" src="../../_script/jquery-1.6.2.min.js"></script>
<script type="text/javascript" src="../../tiny_mce/tiny_mce.js"></script>
<script type="text/javascript">
tinyMCE.init({
        // General options
        mode : "exact",
        elements : "content,amenities,specifications,availability,contact,overview",
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

		width : "95%",
		height : "400px",

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
<script src="/manage/_script/Spray/SpryValidationSelect.js" type="text/javascript"></script>
    <script src="/manage/_script/Spray/SpryValidationTextField.js" type="text/javascript"></script>
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
            <li><a href="../../Projects/Real-Estate/responses.php">My Responses</a>
              <ul>
                <li><a href="../../Projects/Real-Estate/responses.php?respo_for=property">Property Sale/Rent Out</a></li>
                <li><a href="../../Projects/Real-Estate/responses.php?respo_for=web">Website Queries</a></li>
                <li><a href="../../Projects/Real-Estate/responses.php?respo_for=project">Projects Inquiry</a></li>
              </ul>
            </li>
            <li><a href="#">My Property</a>
              <ul>
                <li><a href="../../Projects/Real-Estate/addproperty.php">Add Property</a></li>
                <li><a href="../../Projects/Real-Estate/viewproperty.php">View Property</a></li>
                <li><a href="../../Projects/Real-Estate/addproject.php">Add Project</a></li>
                <li><a href="../../Projects/Real-Estate/viewproject.php">Manage Projects</a></li>
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
<!-- CODE FOR INSERT AD DATA INTO DATABASE -->

<script type="text/javascript">
$(document).ready(function(){
	$("#Horizontal_size").hide();
	$("#ad_type").change(function() {
    $("#" + this.value + "_size").show().siblings(".ad_size").hide()
})
});
</script>



<?php
if(isset($_POST['update'])){
	$sql = mysql_query("UPDATE `event` SET `event_name`='$_POST[event_name]', `event_date`='$_POST[day]-$_POST[month]-$_POST[year]', `time`='$_POST[hrs]:$_POST[min]$_POST[time]', `venue`='$_POST[venue]', `description`='$_POST[description]',`expiry_date`='$_POST[e_day]-$_POST[e_month]-$_POST[e_year]', `user`=$_SESSION[user_id], `domain`=$_SESSION[domain],  `status`= '$_POST[status]', `meta_key`='$_POST[meta_key]', `meta_desc`='$_POST[meta_desc]' WHERE id=$_GET[event]") or die(mysql_error());
	if($sql){
		$msg = '<h2><font color="#990000">One record <strong>updated</strong> successfully!</font></h2>';
		echo $msg;
		}
}
?>
<?php if(!isset($msg) && isset($_GET['event'])){ 
	$edit = mysql_query("SELECT * FROM `event` WHERE id = $_GET[event] AND domain = $_SESSION[domain] AND user = $_SESSION[user_id]") or die(mysql_error());
 while($e_row = mysql_fetch_array($edit)) {?>
<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <table border="0" cellpadding="0" cellspacing="0" class="border cellborder">
    <tr>
      <td colspan="4"><h1>Create New Advertisement:</h1></td>
      </tr>
    <tr>
      <td align="left" valign="top">Event Name:</td>
      <td colspan="3" align="left" valign="top"><span id="sprytextfield1">
        <input name="event_name" type="text" id="event_name" size="40" value="<?php echo $e_row['event_name'] ?>" />
        <span class="textfieldRequiredMsg">A value is required.</span></span></td>
    </tr>
    <tr>
      <td align="left" valign="top">Status:</td>
      <td colspan="3" align="left" valign="top"><input name="status" type="radio" id="Publish" value="1" <?php if($e_row['status']==1) echo 'CHECKED'; ?> />
        Publish 
          <input type="radio" name="status" id="Publish2" value="0" <?php if($e_row['status']==0) echo 'CHECKED'; ?> />
UnPublish</td>
    </tr>
    <tr>
      <td align="left" valign="top">Event Date:</td>
      <td width="39%" align="left" valign="top"><span id="spryselect3">
        <select name="day" id="day">
          <option value="<?php echo substr($e_row['event_date'],0,2) ?>"><?php echo substr($e_row['event_date'],0,2) ?></option>
          <option value="01">01</option>
          <option value="02">02</option>
          <option value="03">03</option>
          <option value="04">04</option>
          <option value="05">05</option>
          <option value="06">06</option>
          <option value="07">07</option>
          <option value="08">08</option>
          <option value="09">09</option>
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
          </select>
        <span class="selectRequiredMsg">Please select an item.</span></span>/<span id="spryselect1">
          <select name="month" id="month">
            <option>Month</option>
            <option value="01" <?php if(substr($e_row['event_date'],3,5)==01) echo 'SELECTED'; ?>>January (01)</option>
            <option value="02" <?php if(substr($e_row['event_date'],3,5)==02) echo 'SELECTED'; ?>>February (02)</option>
            <option value="03" <?php if(substr($e_row['event_date'],3,5)==03) echo 'SELECTED'; ?>>March (03)</option>
            <option value="04" <?php if(substr($e_row['event_date'],3,5)==04) echo 'SELECTED'; ?>>April (04)</option>
            <option value="05" <?php if(substr($e_row['event_date'],3,5)==05) echo 'SELECTED'; ?>>May (05)</option>
            <option value="06" <?php if(substr($e_row['event_date'],3,5)==06) echo 'SELECTED'; ?>>June (06)</option>
            <option value="07" <?php if(substr($e_row['event_date'],3,5)==07) echo 'SELECTED'; ?>>July (07)</option>
            <option value="08" <?php if(substr($e_row['event_date'],3,5)==08) echo 'SELECTED'; ?>>August (08)</option>
            <option value="09" <?php if(substr($e_row['event_date'],3,5)==09) echo 'SELECTED'; ?>>September (09)</option>
            <option value="10" <?php if(substr($e_row['event_date'],3,5)==10) echo 'SELECTED'; ?>>Octomber (10)</option>
            <option value="11" <?php if(substr($e_row['event_date'],3,5)==11) echo 'SELECTED'; ?>>November (11)</option>
            <option value="12" <?php if(substr($e_row['event_date'],3,5)==12) echo 'SELECTED'; ?>>December (12)</option>
            </select>
          <span class="selectRequiredMsg">Please select an item.</span></span>/<span id="spryselect2">
            <select name="year" id="year">
              <option value="">Year</option>
              <option value="2013" <?php if(substr($e_row['event_date'],-4)==2013) echo 'SELECTED'; ?>>2013</option>
              <option value="2014" <?php if(substr($e_row['event_date'],-4)==2014) echo 'SELECTED'; ?>>2014</option>
              <option value="2015" <?php if(substr($e_row['event_date'],-4)==2015) echo 'SELECTED'; ?>>2015</option>
              <option value="2016" <?php if(substr($e_row['event_date'],-4)==2016) echo 'SELECTED'; ?>>2016</option>
              <option value="2017" <?php if(substr($e_row['event_date'],-4)==2017) echo 'SELECTED'; ?>>2017</option>
              <option value="2018" <?php if(substr($e_row['event_date'],-4)==2018) echo 'SELECTED'; ?>>2018</option>
              <option value="2019" <?php if(substr($e_row['event_date'],-4)==2019) echo 'SELECTED'; ?>>2019</option>
              <option value="2020" <?php if(substr($e_row['event_date'],-4)==2020) echo 'SELECTED'; ?>>2020</option>
              <option value="2021" <?php if(substr($e_row['event_date'],-4)==2021) echo 'SELECTED'; ?>>2021</option>
              <option value="2022" <?php if(substr($e_row['event_date'],-4)==2022) echo 'SELECTED'; ?>>2022</option>
              <option value="2023" <?php if(substr($e_row['event_date'],-4)==2023) echo 'SELECTED'; ?>>2023</option>
              <option value="2024" <?php if(substr($e_row['event_date'],-4)==2024) echo 'SELECTED'; ?>>2024</option>
              <option value="2025" <?php if(substr($e_row['event_date'],-4)==2025) echo 'SELECTED'; ?>>2025</option>
              <option value="2026" <?php if(substr($e_row['event_date'],-4)==2026) echo 'SELECTED'; ?>>2026</option>
              <option value="2027" <?php if(substr($e_row['event_date'],-4)==2027) echo 'SELECTED'; ?>>2027</option>
              <option value="2028" <?php if(substr($e_row['event_date'],-4)==2028) echo 'SELECTED'; ?>>2028</option>
              <option value="2029" <?php if(substr($e_row['event_date'],-4)==2029) echo 'SELECTED'; ?>>2029</option>
              <option value="2030" <?php if(substr($e_row['event_date'],-4)==2030) echo 'SELECTED'; ?>>2030</option>
              </select>
            <span class="selectRequiredMsg">Please select an item.</span></span>
            </td>
      <td width="7%" align="left" valign="top">Expiry</td>
      <td width="39%" align="left" valign="top"><span id="spryselect4">
      <select name="e_day" id="e_day">
          <option value="<?php echo substr($e_row['expiry_date'],0,2) ?>"><?php echo substr($e_row['expiry_date'],0,2) ?></option>
        <option value="01">01</option>
        <option value="02">02</option>
        <option value="03">03</option>
        <option value="04">04</option>
        <option value="05">05</option>
        <option value="06">06</option>
        <option value="07">07</option>
        <option value="08">08</option>
        <option value="09">09</option>
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
      </select>
      <span class="selectRequiredMsg">Please select an item.</span></span>
      /<span id="spryselect5">
      <select name="e_month" id="e_month">
            <option value="01" <?php if(substr($e_row['expiry_date'],3,5)==01) echo 'SELECTED'; ?>>January (01)</option>
            <option value="02" <?php if(substr($e_row['expiry_date'],3,5)==02) echo 'SELECTED'; ?>>February (02)</option>
            <option value="03" <?php if(substr($e_row['expiry_date'],3,5)==03) echo 'SELECTED'; ?>>March (03)</option>
            <option value="04" <?php if(substr($e_row['expiry_date'],3,5)==04) echo 'SELECTED'; ?>>April (04)</option>
            <option value="05" <?php if(substr($e_row['expiry_date'],3,5)==05) echo 'SELECTED'; ?>>May (05)</option>
            <option value="06" <?php if(substr($e_row['expiry_date'],3,5)==06) echo 'SELECTED'; ?>>June (06)</option>
            <option value="07" <?php if(substr($e_row['expiry_date'],3,5)==07) echo 'SELECTED'; ?>>July (07)</option>
            <option value="08" <?php if(substr($e_row['expiry_date'],3,5)==08) echo 'SELECTED'; ?>>August (08)</option>
            <option value="09" <?php if(substr($e_row['expiry_date'],3,5)==09) echo 'SELECTED'; ?>>September (09)</option>
            <option value="10" <?php if(substr($e_row['expiry_date'],3,5)==10) echo 'SELECTED'; ?>>Octomber (10)</option>
            <option value="11" <?php if(substr($e_row['expiry_date'],3,5)==11) echo 'SELECTED'; ?>>November (11)</option>
            <option value="12" <?php if(substr($e_row['expiry_date'],3,5)==12) echo 'SELECTED'; ?>>December (12)</option>
      </select>
      <span class="selectRequiredMsg">Please select an item.</span></span>/<span id="spryselect6">
      <select name="e_year" id="e_year">
              <option value="2012" <?php if(substr($e_row['expiry_date'],-4)==2012) echo 'SELECTED'; ?>>2012</option>
              <option value="2013" <?php if(substr($e_row['expiry_date'],-4)==2013) echo 'SELECTED'; ?>>2013</option>
              <option value="2014" <?php if(substr($e_row['expiry_date'],-4)==2014) echo 'SELECTED'; ?>>2014</option>
              <option value="2015" <?php if(substr($e_row['expiry_date'],-4)==2015) echo 'SELECTED'; ?>>2015</option>
              <option value="2016" <?php if(substr($e_row['expiry_date'],-4)==2016) echo 'SELECTED'; ?>>2016</option>
              <option value="2017" <?php if(substr($e_row['expiry_date'],-4)==2017) echo 'SELECTED'; ?>>2017</option>
              <option value="2018" <?php if(substr($e_row['expiry_date'],-4)==2018) echo 'SELECTED'; ?>>2018</option>
              <option value="2019" <?php if(substr($e_row['expiry_date'],-4)==2019) echo 'SELECTED'; ?>>2019</option>
              <option value="2020" <?php if(substr($e_row['expiry_date'],-4)==2020) echo 'SELECTED'; ?>>2020</option>
              <option value="2021" <?php if(substr($e_row['expiry_date'],-4)==2021) echo 'SELECTED'; ?>>2021</option>
              <option value="2022" <?php if(substr($e_row['expiry_date'],-4)==2022) echo 'SELECTED'; ?>>2022</option>
              <option value="2023" <?php if(substr($e_row['expiry_date'],-4)==2023) echo 'SELECTED'; ?>>2023</option>
              <option value="2024" <?php if(substr($e_row['expiry_date'],-4)==2024) echo 'SELECTED'; ?>>2024</option>
              <option value="2025" <?php if(substr($e_row['expiry_date'],-4)==2025) echo 'SELECTED'; ?>>2025</option>
              <option value="2026" <?php if(substr($e_row['expiry_date'],-4)==2026) echo 'SELECTED'; ?>>2026</option>
              <option value="2027" <?php if(substr($e_row['expiry_date'],-4)==2027) echo 'SELECTED'; ?>>2027</option>
              <option value="2028" <?php if(substr($e_row['expiry_date'],-4)==2028) echo 'SELECTED'; ?>>2028</option>
              <option value="2029" <?php if(substr($e_row['expiry_date'],-4)==2029) echo 'SELECTED'; ?>>2029</option>
              <option value="2030" <?php if(substr($e_row['expiry_date'],-4)==2030) echo 'SELECTED'; ?>>2030</option>
      </select>
      <span class="selectRequiredMsg">Please select an item.</span></span></td>
      </tr>
    <tr>
      <td width="15%" align="left" valign="top"><p>Time:</p></td>
      <td colspan="3" align="left" valign="top"><select name="hrs" id="hrs">
        <option value="<?php echo substr($e_row['time'],0,2)?>"><?php echo substr($e_row['time'],0,2)?></option>
        <option value="01">01</option>
        <option value="02">02</option>
        <option value="03">03</option>
        <option value="04">04</option>
        <option value="05">05</option>
        <option value="06">06</option>
        <option value="07">07</option>
        <option value="08">08</option>
        <option value="09">09</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
      </select>
        :
        <select name="min" id="min">
		  <option value="<?php echo substr($e_row['time'],3,2)?>"><?php echo substr($e_row['time'],3,2)?></option>
          <option value="00">00</option>
          <option value="01">01</option>
          <option value="02">02</option>
          <option value="03">03</option>
          <option value="04">04</option>
          <option value="05">05</option>
          <option value="06">06</option>
          <option value="07">07</option>
          <option value="08">08</option>
          <option value="09">09</option>
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
        </select>
        <select name="time" id="time">
          <option value="AM" <?php if(substr($e_row['time'],-2)=='AM') echo 'SELECTED'; ?>>AM</option>
          <option value="PM" <?php if(substr($e_row['time'],-2)=='PM') echo 'SELECTED'; ?>>PM</option>
        </select></td>
    </tr>
    <tr>
      <td align="left" valign="top"><p>Venue:</p></td>
      <td colspan="3" align="left" valign="top"><textarea name="venue" id="venue" cols="80" rows="6"><?php echo $e_row['venue']?></textarea>
        </td>
    </tr>
    <tr>
      <td align="left" valign="top"><p>Description:</p></td>
      <td colspan="3" align="left" valign="top"><textarea name="description" id="description" cols="80" rows="6"><?php echo $e_row['description']?></textarea></td>
    </tr>
    <tr>
      <td align="left" valign="top">Meta Key:</td>
      <td colspan="3" align="left" valign="top"><span id="sprytextarea1">
        <textarea name="meta_key" id="meta_key" cols="80" rows="5"><?php echo $e_row['meta_key']?></textarea>
        <span class="textareaRequiredMsg">A value is required.</span></span></td>
    </tr>
    <tr>
      <td align="left" valign="top">Meta Description:</td>
      <td colspan="3" align="left" valign="top"><span id="sprytextarea2">
        <textarea name="meta_desc" id="meta_desc" cols="80" rows="5"><?php echo $e_row['meta_desc']?></textarea>
        <span class="textareaRequiredMsg">A value is required.</span></span></td>
    </tr>
    <tr>
      <td align="left" valign="top">&nbsp;</td>
      <td colspan="3" align="left" valign="top"><input type="submit" name="update" id="update" value="Update Event" />
        <input type="hidden" name="event_id" id="event_id" value="<?php echo $e_row['id']?>" /></td>
    </tr>
  </table>
</form>
<?php } }?>
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "none", {validateOn:["blur"]});
var spryselect1 = new Spry.Widget.ValidationSelect("spryselect1", {validateOn:["blur"]});
var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1", {hint:"This content is usefull for search engine optimization. Type keywords with using comma(,) for seperate keywords Descriptive data put in 160 chars.", validateOn:["blur"]});
var sprytextarea2 = new Spry.Widget.ValidationTextarea("sprytextarea2", {hint:"This content is usefull for search engine optimization. Descriptive data put in 160 chars.", validateOn:["blur"]});
var spryselect2 = new Spry.Widget.ValidationSelect("spryselect2", {validateOn:["blur"]});
var spryselect3 = new Spry.Widget.ValidationSelect("spryselect3");
var spryselect4 = new Spry.Widget.ValidationSelect("spryselect4");
var spryselect5 = new Spry.Widget.ValidationSelect("spryselect5", {validateOn:["blur"]});
var spryselect6 = new Spry.Widget.ValidationSelect("spryselect6", {validateOn:["blur"]});
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
