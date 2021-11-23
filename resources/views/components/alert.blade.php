<div class="alert">
    {{-- Mengambil data yng menggunakan component, slot dan sejenisnya dari halaman yang yang terhubung dengan file ini  --}}
    <div class="title-slot">
        {{-- Mengambil data slot yang berisi nama title --}}
        {{ $title }}
    </div>
    {{ $slot }}
    <div class="footer-slot">
        {{-- Mengambil data slot yang berisi nama title --}}
        {{ $footer }}
    </div>
</div>
