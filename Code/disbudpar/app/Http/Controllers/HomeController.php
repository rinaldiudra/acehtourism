<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kabupaten;
use App\Destinasi;
use App\Pemandu;
use App\Souvenir;
use App\Hotel;
use App\Travel;
use App\Kuliner;

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
        $destinasi = Destinasi::count();
        $hotel = Hotel::count();
        $pemandu = Pemandu::count();
        $travel = Travel::count();
        $souvenir = Souvenir::count();
        $kuliner = Kuliner::count();
        return view('admin.dashboard',['destinasi'=>$destinasi, 'pemandu'=>$pemandu, 'hotel'=>$hotel, 'travel'=>$travel, 'souvenir'=>$souvenir, 'kuliner'=>$kuliner]);
    }
}
