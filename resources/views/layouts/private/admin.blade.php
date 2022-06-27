<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Optical Voltage, Inc. Portal">
    <meta name="author" content="Optical Voltage, Inc.">
    <title>{{ config('app.name') }} - Online Store Management Portal.</title>
    @include('content.shared.partials.linkrels')
    <link rel="stylesheet" href="{{ mix('/css/shared/shared.css') }}" />
    <link rel="stylesheet" href="{{ mix('/css/private/portal/portal.css') }}" />
    <script src="{{ mix('/js/shared/shared.js') }}"></script>
    <script src="{{ mix('/js/private/portal/portal.js') }}"></script>
    <script src="{{ mix('/js/private/portal/vue-app.js') }}" defer></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="/image-uploader.js"></script>
    <link rel="stylesheet" href="/image-uploader.css" />
</head>
<body id="app-main" >
    <message-area>
        <div id="wrapper">
            @include('content.private.partials.sidenav')
            <div id="left-inner-wrapper">
                @include('content.private.partials.topbar')
                <div id="left-content-wrapper" class="min-vh-100" style="margin-bottom: 150px;">
                    <div id="content">
                        <div class="container">
                            @yield('content')
                        </div>
                    </div>
                </div>
                @include('content.private.partials.bottom-bar')
            </div>
        </div>
        @include('content.private.partials.logout')
    </message-area>
</body>
</html>