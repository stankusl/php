var Work = function() {

    var $this = this;
    var $options = {};

    $this.init = function($options) {
        events();
        setOptions($options);
        //animateWork(null);
        animateVisibleElements();
    };

    var animateVisibleElements = function() {
        $options.elements.each(function(index, element) {
            if(isVisible($(this))) {
                $(this).delay($options.delay || 0).animate({opacity: 1, marginTop: 0}, {
                    duration: $options.duration,
                    easing: $options.easing || 'linear'
                });
            }
        });
    };

    var isVisible = function(element) {
        return element.visible(true);
    };

    var animateWork = function() {
        $options.elements.delay($options.delay).each(function(index) {
            $(this).delay(index * 100).animate({opacity: 1, marginTop: 0}, {
                duration: $options.duration
            });
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
        $(window).on('scroll', animateVisibleElements);
    };

};