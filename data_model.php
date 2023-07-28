<?php
class DataModel {
    private $pembelian = array();

    // Create new data
    public function createData($idPembelian, $jumlahPembelian, $hargaBeli, $idPengguna) {
        $this->pembelian[] = array(
            "IdPembelian" => $idPembelian,
            "JumlahPembelian" => $jumlahPembelian,
            "HargaBeli" => $hargaBeli,
            "IdPengguna" => $idPengguna
        );
    }

    // Read all data
    public function getAllData() {
        return $this->pembelian;
    }

    // Delete data
    public function deleteData($indexToDelete) {
        if (array_key_exists($indexToDelete, $this->pembelian)) {
            unset($this->pembelian[$indexToDelete]);
        }
    }
}
?>
