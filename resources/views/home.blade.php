@extends('SampaiJadi')
@section('title', 'Home')

@section('content')
    <header id="home" class="hero">
        <div class="hero-content">
            <h1>Spesialis <span class="typing-text"></span></h1>
            <p>Mengintegrasikan mekanik, elektronik, dan pemrograman untuk menciptakan solusi otomasi industri cerdas dan efisien.</p>
            <a href="{{ url('/kontak') }}" class="btn">Diskusikan Proyek</a>
        </div>
    </header>
@endsection