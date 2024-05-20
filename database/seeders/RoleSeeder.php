<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create(['name' => 'scholier']);
        Role::create(['name' => 'ouder']);
        Role::create(['name' => 'leerkracht']);
        Role::create(['name' => 'overig']);
    }
}
