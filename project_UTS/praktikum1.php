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
          <h1>Praktikum 1</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            <li class="breadcrumb-item active">Praktikum 1</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Variable Sytem -->
  <!-- Default box -->
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Variable System</h3>

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
      <?php
      //Variable System
      echo "Dokumen root" . $_SERVER["DOCUMENT ROOT"];
      echo "<br/>nama file" . $_SERVER["PHP_SELF"];
      ?>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->

  <!-- Variable User -->
  <!-- Default box -->
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Variable User</h3>

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
      <?php
      //mendefinisikan variable
      $nama = "Muhamammad irfan Hakim";
      $umur = 19;
      $berat = 55.5;
      //Mencetak variable
      echo "Nama :" . $nama;
      echo "<br/>Umur : " . $umur . " Tahun";
      echo "<br/>Berat : " . $berat . " Kg";

      echo "<br/>Hello! $nama apa kabar?";


      ?>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->

  <!-- Variable Konstan-->
  <!-- Default box -->
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Variable Konstan</h3>

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
      <?php
      //Mendefinisikan varible konstan
      define('PHI', 3.14);
      define('DBNAME', 'inventori');
      define('DBSERVER', 'localhost');

      $jari = 14;
      $luas = PHI * $jari * $jari;
      $kel = 2 * PHI * $jari;

      echo 'Luas Lingkaran dengan Jari ' . $jari . ' : ' . $luas;
      echo '<br/>Kelilingnya : ' . $kel;
      ?>
      <hr />
      <?php
      echo 'Nama databasenya : ' . DBNAME;
      echo '<br/>Lokasi databasenya ada di ' . DBSERVER;

      ?>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->

  <!-- Array Siswa-->
  <!-- Default box -->
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Array Siswa</h3>

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

      <?php
      $ns1 = ['id' => 1, 'nim' => '01101', 'uts' => 84, 'uas' => 80, 'tugas' => 78];
      $ns2 = ['id' => 2, 'nim' => '01121', 'uts' => 87, 'uas' => 84, 'tugas' => 69];
      $ns3 = ['id' => 3, 'nim' => '01131', 'uts' => 90, 'uas' => 75, 'tugas' => 81];
      $ns4 = ['id' => 4, 'nim' => '01141', 'uts' => 85, 'uas' => 90, 'tugas' => 80];

      $ar_nilai = [$ns1, $ns2, $ns3, $ns4];
      ?>
      <div class="bg-info p-2 text-dark bg-opacity-50">
        <h3 style="text-align: center;">Daftar Nilai Siswa</h3>
        <table class="table table-success table-striped" border="1" width="100%">
          <thead>
            <tr>
              <th>No</th>
              <th>NIM</th>
              <th>UTS</th>
              <th>UAS</th>
              <th>Tugas</th>
              <th>Nilai Akhir</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $nomor = 1;
            foreach ($ar_nilai as $ns) {
              echo '<tr><td>' . $nomor . '</td>';
              echo '<td>' . $ns['nim'] . '</td>';
              echo '<td>' . $ns['uts'] . '</td>';
              echo '<td>' . $ns['uas'] . '</td>';
              echo '<td>' . $ns['tugas'] . '</td>';
              $nilai_akhir = ($ns['uts'] + $ns['uas'] + $ns['tugas']) / 3;
              echo '<td>' . number_format($nilai_akhir, 2, ',', '.') . '</td>';
              echo '<tr/>';
              $nomor++;
            }
            ?>
          </tbody>
        </table>
      </div>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
  <?php
  include_once 'footer.php';
  ?>