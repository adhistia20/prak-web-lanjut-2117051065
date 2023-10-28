<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateKelasTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama_kelas' => [
                'type'      => 'VARCHAR',
                'constraint'=> '10',
            ],
            'create_at' => [
                'type'  => 'DATETIME',
                'null'  => true,
            ],
            'update_at' => [
                'type'  => 'DATETIME',
                'null'  => true,
            ],
            'delete_at' => [
                'type'  => 'DATETIME',
                'null'  => true,
            ],
        ]);

        $this->forge->addKey('id', true, true);
        $this->forge->createTable('kelas');
    }

    public function down()
    {
        $this->forge->dropTable('kelas', true);
    }
}
