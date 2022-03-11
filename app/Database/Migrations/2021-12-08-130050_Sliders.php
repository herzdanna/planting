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
            'link_es' => [
                'type' => 'TEXT',
                'null' => false,
            ],  
            'textBtn_es' => [
                'type' => 'TEXT',
                'null' => false,
            ], 
            'link_en' => [
                'type' => 'TEXT',
                'null' => false,
            ],  
            'textBtn_en' => [
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
        $this->forge->createTable('sliders');
    }

    public function down()
    {
        $this->forge->dropTable('sliders');
    }
}
