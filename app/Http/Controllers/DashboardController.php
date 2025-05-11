<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fasilitas;
use App\Models\Dosen;
use App\Models\Kaprodi;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard', [
            'fasilitasCount' => Fasilitas::count(),
            'dosenCount' => Dosen::count(),
            'kaprodiCount' => Kaprodi::count()
        ]);
    }
}
