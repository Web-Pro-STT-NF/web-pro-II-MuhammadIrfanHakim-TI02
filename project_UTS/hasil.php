<?php
include_once "header.php";
?>
<?php
include_once "sidebar.php";
?>
<div class="content-wrapper"><br>
    <!-- Content Header (Page header) -->
    <!-- Main content -->
    <section class="content">

        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- Default box -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Hasil BMI anda</h3>

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
                            if (isset($_POST['check'])) {
                                // Input form
                                $tinggi = $_POST['tinggi'] / 100;
                                $berat = $_POST['berat'];
                                $nama = $_POST['nama'];
                                $tmp_lahir = $_POST['tmp_lahir'];
                                $tgl_lahir = $_POST['tgl_lahir'];
                                $email = $_POST['email'];
                                $gender = $_POST['gender'];
                                $nilaibmi = round($berat / ($tinggi * $tinggi), 2);
                                if ($nilaibmi < 18.5) {
                                    $statusbmi = "Kekurangan Bobot";
                                } elseif ($nilaibmi < 23.9) {
                                    $statusbmi = "Sehat";
                                } elseif ($nilaibmi < 26.9) {
                                    $statusbmi = "Kelebihan Bobot";
                                } elseif ($nilaibmi < 29.9) {
                                    $statusbmi = "Obisitas 1";
                                } elseif ($nilaibmi > 30) {
                                    $statusbmi = "Obisitas 2";
                                }
                                $tanggal = date('Y-m-d');
                            ?>
                                <div class="card-header">
                                    <center>
                                        <h3>BMI anda adalah <span style="color:blue"><?php echo $nilaibmi ?></span></h3>
                                    </center>
                                </div>
                                <div class="card-body p-0">

                                    <div class="row d-flex justify-content-center">
                                        <div class="col-lg-2 col-md-6 
                                <?php
                                if ($nilaibmi < 18.5) {
                                    echo "dua";
                                } elseif ($nilaibmi < 23.9) {
                                    echo "satu";
                                } elseif ($nilaibmi < 26.9) {
                                    echo "satu";
                                } elseif ($nilaibmi < 29.9) {
                                    echo "satu";
                                } elseif ($nilaibmi > 30) {
                                    echo "satu";
                                }
                                ?>">
                                            <center><img src="gender/<?php echo $gender ?>-1.png">
                                                <h5>Kekurangan Bobot <br>
                                                    < 18.5</h5>
                                            </center>
                                        </div>
                                        <div class="col-lg-2 col-md-6 
                                <?php
                                if ($nilaibmi < 18.5) {
                                    echo "satu";
                                } elseif ($nilaibmi < 23.9) {
                                    echo "dua";
                                } elseif ($nilaibmi < 26.9) {
                                    echo "satu";
                                } elseif ($nilaibmi < 29.9) {
                                    echo "satu";
                                } elseif ($nilaibmi > 30) {
                                    echo "satu";
                                }
                                ?>">
                                            <center><img src="gender/<?php echo $gender ?>-2.png">
                                                <h5>Sehat <br>18.5 - 23.9</h5>
                                            </center>
                                        </div>
                                        <div class="col-lg-2 col-md-6 
                                <?php
                                if ($nilaibmi < 18.5) {
                                    echo "satu";
                                } elseif ($nilaibmi < 23.9) {
                                    echo "satu";
                                } elseif ($nilaibmi < 26.9) {
                                    echo "dua";
                                } elseif ($nilaibmi < 29.9) {
                                    echo "satu";
                                } elseif ($nilaibmi > 30) {
                                    echo "satu";
                                }
                                ?>">
                                            <center><img src="gender/<?php echo $gender ?>-3.png">
                                                <h5>Kelebihan Bobot <br>24 - 26.9</h5>
                                            </center>
                                        </div>
                                        <div class="col-lg-2 col-md-6 
                                <?php
                                if ($nilaibmi < 18.5) {
                                    echo "satu";
                                } elseif ($nilaibmi < 23.9) {
                                    echo "satu";
                                } elseif ($nilaibmi < 26.9) {
                                    echo "satu";
                                } elseif ($nilaibmi < 29.9) {
                                    echo "dua";
                                } elseif ($nilaibmi > 30) {
                                    echo "satu";
                                }
                                ?>">
                                            <center><img src="gender/<?php echo $gender ?>-4.png">
                                                <h5>Obesitas 1<br>27 - 29.9</h5>
                                            </center>
                                        </div>
                                        <div class="col-lg-2 col-md-6 
                                <?php
                                if ($nilaibmi < 18.5) {
                                    echo "satu";
                                } elseif ($nilaibmi < 23.9) {
                                    echo "satu";
                                } elseif ($nilaibmi < 26.9) {
                                    echo "satu";
                                } elseif ($nilaibmi < 29.9) {
                                    echo "satu";
                                } elseif ($nilaibmi > 30) {
                                    echo "dua";
                                }
                                ?>">
                                            <center><img src="gender/<?php echo $gender ?>-5.png">
                                                <h5>Obesitas 2<br>30 > </h5>
                                            </center>
                                        </div>
                                    </div>
                                <?php } ?>
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
include_once "footer.php";
?>