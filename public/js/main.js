// Parallax

$(window).scroll(function() {
    parallax('.parallax-insert', 'background-position-y');
});


function parallax(element, option){
    var scrolled = $(window).scrollTop();
    if ($(window).width() > 768) {
        $(element).css(option, -(scrolled * 0.2) + 'px');
    }
    else
    {
        $(element).css(option, '50%');
    }

    $(window).on('resize', function() {
        if ($(window).width() > 768) {
            $(element).css(option, -(scrolled * 0.2) + 'px');
        }
        else
        {
            $(element).css(option, '50%');
        }
    });
}

// Navigation

var navigation = new navigation();
navigation.init();

(new SubNav).init();

(new NavButton).init();

(new BoxHeight()).init();

(new ExpandFAQ()).init();

window.addEventListener('resize', function(event){
    if ($(window).width() >= 768){
        $('#navUl').css('height', 'auto');
        $('#navUl li ul.inner').css('display', 'none');
        $('.main-menu').show();

    }

    if ($(window).width() < 768){
        $('#navUl').css('height', '0');
        $('.navbar-toggle').addClass('collapsed');
    }
});

// FadeIn

$(function() {
    var nutritionMenu = new NutritionMenu();
    nutritionMenu.init();

    (new Work).init({
        elements: $('.loading-1'),
        duration: 700,
        easing: 'easeInQuad'
    });

    (new Work).init({
        elements: $('.loading-2'),
        duration: 700,
        easing: 'easeInQuad'
    });

    (new Work).init({
        elements: $('.loading-3'),
        duration: 700,
        easing: 'easeInQuad'
    });

    (new Work).init({
        elements: $('.loading-4'),
        duration: 700,
        easing: 'easeInQuad'
    });

    (new Work).init({
        elements: $('.loading-5'),
        duration: 700,
        easing: 'easeInQuad'
    });

    (new Work).init({
        elements: $('.loading-6'),
        duration: 700,
        easing: 'easeInQuad'
    });

    (new Work).init({
        elements: $('.loading-7'),
        duration: 700,
        easing: 'easeInQuad'
    });

    (new Work).init({
        elements: $('.loading-8'),
        duration: 700,
        easing: 'easeInQuad'
    });

    (new Work).init({
        elements: $('.loading-9'),
        duration: 700,
        easing: 'easeInQuad'
    });

    (new Work).init({
        elements: $('.loading-10'),
        duration: 700,
        easing: 'easeInQuad'
    });

    (new Work).init({
        elements: $('.loading-11'),
        duration: 700,
        easing: 'easeInQuad'
    });

    (new Work).init({
        elements: $('.loading-12'),
        duration: 700,
        easing: 'easeInQuad'
    });

    (new Work).init({
        elements: $('.loading-13'),
        duration: 700,
        easing: 'easeInQuad'
    });
});

function preLoadImages(images, height) {
    if(images.length === 0) {
        return;
    }

    $.each(images, function() {
        var img = new Image;
        img.src = $(this).attr('src');

        img.onload = function() {
            imgHoverEffect(height);
        };
    });
};

function imgHoverEffect(height) {
    var imgHeight = 0;
    var wave = $('.animated-wave');

    var setHeight = function() {
        imgHeight = wave.find('img').height() + height;
        wave.css({height: imgHeight});
    };

    setHeight();

    $(window).on('resize', setHeight);

    wave.hover(function(){
        $(this).find('.blog-infos').css({height: imgHeight});
    }, function(){
        $(this).find('.blog-infos').css({height: height});
    });
}