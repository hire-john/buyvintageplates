<!doctype html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>{{ config('app.name') }} - Collectible, Antique, Vintage, and, Rare Plates.</title>
        @include('content.public.partials.metatags')
        @include('content.shared.partials.linkrels')
        <link rel="stylesheet" href="{{ mix('/css/shared/shared.css') }}" />
        <link rel="stylesheet" href="{{ mix('/css/vintageplates.css') }}" />
        <script src="{{ mix('/js/shared/shared.js') }}"></script>
        <script src="{{ mix('/js/vue-app.js') }}" defer></script>
        <script src="{{ mix('/js/vintageplates.js') }}"></script>
    </head>
    <body id="app-main" class="d-flex flex-column min-vh-100">
        <message-area>
            <div id="login-page-area" class="container-fluid ps-md-0">
                <div class="row g-0">
                    <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
                    <div class="col-md-8 col-lg-6 plate-image">
                        <div class="login d-flex align-items-center py-5">
                            <div class="col-md-12 col-lg-8 mx-auto">
                                <center>
                                    <img src="/favicon.png" style="width:100px;"/>
                                  <a href="{{ route('homepage') }}">
                                    <h1>{{ config('app.name') }}</h1>
                                </a>
                            </center>
                            <br/>
                            @yield('content')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </message-area>
</body>
</html>