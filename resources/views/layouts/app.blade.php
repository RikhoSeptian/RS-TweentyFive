<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <meta name="description" content="@yield('meta_description')">
    <meta name="keyword" content="@yield('meta_keyword')">
    <meta name="author" content="Funda of web IT">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- Style CSS -->
    <link href="{{ asset('assets/CSS/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Owl Carousel -->
    <link href="{{ asset('assets/CSS/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/CSS/owl.theme.default.min.css') }}" rel="stylesheet">

    {{-- exzoom - Prod Image --}}
    <link href="{{ asset('assets/exzoom/jquery.exzoom.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/CSS/custom.css') }}" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css" />
    <!-- Default theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css" />

    <!-- vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Livewire CSS -->
    @livewireStyles

</head>

<body>
    <div>

        @include('layouts.inc.frontend.navbar')

        <main class="py-2">
            @yield('content')

            {{-- <div class="container py-2">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">{{ __('Dashboard') }}</div>

                            <div class="card-body">
                                @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif
                                <div id="app"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </main>

        @include('layouts.inc.frontend.footer')

    </div>
    <!-- Script -->
    <script src="{{ asset('assets/JS/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/JS/jquery-3.7.0.min.js') }}"></script>

    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
    <script>
        window.addEventListener('message', event => {
            alertify.set('notifier','position', 'top-right');
            alertify.notify(event.detail.text, event.detail.type);
        });
    </script>

    <!-- Owl Carousel -->
    <script src="{{ asset('assets/JS/owl.carousel.min.js') }}"></script>

    {{-- exzoom --}}
    <script src="{{ asset('assets/exzoom/jquery.exzoom.js') }}"></script>
    @yield('script')

    <!-- Livewire Script -->
    @livewireScripts
    @stack('script')
</body>

</html>
