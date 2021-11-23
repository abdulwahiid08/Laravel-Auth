{{-- @extends('template/layout', ['title' => 'Contact']) --}}
<x-app-layout title="Contact">
    {{-- @section('content') --}}
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md">
                <h1>Ini Halaman Contact dari Sosial Media | Laravel</h1>
                <form action="/contact" method="POST">
                    @csrf
                <button class="btn btn-warning" type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
    {{-- @endsection --}}
</x-app-layout>
