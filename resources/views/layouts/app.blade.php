<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>{{ config('app.name') }}</title>

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script src="https://unpkg.com/feather-icons"></script>

    @livewireStyles
</head>

<body class="h-screen">
    {{ $slot }}

    <script>
        feather.replace();
    </script>
    <script src="{{ mix('js/app.js') }}"></script>
    @livewireScripts
</body>

</html>
