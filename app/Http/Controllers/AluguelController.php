<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AluguelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $linhas = Aluguel::get();

        return view('', ['linhas' => $linhas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('', ['acao'=>1]);
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

        $path = $request->file('imagem')->store('fotos', 'public');

        $dados['foto'] = $path;

        $reg = Aluguel::create($dados);

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
        $reg = Aluguel::find($id);

        return view('', ['reg' => $reg, 'acao' => 3]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $reg = Aluguel::find($id);

        return view('', ['reg' => $reg, 'acao' => 2]);
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

        $reg = Aluguel::find($id);

        if (isset($dados['imagem'])) {

          $path = $request->file('imagem')->store('fotos', 'public');

          $dados['foto'] = $path; 

          $antiga = $reg->foto;

          Storage::disk('public')->delete($antiga);  
        }

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
        $reg = Aluguel::find($id);

        $foto = $reg->foto;

        Storage::disk('public')->delete($foto);  

        if ($reg->delete()) {
            return redirect()->route('')
                   ->with('status', '');
        } else {
            return redirect()->route('')
                   ->with('status', '');
        }
    }   
}
