<?php

namespace Database\Seeders;

use App\Models\User;
use Hash;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@jornal.com',
            'phone' => '+5511999999999',
            'password' => Hash::make('password'),
            'is_active' => true,
        ]);
        $admin->assignRole('admin');

        $editors = User::factory(5)->create();
        foreach ($editors as $editor) {
            $editor->assignRole('editor');
        }

        foreach (range(1, 10) as $i) {
            $client = User::create([
                'name' => fake()->name(),
                'email' => fake()->unique()->safeEmail(),
                'phone' => '+55' . rand(11, 99) . rand(900000000, 999999999),
                'password' => Hash::make('password'),
                'is_active' => true,
            ]);
            $client->assignRole('client');
        }
    }
}
