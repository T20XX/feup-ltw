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
    $("#button_comments").click(function() {
		if($("#button_comments").attr("value") == "Show Comments"){
			$("#button_comments").attr("value","Hide Comments");
			$("#comments > *").slideDown(1000).fadeIn(1000);
		}
		else{
			$("#button_comments").attr("value","Show Comments");
			$("#comments > *").slideUp(1000).fadeOut(1000);
		}
	});
});