<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title }}</title>


</head>

<body>
    {{-- This content can be wrapped with auth if needed. --}}
    {{ $slot }}
</body>

</html>
