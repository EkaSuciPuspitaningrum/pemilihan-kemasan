<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Models\CalonPakar;
use App\Models\Pakar;
use App\Models\User;
use Illuminate\Http\Request;

class AuthRegis extends Controller
{
    public function show_regis_user()
    {
        return view('auth-user.registrasi_user', [
            'type_menu' => 'registrasi',
        ]);
    }

    public function user_store(Request $request)
    {

       $generator = Helper::IDGenerator(new User, 'id_user', 3, 'USR');
       $user = new User;
       $user->id_user = $generator;
       $user->first_name_user = $request->first_name_user;
       $user->last_name_user = $request->last_name_user;
       $user->role = "user";
       $user->email = $request->email;
       $user->password = $request->password;

       $user->save();
       
       return redirect("/");
    }

    public function pakar_store(Request $request)
    {
        // $this->validate($request, [
        //     'file' => 'required|file|mimes:[pdf]',
        // ]);

       $generator = Helper::IDGenerator(new CalonPakar, 'id_pakar', 3, 'PKR');
       $pakar = new CalonPakar;
       $pakar->id_pakar = $generator;
       $pakar->first_name_pakar = $request->first_name_pakar;
       $pakar->last_name_pakar = $request->last_name_pakar;
       $pakar->role = "pakar";
       $pakar->email = $request->email;
       $pakar->password = $request->password;
       $pakar->pend_terakhir = $request->pend_terakhir;
       $pakar->nama_instansi = $request->nama_instansi;
       
    //    $file = $request->file('file');
    //    $pakar = time()."_".$file->getClientOriginalName();
    //    $tujuan_upload = 'data_file';
    //    $file->move($tujuan_upload,$pakar);

       $pakar->save();
       
       return redirect("/");
    }

    public function show_regis_pakar()
    {
        return view('auth-pakar.registrasi_pakar', [
            'type_menu' => 'registrasi',
        ]);
    }
}

