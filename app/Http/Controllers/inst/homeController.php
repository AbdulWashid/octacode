<?php

namespace App\Http\Controllers\inst;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index(){
        return view('inst.index');
    }
    public function contact(){
        return view('com.contact');
    }
}
