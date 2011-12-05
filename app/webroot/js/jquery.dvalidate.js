(function(){
    var settings = {
        messages: {
            required: 'To pole jest wymagane',
            email: 'Wpisz poprawny adres email'
        },
        errorContainer: '.error'
    };
    var setPositive = function(element) {
        $(element).removeClass('invalid');
        $(element).parent().find(settings.errorContainer).text('');
    };
    var setNegative = function(element, message) {
        $(element).addClass('invalid');
        $(element).parent().find(settings.errorContainer).text(message);
    };
    var methods = {
        init: function(options) {
            settings = $.extend(settings, options);
        },
        checkEmail: function() {
            email = $(this).val();
            var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
            setPositive(this);
            if (!emailReg.test(email) || email == '') {
                setNegative(this, settings.messages.email);
                return false;
            }
            return true;
        },
        checkEmailContent: function() {
            emailContent = $(this).val();
            setPositive(this);
            if (emailContent == '') {
                setNegative(this, settings.messages.required);
                return false;
            }
            return true;
        }
    };
    $.fn.dvalidate = function(method, options) {
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