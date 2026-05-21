<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Firman </title>
    
    <link rel="stylesheet" href="{{ asset('asset/css/bootstrap.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('asset/web_portfolio_style.css') }}"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="{{ asset('asset/js/bootstrap.bundle.min.js') }}"></script>    
    <script src="{{ asset('asset/web_portfolio_script.js') }}"></script>
</head>
<body>

    <nav class="navbar">
        <div class="logo">Sampai<span>Selesai</span></div>
        <ul class="nav-links">
            <li><a href="{{ url('/') }}">Home</a></li>
            <li><a href="{{ url('/tentang') }}">Tentang</a></li>
            <li><a href="{{ url('/jasa') }}">Jasa</a></li>
            <li><a href="{{ url('/keahlian') }}">Keahlian</a></li>
            <li><a href="{{ url('/kontak') }}">Kontak</a></li>
        </ul>
    </nav>

    <main>
        @yield('content')
    </main>
    
    <footer>
        <p>&copy; 2026 Firman Dzaky all Rights Reserved.</p>
    </footer>

    @yield('scripts')
</body>
</html>