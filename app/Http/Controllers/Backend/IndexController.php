<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    //后台首页
    public function index(){
    	
    	return view('Backend.index');
    }
}
