<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Site info -->
    <title>{{ isset($title) ? "$title | " : '' }}Dries Vints</title>

    @isset($metaDescription)
        <meta name="description" content="{{ $metaDescription }}">
    @endisset

    @if ($page->date)
        <meta property="article:published_time" content="{{ date('Y-m-d', $page->date) }}" />
    @endif

    <!-- Favicons -->
    <meta name="msapplication-TileColor" content="#2F3238">
    <meta name="msapplication-TileImage" content="/assets/images/favicons/touch-icon-144×144-precomposed.png'">
    <link rel="apple-touch-icon-precomposed" sizes="152×152" href="/assets/images/favicons/touch-icon-152×152-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" sizes="144×144" href="/assets/images/favicons/touch-icon-144×144-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" sizes="120×120" href="/assets/images/favicons/touch-icon-120×120-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114×114" href="/assets/images/favicons/touch-icon-114×114-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72×72" href="/assets/images/touch-icon-72×72-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" href="/assets/images/favicons/touch-icon-iphone-precomposed.png" />
    <link rel="icon" sizes="32x32" href="/assets/images/favicons/favicon-32.png">
    <link rel="shortcut icon" href="/favicon.ico">

    <!-- Stylsheets -->
    <link media="all" type="text/css" rel="stylesheet" href='//fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic|Source+Code+Pro:400,700'>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">

    @if ($page->production)
        <!-- Google Analytics -->
        <script type="text/javascript">
            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-18478762-2']);
            _gaq.push(['_trackPageview']);

            (function() {
                var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';
                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
            })();
        </script>
    @endif
</head>
<body>
    @if ($page->fbvideo)
        <div id="fb-root"></div>
        <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
    @endif

    @yield('body')
</body>
</html>