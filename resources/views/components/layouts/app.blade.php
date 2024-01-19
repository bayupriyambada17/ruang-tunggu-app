<!doctype html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>@yield('ruangApp') - Menunggu Ruang Dengan Nyaman</title>
    <link href="{{ asset('dist/css/tabler.min.css') }}" rel="stylesheet" />
    <style>
        @import url('https://rsms.me/inter/inter.css');

        :root {
            --tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
        }

        body {
            font-feature-settings: "cv03", "cv04", "cv11";
        }
    </style>
    @livewireStyles

</head>

<body>
    <div class="page">
        @include('livewire.aplikasi.template.inc.header')
        <div class="page-wrapper">
            {{ $slot }}
        </div>
        @include('livewire.aplikasi.template.inc.footer')
    </div>


    <script src="{{ asset('dist/js/tabler.min.js') }}" defer></script>
    <script src="https://unpkg.com/lucide@latest"></script>
    <script>
        lucide.createIcons();
    </script>
    @livewireScripts

</body>

</html>
