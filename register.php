<?php
	require 'config.php';

	if(isset($_POST['register'])) {
		$errMsg = '';

		// Get data from FROM
		$fullname = $_POST['fullname'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$email = $_POST['email'];
		$image = $_POST['image'];


		if($fullname == '')
			$errMsg = 'Enter your fullname';
		if($username == '')
			$errMsg = 'Enter username';
		if($password == '')
			$errMsg = 'Enter password';
		if($email == '')
			$errMsg = 'Enter your email';
		if($image == '')
			$image = 'Please insert your image';

		if($errMsg == ''){
			try {
				$stmt = $connect->prepare('INSERT INTO users (fullname, username, password, email,image) VALUES (:fullname, :username, :password, :email, :image)');
				$stmt->execute(array(
					':fullname' => $fullname,
					':username' => $username,
					':password' => $password,
					':email' => $email,
					':image' => $image
					));
				header('Location: register.php?action=joined');
				exit;
			}
			catch(PDOException $e) {
				echo $e->getMessage();
			}
		}
	}

	if(isset($_GET['action']) && $_GET['action'] == 'joined') {
		$errMsg = 'Registration successfull. Now you can <a href="login.php">login</a>';
	}
?>

<html>
<head><title>Register</title></head>
	
<body>
	<div align="center">
		<div style=" border: solid 1px #006D9C; " align="left">
			<?php
				if(isset($errMsg)){
					echo '<div ">'.$errMsg.'</div>';
				}
			?>
			<?php 

 		if(!empty($_POST['submit'])){  
 			// $username = $_POST['username'];
    //    		$password = $_POST['password'];
            // $stmt = $conn->prepare('SELECT * FROM user WHERE username LIKE :username AND password LIKE :password ');
            // $stmt->execute(array(':username' => $username, ':password' => $password));
            // $result = $stmt->fetchAll();
            // if(empty($result)){
            //     echo "Login failed. Please try again";
            // }else{
            //     $_SESSION['username'] = $username;
            //     echo 'welcome' .$username
            //     //alertAndRedirect("Login Successfully", "profile.php");
            // }
            $target_dir = "uploads/";
			$target_file = $target_dir . basename($_FILES["img"]["name"]);
			if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
			    echo "The file ". basename( $_FILES["img"]["name"]). " has been uploaded.";
			} else {
			    echo "Sorry, there was an error uploading your file.";
			}
        }
            ?>
			<div ><b>Register</b></div>
			<div style="margin: 15px">
				<form action="" method="post" enctype="multipart/form-data">
					<input type="text" name="fullname" placeholder="Fullname" value="<?php if(isset($_POST['fullname'])) echo $_POST['fullname'] ?>" autocomplete="off" class="box"/><br /><br />
					<input type="text" name="username" placeholder="Username" value="<?php if(isset($_POST['username'])) echo $_POST['username'] ?>" autocomplete="off" class="box"/><br /><br />
					<input type="password" name="password" placeholder="Password" value="<?php if(isset($_POST['password'])) echo $_POST['password'] ?>" class="box" /><br/><br />
					<input type="text" name="email" placeholder="email" value="<?php if(isset($_POST['email'])) echo $_POST['email'] ?>" autocomplete="off" class="box"/><br /><br />
					Select image to upload: <input type="file" name="image"  value="<?php if(isset($_POST['image'])) echo $_POST['image'] ?>" autocomplete="off" class="box"/><br /><br />
					<input type="submit" name='register' value="Register" class='submit'/><br />
				</form>
			</div>
		</div>
	</div>
</body>
</html>
