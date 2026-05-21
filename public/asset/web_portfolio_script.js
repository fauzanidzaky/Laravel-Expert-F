document.addEventListener("DOMContentLoaded", function () {
    
    // ==========================================
    // 1. GRAFIK KEAHLIAN TEKNIK (CHART.JS)
    // ==========================================
    /*
    const ctx = document.getElementById('skillsChart').getContext('2d');
    const skillsChart = new Chart(ctx, {
        type: 'bar', 
        data: {
            // Label disesuaikan dengan 5 pilar keahlian Mekatronika milikmu
            labels: [
                'Desain Sistem Mekatronika', 
                'Pemrograman Arduino, PLC & Embedded', 
                'Maintenance Mesin Otomatis', 
                'Pemodelan 3D & Prototyping', 
                'Integrasi Sensor & Aktuator'
            ],
            datasets: [{
                label: 'Tingkat Kemahiran (%)',
                data: [90, 95, 85, 80, 88], // Silakan sesuaikan angka persentase penguasaan keahlianmu
                backgroundColor: [
                    'rgba(52, 152, 219, 0.75)',  // Biru (Mekatronika)
                    'rgba(46, 204, 113, 0.75)',  // Hijau (Coding/PLC)
                    'rgba(231, 76, 60, 0.75)',   // Merah (Maintenance)
                    'rgba(155, 89, 182, 0.75)',  // Ungu (3D CAD)
                    'rgba(241, 196, 15, 0.75)'   // Kuning (Sensor/I/O)
                ],
                borderColor: [
                    'rgba(52, 152, 219, 1)', 'rgba(46, 204, 113, 1)', 
                    'rgba(231, 76, 60, 1)', 'rgba(155, 89, 182, 1)', 'rgba(241, 196, 15, 1)'
                ],
                borderWidth: 1.5,
                borderRadius: 4
            }]
        },
        options: {
            indexAxis: 'y', // Mengubah orientasi menjadi menyamping agar teks keahlian teknik terbaca rapi
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
    }); */

    // ==========================================
    // 2. EFEK TEXT MENGETIK (TYPING EFFECT)
    // ==========================================
    const targetText = document.querySelector(".typing-text");
    if (targetText) {
        const professions = ["Teknisi Mekatronika", "Embedded System Engineer", "Automation Specialist"];
        let prodIndex = 0;
        let charIndex = 0;
        let isDeleting = false;

        function type() {
            const currentProf = professions[prodIndex];
            
            if (isDeleting) {
                targetText.textContent = currentProf.substring(0, charIndex - 1);
                charIndex--;
            } else {
                targetText.textContent = currentProf.substring(0, charIndex + 1);
                charIndex++;
            }

            let speed = isDeleting ? 40 : 80;

            if (!isDeleting && charIndex === currentProf.length) {
                speed = 2000; 
                isDeleting = true;
            } else if (isDeleting && charIndex === 0) {
                isDeleting = false;
                prodIndex = (prodIndex + 1) % professions.length;
                speed = 500;
            }

            setTimeout(type, speed);
        }
        type();
    }

    // ==========================================
    // 3. ANIMASI SCROLL CARDS (FADE IN)
    // ==========================================
    const cards = document.querySelectorAll(".service-card");
    cards.forEach(card => card.style.transition = "all 0.6s ease-out");

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = "1";
                entry.target.style.transform = "translateY(0)";
            }
        });
    }, { threshold: 0.1 });

    cards.forEach(card => observer.observe(card)); 

    // ==========================================
    // 4. ACTIVE NAVIGATION (SCROLL SPY)
    // ==========================================
    const sections = document.querySelectorAll("header, section");
    const navLinks = document.querySelectorAll(".nav-links a");

    window.addEventListener("scroll", () => {
        let currentId = "";
        sections.forEach(sec => {
            const top = sec.offsetTop;
            const height = sec.clientHeight;
            if (window.scrollY >= (top - height / 3)) {
                currentId = sec.getAttribute("id");
            }
        });

        navLinks.forEach(link => {
            link.classList.remove("active");
            if (link.getAttribute("href") === `#${currentId}`) {
                link.classList.add("active");
            }
        });
    });

    // ==========================================
    // 5. MODAL INTERAKTIF RATING, KOMENTAR & FOTO
    // ==========================================
    const modal = document.getElementById("ratingModal");
    const openBtn = document.getElementById("openRatingBtn");
    const closeBtn = document.querySelector(".close-modal");
    const ratingForm = document.getElementById("ratingForm");
    const fileInput = document.getElementById("reviewImage");
    const imagePreview = document.getElementById("imagePreview");

    // Buka Pop-up saat icon/tombol di-klik
    if (openBtn) {
        openBtn.addEventListener("click", () => {
            modal.style.display = "flex";
        });
    }

    // Tutup Pop-up saat tombol silang (X) di-klik
    if (closeBtn) {
        closeBtn.addEventListener("click", () => {
            modal.style.display = "none";
            ratingForm.reset();
            imagePreview.innerHTML = ""; // Bersihkan preview foto
        });
    }

    // Tutup Pop-up jika area luar kotak dialog di-klik
    window.addEventListener("click", (e) => {
        if (e.target === modal) {
            modal.style.display = "none";
            ratingForm.reset();
            imagePreview.innerHTML = "";
        }
    });

    // Logika Preview/Pratinjau Foto Gambar sebelum diunggah
    if (fileInput) {
        fileInput.addEventListener("change", function () {
            imagePreview.innerHTML = ""; // Reset box preview sebelumnya
            const file = this.files[0];
            if (file) {
                const reader = new FileReader();
                reader.addEventListener("load", function () {
                    const img = document.createElement("img");
                    img.setAttribute("src", this.result);
                    imagePreview.appendChild(img);
                });
                reader.readAsDataURL(file);
            }
        });
    }

    // Aksi saat form ulasan dikirim (Submit)
    
    if (ratingForm) {
        ratingForm.addEventListener("submit", function (e) {
            e.preventDefault();

            // Mengambil data rating bintang yang dipilih
            const selectedRating = document.querySelector('input[name="rating"]:checked');
            const comment = document.getElementById("reviewComment").value;
            const imageFile = fileInput.files[0];

            if (!selectedRating) {
                alert("Silakan pilih rating bintang terlebih dahulu!");
                return;
            }

            // Simulasi penampung data (bisa dikirim ke server/database di masa depan)
            console.log("Rating:", selectedRating.value);
            console.log("Komentar:", comment);
            console.log("File Gambar:", imageFile ? imageFile.name : "Tidak ada gambar");

            // Tampilkan notifikasi sukses kepada klien
            alert(`Terima kasih atas ulasan Anda!\nRating: ${selectedRating.value} Bintang telah tersimpan.`);
            
            // Tutup kembali pop-up modal dan bersihkan form
            modal.style.display = "none";
            ratingForm.reset();
            imagePreview.innerHTML = "";
        });
    }; 

});

           