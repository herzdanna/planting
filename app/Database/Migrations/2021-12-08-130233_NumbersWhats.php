<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class NumbersWhats extends Migration
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
            'section'       => [
                'type'       => 'TEXT',
                'null'       => false,
            ],
            'numberWhat' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null' => false,
            ],    
            'description' => [
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
        $this->forge->createTable('numbersWhats');
    }

    public function down()
    {
        $this->forge->dropTable('numbersWhats');
    }
}
