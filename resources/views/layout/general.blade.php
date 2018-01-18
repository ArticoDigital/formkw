<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Formulario Volver a clases con thermos es cool</title>

    <link href="{{mix('css/app.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300i,500,500i,700,700i,900,900i">

</head>
<body>
<main>@yield('content')</main>
<script src="{{mix('js/app.js')}}"></script>

@yield('script')
</body>
</html>
