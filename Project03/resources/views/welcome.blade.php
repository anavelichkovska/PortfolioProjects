<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Forum') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
    <body>
        <div class="navbar navbar-expand-md navbar-light justify-content-end  bg-white shadow-sm" >
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a  href="{{ url('/home') }}">Home</a>
                    @else
                        <a type="button" class="btn btn-secondary btn-sm" href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a type="button" class="btn btn-info btn-sm" href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
        <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            
            <div class="text-center">
                <h1 >Welcome to our forum</h1>  
            </div>

            <div class="card">
                <div class="card-header">Posts</div>

                <div class="card-body">
                    @foreach($posts as $post)
                         <div class="border border-secondary mb-2">                      
                            <div class="card-body ">
                                <img class="h-25 w-25 " src="{{$post->picture}}" alt="">
                                <h2>{{$post->title}}</h2>
                                <p>{{$post->description}}</p>
                            </div>
                        </div>
                                
                    @endforeach  
                </div>
            </div>
        </div>
    </div>
    </div>
    </body>
</html>
