<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Stories extends Migration
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
            'routeImg'       => [
                'type'       => 'TEXT',
                'null'       => false,
            ],
            'title' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null' => false,
            ],    
            'description' => [
                'type' => 'TEXT',
                'null' => false,
            ],   
            'flag' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null' => false,
            ],   
            'page' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null' => false,
            ],       
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('stories');
    }

    public function down()
    {
        $this->forge->dropTable('stories');
    }
}
