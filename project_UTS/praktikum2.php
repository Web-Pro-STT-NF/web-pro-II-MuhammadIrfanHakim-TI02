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
                    <h1>Praktikum 2</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item active">Praktikum 2</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Bagian Form Nilai -->
    <!-- Main content -->
    <section class="content">

        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- Default box -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Form Nilai</h3>

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
                                    <form method="GET" action="">
                                        <div class="form-group row ">
                                            <label for="nama" class="col-4 col-form-label">Nama Lengkap</label>
                                            <div class="col-8">
                                                <input id="nama" name="nama" placeholder="Nama Lengkap" type="text" class="form-control">
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
                                            <label for="nilai_uts" class="col-4 col-form-label">Nilai UTS</label>
                                            <div class="col-8">
                                                <input id="nilai_uts" name="nilai_uts" placeholder="Nilai UTS" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row pt-3">
                                            <label for="nilai_uas" class="col-4 col-form-label">Nilai UAS</label>
                                            <div class="col-8">
                                                <input id="nilai_uas" name="nilai_uas" placeholder="Nilai_UAS" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row pt-3">
                                            <label for="nilai_tugas" class="col-4 col-form-label">Nilai Tugas / Praktikum</label>
                                            <div class="col-8">
                                                <input id="nilai_tugas" name="nilai_tugas" placeholder="Nilai Tugas" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row pt-3 pb-3">
                                            <div class="offset-4 col-8">
                                                <button name="proses" type="submit" class="btn btn-primary">Simpan</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div><br>

                            <?php
                            $proses = isset($_GET['proses']) ? $_GET['proses'] : "";
                            $nama_siswa = isset($_GET['nama']) ? $_GET['nama'] : "";
                            $mata_kuliah = isset($_GET['matkul']) ? $_GET['matkul'] : "";
                            $nilai_uts = isset($_GET['nilai_uts']) ? $_GET['nilai_uts'] : "";
                            $nilai_uas = isset($_GET['nilai_uas']) ? $_GET['nilai_uas'] : "";
                            $nilai_tugas = isset($_GET['nilai_tugas']) ? $_GET['nilai_tugas'] : "";

                            echo "Proses $proses";
                            echo "<br/>Nama : $nama_siswa";
                            echo "<br/>Mata Kuliah : $mata_kuliah";
                            echo "<br/>Nilai UTS : $nilai_uts";
                            echo "<br/>Nilai UAS : $nilai_uas";
                            echo "<br/>Nilai Tugas : $nilai_tugas";
                            ?>
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

<div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <!-- Bagian Foem Nilai Siswa -->
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- Default box -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Nilai Siswa</h3>

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
                            <div class="row bg-light pt-3 fs-6" id="tengah">
                                <div class="col-12">Sistem Penilaian</div>
                            </div>
                            <div class="row fs-4" id="tengah">
                                <div class="col-12">Form Nilai Siswa
                                    <hr>
                                </div>
                            </div>
                            <div class="row pt-3">
                                <div class="col-12">
                                    <form method="POST" action="">
                                        <div class="form-group row ">
                                            <label for="nama" class="col-4 col-form-label">Nama Lengkap</label>
                                            <div class="col-8">
                                                <input id="nama" name="nama" placeholder="Nama Lengkap" type="text" class="form-control">
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
                                            <label for="nilai_uts" class="col-4 col-form-label">Nilai UTS</label>
                                            <div class="col-8">
                                                <input id="nilai_uts" name="nilai_uts" placeholder="Nilai UTS" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row pt-3">
                                            <label for="nilai_uas" class="col-4 col-form-label">Nilai UAS</label>
                                            <div class="col-8">
                                                <input id="nilai_uas" name="nilai_uas" placeholder="Nilai_UAS" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row pt-3">
                                            <label for="nilai_tugas" class="col-4 col-form-label">Nilai Tugas / Praktikum</label>
                                            <div class="col-8">
                                                <input id="nilai_tugas" name="nilai_tugas" placeholder="Nilai Tugas" type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row pt-3 pb-3">
                                            <div class="offset-4 col-8">
                                                <button name="proses" type="submit" class="btn btn-primary">Simpan</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <hr>
                            <?php
                            if (isset($_POST['proses'])) {
                                $proses = $_POST['proses'];
                                $nama_siswa = $_POST['nama'];
                                $mata_kuliah = $_POST['matkul'];
                                $nilai_uts = $_POST['nilai_uts'];
                                $nilai_uas = $_POST['nilai_uas'];
                                $nilai_tugas = $_POST['nilai_tugas'];

                                echo "Proses $proses";
                                echo "<br/>Nama : $nama_siswa";
                                echo "<br/>Mata Kuliah : $mata_kuliah";
                                echo "<br/>Nilai UTS : $nilai_uts";
                                echo "<br/>Nilai UAS : $nilai_uas";
                                echo "<br/>Nilai Tugas : $nilai_tugas";

                                $hasil_uts = intval($nilai_uts) * 0.3;
                                $hasil_uas = intval($nilai_uas) * 0.35;
                                $hasil_tugas = intval($nilai_tugas) * 0.35;
                                $nilai_akhir = $hasil_uts + $hasil_tugas + $hasil_uas;

                                echo "<br> <p>Nilai Anda : $nilai_akhir</p>";
                                if ($nilai_akhir > 55) {
                                    echo "<h3>LULUS</h3>";
                                } else {
                                    echo "<h3>TIDAK LULUS</h3>";
                                }


                                $nilai_A = $nilai_akhir >= 85;
                                $nilai_B = $nilai_akhir >= 70;
                                $nilai_C = $nilai_akhir >= 56;
                                $nilai_D = $nilai_akhir >= 36;
                                $nilai_E = $nilai_akhir >= 0;
                                if ($nilai_A) {
                                    echo "Grade : A";
                                } elseif ($nilai_B) {
                                    echo "Grade : B";
                                } elseif ($nilai_C) {
                                    echo "Grade : C";
                                } elseif ($nilai_D) {
                                    echo "Grade : D";
                                } elseif ($nilai_E) {
                                    echo "Grade : E";
                                } else {
                                    echo "Grade : I";
                                }


                                switch (true) {
                                    case ($nilai_A):
                                        echo "<br/>Predikat : Sangat Memuaskan";
                                        break;
                                    case ($nilai_B):
                                        echo "<br/>Predikat : Memuaskan";
                                        break;
                                    case ($nilai_C):
                                        echo "<br/>Predikat : Cukup";
                                        break;
                                    case ($nilai_D):
                                        echo "<br/>Predikat : Kurang";
                                        break;
                                    case ($nilai_E):
                                        echo "<br/>Predikat : Sangat Kurang";
                                        break;
                                    default:
                                        echo "<br/>Tidak Ada";
                                }
                            }
                            ?>
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

