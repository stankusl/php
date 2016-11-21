var BoxHeight = function() {

    var $this = this;
    var $options = {};

    $this.init = function($options) {
        events();
        setOptions($options);
        changeHeight();
    };

    var changeHeight = function() {
        if ($(window).width() < 768) {
            $('.box').each(function() {
                var pHeight = $('.box').find('p').height();
                var imgHeight = $('.box').find('img').height();
                var fullHeight = pHeight + imgHeight + 15 + 15 + 15 + 15;

                $(this).height(fullHeight);
            });
        } else {
            $('.box').each(function() {
                var pHeight = $('.box').find('p').height();
                var fullHeight = pHeight + 15 + 15;

                $(this).height(fullHeight);
            });
        }
    };

    var setOptions = function(options) {
        for(property in options) {
            if($options[property] === undefined) {
                $options[property] = options[property];
            }
        }
    };

    var events = function() {
        $(window).on('resize', changeHeight);
        $(window).on('load', changeHeight);
    };

};