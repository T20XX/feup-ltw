<?php
	include_once('templates/session_start.php');
    include ('templates/header.php');    
	include_once('database/connection.php');
	include_once('database/restaurant.php');
	// Count # of uploaded files in array
	$total = count($_FILES['upload']['name']);

	// Loop through each file
	for($i=0; $i<$total; $i++) {
	  //Get the temp file path
	  $tmpFilePath = $_FILES['upload']['tmp_name'][$i];

	  //Make sure we have a filepath
		if ($tmpFilePath != ""){
			$uploadOk = 1;
			$imageFileType = pathinfo($_FILES['upload']['name'][$i],PATHINFO_EXTENSION);

			// Check file size
			/*if ($_FILES["upload"]["size"][$i] > 500000) {
				echo "Sorry, your file is too large.";
				$uploadOk = 0;
			}*/
			// Allow certain file formats
			if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
				echo $imageFileType;
				echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
				$uploadOk = 0;
			}
			// Check if $uploadOk is set to 0 by an error
			if ($uploadOk == 0) {
				echo "Sorry, your file was not uploaded.";
			// if everything is ok, try to upload file
			} else {

			//Setup our new file path
			$newFilePath = "images/" . $_POST['name'] . "_" . $i ;
			//Upload the file into the temp dir
				if(move_uploaded_file($tmpFilePath, $newFilePath)) {

				  //Handle other code here

				}
			}
		}
	}

	addRestaurant($db, $_POST['name'], $_SESSION['id_account'], $_POST['address'], $_POST['description'], $_POST['open_time'], $_POST['close_time'], $_POST['monday'], $_POST['tuesday'], $_POST['wednesday'], $_POST['thursday'], $_POST['friday'], $_POST['saturday'], $_POST['sunday'], NULL);
	//$stmt = $db->prepare('SELECT id_account FROM Account WHERE id_account = ?');
	//$stmt->execute(array($_POST['username']));
	//$result = $stmt->fetch();

?>

	<div id="content">
<?php
/*
	$stmt = $db->prepare('INSERT INTO Restaurant (id_account, name, pass, gender,age,type) VALUES (?,?,?,?,?,?)');
	$stmt->execute(array($_POST['username'],$_POST['name'],sha1($_POST['password']),$_POST['gender'],$_POST['age'],$_POST['type']));
	
	1º Cria function time
	2º Cria Restaurant associa a owner, functtion time
	3º Cria Restaurant food para associar a Category
	*/
	
?>
	</div>
<?php
	include ('templates/footer.php');
?>