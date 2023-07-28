<?php

// Data pembelian dalam bentuk array asosiatif
$pembelian = array(
    array("IdPembelian" => "PML01", "JumlahPembelian" => 4, "HargaBeli" => "Rp16.000.000,00", "IdPengguna" => "P001"),
    array("IdPembelian" => "PML02", "JumlahPembelian" => 3, "HargaBeli" => "Rp15.000.000,00", "IdPengguna" => "P001"),
    array("IdPembelian" => "PML03", "JumlahPembelian" => 2, "HargaBeli" => "Rp8.000.000,00", "IdPengguna" => "P002"),
    array("IdPembelian" => "PML04", "JumlahPembelian" => 1, "HargaBeli" => "Rp10.000.000,00", "IdPengguna" => "P002"),
    array("IdPembelian" => "PML05", "JumlahPembelian" => 4, "HargaBeli" => "Rp16.000.000,00", "IdPengguna" => "P003"),
    array("IdPembelian" => "PML06", "JumlahPembelian" => 3, "HargaBeli" => "Rp15.000.000,00", "IdPengguna" => "P003"),
    array("IdPembelian" => "PML07", "JumlahPembelian" => 2, "HargaBeli" => "Rp8.000.000,00", "IdPengguna" => "P004"),
    array("IdPembelian" => "PML08", "JumlahPembelian" => 1, "HargaBeli" => "Rp10.000.000,00", "IdPengguna" => "P004"),
    array("IdPembelian" => "PML09", "JumlahPembelian" => 4, "HargaBeli" => "Rp16.000.000,00", "IdPengguna" => "P005"),
    array("IdPembelian" => "PML10", "JumlahPembelian" => 3, "HargaBeli" => "Rp15.000.000,00", "IdPengguna" => "P005"),
    array("IdPembelian" => "PML11", "JumlahPembelian" => 2, "HargaBeli" => "Rp8.000.000,00", "IdPengguna" => "P006"),
    array("IdPembelian" => "PML12", "JumlahPembelian" => 1, "HargaBeli" => "Rp10.000.000,00", "IdPengguna" => "P006"),
    array("IdPembelian" => "PML13", "JumlahPembelian" => 4, "HargaBeli" => "Rp16.000.000,00", "IdPengguna" => "P007"),
    array("IdPembelian" => "PML14", "JumlahPembelian" => 3, "HargaBeli" => "Rp15.000.000,00", "IdPengguna" => "P007"),
    array("IdPembelian" => "PML15", "JumlahPembelian" => 2, "HargaBeli" => "Rp8.000.000,00", "IdPengguna" => "P008"),
    array("IdPembelian" => "PML16", "JumlahPembelian" => 1, "HargaBeli" => "Rp10.000.000,00", "IdPengguna" => "P008"),
    array("IdPembelian" => "PML17", "JumlahPembelian" => 4, "HargaBeli" => "Rp16.000.000,00", "IdPengguna" => "P009"),
    array("IdPembelian" => "PML18", "JumlahPembelian" => 3, "HargaBeli" => "Rp15.000.000,00", "IdPengguna" => "P009"),
    array("IdPembelian" => "PML19", "JumlahPembelian" => 2, "HargaBeli" => "Rp8.000.000,00", "IdPengguna" => "P010"),
    array("IdPembelian" => "PML20", "JumlahPembelian" => 1, "HargaBeli" => "Rp10.000.000,00", "IdPengguna" => "P010")
);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Pembelian</title>
</head>
<body>

    <h1>Data Pembelian</h1>
    <table border="1">
        <tr>
            <th>ID Pembelian</th>
            <th>Jumlah Pembelian</th>
            <th>Harga Beli</th>
            <th>ID Pengguna</th>
        </tr>

        <?php
        // Loop untuk menampilkan data pembelian
        foreach ($pembelian as $data) {
            echo "<tr>";
            echo "<td>".$data['IdPembelian']."</td>";
            echo "<td>".$data['JumlahPembelian']."</td>";
            echo "<td>".$data['HargaBeli']."</td>";
            echo "<td>".$data['IdPengguna']."</td>";
            echo "</tr>";
        }
        ?>

    </table>
</body>
</html>
<?php
// Inisialisasi atau ambil data pembelian dari session
session_start();
if (!isset($_SESSION['pembelian'])) {
    $_SESSION['pembelian'] = array();
}
$pembelian = $_SESSION['pembelian'];

// Handle form submission for creating new data
if (isset($_POST['submit'])) {
    // ... (kode sebelumnya untuk menambahkan data baru)
}

// Handle deletion of data
if (isset($_GET['delete'])) {
    // ... (kode sebelumnya untuk menghapus data)
}

// Handle form submission for updating data
if (isset($_POST['update'])) {
    $indexToUpdate = $_POST['indexToUpdate'];
    if (array_key_exists($indexToUpdate, $pembelian)) {
        // Update data pada indeks tertentu
        $pembelian[$indexToUpdate]['IdPembelian'] = $_POST['idPembelian'];
        $pembelian[$indexToUpdate]['JumlahPembelian'] = $_POST['jumlahPembelian'];
        $pembelian[$indexToUpdate]['HargaBeli'] = $_POST['hargaBeli'];
        $pembelian[$indexToUpdate]['IdPengguna'] = $_POST['idPengguna'];
    }
}
?>
<!-- Form untuk mengedit data pembelian -->
<h2>Edit Data Pembelian</h2>
<form method="post">
    <input type="hidden" name="indexToUpdate" value="">
    <label>ID Pembelian:</label>
    <input type="text" name="idPembelian" required>
    <br>
    <label>Jumlah Pembelian:</label>
    <input type="number" name="jumlahPembelian" required>
    <br>
    <label>Harga Beli:</label>
    <input type="text" name="hargaBeli" required>
    <br>
    <label>ID Pengguna:</label>
    <input type="text" name="idPengguna" required>
    <br>
    <input type="submit" name="update" value="Update">
</form>
<!-- Tabel untuk menampilkan data pembelian -->
<h2>Daftar Pembelian</h2>
<table border="1">
    <tr>
        <th>ID Pembelian</th>
        <th>Jumlah Pembelian</th>
        <th>Harga Beli</th>
        <th>ID Pengguna</th>
        <th>Aksi</th>
    </tr>

    <?php
    // Loop untuk menampilkan data pembelian dan tautan Edit
    foreach ($pembelian as $index => $data) {
        echo "<tr>";
        echo "<td>".$data['IdPembelian']."</td>";
        echo "<td>".$data['JumlahPembelian']."</td>";
        echo "<td>".$data['HargaBeli']."</td>";
        echo "<td>".$data['IdPengguna']."</td>";
        echo "<td>
            <a href='?delete=".$index."'>Hapus</a> |
            <a href='#' onclick='editData(".$index.")'>Edit</a>
        </td>";
        echo "</tr>";
    }
    ?>

</table>

<!-- Script JavaScript untuk mengisi form edit dengan data yang dipilih -->
<script>
function editData(index) {
    var data = <?php echo json_encode($pembelian); ?>;
    var form = document.querySelector("form");
    form.querySelector("input[name='indexToUpdate']").value = index;
    form.querySelector("input[name='idPembelian']").value = data[index].IdPembelian;
    form.querySelector("input[name='jumlahPembelian']").value = data[index].JumlahPembelian;
    form.querySelector("input[name='hargaBeli']").value = data[index].HargaBeli;
    form.querySelector("input[name='idPengguna']").value = data[index].IdPengguna;
}
</script>

