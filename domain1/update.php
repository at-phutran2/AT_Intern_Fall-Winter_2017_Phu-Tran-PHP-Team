<?php
	require 'config.php';
	if(empty($_SESSION['name']))
		header('Location: login.php');

	if(isset($_POST['update'])) {
		$errMsg = '';

		// Getting data from FROM
		$fullname = $_POST['fullname'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$passwordVerify = $_POST['passwordVerify'];

		if($password != $passwordVerify)
			$errMsg = 'Password not matched.';

		if($errMsg == '') {
			try {
		      $sql = "UPDATE pdo SET fullname = :fullname, password = :password, email = :email WHERE username = :username";
		      $stmt = $connect->prepare($sql);                                  
		      $stmt->execute(array(
		        ':fullname' => $fullname,
		        ':email' => $email,
		        ':password' => $password,
		        ':username' => $_SESSION['username']
		      ));
				header('Location: update.php?action=updated');
				exit;

			}
			catch(PDOException $e) {
				$errMsg = $e->getMessage();
			}
		}
	}

	if(isset($_GET['action']) && $_GET['action'] == 'updated')
		$errMsg = 'Successfully updated. <a href="logout.php">Logout</a> and login to see update.';
?>

<html>
<head><title>Update</title></head>
	<style>
	html, body {
		margin: 1px;
		border: 0;
	}
	</style>
<body>
	<div align="center">
		<div style=" border: solid 1px #006D9C; " align="left">
			<?php
				if(isset($errMsg)){
					echo '<div style="color:#FF0000;text-align:center;font-size:17px;">'.$errMsg.'</div>';
				}
			?>
			<div style="background-color:#006D9C; color:#FFFFFF; padding:10px;"><b><?php echo $_SESSION['name'] ?></b></div>
			<div style="margin: 15px">
				<form action="" method="post">
					Fullname <br>
					<input type="text" name="fullname" value="<?php echo $_SESSION['name']; ?>" autocomplete="off" class="box"/><br /><br />
					Username <br>
					<input type="text" name="username" value="<?php echo $_SESSION['username']; ?>" disabled autocomplete="off" class="box"/><br /><br />
					email <br>
					<input type="text" name="email" value="<?php echo $_SESSION['email']; ?>" autocomplete="off" class="box"/><br /><br />
					<hr>
					Password <br>
					<input type="password" name="password" value="<?php echo $_SESSION['password'] ?>" class="box" /><br/><br />
					Verify Password <br>
					<input type="password" name="passwordVerify" value="<?php echo $_SESSION['password'] ?>" class="box" /><br/><br />
					Select image to upload:
    				<input type="file" name="fileToUpload" id="fileToUpload"><br/>
					<input type="submit" name='update' value="Update" class='submit'/><br />
					
				</form>
			</div>
		</div>
	</div>
</body>
</html>
