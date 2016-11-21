var navigation = function() {

    var $this = this;
    var navigationExpanded = false;
    var navigationHolder = $('#navUl');

    $this.init = function() {
        events();
    };

    var toggleSubMenu = function(e) {
        e.stopPropagation();

        if ($(window).width() < 768)
        {
            $('.inner').not(this).stop().hide('slow');
            $(this).find('.inner').stop().toggle('slow');
        }
        else
        {
            $('.inner').hide();
        }
    };

    var navigationToggle = function(e){
        e.stopPropagation();
        var button = $(e.currentTarget);
        button.toggleClass('collapsed');

        if(button.hasClass('collapsed'))
        {
            navigationHolder.css('height', 0);
            navigationExpanded = false;
        }
        else
        {
            navigationHolder.css('height', 'auto');
            navigationExpanded = true;
        }
    };

    var events = function() {
        $(document).on('click', '#navUl > li', toggleSubMenu);
        $(document).on('click', '.navbar-toggle', navigationToggle);
    };
};