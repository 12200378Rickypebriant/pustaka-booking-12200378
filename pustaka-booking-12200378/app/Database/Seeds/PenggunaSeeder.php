<?php

namespace App\Database\Seeds;

use App\Models\Pengguna;
use CodeIgniter\Database\Seeder;

class PenggunaSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama'      => 'Ricky Pebriant',
                'password'  => md5('12200378')
            ],
            [
                'nama'      => 'admin',
                'password'  => md5('12345')
            ],
            [
                'nama'      => '12200378',
                'password'  => md5('RickyPebriant')
            ],
           
        ];
        $p = new pengguna();
        $p->insertBatch($data);
    }
}
