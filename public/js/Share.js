var Share = function() {

    var $this = this;

    var $share = {
        title: 'Vertex',
        text: 'Some text',
        picture: 'http://sofia.local/2015/vertex/public/cftr/sitemap',
        link: 'http://sofia.local/2015/vertex/public/img/cftr/logo.png'
    };

    $this.init = function(share) {
        setShareOptions(share);
        events();
        twitter();
        google();
        email();
    };

    var setShareOptions = function(share) {
        for(property in share) {
            $share[property] = share[property];
        }
    };

    var shared = function(obj) {
        console.log('Post was published.', obj);
    };

    var notShared = function(obj) {
        console.log('Post was not published', obj);
    };

    var events = function() {
        //$(document).on('click', '#instagramShare', instagram);
        $(document).on('click', '#facebookShare', facebook);
        //$(document).on('click', '#pinterestShare', pinterest);
        //$(document).on('click', '#linkedinShare', linkedin);
        $(document).on('click', '#googleShare', google);
        $(document).on('click', '#emailShare', email);
    };

    var instagram = function() {
        //
    };

    var pinterest = function(e) {
        e.preventDefault();

        var api = 'http://pinterest.com/pin/create/link/';
        window.open(api + '?url=' + $share.link + '&media=' + $share.picture + '&description=' + $share.text, "_blank", "toolbar=no, scrollbars=no, resizable=no, top=275, left=375, width=750, height=320");
    };

    var linkedin = function(e) {
        e.preventDefault();

        var api = 'https://www.linkedin.com/shareArticle';
        window.open(api + '?mini=true' + '&url=' + $share.link + '&title=' + $share.title + '&summary=' + $share.text + '&source=Finer Vision', "_blank");
    };

    var facebook = function() {
        FB.ui({
            method: 'feed',
            name: $share.title,
            caption: '',
            description: $share.text,
            link: $share.link,
            picture: $share.picture
        }, function(response) {
            if(response && response.post_id) {
                shared({
                    vendor: 'facebook',
                    response: response
                });
            } else {
                notShared({vendor: 'facebook'});
            }
        });
    };

    var twitter = function() {
        twttr.events.bind('tweet', function(event) {
            shared({
                vendor: 'twitter',
                response: event
            });
        });

        $('#twitterShare').attr('href', 'https://twitter.com/intent/tweet?url=' + $share.link + '&text=' + $share.text);
    };

    var email = function() {
        var body = $share.text + ' ' + $share.link;

        $('#emailShare').attr('href', 'mailto:?subject=' + $share.title + '&body=' + body);
    };

    var google = function() {
        gapi.interactivepost.render('googleShare', {
            contenturl: $share.link,
            clientid: '119585770351-nqeh6tg20kh455dg0me3eghopfes32v7.apps.googleusercontent.com',
            cookiepolicy: 'single_host_origin',
            prefilltext: $share.text,
            calltoactionlabel: 'GO',
            calltoactionurl: $share.link,
            onshare: function(response) {
                shared({
                    vendor: 'google',
                    response: response
                });
            }
        });
    }

};