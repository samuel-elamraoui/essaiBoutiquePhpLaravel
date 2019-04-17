<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
</head>
<link>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">

<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
<link type="text/css" rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.6/css/lightslider.css"/>
<script src="{{ asset('js/app.js') }}"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.6/js/lightslider.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $("#light-slider").lightSlider()
    });
</script>


<link rel="dns-prefetch" href="//fonts.gstatic.com">
<title>@yield('title')</title>
<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

</head>
<body>


@include('includes.header')
<div>
    <ul id="light-slider">
        <li>
            <h3>First Slide</h3>
            <p>
                <img src="image/ballonFoot.jpg">
            </p>
        </li>
        <li>
            <h3>Second Slide</h3>
            <p>
                <img src="image/charmed.jpg">
            </p>
        </li>
        <li>
            <h3>First Slide</h3>
            <p>
                <img src="image/culture_spatiale_7.jpg">
            </p>
        </li>
        <li>
            <h3>Second Slide</h3>
            <p>
                <img src="image/joggingFit.jpg">
            </p>
        </li>
        <li>
            <h3>Second Slide</h3>
            <p>
                <img src="image/simpson.jpg">
            </p>
        </li>
        <li>
            <h3>Second Slide</h3>
            <p>
                <img src="image/raquetteTennis.jpg">
            </p>
        </li>

    </ul>
</div>
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">

            @yield('content')

        </div>
    </div>
</div>
@yield('form_auth')
</body>
</html>

