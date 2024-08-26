<?php 
  include('koneksi.php');

  // Pengecekan koneksi
  if (!$connection) {
      die("Koneksi database gagal: " . mysqli_connect_error());
  }

  // Mendapatkan ID dengan aman
  $id = isset($_GET['id']) ? intval($_GET['id']) : 0;

  // Menggunakan prepared statement untuk keamanan
  $query = "SELECT * FROM produk WHERE ProdukID = ? LIMIT 1";
  $stmt = mysqli_prepare($connection, $query);
  mysqli_stmt_bind_param($stmt, "i", $id);
  mysqli_stmt_execute($stmt);
  $result = mysqli_stmt_get_result($stmt);

  if ($result && mysqli_num_rows($result) > 0) {
      $row = mysqli_fetch_array($result);
  } else {
      echo "Data tidak ditemukan atau query gagal.";
      exit;
  }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Edit Produk</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              EDIT PRODUK
            </div>
            <div class="card-body">
              <form action="update-produk.php" method="POST">
                <input type="hidden" name="ProdukID" value="<?php echo htmlspecialchars($row['ProdukID']); ?>">
                
                <div class="form-group">
                  <label>NAMA PRODUK</label>
                  <input type="text" name="NamaProduk" value="<?php echo htmlspecialchars($row['NamaProduk']); ?>" placeholder="Masukkan Nama Produk" class="form-control" required>
                </div>

                <div class="form-group">
                  <label>Harga Produk</label>
                  <input type="text" name="Harga" value="<?php echo htmlspecialchars($row['Harga']); ?>" placeholder="Masukkan Harga Produk" class="form-control" required>
                </div>

                <div class="form-group">
                  <label>Stok</label>
                  <textarea class="form-control" name="Stok" placeholder="Masukkan Stok Produk" rows="4" required><?php echo htmlspecialchars($row['Stok']); ?></textarea>
                </div>
                
                <button type="submit" class="btn btn-success">UPDATE</button>
                <button type="reset" class="btn btn-warning">RESET</button>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </body>
</html>