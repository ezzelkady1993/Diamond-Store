<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head> 
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">   

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title','Diamond Store')</title>    
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!-- Fonts -->
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">    
        
        <link rel="stylesheet" media="screen" href="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">    


        <link rel="stylesheet" media="screen" type="text/css" href="{{asset('styles/bootstrap4/admin.min.css')}}">

        <!--<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.1.1/dropzone.css">   -->

        <link href="{{ asset('dist/css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('css/admin.css')}}">
        <link rel="stylesheet" href="{{asset('css/parsley.css')}}">
        <link href="{{ asset('dist/css/bootstrap.css') }}" rel="stylesheet">
        <link href="{{ asset('dist/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('dist/css/foundation.css') }}" rel="stylesheet">
    </head>

    <body> 
        @include('admin.layout.includes.header')
        <div class="page-content">        
            @if(Session::has('message'))            
            <div class="alert alert-info">                
                <p>{{ Session::get('message') }}</p>            
            </div>        
            @endif            

            @if (count($errors) > 0)                
            <div class="alert alert-danger">                    
                <ul>                        
                    @foreach ($errors->all() as $error)                            
                    <li>{{ $error }}</li>                        
                    @endforeach                    
                </ul>                
            </div>            
            @endif    

            <div class="row">        
                @include('admin.layout.includes.sidenav')        
                <div class="col-md-10 display-area">            
                    <div class="row text-center">                
                        <div class="col-md-10 col-md-offset-1">                    
                            <div class="content-box-large">                        @yield('content')                    
                            </div>                
                        </div>            
                    </div>        
                </div>
                    <!--/Display area after sidenav-->    
            </div>
        </div>

            <!--/Page Content-->
            <script src="https://code.jquery.com/jquery.js"></script>
            <script src="{{asset('js/parsley.min.js')}}"></script>
            <script src="{{asset('js/app.js')}}"></script>
            <script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
            <script>    
                $(document).ready(function () {        
                    $(".submenu > a").click(function (e) {            
                        e.preventDefault();            
                        var $li = $(this).parent("li");            
                        var $ul = $(this).next("ul");            
                        if ($li.hasClass("open")) {                
                            $ul.slideUp(350);                
                            $li.removeClass("open");            
                        } else {                
                            $(".nav > li > ul").slideUp(350);                
                            $(".nav > li").removeClass("open");                
                            $ul.slideDown(350);                
                            $li.addClass("open");            
                        }        
                    });    
                });
            </script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.1.1/dropzone.js"></script>
        @yield('js')
    </body>
</html>