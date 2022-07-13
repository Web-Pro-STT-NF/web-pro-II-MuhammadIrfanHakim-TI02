<?php 
include_once 'header.php';
include_once 'sidebar.php';

?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Menghitung BMI</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Layout</a></li>
              <li class="breadcrumb-item active">Fixed Layout</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Form BMI</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
            
<div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card card-default">
                    <div class="card-header">
                        <h3 class="card-title">Input BMI</h3>
                    </div>
                    <div class="card-body p-0">
                        <div class="bs-stepper">
                            <div class="bs-stepper-header" role="tablist">
                                <!-- your steps here -->
                            </div>
                            <div class="bs-stepper-content">
                                <form action="hasil.php" method="post">
                                    <!-- your steps content here -->
                                    <div id="logins-part" class="content" role="tabpanel" aria-labelledby="logins-part-trigger">
                                        <div class="form-group"><br>
                                            <label>Nama Lengkap</label>
                                            <input type="text" name="nama" class="form-control" placeholder="masukan nama lengkap" required>
                                        </div><br>
                                        <div class="form-group">
                                            <label>Tempat Lahir</label>
                                            <input type="text" class="form-control" name="tmp_lahir" placeholder="masukan tempat lahir" required>
                                        </div><br>
                                        <div class="form-group">
                                            <label>Tanggal Lahir</label>
                                            <input type="date" class="form-control" name="tgl_lahir" required>
                                        </div><br>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" class="form-control" name="email" placeholder="masukan email" required>
                                        </div><br>
                                        <div class="form-group">
                                            <label>Jenis Kelamin</label>
                                            <select name="gender" class="form-control" required>
                                                <option>Pilih</option>
                                                <option value="pria">Pria</option>
                                                <option value="wanita">Wanita</option>
                                            </select>
                                        </div><br>
                                    </div>
                                    <div id="information-part" class="content" role="tabpanel" aria-labelledby="information-part-trigger">
                                        <div class="form-group">
                                            <label>Berat Badan (kg)</label>
                                            <input type="number" name="berat" class="form-control" placeholder="masukan berat badan" required>
                                        </div><br>
                                        <div class="form-group">
                                            <label>Tinggi Badan (cm)</label>
                                            <input type="number" class="form-control" name="tinggi" placeholder="masukan tinggi badan" required>
                                        </div><br>
                                        <input type="submit" value="check" name="check" class="btn btn-primary">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php 
include_once 'footer.php'
?>