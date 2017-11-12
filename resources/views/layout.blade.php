<!DOCTYPE html>
<html>
<head lang="en">
  <title>Takol-EH</title>

  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="">
  <meta name="description" content="">

  <link rel="stylesheet" href="/css/bootstrap.min.css">
  <link rel="stylesheet" href="/css/animate.min.css">
  <link rel="stylesheet" href="/css/font-awesome.min.css">
  <link rel="stylesheet" href="/css/nivo-lightbox.css">
  <link rel="stylesheet" href="/css/nivo_themes/default/default.css">
  <link rel="stylesheet" href="/css/style.css">
  <link href='https://fonts.googleapis.com/css?family=Roboto:400,500' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

</head>
<body>
<!-- preloader section -->
<section class="preloader">
  <div class="sk-spinner sk-spinner-pulse"></div>
</section>

@include('includes.header')

@yield('content')

@include('includes.footer')
</body>
</html>
