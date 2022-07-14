<?php

namespace App\Controllers;

use App\Models\DosenModel;

class Dosen extends BaseController
{
    public function index()
    {
        //membuat object model mahasiswa
        $this->dsn1 = new DosenModel();
        $this->dsn2 = new DosenModel();
        $this->dsn3 = new DosenModel();
        //Memberikan nilai kepada object
        $this->dsn1->id = 1;
        $this->dsn1->nama = "Tifani Nabarian";
        $this->dsn1->gender = "P";
        $this->dsn1->jabatan = "Ketua Prodi TI";
        $this->dsn1->matkul = "UI & UX";

        $this->dsn2->id = 2;
        $this->dsn2->nama = "Lukman Rosyidi";
        $this->dsn2->gender = "L";
        $this->dsn2->jabatan = "Ketua Yayasan";
        $this->dsn2->matkul = "Jaringan Komputer";

        $this->dsn3->id = 3;
        $this->dsn3->nama = "Mizna Azqia";
        $this->dsn3->gender = "P";
        $this->dsn3->jabatan = "BAAK";
        $this->dsn3->matkul = "Pengantar Teknologi Informasi";

        $data_dsn = [$this->dsn1, $this->dsn2, $this->dsn3];
        $data['data_dsn'] = $data_dsn;

        //return view & mengembalikan data array
        return view('dosen/index', $data);
    }
}
