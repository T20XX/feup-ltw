$(function() {
    $("#do_login").click(function() {
        $("#loginform").slideDown(1000).fadeIn(1000);
        $("#loginform <").css("display", "block");
    });
});
$(function() {
    $("#do_logout").click(function() {
        window.location = "logout.php";
        //$.ajax({ url: 'http://localhost/ltw/action_logout.php' });
        //window.location.reload();
    });
});
$(function() {
    $("#do_signup").click(function() {
        window.location = "signup.php";
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
