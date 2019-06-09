<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Via;

class ViaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('form_candidatas', ['acao'=>1]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dados = $request->all();

        $reg = Via::create($dados);

        if ($reg) {
            return redirect()->route('')
                   ->with('status', '');
        } else {
            return redirect()->route('')
                   ->with('status', '');
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
        $reg = Via::find($id);

        return view('');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $reg = Via::find($id);

        return view('');
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
        $dados = $request->all();

        $reg = Via::find($id);

        $alt = $reg->update($dados);

        if ($alt) {
            return redirect()->route('')
                   ->with('status', '');
        } else {
            return redirect()->route('')
                   ->with('status', '');
        }     
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reg = Via::find($id);

        if ($reg->delete()) {
            return redirect()->route('')
                   ->with('status', '');
        } else {
            return redirect()->route('')
                   ->with('status', '');
        }
    }
}
