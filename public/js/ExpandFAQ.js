var ExpandFAQ = function () {

    var that = this;
    var $ = jQuery;

    this.options = {};

    this.init = function(opts) {
        that.opts = opts;

        setOptions();
        events();
    };

    var setOptions = function() {
        for(option in that.opts) {
            that.options[option] = that.opts[option];
        }
    };

    var expand = function(e) {
        e.preventDefault();

        if ($(this).hasClass('opened')) {
            $(this).parent().parent().find('.expand-text').show('fast');
            $(this).hide();
            $(this).parent().find('.closed').show();
        }

        if ($(this).hasClass('closed')) {
            $(this).parent().parent().find('.expand-text').hide('fast');
            $(this).hide();
            $(this).parent().find('.opened').show();
        }
    };

    var events = function() {
        $(document).on('click', '.expand-link', expand);
    };
};