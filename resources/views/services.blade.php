@extends('SampaiJadi')
@section('title', 'Layanan Jasa')

@section('content')
    <section id="services" class="services" style="padding-top: 120px;">
        <h2>Layanan Jasa</h2>
        <div class="services-grid">
            <div class="service-card">
                <img src="{{ asset('asset/img/Mechanic.webp') }}" class="custom-service-img">
                <h3>Desain Sistem Mekatronika</h3>
                <p>Pengembangan sistem terintegrasi dari perancangan mekanik hingga sistem kendali elektronik.</p>
            </div>
            <div class="service-card">
                <img src="{{ asset('asset/img/antenna-placement-2.jpg') }}" class="custom-service-img">
                <h3>Pemrograman Embedded & PLC</h3>
                <p>Coding sistem kendali mikroprosesor menggunakan Arduino, sistem embedded, hingga logika pemrograman PLC industri.</p>
            </div>
            <div class="service-card">
                <img src="{{ asset('asset/img/maintenance.jfif') }}" class="custom-service-img">
                <h3>Maintenance & Perbaikan Mesin</h3>
                <p>Jasa pemeliharaan periodik (maintenance) serta perbaikan kerusakan pada mesin-mesin otomatisasi industri.</p>
            </div>
            <div class="service-card">
                <img src="{{ asset('asset/img/3D-Printing (1).jpg') }}" class="custom-service-img">
                <h3>Pemodelan 3D & Prototyping</h3>
                <p>Pembuatan desain komponen 3D mekanik CAD dan pembuatan purwarupa cepat (rapid prototyping).</p>
            </div>
            <div class="service-card">
                <img src="{{ asset('asset/img/Sensor-1.jpg') }}" class="custom-service-img">
                <h3>Integrasi Sensor & Aktuator</h3>
                <p>Instalasi, kalibrasi, dan interkoneksi berbagai sensor serta aktuator industri ke dalam sistem kontrol.</p>
            </div>
        </div>
    </section>
@endsection