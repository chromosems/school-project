<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SecurityLink</title>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/font-awesome.min.css" rel="stylesheet">
    <link href="/css/datepicker3.css" rel="stylesheet">
    <link href="/css/styles.css" rel="stylesheet">

    <!--Custom Font-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i"
          rel="stylesheet">


          <!--Sweet alert files-->
    <script src="{{asset('js/sweetalert-dev.js')}}"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('css/sweetalert.css')}}">


    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->

   
</head>
<body>
@include('layouts.top_menu')
@include('layouts.sidebar')

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    @yield('header')
    <div class="row">
        <div class="col-lg-12">
            @yield('content')
            <div class="col-sm-12">
                <p class="back-link">comlink@info <a href="#">Securitylink@info</a></p>
            </div>
        </div><!-- /.row -->
    </div><!--/.main-->
</div>
@include('layouts.footer')
