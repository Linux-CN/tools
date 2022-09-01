<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Linux 中国') }}</title>
    <!-- Fonts -->
    <link href="https://fonts.bunny.net/icon?family=Material+Icons" rel="stylesheet" />
    <!-- Scripts -->
    @vite(['resources/scss/style.scss', 'resources/js/index.js'])
    <script type="text/javascript">
        window.darkThemeLink = "{{ Vite::asset('resources/scss/style-dark.scss') }}"
        window.lightThemeLink = "{{ Vite::asset('resources/scss/style.scss') }}"
    </script>
</head>

<body>
    <div>
        {{ $slot }}
    </div>

</body>

</html>
