
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>
  <meta name="description" content="requisicion lilipink" />
  <meta name="csrf-token" content="{{ csrf_token() }}">


  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
  <title>{{ config('app.name', 'Laravel') }}</title>

  <link rel="shortcut icon" type="image/png" href="{{ asset('vendor/assets/images/logos/favicon.png') }}" />
  <link rel="stylesheet" href="{{ asset('vendor/assets/css/styles.min.css') }}" />


  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <script src="{{ asset('js/app.js') }}" defer></script>

</head>
