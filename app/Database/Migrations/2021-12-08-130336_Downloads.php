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
            'title_es' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null' => false,
            ],    
            'routeDoc_es' => [
                'type' => 'TEXT',
                'null' => false,
            ], 
            'title_en' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null' => false,
            ],    
            'routeDoc_en' => [
                'type' => 'TEXT',
                'null' => false,
            ],  
            'created_at' => [
                'type'       => 'DATE',
                'null' => false,
            ],   
            'updated_at' => [
                'type'       => 'DATE',
            ],   
            'deleted_at' => [
                'type'       => 'DATE',
            ],  
            'created_by' => [
                'type'       => 'TINYINT',
            ],   
            'updated_by' => [
                'type'       => 'TINYINT',
            ],   
            'deleted_by' => [
                'type'       => 'TINYINT',
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
