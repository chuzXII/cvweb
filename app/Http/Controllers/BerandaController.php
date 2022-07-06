<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProjectModel;
use App\Models\Certificatemodel;


class BerandaController extends Controller
{
    public function index(){
        $data = ProjectModel::orderby('created_at','desc')->paginate(9);
        $countproject = ProjectModel::get()->count();
        return view('pageberanda.beranda',['data'=>$data,'countp'=>$countproject]);
    }
    public function certificate(){
        $data = Certificatemodel::orderby('created_at','desc')->paginate(9);
        return view('pageberanda.certificate',['data'=>$data]);
    }
}
