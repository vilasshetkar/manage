<?php
function domains($other_domains,$id, $proType){
	$domains = explode(',', $other_domains);
		$sql = mysql_query("SELECT * FROM user_sites WHERE user_id = '$_SESSION[user_id]' AND status = '1'") or die(mysql_error()); ?>
<form method="post" action="other-domain.php" enctype="multipart/form-data" id="form<?php echo $id ?>">
<?php		while($row = mysql_fetch_array($sql)){
	
?>		

<label>
<input type="checkbox" name="other_domain[]" value="<?php echo $row['domain'] ?>" <?php foreach($domains as $domain) { if($row['domain']==$domain) { echo "CHECKED"; } } ?> /> <?php echo $row['domain'] ?></label><br>

<?php } ?>
<input type="hidden" name="<?php echo $proType ?>" value="<?php echo $id ?>" />
</form>
<script type="text/javascript">
$('#form<?php echo $id ?> input:checkbox, #form<?php echo $id ?> label').click(function(){
    $.ajax({
        url: 'other-domain.php',
        type: 'post',
        dataType: 'html',
        data: $(this).parent('form').serialize(),
        success: function(data) {
                   //alert(data);
				   },
		error: function(data){
			alert(data);
			}
    });
});
</script>
<?php } ?>
<?php 
if(isset($_POST['property'])){
	include '../../login/dbc.php';
	$other_domain = $_POST['other_domain'];
	$str = implode(',',$other_domain);
	$sql = mysql_query("UPDATE 2_real_property SET `other_domain`= '$str' WHERE id = $_POST[property]") or die(mysql_error());
	if($sql) echo "Domain assigns successfully to this property!
Thank you!";	
	}

if(isset($_POST['project'])){
	include '../../login/dbc.php';
	$other_domain = $_POST['other_domain'];
	$str = implode(',',$other_domain);
	$sql = mysql_query("UPDATE 2_real_project SET `domain`= '$str' WHERE id = $_POST[project]") or die(mysql_error());
	if($sql) echo "Domain assigns successfully to this property!
Thank you!";	
	}


?>
