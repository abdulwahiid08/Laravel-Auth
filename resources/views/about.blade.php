{{-- @extends('template/layout', ['title' => 'About']) --}}
<x-app-layout title="About">
    {{-- @section('content') --}}
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md">
                <h1>Ini Halaman About yang didapat dari file blade </h1>
                <h1>{{ $getData }}</h1>
            </div>
        </div>
    </div>

    {{-- @endsection --}}
</x-app-layout>
