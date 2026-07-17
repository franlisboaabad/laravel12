@extends('Web.layouts.app')

@section('title', config('app.name'))

@section('content')
<div style="font-family: system-ui, sans-serif; max-width: 40rem; margin: 4rem auto; padding: 0 1.5rem;">
    <h1>{{ config('app.name') }}</h1>
    <p>Área pública (Web).</p>
    <p>
        <a href="{{ route('dashboard') }}">Ir al Admin</a>
        ·
        <a href="{{ route('login') }}">Login</a>
    </p>
</div>
@endsection
