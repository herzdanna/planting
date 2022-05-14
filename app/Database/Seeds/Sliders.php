<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class SimpleSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'email'   =>  'darth',
            'password'    =>  'darth',
            'userName' =>  'darth',
            'link_en'    =>  'darth',
            'created_at' =>  'darth',
            'updated_at' =>  'darth',
            'deleted_at' =>  'darth',
            'created_by' =>  'darth',
            'updated_by' =>  'darth',
            'deleted_by' =>  'darth'
        ];

        // Simple Queries
        //$this->db->query("INSERT INTO users (username, email) VALUES(:username:, :email:)", $data);

        // Using Query Builder
        $this->db->table('users')->insert($data);
    }
}