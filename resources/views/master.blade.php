<!DOCTYPE html>
<html lang="{{ App::getLocale() }}">
<head>
    <title> @yield('title') </title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">    
    
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- Favicon  --}}
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">

    <!-- Material Design fonts -->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/icon?family=Material+Icons">
    
    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">    
    
    <!-- Bootstrap Material Design -->
    <link rel="stylesheet" type="text/css" href="/css/bootstrap-material-design.css">
    <link rel="stylesheet" type="text/css" href="/css/ripples.min.css">

    <!-- Custom styles -->
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <!--  Bootstrap  -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script src="/js/ripples.min.js"></script>
    <script src="/js/material.min.js"></script>
</head>
@include('shared.navbar')
<body>
    
    @yield('content')

    <script>
        $(document).ready(function() {
            // This command is used to initialize some elements and make them work properly
            $.material.init();
            
            $('li.active a').click(function() { return false; });
            $('#flash-message').fadeOut(6000);
        });
    </script>
    <script type="text/javascript" src="/js/ajax-crud.js"></script>  
</body>
</html>