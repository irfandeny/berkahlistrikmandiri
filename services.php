<?php 
$pageTitle = "Layanan"; 
include 'includes/header.php';
?>

    <!-- SERVICES HERO -->
    <section class="hero" style="padding: 60px 2rem;">
        <div class="hero-content">
            <h1>Layanan Kami</h1>
            <p>Solusi instalasi dan perbaikan listrik lengkap untuk semua kebutuhan Anda</p>
        </div>
    </section>

    <!-- MAIN SERVICES -->
    <section class="container" style="padding: 80px 2rem; margin-top: 3rem;">
        <div class="section-title">
            <h2>Daftar Layanan Utama</h2>
            <p>Pilih layanan yang sesuai dengan kebutuhan Anda</p>
        </div>

        <!-- SERVICE 1: INSTALASI RUMAH -->
        <div class="service-detail" data-aos="fade-up" style="margin-bottom: 3rem;">
            <div class="services-grid" style="grid-template-columns: 1fr 1fr; gap: 2rem; align-items: center;">
                <img src="https://images.unsplash.com/photo-1581092918056-0c4c3acd3789?w=500&h=300&fit=crop" alt="Instalasi Listrik Rumah" style="border-radius: 12px; box-shadow: 0 5px 15px rgba(0,0,0,0.1);">
                
                <div>
                    <div style="display: inline-block; background: var(--warna-utama); color: var(--warna-gelap); padding: 0.5rem 1rem; border-radius: 20px; font-weight: 600; margin-bottom: 1rem;">Paket Populer</div>
                    <h3 id="instalasi" style="font-size: 1.8rem; margin-bottom: 1rem;">🏠 Instalasi Listrik Rumah & Kantor</h3>
                    <p style="color: #666; line-height: 1.8; margin-bottom: 1rem;">Kami menyediakan layanan instalasi listrik lengkap untuk rumah dan kantor dengan standar keselamatan PUIL 2000. Mulai dari perencanaan, pembelian material, hingga finishing sempurna.</p>
                    
                    <h4 style="margin-top: 1.5rem;">Termasuk:</h4>
                    <ul style="margin-left: 1.5rem;">
                        <li>Konsultasi desain gratis</li>
                        <li>Pemasangan kabel dan pipa</li>
                        <li>Pemasangan MCB dan saklar</li>
                        <li>Pengujian keamanan listrik</li>
                        <li>Garansi 2 tahun</li>
                    </ul>
                    
                    <h4 style="margin-top: 1.5rem;">Estimasi Biaya:</h4>
                    <p><strong>Rp 5.000.000 - Rp 25.000.000</strong> (tergantung ukuran dan kompleksitas)</p>
                    
                    <a href="contact.php" class="btn-primary" style="margin-top: 1.5rem;">Pesan Sekarang</a>
                </div>
            </div>
        </div>

        <!-- SERVICE 2: PANEL LISTRIK -->
        <div class="service-detail" data-aos="fade-up" style="margin-bottom: 3rem;">
            <div class="services-grid" style="grid-template-columns: 1fr 1fr; gap: 2rem; align-items: center; direction: rtl;">
                <img src="https://plus.unsplash.com/premium_photo-1682148183600-37cd45353dd0?w=500&h=300&fit=crop" alt="Panel Listrik" style="border-radius: 12px; box-shadow: 0 5px 15px rgba(0,0,0,0.1);">
                
                <div style="direction: ltr;">
                    <h3 id="panel" style="font-size: 1.8rem; margin-bottom: 1rem;">⚡ Perakitan & Instalasi Panel Listrik</h3>
                    <p style="color: #666; line-height: 1.8; margin-bottom: 1rem;">Perakitan panel listrik custom sesuai kebutuhan dengan komponen berkualitas. Kami handle dari desain single line diagram, procurement, assembly, hingga testing.</p>
                    
                    <h4 style="margin-top: 1.5rem;">Jenis Panel yang Kami Layani:</h4>
                    <ul style="margin-left: 1.5rem;">
                        <li>Panel Distribusi Utama (PDU)</li>
                        <li>Panel Instalasi Rumah Tinggal (PIRT)</li>
                        <li>Panel Mesin Cuci / Pompa Air</li>
                        <li>Panel Genset & Automatic Transfer Switch (ATS)</li>
                        <li>Panel Pertamanan / Outdoor</li>
                    </ul>
                    
                    <h4 style="margin-top: 1.5rem;">Estimasi Biaya:</h4>
                    <p><strong>Rp 2.000.000 - Rp 50.000.000</strong> (tergantuk kapasitas dan komponen)</p>
                    
                    <a href="contact.php" class="btn-primary" style="margin-top: 1.5rem;">Pesan Sekarang</a>
                </div>
            </div>
        </div>

        <!-- SERVICE 3: PENGGANTIAN KABEL -->
        <div class="service-detail" data-aos="fade-up" style="margin-bottom: 3rem;">
            <div class="services-grid" style="grid-template-columns: 1fr 1fr; gap: 2rem; align-items: center;">
                <img src="https://plus.unsplash.com/premium_photo-1683127814960-3a97c4f0d882?w=500&h=300&fit=crop" alt="Penggantian Kabel" style="border-radius: 12px; box-shadow: 0 5px 15px rgba(0,0,0,0.1);">
                
                <div>
                    <h3 style="font-size: 1.8rem; margin-bottom: 1rem;">🔌 Penggantian Kabel & Stop Kontak</h3>
                    <p style="color: #666; line-height: 1.8; margin-bottom: 1rem;">Penggantian kabel listrik lama atau rusak dengan kabel berstandar internasional. Juga layanan pemasangan dan penggantian stop kontak modern dan aman.</p>
                    
                    <h4 style="margin-top: 1.5rem;">Pelayanan Includes:</h4>
                    <ul style="margin-left: 1.5rem;">
                        <li>Penggantian kabel instalasi</li>
                        <li>Pemasangan stop kontak modern</li>
                        <li>Pemasangan saklar ganda/triple</li>
                        <li>Perbaikan kabel putus/korsleting</li>
                        <li>Pemasangan dan perbaikan penangkal petir</li>
                    </ul>
                    
                    <h4 style="margin-top: 1.5rem;">Estimasi Biaya:</h4>
                    <p><strong>Rp 500.000 - Rp 3.000.000</strong> per titik kerja</p>
                    
                    <a href="contact.php" class="btn-primary" style="margin-top: 1.5rem;">Pesan Sekarang</a>
                </div>
            </div>
        </div>

        <!-- SERVICE 4: MAINTENANCE -->
        <div class="service-detail" data-aos="fade-up" style="margin-bottom: 3rem;">
            <div class="services-grid" style="grid-template-columns: 1fr 1fr; gap: 2rem; align-items: center; direction: rtl;">
                <img src="https://plus.unsplash.com/premium_photo-1726869692383-19d54eafbc4b?w=500&h=300&fit=crop" alt="Maintenance Listrik" style="border-radius: 12px; box-shadow: 0 5px 15px rgba(0,0,0,0.1);">
                
                <div style="direction: ltr;">
                    <div style="display: inline-block; background: var(--warna-highlight); color: white; padding: 0.5rem 1rem; border-radius: 20px; font-weight: 600; margin-bottom: 1rem;">Layanan Berkala</div>
                    <h3 id="maintenance" style="font-size: 1.8rem; margin-bottom: 1rem;">🔧 Maintenance & Perbaikan Rutin</h3>
                    <p style="color: #666; line-height: 1.8; margin-bottom: 1rem;">Program maintenance rutin untuk memastikan sistem kelistrikan Anda selalu dalam kondisi optimal dan aman. Cegah kerusakan sebelum terjadi!</p>
                    
                    <h4 style="margin-top: 1.5rem;">Paket Maintenance:</h4>
                    <ul style="margin-left: 1.5rem;">
                        <li>Inspeksi menyeluruh sistem listrik</li>
                        <li>Pemeriksaan dan pembersihan panel</li>
                        <li>Uji coba alat-alat listrik</li>
                        <li>Perbaikan dan penggantian komponen rusak</li>
                        <li>Laporan tertulis & dokumentasi</li>
                    </ul>
                    
                    <h4 style="margin-top: 1.5rem;">Estimasi Biaya:</h4>
                    <p><strong>Rp 1.500.000 - Rp 5.000.000</strong> per kali kunjungan</p>
                    
                    <a href="contact.php" class="btn-primary" style="margin-top: 1.5rem;">Pesan Sekarang</a>
                </div>
            </div>
        </div>

        <!-- SERVICE 5: KONSULTASI -->
        <div class="service-detail" data-aos="fade-up" style="margin-bottom: 3rem;">
            <div class="services-grid" style="grid-template-columns: 1fr 1fr; gap: 2rem; align-items: center;">
                <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?w=500&h=300&fit=crop" alt="Konsultasi Listrik" style="border-radius: 12px; box-shadow: 0 5px 15px rgba(0,0,0,0.1);">
                
                <div>
                    <h3 id="konsultasi" style="font-size: 1.8rem; margin-bottom: 1rem;">💡 Konsultasi & Audit Sistem Kelistrikan</h3>
                    <p style="color: #666; line-height: 1.8; margin-bottom: 1rem;">Dapatkan saran profesional dari engineer berpengalaman untuk sistem kelistrikan bangunan Anda. Kami siap memberikan rekomendasi perbaikan dan efisiensi.</p>
                    
                    <h4 style="margin-top: 1.5rem;">Layanan Konsultasi:</h4>
                    <ul style="margin-left: 1.5rem;">
                        <li>Audit keselamatan listrik menyeluruh</li>
                        <li>Analisis kebutuhan daya listrik</li>
                        <li>Desain sistem kelistrikan efisien</li>
                        <li>Perhitungan rating kabel dan MCB</li>
                        <li>Laporan lengkap & rekomendasi</li>
                    </ul>
                    
                    <h4 style="margin-top: 1.5rem;">Estimasi Biaya:</h4>
                    <p><strong>Gratis - Rp 5.000.000</strong> tergantung scope audit</p>
                    
                    <a href="contact.php" class="btn-primary" style="margin-top: 1.5rem;">Pesan Sekarang</a>
                </div>
            </div>
        </div>
    </section>

    <!-- LAYANAN TAMBAHAN -->
    <section style="background: #f5f5f5; padding: 80px 2rem; margin-top: 3rem;">
        <div class="container">
            <div class="section-title">
                <h2>Layanan Tambahan</h2>
                <p>Layanan lainnya yang kami sediakan</p>
            </div>

            <div class="services-grid">
            <div class="service-card" data-aos="fade-up">
                <div class="service-icon">
                    <i class="fas fa-lightbulb"></i>
                </div>
                <h3>Instalasi Sistem Pencahayaan</h3>
                <p>Pemasangan sistem pencahayaan modern hemat energi dengan berbagai pilihan fixture dan desain interior yang menarik.</p>
            </div>

            <div class="service-card" data-aos="fade-up" data-aos-delay="100">
                <div class="service-icon">
                    <i class="fas fa-bolt"></i>
                </div>
                <h3>Instalasi Solar Panel</h3>
                <p>Solusi energi terbarukan dengan pemasangan sistem solar panel terintegrasi lengkap dengan inverter dan baterai penyimpan.</p>
            </div>

            <div class="service-card" data-aos="fade-up" data-aos-delay="200">
                <div class="service-icon">
                    <i class="fas fa-video"></i>
                </div>
                <h3>Instalasi CCTV</h3>
                <p>Sistem keamanan CCTV dengan instalasi profesional, setting, dan training penggunaan untuk ketenangan pikiran Anda.</p>
            </div>

            <div class="service-card" data-aos="fade-up" data-aos-delay="300">
                <div class="service-icon">
                    <i class="fas fa-wifi"></i>
                </div>
                <h3>Instalasi Internet & Network</h3>
                <p>Pemasangan sistem jaringan internet dan networking infrastructure untuk rumah dan kantor dengan coverage optimal.</p>
            </div>

            <div class="service-card" data-aos="fade-up" data-aos-delay="400">
                <div class="service-icon">
                    <i class="fas fa-shield-alt"></i>
                </div>
                <h3>Sistem Penangkal Petir</h3>
                <p>Instalasi sistem penangkal petir (grounding) yang aman dan teruji untuk melindungi bangunan dari bahaya sambaran petir.</p>
            </div>

            <div class="service-card" data-aos="fade-up" data-aos-delay="500">
                <div class="service-icon">
                    <i class="fas fa-phone"></i>
                </div>
                <h3>Layanan Darurat 24 Jam</h3>
                <p>Layanan emergency response 24/7 untuk kasus darurat kelistrikan seperti korsleting, pemadaman, atau kerusakan mendadak.</p>
            </div>
        </div>
    </section>

    <!-- PROSES BEKERJA -->
    <section class="container" style="padding: 80px 2rem; margin-top: 3rem; margin-bottom: 3rem;">
        <div class="section-title">
            <h2>Proses Kerja Kami</h2>
            <p>Langkah-langkah sistematis untuk hasil terbaik</p>
        </div>

        <div class="services-grid" style="grid-template-columns: repeat(4, 1fr);">
            <div class="service-card" data-aos="zoom-in">
                <div class="service-icon" style="background: linear-gradient(135deg, #FFD500, #FF6B35);">
                    <span style="font-size: 2rem; font-weight: 700;">1</span>
                </div>
                <h3>Konsultasi</h3>
                <p>Kami mendengarkan kebutuhan Anda dan memberikan solusi terbaik dengan estimate biaya akurat.</p>
            </div>

            <div class="service-card" data-aos="zoom-in" data-aos-delay="100">
                <div class="service-icon" style="background: linear-gradient(135deg, #FFD500, #FF6B35);">
                    <span style="font-size: 2rem; font-weight: 700;">2</span>
                </div>
                <h3>Persiapan</h3>
                <p>Persiapan lengkap mulai dari planning, pembelian material berkualitas, dan penyediaan tools profesional.</p>
            </div>

            <div class="service-card" data-aos="zoom-in" data-aos-delay="200">
                <div class="service-icon" style="background: linear-gradient(135deg, #FFD500, #FF6B35);">
                    <span style="font-size: 2rem; font-weight: 700;">3</span>
                </div>
                <h3>Eksekusi</h3>
                <p>Pengerjaan oleh teknisi profesional dengan standar keselamatan tinggi dan hasil berkualitas.</p>
            </div>

            <div class="service-card" data-aos="zoom-in" data-aos-delay="300">
                <div class="service-icon" style="background: linear-gradient(135deg, #FFD500, #FF6B35);">
                    <span style="font-size: 2rem; font-weight: 700;">4</span>
                </div>
                <h3>Finishing</h3>
                <p>Testing menyeluruh, dokumentasi lengkap, dan training penggunaan untuk kepuasan maksimal.</p>
            </div>
        </div>
    </section>

    <!-- CTA SECTION -->
    <section class="hero" style="padding: 60px 2rem;">
        <div class="hero-content">
            <h2 style="font-size: 2.2rem; margin-bottom: 1rem;">Butuh Layanan Instalasi Listrik?</h2>
            <p style="margin-bottom: 2rem;">Pilih layanan yang sesuai kebutuhan Anda dan hubungi kami untuk mendapatkan penawaran terbaik.</p>
            <a href="contact.php" class="btn-primary">Hubungi Kami</a>
            <a href="https://wa.me/6287805587738?text=Assalamu%27alaikum%20Berkah%20Listrik%20Mandiri.%20Saya%20ingin%20mengetahui%20lebih%20lanjut%20tentang%20layanan%20instalasi%20listrik%20Anda.%20Bisa%20kah%20kami%20berbicara%20lebih%20lanjut%3F" class="btn-secondary" target="_blank"><i class="fab fa-whatsapp"></i> Chat WhatsApp</a>
        </div>
    </section>

<?php include 'includes/footer.php'; ?>
