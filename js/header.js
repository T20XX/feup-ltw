$(function() {
   $( document ).ready(function() {
		$("#content").slideDown(1000).fadeIn(1000);
		$("#content").css("display", "block");
	});
});

$(function() {
    $("#go_home").click(function() {
		$("#content").slideUp(1000).fadeOut(1000);
        $("#content").promise().done(function(){		/*waits for animation to end*/
			window.location = "index.php";
		});
    });
});

$(function() {
    $("#go_advanced_search").click(function() {
		$("#content").slideUp(1000).fadeOut(1000);
        $("#content").promise().done(function(){		/*waits for animation to end*/
			window.location = "advanced_search.php";
		});
    });
});

$(function() {
    $("#go_my_account").click(function() {
		$("#content").slideUp(1000).fadeOut(1000);
        $("#content").promise().done(function(){		/*waits for animation to end*/
			window.location = "my_account.php";
		});
    });
});

$(function() {
    $("#do_login").click(function() {
        if($("#loginform").css("display") == "none") { 
			$("#loginform").slideDown(1000).fadeIn(1000);
			$("#loginform <").css("display", "block");
		}
		else{
			$("#loginform").slideUp(1000).fadeOut(1000);
			$("#loginform <").css("display", "none");
		}
    });
});

$(function() {
    $("#do_logout").click(function() {
		$("#content").slideUp(1000).fadeOut(1000);
		$("#content").promise().done(function(){		/*waits for animation to end*/
			window.location = "logout.php";
        //$.ajax({ url: 'http://localhost/ltw/action_logout.php' });
        //window.location.reload();
		});
    });
});

$(function() {
    $("#do_signup").click(function() {
		$("#content").slideUp(1000).fadeOut(1000);
        $("#content").promise().done(function(){		/*waits for animation to end*/
			window.location = "signup.php";
		});
    });
});

$(function() {
    $(".account").click(function() {
        var form = $(
        '<form action= edit_account.php method="post">' +
        '<input type="hidden" name="username" value = ' + $("#username").text() + ' />' +
        '</form>'
        );
        $('body').append(form);
        $(form).submit();
    });
});
