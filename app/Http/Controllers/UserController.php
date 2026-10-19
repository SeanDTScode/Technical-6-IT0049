<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function index()
    {
        $users = [
            [
                'username' => 'admin01',
                'full_name' => 'Andrea Lim',
                'role' => 'Administrator',
            ],
            [
                'username' => 'manager01',
                'full_name' => 'Miguel Ramos',
                'role' => 'Manager',
            ],
            [
                'username' => 'cashier01',
                'full_name' => 'Jenny Flores',
                'role' => 'Cashier',
            ],
            [
                'username' => 'cashier02',
                'full_name' => 'Paolo Torres',
                'role' => 'Cashier',
            ],
            [
                'username' => 'cashier03',
                'full_name' => 'Nicole Bautista',
                'role' => 'Cashier',
            ],
        ];

        return view('users.index', compact('users'));
    }
}
