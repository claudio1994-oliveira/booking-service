<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? config('app.name') }}</title>
    @vite('resources/css/app.css')
</head>

<body>
    <div class="max-w-4xl mx-auto my-12 px-6">
        {{ $slot }}
    </div>

</body>
@vite('resources/css/app.js')

</html>
