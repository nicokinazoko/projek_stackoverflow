<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\modelStack;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $pertanyaan =   modelStack::getAllPertanyaan();
        return view('home', compact('pertanyaan'));
    }
}
