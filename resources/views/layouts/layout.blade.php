<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script src="{{asset('js/jquery-3.7.1.js')}}"></script>
    <script src="{{asset('js/bootstrap.js')}}"></script>
    
    <title>@yield("title")</title>
</head>
<body>
    <div class="container-fluid">
        @yield("content")
    </div>
</body>
</html>