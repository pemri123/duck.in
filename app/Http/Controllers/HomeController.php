<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


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
        $user = Auth::user();
        if ($user->role == 'admin'){
            return redirect('/admin');
        }elseif($user->role == 'peternak'){
            return redirect('/peternak');
        }else{
            return redirect('/dokter');
        }
    }
    public function admin(){
        $dokter = User::where('role', 'dokter')->get();
        $peternak = User::where('role', 'peternak')->get();

        // dd($peternak);

        return view ('admin.home', compact(['dokter', 'peternak']));
    }
    public function peternak(){
        return view ('peternak.home');
    }
    public function dokter(){
        return view ('dokter.home');
    }
}
