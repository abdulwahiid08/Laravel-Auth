<x-app-layout>
    <div class="container mt-5 mb-5">
        <div class="row">
            <h1>All Users</h1>
            <div class="col-md-4">
                <ul class="list-group">
                    @foreach ($users as $user)
                        <li class="list-group-item"><a href="{{ route('user.show', $user->username) }}">{{ $user->name }} - {{ $user->email }}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</x-app-layout>
