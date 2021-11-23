{{-- @extends('template/layout', ['title' => 'Profil']) --}}
{{--
    Cara 1.
    @section('title', 'Profil')
--}}
<x-app-layout title="Blog">
    {{-- @section('content') --}}
        <h1>Ini Halaman Profile dari Sosial Media | Laravel</h1>
        @isset($getValue)
            <h2>ini Parameter dari URL ayang value nya berisikan <b>{{ $getValue }}</b> </h2>
        @endisset
    {{-- @endsection --}}
</x-app-layout>
