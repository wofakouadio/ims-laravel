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
        $roles = [
            ['name' => 'Super Administrator', 'slug' => 'Super Admin'],
            ['name' => 'Administrator', 'slug' => 'Admin'],
            ['name' => 'Sales', 'slug' => 'Sales'],
            ['name' => 'Supplier', 'slug' => 'Supplier'],
            ['name' => 'Customer', 'slug' => 'Customer'],
        ];
        foreach ($roles as $role){
            Role::create($role);
        }
    }
}
