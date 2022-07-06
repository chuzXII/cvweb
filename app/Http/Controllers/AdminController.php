<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminModel;
use App\Models\ProjectModel;
use App\Models\Certificatemodel;



class AdminController extends Controller
{
    public function __construct(){

        $this->middleware('logged');

    }
    public function index(){
        $data = ProjectModel::get()->count();
        return view('pagekonten.dashboard',['data'=>$data]);
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
        $data = ProjectModel::all();
        return view('pagekonten.tableproject',['data'=>$data]);
    }
    public function vaproject(){
        return view('pagekonten.addproject');
    }
    public function veproject($id){
        $data = ProjectModel::where('id_project',$id)->first();
        return view('pagekonten.editproject',['data'=>$data]);
    }
    public function detailproject($id){
        $data = ProjectModel::where('id_project',$id)->first();
        return view('pagekonten.detailproject',['data'=>$data]);
    }
    public function updateproject(Request $request,$id){
        $imgdb = ProjectModel::where('id_project',$id)->pluck('img')->first();
        $this->validate($request,[
            'namaproject' => 'required|',
            'deskripsi' => 'required',
            'image' => 'mimes:jpg,jpeg,JPG,JEPG,png|max:2048'
        ]);
        $nama = $request->namaproject;
        $link = $request->link;
        $desk = $request->deskripsi;
        $img = $request->image;

        if($img == null){
            $data = ProjectModel::where('id_project',$id)->update([
                'nama_project' => $nama,
                'link' => $link,
                'img' => $imgdb,
                'deskripsi' => $desk,
                
            ]);
            if($data){
                return redirect('/tableproject')->with('b',' Berhasil Mengubah Project');
            }
            else{
                return redirect('/tableproject')->with('g',' gagal Mengubah Project');
            }
            
        }
        else{
            $lokasi = public_path('img/imgproject/'.$imgdb);
            if(file_exists($lokasi))
            {
               @unlink($lokasi);
            }
            $imgname = rand(30,9999).'.'.$img->extension();
            $img->move(public_path('img/imgproject'),$imgname);

            $data = ProjectModel::where('id_project',$id)->update([
                'nama_project' => $nama,
                'link' => $link,
                'deskripsi' => $desk,
                'img' => $imgname
            ]);
            if($data){
                return redirect('/tableproject')->with('b',' Berhasil Mengubah Project');
            }
            else{
                return redirect('/tableproject')->with('g',' Gagal Mengubah Project');
            }
        }
    }

    
    public function deleteuser($id){

    }
    public function addproject(Request $request){
        $this->validate($request,[
            'namaproject' => 'required|',
            'deskripsi' => 'required',
            'image' => 'required|mimes:jpg,jpeg,JPG,JEPG,png|max:2048'
        ]);
        $nama = $request->namaproject;
        $link = $request->link;
        $desk = $request->deskripsi;
        $img = $request->image;
        $cate = $request->kategori;
        

        $imgname = rand(30,9999).'.'.$img->extension();
        $img->move(public_path('img/imgproject'),$imgname);



        $data = ProjectModel::create([
            'nama_project' => $nama,
            'link' => $link,
            'deskripsi' => $desk,
            'img' => $imgname,
            'kategori' => $cate
        ]);

        if($data){
            return redirect('/pageadd')->with('b',' Berhasil Menambah Project');
        }
        else{
            return redirect('/pageadd')->with('g',' Gagal Menambah Project');
        }
    }
    public function deleteproject($id){
        $imgdb = ProjectModel::where('id_project',$id)->pluck('img')->first();

        $lokasi = public_path('img/imgproject/'.$imgdb);
            if(file_exists($lokasi))
            {
               @unlink($lokasi);
            }
        $data = ProjectModel::where('id_project',$id)->delete();
        if($data){
            return redirect('/tableproject')->with('b',' Berhasil Menghapus Project');
        }
        else{
            return redirect('/tableproject')->with('g',' Gagal Menghapus Project');
        }
    }

    public function vtcertificate(){
        $data = Certificatemodel::all();
        return view('pagekonten.tablecertificate',['data'=>$data]);
    }
    public function vacertificate(){
        return view('pagekonten.addcertificate');
    }
    public function addcertificate(Request $request){
        $this->validate($request,[
            'namaproject' => 'required|',
            'image' => 'required|mimes:jpg,jpeg,JPG,JEPG,png|max:2048'
        ]);
        $nama = $request->namaproject;
        $img = $request->image;
        

        $imgname = rand(30,9999).'.'.$img->extension();
        $img->move(public_path('img/imgcertificate'),$imgname);



        $data = Certificatemodel::create([
            'nama_certificate' => $nama,
            'img' => $imgname,
        ]);

        if($data){
            return redirect('/pageaddcertificate')->with('b',' Berhasil Menambah Project');
        }
        else{
            return redirect('/pageaddcertificate')->with('g',' Gagal Menambah Project');
        }
    }
    public function deletecertificate($id){
        $imgdb = Certificatemodel::where('id_certificate',$id)->pluck('img')->first();

        $lokasi = public_path('img/imgcertificate/'.$imgdb);
            if(file_exists($lokasi))
            {
               @unlink($lokasi);
            }
        $data = Certificatemodel::where('id_certificate',$id)->delete();
        if($data){
            return redirect('/tablecertificate')->with('b',' Berhasil Menghapus Project');
        }
        else{
            return redirect('/tablecertificate')->with('g',' Gagal Menghapus Project');
        }
    }
    
}
