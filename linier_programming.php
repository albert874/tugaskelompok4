<?php

// Data Barang
$barang = array(
    array("IdBarang" => "BRG01", "NamaBarang" => "Laptop01", "Keterangan" => "Merah", "Satuan" => 5000000, "Stock" => 40),
    array("IdBarang" => "BRG02", "NamaBarang" => "Laptop02", "Keterangan" => "Biru", "Satuan" => 6000000, "Stock" => 30),
    array("IdBarang" => "BRG03", "NamaBarang" => "Laptop03", "Keterangan" => "Hijau", "Satuan" => 7000000, "Stock" => 30),
    // Data barang lainnya...
);

// Menghitung Jumlah Keuntungan Berdasarkan Paket Penjualan
function hitungKeuntungan($paket) {
    global $barang;
    $keuntungan = 0;
    foreach ($paket as $idBarang => $jumlah) {
        $keuntungan += $barang[$idBarang]['Satuan'] * $jumlah;
    }
    return $keuntungan;
}

// Inisialisasi variabel untuk menyimpan kombinasi paket dengan keuntungan maksimum
$paketMaksimum = array();
$keuntunganMaksimum = 0;

// Implementasi Linear Programming
// Kombinasi paket penjualan dengan panjang 2 (misalnya, Paket A dan Paket B)
for ($i = 0; $i < count($barang) - 1; $i++) {
    for ($j = $i + 1; $j < count($barang); $j++) {
        $paketA = array($i => 1); // Paket A hanya berisi satu item dari barang ke-i
        $paketB = array($j => 1); // Paket B hanya berisi satu item dari barang ke-j

        // Cek apakah stok barang mencukupi untuk kedua paket
        if ($barang[$i]['Stock'] >= $paketA[$i] && $barang[$j]['Stock'] >= $paketB[$j]) {
            $keuntunganTotal = hitungKeuntungan($paketA) + hitungKeuntungan($paketB);
            if ($keuntunganTotal > $keuntunganMaksimum) {
                $keuntunganMaksimum = $keuntunganTotal;
                $paketMaksimum = array('Paket A' => $paketA, 'Paket B' => $paketB);
            }
        }
    }
}

// Menampilkan hasil kombinasi paket dengan keuntungan maksimum
echo "<h2>Kombinasi Paket Penjualan dengan Keuntungan Maksimum:</h2>";
echo "<ul>";
foreach ($paketMaksimum as $namaPaket => $paket) {
    echo "<li>$namaPaket: ";
    foreach ($paket as $idBarang => $jumlah) {
        echo "{$barang[$idBarang]['NamaBarang']} ({$jumlah} unit) ";
    }
    echo "</li>";
}
echo "</ul>";
echo "<h2>Keuntungan Maksimum: Rp" . number_format($keuntunganMaksimum, 2, ',', '.') . "</h2>";

?>
