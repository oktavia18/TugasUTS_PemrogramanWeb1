<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Website Dinamis</title>

  <!-- Bootstrap CSS -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <!-- DataTables CSS -->
  <link href="assets/datatables/dataTables.dataTables.css" rel="stylesheet">
</head>

<body>

    <?php include "includes/navbar.php"; ?>


  

  <!-- Main Container -->
  <?php include "konten.php"; ?>

  <style>
        body {
            background-color: #f8f9fa; /* Warna latar belakang lembut */
        }
        .form-container {
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            background-color: #ffffff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Tambah bayangan */
            border-radius: 10px;
        }
        .form-label {
            font-weight: bold;
            color: #495057;
        }
        input[type="email"], input[type="password"] {
            height: 50px; /* Tinggi input */
            border-radius: 8px; /* Sudut melengkung */
            border: 1px solid #ced4da;
            padding: 10px;
        }
        .btn-primary {
            width: 100%; /* Tombol memenuhi lebar */
            height: 50px;
            border-radius: 8px;
            font-size: 18px;
        }
    </style>



</head>
<body>


  <footer class="bg-dark text-white text-center py-3 mt-5">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <h5>Kontak Kami</h5>
          <p>Email: info@example.com</p>
          <p>Telepon: (123) 456-7890</p>
        </div>
        <div class="col-md-4">
          <h5>Ikuti Kami</h5>
          <a href="#" class="text-white me-2"><i class="bi bi-facebook"></i></a>
          <a href="#" class="text-white me-2"><i class="bi bi-twitter"></i></a>
          <a href="#" class="text-white"><i class="bi bi-instagram"></i></a>
        </div>
        <div class="col-md-4">
          <h5>Lokasi</h5>
          <p>Jl. Contoh No.123, Kota Contoh</p>
          <p>Indonesia</p>
        </div>
      </div>
      <div class="text-center mt-3">
        <small>&copy; 2024 Pemrograman Web 1. All rights reserved.</small>
      </div>
    </div>
  </footer>


  <!-- JavaScript -->
  <script src="assets/jquery-3.7.1.js"></script>
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="assets/datatables/dataTables.js"></script>

  <!-- Initialize DataTable -->
  <script>
  // Initialize DataTables when the DOM content is fully loaded
  document.addEventListener('DOMContentLoaded', function() {
    if (document.querySelector("#example")) {
      new DataTable("#example"); // Default zero configuration
    }
  });
  </script>
</body>

</html>