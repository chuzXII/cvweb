<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminModel;
use App\Models\ProjectModel;


class AdminController extends Controller
{
    public function __construct(){
        if(session('log')){
            return abort(404);
        }
    }
    public function index(){
        $data = ProjectModel::get()->count();
        return view('pagekonten.dashboard',['data'=>$data]);
    }
    public function beranda(){
        $data = ProjectModel::orderby('created_at','desc')->paginate(9);
        return view('beranda',['data'=>$data]);
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
                return redirect('/tableproject')->with('berhasil',' Berhasil Menambah Project');
            }
            else{
                return redirect('/tableproject')->with('gagal',' gagal Menambah Project');
            }
            
        }
        else{
            $lokasi = public_path('img/imgproject/'.$imgdb);
            if(file_exists($lokasi))
            {
               unlink($lokasi);
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
                return redirect('/tableproject')->with('berhasil',' Berhasil Menambah Project');
            }
            else{
                return redirect('/tableproject')->with('gagal',' Gagal Menambah Project');
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
        

        $imgname = rand(30,9999).'.'.$img->extension();
        $img->move(public_path('img/imgproject'),$imgname);



        $data = ProjectModel::create([
            'nama_project' => $nama,
            'link' => $link,
            'deskripsi' => $desk,
            'img' => $imgname,
        ]);

        if($data){
            return redirect('/pageadd')->with('berhasil',' Berhasil Menambah Project');
        }
        else{
            return redirect('/pageadd')->with('gagal',' Gagal Menambah Project');

        }
    }
    public function deleteproject($id){
        $imgdb = ProjectModel::where('id_project',$id)->pluck('img')->first();

        $lokasi = public_path('img/imgproject/'.$imgdb);
            if(file_exists($lokasi))
            {
               unlink($lokasi);
            }
        $data = ProjectModel::where('id_project',$id)->delete();
        if($data){
            return redirect('/tableproject')->with('berhasil',' Berhasil Menambah Project');
        }
        else{
            return redirect('/tableproject')->with('gagal',' Gagal Menambah Project');
        }
    }
}
