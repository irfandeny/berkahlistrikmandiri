<?php
/**
 * File Koneksi Database
 * Untuk pengembangan lebih lanjut aplikasi Berkah Listrik Mandiri
 * 
 * Petunjuk setup:
 * 1. Buat database baru di phpMyAdmin
 * 2. Jalankan query SQL di bawah untuk membuat tabel
 * 3. Update kredensial database di bawah
 */

// Konfigurasi Database
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'berkah_listrik_mandiri');

// Koneksi ke database
try {
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    $conn->set_charset("utf8");

    if ($conn->connect_error) {
        throw new Exception("Connection Error: " . $conn->connect_error);
    }
    
} catch (Exception $e) {
    die("Gagal terhubung ke database: " . $e->getMessage());
}

/**
 * SQL QUERY UNTUK MEMBUAT TABEL
 * 
 * -- Tabel untuk menyimpan pesan kontak
 * CREATE TABLE IF NOT EXISTS pesan_kontak (
 *     id INT PRIMARY KEY AUTO_INCREMENT,
 *     nama VARCHAR(100) NOT NULL,
 *     email VARCHAR(100) NOT NULL,
 *     telepon VARCHAR(20),
 *     subjek VARCHAR(200) NOT NULL,
 *     pesan TEXT NOT NULL,
 *     status ENUM('belum dibaca', 'dibaca', 'direspon') DEFAULT 'belum dibaca',
 *     tanggal TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
 *     INDEX idx_email (email),
 *     INDEX idx_tanggal (tanggal)
 * );
 * 
 * -- Tabel untuk menyimpan testimoni
 * CREATE TABLE IF NOT EXISTS testimoni (
 *     id INT PRIMARY KEY AUTO_INCREMENT,
 *     nama VARCHAR(100) NOT NULL,
 *     kota VARCHAR(100),
 *     rating INT CHECK(rating >= 1 AND rating <= 5),
 *     pesan TEXT NOT NULL,
 *     status ENUM('menunggu', 'disetujui', 'ditolak') DEFAULT 'menunggu',
 *     tanggal TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
 *     INDEX idx_status (status),
 *     INDEX idx_tanggal (tanggal)
 * );
 * 
 * -- Tabel untuk menyimpan proyek portfolio
 * CREATE TABLE IF NOT EXISTS portfolio (
 *     id INT PRIMARY KEY AUTO_INCREMENT,
 *     judul VARCHAR(200) NOT NULL,
 *     deskripsi TEXT NOT NULL,
 *     lokasi VARCHAR(200),
 *     kategori VARCHAR(50),
 *     tahun INT,
 *     gambar VARCHAR(255),
 *     tanggal TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
 *     INDEX idx_kategori (kategori),
 *     INDEX idx_tahun (tahun)
 * );
 * 
 * -- Tabel untuk admin login
 * CREATE TABLE IF NOT EXISTS admin (
 *     id INT PRIMARY KEY AUTO_INCREMENT,
 *     username VARCHAR(50) UNIQUE NOT NULL,
 *     password VARCHAR(255) NOT NULL,
 *     email VARCHAR(100) NOT NULL,
 *     dibuat TIMESTAMP DEFAULT CURRENT_TIMESTAMP
 * );
 */

?>
