<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('admin.dashboard');
    }

    public function data_container(){
        return view('admin.data_kontainer');
    }

    public function data_kapal(){
        return view('admin.data_kapal');
    }
}
