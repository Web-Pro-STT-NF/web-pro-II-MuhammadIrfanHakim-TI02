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
          <h1>Praktikum 4</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            <li class="breadcrumb-item active">Praktikum 4</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Lingkaran -->
  <!-- Main content -->
  <!-- Default box -->
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Menghitung Lingkaran</h3>

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
      echo "NILAI PHI = " . Lingkaran::PHI;
      $ling1 = new Lingkaran(15);
      $ling2 = new Lingkaran(6);

      echo "<br/><br/>Luas Lingkaran I = " . $ling1->getLuas();
      echo "<br/>Luas Lingkaran II = " . $ling2->getLuas();

      echo "<br/><br/>Keliling Lingkaran I = " . $ling1->getkeliling();
      echo "<br/>Keliling Lingkaran II = " . $ling2->getkeliling();
      ?>

      <?php
      class Lingkaran
      { // buka class
        private $jari;
        const PHI = 3.14;
        function __construct($r)
        {
          $this->jari = $r;
        }
        function getLuas()
        {
          return self::PHI * $this->jari * $this->jari;
        }
        function getKeliling()
        {
          return 2 * self::PHI * $this->jari;
        }
      } // tutup class

      ?>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->

  <!-- Persegi -->
  <!-- Main content -->
  <!-- Default box -->
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Menghitung Persegi Panjang</h3>

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
      $pp1 = new persegiPanjang(10, 14);
      $pp2 = new persegiPanjang(15, 8);

      echo "<br/><br/>Luas persegi Panjang I = " . $pp1->getluas();
      echo "<br/>Luas persegi Panjang II = " . $pp2->getluas();

      echo "<br/><br/>keliling persegi Panjang I = " . $pp1->getkeliling();
      echo "<br/>keliling persegi Panjang II = " . $pp2->getkeliling();
      ?>

      <?php
      class persegiPanjang
      {
        private $panjang;
        private $lebar;
        function __construct($p, $l)
        {
          $this->panjang = $p;
          $this->lebar = $l;
        }
        function getluas()
        {
          return $this->panjang * $this->lebar;
        }
        function getkeliling()
        {
          return 2 * ($this->panjang + $this->lebar);
        }
      }
      ?>


    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->

  <!-- Form Mahasiswa -->
  <!-- Main content -->
  <!-- Default box -->
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Form Nilai Mahasiswa</h3>

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
      <div class="row bg-light pt-3 fs-6">
        <div class="col-12" id="tengah">Sistem Penilaian</div>
      </div>
      <div class="row fs-4">
        <div class="col-12" id="tengah">Form Nilai Siswa
          <hr>
        </div>
      </div>
      <div class="row pt-3">
        <div class="col-12">
          <form method="POST" action="">
            <div class="form-group row ">
              <label for="nim" class="col-4 col-form-label">NIM</label>
              <div class="col-8">
                <input id="nim" name="nim" placeholder="Isi NIM anda" type="text" class="form-control">
              </div>
            </div>
            <div class="form-group row pt-3">
              <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label>
              <div class="col-8">
                <select id="matkul" name="matkul" class="custom-select">
                  <option value="Jaringan Komputer">Jaringan komputer</option>
                  <option value="Basis Data">Basis Data</option>
                  <option value="Pemrograman Web II">Pemrograman Web II</option>
                  <option value="PPKN">PPKN</option>
                  <option value="Bahasa inggris">Bahasa inggris</option>
                  <option value="Stastik & Probabilitas">Stastik & probabilitas</option>
                  <option value="Komunikasi Efektif">Komunikasi Efektif</option>
                  <option value="UX & UX">UI & UX</option>
                </select>
              </div>
            </div>
            <div class="form-group row ">
              <label for="nilai" class="col-4 col-form-label">Nilai</label>
              <div class="col-8">
                <input id="nilai" name="nilai" placeholder="Nilai" type="text" class="form-control">
              </div>
            </div>
            <div class="form-group row pt-3 pb-3">
              <div class="offset-4 col-8">
                <button name="proses" type="submit" class="btn btn-success">Simpan</button>
              </div>
            </div>
          </form>
        </div>
      </div><br>

      <div class="row">
        <hr>
      </div>
      <div class="row ms-3">

        <?php
        if (isset($_POST['proses'])) {
          $proses = $_POST['proses'];
          $nim = $_POST['nim'];
          $matkul = $_POST['matkul'];
          $nilai = $_POST['nilai'];
          $nilai_mahasiswa = new NilaiMahasiswa($nim, $matkul, $nilai);
          echo "NIM : " . $nim;
          echo "<br>Nama Mata Kuliah : " . $matkul;
          echo "<br>Nilai : " . $nilai;

          $hasil_ujian = $nilai_mahasiswa->nilai($nilai);
          echo "<br>Hasil Ujian : $hasil_ujian <br>";

          $hasil_grade = $nilai_mahasiswa->grade($nilai);
          echo "Grade : $hasil_grade";
        }
        ?>

        <?php
        class NilaiMahasiswa
        {
          var $nim;
          var $matakuliah;
          var $nilai;

          function __construct($nim, $matakuliah, $nilai)
          {
            $this->nim = $nim;
            $this->matkul = $matakuliah;
            $this->nilai = $nilai;
          }
          function nilai($nilai)
          {
            if ($nilai >= 85) {
              return "A";
            } elseif ($nilai >= 70) {
              return "B";
            } elseif ($nilai >= 56) {
              return "C";
            } elseif ($nilai >= 36) {
              return "D";
            } elseif ($nilai >= 0) {
              return "E";
            } else {
              return "I";
            }
          }

          function grade($nilai)
          {
            if ($nilai > 55) {
              return "LULUS";
            } else {
              return "TIDAK LULUS";
            }
          }
        }
        ?>
      </div>
      <div class="row">
        <?php
        if (isset($_POST['proses'])) {
          echo '<hr class="mt-5 ms-0";>';
        }
        ?>
      </div>
    </div>
    <!-- /.card-body -->
  </div>

  <!-- Daftar Mahasiswa -->
  <!-- /.card -->
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Daftar Mahasiswa</h3>

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
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">
            <a class="navbar-brand" href="#">WEB02</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
              <ul class="navbar-nav">
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Review Link
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                  </ul>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    PHP 5 OOP
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                  </ul>
                </li>
              </ul>
              <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="SUBMIT" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">SUBMIT</button>
              </form>
            </div>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
            </ul>
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              PHP 5 OOP
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </div>
        </nav>

        <div class="row mt-2">
          <div class="col-5">
            <b>Show</b>
            <div class="btn-group">
              <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">10
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">1</a></li>
                <li><a class="dropdown-item" href="#">2</a></li>
                <li><a class="dropdown-item" href="#">3</a></li>
                <li><a class="dropdown-item" href="#">4</a></li>
                <li><a class="dropdown-item" href="#">5</a></li>
              </ul>

            </div>
            <b class="ms-2">Entries</b>
          </div>
        </div>

        <div class="container">
          <table class="table table-bordered mt-4 text-center">
            <thead>
              <tr>
                <th scope="col">NO</th>
                <th scope="col">NIM</th>
                <th scope="col">NAMA</th>
                <th scope="col">PRODI</th>
                <th scope="col">TAHUN ANGKATAN</th>
                <th scope="col">IPK</th>
                <th scope="col">PREDIKAT</th>
                <th scope="col">CHANGE</th>
              </tr>
            </thead>

            <tbody>
              <?php
              $mhs1 = new Mahasiswa("01102210", "Ferdi Nugroho", 2021, "TI", 1.96, "Predikat");
              $mhs2 = new Mahasiswa("01102211", "Ghina Sholiha", 2021, "SI", 3.4, "Predikat");
              $mhs3 = new Mahasiswa("01102212", "Muhammad Ridwan", 2021, "TI", 2.9, "Predikat");
              $mhs4 = new Mahasiswa("01102213", "Sintya Maharani", 2021, "SI", 3.2, "Predikat");
              $mhs5 = new Mahasiswa("01102214", "Asep Firmansyah", 2021, "TI", 4.0, "Predikat");
              $nilai = [$mhs1, $mhs2, $mhs3, $mhs4, $mhs5];

              $nomor = 1;

              foreach ($nilai as $mahasiswa) {
                echo '<tr><td>' . $nomor . '</td>';
                echo '<td>' . $mahasiswa->nim . '</td>';
                echo '<td>' . $mahasiswa->nama . '</td>';
                echo '<td>' . $mahasiswa->prodi . '</td>';
                echo '<td>' . $mahasiswa->tahun_angkatan . '</td>';
                echo '<td>' . $mahasiswa->ipk . '</td>';
                echo '<td>' . $mahasiswa->predikat_ipk() . '</td>';
                echo '<td> <a><i class="bi bi-eye-fill"></i> <i class="bi bi-pencil-square"></i></a></td>';
                $nomor++;
              }
              ?>

              <?php
              class Mahasiswa
              {
                var $nim;
                var $nama;
                var $thn_angkatan;
                var $prodi;
                var $ipk;

                function __construct($nim, $nama, $thn_angkatan, $prodi, $ipk)
                {
                  $this->nim = $nim;
                  $this->nama = $nama;
                  $this->tahun_angkatan = $thn_angkatan;
                  $this->prodi = $prodi;
                  $this->ipk = $ipk;
                }
                function predikat_ipk()
                {
                  if ($this->ipk < 2.0)
                    return "cukup";
                  elseif ($this->ipk >= 2.0 && $this->ipk < 3.0)
                    return "Baik";
                  elseif ($this->ipk >= 3.0 && $this->ipk < 3.75)
                    return "Memuaskan";
                  elseif ($this->ipk >= 3.75 && $this->ipk <= 4.0)
                    return "Cum laude";
                }
              }
              ?>
            </tbody>
          </table>


          <div class="row mt-4">
            <div class="col-4">
              <B>Halaman 1 dari 2 halaman</B>
            </div>
            <div class="col-8 justify-content-end d-flex">
              <nav aria-label="Page navigation example">
                <ul class="pagination">
                  <li class="page-item"><a class="page-link" href="#">
                      <<< /a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">>></a></li>
                </ul>
            </div>
          </div>

          <div class="row mt-4">
            <h6><b>Lab Pemrograman Web II</b></h6>
            <p>Dosen : Sirojul Munir S.Si,M.Kom <br>
              STT-NF-Kampus B </p>
          </div>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
      <?php
      include_once 'footer.php'
      ?>