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
	src: url('GOTHIC.TTF') format('truetype');
}
form.enquiry    {
	background: -webkit-gradient(linear, bottom, left 175px, from(#CCCCCC), to(#EEEEEE));
	position: relative;
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
}
.enquiry input   {
	/* [disabled]width: 50%; */
	border: 1px solid #999;
	/* [disabled]height: 25px; */
	-webkit-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
	-moz-box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
	box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.3);
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
.content h1 {
	font-size: 24px;
	color: #036;
	font-family: Tahoma, Geneva, sans-serif;
}
</style>
<link href="/manage/_script/Spray/SpryValidationTextarea.css" rel="stylesheet" type="text/css">
<link href="/manage/_script/Spray/SpryValidationTextField.css" rel="stylesheet" type="text/css">
<link href="/manage/_script/Spray/SpryValidationSelect.css" rel="stylesheet" type="text/css">
<script src="/manage/_script/Spray/SpryValidationTextarea.js" type="text/javascript"></script>
<script src="/manage/_script/Spray/SpryValidationTextField.js" type="text/javascript"></script>
<script src="/manage/_script/Spray/SpryValidationSelect.js" type="text/javascript"></script>
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
			echo $errors; 			
				} 
	if(empty($errors)==true) {;
$subject = 'This is trial email...';
$mail = 'Test Mail<table width="500px" bgcolor="#333366" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td>Mail For:</td>
                </tr>
            </table>';
//*** Uniqid Session ***//  
$strSid = md5(uniqid(time()));  
  
$strHeader = "";  
$strHeader .= "From: ".$_POST["cont_name"]."<".$_POST["email"].">\nReply-To: ".$_POST["email"]."";  
  
$strHeader .= "MIME-Version: 1.0\n";  
$strHeader .= "Content-Type: multipart/mixed; boundary=\"".$strSid."\"\n\n";  
$strHeader .= "This is a multi-part message in MIME format.\n";  
  //*** Attachment ***//  
$strFilesName = $file_name;  
$strContent = chunk_split(base64_encode(file_get_contents($file_tmp)));  
$strHeader .= "--".$strSid."\n";  
$strHeader .= "Content-Type: application/octet-stream; name=\"".$strFilesName."\"\n";  
$strHeader .= "Content-Transfer-Encoding: base64\n";  
$strHeader .= "Content-Disposition: attachment; filename=\"".$strFilesName."\"\n\n";  
$strHeader .= $strContent."\n\n";  
$strHeader .= "Content-type:text/html; charset=iso-8859-1\r\n";
$strHeader .= "Content-Transfer-Encoding: 7bit\r\n\r\n";
$strHeader .= "This is trial message from vilas. \r\n\r\n";
$flgSend = @mail('vilasshetkar@gmail.com',$subject,'Trial Message',$strHeader);  // @ = No Show Error //  
				}
if($flgSend)  
{  
echo "Mail send completed.";  
}  
else  
{  
echo "Cannot send mail.";

}  
///
}
}
  ?>
  <div class="content">
    <h1>Post Your Property</h1>
    <p>Maximize the exposure of your property for rent or for sale or lease to an elite clientele. Please Go ahead and fill the form to give us a chance to serve you:-</p>
    <form action="" method="post" enctype="multipart/form-data" name="form1" class="enquiry" id="form1" >
      <table width="100%" class="border">
        <tbody>
          <tr valign="top">
            <td colspan="3"><h1>Basic info:</h1></td>
          </tr>
          <tr valign="top">
            <td width="4%">&nbsp;</td>
            <td width="21%">* Property for</td>
            <td width="75%"><input name="property_for" id="listfor" type="radio" value="Sale" checked="checked" onclick="channgePropertyCat(this.value)" />
              Sale 
              <input name="property_for" id="listfor" type="radio" value="Rent" onclick="channgePropertyCat(this.value)" />
              Rent</td>
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
          <tr valign="top">
            <td id="text_area_id">&nbsp;</td>
            <td id="text_area_id">* Built Up Area</td>
            <td><span id="sprytextfield2">
              <input name="build_area" type="text" id="build_area" maxlength="8" value="" required/>
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
          <tr valign="top">
            <td>&nbsp;</td>
            <td>* Property Images</td>
            <td><input name="prop_img[]" type="file" multiple required id="prop_img[]"/></td>
          </tr>
          <tr valign="top">
            <td colspan="3"><h1>Property Location:</h1></td>
          </tr>
          <tr valign="top">
            <td>&nbsp;</td>
            <td>Country</td>
            <td><input name="country" type="text" id="country" onblur="validate_form_field(this.value,'prop_address')" onkeypress="return disableEnterKey(event)" value="INDIA" readonly /></td>
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
              <input name="city" id="city" value="" required />
              <span class="textfieldRequiredMsg">A value is required.</span></span></td>
  </tr>
          <tr valign="top">
            <td id="text_prop_address_id">&nbsp;</td>
            <td id="text_prop_address_id">* Address</td>
            <td><span id="sprytextarea1">
              <textarea name="address" cols="70" id="address" required></textarea>
              Remaining Chrs.: <span id="countsprytextarea1">&nbsp;</span><span class="textareaRequiredMsg">A value is required.</span><span class="textareaMaxCharsMsg">Exceeded maximum number of characters.</span></span></td>
  </tr>
          <tr valign="top">
            <td>&nbsp;</td>
            <td>* Area / Location</td>
            <td><span id="sprytextfield5">
              <input name="location" type="text" id="location" required value="" size="70" maxlength="200" />
              <span class="textfieldRequiredMsg">A value is required.</span></span></td>
  </tr>
  </tbody>
        <tbody>
          <tr valign="top">
            <td colspan="3"><h1>Property Contact Detail:</h1></td>
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
              Remaining Chrs.: <span id="countsprytextarea6">&nbsp;</span><span class="textareaRequiredMsg">A value is required.</span><span class="textareaMaxCharsMsg">Exceeded maximum number of characters.</span></span></td>
  </tr>
  </tbody>
        <tbody>
          <tr valign="top">
            <td>&nbsp;</td>
            <td> 
            </td>
            <td><input name="Submit" type="submit" id="Submit" style="width:150px; height:30px" value="Submit" /></td>
          </tr>
        </tbody>
      </table>
    </form>
