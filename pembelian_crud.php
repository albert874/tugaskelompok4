<!DOCTYPE html>
<html>
<head>
    <title>CRUD Pembelian</title>
</head>
<body>
    <?php
    // Handle form submission for creating new data
    if (isset($_POST['submit'])) {
        // Simpan data dari form ke dalam array pembelian
        $idPembelian = $_POST['idPembelian'];
        $jumlahPembelian = $_POST['jumlahPembelian'];
        $hargaBeli = $_POST['hargaBeli'];
        $idPengguna = $_POST['idPengguna'];

        // Lakukan validasi data jika diperlukan sebelum disimpan
        // (Misalnya, pastikan data yang diinputkan benar, dll.)

        // Simpan data baru ke dalam array pembelian
        $pembelian[] = array(
            "IdPembelian" => $idPembelian,
            "JumlahPembelian" => $jumlahPembelian,
            "HargaBeli" => $hargaBeli,
            "IdPengguna" => $idPengguna
        );
    }

    // Handle deletion of data
    if (isset($_GET['delete'])) {
        $indexToDelete = $_GET['delete'];
        if (array_key_exists($indexToDelete, $pembelian)) {
            unset($pembelian[$indexToDelete]);
        }
    }
    ?>

    <h1>Data Pembelian</h1>

    <!-- Form untuk menambah data pembelian -->
    <h2>Tambah Data Pembelian</h2>
    <form method="post">
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
        <input type="submit" name="submit" value="Tambah">
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
        // Loop untuk menampilkan data pembelian
        foreach ($pembelian as $index => $data) {
            echo "<tr>";
            echo "<td>".$data['IdPembelian']."</td>";
            echo "<td>".$data['JumlahPembelian']."</td>";
            echo "<td>".$data['HargaBeli']."</td>";
            echo "<td>".$data['IdPengguna']."</td>";
            echo "<td><a href='?delete=".$index."'>Hapus</a></td>";
            echo "</tr>";
        }
        ?>

    </table>
</body>
</html>
