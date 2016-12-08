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