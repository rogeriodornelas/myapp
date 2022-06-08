@extends('layouts.default')

@push('styles')
    <link rel="stylesheet" href="/css/user.css">
@endpush

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

@push('scripts')
    <script src="{{ asset('/js/app.js') }}"></script>
@endpush

@push('scripts')
    <script src="{{ asset('js/user.js') }}"></script>
@endpush


