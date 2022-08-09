<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class account extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'          => [
                'type'           => 'INT',
                'constraint'     => 8,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama_depan'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'nama_belakang'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'username'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'password'       => [
                'type'       => 'CHAR',
                'constraint' => '64',
            ],
            'email'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'nomor_telepon'       => [
                'type'       => 'VARCHAR',
                'constraint' => '15',
            ],
            'foto_profile' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('Account');
    }
    

    public function down()
    {
        $this->forge->dropTable('Account');
    }
}
