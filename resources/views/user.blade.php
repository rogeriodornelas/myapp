@extends('layouts.default')

@section('title', 'Página de usuário')

@section('sidebar')
    <div>
        <nav>
            Sidebar de Usuário
        </nav>
    </div>
@endsection

@section('content')
    <h1>Detalhes do Usuário</h1>
    {{ $user['name'] }}<br>
    {{ $user['email'] }}<br>
    {{ $user['created_at'] }}<br>
@endsection
