<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
<script src="bootstrap.bundle.min.js"></script>

    <!-- Fontawesome -->
    <link rel="stylesheet" href="fontawesome/css/font-awesome.min.css">
    <title>Maintanance SPA</title>
</head>
<body>
    <nav class="navbar navbar-light bg-light mb-4">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            Maintanance SPA
          </a>
        </div>
      </nav>
      <div class="container">
        <form method="POST" action="proses.php">
                <div class="mb-3 row">
                    <label for="no_ticket" class="col-sm-2 col-form-label">No Ticket</label>
                    <div class="col-sm-10">
                      <input type="text" name="no_ticket" class="form-control" id="no_ticket" placeholder="ex: INC12345678">
                    </div>
                  </div>
            </div>
            <div class="container">
            <div class="mb-3 row">
                <label for="cluster" class="col-sm-2 col-form-label">Cluster</label>
                <div class="col-sm-10">
                  <input type="text" name="cluster" class="form-control" id="cluster" placeholder="ex: ODC-SPA-FAA">
                </div>
              </div>
            </div>
            <div class="container">
                <div class="mb-3 row">
                  <label for="segment" class="col-sm-2 col-form-label">Segment</label>
                  <div class="col-sm-10">
                    <select id="segment" name="segment" class="form-select">
                        <option selected>Pilih Segment</option>
                        <option value="1">ODP</option>
                        <option value="2">ODC</option>
                        <option value="3">FEEDER</option>
                        <option value="3">DISTRIBUSI</option>
                        <option value="3">PT3</option>
                        <option value="3">PT2</option>
                   
                      </select>
                  </div>
                </div>
              </div>
              <div class="container">
                <div class="mb-3 row">
                  <label for="foto" class="col-sm-2 col-form-label">Evidence</label>
                  <div class="col-sm-10">
                    <div class="mb-3">
                        <label for="foto" class="form-label">Silahkan Upload evidence.</label>
                        <input class="form-control" type="file" name="foto" id="foto" multiple>
                      </div>
                  </div>
                </div>
              </div>
              <div class="container">
                <div class="mb-5 row">
                    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" id="alamat" name="alamat" rows="3"></textarea>
                    </div>
                  </div>
            </div>
            <div class="container">
                <div class="col">
                  <?php
                        if(isset($_GET['ubah'])){

                  ?>
                            <button type="submit" name="aksi" value="edit" class="btn btn-primary">
                                <i class="fa fa-floppy-o" aria-hidden="true"></i>
                                Simpan Perubahan
                            </button>
                <?php
                        } else {       
                ?>
                            <button type="submit" name="aksi" value="add" class="btn btn-primary">
                                <i class="fa fa-floppy-o" aria-hidden="true"></i>
                                Tambahkan
                            </button>
                            <?php
                        }      
                ?>
                <a href="index.php" type="button" class="btn btn-danger">
                    <i class="fa fa-reply" aria-hidden="true"></i>
                    Batal
                </a>
                </div>
            </div>
            </div>
        </form>
 </div>
</body>
</html>