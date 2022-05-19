<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengeluaran;

class PengeluaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexpengeluaran()
    {
        $data = Pengeluaran::paginate(5);
        return view('admin/pengeluaran/index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createpengeluaran()
    {
        return view('admin/pengeluaran/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storepengeluaran(Request $request)
    {
        $data = Pengeluaran::create($request->all());
        $data->save();

        return redirect()->route('pengeluarankantor.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showpengeluaran($id)
    {
        $data = Pengeluaran::findOrFail($id);
        return view('admin/pengeluaran/show', compact('data'));
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
    public function updatepengeluaran(Request $request, $id)
    {
        $pengeluaran = Pengeluaran::findOrFail($id);
        $data = $request->except(['_token']);
        $pengeluaran->update($data);

        return redirect()->route('pengeluarankantor.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroypengeluaran($id)
    {
        $data = Pengeluaran::findOrFail($id);
        $data->delete();

        return redirect()->route('pengeluarankantor.index');
    }
}
