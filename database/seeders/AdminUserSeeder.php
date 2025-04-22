<?php
namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        User::create([
            'name'     => 'Admin User',
            'email'    => 'admin@admin.com',
            'phone'    => '8240990529',
            'password' => Hash::make('p@ssw0rd'), // Change this to something more secure
            'role'     => 'admin',                // Assuming you use a 'role' column to differentiate user/admin
        ]);
    }
}
