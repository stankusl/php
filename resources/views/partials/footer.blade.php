        <footer>
            <div class="container">

                <p>Lorem ipsum dolor sit amet, pellentesque neque erat vivamus morbi eu facilisis, cras mauris integer, etiam odio urna pharetra ornare tortor. </p>

                <ul class="footer-navigation">
                    <li><a href="#" data-toggle="modal" data-target="#policy-modal">{{ trans('footer.privacy_policy') }}</a></li>
                    <li><a href="#" data-toggle="modal" data-target="#terms-modal">{{ trans('footer.terms_of_use') }}</a></li>
                    <li><a href="{{ url($pageClass) }}/sitemap">{{ trans('footer.sitemap') }}</a></li>
                </ul>

                <img class="footer-logo" src="{{ asset('img/vertex-logo-footer.png') }}" alt="Vertex Footer Logo"/>

                <p>&copy; 2015 {{ trans('footer.copyright') }}</p>
            </div>
        </footer>


        <script src="{{ asset('js/vendor/jquery.min.js') }}"></script>
        <script src="{{ asset('js/vendor/jquery-ui.min.js') }}"></script>
        <script src="{{ asset('js/vendor/jquery.visible.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.js') }}"></script>
        <script src="{{ asset('js/vendor/facebook.js') }}"></script>
        <script src="{{ asset('js/vendor/twitter.js') }}"></script>
        <script src="//apis.google.com/js/platform.js"></script>
        <script src="{{ asset('js/Share.js') }}"></script>
        @include('partials.share', [
            'shareTitle' => 'Vertex',
            'shareText' => 'This is some text I wanna share',
            'sharePicture' => '',
            'shareLink' => url('cftr')
        ])
        <script src="{{ asset('js/Work.js') }}"></script>
        <script src="{{ asset('js/SubNav.js') }}"></script>
        <script src="{{ asset('js/NavButton.js') }}"></script>
        <script src="{{ asset('js/Navigation.js') }}"></script>
        <script src="{{ asset('js/BoxHeight.js') }}"></script>
        <script src="{{ asset('js/NutritionMenu.js') }}"></script>
        <script src="{{ asset('js/ExpandFAQ.js') }}"></script>
        <script src="{{ asset('js/main.js') }}"></script>
        <script src="{{ asset('js/addActiveClass.js') }}"></script>
        <script>
            var images = $('.news-thumbnail');
        </script>

        @if (isset($pageName))
            <script>
                addActiveClass('<?php echo $pageClass; ?>', '<?php echo $pageName; ?>');
                preLoadImages(images, 62);
            </script>
        @else
            <script>
                preLoadImages(images, 82);
            </script>
        @endif
    </body>
</html>
