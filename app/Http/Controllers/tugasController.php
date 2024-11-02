<?php

namespace App\Http\Controllers;

use App\Models\tugasModel;
use Illuminate\Http\Request;

class tugasController extends Controller
{

    public function create(){
        return view('tugas.create');
    }

    public function edit(){
        return view('tugas.edit');
    }

    // Fungsi untuk menampilkan semua data pegawai
    public function index()
    {
        // Mengambil semua data dari model PegawaiModel
        $data = tugasModel::all();
        // Mengirimkan data ke view 'Pegawai.Index' dengan variabel 'data'
        return view('tugas.index')->with('data', $data);
    }

    // Fungsi untuk membuat atau menyimpan data pegawai baru
    public function createdata(Request $request)
    {
        // Membuat instance baru dari model PegawaiModel
        $data = new tugasModel();
        // Mengambil nilai dari input form dan mengisi kolom pada model
        $data->nama = $request->input('nama');
        $data->nip = $request->input('nip');
        $data->alamat = $request->input('alamat');
        // Menyimpan data ke dalam database
        $data->save();
        // Setelah menyimpan, redirect ke route yang menampilkan semua data pegawai
        return redirect()->route('createDataPegawai');
    }

    // Fungsi untuk mendapatkan data pegawai berdasarkan ID untuk keperluan edit
    public function getDataById($id)
    {
        // Mengambil satu data pegawai berdasarkan ID
        $data = tugasModel::where('id', $id)->first();
        // Mengirimkan data ke view 'Pegawai.edit' untuk ditampilkan di form edit
        return view('tugas.edit')->with('data', $data);
    }

    // Fungsi untuk mengupdate data pegawai berdasarkan ID
    public function updateData(Request $request, $id)
    {
        // Mengambil data pegawai berdasarkan ID
        $data = tugasModel::where('id', $id)->first();
        // Mengambil inputan baru dari form dan mengupdate data pada model
        $data->nama = $request->input('nama');
        $data->nip = $request->input('nip');
        $data->alamat = $request->input('alamat');
        // Menyimpan perubahan data ke dalam database
        $data->save();
        // Setelah data berhasil diupdate, redirect ke halaman yang menampilkan semua data pegawai
        return redirect()->route('getalldataPegawai');
    }

    // Fungsi untuk menghapus data pegawai berdasarkan ID
    public function deleteData($id)
    {
        // Mengambil data pegawai berdasarkan ID
        $data = tugasModel::where('id', $id)->first();
        // Menghapus data pegawai dari database
        $data->delete();
        // Setelah penghapusan, redirect ke halaman yang menampilkan semua data pegawai
        return redirect()->route('getalldataPegawai');
    }
}
