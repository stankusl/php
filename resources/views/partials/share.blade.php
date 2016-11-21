<script>
    $(function() {
        FB.init({
            appId: '1621290394755328',
            xfbml: true,
            version: 'v2.4'
        });

        var share = new Share;

        share.init({
            title: '{{ $shareTitle or '' }}',
            text: '{{ $shareText or '' }}',
            picture: '{{ $sharePicture or '' }}',
            link: '{{ $shareLink or '' }}'
        });
    });
</script>