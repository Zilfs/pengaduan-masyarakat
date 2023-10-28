<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class MasyarakatController extends Controller
{
    public function index()
    {
        $data = Pengaduan::where('tanggal_pengaduan', Carbon::today())->get();
        return view('pages.masyarakat.index', [
            'data'=> $data,
        ]);
    }
}
