<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminModel;

class AdminController extends Controller
{
    public function index(){
        return view('pagekonten.dashboard');
    }
    public function vtable(){
        $data = AdminModel::all();
        return view('pagekonten.table',['data'=>$data]);
    }
}
