<?php
  include ('templates/session_start.php');
  include_once('database/connection.php');
  include_once('database/account.php');
  include ('templates/header.php');
?>
  <div id="account_info">
		<h4> Account Info </h4>
				<?php
					$result = getAccountItem($db, $_POST['username']);
					echo $result['name'] . '<br>';
					echo $result['id_account'] . '<br>';
					echo $result['type'] . '<br>';
				?>
	</div>
	<?php
	if ($result['type'] == 'owner'){
	echo '<form action= new_restaurant.php method="post">';
    echo '<input type="hidden" name="username" value=' . $result['id_account'] . '/>';
    echo '<input type="submit" value="New restaurant">';
    echo '</form>';
        } ?>
  <?php
  include ('templates/side_bar.php');
  include ('templates/footer.php');
?>