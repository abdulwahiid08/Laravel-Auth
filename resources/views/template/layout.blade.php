<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ url('css/app.css') }}">
     <!-- My Css-->
     <link rel="stylesheet" href="{{ url('css/costum.css') }}">
     {{-- Mmebuat SLot untuk menangkap setiap style supaya setiap file bisa membuat style nya sendiri --}}
     {{ $style }}

     {{-- Cara 1.
        <title>@yield('title') | Laravel</title>
    --}}

    {{-- Cara 2. --}}
    <title>{{ $title }} | Laravel</title>
</head>

<body>
    {{-- Mengambil data navbar di components --}}
    <x-navbar></x-navbar>
    {{-- Jika menggunakan yield maka kita harus mengambil nya mengunakan section
        @yield('content')
    --}}

    {{-- klau menggunkan slot kita tidak perlu membuat section di file tsb --}}
    {{ $slot }}

    <x-footer></x-footer>

    {{ $script }}
    <script src="{{ url('js/app.js') }}"></script>
    {{-- <script src="{{ url('js/costume.js') }}"></script> --}}
</body>

</html>
