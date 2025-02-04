<?php
// Pastikan metode yang digunakan adalah POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $mobil = $_POST['mobil'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $tanggal = $_POST['tanggal'];
    $durasi = $_POST['durasi'];

    // Periksa apakah semua data telah diisi
    if (empty($mobil) || empty($nama) || empty($email) || empty($tanggal) || empty($durasi)) {
        echo "<script>alert('Harap isi semua kolom sebelum memesan!'); window.history.back();</script>";
        exit();
    }

    // Tampilkan data pemesanan sebagai konfirmasi
    echo "<h2>Pesanan Berhasil!</h2>";
    echo "<p><strong>Mobil:</strong> $mobil</p>";
    echo "<p><strong>Nama:</strong> $nama</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Tanggal Penyewaan:</strong> $tanggal</p>";
    echo "<p><strong>Durasi:</strong> $durasi hari</p>";

    echo "<br><a href='kendaraan.html'>Kembali ke halaman kendaraan</a>";
} else {
    // Jika halaman ini diakses tanpa form, redirect ke halaman utama
    header("Location: kendaraan.html");
    exit();
}
?>
