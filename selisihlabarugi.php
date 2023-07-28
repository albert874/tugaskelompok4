<?php
$barang = array(
    array("IdBarang" => "BRG01", "NamaBarang" => "Laptop01", "Keterangan" => "Merah", "Satuan" => "Rp5.000.000,00", "Stock" => 40, "HargaBeli" => 4000000, "HargaJual" => 6000000),
    array("IdBarang" => "BRG02", "NamaBarang" => "Laptop02", "Keterangan" => "Biru", "Satuan" => "Rp6.000.000,00", "Stock" => 30, "HargaBeli" => 4500000, "HargaJual" => 7000000),
    // Add more items here with their respective HargaBeli and HargaJual
);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Laporan Rugi Laba</title>
</head>
<body>
    <h1>Laporan Rugi Laba</h1>
    <table border="1">
        <tr>
            <th>ID Barang</th>
            <th>Nama Barang</th>
            <th>Harga Beli</th>
            <th>Harga Jual</th>
            <th>Satuan</th>
            <th>Stock</th>
            <th>Total Harga Beli</th>
            <th>Total Harga Jual</th>
            <th>Profit / Loss</th>
        </tr>

        <?php
        // Loop to calculate and display data
        foreach ($barang as $item) {
            $totalHargaBeli = $item['HargaBeli'] * $item['Stock'];
            $totalHargaJual = $item['HargaJual'] * $item['Stock'];
            $profitLoss = $totalHargaJual - $totalHargaBeli;

            echo "<tr>";
            echo "<td>".$item['IdBarang']."</td>";
            echo "<td>".$item['NamaBarang']."</td>";
            echo "<td>".$item['HargaBeli']."</td>";
            echo "<td>".$item['HargaJual']."</td>";
            echo "<td>".$item['Satuan']."</td>";
            echo "<td>".$item['Stock']."</td>";
            echo "<td>".$totalHargaBeli."</td>";
            echo "<td>".$totalHargaJual."</td>";
            echo "<td>".$profitLoss."</td>";
            echo "</tr>";
        }
        ?>

    </table>
</body>
</html>
