<!DOCTYPE html>
<html lang="tr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Homepage : Asean Tourist</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="ui/javascript/head.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
    <script type="text/javascript" src="ui/javascript/apps.js"></script>
    <link rel="stylesheet" type="text/css" href="ui/styles/screen.css" media="screen">
    <link rel="stylesheet" type="text/css" href="ui/styles/print.css" media="print">
    <link rel="shortcut icon" href="ui/favicon.ico" type="image/x-icon">
    <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-------------------------------------------------------------------/
  Color switcher for demo, to be removed from live website.
  <!------------------------------------------------------------------->
  <link rel="stylesheet" href="ui/styleswitcher.css" />

  <!-- Skins Color FOR DEMO WEBSITE -->
  <link rel="alternate stylesheet" href="ui/styles-orange/screen.css" title="style-orange" />
  <link rel="alternate stylesheet" href="ui/styles-blue/screen.css" title="style-blue" />
  <link rel="alternate stylesheet" href="ui/styles-pink/screen.css" title="style-pink" />
  <link rel="alternate stylesheet" href="ui/styles-green/screen.css" title="style-green" />
  <!-- EOF OF DEMO WEBSITE CODE -->
  <!-------------------------------------------------------------------/
  EOF Color switcher for demo, to be removed from live website.
  <!------------------------------------------------------------------->

  </head>
  <body>
    <div id="root">
      @include('web.partials.header')
      @yield('home')
    </div>
  </body>
</html>
