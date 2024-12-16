<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'fahry',
            'email' => 'fahry@unsur.com',
        ])->assignRole('fahry')->givePermissionTo('view_book');

        User::factory()->create([
            'name' => 'pustakawan',
            'email' => 'pustakawan@unsur.com',
        ])->assignRole('pustakawan')
        ->givePermissionTo(['edit_book','edit_user']);
    }
}
