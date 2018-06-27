<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<body>
    <div>
        <h1>Header</h1>
        <div><h3>{{$menu}}</h3></div>
        <hr>
    </div>

    <div class="container">
        @yield('content')
    </div>
    <div class="container-2">
        @yield('content-2')
    </div>
    
    <hr>
    <div>
        <h1>Footer</h1>
    </div>
</body>
</html>