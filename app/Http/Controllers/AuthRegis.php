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


    public function calon_pakar_store(Request $request)
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
        return redirect("/login")->with('message', 'Akun akan segera diapprove oleh Admin, mohon tunggu sekitar 5 menit.');
    }

    public function show_regis_pakar()
    {
        return view('auth-pakar.registrasi_pakar', [
            'type_menu' => 'registrasi',
        ]);
    }
}

