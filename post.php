<?php 
require 'manage/login/dbc.php';
page_protect();
?>
<?php 
if(isset($_GET['ip'])){
	$sql = mysql_query("INSERT INTO `ad_track`(`user_ip`, `referance`, `domain`, `user`) VALUES ('$_GET[ip]', '$_GET[ref]', $_SESSION[domain], $_SESSION[user_id])") or die(mysql_error());
	}
?>

<html>
<head>
<title>This is trial</title>
<script type="text/javascript" src="/manage/_script/jquery-1.6.2.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
  $("div").click(function(){
    $.get("post.php",
    {
  		ip: $(this).attr("ip"),
  		ref: $(this).attr("ref")
	 }, function(data){
       $("#link").html(data).show();
    });

  });
});
</script>
</head>
<body>
<?php if(!isset($_GET['ip'])){ ?>
<div ip="<?php echo $_SERVER['REMOTE_ADDR']; ?>" ref="<?php echo 'AD1'; ?>" style="width:200px; height:200px; background-color:#900; color:#FFF;">This is div</div>
<?php } ?>
<br />
<div id="link"></div>

</body>
</html>