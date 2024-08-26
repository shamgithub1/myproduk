<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Tambah Produk</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              TAMBAH PRODUK
            </div>
            <div class="card-body">
              <form action="simpan-produk.php" method="POST">
                
                <div class="form-group">
                  <label>NAMA PRODUK</label>
                  <input type="text" name="NamaProduk" placeholder="Masukkan Nama Produk" class="form-control">
                </div>

                <div class="form-group">
                  <label>Harga</label>
                  <input type="text" name="Harga" placeholder="Masukkan Harga Produk" class="form-control">
                </div>

                <div class="form-group">
                  <label>Stok</label>
                  <textarea class="form-control" name="Stok" placeholder="Masukkan Jumlah Stok"></textarea>
                </div>
                
                <button type="submit" class="btn btn-success">SIMPAN</button>
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