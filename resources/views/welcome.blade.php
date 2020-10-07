<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="stylesheet" type="text/css" media="all" href="{{ asset('tagsinput/tagsinput.css') }}">


</head>
<body>
<div id="app">
    <app></app>
</div>

<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="{{ mix('js/app.js') }}"></script>

<script type="text/javascript" src="{{ asset('tagsinput/tagsinput.js') }}"></script>
<script !src="">
    $(document).ready(function() {
        $('.tags').tagsinput({
            allowDuplicates: true
        });
    });
</script>
</body>
</html>
