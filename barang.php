<?php

$barang = array(
    array("IdBarang" => "BRG01", "NamaBarang" => "Laptop01", "Keterangan" => "Merah", "Satuan" => "Rp5.000.000,00", "Stock" => 40),
    array("IdBarang" => "BRG02", "NamaBarang" => "Laptop02", "Keterangan" => "Biru", "Satuan" => "Rp6.000.000,00", "Stock" => 30),
    array("IdBarang" => "BRG03", "NamaBarang" => "Laptop03", "Keterangan" => "Hijau", "Satuan" => "Rp7.000.000,00", "Stock" => 30),
    array("IdBarang" => "BRG04", "NamaBarang" => "Laptop04", "Keterangan" => "Pink", "Satuan" => "Rp8.000.000,00", "Stock" => 50),
    array("IdBarang" => "BRG05", "NamaBarang" => "Laptop05", "Keterangan" => "Hitam", "Satuan" => "Rp9.000.000,00", "Stock" => 50),
    array("IdBarang" => "BRG06", "NamaBarang" => "Laptop06", "Keterangan" => "Putih", "Satuan" => "Rp10.000.000,00", "Stock" => 80),
    array("IdBarang" => "BRG07", "NamaBarang" => "Laptop07", "Keterangan" => "Silver", "Satuan" => "Rp11.000.000,00", "Stock" => 20),
    array("IdBarang" => "BRG08", "NamaBarang" => "Laptop08", "Keterangan" => "Gold", "Satuan" => "Rp12.000.000,00", "Stock" => 40),
    array("IdBarang" => "BRG09", "NamaBarang" => "Laptop09", "Keterangan" => "Coklat", "Satuan" => "Rp13.000.000,00", "Stock" => 30),
    array("IdBarang" => "BRG10", "NamaBarang" => "Laptop10", "Keterangan" => "Kuning", "Satuan" => "Rp14.000.000,00", "Stock" => 70)
);

// Menampilkan tabel
echo "<table border='1'>
        <tr>
            <th>IdBarang</th>
            <th>NamaBarang</th>
            <th>Keterangan</th>
            <th>Satuan</th>
            <th>Stock</th>
        </tr>";

foreach ($barang as $item) {
    echo "<tr>
            <td>{$item['IdBarang']}</td>
            <td>{$item['NamaBarang']}</td>
            <td>{$item['Keterangan']}</td>
            <td>{$item['Satuan']}</td>
            <td>{$item['Stock']}</td>
        </tr>";
}

echo "</table>";

?>
