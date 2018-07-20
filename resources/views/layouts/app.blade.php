<html>
    <head>
        <meta charset="utf-8" >
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>
            @yield('title')
        </title>
    </head>
    <body>

        @include('inc.navbar')

            @if (count($errors) > 0 )
                <div class="container">
                    <ul class="alert alert-danger">
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
    

<div class="container">
    <div class="row">
        <div class="col-md-8 col-lg-8">
            @yield('content')
        </div>
        <div class="cold-md-4 col-lg-4">
            @include('inc.sidebar')
        </div>
    </div>
</div>

    <script src="js/app.js" charset="utf-8"></script>
    </body>
</html>