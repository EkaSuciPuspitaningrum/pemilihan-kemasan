<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\Helper;
use App\Models\JenisKemasan;
use Illuminate\Support\Facades\DB;

class PustakaKemasan extends Controller
{
    public function show()
    {
        $data = ["jenis_kemasan"=>JenisKemasan::all()];
        return view('pakar.pustaka_kemasan', $data, [
            'type_menu' => 'pustaka_kemasan',
        ]);
    }

    public function store(Request $request)
    {

       $generator = Helper::IDGenerator(new JenisKemasan(), 'id_kemasan', 3, 'KMS');
       $kemasan = new JenisKemasan();
       $kemasan->id_kemasan = $generator;
       $kemasan->jenis_kemasan = $request->jenis_kemasan;
       $kemasan->keterangan_kemasan = $request->keterangan_kemasan;
       $kemasan->save();
       
       return redirect("/pustaka_kemasan");
    }

    public function kemasan_show(JenisKemasan $kemasan)
    {
        return view('pakar.pustaka_kemasan',compact('kemasan'));
    }

    public function kemasan_edit(Request $request, $id)
{
    $post = JenisKemasan::findOrFail($id);

    $post->update([
        'jenis_kemasan' => $request->jenis_kemasan,
        'keterangan_kemasan' => $request->keterangan_kemasan,
    ]);

	return redirect('/pustaka_kemasan');
}

public function kemasan_hapus($id)
{
    DB::table('jenis_kemasan')->where('id',$id)->delete();
    
    return redirect('/pustaka_kemasan');
    
}

}