<div class="content-wrapper">
    <!-- Content Header (Page header) -->


    <!-- Bagian Form Belanja -->
    <!-- Main content -->
    <section class="content">

        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- Default box -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Form Belanja</h3>

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
                            <br>
                            <div class="container card position-relative">
                                <div class="row">
                                    <div class="col-8">
                                        <H4>Belanja Online</H4>
                                        <hr>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <form method="POST" action="">
                                            <div class="form-group row pt-3">
                                                <label for="costumer" class="col-4 col-form-label">Costumer</label>
                                                <div class="col-4">
                                                    <input id="costumer" name="costumer" placeholder="Nama Costumer" type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group row pt-3">
                                                <label class="col-4">Pilih Produk</label>
                                                <div class="col-8">
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input name="produk" id="Produk_0" type="radio" class="custom-control-input" value="TV">
                                                        <label for="Produk_0" class="custom-control-label">TV</label>
                                                    </div>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input name="produk" id="Produk_1" type="radio" class="custom-control-input" value="KULKAS">
                                                        <label for="Produk_1" class="custom-control-label">KULKAS</label>
                                                    </div>
                                                    <div class="custom-control custom-radio custom-control-inline">
                                                        <input name="produk" id="Produk_2" type="radio" class="custom-control-input" value="MESIN CUCI">
                                                        <label for="Produk_2" class="custom-control-label">MESIN CUCI</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group row pt-3">
                                                <label for="Jumlah" class="col-4 col-form-label">Jumlah</label>
                                                <div class="col-4">
                                                    <input id="jumlah" name="jumlah" placeholder="Jumlah" type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group row pt-3 pb-3">
                                                <div class="offset-4 col-8">
                                                    <button name="proses" type="submit" class="btn btn-success">Submit</button>
                                                </div>
                                            </div>
                                        </form>
                                        <div class="row">
                                            <div class="col-8">
                                                <hr>
                                                <?php
                                                if (isset($_POST['proses'])) {
                                                    $costumer = $_POST['costumer'];
                                                    $produk = $_POST['produk'];
                                                    $jumlah = $_POST['jumlah'];

                                                    echo "<br>Nama Costumer : $costumer";
                                                    echo "<br>Produk : $produk";
                                                    echo "<br>Jumlah Beli : $jumlah";

                                                    $kulkas = 3100000 * intval($jumlah);
                                                    $mesincuci = 3800000 * intval($jumlah);
                                                    $TV1 = 4200000 * intval($jumlah);

                                                    switch ($produk) {
                                                        case 'KULKAS':
                                                            echo "<br>" . "Total Belanja : " . number_format($kulkas, 0, ',', '.');
                                                            break;
                                                        case 'TV':
                                                            echo "<br>" . "Total Belanja : " . number_format($TV1, 0, ',', '.');
                                                            break;
                                                        default:
                                                            echo "<br>" . "Total Belanja : " . number_format($mesincuci, 0, ',', '.');
                                                            break;
                                                    }
                                                }

                                                ?>
                                                <div><br>
                                                    <table>
                                                        <tr style="background-color:blue; color:white;">
                                                            <td scope="col">Daftar Harga</td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="row">TV : 4.200.000</td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="row">KULKAS : 3.100.000</td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="row">MESIN CUCI : 3.800.000</td>
                                                        </tr>
                                                        <tr style="background-color:blue; color:white;">
                                                            <td scope="row">Harga Dapat Berubah Setiap Saat</td>
                                                        </tr>
                                                    </table><br>
                                                    <div class="row bg-light" style="text-align: right;">
                                                        <div class="col-12">Develop by @muhammadirfanhakim 2022</div>
                                                    </div>
                                                    <div>

                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>

    </section>
    <!-- /.content -->

    <?php
    include_once 'footer.php';
    ?>