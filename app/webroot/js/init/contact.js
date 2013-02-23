$(function() {
    $('#email').bind('blur', function() {
        $(this).dvalidate();
        $(this).dvalidate('checkEmail');
    });
    $('#email_content').bind('blur', function() {
        $(this).dvalidate();
        $(this).dvalidate('checkEmailContent');
    });
    $('#contact').click(function(event) {
        event.preventDefault();
        var self = this;
        $(this).dvalidate();
        if ($('#email').dvalidate('checkEmail') && $('#email_content').dvalidate('checkEmailContent')) {
            var popupSettings = {
                popupHeaderText: "Twoja wiadomość",
                popupEmailText: $('#email_content').val(),
                popupButtonConfirmText: "Wyślij",
                popupButtonCancelText: "Anuluj",
                callElement: self,
                callElementFunction: 'submit'
            };
            $(self).dpopup(popupSettings);
            $(self).dpopup('showPopup');
        }
    });
});