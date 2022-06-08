<h1>Usuários</h1>

@foreach($users as $user)
    <h3>{{ $user->name }}</h3>
    <p>Email: {{ $user->email }}</p>
    <hr>
@endforeach
