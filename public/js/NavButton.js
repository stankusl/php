var NavButton = function() {

    var $this = this;
    var navigationExpanded = false;
    var navigationHolder = $('.main-menu');

    $this.init = function() {
        events();
    };

    var navigationToggle = function(e){
        e.stopPropagation();
        var button = $(e.currentTarget);


        if(button.hasClass('collapsed'))
        {
            navigationHolder.css('display', 'none');
            navigationExpanded = false;
        }
        else
        {
            navigationHolder.css('display', 'block');
            navigationExpanded = true;
        }
    };

    var events = function() {
        $(document).on('click', '.navbar-toggle', navigationToggle);
    };
};