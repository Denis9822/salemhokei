<html>
<head>
    <title>@yield("title", "Email template") | @lang("head.title")</title>
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600,700&display=swap&subset=cyrillic-ext">
    <style>
        {{--@font-face {--}}
            {{--font-family: SegoeUILight;--}}
            {{--src: url({{ env("APP_URL")."/assets/fonts/SegoeUILight/segoeuil.eot" }});--}}
            {{--src: local("â˜º"), url({{ env("APP_URL")."/assets/fonts/SegoeUILight/segoeuil.woff" }}) format("woff"),--}}
            {{--url({{ env("APP_URL")."/assets/fonts/SegoeUILight/segoeuil.ttf" }}) format("truetype"),--}}
            {{--url({{ env("APP_URL")."/assets/fonts/SegoeUILight/segoeuil.svg" }}) format("svg");--}}
            {{--font-weight: 400;--}}
            {{--font-style: normal;--}}
        {{--}--}}

        body {
            margin: 0;
        }

        .email-wrapper {
            margin: 0;
            font-family: Montserrat, sans-serif;
            font-size: 14px;
            border: none;
            border-spacing: unset;
            max-width: 100%;
            width: 700px;
        }

        .email-wrapper * {
            font-family: Montserrat, sans-serif;
            font-size: 14px;
        }

        .email-wrapper img {
            max-width: 100%;
        }

        .email-header td {
            background: rgba(255, 255, 255, 1);
            padding: 1em;
        }

        .email-body td {
            background: rgba(255, 255, 255, 1);
            padding: 1em;
        }

        .email-body td h2 {
            font-size: 1.5em;
        }

        .email-footer td {
            color: #fff;
            background: url({{ env("APP_URL")."/assets/img/footer-bg.jpg" }}) center center;
            background-size: cover;
            padding: 1em;
        }
    </style>
    @yield("head")
</head>
<body>
<table class="email-wrapper">
    <tr class="email-header">
        <td align="center"><a href="{{ env("APP_URL") }}"><img src="{{ env("APP_URL") }}/assets/img/logo.png"></a></td>
    </tr>
    <tr class="email-body">
        <td>@yield("content")</td>
    </tr>
    <tr class="email-footer">
        <td><p>{!! __("footer.copyright") !!}</p></td>
    </tr>
</table>
</body>
</html>
