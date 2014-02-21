<?php 
require 'manage/login/dbc.php';
?>
<?php 

$result = mysql_query("SELECT * FROM `2_real_property` WHERE domain=2 AND status='1' AND `other_domain` LIKE '%4%'") or die(mysql_error());
?>
    <?php		  	
while($row = mysql_fetch_array($result)){ ?>
    <div class="featured_property">
      <h2><a href="?r_prop=<?php echo $row['id']; ?>"><?php echo $row['title']; ?></a></h2>
      <div class="clear"></div>
    </div>
    <?php } ?>