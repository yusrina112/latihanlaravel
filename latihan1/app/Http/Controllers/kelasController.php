<?php

namespace App\Http\Controllers;
use App\Models\kelas;
use Illuminate\Http\Request;

class kelasController extends Controller
{
    public function index()
    {
        $data = kelas::all();
        return view('kelas.index', compact('data'));
    }

    public function store(Request $request)
    {
        kelas::create($request->only('nama_kelas', 'kapasitas'));
        return redirect()->back();
    }
}
