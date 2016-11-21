var SubNav = function() {

    var $this = this;

    $this.init = function() {
        events();
    };

    var changeSubNav = function() {
        var category = $(this).data('category');
        var color = $(this).data('color');
        var colorHover = $(this).data('color-hover');
        var colorBgHover = $(this).data('color-bg-hover');
        var colorBg = $(this).data('color-bg');

        // Fade out all sub-nav
        $('.sub-nav').css({position: 'absolute', top: 0}).fadeOut();

        $(this).siblings().removeClass('active');

        $(this).addClass('active');

        var subNav = $('[data-category="' + category + '-sub-nav"]');

        subNav.find('a').not('.active').hover(function(){
            $(this).css({"background-color": colorBgHover, "color": colorHover});
        }, function(){
            $(this).css({"background-color": colorBg, "color": color});
        });

        subNav.css({
            'background-color': colorBg,
            'position': 'relative'
        }).fadeIn();

    };

    var events = function() {
        $(document).on('click', '#navUl li', changeSubNav);
    };

};