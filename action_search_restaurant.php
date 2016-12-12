<?php
	include_once('templates/session_start.php');
    include ('templates/header.php');    
	include_once('database/connection.php');
	include_once('database/restaurant.php');
	
?>

	<div id="content">
<?php

	echo $_POST['restaurant_name'];
	echo '||';
	echo $_POST['avg_price'];
	echo '||';
	echo $_POST['stars'];
	echo '||';
			$monday = in_array("monday",$_POST['days']);
			$tuesday = in_array("tuesday",$_POST['days']);
			$wednesday = in_array("wednesday",$_POST['days']);
			$thursday = in_array("thursday",$_POST['days']);
			$friday = in_array("friday",$_POST['days']);
			$saturday = in_array("saturday",$_POST['days']);
			$sunday = in_array("sunday",$_POST['days']);
			
	echo $monday;
	echo '||';
	echo $tuesday;
	echo '||';
	echo $wednesday;
	echo '||';
	echo $thursday;
	echo '||';
	echo $friday;
	echo '||';
	echo $saturday;
	echo '||';
	echo $sunday;
	echo '||';
	echo $_POST['categories'];
		
?>
	</div>
<?php
	include ('templates/footer.php');
?>