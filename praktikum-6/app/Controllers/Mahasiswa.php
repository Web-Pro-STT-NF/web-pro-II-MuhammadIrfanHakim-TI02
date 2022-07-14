<?php

namespace App\Controllers;

use App\Models\MahasiswaModel;

class Mahasiswa extends BaseController
{
    public function index()
    {
        //membuat object model mahasiswa
        $this->mhs1 = new MahasiswaModel();
        $this->mhs2 = new MahasiswaModel();
        $this->mhs3 = new MahasiswaModel();
        //Memberikan nilai kepada object
        $this->mhs1->id = 1;
        $this->mhs1->nama = "Muhammad Irfan Hakim";
        $this->mhs1->nim = "0110221060";
        $this->mhs1->gender = "L";
        $this->mhs1->tmp_lahir = "Depok";
        $this->mhs1->tgl_lahir = "14-04-2002";
        $this->mhs1->ipk = 3.96;

        $this->mhs2->id = 2;
        $this->mhs2->nama = "Rizky Faiz";
        $this->mhs2->nim = "0110221061";
        $this->mhs2->gender = "L";
        $this->mhs2->tmp_lahir = "Bogor";
        $this->mhs2->tgl_lahir = "05-02-2002";
        $this->mhs2->ipk = 3.46;

        $this->mhs3->id = 3;
        $this->mhs3->nama = "Keisya Zelia";
        $this->mhs3->nim = "0110221062";
        $this->mhs3->gender = "P";
        $this->mhs3->tmp_lahir = "Jakarta";
        $this->mhs3->tgl_lahir = "21-08-2003";
        $this->mhs3->ipk = 3.76;

        $list_mhs = [$this->mhs1, $this->mhs2, $this->mhs3];
        $data['list_mhs'] = $list_mhs;

        //return view & mengembalikan data array
        return view('mahasiswa/index', $data);
    }
}
