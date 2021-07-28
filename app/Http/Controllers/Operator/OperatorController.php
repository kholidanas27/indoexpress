<?php

namespace App\Http\Controllers\Operator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OperatorController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth');
    }

    public function index(){
        return view('operator.dashboard');
    }

    public function kirim(){
      return view('operator.kirimBarang');
    }
}