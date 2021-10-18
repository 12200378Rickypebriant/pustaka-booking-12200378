<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pengguna_12200378 extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT', 'contraint' => 4,
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'nama' => [
                'type'           => 'VARCHAR', 'contraint' => 50,
                'null'           => false
            ],
            'password' => [
                'type'           => 'VARCHAR', 'contraint' => 32,
                'null'           => false
            ]
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('pengguna_12200378');
    }

    public function down()
    {
        $this->forge->dropTable('pengguna_12200378');
    }
}