</div>
  <script type="text/javascript">
var spryselect1 = new Spry.Widget.ValidationSelect("spryselect1", {validateOn:["blur"]});
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2", "none", {validateOn:["blur"]});
var spryselect2 = new Spry.Widget.ValidationSelect("spryselect2");
var spryselect4 = new Spry.Widget.ValidationSelect("spryselect4", {validateOn:["blur"]});
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4", "none", {validateOn:["blur"]});
var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1", {maxChars:255, counterId:"countsprytextarea1", counterType:"chars_remaining", validateOn:["blur"]});
var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5", "none", {validateOn:["blur"]});
var sprytextfield7 = new Spry.Widget.ValidationTextField("sprytextfield7", "none", {validateOn:["blur"]});
var sprytextfield8 = new Spry.Widget.ValidationTextField("sprytextfield8", "phone_number", {format:"phone_custom", pattern:"0000000000", validateOn:["blur"], hint:"10 Digit Mobile no."});
var sprytextfield9 = new Spry.Widget.ValidationTextField("sprytextfield9", "email", {validateOn:["blur"]});
var sprytextarea6 = new Spry.Widget.ValidationTextarea("sprytextarea6", {maxChars:255, counterId:"countsprytextarea6", counterType:"chars_remaining", validateOn:["blur"]});
  </script></div>
<script type="text/javascript">
var sprytextarea6 = new Spry.Widget.ValidationTextarea("sprytextarea6", {maxChars:255, counterId:"countsprytextarea6", counterType:"chars_remaining", validateOn:["blur"]});
var sprytextfield9 = new Spry.Widget.ValidationTextField("sprytextfield9", "email", {validateOn:["blur"]});
var sprytextfield8 = new Spry.Widget.ValidationTextField("sprytextfield8", "phone_number", {format:"phone_custom", pattern:"0000000000", validateOn:["blur"], hint:"10 Digit Mobile no."});
var sprytextfield7 = new Spry.Widget.ValidationTextField("sprytextfield7", "none", {validateOn:["blur"]});
var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5", "none", {validateOn:["blur"]});
var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1", {maxChars:255, counterId:"countsprytextarea1", counterType:"chars_remaining", validateOn:["blur"]});
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4", "none", {validateOn:["blur"]});
var spryselect4 = new Spry.Widget.ValidationSelect("spryselect4", {validateOn:["blur"]});
var spryselect2 = new Spry.Widget.ValidationSelect("spryselect2");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2", "none", {validateOn:["blur"]});
var spryselect1 = new Spry.Widget.ValidationSelect("spryselect1", {validateOn:["blur"]});
</script>
