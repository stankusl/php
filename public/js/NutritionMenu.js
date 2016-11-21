var NutritionMenu = function () {

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

    var changePage = function(e) {
        e.preventDefault();

        var menu = $(this).data('menu');

        $('.box-menus').removeClass('active');

        $(this).addClass('active');

        $('.box-contents').hide();

        $('.nutrition-box').find('.' + menu).fadeIn();
    };

    var events = function() {
        $(document).on('click', '.box-menus', changePage);
    };
};