@php
// =========================================================================
// SIMULASI DATA GRAFIK KEAHLIAN (MENGGANTIKAN DATABASE)
// =========================================================================
$labels = ['Mekanik CAD', 'Elektronika Embedded', 'Pemrograman PLC', 'Sistem Kontrol', 'Pneumatik & Hidrolik'];
$data_persen = [85, 90, 75, 80, 70];

$warna_bg_list = [
    'rgba(52, 152, 219, 0.75)',  // Biru
    'rgba(46, 204, 113, 0.75)',  // Hijau
    'rgba(231, 76, 60, 0.75)',   // Merah
    'rgba(155, 89, 182, 0.75)',  // Ungu
    'rgba(241, 196, 15, 0.75)'   // Kuning
];
$warna_bd_list = [
    'rgba(52, 152, 219, 1)', 'rgba(46, 204, 113, 1)', 
    'rgba(231, 76, 60, 1)', 'rgba(155, 89, 182, 1)', 'rgba(241, 196, 15, 1)'
];

$warna_bg_dinamis = [];
$warna_bd_dinamis = [];
$index_warna = 0;

foreach ($labels as $label) {
    $warna_bg_dinamis[] = $warna_bg_list[$index_warna % count($warna_bg_list)];
    $warna_bd_dinamis[] = $warna_bd_list[$index_warna % count($warna_bd_list)];
    $index_warna++;
}
@endphp

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio Mekatronika & Otomasi - Firman</title>
    
    <!-- FIX SINKRONISASI ASSET: Langsung membaca file di dalam folder public/asset -->
    <link rel="stylesheet" href="{{ asset('asset/css/bootstrap.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('web_portfolio_style.css') }}"/>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="{{ asset('asset/js/bootstrap.bundle.min.js') }}"></script>
