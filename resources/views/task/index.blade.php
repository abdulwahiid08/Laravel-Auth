<x-app-layout title="Task">
    <div class="container mt-4 mb-5">
        <div class="row">
            <div class="col-md-6">
                @include('task/_formInput')
            </div>
        </div>
        <ul class="list-group mt-3">
            @foreach ($queryInsert as $number => $item)
                {{--
                    | Kita melakukan fetch untuk mengambil field yang ada di database
                    | Syntax dibawah sama dengan syntax di php biasa yaitu $item['list']
                --}}
                <li class="list-group-item d-flex align-items-center justify-content-between">
                    {{ $number + 1 }}. {{ $item->list }}
                    <div class="d-flex">
                        <a class="btn btn-primary me-2" href="{{ route('task.edit', $item->id )}}">Edit</a>
                        {{-- - <a style="color: red" href="/task/{{ $item->id }}">Hapus</a> --}}

                        {{-- Mmebuat DELETE
                            karena Route yang kita punya menggunkan method delete, maka kita harus membuat from --}}
                        <form action="{{ route('task.destroy', $item->id )}}" method="POST">
                            @method('delete')

                            @csrf

                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</x-app-layout>
