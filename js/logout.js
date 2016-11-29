$( function() {
	$("#do_logout").click(function() {
		window.alert("destroying session");
		$.get("session_destroy.php");
		window.alert("session destroyed");
	});
} );