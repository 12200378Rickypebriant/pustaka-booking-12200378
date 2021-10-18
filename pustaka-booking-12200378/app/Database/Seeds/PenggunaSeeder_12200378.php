<?php

namespace App\Database\Seeds;

use App\Models\Penggunamodel_12200378;
use CodeIgniter\Database\Seeder;

class PenggunaSeeder_12200378 extends Seeder
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
        $p = new penggunamodel_12200378();
        $p->insertBatch($data);
    }
}
