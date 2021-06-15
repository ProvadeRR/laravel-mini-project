<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $roles = [
            [
                'name' => 'user',
            ],

            [
                'name' => 'manager',
            ],
            [
                'name' => 'admin',
            ],
        ];

        foreach ($roles as $role) {
            Role::create($role);
        }
    }
}
