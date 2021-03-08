<?php

namespace App\Http\Controllers\Laporan;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Profile;
use PDF;

class BarangController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('tgl_awal')) {
            $barang = Barang::with('suplier')->whereBetween('created_at', [request('tgl_awal'), request('tgl_akhir')])->get();
        }

        $pdf = PDF::loadView('laporan.profile.index', compact('profile'))->setPaper('a4', 'landscape');

        return $pdf->stream('laporan.profile.pdf');
    }
}