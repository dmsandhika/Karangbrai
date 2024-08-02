<?php

namespace App\Http\Controllers\Surat;

use Illuminate\Http\Request;
use App\Models\Surat\KuasaForm;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class KuasaFormController extends Controller
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
        $title='Form Surat Kuasa';
        return view('surat.form.kuasa',compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request){
        try {
            $request->validate([
                'nik' => 'required|numeric',
                'nama' => 'required|string|max:255',
                'ktp_pemberi' => 'required|file|mimes:jpg,png,jpeg,pdf|max:2048',
                'isi_kuasa' => 'required|string',
                'no' => 'required|string|max:15',
                'ktp_penerima' => 'required|file|mimes:jpg,png,jpeg,pdf|max:2048',
                'hubungan' => 'required|string|max:255'
            ]);

            $timestamp = now()->format('YmdHis');


            $ktp_pemberi = $request->file('ktp_pemberi');
            $ktpPemberiName = $timestamp . '_' . $ktp_pemberi->getClientOriginalName();
            $ktpPemberiPath = 'ktp/' . $ktpPemberiName;
            $ktp_pemberi->move(public_path('ktp'), $ktpPemberiName);
            
            $ktp_penerima = $request->file('ktp_penerima');
            $ktpPenerimaName = $timestamp . '_' . $ktp_penerima->getClientOriginalName();
            $ktpPenerimaPath = 'ktp/' . $ktpPenerimaName;
            $ktp_penerima->move(public_path('ktp'), $ktpPenerimaName);

            KuasaForm::create([
                'nik' => $request->input('nik'),
                'nama' => $request->input('nama'),
                'ktp_pemberi' => $ktpPemberiPath,
                'isi_kuasa' => $request->input('isi_kuasa'),
                'ktp_penerima' => $ktpPenerimaPath,
                'no' => $request->input('no'),
                'hubungan' => $request->input('hubungan'),
            ]);

            return redirect()->route('kuasa.create')->with('success', 'Formulir berhasil diajukan.');
        } catch (\Exception $e) {
            return redirect()->route('kuasa.create')->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
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
        $data = KuasaForm::find($id);
        $title = 'Detail Surat';
        
        
        return view('surat.submit.kuasa', compact('data', 'title'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'file' => 'nullable|file|mimes:pdf|max:5120',
            'note' => 'nullable|string',
            'status' => 'required|in:diajukan,selesai,ditolak'
        ]);
    
        $data = KuasaForm::find($id);
    
        $data->note = $request->note;
        $data->status = $request->status;
            
        
        if ($request->hasFile('file')) {
            // Hapus file lama jika ada
            if ($data->file && file_exists(public_path($data->file))) {
                unlink(public_path($data->file));
            }
    
            // Simpan file baru
            $file = $request->file('file');
            $timestamp = time();
            $fileName = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
            $fileExtension = $file->getClientOriginalExtension();
            $newFileName = $fileName . '_' . $timestamp . '.' . $fileExtension;
            $filePath = 'file/' . $newFileName;
            $file->move(public_path('file'), $newFileName);
            $data->file = $filePath;
        }
    
        // Simpan data formulir ke dalam basis data
        $data->save();
        
        // Redirect atau kembalikan respons sesuai kebutuhan
        return redirect()->route('admin.surat')->with('success', 'Surat Berhasil Ditindaklanjuti');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            // Temukan data berdasarkan ID
            $form = KuasaForm::findOrFail($id);

            

            $ktp_pemberi = public_path($form->ktp_pemberi);
            if (File::exists($ktp_pemberi)) {
                File::delete($ktp_pemberi);
            }
            $ktp_penerima = public_path($form->ktp_penerima);
            if (File::exists($ktp_penerima)) {
                File::delete($ktp_penerima);
            }
            $file = public_path($form->file);
            if (File::exists($file)) {
                File::delete($file);
            }

            // Hapus data dari database
            $form->delete();

            // Redirect dengan pesan sukses menggunakan SweetAlert2
            return redirect()->route('admin.surat')->with('success', 'Data berhasil dihapus.');
        } catch (\Exception $e) {
            // Log error
            Log::error('Error deleting belumnikah form: ' . $e->getMessage());

            // Redirect dengan pesan error menggunakan SweetAlert2
            return redirect()->route('admin.surat')->with('error', 'Terjadi kesalahan saat menghapus data.');
        }
    }
}