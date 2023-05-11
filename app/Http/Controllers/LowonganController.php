<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\lowongan;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use RealRashid\SweetAlert\Facades\Alert;


class LowonganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if( Auth::user()->roles != 'ADMIN')
        {
        
        Alert::warning('Peringatan', 'Maaf Anda tidak punya akses');
        return back();
        }

        $data = DB::table('lowongans')->get();
        return view('pages.admin.lowongan.index',[
            'data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.lowongan.create');
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
        'id_lowongan' => 'required|string|max:16|unique:lowongans',
        'nama' => 'required|string|max:255',
        'dinas' => 'required|string|email|max:255|unique:lowongans',
        'waktu' => 'required|string|max:15',
        'keterangan' => 'required|string|confirmed|min:8',
        
        ]);

        $lowongan = $request->all();

        $lowongan = User::create([
        'id_lowongan' => $request->id,
        'nama' => $request->name,
        'dinas' => $request->email,
        'waktu' => $request->phone,
        'keterangan' => $request->text,
        
        ]);

        Alert::success('Berhasil', 'Lowongan baru ditambahkan');
        return redirect('admin/lowongan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        $lowongan = Lowongan::find($id);
        $lowongan->delete();

        Alert::success('Berhasil', 'Lowongan telah di hapus');
        return redirect('admin/lowongan');
    }
}