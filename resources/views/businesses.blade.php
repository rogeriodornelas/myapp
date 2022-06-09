@extends('layouts.default')

@section('sidebar', '')

@section('content')
    <h5>Adicionar Businesses</h5>
    @if($errors->any())
            <p>Erros</p>
        @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    @endif
    <form method="POST" action="{{ route('businesses.store') }}" enctype="multipart/form-data">
        @csrf
        <input type="text" name="name" placeholder="Nome:" value="{{ old('name') }}">
        @error('name')
        {{ $message }}
        @enderror
        <br>

        <input type="text" name="email" placeholder="E-mail:" value="{{ old('email') }}">
        @error('email')
        {{ $message }}
        @enderror
        <br>

        <input type="text" name="address" placeholder="Address:" value="{{ old('address') }}">
        @error('addres')
        {{ $message }}
        @enderror
        <br>

        <input type="file" name="logo">
        @error('logo')
        {{ $message }}
        @enderror
        <br>

        <button type="submit">Salvar</button>
    </form>

    <hr>

    @foreach($businesses as $business)
        @if($business->logo)
            <img src="{{ \Illuminate\Support\Facades\Storage::disk('public')->url($business->logo) }}" alt="" width="100px">
        @endif
        <h3>{{ $business->name }}</h3>
        <p>E-mail: {{ $business->email }} | Endereço: {{ $business->address }}</p>
        <hr>
    @endforeach
@endsection
