<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
 
 
class MahasiswaController extends Controller
{
	public function index()
	{
    	// mengambil data dari table pegawai
		$mahasiswa = DB::table('mahasiswa')->get();
 
    	// mengirim data pegawai ke view index
		return view('index',['mahasiswa' => $mahasiswa]);
 
	}
 
	// method untuk menampilkan view form tambah pegawai
	public function tambah()
	{
 
		// memanggil view tambah
		return view('tambah');
 
	}
 
	// method untuk insert data ke table pegawai
	public function store(Request $request)
	{
		// insert data ke table pegawai
		DB::table('mahasiswa')->insert([
			'nama_lengkap' => $request->nama,
			'jurusan' => $request->jurusan,
			'alamat' => $request->alamat,
			'agama' => $request->agama
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/mahasiswa');
 
	}
 
	// method untuk edit data pegawai
	public function edit($id)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$mahasiswa = DB::table('mahasiswa')->where('id',$id)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('edit',['mahasiswa' => $mahasiswa]);
 
	}
 
	// update data pegawai
	public function update(Request $request)
	{
		// update data pegawai
		DB::table('mahasiswa')->where('id',$request->id)->update([
			'nama_lengkap' => $request->nama,
			'jurusan' => $request->jurusan,
			'alamat' => $request->alamat,
			'agama' => $request->agama
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/mahasiswa');
	}
 
	// method untuk hapus data pegawai
	public function hapus($id)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('mahasiswa')->where('id',$id)->delete();
		
		// alihkan halaman ke halaman pegawai
		return redirect('/mahasiswa');
	}
}