<?php

namespace App\Http\Controllers;

use App\Models\matakuliah;
use Illuminate\Http\Request;

class matakuliahController extends Controller
{
    public function index()
    {
        $data = matakuliah::all();
        return view('matakuliah.index', compact('data'));
    }

    public function store(Request $request)
    {
        matakuliah::create($request->only('matkul', 'deskripsi'));
        return redirect()->back();
    }
}