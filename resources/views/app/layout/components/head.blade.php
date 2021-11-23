<meta charset="UTF-8">
<meta name="viewport" content="width=device-width">
{{-- <title>SalemHokei</title> --}}

<link rel="apple-touch-icon" sizes="180x180" href="/assets/favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/assets/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/assets/favicon/favicon-16x16.png">
<link rel="manifest" href="/assets/favicon/site.webmanifest">
<link rel="mask-icon" href="/assets/favicon/safari-pinned-tab.svg" color="#009ee0">
<meta property="og:type" content="@yield(" og_type", "article" )" />
<meta property="og:title" content="@yield(" og_title", "" )" />
<meta property="og:url" content="{{ \Illuminate\Support\Facades\URL::current() }}" />
<meta property="og:locale" content="{{ app()->getLocale() == 'ru' ? 'ru_RU' : 'kk_KZ' }}">
<meta property="og:description" content="@yield(" og_description", "" )" />

<meta property="og:image" content="@yield(" og_img", env("APP_URL")."/assets/img/unconted_sm.png")" />
<meta property="og:image:url" content="@yield(" og_img_url", env("APP_URL")."/assets/img/unconted_sm.png")" />
<meta property="og:video" content="@yield(" og_video")" />
<meta property="og:video:type" content="@yield(" og_video_type")" />

<meta property="vk:image" content="@yield(" og_img", env("APP_URL")."/assets/img/unconted_sm.png")" />
<meta property="twitter:image" content="@yield(" og_img", env("APP_URL")."/assets/img/unconted_sm.png")" />
<meta property="facebook:image" content="@yield(" og_img", env("APP_URL")."/assets/img/unconted_sm.png")" />
<link rel="image_src" href="@yield(" og_img", env("APP_URL")."/assets/img/unconted_sm.png")" />

<script>
  window.Laravel = <?php echo json_encode(['csrfToken' => csrf_token()]); ?>
</script>

<link rel="stylesheet" href="/assets/libs/fancybox/dist/jquery.fancybox.min.css" type="text/css" media="screen" />
<link rel="stylesheet" href="/assets/css/style.css?v={{ time() }}" type="text/css" media="screen" />
<link rel="stylesheet" href="/assets/libs/slick-carousel/slick/slick.css" type="text/css" media="screen" />
<link rel="stylesheet" href="/assets/libs/chosen/chosen.css" type="text/css" media="screen" />
<link rel="stylesheet" href="/assets/css/style.css" type="text/css" media="screen" />
<link rel="stylesheet" href="/assets/css/custom.css" type="text/css" />
<style>
  iframe {
    width: 360px;
  }

</style>
