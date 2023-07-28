<?php
require_once 'data_model.php';

class Controller {
    private $dataModel;

    public function __construct() {
        $this->dataModel = new DataModel();
    }

    // Handle form submission for creating new data
    public function handleFormSubmission() {
        if (isset($_POST['submit'])) {
            $idPembelian = $_POST['idPembelian'];
            $jumlahPembelian = $_POST['jumlahPembelian'];
            $hargaBeli = $_POST['hargaBeli'];
            $idPengguna = $_POST['idPengguna'];

            // Call the createData method of DataModel to store the new data
            $this->dataModel->createData($idPembelian, $jumlahPembelian, $hargaBeli, $idPengguna);
        }
    }

    // Handle deletion of data
    public function handleDataDeletion() {
        if (isset($_GET['delete'])) {
            $indexToDelete = $_GET['delete'];

            // Call the deleteData method of DataModel to remove the selected data
            $this->dataModel->deleteData($indexToDelete);
        }
    }

    // Render the HTML page
    public function renderPage() {
        // Get all data from the DataModel
        $pembelian = $this->dataModel->getAllData();

        // Include the HTML code to display the page
        include 'index.html';
    }
}

// Create an instance of the Controller class and perform the necessary actions
$controller = new Controller();
$controller->handleFormSubmission();
$controller->handleDataDeletion();
$controller->renderPage();
?>
