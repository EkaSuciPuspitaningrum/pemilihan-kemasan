<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Models\Admin;
use App\Models\CalonPakar;
use App\Models\Pakar;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KelolaSuperAdmin extends Controller
{
    public function appr_pakar()
    {
        $data = ["calon_pakar"=>CalonPakar::all()];
        return view('super-admin.appr_pakar', $data,[
            'type_menu' => 'appr_pakar',
        ]);
    }
    public function data_pakar()
    {
        $dataPakar = ["pakar"=>Pakar::all()];
        return view('super-admin.data_pakar', $dataPakar,[
            'type_menu' => 'data_pakar',
        ]);
    }

    public function data_admin()
    {
        $dataAdmin = ["data_admin"=>Admin::all()];
        return view('super-admin.data_admin', $dataAdmin,[
            'type_menu' => 'data_admin',
        ]);
    }

    public function admin_store(Request $request)
    {
       $admin = new Admin;
       $admin->name = $request->name;
       $admin->email = $request->email;
       $admin->role = "Admin";
       $admin->password = $request->password;

       $admin->save();
       
       return redirect("/data_admin");
    }

    public function admin_edit($id){
        $admin   = Admin::whereId($id)->first();
        return view('super-admin.data_admin')->with('admin', $admin);
    }

    public function admin_update(Request $request, $id){
        $admin = Admin::whereId($id)->first();
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->role = "Admin";
        $admin->password = $request->password;
        $admin->save();
    
        return redirect('/data_admin');
    }


    public function admin_hapus($id)
    {
        DB::table('user')->where('id',$id)->delete();
        
        return redirect('/data_admin')->with("message", "Data berhasil dihapus.");
        
    }

    public function data_pakar_store(Request $request)
    {
        $request->validate([
            'dokumen' => 'required',
            'dokumen.*' => 'mimes:PDF,pdf,|max:2000',
            'first_name_pakar' => 'required',
            'last_name_pakar' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'pend_terakhir' => 'required',
            'nama_instansi' => 'required',
        ]);

        if ($request->hasfile('dokumen')) {            
            $dokumen = round(microtime(true) * 1000).'-'.str_replace(' ','-',$request->file('dokumen')->getClientOriginalName());
            $request->file('dokumen')->move(public_path('dokumen'), $dokumen);
             Pakar::create(
                    [                        
                        'dokumen' =>$dokumen,
                        'first_name_pakar' =>$request->first_name_pakar,
                        'last_name_pakar' =>$request->last_name_pakar,
                        'email' =>$request->email,
                        'password' =>$request->password,
                        'pend_terakhir' =>$request->pend_terakhir,
                        'nama_instansi' =>$request->nama_instansi,
                    ]
                );
            }
        return redirect("/data_pakar")->with('message', 'Akun berhasil dibuat.');
    }

    public function lihat_cv($id){
        $pdfData   = Pakar::whereId($id)->first();


        if (!$pdfData) {
            // Tangani ketika ID tidak ditemukan
            abort(404);
        }
    
        $pdfUrl = $pdfData->dokumen; // Ganti 'pdf_url' dengan nama kolom yang sesuai
        return view('super-admin.data_pakar', compact('pdfUrl'));
    }

    public function pakar_edit($id){
        $pakar   = Pakar::whereId($id)->first();
        return view('super-admin.data_pakar')->with('pakar', $pakar);
    }

    public function pakar_update(Request $request, $id){
        
        $request->validate([
            'dokumen' => 'required',
            'dokumen.*' => 'mimes:PDF,pdf,|max:2000',
            'first_name_pakar' => 'required',
            'last_name_pakar' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'pend_terakhir' => 'required',
            'nama_instansi' => 'required',
        ]);
        
        $pakar = Pakar::whereId($id)->first();

        if ($request->hasFile('dokumen')) {
            $dokumen = $request->file('dokumen');
            $store_path = "dokumen";
            $name = md5(uniqid(rand(), true)) . str_replace(' ', '-', $dokumen->getClientOriginalName());
            $dokumen->move(public_path('/' . $store_path), $name);
            $exist_dokumen = $pakar['dokumen'];
            if (isset($exist_dokumen) && file_exists($exist_dokumen)) {
                unlink($exist_dokumen);
            }
            $update['dokumen'] = $store_path . '/' . $name;
        }
        $pakar->first_name_pakar = $request->first_name_pakar;
        $pakar->last_name_pakar = $request->last_name_pakar;
        $pakar->email = $request->email;
        $pakar->password = $request->password;
        $pakar->pend_terakhir = $request->pend_terakhir;
        $pakar->nama_instansi = $request->nama_instansi;
        $pakar->save();
    
        return redirect('/data_pakar');
    }

    public function pakar_hapus($id)
    {
        DB::table('pakar')->where('id',$id)->delete();
        
        return redirect('/data_pakar')->with("message", "Data berhasil dihapus.");
        
    }

    public function move_calon_pakar($id)
    {
        CalonPakar::query()
        ->each(function ($oldadmin) {
         $newadmin = $oldadmin->replicate();
         $newadmin->setTable('pakar');
         $newadmin->save();
         $oldadmin->delete();
     
       });
        
        return redirect('/appr_pakar')->with("message", "Data berhasil mendapat approve.");
        
    }

    public function calon_pakar_hapus($id)
    {
        DB::table('calon_pakar')->where('id',$id)->delete();
        
        return redirect('/appr_pakar');
        
    }


}
