<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Videos extends Migration
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
            'title'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'null'       => false,
            ],   
            'routeImg' => [
                'type' => 'TEXT',
                'null' => false,
            ],  
            'link' => [
                'type' => 'TEXT',
                'null' => false,
            ],       
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('videos');
    }

    public function down()
    {
        $this->forge->dropTable('videos');
    }
}
