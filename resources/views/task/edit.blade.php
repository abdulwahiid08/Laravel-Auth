<x-app-layout>
    <div class="container mt-4 mb-5">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        Update Task
                    </div>
                    <div class="card-body">
                        <form action="{{ route('task.update', $query->id )}}" method="POST">
                            {{-- Karna di route, methodnya kita buat PUT bukan POST dan di html method PUT di form belum ada
                                maka kita harus membuat method baru--}}
                            {{-- Karna content dari form tidak ada maka kita menggunakan @csrf supaya tidak eror --}}
                            @method('put')
                            @csrf
                            <div class="mb-2">
                                <input autocomplete="off" type="text" class="form-control me-2 @error('inputList') is-invalid @enderror " name="inputList" value="{{ old('inputList', $query->list )}}" placeholder="Tambahkan List....">
                                    @error('inputList')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                            </div>
                            <button class="btn btn-primary" type="submit">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
