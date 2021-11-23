<x-app-layout>
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card ">
                    <div class="card-header">
                        Create new account
                    </div>
                    <div class="card-body">
                        <form action="{{ route('register.store') }}" method="POST" >
                            @csrf
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control @error('inputEmail') is-invalid @enderror" value="{{ old('inputEmail') }}" name="inputEmail" id="email">
                                @error('inputEmail')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control @error('inputName') is-invalid @enderror" name="inputName" value="{{ old('inputName') }}" id="name">
                                @error('inputName')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="Username" class="form-label">Username</label>
                                <input type="text" class="form-control @error('inputUsername') is-invalid @enderror" name="inputUsername" value="{{ old('inputUsername') }}" id="Username">
                                @error('inputUsername')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control @error('inputPassword') is-invalid @enderror" name="inputPassword" id="password">
                                @error('inputPassword')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                                <button class="btn btn-primary mr-2" type="submit">Register</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
