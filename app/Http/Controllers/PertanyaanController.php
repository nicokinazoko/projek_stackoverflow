<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pertanyaan;
use Illuminate\Support\Facades\DB;

class PertanyaanController extends Controller
{
    public function __construct(){
        $this->middleware('auth',['except'=>'index']);
    }
   
    public function index()
    {
        /*  dd(DB::table('pertanyaan')
        ->leftjoin('poin','pertanyaan.id','=','poin.pertanyaan_id')
        ->select('pertanyaan.user_id','judul','isi','tag','downvote','upvote')
        ->get()); */
        return view('blank');
    }

    public function create()
    {
        
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        return 'show';
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
