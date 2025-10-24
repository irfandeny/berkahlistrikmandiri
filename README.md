# Berkah Listrik Mandiri Website

Ini adalah website untuk Berkah Listrik Mandiri, sebuah layanan jasa kelistrikan. Website ini dibangun menggunakan teknologi web dasar yang mencakup HTML, CSS, JavaScript, dan PHP.

## Teknologi yang Digunakan

- **HTML** - Struktur website dibangun menggunakan HTML yang terletak di dalam file PHP
- **CSS** - Styling website menggunakan CSS (dapat ditemukan di `assets/css/style.css`)
- **JavaScript** - Interaktivitas website menggunakan JavaScript (dapat ditemukan di `assets/js/script.js`)
- **PHP** - Backend dan logika website menggunakan PHP

> **Catatan**: Website ini menggunakan ekstensi `.php` alih-alih `.html` karena PHP memungkinkan kita untuk:
>
> - Memisahkan komponen website ke dalam file terpisah (seperti header dan footer di folder `includes/`)
> - Menangani form dan logika backend
> - Melakukan koneksi dengan database
> - Menggunakan fitur PHP seperti includes untuk code reusability

## Struktur Folder

```
berkah-listrik-mandiri/
├── assets/
│   ├── css/
│   │   └── style.css
│   ├── img/
│   └── js/
│       └── script.js
├── db/
│   └── connect.php
├── includes/
│   ├── footer.php
│   └── header.php
├── about.php
├── contact.php
├── index.php
├── portfolio.php
├── process_contact.php
└── services.php
```

## Cara Menjalankan Website

### Menggunakan XAMPP:

1. Install XAMPP
2. Copy folder `berkah-listrik-mandiri` ke folder `htdocs` di instalasi XAMPP anda
   - Windows: `C:\xampp\htdocs\`
3. Buka XAMPP Control Panel
4. Start module Apache dan MySQL
5. Buka browser dan akses `http://localhost/berkah-listrik-mandiri`

### Menggunakan Laragon:

1. Install Laragon
2. Copy folder `berkah-listrik-mandiri` ke folder `www` di instalasi Laragon anda
   - Windows: `C:\laragon\www\`
3. Buka Laragon
4. Start All
5. Buka browser dan akses `http://berkah-listrik-mandiri.test`
   (Laragon akan otomatis membuat virtual host)

## Fitur Website

- Halaman Beranda (Home)
- Halaman Tentang Kami (About)
- Halaman Layanan (Services)
- Halaman Portfolio
- Halaman Kontak dengan form yang dapat mengirim pesan
