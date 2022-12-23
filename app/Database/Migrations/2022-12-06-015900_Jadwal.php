<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Mahasiswa extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'jadwalID' => [
                'type' => 'INT',
                'auto_increment' => true
            ],
            'dosenJID' =>[
                'type' => 'INT',
            ],
            'matKulJID' =>[
                'type' => 'INT',
            ],
            'jadwalDay' => [
                'type' => 'ENUM',
                'constraint' => ["Senin", "Selasa", "Rabu", "Kamis", "Jum'at", "Sabtu", "Minggu"]
            ],
            'jadwalDate' =>[
                'type' => 'DATE',
            ],
            'jadwalTime' => [
                'type' => 'TIME'
            ],
            'createAt TIMESTAMP DEFAULT CURRENT_TIMESTAMP',
            'updateAt TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP',
        ]);

        $this->forge->addKey('jadwalID', TRUE);
        $this->forge->addForeignKey('dosenID', 'dosen', 'dosenJID');
        $this->forge->addForeignKey('matKulID', 'matKul', 'matKulJID');
        $this->forge->createTable('jadwal', TRUE);

    }

    public function down()
    {
        $this->forge->dropTable('jadwal', TRUE);
    }
}
