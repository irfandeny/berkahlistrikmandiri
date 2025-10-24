<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($pageTitle) ? $pageTitle : "Berkah Listrik Mandiri"; ?> - Solusi Instalasi Listrik</title>
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700;800&family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
    
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- AOS (Animate On Scroll) Library -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo (basename(__DIR__) == 'includes') ? '../assets/css/style.css' : './assets/css/style.css'; ?>">
    
    <style>
        :root {
            --warna-utama: #FFD500;
            --warna-gelap: #333333;
            --warna-sekunder: #1a1a1a;
            --warna-highlight: #FF6B35;
            --warna-success: #2ecc71;
            --warna-danger: #e74c3c;
        }

        .nav-wa {
            border-bottom: none !important;
        }

        .nav-wa:hover {
            border-bottom: none !important;
            color: var(--warna-highlight) !important;
        }
    </style>
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar">
        <div class="nav-container">
            <div class="logo">
                <i class="fas fa-bolt"></i>
                <span>Berkah Listrik</span>
            </div>
            
            <div class="hamburger" id="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
            
            <ul class="nav-menu" id="navMenu">
                <li class="nav-item">
                    <a href="index.php" class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : ''; ?>">Beranda</a>
                </li>
                <li class="nav-item">
                    <a href="about.php" class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'about.php' ? 'active' : ''; ?>">Tentang Kami</a>
                </li>
                <li class="nav-item">
                    <a href="services.php" class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'services.php' ? 'active' : ''; ?>">Layanan</a>
                </li>
                <li class="nav-item">
                    <a href="portfolio.php" class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'portfolio.php' ? 'active' : ''; ?>">Proyek</a>
                </li>
                <li class="nav-item">
                    <a href="contact.php" class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'contact.php' ? 'active' : ''; ?>">Kontak</a>
                </li>
                <li class="nav-item">
                    <a href="https://wa.me/6287805587738?text=Assalamu%27alaikum%20Berkah%20Listrik%20Mandiri.%20Saya%20ingin%20mengetahui%20lebih%20lanjut%20tentang%20layanan%20instalasi%20listrik%20Anda.%20Bisa%20kah%20kami%20berbicara%20lebih%20lanjut%3F" class="nav-link nav-wa" target="_blank">
                        <i class="fab fa-whatsapp"></i> WhatsApp
                    </a>
                </li>
            </ul>
        </div>
    </nav>
