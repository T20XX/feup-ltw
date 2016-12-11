<?php
	include_once('templates/session_start.php');
    include ('templates/header.php');    
	include_once('database/connection.php');
	include_once('database/restaurant.php');
	
	$already_exists = getRestaurantId($db,$_POST['name'],$_SESSION['id_account']);
	
	if($already_exists == NULL){
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
			/*
			days -> array que contem os values (days) em que a checkbox esta a check
			*/
			$monday = in_array("monday",$_POST['days']);
			$tuesday = in_array("tuesday",$_POST['days']);
			$wednesday = in_array("wednesday",$_POST['days']);
			$thursday = in_array("thursday",$_POST['days']);
			$friday = in_array("friday",$_POST['days']);
			$saturday = in_array("saturday",$_POST['days']);
			$sunday = in_array("sunday",$_POST['days']);
		
		addRestaurant($db, $_POST['name'], $_SESSION['id_account'], $_POST['address'], $_POST['description'], $_POST['open_time'], $_POST['close_time'],$monday,$tuesday,$wednesday,$thursday,$friday,$saturday,$sunday, NULL);
		addCategoriesRestaurant($db, $_POST['name'], $_SESSION['id_account'], $_POST['categories']);

		echo '<div id="content">';
		echo '<p> Restaurant added with success!</p>';
	}
	else
	{
		echo '<div id="content">';
		echo '<p> Could not add Restaurant beacuse the owner already has a restaurant with the same name!</p>';
	}
	
	echo '</div>';

	include ('templates/footer.php');
?>