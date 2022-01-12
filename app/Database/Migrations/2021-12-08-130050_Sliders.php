<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Sliders extends Migration
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
            'link' => [
                
                'type' => 'TEXT',
                'null' => false,
            ],    
            'status' => [
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
        $this->forge->createTable('sliders');
    }

    public function down()
    {
        $this->forge->dropTable('sliders');
    }
}
