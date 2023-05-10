<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengaduan;
use App\Models\Tanggapan;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;
use File;
use PDF;

class MasyarakatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user()->nim;
        // dd($user);

        return view('pages.masyarakat.index', ['liat' => $user]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.masyarakat.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'dinas' => 'required',
            'nama' => 'required',
            'nim' => 'required',
            'kampus' => 'required',
            'jurusan' => 'required',
            'jenjang' => 'required',
            'whatsapp' => 'required',
            'email' => 'required',
            'mulai' => 'required',
            'selesai' => 'required',
            'file' => 'required',
        ]);

        $nim = Auth::user()->nim;
        $id = Auth::user()->id;
        $name = Auth::user()->name;

        $data = $request->all();
        $data['user_nim'] = $nim;
        $data['user_id'] = $id;
        $data['name'] = $name;
        $data['file'] = $request->file('file')->store('assets/laporan', 'public');



        Alert::success('Berhasil', 'Pengajuan terkirim');
        Pengaduan::create($data);
        return redirect('user/pengaduan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function lihat()
    {


        $user = Auth::user()->pengaduan()->orderBy('created_at', 'DESC')->get();

        return view('pages.masyarakat.detail', [
            'items' => $user
        ]);
    }

    public function show($id)
    {
        $item = Pengaduan::with([
            'details', 'user'
        ])->findOrFail($id);

        $tangap = Tanggapan::where('pengaduan_id', $id)->first();

        return view('pages.masyarakat.show', [
            'item' => $item,
            'tangap' => $tangap
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }





    public function laporan()
    {

        $pengaduan = Pengaduan::orderBy('created_at', 'DESC')->get();

        return view('pages.masyarakat.laporan', [
            'pengaduan' => $pengaduan
        ]);
    }

    public function cetak()
    {

        $pengaduan = Pengaduan::orderBy('created_at', 'DESC')->get();

        $pdf = PDF::loadview('pages.masyarakat.pengaduan', [
            'pengaduan' => $pengaduan
        ]);
        return $pdf->download('surat.pdf');
    }

    public function pdf($id)
    {

        $pengaduan = Pengaduan::find($id);

        $pdf = PDF::loadview('pages.masyarakat.pengaduan.cetak', compact('pengaduan'))->setPaper('a4');
        return $pdf->download('surat-pengajuan.pdf');
    }
}