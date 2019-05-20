<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link href ="main.scss" rel ="stylesheet" type = "text/css" />
		<link href ="bootstrap/css/bootstrap.min.css" rel ="stylesheet" type = "text/css" />
        <link href ="bootstrap/css/bootstrap.css" rel ="stylesheet" type = "text/css" />
        <link href ="bootstrap/css/bootstrap-grid.min.css" rel ="stylesheet" type = "text/css" />
        <link href ="bootstrap/css/bootstrap-grid.css" rel ="stylesheet" type = "text/css" />
        <link href ="bootstrap/css/bootstrap-reboot.css" rel ="stylesheet" type = "text/css" />
        <title>{{config('app.name', 'MIS122')}}</title>
    </head>
    <body>
        <div class='container'>
        @yield('content')
        </div>
    </body>
</html>

