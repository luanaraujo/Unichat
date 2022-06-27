<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    public function run()
    {
        $roles = [
            [
                'id'    => 1,
                'title' => 'Atendente',
            ],
            [
                'id'    => 3,
                'title' => 'Supervisor',
            ],
        ];

        Role::insert($roles);
    }
}
