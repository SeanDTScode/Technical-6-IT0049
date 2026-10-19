<?php

namespace App\Http\Controllers;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = [
            [
                'full_name' => 'Maria Santos',
                'email' => 'maria.santos@example.com',
                'phone' => '09171234567',
            ],
            [
                'full_name' => 'John Reyes',
                'email' => 'john.reyes@example.com',
                'phone' => '09182345678',
            ],
            [
                'full_name' => 'Angela Cruz',
                'email' => 'angela.cruz@example.com',
                'phone' => '09193456789',
            ],
            [
                'full_name' => 'Carlo Mendoza',
                'email' => 'carlo.mendoza@example.com',
                'phone' => '09204567890',
            ],
            [
                'full_name' => 'Sofia Garcia',
                'email' => 'sofia.garcia@example.com',
                'phone' => '09215678901',
            ],
        ];

        return view('customers.index', compact('customers'));
    }
}