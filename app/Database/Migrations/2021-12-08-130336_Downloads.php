<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Downloads extends Migration
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
            'type'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'null'       => false,
            ],
            'title' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null' => false,
            ],    
            'routeDoc' => [
                'type' => 'TEXT',
                'null' => false,
            ],  
            'page' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null' => false,
            ],        
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('downloads');
    }

    public function down()
    {
        $this->forge->dropTable('downloads');
    }
}
