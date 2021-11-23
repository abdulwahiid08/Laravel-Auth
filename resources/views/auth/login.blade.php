<x-app-layout>
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card">
                    <div class="card-header">
                        Login
                    </div>
                    <div class="card-body">
                        <form action="{{ route('login.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control @error('inputEmailLogin') is-invalid @enderror" value="{{ old('inputEmailLogin') }}" name="inputEmailLogin" id="email">
                                @error('inputEmailLogin')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control @error('inputPasswordLogin') is-invalid @enderror" name="inputPasswordLogin" id="password">
                                @error('inputPasswordLogin')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <button class="btn btn-primary mr-2" type="submit">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
