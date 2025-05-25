<?php

namespace Database\Seeders;

use App\Enums\UserTypeEnum;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\UserType;

class DefaultUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {      
        User::updateOrCreate(
            ['email' => 'admin@example.com'],
            [
                'nom' => 'DOUILLY',
                'prenom' => 'Rodely',
                'poste' => 'Admin',
                'direction' => 'Informatique',
                'email' => 'admin@example.com',
                'password' => bcrypt('password123'),
            ]
        );          
    }
}
