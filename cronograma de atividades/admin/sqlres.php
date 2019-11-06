<?php
	require_once(dirname(dirname(__FILE__)) . '/includes/MySQLHandler.php');	
	$sSuccessMsg = "<div class=\"alert-box\">  You are not logged in.  <a href=\"\" class=\"close\">&times;</a></div>";
	if(isset($_POST['submit'])) {
		$username=$_POST['username'];
		$pwd=md5($_POST['passwd']);
		$sql="SELECT * FROM users WHERE name='$username' and password='$pwd'";
		$result=mysql_query($sql);
		$count=mysql_num_rows($result);
		$sSuccessMsg = ($count>0?
		"<div class=\"alert-box success\">Succesfully logged in.<a href=\"\" class=\"close\">&times;</a></div>":
		"<div class=\"alert-box alert\">Wrong user name or password.<a href=\"\" class=\"close\">&times;</a></div>");
								}
?>

		<?php 
			if($showhint === true && isset($sql)) { 
				echo '<div class="eight columns centered"><div class="alert-box secondary">SQL Query: ';
				echo $sql; 
				echo '<a href="" class="close">&times;</a></div></div>';			
									} 
		?>
	</center>