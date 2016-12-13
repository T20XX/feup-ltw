/*
Animation when the page is loaded
*/
$(function() {
   $( document ).ready(function() {
		$("#content").slideDown(1000).fadeIn(1000);
		$("#content").css("display", "block");
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


/*
Animation when the page is about to exit
*/
$(function() {
    $("input").click(function() {
		var action = $(this).attr("action");
		if($(this).hasClass("button") && action != null){
			
			$("#content").slideUp(1000).fadeOut(1000);
			$("#content").promise().done(function(){	
				window.location = action;
			});
		}
	});
});

/*
If the login form is not displaying and the do_login button is pressed, then the loginform will appear with animation
If the login form is displaying and the click was outside the form, the login form will disapear with animation
*/
$(document).click(function(e) {
	var loginform_children = $("#loginform").children();
	if(e.target.id == 'do_login'){
		$("#loginform").slideDown(1000).fadeIn(1000);
		$("#loginform").css("display", "block");
	}
	else if (e.target.id != 'loginform' && e.target.id != 'loginform_content') {
        $("#loginform").slideUp(1000).fadeOut(1000);
		$("#loginform").promise().done(function(){	
				$("#loginform").css("display", "none");
		});
    }

    if(e.target.id == 'photo'){
        $(".slideshow").slideDown(1000).fadeIn(1000);
        $(".slideshow").css("display", "block");
    }
    else if (e.target.id != 'photo' && e.target.id != 'slideshow_content') {
        $(".slideshow").slideUp(1000).fadeOut(1000);
        $(".slideshow").promise().done(function(){
            $(".slideshow").css("display", "none");
        });
    }
});


/*
For the top button to appear if the page is down
*/
$(window).load(function(){
	if ($(document).height() > $(window).height()) {
     console.log("scroll");
	}
    var trigger = 100;
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
    showSlides(slideIndex);
});
