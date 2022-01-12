<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Partners extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'name'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'null'       => false,
            ],  
            'routeImg' => [
                'type' => 'TEXT',
                'null' => false,
            ],        
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('partners');
    }

    public function down()
    {
        $this->forge->dropTable('partners');
    }
}
