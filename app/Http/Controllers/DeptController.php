<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dept;

class DeptController extends Controller
{
    public function index()
    {
        return Dept::all();
    }

    public function show(Dept $dept)
    {
        return $dept;
    }
}
