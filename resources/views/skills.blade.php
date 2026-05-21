@extends('SampaiJadi')
@section('title', 'Keahlian')

@section('content')
    <section id="skills" class="skills" style="padding-top: 120px;">
        <h2>Grafik Tingkat Keahlian</h2>
        <p class="subtitle">Visualisasi kompetensi teknik utama yang saya kuasai dalam ekosistem mekatronika.</p>
        <div class="chart-container">
            <canvas id="skillsChart"></canvas>
        </div>
    </section>
@endsection

@section('scripts')
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
@endsection