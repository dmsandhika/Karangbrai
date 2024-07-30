<?php

namespace App\Http\Controllers\Surat;

use Illuminate\Http\Request;
use App\Models\Surat\UsahaForm;
use App\Http\Controllers\Controller;

class UsahaFormController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title='Form Surat Keterangan Usaha';
        return view('surat.form.usaha',compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request){
        try {
            $request->validate([
                'nik' => 'required|string|max:16',
                'nama' => 'required|string|max:255',
                'usaha' => 'required|string|max:255',
                'tahun' => 'required|integer',
                'alamat' => 'required|string',
                'keperluan' => 'required|string|max:255',
                'ktp' => 'required|file|mimes:jpeg,png,jpg,pdf|max:2048',
                'no' => 'required|string|max:15',
            ]);

            $timestamp = now()->format('YmdHis');


            $ktp = $request->file('ktp');
            $ktpName = $timestamp . '_' . $ktp->getClientOriginalName();
            $ktpPath = 'ktp/' . $ktpName;
            $ktp->move(public_path('ktp'), $ktpName);

            UsahaForm::create([
                'nik' => $request->input('nik'),
                'nama' => $request->input('nama'),
                'usaha' => $request->input('usaha'),
                'tahun' => $request->input('tahun'),
                'alamat' => $request->input('alamat'),
                'keperluan' => $request->input('keperluan'),
                'no' => $request->input('no'),
                'ktp' => $ktpPath,
            ]);

            return redirect()->route('usaha.create')->with('success', 'Formulir berhasil diajukan.');
        } catch (\Exception $e) {
            return redirect()->route('usaha.create')->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }   

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}