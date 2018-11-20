<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta name="csrf-token" content="{{ csrf_token() }}">

<head>
    <title>Email</title>
    <link href="{{ asset('css/style.css')}}" rel="stylesheet">
</head>

<body class="app">
        
    @yield('content')
    <script type="text/javascript" src="{{ asset('js/vendor.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bundle.js') }}"></script>
</body>

</html>
