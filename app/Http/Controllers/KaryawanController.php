<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Karyawan;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexkaryawan()
    {
        $data = Karyawan::paginate(5);
        return view('admin/karyawan/index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createkaryawan()
    {
        return view('admin/karyawan/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storekaryawan(Request $request)
    {
        $data = Karyawan::create($request->all());
        $data->save();

        return redirect()->route('karyawankantor.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showkaryawan($id)
    {
        $data = Karyawan::findOrFail($id);
        return view('admin/karyawan/show', compact('data'));
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
    public function updatekaryawan(Request $request, $id)
    {
        $karyawan = Karyawan::findOrFail($id);
        $data = $request->except(['_token']);
        $karyawan->update($data);

        return redirect()->route('karyawankantor.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroykaryawan($id)
    {
        $data = Karyawan::findOrFail($id);
        $data->delete();

        return redirect()->route('karyawankantor.index');
    }
}
