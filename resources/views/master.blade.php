<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/png" href="/icon.png">
  <link rel="stylesheet" href="{!! asset('css/bootstrap.css') !!}">
  <link rel="stylesheet" href="{!! asset('css/bootstrap-theme.css') !!}">
  <title>@yield('title')</title>

</head>
<body>
  @include('shared.navbar')
  @yield('content')
  <script src="{!! asset('js/jquery-3.2.1.js') !!}"></script>
  <script src="{!! asset('js/popper.js') !!}"></script>
  <script src="{!! asset('js/bootstrap.js') !!}"></script>
</body>
</html>
