<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use Faker\Factory;

class User extends Seeder
{
    public function run()
    {
        $faker = Factory::create('pt_BR');

        $data = [];

        for ($i = 0; $i < 100; $i++) {
            $data[] = [
                'name' => $faker->name,
                'phone' => $faker->phoneNumber,
                'email' => $faker->unique()->safeEmail,
            ];
        }

        $this->db->table('users')->insertBatch($data);
    }
}
