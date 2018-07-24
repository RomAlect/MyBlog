<!DOCTYPE html>
<html>
    <head>
        <title>Бритва Оккама</title>
        <meta charset="utf-8">

        <!--
        @if(env('APP_DEBUG') === true)
        <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
        @endif
        -->

        <link rel="stylesheet" href="{{ asset('font-awesome/css/font-awesome.css') }}">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('css/site.css') }}">
    </head>

    <body>
        <div class="row">
            <div class="col-1">
                <div id="toTop"><i class="fa fa-chevron-up"></i></div>
            </div>
            <div class="col-11">
                <div class="container">
                    @yield('header')
                    @yield('categories')
                    @yield('article')
                    @yield('footer')
                </div>
            </div>
        </div>



        <!--Public scripts-->
        <!--
        @if(env('APP_DEBUG') === true)
        <script src="{{ asset('js/bootstrap.js') }}"></script>
        <script src="{{ asset('js/jquery-3.3.1.js') }}"></script>
        <script src="{{ asset('js/popper.js') }}"></script>
        @endif
        -->

        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
        <script src="{{ asset('js/site.js') }}"></script>

    </body>
</html>

