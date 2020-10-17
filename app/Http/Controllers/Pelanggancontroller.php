<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\customer;
class Pelanggancontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $keyword = $request->get('keyword');   
         $pelanggans = customer::all();
        
        if ($keyword) {
            $pelanggans = customer::where("nama","LIKE","%$keyword%")->get();
        }

         return view('pesawat.index', ['pelanggans' => $pelanggans]);  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pesawat.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pelanggans = new customer ([
            'id'=> $request-> input('id'),
            'nama'=> $request-> input('nama'),
            'pemberangkatan'=> $request-> input('pemberangkatan'),
            'arrive'=> $request-> input('arrive'),
            'maskapai'=> $request-> input('maskapai')

        ]);
        $pelanggans->save();
        return redirect('/customer');
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
        $pelanggans = customer::find($id);
        return view('pesawat.edit', compact('pelanggans')); 
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
        $pelanggans = customer::find($id);
        $pelanggans->id = $request->input('id');
        $pelanggans->nama = $request->input('nama');
        $pelanggans->pemberangkatan = $request->input('pemberangkatan');
        $pelanggans->arrive = $request->input('arrive');
        $pelanggans->maskapai = $request->input('maskapai');
        $pelanggans->save();
        return redirect('/customer');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pelanggans = customer::find($id);
        $pelanggans -> delete();
        return redirect('/customer');
    }
}
