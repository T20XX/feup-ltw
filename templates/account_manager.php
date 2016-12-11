<div id = "content">
	<h1 class="title"> My Account </h1>
	<div class="item">
		<?php
			echo '<h3> Name: ' . $_SESSION['name'] . '</h3>';
			echo '<h3> Username: ' . $_SESSION['id_account'] . '</h3>';
			echo '<h3> Age: ' . $_SESSION['age'] . '</h3>';
			if($_SESSION['gender'] == 1)
				echo '<h3> Gender: Male </h3>';
			else 
				echo '<h3> Gender: Female </h3>';
			echo '<h3> Type: ' . $_SESSION['type'] . '</h3>';
		?>
	</div>
	<input id="button_edit_account" action="edit_account.php" class="button_1 button" value="Edit Account"/>
	<input id="button_delete_account" action="delete_account.php" class="button_1 button" value="Delete Account"/>
</div>
