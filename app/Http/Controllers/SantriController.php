<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Pengguna;
use App\Asal;
use PDF;
use RealRashid\SweetAlert\Facades\Alert;
use Validator, Redirect, Response, File;
use App\Exports\SantriExport;
use Maatwebsite\Excel\Facades\Excel;

class SantriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (session('success_message')) {
            Alert::success('Berhasil  ', session('success_message'));
        };
        $santri = DB::table('pengguna')
            ->join('kategori', 'pengguna.kategori_id', '=', 'kategori.id')
            ->join('asal', 'pengguna.asal_id', '=', 'asal.id')
            ->select('pengguna.*', 'pengguna.id', 'pengguna.nokk', 'pengguna.nama', 'asal.nama AS asal', 'kategori.nama AS kategori', 'pengguna.kelas', 'pengguna.foto')->get();

        return view('pengguna.index', compact('santri'));
    }

    public function cetakpdf()
    {
        $santri = Pengguna::all();
        $pdf = PDF::loadview('pengguna.cetakpdf', compact('santri'));
        return $pdf->stream('datasantri.pdf');
    }

    public function export()
    {
        return Excel::download(new SantriExport, 'santri.xlsx');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('santri.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (session('success_message')) {
            Alert::success('Berhasil  ', session('success_message'));
        };

        if (!empty(request()->foto)) {
            request()->validate(['foto' => 'image|mimes:jpeg,png,jpg|max:2048',]);
            $namaFile = time() . '.' . request()->foto->extension();
            request()->foto->move(public_path('img'), $namaFile);
        } else {
            $namaFile = null;
        }

        DB::table('pengguna')->insert(
            [
                'nis' => $request->nis,
                'nama' => $request->nama,
                'tmp_lahir' => $request->tempat,
                'tgl_lahir' => $request->tanggal,
                'asal_id' => $request->asal,
                'kategori_id' => $request->kategori,
                'kelas' => $request->kelas,
                'alamat' => $request->alamat,
                'hp' => $request->hp,
                'email' => $request->email,
                'foto' => $namaFile
            ]
        );

        return redirect('/santri')->withSuccessMessage('Data Berhasil Dimasukkan');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $santri = Pengguna::find($id);
        return view('santri.show', compact('santri'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $santri = Pengguna::where('id', $id)->get();
        return view('santri/edit', compact('santri'));
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

        $gambar2 = Pengguna::where('id', $id)->first();

        if (!empty(request()->foto)) {
            request()->validate(['foto' => 'image|mimes:jpeg,png,jpg|max:2048',]);
            $namaFile = time() . '.' . request()->foto->extension();
            request()->foto->move(public_path('img'), $namaFile);
        } else {
            $namaFile = $gambar2->foto;
        }

        DB::table('pengguna')->where('id', $id)->update([
            'nis' => $request->nis,
            'nama' => $request->nama,
            'tmp_lahir' => $request->tempat,
            'tgl_lahir' => $request->tanggal,
            'asal_id' => $request->asal,
            'kategori_id' => $request->kategori,
            'kelas' => $request->kelas,
            'alamat' => $request->alamat,
            'hp' => $request->hp,
            'email' => $request->email,
            'foto' => $namaFile
        ]);
        return redirect('/santri')->with('suksesedit', 'Data Berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('pengguna')->where('id', $id)->delete();
        return redirect('/santri')->with('sukses', 'Data berhasil dihapus');
    }
}
