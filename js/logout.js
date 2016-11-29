$( function() {
	$("#do_logout").click(function() {
		$.ajax({ url: 'http://localhost/ltw/action_logout.php' });
		location.reload();
	});
} );