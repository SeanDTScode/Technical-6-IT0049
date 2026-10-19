<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\User;
use Illuminate\Database\Seeder;

class AccountSeeder extends Seeder
{
    public function run(): void
    {
        Customer::insert([
            [
                'full_name' => 'Maria Santos',
                'email' => 'maria.santos@example.com',
                'phone' => '09171234567',
                'created_at' => now(),
            ],
            [
                'full_name' => 'John Reyes',
                'email' => 'john.reyes@example.com',
                'phone' => '09182345678',
                'created_at' => now(),
            ],
            [
                'full_name' => 'Angela Cruz',
                'email' => 'angela.cruz@example.com',
                'phone' => '09193456789',
                'created_at' => now(),
            ],
            [
                'full_name' => 'Carlo Mendoza',
                'email' => 'carlo.mendoza@example.com',
                'phone' => '09204567890',
                'created_at' => now(),
            ],
            [
                'full_name' => 'Sofia Garcia',
                'email' => 'sofia.garcia@example.com',
                'phone' => '09215678901',
                'created_at' => now(),
            ],
        ]);

        User::insert([
            [
                'username' => 'admin01',
                'full_name' => 'Andrea Lim',
                'created_at' => now(),
            ],
            [
                'username' => 'manager01',
                'full_name' => 'Miguel Ramos',
                'created_at' => now(),
            ],
            [
                'username' => 'cashier01',
                'full_name' => 'Jenny Flores',
                'created_at' => now(),
            ],
            [
                'username' => 'cashier02',
                'full_name' => 'Paolo Torres',
                'created_at' => now(),
            ],
            [
                'username' => 'cashier03',
                'full_name' => 'Nicole Bautista',
                'created_at' => now(),
            ],
        ]);
    }
}