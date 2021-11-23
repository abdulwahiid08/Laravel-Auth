{{-- x-app-layout merupakan sebuah components yang fila nya bernama app-layout.blade.php,
    supaya struktur folder nya efektif. file tersebut kita hapus di components nya, tetapi nama
    x-app-layout masih bisa digunakan, karena terdapat controller components app-layout di folder app/view/components.
    disitu return view nya kita rubah ke folder yang diingingakn
--}}

<x-app-layout>
    @slot('style')
        <style>
            .card {
                margin-bottom: 200px
            }
        </style>
    @endslot
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md">
                @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session()->get('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                {{-- @elseif (session()->has('logout'))
                    <div class="alert alert-primary alert-dismissible fade show" role="alert">
                        {{ session()->get('logout') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div> --}}
                @endif
            </div>
        </div>
        <div class="col-md">
            <div class="card">
                <div class="card-header">
                    <h3>Welcome To Our Website</h3>
                </div>
                <div class="card-body">
                    <blockquote class="blockquote mb-0">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure, id, a veritatis aliquid cum ad modi vitae at ea est itaque. Nam, minima adipisci fugiat veritatis harum et quo neque.</p>
                    <footer class="blockquote-footer">CEO AWDcorp<cite title="Source Title">{{ $getValue }}</cite></footer>
                    </blockquote>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>










    {{-- @section('content') --}}
        {{-- @slot('style')
            <style>
                body {
                    background: indianred
                }
            </style>
        @endslot --}}
        {{-- <h1>Ini Halaman Home dari Sosial Media | Laravel</h1> --}}
        {{-- Mengambil data dari Home Controller dengan varibel getValue--}}
        {{-- @isset($getValue)
            <h3>Halo nama Saya {{ $getValue }}</h3>
        @endisset --}}

        {{-- Menggunkan Blade Components
            1. Bisa menggunakan @components('...')
            2. Bisa menggunakan x-namafile, karna components dilambangkan dengan x
            --}}
        {{-- @component('components.alert') --}}
        {{-- <x-alert> --}}
            {{-- <x-slot name="title">
                Ini adalah Judul dari slot
            </x-slot> --}}

            {{-- @slot('title')
                Ini adalah Judul dari slot
            @endslot

            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Velit itaque nostrum alias sunt dolor doloremque sint, magnam, quibusdam autem quasi unde eum qui, minima aspernatur exercitationem similique nam odio quisquam!

            @slot('footer')
                Ini adalah Footer dari slot
            @endslot --}}

            {{-- <x-slot name="footer">
                Ini adalah footer dari slot
            </x-slot> --}}
        {{-- </x-alert> --}}
        {{-- @endcomponent --}}

    {{-- @endsection --}}



















 {{-- Cara Lama --}}
{{-- @extends('template/layout', ['title' => 'Sosial Media']) --}}
{{-- Cara 1.
    @section('title', 'Sosial Media')
--}}

@section('content')
    <h1>Ini Halaman Home dari Sosial Media | Laravel</h1>

    {{-- Menggunkan Blade Components
        1. Bisa menggunakan @components('...')
        2. Bisa menggunakan x-namafile, karna components dilambangkan dengan x
        --}}
    {{-- @component('components.alert') --}}
    {{-- <x-alert> --}}
        {{-- <x-slot name="title">
            Ini adalah Judul dari slot
        </x-slot> --}}

        {{-- @slot('title')
            Ini adalah Judul dari slot
        @endslot

        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Velit itaque nostrum alias sunt dolor doloremque sint, magnam, quibusdam autem quasi unde eum qui, minima aspernatur exercitationem similique nam odio quisquam!

        @slot('footer')
            Ini adalah Footer dari slot
        @endslot --}}

        {{-- <x-slot name="footer">
            Ini adalah footer dari slot
        </x-slot> --}}
    {{-- </x-alert> --}}
    {{-- @endcomponent --}}

@endsection
