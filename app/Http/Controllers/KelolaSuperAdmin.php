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
       $admin->password = $request->password;

       $admin->save();
       
       return redirect("/data_admin");
    }

    public function data_pengguna_store(Request $request)
    {

       $user = new User;
       $user->first_name_user = $request->first_name_user;
       $user->last_name_user = $request->last_name_user;
       $user->role =  $request->role;
       $user->email = $request->email;
       $user->password = $request->password;

       $user->save();
       
       return redirect("/data_pengguna");
    }

    public function user_hapus($id)
    {
        DB::table('user')->where('id',$id)->delete();
        
        return redirect('/data_pengguna');
        
    }

    public function data_pakar_store(Request $request)
    {
        $request->validate([
            'dokumen' => 'required',
            'dokumen.*' => 'mimes:doc,docx,PDF,pdf,|max:2000',
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
             CalonPakar::create(
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

    public function pakar_hapus($id)
    {
        DB::table('pakar')->where('id',$id)->delete();
        
        return redirect('/data_pakar');
        
    }

    public function move_calon_pakar($id)
    {
        CalonPakar::query()
        ->each(function ($oldPost) {
         $newPost = $oldPost->replicate();
         $newPost->setTable('pakar');
         $newPost->save();
         $oldPost->delete();
     
       });
        
        return redirect('/appr_pakar');
        
    }

    public function calon_pakar_hapus($id)
    {
        DB::table('calon_pakar')->where('id',$id)->delete();
        
        return redirect('/appr_pakar');
        
    }

    public function admin_edit(Admin $admin)
    {
        return view('super-admin.data_admin',compact('admin'));
    }

    public function admin_update(Request $request, $id)
    {
        $update = Admin::find($id);
        $update->name = $request->name;
        $update->email = $request->email;
        $update->password = $request->password;

        return dd($update);

        // $request->validate([
        //     'name' => 'required|email',
        //     'email' => 'required',
        //     'password' => 'required',

        // ]);
  
        // $admin->update($request->all());
  
        // return redirect('/data_admin')->with('success','Product updated successfully');
    }

    public function admin_hapus($id)
    {
        DB::table('admins')->where('id',$id)->delete();
        
        return redirect('/data_admin');
        
    }

}
