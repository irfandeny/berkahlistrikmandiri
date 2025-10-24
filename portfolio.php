<?php 
$pageTitle = "Proyek & Portfolio"; 
include 'includes/header.php';
?>

    <!-- PORTFOLIO HERO -->
    <section class="hero" style="padding: 60px 2rem;">
        <div class="hero-content">
            <h1>Portfolio Proyek Kami</h1>
            <p>Koleksi proyek-proyek instalasi listrik yang telah kami selesaikan dengan profesional dan memuaskan</p>
        </div>
    </section>

    <!-- FILTER BUTTONS -->
    <section class="container" style="padding: 80px 2rem; margin-top: 3rem;">
        <div class="section-title">
            <h2>Proyek Terkini</h2>
            <p>Lihat berbagai proyek yang telah kami tangani</p>
        </div>

        <div style="text-align: center; margin-bottom: 3rem; display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
            <button class="filter-btn active" data-filter="all" style="background: var(--warna-utama); color: var(--warna-gelap); padding: 0.75rem 1.5rem; border: 2px solid var(--warna-utama); border-radius: 25px; font-weight: 600; cursor: pointer; transition: all 0.3s; font-size: 0.95rem;">Semua Proyek</button>
            <button class="filter-btn" data-filter="rumah" style="background: transparent; color: var(--warna-gelap); padding: 0.75rem 1.5rem; border: 2px solid #ddd; border-radius: 25px; font-weight: 600; cursor: pointer; transition: all 0.3s; font-size: 0.95rem;">Rumah</button>
            <button class="filter-btn" data-filter="kantor" style="background: transparent; color: var(--warna-gelap); padding: 0.75rem 1.5rem; border: 2px solid #ddd; border-radius: 25px; font-weight: 600; cursor: pointer; transition: all 0.3s; font-size: 0.95rem;">Kantor</button>
            <button class="filter-btn" data-filter="industri" style="background: transparent; color: var(--warna-gelap); padding: 0.75rem 1.5rem; border: 2px solid #ddd; border-radius: 25px; font-weight: 600; cursor: pointer; transition: all 0.3s; font-size: 0.95rem;">Industri</button>
            <button class="filter-btn" data-filter="komersial" style="background: transparent; color: var(--warna-gelap); padding: 0.75rem 1.5rem; border: 2px solid #ddd; border-radius: 25px; font-weight: 600; cursor: pointer; transition: all 0.3s; font-size: 0.95rem;">Komersial</button>
        </div>
    </section>

    <!-- PORTFOLIO GRID -->
    <section class="container" style="padding-bottom: 80px;">
        <div class="portfolio-grid">
            <!-- PROYEK 1 -->
            <div class="portfolio-item" data-category="rumah" data-aos="fade-up">
                <img class="portfolio-img" src="https://images.unsplash.com/photo-1721394745118-0fa548954c5d?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&q=80&w=500" alt="Instalasi Listrik Rumah Mewah">
                <div class="portfolio-overlay">
                    <h3>Instalasi Listrik Rumah Mewah</h3>
                    <p>Taman Semeru, Jakarta Selatan - 2024</p>
                </div>
            </div>

            <!-- PROYEK 2 -->
            <div class="portfolio-item" data-category="kantor" data-aos="fade-up" data-aos-delay="50">
                <img class="portfolio-img" src="https://plus.unsplash.com/premium_photo-1683880731785-e5b632e0ea13?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&q=80&w=500" alt="Instalasi Panel di Gedung Perkantoran">
                <div class="portfolio-overlay">
                    <h3>Instalasi Panel Kantor</h3>
                    <p>Gedung Perkantoran ABC, Jakarta Pusat - 2024</p>
                </div>
            </div>

            <!-- PROYEK 3 -->
            <div class="portfolio-item" data-category="komersial" data-aos="fade-up" data-aos-delay="100">
                <img class="portfolio-img" src="https://plus.unsplash.com/premium_photo-1664202525979-80d1da46b34b?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&q=80&w=500" alt="Instalasi Toko Online">
                <div class="portfolio-overlay">
                    <h3>Instalasi Listrik Toko Online</h3>
                    <p>Kota Surabaya, Jawa Timur - 2023</p>
                </div>
            </div>



            <!-- PROYEK 5 -->
            <div class="portfolio-item" data-category="rumah" data-aos="fade-up" data-aos-delay="200">
                <img class="portfolio-img" src="https://images.unsplash.com/photo-1507089947368-19c1da9775ae?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&q=80&w=500" alt="Rumah Minimalis Modern">
                <div class="portfolio-overlay">
                    <h3>Rumah Minimalis Modern</h3>
                    <p>Kota Malang, Jawa Timur - 2022</p>
                </div>
            </div>

            <!-- PROYEK 6 -->
            <div class="portfolio-item" data-category="kantor" data-aos="fade-up" data-aos-delay="250">
                <img class="portfolio-img" src="https://images.unsplash.com/photo-1552664730-d307ca884978?w=500&h=300&fit=crop" alt="Instalasi Kantor Startup">
                <div class="portfolio-overlay">
                    <h3>Kantor Startup Tech</h3>
                    <p>Kota Sidoarjo, Jawa Timur - 2023</p>
                </div>
            </div>

            <!-- PROYEK 7 -->
            <div class="portfolio-item" data-category="komersial" data-aos="fade-up" data-aos-delay="300">
                <img class="portfolio-img" src="https://images.unsplash.com/photo-1567521464027-f127ff144326?w=500&h=300&fit=crop" alt="Instalasi Restoran">
                <div class="portfolio-overlay">
                    <h3>Instalasi Restoran Modern</h3>
                    <p>Kota Gresik, Jawa Timur - 2023</p>
                </div>
            </div>

            <!-- PROYEK 8 -->
            <div class="portfolio-item" data-category="industri" data-aos="fade-up" data-aos-delay="350">
                <img class="portfolio-img" src="https://images.unsplash.com/photo-1705051278299-7e64ba21437a?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&q=80&w=500" alt="Panel Generator Otomatis">
                <div class="portfolio-overlay">
                    <h3>Panel Generator Otomatis</h3>
                    <p>Kota Pasuruan, Jawa Timur - 2022</p>
                </div>
            </div>
        </div>
    </section>

    <!-- DETAIL PROYEK SECTION -->
    <section style="background: #f5f5f5; padding: 80px 2rem; margin-top: 4rem;">
        <div class="container">
            <div class="section-title">
                <h2>Proyek Unggulan Kami</h2>
                <p>Detail mengenai proyek-proyek terbaik dan paling memuaskan dari klien</p>
            </div>

            <!-- PROYEK DETAIL 1 -->
            <div data-aos="fade-up" style="margin-bottom: 3rem; background: white; padding: 2rem; border-radius: 12px; box-shadow: 0 5px 15px rgba(0,0,0,0.1);">
                <div class="about-grid">
                <div>
                    <h3 style="font-size: 1.5rem; margin-bottom: 1rem;">🏠 Instalasi Listrik Rumah Mewah Taman Semeru</h3>
                    <p><strong>Lokasi:</strong> Taman Semeru, Kota Malang, Jawa Timur</p>
                    <p><strong>Tahun:</strong> 2024</p>
                    <p><strong>Durasi:</strong> 2 Minggu</p>
                    <p style="margin-top: 1rem;">Proyek instalasi listrik lengkap untuk rumah mewah 2 lantai dengan total beban listrik 6600VA. Kami melakukan perencanaan sistem kelistrikan modern dengan menggunakan material berkualitas internasional.</p>
                    
                    <h4 style="margin-top: 1rem;">Scope Pekerjaan:</h4>
                    <ul style="margin-left: 1.5rem;">
                        <li>Pemasangan panel utama 6600VA dengan MCB 3 phase</li>
                        <li>Instalasi kabel NYM 4 x 2.5mm² dan 2 x 1.5mm²</li>
                        <li>Pemasangan stop kontak dan saklar modern</li>
                        <li>Instalasi lampu downlight dan spotlight</li>
                        <li>Sistem penangkal petir</li>
                    </ul>

                    <p style="margin-top: 1rem;"><strong style="color: var(--warna-highlight);">Hasil:</strong> Sistem kelistrikan berjalan optimal dengan garansi 2 tahun. Klien sangat puas dengan hasil dan tepat waktu.</p>
                </div>

                <img src="https://images.unsplash.com/photo-1721394745118-0fa548954c5d?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&q=80&w=400" alt="Rumah Mewah" style="border-radius: 12px; height: 300px; object-fit: cover;">
            </div>
        </div>

        <!-- PROYEK DETAIL 2 -->
        <div data-aos="fade-up" style="margin-bottom: 3rem; background: white; padding: 2rem; border-radius: 12px; box-shadow: 0 5px 15px rgba(0,0,0,0.1);">
            <div class="about-grid">
                <img src="https://plus.unsplash.com/premium_photo-1683880731785-e5b632e0ea13?ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&q=80&w=400" alt="Gedung Perkantoran" style="border-radius: 12px; height: 300px; object-fit: cover; order: -1;">
                
                <div style="order: 1;">
                    <h3 style="font-size: 1.5rem; margin-bottom: 1rem;">🏢 Instalasi Panel Gedung Perkantoran ABC</h3>
                    <p><strong>Lokasi:</strong> Gedung Perkantoran ABC, Kota Surabaya, Jawa Timur</p>
                    <p><strong>Tahun:</strong> 2024</p>
                    <p><strong>Durasi:</strong> 3 Minggu</p>
                    <p style="margin-top: 1rem;">Proyek instalasi panel listrik kompleks untuk gedung perkantoran 8 lantai dengan sistem distribusi 3-phase bertegangan 380V. Implementasi sistem kelistrikan modern dengan redundancy dan backup generator.</p>
                    
                    <h4 style="margin-top: 1rem;">Scope Pekerjaan:</h4>
                    <ul style="margin-left: 1.5rem;">
                        <li>Panel Utama dengan kapasitas 400A 3-phase</li>
                        <li>Panel Sub-distribusi untuk setiap lantai</li>
                        <li>Sistem Automatic Transfer Switch (ATS) untuk genset</li>
                        <li>Instalasi cable tray dan conduit profesional</li>
                        <li>Emergency lighting dan exit sign system</li>
                    </ul>

                    <p style="margin-top: 1rem;"><strong style="color: var(--warna-highlight);">Hasil:</strong> Sistem kelistrikan gedung berfungsi sempurna dengan kapasitas beban penuh. Sertifikasi keselamatan telah diterbitkan.</p>
                </div>
            </div>
        </div>

        <!-- PROYEK DETAIL 3 - DIHAPUS -->

    </section>

    <!-- TESTIMONI PROYEK -->
    <section class="container" style="padding: 80px 2rem; margin-top: 3rem;">
        <div class="section-title">
            <h2>Testimoni dari Klien</h2>
            <p>Kepuasan klien adalah bukti kualitas kerja kami</p>
        </div>

        <div class="testimonial-grid">
            <div class="testimonial-card" data-aos="fade-up">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>"Proyek instalasi listrik rumah kami selesai tepat waktu dan hasil sangat memuaskan. Tim teknisinya profesional, ramah, dan penuh tanggung jawab. Terima kasih!"</p>
                <div class="testimonial-author">
                    <img class="author-img" src="https://i.pravatar.cc/150?img=10" alt="Ibu Sari">
                    <div class="author-info">
                        <h4>Ibu Sari Wijaya</h4>
                        <p>Proyek Rumah Mewah, Madura</p>
                    </div>
                </div>
            </div>

            <div class="testimonial-card" data-aos="fade-up" data-aos-delay="100">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>"Maintenance sistem kelistrikan gedung kantor kami ditangani dengan profesional. Response time cepat dan problem-solving mereka sangat bagus. Kami puas!"</p>
                <div class="testimonial-author">
                    <img class="author-img" src="https://i.pravatar.cc/150?img=11" alt="Pak Budi">
                    <div class="author-info">
                        <h4>Pak Budi Santoso</h4>
                        <p>Gedung Perkantoran, Madura</p>
                    </div>
                </div>
            </div>

            <div class="testimonial-card" data-aos="fade-up" data-aos-delay="200">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>"Sistem kelistrikan pabrik kami sangat stabil dan efisien. Tim mereka sangat berpengalaman dengan sistem industri. ROI dari investasi ini sudah terasa setelah 3 bulan!"</p>
                <div class="testimonial-author">
                    <img class="author-img" src="https://i.pravatar.cc/150?img=12" alt="Pak Hendra">
                    <div class="author-info">
                        <h4>Pak Hendra Sutrisno</h4>
                        <p>Direktur Pabrik, Madura</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA SECTION -->
    <section class="hero" style="padding: 60px 2rem; margin-top: 4rem;">
        <div class="hero-content">
            <h2 style="font-size: 2.2rem; margin-bottom: 1rem;">Tertarik Menjadi Klien Kami?</h2>
            <p style="margin-bottom: 2rem;">Hubungi kami untuk konsultasi proyek Anda. Kami siap memberikan solusi kelistrikan terbaik dengan kualitas dan harga kompetitif.</p>
            <a href="contact.php" class="btn-primary">Hubungi Kami</a>
            <a href="https://wa.me/6287805587738?text=Assalamu%27alaikum%20Berkah%20Listrik%20Mandiri.%20Saya%20ingin%20mengetahui%20lebih%20lanjut%20tentang%20layanan%20instalasi%20listrik%20Anda.%20Bisa%20kah%20kami%20berbicara%20lebih%20lanjut%3F" class="btn-secondary" target="_blank"><i class="fab fa-whatsapp"></i> Chat WhatsApp</a>
        </div>
    </section>

<?php include 'includes/footer.php'; ?>
