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
    public function vdetailuser($id){
        $data = AdminModel::where('id',$id)->first();
        return view('pagekonten.table',['data'=>$data]);
    }
    public function vtproject(){

    }
    public function veproject(){

    }

    
    public function deleteuser($id){

    }
    public function detailproject($id){
        $data = AdminModel::where('id',$id)->first();
        return view('pagekonten.table',['data'=>$data]);
    }
    public function addproject(Request $request){
    }
    public function deleteproject(){

    }
}
