<div id="content">
	<div id="item">
		<?php
			echo '<h1>' . $result['name'] . '</h1>';
			echo '<p>' . $result['address'] . '</p>';
			echo '<p>' . $result['description'] . '</p>';
			echo '<p>' . $result['stars'] . '</p>';
			echo '<img src="images/'. $result['name'] . '_0" alt="Image" width="500px">'
		?>
	</div>
</div>