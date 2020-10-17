<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
class Admincontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $keyword = $request->get('keyword');   
        $admins = admin::all();
       
       if ($keyword) {
           $admins = admin::where("nm_admin","LIKE","%$keyword%")->get();
       }

        return view('admin.admin', ['admins' => $admins]);  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $admins = new admin ([
            'id'=> $request-> input('id'),
            'nm_admin'=> $request-> input('nm_admin'),
            'callnumber'=> $request-> input('callnumber')

        ]);
        $admins->save();
        return redirect('/admin');
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
        $admins = Admin::find($id);
        return view('admin.edit', compact('admins')); 
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
        $admins = admin::find($id);
        $admins->id = $request->input('id');
        $admins->nm_admin = $request->input('nm_admin');
        $admins->callnumber = $request->input('callnumber');
        $admins->save();
        return redirect('/admin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $admins = admin::find($id);
        $admins -> delete();
        return redirect('/admin');
    }
}
