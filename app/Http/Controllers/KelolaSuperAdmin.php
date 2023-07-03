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
    public function data_pengguna()
    {
        $dataadmin = ["data_pengguna"=>User::all()];
        return view('super-admin.data_pengguna', $dataadmin,[
            'type_menu' => 'data_pengguna',
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
       $admin->username = $request->username;
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
       $user->role = "user";
       $user->email = $request->email;
       $user->password = $request->password;

       $user->save();
       
       return redirect("/data_pengguna");
    }

    public function data_pakar_store(Request $request)
    {
       $pakar = new Pakar;
       $pakar->first_name_pakar = $request->first_name_pakar;
       $pakar->last_name_pakar = $request->last_name_pakar;
       $pakar->role = "pakar";
       $pakar->pend_terakhir = $request->pend_terakhir;
       $pakar->nama_instansi = $request->nama_instansi;
       $pakar->email = $request->email;
       $pakar->password = $request->password;

       $pakar->save();
       
       return redirect("/data_pakar");
    }

    public function pakar_hapus($id)
    {
        DB::table('pakar')->where('id',$id)->delete();
        
        return redirect('/data_pakar');
        
    }

    public function calon_pakar_hapus($id)
    {
        DB::table('calon_pakar')->where('id',$id)->delete();
        
        return redirect('/appr_pakar');
        
    }

    public function admin_edit(Request $request, $id)
    {
        $admin = DB::table('admin')->where('id',$id)->get();
        
        return view('super-admin.data_admin',['admin' => $admin]);
        
    }

    public function admin_update(Request $request)
{

	DB::table('admin')->where('id',$request->id)->update([
		'name' => $request->name,
		'username' => $request->username,
		'email' => $request->email,
		'password' => $request->password,
	]);

	return redirect('/data_admin');
}

    public function admin_hapus($id)
    {
        DB::table('admin')->where('id',$id)->delete();
        
        return redirect('/data_admin');
        
    }

}
