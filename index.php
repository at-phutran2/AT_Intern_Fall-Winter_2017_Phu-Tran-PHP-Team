<html>
<head><title>PHPbasic</title></head>
	
<body>
	<div align="center">
		
			<?php
				if(isset($errMsg)){
					echo '<div>'.$errMsg.'</div>';
				}
			?>
			<b>BaiTap</b>
			<div style="margin: 15px">
				Welcome!
				<br>
				<a href="login.php">Login</a> <br>
				<a href="register.php">Register</a> <br>
				<a href="listing.php">listing</a> <br>
				
			</div>
		</div>
	</div>
</body>
</html>



