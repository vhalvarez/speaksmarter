<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create(
            [
                'name' => 'admin',
                'email' => 'admin@speaksmarter.net',
                'password' => Hash::make('admin')
            ]
        );

        $admin->assignRole('admin');

        $editor = User::create(
            [
                'name' => 'editor',
                'email' => 'editor@speaksmarter.net',
                'password' => Hash::make('editor')
            ]
        );

        $editor->assignRole('editor');
    }
}
