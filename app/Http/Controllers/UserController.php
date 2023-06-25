<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class UserController extends Controller
{
    //
    public function index(Request $request)
    {
        return [
            [
                'name' => 'Femi Okeowo',
                'age' => 56,
                'gender' => 'M'
            ],
            [
                'name' => 'Pauline Ose',
                'age' => 40,
                'gender' => 'F'
            ]
        ];
    }

    public function all()
    {
        return User::all();
    }

    public function show(User $user)
    {
        return $user;
    }
}
