<?php

namespace App\Http\Controllers;

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
        switch ($user->role) {
            case 'siswa':
                return redirect()->route('siswa.home');
                break;
            case 'guru':
                return redirect()->route('manage.dashboard');
                break;
            case 'admin':
                return redirect()->route('manage.dashboard');
                break;
            default:
                abort(404,'INVALID ROLE');
                break;
        }
        return view('home');
    }
}
