<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class MataKuliah extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'matKulID' => [
                'type' => 'INT',
                'auto_increment' => true
            ],
            'matKulCode' =>[
                'type' => 'VARCHAR',
                'constraint' => 5,
            ],
            'matKulName' => [
                'type' => 'VARCHAR',
                'constraint' => 200,
            ],
            'createAt TIMESTAMP DEFAULT CURRENT_TIMESTAMP',
            'updateAt TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP',
        ]);
        $this->forge->addKey('matKulID', TRUE);
        $this->forge->createTable('matKul', TRUE);
    }

    public function down()
    {
        $this->forge->dropTable('jadwal', TRUE);
    }
}
