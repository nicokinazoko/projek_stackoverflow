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

    public function showJawaban()
    {
        $jawaban =   modelStack::getAllJawaban();
        return view('/items/jawabanView', compact('jawaban'));
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
    
    public function createJawaban()
    {
        return view('items/formJawaban');
    }
    
    public function storePertanyaan(Request $request)
    {
        unset($request['_token']);
        // dd($request->all());
        $pertanyaan =   modelStack::savePertanyaan($request->all());
        return redirect('/home');
    }


    public function deletePertanyaan($id_delete)
    {
        $delete_pertanyaan =   modelStack::deletePertanyaan($id_delete);
        return redirect('/home');
    }

    public function deleteJawaban($id_delete)
    {
        $delete_jawaban             =   modelStack::deleteJawaban($id_delete);
        return redirect('/');
    }

    public function deleteUser($id_delete)
    {
        $delete_user                =   modelStack::deleteUser($id_delete);
        return redirect('/');
    }
}
