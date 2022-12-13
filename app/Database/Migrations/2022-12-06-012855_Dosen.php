<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Jurusan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'dosenID' => [
                'type' => 'INT',
                'auto_increment' => true
            ],
            'dosenCode' =>[
                'type' => 'VARCHAR',
                'constraint' => 7
            ],
            'dosenName' => [
                'type' => 'VARCHAR',
                'constraint' => 200,
            ],
            'dosenSex' => [
                'type' => 'ENUM',
                'constraint' => ['Laki-laki', 'Perempuan']
            ],
            'dosenPhone' =>[
                'type' => 'VARCHAR',
                'constraint' => 13,
            ],
            'dosenAddress' => [
                'type' => 'VARCHAR',
                'constraint' => 200,
            ],
            'createAt TIMESTAMP DEFAULT CURRENT_TIMESTAMP',
            'updateAt TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP',
        ]);
        $this->forge->addKey('dosenID',TRUE);
        $this->forge->createTable('dosen', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('dosen');
    }
}
