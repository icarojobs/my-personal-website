<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>{{ config('app.name') }}</title>

    {{-- <link rel="stylesheet" href="css/tailwind.css" /> --}}
    <script src="https://unpkg.com/feather-icons"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    height: {
                        header: "10%",
                        footer: "10%",
                    },
                },
            },
        }
    </script>

    @livewireStyles
</head>

<body class="h-screen">
    {{ $slot }}

    <script>
        feather.replace();
    </script>
    @livewireScripts
</body>

</html>
