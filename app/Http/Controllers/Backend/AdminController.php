<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admins;

class AdminController extends Controller
{
    //管理员列表
    public function admin_list(){
   		return view('Backend.admin_list');
    }
    //管理员添加
    public function admin_add(){
   		return view('Backend.admin_add');
    }
    public function addadmin(
    	Request $request){
    	dump($request->input('username', ''));
    	// $request->username=$request->input('adminName', '');
    	dump($request->all());
    	if(Admins::create($request->all())){
    		$result=['status' => 1, 'message' => '添加成功'];
    	}else{
    		$result=['status' => 0, 'message' => '添加失败'];
    	}
   		 return response()->json($result);
    }
}
