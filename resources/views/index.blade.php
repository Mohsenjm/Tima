<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{asset('/css/app.css')}}" rel="stylesheet">
    <link href="{{asset('/css/mobile.css')}}" rel="stylesheet">
    <link href="{{asset('/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('/css/swiper.css')}}" rel="stylesheet">

    @livewireStyles
</head>
<body class="antialiased">
<div class="relative min-h-full bg-gray-400">

    <div class="bg-green-400">
        {{--        @yield('header')--}}sdf
    </div>

    <div class="bg-blue-400 w-auto h-auto">

        @livewire('content')
{{--        @livewire('product-feature')--}}

    </div>

    <div class="bg-red-600 absolute bottom-0 w-full h-auto">
        @livewire('footer')
    </div>

</div>


@livewireScripts
<script src="{{asset('/js/jquery.min.js')}}"></script>
<script src="{{ asset('/js/app.js') }}" defer></script>

<script src="{{asset('/js/alpine.min.js')}}"></script>
<script src="{{asset('/js/swiper.min.js')}}"></script>
<script src="{{asset('/js/carousel.js')}}"></script>
<script src="{{asset('/js/number-input.js')}}"></script>
</body>
</html>
