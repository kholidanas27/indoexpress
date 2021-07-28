<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Container;
use App\Kapal;

class AdminController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth');
    }
    public function index(){

        // $container = Container::all();
        // $container = DB::table('data_container')->get();

        return view('admin.dashboard', compact('container'));
    }

    public function data_container(){

        $container = Container::all();
        return view('admin.data_kontainer', compact('container'));
    }

    public function data_kapal(){

         $kapal = Kapal::all();
        return view('admin.data_kapal', compact('kapal'));
    }
}
