<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Maskapai extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama_maskapai'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'lambang_maskapai' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('Maskapai');
    }

    public function down()
    {
        $this->forge->dropTable('Maskapai');
    }
}