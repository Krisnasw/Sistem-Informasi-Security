<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Validator;
use Alert;
use App\Laporan;

class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Laporan::orderBy('id','asc')->paginate(10);
        return view('laporan.laporan')->with('lap', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validator = Validator::make(
            Input::all(), array(
                'gundulmu' => 'required',
                'tanggal' => 'required',
                'judul' => 'required',
                'ket' => 'required'
            )
        );
        
        if ($validator->passes())
        {
            $lap = new Laporan();
            $lap->pelapor = Input::get('gundulmu');
            $lap->waktu = Input::get('tanggal');
            $lap->judul = Input::get('judul');
            $lap->keterangan = Input::get('ket');
            $lap->save();
            
            alert()->success('Tambah Laporan Berhasil', 'Sukses');
            return redirect('/usr/addlap');
        } else {
            alert()->error('Gagal Tambah Laporan', 'Error');
            return redirect('/usr/addlap');
        }
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
        //
        $blog = Laporan::findOrFail($id);
        $blog->delete();

        alert()->success('Laporan Berhasil Dihapus', 'Success');
        return redirect('/usr/lap');
    }
}
