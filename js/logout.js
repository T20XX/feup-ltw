$( function() {
	$("#do_logout").click(function() {
		window.location = "logout.php";
		//$.ajax({ url: 'http://localhost/ltw/action_logout.php' });
		//location.reload();
	});
} );