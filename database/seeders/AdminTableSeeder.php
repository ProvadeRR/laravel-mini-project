<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user_admin = [
            'name' => 'Станислав',
            'surname' => 'Карноза',
            'email' => 'stas.karnoza@gmail.com',
            'password' => Hash::make('Stanislav'),
        ];
        $admin = User::create($user_admin);
        $admin->assignRole('admin');
    }
}
