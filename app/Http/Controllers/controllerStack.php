<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\modelStack;

class controllerStack extends Controller
{
    public function showPertanyaan()
    {
        $pertanyaan = modelStack::getAllPertanyaan();
        return view('/items/pertanyaanView', compact('pertanyaan'));
    }

    public function showUser()
    {
        $user = modelStack::getAllUsers();
        return view('/items/userView', compact('user'));
    }

    public function createPertanyaan()
    {
        return view('form_pertanyaan');
    }
    
    public function editJawaban($id)
    {
        $jawaban = modelStack::Jawaban_findbyid($id);
        return view('edit_jawaban', compact('jawaban'));
    }
    
    public function updateJawaban($id,Request $request)
    {
        $jawaban = modelStack::UpdateJawaban($id,$request->all());
        return redirect('/home');
    }
    
    public function createJawaban($id)
    {
        $pertanyaan = modelStack::find_by_id($id);
        return view('form_jawaban', compact('pertanyaan'));
    }
    
    public function storePertanyaan(Request $request)
    {
        unset($request['_token']);
        // dd($request->all());
        $pertanyaan =   modelStack::savePertanyaan($request->all());
        return redirect('/home');
    }

    public function storeJawaban(Request $request)
    {
        unset($request['_token']);
        // dd($request->all());
        $id_pertanyaan = $request['pertanyaan_id'];
        $jawaban =   modelStack::saveJawaban($request->all());
        $redirect = "/jawaban/".$id_pertanyaan;
        // dd($redirect);
        return redirect($redirect);
    }


    public function destroyPertanyaan($id_delete)
    {
        $delete_pertanyaan =   modelStack::deletePertanyaan($id_delete);
        return redirect('/home');
    }

    public function destroyJawaban($id_delete)
    {
        $delete_jawaban  =   modelStack::deleteJawaban($id_delete);
        return redirect('/home');
    }

    public function deleteUser($id_delete)
    {
        $delete_user                =   modelStack::deleteUser($id_delete);
        return redirect('/');
    }
}
