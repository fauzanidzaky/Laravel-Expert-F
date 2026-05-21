@extends('SampaiJadi')
@section('title', 'Kontak')

@section('content')
    <section id="contact" class="contact" style="padding-top: 120px;">
        <h2>Mulai Proyek Otomasi Anda</h2>
        <p>Butuh solusi teknik, perbaikan mesin, atau pembuatan purwarupa sistem cerdas? Hubungi saya sekarang.</p>
        
        <form class="contact-form" action="#" method="POST" onsubmit="event.preventDefault(); alert('Simulasi: Permintaan jasa Anda berhasil dikirim!');">
            @csrf
            <input type="text" name="nama_perusahaan" placeholder="Nama Perusahaan / Perorangan" required>
            <input type="email" name="email_anda" placeholder="Email Anda" required>
            <textarea name="detail_proyek" placeholder="Jelaskan kebutuhan teknis atau detail mesin..." rows="5" required></textarea>
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
            <form id="ratingForm" action="#" method="POST" onsubmit="event.preventDefault(); alert('Simulasi Sukses!');">
                @csrf
                <div class="star-rating">
                    <input type="radio" id="star5" name="rating" value="5" required><label for="star5" class="fa-solid fa-star"></label>
                    <input type="radio" id="star4" name="rating" value="4"><label for="star4" class="fa-solid fa-star"></label>
                    <input type="radio" id="star3" name="rating" value="3"><label for="star3" class="fa-solid fa-star"></label>
                    <input type="radio" id="star2" name="rating" value="2"><label for="star2" class="fa-solid fa-star"></label>
                    <input type="radio" id="star1" name="rating" value="1"><label for="star1" class="fa-solid fa-star"></label>
                </div>
                <div class="form-group">
                    <textarea name="komentar" placeholder="Tulis komentar..." rows="4" required></textarea>
                </div>
                <button type="submit" class="btn btn-submit-rating">Kirim Ulasan</button>
            </form>
        </div>
    </div>
@endsection
