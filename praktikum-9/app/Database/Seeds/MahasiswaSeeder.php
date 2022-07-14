<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class MahasiswaSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nim'               => '0110221060',
                'nama'              => 'Irfan',
                'jenis_kelamin'     => 'Laki-Laki',
                'tgl_lahir'         => '2002-04-14',
                'tempat_lahir'      => 'Depok',
                'program_study'     => 'Teknik Informatika',
                'ipk'               => '3.9',
                'created_at'        => Time::now()
            ],
            [
                'nim'               => '0110221061',
                'nama'              => 'Dani',
                'jenis_kelamin'     => 'Laki-Laki',
                'tgl_lahir'         => '2001-03-01',
                'tempat_lahir'      => 'Bogor',
                'program_study'     => 'Teknik Informatika',
                'ipk'               => '3.5',
                'created_at'        => Time::now()
            ],
        ];
        $this->db->table('mahasiswa')->insertBatch($data);
    }
}
