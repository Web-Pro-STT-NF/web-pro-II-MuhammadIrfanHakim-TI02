<?php
include_once "header.php";
include_once "sidebar.php";
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Praktikum 5</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            <li class="breadcrumb-item active">Praktikum 5</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <!-- Default box -->
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Data Dispenser</h3>

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
      <div class="text-center">
        <div class="card mt-3 ms-4" style="width: 50rem;">
          <h1 class="card-header">Data Dispenser </h1>
          <div class="card-body">
            <?php
            $pembeli1 = new dispenser("Burhan", "Teh_tarik", 20000);

            echo "Nama : ", $pembeli1->getnama(), "<br/>";
            echo "Membeli : ", $pembeli1->getminum(), "<br/>";

            $pembeli1->setVolume(8000);

            echo "Volume Wadah awal : " . $pembeli1->getVolume() . "<br>";
            echo $pembeli1->teh_tarik() . "<br>";
            echo $pembeli1->nambah() . "<br>";
            echo $pembeli1->nambah_lagi() . "<br>";
            echo "Volume Sisa Dari Wadah Teh tarik : " . $pembeli1->getVolume() . "<br>";
            ?>

            <?php
            class dispenser
            {
              protected $volume;
              protected $hargaSegelas;
              private $volumeGelas;
              public $namaMinuman;

              public function isi($vol)
              {
                $this->volume = $vol;
              }
              public function __construct($pembeli, $namaMinuman)
              {
                $this->pembeli = $pembeli;
                $this->meminum = $namaMinuman;
              }
              public function teh_tarik()
              {
                $this->harga = 20000;
                $this->vol -= 270;
                return "$this->pembeli membeli $this->meminum seharga $this->harga, volume wadah tersisa$this->vol";
              }
              public function nambah()
              {
                $this->harga = 15000;
                $this->vol -= 200;
                return "$this->pembeli membeli $this->meminum seharga $this->harga, volume wadah tersisa$this->vol";
              }
              public function nambah_lagi()
              {
                $this->harga = 17000;
                $this->vol -= 300;
                return "$this->pembeli membeli $this->meminum seharga $this->harga, volume wadah tersisa$this->vol";
              }
              public function getnama()
              {
                return $this->pembeli;
              }
              public function getminum()
              {
                return $this->meminum;
              }
              public function getvolume()
              {
                return $this->vol;
              }
              public function setvolume($volume)
              {
                $this->vol = $volume;
              }
            }
            ?>
          </div>
        </div>
      </div>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
  <!-- Default box -->
  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Account Bank</h3>

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
      <div class="text-center">
        <div class="card mt-3 ms-4" style="width: 50rem;">
          <h1 class="card-header"></h1>
          <div class="card-body">
            <div class="container mt-5">
              <table class="table text-center table-bordered">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>No Account</th>
                    <th>Pemilik</th>
                    <th>jumlah Saldo</th>
                  </tr>
                </thead>

                <tbody>
                  <?php
                  class Account
                  {
                    public $nomor, $saldo;
                    function __construct($no, $saldo)
                    {
                      $this->nomor = $no;
                      $this->saldo = $saldo;
                    }
                    public function deposit($uang)
                    {
                      $this->saldo = ($this->saldo + $uang);
                    }
                    public function withdraw($uang)
                    {
                      $this->saldo = $this->saldo - $uang;
                    }
                    public function cetak()
                    {
                      echo "<br/>No Account : " . $this->nomor;
                      echo "<br/>Jumlah Saldo :" . $this->saldo;
                    }
                  }
                  ?>
                  <?php
                  $ctr1 = new BankAccount('C001', 6000000, 'Ahmad');
                  $ctr2 = new BankAccount('C002', 5350000, 'Budi');
                  $ctr3 = new BankAccount('C003', 2500000, 'Kurniawan');
                  $array1 = [$ctr1, $ctr2, $ctr3];
                  $ctr1->deposit(1000000);
                  $ctr2->transfer($ctr3, 1500000);
                  $ctr1->transfer($ctr2, 500000);
                  $ctr3->withdraw(2500000);
                  $array2 = [$ctr1, $ctr2, $ctr3];
                  $no = 1;
                  foreach ($array1 as $ar1) : ?>
                    <tr>
                      <th><?= $no++; ?>
                      </th>
                      <td><?= $ar1->nomor ?></td>
                      <td><?= $ar1->customer ?></td>
                      <td><?= $ar1->saldo ?></td>
                    </tr>
                  <?php endforeach; ?>

                  <?php
                  class BankAccount extends Account
                  {
                    public $customer;

                    function __construct($no, $saldo_awal, $customer)
                    {
                      parent::__construct($no, $saldo_awal);
                      $this->customer = $customer;
                    }
                    function cetak()
                    {
                      parent::cetak();
                      echo "<br/>Customer : " . $this->customer;
                      echo "<br/>";
                    }
                    function transfer($akun, $uang)
                    {
                      $akun->deposit($uang);
                      $this->withdraw($uang);
                    }
                  }
                  ?>

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
  <?php
  include_once "footer.php";
  ?>