</head>
<body>

    <nav class="navbar">
        <div class="logo">Sampai<span>Selesai</span></div>
        <ul class="nav-links">
            <li><a href="#home">Home</a></li>
            <li><a href="#about">Tentang</a></li>
            <li><a href="#services">Jasa</a></li>
            <li><a href="#skills">Keahlian</a></li>
            <li><a href="#contact">Kontak</a></li>
        </ul>
    </nav>

    <header id="home" class="hero">
        <div class="hero-content">
            <h1>Spesialis <span class="typing-text"></span></h1>
            <p>Mengintegrasikan mekanik, elektronik, dan pemrograman untuk menciptakan solusi otomasi industri cerdas dan efisien.</p>
            <a href="#contact" class="btn">Diskusikan Proyek</a>
        </div>
    </header>

    <section id="about" class="about">
        <h2>Tentang Saya</h2>
        <p class="about-text">
            Kami adalah teknisi dan pengembang di bidang mekatronika yang memiliki kombinasi keahlian dalam mekanik, elektronik, dan pemrograman. Fokus utama saya adalah merancang sistem cerdas, melakukan pemeliharaan perangkat otomasi, hingga membangun pembuatan sampel (prototyping) berbasis embedded system untuk menjawab tantangan industri modern.
        </p>
    </section>

    <section id="services" class="services">
        <h2>Layanan Jasa</h2>
        <div class="services-grid">
            <div class="service-card">
                <!-- FIX SINKRONISASI ASSET: Pemanggilan gambar langsung dari root folder asset -->
                <img src="{{ asset('asset/Mechanic.webp') }}" class="custom-service-img">
                <h3>Desain Sistem Mekatronika</h3>
                <p>Pengembangan sistem terintegrasi dari perancangan mekanik hingga sistem kendali elektronik.</p>
            </div>
            <div class="service-card">
                <img src="{{ asset('asset/antenna-placement-2.jpg') }}" class="custom-service-img">
                <h3>Pemrograman Embedded & PLC</h3>
                <p>Coding sistem kendali mikroprosesor menggunakan Arduino, sistem embedded, hingga logika pemrograman PLC industri.</p>
            </div>
            <div class="service-card">
                <img src="{{ asset('asset/maintenance.jfif') }}" class="custom-service-img">
                <h3>Maintenance & Perbaikan Mesin</h3>
                <p>Jasa pemeliharaan periodik (maintenance) serta perbaikan kerusakan pada mesin-mesin otomatisasi industri.</p>
            </div>
            <div class="service-card">
                <img src="{{ asset('asset/3D-Printing (1).jpg') }}" class="custom-service-img">
                <h3>Pemodelan 3D & Prototyping</h3>
                <p>Pembuatan desain komponen 3D mekanik CAD dan pembuatan purwarupa cepat (rapid prototyping).</p>
            </div>
            <div class="service-card">
                <img src="{{ asset('asset/Sensor-1.jpg') }}" class="custom-service-img">
                <h3>Integrasi Sensor & Aktuator</h3>
                <p>Instalasi, kalibrasi, dan interkoneksi berbagai sensor serta aktuator industri ke dalam sistem kontrol.</p>
            </div>
        </div>
    </section>

    <section id="skills" class="skills">
        <h2>Grafik Tingkat Keahlian</h2>
        <p class="subtitle">Visualisasi kompetensi teknik utama yang saya kuasai dalam ekosistem mekatronika.</p>
        <div class="chart-container">
            <canvas id="skillsChart"></canvas>
        </div>
    </section>

    <section id="contact" class="contact">
        <h2>Mulai Proyek Otomasi Anda</h2>
        <p>Butuh solusi teknik, perbaikan mesin, atau pembuatan purwarupa sistem cerdas? Hubungi saya sekarang.</p>
        
        <!-- Simulasi Pengiriman Form Kontak tanpa Database -->
        <form class="contact-form" action="#" method="POST" onsubmit="event.preventDefault(); alert('Simulasi: Permintaan jasa Anda berhasil dikirim!');">
            @csrf
            <input type="text" name="nama_perusahaan" placeholder="Nama Perusahaan / Perorangan" required>
            <input type="email" name="email_anda" placeholder="Email Anda" required>
            <textarea name="detail_proyek" placeholder="Jelaskan kebutuhan teknis atau detail mesin yang ingin dikembangkan/diperbaiki..." rows="5" required></textarea>
            <button type="submit" class="btn">Kirim Permintaan Jasa</button>
        </form>
    </section>

    <div style="text-align: center; margin: 40px 0;">
        <p>Sudah melakukan pembayaran? Berikan ulasan Anda:</p>
        <button id="openRatingBtn" class="btn-rating">
            <i class="fa-solid fa-star-half-stroke"></i> Beri Ulasan Jasa
        </button>
    </div>

    <div id="ratingModal" class="modal">
        <div class="modal-content">
            <span class="close-modal">&times;</span>
            <h3>Berikan Ulasan & Rating Anda</h3>
            <p class="modal-subtitle">Terima kasih telah menggunakan jasa Firman Mekatronika</p>
            
            <!-- Simulasi Ulasan Rating tanpa Database -->
            <form id="ratingForm" action="#" method="POST" enctype="multipart/form-data" onsubmit="event.preventDefault(); alert('Simulasi: Ulasan dan rating Anda berhasil disimpan!'); document.getElementById('ratingModal').style.display = 'none';">
                @csrf
                <div class="star-rating">
                    <input type="radio" id="star5" name="rating" value="5" required><label for="star5" class="fa-solid fa-star"></label>
                    <input type="radio" id="star4" name="rating" value="4"><label for="star4" class="fa-solid fa-star"></label>
                    <input type="radio" id="star3" name="rating" value="3"><label for="star3" class="fa-solid fa-star"></label>
                    <input type="radio" id="star2" name="rating" value="2"><label for="star2" class="fa-solid fa-star"></label>
                    <input type="radio" id="star1" name="rating" value="1"><label for="star1" class="fa-solid fa-star"></label>
                </div>

                <div class="form-group">
                    <textarea id="reviewComment" name="komentar" placeholder="Tulis komentar atau pengalaman Anda menggunakan jasa kami..." rows="4" required></textarea>
                </div>

                <div class="form-group file-upload-wrapper">
                    <label for="reviewImage" class="custom-file-upload">
                        <i class="fa-solid fa-cloud-arrow-up"></i> Unggah Foto Hasil Kerja
                    </label>
                    <input type="file" id="reviewImage" name="foto_kerja" accept="image/*">
                    <div id="imagePreview" class="image-preview-box"></div>
                </div>

                <button type="submit" class="btn btn-submit-rating">Kirim Ulasan</button>
            </form>
        </div>
    </div>
    
    <footer>
        <p>&copy; 2026 Firman Dzaky all Rights Reserved.</p>
    </footer>

    <script>
    document.addEventListener("DOMContentLoaded", function () {
        const ctx = document.getElementById('skillsChart').getContext('2d');
        const skillsChart = new Chart(ctx, {
            type: 'bar', 
            data: {
                labels: {!! json_encode($labels) !!},
                datasets: [{
                    label: 'Tingkat Kemahiran (%)',
                    data: {!! json_encode($data_persen) !!}, 
                    backgroundColor: {!! json_encode($warna_bg_dinamis) !!},
                    borderColor: {!! json_encode($warna_bd_dinamis) !!},
                    borderWidth: 1.5,
                    borderRadius: 4
                }]
            },
            options: {
                indexAxis: 'y', 
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    x: {
                        beginAtZero: true,
                        max: 100,
                        ticks: { callback: function(value) { return value + '%'; } }
                    }
                },
                plugins: { legend: { display: false } }
            }
        });
    });
    </script>

    <!-- FIX SINKRONISASI ASSET: Pemanggilan script JS utama dari root folder asset -->
    <script src="{{ asset('asset/web_portfolio_script.js') }}"></script>
</body>
</html>