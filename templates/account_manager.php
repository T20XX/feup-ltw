<div id = "content">
	<?php
		echo '<h1> My Account </h1>';
		echo '<h4> Name: ' . $_SESSION['name'] . '</h4>';
		echo '<h4> Username: ' . $_SESSION['id_account'] . '</h4>';
		echo '<h4> Age: ' . $_SESSION['age'] . '</h4>';
		if($_SESSION['gender'] == 1)
			echo '<h4> Gender: Male </h4>';
		else 
			echo '<h4> Gender: Female </h4>';
		echo '<h4> Type: ' . $_SESSION['type'] . '</h4>';
	?>
	<button id="button_edit_account" class="button_1"> Edit Account </button>
	<button class="button_1"> Delete Account </button>
</div>
