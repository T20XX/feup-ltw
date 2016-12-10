$(function() {
	$(".select_all").each(function(index){
		var group = $(this).data("group");
		var parent = $(this);
		
		parent.change(function(){  //"select all" change 
			 $(group).prop('checked', parent.prop("checked"));
		});
		$(group).change(function(){ 
			parent.prop('checked', false);
			if ($(group+':checked').length == $(group).length ){
				parent.prop('checked', true);
			}
		});
	});
});

$(function() {
    $("#button_edit_account").click(function() {
		$("#content").slideUp(1000).fadeOut(1000);
        $("#content").promise().done(function(){		/*waits for animation to end*/
			window.location = "edit_account.php";
		});
    });
});

$(function() {
    $("#button_add_restaurant").click(function() {
		$("#content").slideUp(1000).fadeOut(1000);
        $("#content").promise().done(function(){		/*waits for animation to end*/
			window.location = "add_restaurant.php";
		});
    });
});


$(window).load(function(){
    var trigger = 200, 
        Top = function () {
            var distance = $(window).scrollTop();
            if (distance > trigger) {
                $('#top').addClass('show');
            } else {
                $('#top').removeClass('show');
            }
        };
    Top();
    $(window).on('scroll', function () {
        Top();
    });
    $('#top').on('click', function (e) {
        e.preventDefault();
        $('html,body').animate({
            scrollTop: 0
        }, 700);
    });
});

$(function() {
    $("#button_delete_account").click(function() {
		window.location = "action_delete_account.php";
	});
});