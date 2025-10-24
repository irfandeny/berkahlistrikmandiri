<?php 
$pageTitle = "Kontak"; 
include 'includes/header.php';
?>
    <!-- CONTACT HERO -->
    <section class="hero" style="padding: 60px 2rem;">
        <div class="hero-content">
            <h1>Hubungi Kami</h1>
            <p>Ada pertanyaan atau ingin memesan jasa kami? Hubungi kami sekarang juga!</p>
        </div>
    </section>

    <!-- CONTACT SECTION -->
    <section class="container">
        <div class="section-title">
            <h2>Kirim Pesan Kepada Kami</h2>
            <p>Kami siap membalas pesan Anda dalam 24 jam</p>
        </div>

        <div class="contact-grid">
            <!-- FORM -->
            <form id="contactForm" class="contact-form" data-aos="fade-right">
                <div class="alert alert-success"></div>
                <div class="alert alert-danger"></div>

                <div class="form-group">
                    <label for="nama">Nama Lengkap *</label>
                    <input type="text" id="nama" name="nama" placeholder="Masukkan nama Anda" required>
                </div>

                <div class="form-group">
                    <label for="email">Email *</label>
                    <input type="email" id="email" name="email" placeholder="email@example.com" required>
                </div>

                <div class="form-group">
                    <label for="telepon">Nomor Telepon</label>
                    <input type="tel" id="telepon" name="telepon" placeholder="08xx-xxxx-xxxx">
                </div>

                <div class="form-group">
                    <label for="subjek">Subjek *</label>
                    <input type="text" id="subjek" name="subjek" placeholder="Pilih kategori pertanyaan" required>
                </div>

                <div class="form-group">
                    <label for="pesan">Pesan *</label>
                    <textarea id="pesan" name="pesan" placeholder="Tulis pesan Anda di sini..." required></textarea>
                </div>

                <div class="form-group">
                    <button type="submit">✉️ Kirim Pesan</button>
                </div>
            </form>

            <!-- CONTACT INFO -->
            <div class="contact-info" data-aos="fade-left">
                <div class="info-item">
                    <div class="info-icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div class="info-content">
                        <h3>Alamat</h3>
                        <p>Gg. 12 No.8, Dusun Bend., Landungsari, Kec. Dau, Kabupaten Malang, Jawa Timur 65151</p>
                    </div>
                </div>

                <div class="info-item">
                    <div class="info-icon">
                        <i class="fas fa-phone"></i>
                    </div>
                    <div class="info-content">
                        <h3>Telepon</h3>
                        <p><a href="tel:+6287805587738">+62 878-0558-7738</a></p>
                    </div>
                </div>

                <div class="info-item">
                    <div class="info-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="info-content">
                        <h3>Email</h3>
                        <p><a href="mailto:info@berkahlstrik.com">info@berkahlstrik.com</a></p>
                        <p><a href="mailto:support@berkahlstrik.com">support@berkahlstrik.com</a></p>
                    </div>
                </div>

                <div class="info-item">
                    <div class="info-icon">
                        <i class="fab fa-whatsapp"></i>
                    </div>
                    <div class="info-content">
                        <h3>WhatsApp</h3>
                        <p><a href="https://wa.me/6287805587738?text=Assalamu%27alaikum%20Berkah%20Listrik%20Mandiri.%20Saya%20ingin%20mengetahui%20lebih%20lanjut%20tentang%20layanan%20instalasi%20listrik%20Anda.%20Bisa%20kah%20kami%20berbicara%20lebih%20lanjut%3F" target="_blank">Chat via WhatsApp</a></p>
                        <p>Respon cepat 24 jam</p>
                    </div>
                </div>

                <div class="info-item">
                    <div class="info-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <div class="info-content">
                        <h3>Jam Operasional</h3>
                        <p><strong>Senin - Jumat:</strong> 08:00 - 17:00</p>
                        <p><strong>Sabtu:</strong> 08:00 - 14:00</p>
                        <p><strong>Minggu & Libur:</strong> Darurat 24 Jam</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- MAP SECTION -->
    <section class="container" style="margin-top: 4rem;">
        <div class="section-title">
            <h2>Lokasi Kami</h2>
            <p>Kunjungi kantor kami di lokasi ini</p>
        </div>

        <div class="map-container" data-aos="zoom-in">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.8342926482!2d112.593956!3d-7.927029!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7c8a8a8a8a8a9%3A0x1234567890abcdef!2sGg.%2012%20No.8%2C%20Landungsari%2C%20Kec.%20Dau%2C%20Kabupaten%20Malang!5e0!3m2!1sid!2sid!4v1698056160000" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>

    <!-- FAQ SECTION -->
    <section style="background: #f5f5f5; padding: 80px 2rem; margin-top: 4rem;">
        <div class="container">
            <div class="section-title">
                <h2>Pertanyaan yang Sering Diajukan</h2>
                <p>Jawaban untuk pertanyaan umum tentang layanan kami</p>
            </div>

            <div style="max-width: 800px; margin: 0 auto;">
            <div class="faq-item" data-aos="fade-up" style="background: white; padding: 1.5rem; margin-bottom: 1rem; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); cursor: pointer;">
                <h4 style="color: var(--warna-gelap); display: flex; justify-content: space-between; align-items: center;">
                    <span>Berapa lama proses instalasi listrik rumah?</span>
                    <i class="fas fa-chevron-down"></i>
                </h4>
                <p style="color: #666; margin-top: 0.5rem; display: none;">Untuk rumah ukuran standar (100-150m²), proses instalasi biasanya memakan waktu 5-10 hari kerja tergantung kompleksitas dan jumlah titik instalasi.</p>
            </div>

            <div class="faq-item" data-aos="fade-up" data-aos-delay="100" style="background: white; padding: 1.5rem; margin-bottom: 1rem; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); cursor: pointer;">
                <h4 style="color: var(--warna-gelap); display: flex; justify-content: space-between; align-items: center;">
                    <span>Apakah ada garansi untuk pekerjaan?</span>
                    <i class="fas fa-chevron-down"></i>
                </h4>
                <p style="color: #666; margin-top: 0.5rem; display: none;">Ya, semua pekerjaan kami dilengkapi garansi 2 tahun. Jika ada kerusakan dalam masa garansi, kami siap memberikan perbaikan gratis.</p>
            </div>

            <div class="faq-item" data-aos="fade-up" data-aos-delay="200" style="background: white; padding: 1.5rem; margin-bottom: 1rem; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); cursor: pointer;">
                <h4 style="color: var(--warna-gelap); display: flex; justify-content: space-between; align-items: center;">
                    <span>Bagaimana cara mendapatkan estimasi biaya?</span>
                    <i class="fas fa-chevron-down"></i>
                </h4>
                <p style="color: #666; margin-top: 0.5rem; display: none;">Hubungi kami via telepon, email, atau WhatsApp dan ceritakan detail proyek Anda. Tim kami akan melakukan survey lokasi (gratis) dan memberikan estimasi biaya yang akurat.</p>
            </div>

            <div class="faq-item" data-aos="fade-up" data-aos-delay="300" style="background: white; padding: 1.5rem; margin-bottom: 1rem; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); cursor: pointer;">
                <h4 style="color: var(--warna-gelap); display: flex; justify-content: space-between; align-items: center;">
                    <span>Apakah teknisi Anda bersertifikat?</span>
                    <i class="fas fa-chevron-down"></i>
                </h4>
                <p style="color: #666; margin-top: 0.5rem; display: none;">Ya, semua teknisi kami bersertifikat dan telah mengikuti pelatihan keselamatan kerja. Mereka juga tertarik dalam memahami sistem kelistrikan modern dan efisiensi energi.</p>
            </div>

            <div class="faq-item" data-aos="fade-up" data-aos-delay="400" style="background: white; padding: 1.5rem; margin-bottom: 1rem; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); cursor: pointer;">
                <h4 style="color: var(--warna-gelap); display: flex; justify-content: space-between; align-items: center;">
                    <span>Apakah melayani area di luar Malang/Madura?</span>
                    <i class="fas fa-chevron-down"></i>
                </h4>
                <p style="color: #666; margin-top: 0.5rem; display: none;">Ya, meskipun kantor utama kami berlokasi di Malang, Berkah Listrik Mandiri memiliki cabang dan teknisi di berbagai wilayah Jawa Timur serta kota-kota besar lainnya di Indonesia. Kami siap melayani proyek Anda di mana pun.</p>
            </div>
        </div>
    </section>

    <!-- QUICK CONTACT SECTION -->
    <section class="hero" style="padding: 60px 2rem; margin-top: 4rem;">
        <div class="hero-content">
            <h2 style="font-size: 2.2rem; margin-bottom: 1rem;">Hubungi Kami Melalui Media Pilihan Anda</h2>
            <p style="margin-bottom: 2rem;">Kami siap melayani melalui berbagai saluran komunikasi untuk kenyamanan Anda.</p>
            
            <div style="display: flex; flex-wrap: wrap; gap: 1rem; justify-content: center;">
                <a href="tel:+6287805587738" class="btn-primary">
                    <i class="fas fa-phone"></i> Telepon
                </a>
                <a href="mailto:info@berkahlstrik.com" class="btn-primary">
                    <i class="fas fa-envelope"></i> Email
                </a>
                <a href="https://wa.me/6287805587738?text=Assalamu%27alaikum%20Berkah%20Listrik%20Mandiri.%20Saya%20ingin%20mengetahui%20lebih%20lanjut%20tentang%20layanan%20instalasi%20listrik%20Anda.%20Bisa%20kah%20kami%20berbicara%20lebih%20lanjut%3F" class="btn-secondary" target="_blank">
                    <i class="fab fa-whatsapp"></i> WhatsApp
                </a>
            </div>
        </div>
    </section>

<?php include 'includes/footer.php'; ?>

<script>
$(document).ready(function() {
    // FAQ Accordion
    $('.faq-item').click(function() {
        $(this).find('p').slideToggle(300);
        $(this).find('i').toggleClass('fa-chevron-down fa-chevron-up');
    });
});
</script>
