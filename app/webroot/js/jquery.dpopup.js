(function(){
    var settings = {
        buttons: {
            button_ok: 'OK',
            button_cancel: 'Cancel'
        },
        popupContainer: "#dpopup",
        popupHeaderText: "header text"
    };
    var methods = {
        init: function(options) {
            settings = $.extend(settings, options);
        },
        showPopup: function() {
            $dpopupContainer = $(settings.popupContainer);
            $('#dpopup-header', $dpopupContainer).text(settings.popupHeaderText);
            $('#dpopup-content', $dpopupContainer).text(settings.popupEmailText);
            $('#dpopup-button-confirm', $dpopupContainer).text(settings.popupButtonConfirmText);
            $('#dpopup-button-cancel', $dpopupContainer).text(settings.popupButtonCancelText);
            $dpopupContainer.show();
            $('#dpopup-button-confirm', $dpopupContainer).bind('click', function(){
                $(settings.callElement).trigger(settings.callElementFunction);
            });
            $('#dpopup-button-cancel', $dpopupContainer).bind('click', function(){
                $dpopupContainer.hide();
            });
        }
    };
    $.fn.dpopup = function(method, options) {
        // Method calling logic
        if (methods[method]) {
            return methods[method].apply(this, Array.prototype.slice.call(arguments, 1));
        } else if (typeof method === 'object' || ! method) {
            return methods.init.apply(this, arguments);
        } else {
            $.error('Method ' +  method + ' does not exist on jQuery.dvalidate');
        }
    }
})(jQuery);