$(function() {
    $('#email').bind('blur', function() {
        $(this).dvalidate();
        $(this).dvalidate('checkEmail');
    });
    $('#email_content').bind('blur', function() {
        $(this).dvalidate();
        $(this).dvalidate('checkEmailContent');
    });
    $('#contact').submit(function(event) {
        event.preventDefault();
        var self = this;
        $(this).dvalidate();
        if ($('#email').dvalidate('checkEmail') && $('#email_content').dvalidate('checkEmailContent')) {
            self.submit();
        }
    });
});