<div class="card">
    <div class="card-header">
        Create New Task
    </div>
    <div class="card-body">
        <form action="{{ route('task.store')}}" method="POST" >
            {{-- Karna content ini dari form, maka kita menggunakan @csrf supaya terhindar dari sebuah sarangan  --}}
            @csrf
            <div class="mb-3">
                <input autofocus type="text" name="inputList" class="form-control @error('inputList') is-invalid @enderror me-2" value="{{ old('inputList') }}" placeholder="Tambahkan List...." autocomplete="off">
                {{-- <div class="invalid-feedback">
                    Oops..Inputan Kosong!
                </div> --}}
                    @error('inputList')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
            </div>
                <button id="inputList"  class="btn btn-primary mr-2" type="submit">Add</button>

                {{-- @slot('script')
                <script>
                    const alert = document.getElementById("inputList");

                        alert.addEventListener('mouseenter', function() {
                            alert.style.background = 'green';
                        });
                        alert.addEventListener('mouseleave', function() {
                            alert.style.background = 'blue';
                        });
                </script>
                @endslot --}}
        </form>
    </div>
</div>
