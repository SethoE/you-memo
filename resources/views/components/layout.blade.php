<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ URL::asset('/favicon.ico') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ URL::asset('/css/app.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('/css/partials/navbar.css') }}">
    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="https://kit.fontawesome.com/d1ab8069d2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ URL::asset('/css/components/flashMessage.css') }}">
    @yield('link')
    @yield('title')
</head>


<body>

    <main class="mainContainer">


        @if (isset($current_user))
            @php
                dd($current_user);
            @endphp
            <x-navbar :user="$current_user"></x-navbar>
        @else
            <x-navbar :user="auth()->user()"></x-navbar>
        @endif



        {{ $slot }}
    </main>
    @yield('body')
    <x-flash-message>

    </x-flash-message>
</body>

</html>
