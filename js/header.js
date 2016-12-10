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
    $("#go_information").click(function() {
		$("#content").slideUp(1000).fadeOut(1000);
        $("#content").promise().done(function(){		/*waits for animation to end*/
			window.location = "information.php";
		});
    });
});

$(function() {
    $("#go_my_restaurants").click(function() {
		$("#content").slideUp(1000).fadeOut(1000);
        $("#content").promise().done(function(){		/*waits for animation to end*/
			window.location = "my_restaurants.php";
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
    	$.get( "action_logout.php");
		$("#content").slideUp(1000).fadeOut(1000);
		$("#content").promise().done(function(){		/*waits for animation to end*/
			window.location = "logout.php";
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

$(window).load(function(){
    var trigger = 200, 
        Top = function () {
            var distance = $(window).scrollTop();
            if (distance > trigger) {
				$("#button_top").fadeIn(1000);
				$("#button_top").css("display", "block");
            } else {
				$("#button_top").fadeOut(1000);
				$("#button_top").promise().done(function(){		/*waits for animation to end*/
					$("#button_top").css("display", "none");
				});
            }
        };
    Top();
    $(window).on('scroll', function () {
        Top();
    });
    $('#button_top').on('click', function (e) {
        e.preventDefault();
        $('html,body').animate({
            scrollTop: 0
        }, 700);
    });
});
