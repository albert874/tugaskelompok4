<?php

$penjualan = array(
    array(
        'IdPenjualan' => 'PNL01',
        'JumlahPenjualan' => 4,
        'HargaJual' => 'Rp20.000.000,00',
        'IdPengguna' => 'P001'
    ),
    array(
        'IdPenjualan' => 'PNL02',
        'JumlahPenjualan' => 3,
        'HargaJual' => 'Rp18.000.000,00',
        'IdPengguna' => 'P001'
    ),
    array(
        'IdPenjualan' => 'PNL03',
        'JumlahPenjualan' => 2,
        'HargaJual' => 'Rp10.000.000,00',
        'IdPengguna' => 'P002'
    ),
    array(
        'IdPenjualan' => 'PNL04',
        'JumlahPenjualan' => 1,
        'HargaJual' => 'Rp14.000.000,00',
        'IdPengguna' => 'P002'
    ),
    array(
        'IdPenjualan' => 'PNL05',
        'JumlahPenjualan' => 4,
        'HargaJual' => 'Rp20.000.000,00',
        'IdPengguna' => 'P003'
    )
);

?>

<!DOCTYPE html>
<html>

<head>
    <title>Data Penjualan</title>
</head>

<body>
    <h1>Data Penjualan</h1>
    <table border="1">
        <tr>
            <th>ID Penjualan</th>
            <th>Jumlah Penjualan</th>
            <th>Harga Jual</th>
            <th>ID Pengguna</th>
        </tr>
        <?php foreach ($penjualan as $item) : ?>
            <tr>
                <td><?php echo $item['IdPenjualan']; ?></td>
                <td><?php echo $item['JumlahPenjualan']; ?></td>
                <td><?php echo $item['HargaJual']; ?></td>
                <td><?php echo $item['IdPengguna']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>
