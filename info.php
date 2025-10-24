<?php
/**
 * BERKAH LISTRIK MANDIRI - COMPANY PROFILE WEBSITE
 * 
 * Halaman Informasi Project
 * 
 * Buka file ini di browser untuk melihat struktur project
 */
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info Project - Berkah Listrik Mandiri</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            padding: 20px;
            color: #333;
        }

        .container {
            max-width: 1000px;
            margin: 0 auto;
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
        }

        .header {
            background: linear-gradient(135deg, #FFD500 0%, #FF6B35 100%);
            color: white;
            padding: 40px 20px;
            text-align: center;
        }

        .header h1 {
            font-size: 2.5rem;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }

        .header p {
            font-size: 1.1rem;
            opacity: 0.9;
        }

        .content {
            padding: 40px;
        }

        .section {
            margin-bottom: 40px;
        }

        .section h2 {
            color: #FFD500;
            font-size: 1.8rem;
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 2px solid #FFD500;
        }

        .info-box {
            background: #f8f9fa;
            padding: 20px;
            border-left: 4px solid #FFD500;
            margin-bottom: 15px;
            border-radius: 5px;
        }

        .info-box h3 {
            color: #333;
            margin-bottom: 10px;
            font-size: 1.1rem;
        }

        .info-box p {
            color: #666;
            line-height: 1.6;
        }

        .code-block {
            background: #2d2d2d;
            color: #f8f8f2;
            padding: 15px;
            border-radius: 5px;
            overflow-x: auto;
            font-family: 'Courier New', monospace;
            font-size: 0.9rem;
            margin: 10px 0;
        }

        .file-list {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 15px;
            margin: 20px 0;
        }

        .file-item {
            background: #f0f0f0;
            padding: 15px;
            border-radius: 8px;
            border-left: 4px solid #667eea;
        }

        .file-item i {
            color: #667eea;
            margin-right: 10px;
        }

        .file-item strong {
            color: #333;
            display: block;
            margin-bottom: 5px;
        }

        .file-item small {
            color: #666;
        }

        .feature-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 15px;
            margin: 20px 0;
        }

        .feature-card {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
        }

        .feature-card i {
            font-size: 2rem;
            margin-bottom: 10px;
        }

        .cta-buttons {
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
            margin-top: 30px;
            justify-content: center;
        }

        .btn {
            display: inline-block;
            padding: 15px 30px;
            border: none;
            border-radius: 8px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .btn-primary {
            background: linear-gradient(135deg, #FFD500 0%, #FF6B35 100%);
            color: white;
        }

        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(255, 107, 53, 0.3);
        }

        .btn-secondary {
            background: white;
            color: #667eea;
            border: 2px solid #667eea;
        }

        .btn-secondary:hover {
            background: #667eea;
            color: white;
        }

        .checklist {
            list-style: none;
        }

        .checklist li {
            padding: 10px 0;
            border-bottom: 1px solid #eee;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .checklist i {
            color: #2ecc71;
            font-weight: bold;
        }

        .stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            gap: 20px;
            margin: 20px 0;
        }

        .stat-box {
            text-align: center;
            padding: 20px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border-radius: 10px;
        }

        .stat-number {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 5px;
        }

        .stat-label {
            font-size: 0.9rem;
            opacity: 0.9;
        }

        .footer {
            background: #2d2d2d;
            color: white;
            text-align: center;
            padding: 20px;
            font-size: 0.9rem;
        }

        @media (max-width: 768px) {
            .header h1 {
                font-size: 1.8rem;
            }

            .content {
                padding: 20px;
            }

            .cta-buttons {
                flex-direction: column;
            }

            .btn {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- HEADER -->
        <div class="header">
            <h1>
                <i class="fas fa-bolt"></i>
                Berkah Listrik Mandiri
            </h1>
            <p>Company Profile Website - Project Submission</p>
        </div>

        <!-- CONTENT -->
        <div class="content">
            <!-- QUICK START -->
            <div class="section">
                <h2><i class="fas fa-rocket"></i> Quick Start</h2>
                
                <div class="info-box">
                    <h3>🌐 Buka Website</h3>
                    <p>Klik tombol di bawah untuk membuka website yang sudah jadi:</p>
                </div>

                <div class="cta-buttons">
                    <a href="index.php" class="btn btn-primary">
                        <i class="fas fa-home"></i> Buka Website Sekarang
                    </a>
                    <a href="README.md" class="btn btn-secondary" download>
                        <i class="fas fa-book"></i> Download README
                    </a>
                </div>
            </div>

            <!-- PROJECT OVERVIEW -->
            <div class="section">
                <h2><i class="fas fa-info-circle"></i> Project Overview</h2>
                
                <div class="stats">
                    <div class="stat-box">
                        <div class="stat-number">5</div>
                        <div class="stat-label">Halaman Utama</div>
                    </div>
                    <div class="stat-box">
                        <div class="stat-number">2,850+</div>
                        <div class="stat-label">Lines of Code</div>
                    </div>
                    <div class="stat-box">
                        <div class="stat-number">20+</div>
                        <div class="stat-label">Fitur Interaktif</div>
                    </div>
                    <div class="stat-box">
                        <div class="stat-number">100%</div>
                        <div class="stat-label">Responsive</div>
                    </div>
                </div>

                <div class="info-box">
                    <h3>Deskripsi</h3>
                    <p>
                        Website company profile profesional untuk jasa instalasi listrik "Berkah Listrik Mandiri" 
                        yang mengimplementasikan HTML5, CSS3, JavaScript/jQuery, dan PHP dengan teknologi modern 
                        dan best practices.
                    </p>
                </div>
            </div>

            <!-- HALAMAN TERSEDIA -->
            <div class="section">
                <h2><i class="fas fa-file"></i> Halaman Tersedia</h2>
                
                <div class="file-list">
                    <div class="file-item">
                        <i class="fas fa-home"></i>
                        <strong><a href="index.php" style="color: #667eea; text-decoration: none;">Beranda (Home)</a></strong>
                        <small>Hero section, highlight layanan, statistik, testimoni</small>
                    </div>

                    <div class="file-item">
                        <i class="fas fa-users"></i>
                        <strong><a href="about.php" style="color: #667eea; text-decoration: none;">Tentang Kami</a></strong>
                        <small>Profil perusahaan, visi, misi, tim, sertifikasi</small>
                    </div>

                    <div class="file-item">
                        <i class="fas fa-bolt"></i>
                        <strong><a href="services.php" style="color: #667eea; text-decoration: none;">Layanan</a></strong>
                        <small>Daftar 5+ layanan dengan detail dan estimasi harga</small>
                    </div>

                    <div class="file-item">
                        <i class="fas fa-image"></i>
                        <strong><a href="portfolio.php" style="color: #667eea; text-decoration: none;">Portfolio</a></strong>
                        <small>Galeri proyek, filter kategori, case studies</small>
                    </div>

                    <div class="file-item">
                        <i class="fas fa-phone"></i>
                        <strong><a href="contact.php" style="color: #667eea; text-decoration: none;">Kontak</a></strong>
                        <small>Form kontak, info lengkap, FAQ, Google Maps</small>
                    </div>
                </div>
            </div>

            <!-- FITUR IMPLEMENTASI -->
            <div class="section">
                <h2><i class="fas fa-star"></i> Fitur Implementasi</h2>
                
                <div class="feature-grid">
                    <div class="feature-card">
                        <i class="fas fa-code"></i>
                        <strong>HTML5 Semantic</strong>
                    </div>

                    <div class="feature-card">
                        <i class="fas fa-palette"></i>
                        <strong>CSS3 Modern</strong>
                    </div>

                    <div class="feature-card">
                        <i class="fas fa-play"></i>
                        <strong>JavaScript/jQuery</strong>
                    </div>

                    <div class="feature-card">
                        <i class="fas fa-server"></i>
                        <strong>PHP Processing</strong>
                    </div>

                    <div class="feature-card">
                        <i class="fas fa-mobile-alt"></i>
                        <strong>Responsive Design</strong>
                    </div>

                    <div class="feature-card">
                        <i class="fas fa-lock"></i>
                        <strong>Security Features</strong>
                    </div>
                </div>

                <h3 style="margin-top: 30px; color: #333;">Checklist Fitur:</h3>
                <ul class="checklist">
                    <li><i class="fas fa-check"></i> Form validasi client & server side</li>
                    <li><i class="fas fa-check"></i> AJAX form submission</li>
                    <li><i class="fas fa-check"></i> Email notification system</li>
                    <li><i class="fas fa-check"></i> Responsive hamburger menu</li>
                    <li><i class="fas fa-check"></i> Scroll animations (AOS)</li>
                    <li><i class="fas fa-check"></i> Counter animations</li>
                    <li><i class="fas fa-check"></i> Portfolio filter</li>
                    <li><i class="fas fa-check"></i> FAQ accordion</li>
                    <li><i class="fas fa-check"></i> Scroll-to-top button</li>
                    <li><i class="fas fa-check"></i> Google Maps embed</li>
                    <li><i class="fas fa-check"></i> WhatsApp integration</li>
                    <li><i class="fas fa-check"></i> Dynamic navigation active link</li>
                    <li><i class="fas fa-check"></i> Lazy loading images</li>
                    <li><i class="fas fa-check"></i> SEO optimization</li>
                    <li><i class="fas fa-check"></i> Accessibility features</li>
                </ul>
            </div>

            <!-- STRUKTUR FILE -->
            <div class="section">
                <h2><i class="fas fa-folder"></i> Struktur File</h2>
                
                <div class="code-block">
berkah-listrik-mandiri/
├── index.php                 (Beranda)
├── about.php                 (Tentang Kami)
├── services.php              (Layanan)
├── portfolio.php             (Portfolio)
├── contact.php               (Kontak)
├── process_contact.php       (PHP Form Processing)
├── .htaccess                 (URL Rewriting)
│
├── includes/
│   ├── header.php            (Navigation & Meta)
│   └── footer.php            (Footer Global)
│
├── assets/
│   ├── css/
│   │   └── style.css         (Stylesheet ~ 800 lines)
│   ├── js/
│   │   └── script.js         (JavaScript ~ 300+ lines)
│   └── img/                  (Custom images folder)
│
├── db/
│   └── connect.php           (Database Config)
│
├── README.md                 (Main Documentation)
├── FEATURE_DOCUMENTATION.md  (Fitur Detail)
└── LAPORAN_TUGAS.md         (Laporan untuk Guru)
                </div>
            </div>

            <!-- TEKNOLOGI -->
            <div class="section">
                <h2><i class="fas fa-microchip"></i> Teknologi yang Digunakan</h2>
                
                <div class="feature-grid">
                    <div style="background: #e3f2fd; padding: 20px; border-radius: 10px;">
                        <strong style="color: #1976d2;">HTML5</strong>
                        <p style="color: #666; margin-top: 5px; font-size: 0.9rem;">Semantic structure, forms, accessibility</p>
                    </div>

                    <div style="background: #f3e5f5; padding: 20px; border-radius: 10px;">
                        <strong style="color: #7b1fa2;">CSS3</strong>
                        <p style="color: #666; margin-top: 5px; font-size: 0.9rem;">Flexbox, Grid, Animations, Responsive</p>
                    </div>

                    <div style="background: #fff3e0; padding: 20px; border-radius: 10px;">
                        <strong style="color: #e65100;">JavaScript</strong>
                        <p style="color: #666; margin-top: 5px; font-size: 0.9rem;">DOM manipulation, Events, Validation</p>
                    </div>

                    <div style="background: #e8f5e9; padding: 20px; border-radius: 10px;">
                        <strong style="color: #2e7d32;">jQuery</strong>
                        <p style="color: #666; margin-top: 5px; font-size: 0.9rem;">Selectors, AJAX, Effects</p>
                    </div>

                    <div style="background: #fce4ec; padding: 20px; border-radius: 10px;">
                        <strong style="color: #c2185b;">PHP</strong>
                        <p style="color: #666; margin-top: 5px; font-size: 0.9rem;">Form processing, Email, Validation</p>
                    </div>

                    <div style="background: #f1f8e9; padding: 20px; border-radius: 10px;">
                        <strong style="color: #558b2f;">Libraries</strong>
                        <p style="color: #666; margin-top: 5px; font-size: 0.9rem;">AOS, Font Awesome, Google Fonts</p>
                    </div>
                </div>
            </div>

            <!-- SETUP INSTRUCTIONS -->
            <div class="section">
                <h2><i class="fas fa-terminal"></i> Setup Instructions</h2>
                
                <div class="info-box">
                    <h3>Opsi 1: PHP Built-in Server</h3>
                    <div class="code-block">
cd berkah-listrik-mandiri
php -S localhost:8000
# Akses: http://localhost:8000
                    </div>
                </div>

                <div class="info-box">
                    <h3>Opsi 2: Apache/XAMPP</h3>
                    <p>1. Copy folder ke htdocs (XAMPP) atau public_html (cPanel)</p>
                    <p>2. Buka browser: http://localhost/berkah-listrik-mandiri/</p>
                    <p>3. Atau akses di: http://[domain]/berkah-listrik-mandiri/</p>
                </div>

                <div class="info-box">
                    <h3>Kustomisasi</h3>
                    <ul class="checklist">
                        <li><i class="fas fa-check"></i> Edit nomor WhatsApp di header.php & footer.php</li>
                        <li><i class="fas fa-check"></i> Ubah email di process_contact.php</li>
                        <li><i class="fas fa-check"></i> Sesuaikan warna di style.css (:root)</li>
                        <li><i class="fas fa-check"></i> Tambahkan gambar di assets/img/</li>
                        <li><i class="fas fa-check"></i> Setup database (opsional)</li>
                    </ul>
                </div>
            </div>

            <!-- DOKUMENTASI -->
            <div class="section">
                <h2><i class="fas fa-book"></i> Dokumentasi</h2>
                
                <div class="file-list">
                    <div class="file-item">
                        <i class="fas fa-file-md"></i>
                        <strong>README.md</strong>
                        <small>Setup guide dan panduan penggunaan lengkap</small>
                    </div>

                    <div class="file-item">
                        <i class="fas fa-file-md"></i>
                        <strong>FEATURE_DOCUMENTATION.md</strong>
                        <small>Dokumentasi detail semua fitur HTML, CSS, JS, PHP</small>
                    </div>

                    <div class="file-item">
                        <i class="fas fa-file-md"></i>
                        <strong>LAPORAN_TUGAS.md</strong>
                        <small>Laporan lengkap untuk guru dengan checklist lengkap</small>
                    </div>
                </div>

                <div class="cta-buttons" style="margin-top: 20px;">
                    <a href="README.md" class="btn btn-secondary">
                        <i class="fas fa-download"></i> Download Dokumentasi
                    </a>
                </div>
            </div>

            <!-- INFORMASI DEVELOPER -->
            <div class="section">
                <h2><i class="fas fa-user-circle"></i> Informasi Project</h2>
                
                <div class="info-box">
                    <h3>Kualitas Kode</h3>
                    <ul class="checklist">
                        <li><i class="fas fa-check"></i> Semantic HTML structure</li>
                        <li><i class="fas fa-check"></i> DRY principle (Don't Repeat Yourself)</li>
                        <li><i class="fas fa-check"></i> Clean & well-commented code</li>
                        <li><i class="fas fa-check"></i> Responsive design mobile-first</li>
                        <li><i class="fas fa-check"></i> Security best practices</li>
                    </ul>
                </div>

                <div class="info-box">
                    <h3>Browser Kompatibilitas</h3>
                    <p>✅ Chrome 60+ | ✅ Firefox 55+ | ✅ Safari 11+ | ✅ Edge 79+</p>
                    <p>✅ Mobile Safari iOS 11+ | ✅ Chrome Android 60+</p>
                </div>

                <div class="info-box">
                    <h3>Kontak & Support</h3>
                    <p>📧 Email: [masukkan email Anda]</p>
                    <p>📱 WhatsApp: [masukkan nomor Anda]</p>
                </div>
            </div>

            <!-- CTA -->
            <div class="section" style="text-align: center; background: linear-gradient(135deg, #FFD500 0%, #FF6B35 100%); border-radius: 10px; padding: 40px; color: white;">
                <h2 style="color: white; border: none; margin-bottom: 20px;">Siap Melihat Website?</h2>
                <p style="margin-bottom: 20px; font-size: 1.1rem;">Klik tombol di bawah untuk membuka website lengkap dengan semua halaman dan fitur interaktif.</p>
                <a href="index.php" class="btn" style="background: white; color: #FF6B35; font-size: 1.1rem; padding: 15px 40px;">
                    <i class="fas fa-arrow-right"></i> Buka Website Sekarang
                </a>
            </div>
        </div>

        <!-- FOOTER -->
        <div class="footer">
            <p>🔌 Berkah Listrik Mandiri - Solusi Instalasi Listrik Aman & Profesional</p>
            <p style="margin-top: 10px; opacity: 0.7;">© 2024 | Website Company Profile | Project Tugas Pemrograman WEB C</p>
        </div>
    </div>
</body>
</html>
