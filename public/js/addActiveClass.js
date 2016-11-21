function addActiveClass(pageClass, pageName){
    var bg = "#bec8ec";
    var color = "#fff";

    if (pageClass == 'kalydeco')
    {
        var bg = "#00aba0";
        var color = "#fff";
    }

    if (pageClass == 'orkambi')
    {
        var bg = "#d9e145";
        var color = "#0aa5b5";
    }

    if (pageClass == 'cftr-science' || pageClass == 'resources-hcp')
    {
        var bg = "#b2b4b7";
        var color = "#fff";
    }

    $('[data-category="'+pageClass+'-sub-nav"]').css({"position": "relative", "display": "block"});
    var subNav = $('[data-category="'+pageClass+'-sub-nav"]').find('.page-'+pageName);
    subNav.find('a').addClass('active');
    subNav.find('.active').css({"background-color": bg, "color": color});

};