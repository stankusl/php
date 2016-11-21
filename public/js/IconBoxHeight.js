var IconBoxHeight = function() {

    var $this = this;
    var $options = {};

    $this.init = function($options) {
        events();
        setOptions($options);
        changeHeight();
    };

    var changeHeight = function() {
        $('.wideBox').each(function() {
            var boxHeight = $('.wideBox').find('.categoryBox').height();
            var iconContainer = $(this).find('.icon-container');
            var categoryBox = $(this).find('.categoryBox')

            if ($(window).width() > 480) {
                categoryBox.css({'padding-left': boxHeight + 60 + 'px'});
                iconContainer.height(boxHeight + 40);
                iconContainer.width(boxHeight + 40);
                iconContainer.css({'line-height': boxHeight + 36 + 'px'});
            } else {
                if ($(window).width() <= 400) {
                    categoryBox.css({'padding-left': boxHeight + 20 + 'px'});
                    iconContainer.height(boxHeight);
                    iconContainer.width(80);
                    iconContainer.css({'line-height': boxHeight + 16 + 'px'});
                } else {
                    categoryBox.css({'padding-left': boxHeight + 40 + 'px'});
                    iconContainer.height(boxHeight + 20);
                    iconContainer.width(boxHeight + 20);
                    iconContainer.css({'line-height': boxHeight + 16 + 'px'});
                }
            }
        });
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