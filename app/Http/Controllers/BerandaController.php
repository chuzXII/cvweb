<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProjectModel;

class BerandaController extends Controller
{
    public function index(){
        $data = ProjectModel::orderby('created_at','desc')->paginate(9);
        return view('beranda',['data'=>$data]);
    }
}
