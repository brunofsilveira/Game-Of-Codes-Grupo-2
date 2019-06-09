<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bicicleta;

class BicicletaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $dados = Bicicleta::paginate(3);


        return view('usuario/bicicletas_list', ['bicicletas'=>$dados]);    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('usuario/bicicletas_form', ['acao' => 1]);
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
         // obtém todos os campos vindos do form
         $dados = $request->all();

         // se o usuário informou a foto e a imagem foi corretamente enviada
         $path = $request->file('foto')->store('storage','public');
             
        $dados['foto'] = $path;
 
         $inc = Bicicleta::create($dados);
 
         if ($inc) {
             return redirect()->route('bicicletas.index')
                  ->with('status', $request->chassi . ' inserido com sucesso');
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
         // posiciona no registro a ser alterado e obtém seus dados
         $reg = Bicicleta::find($id);
         
         return view('usuario.bicicletas_form', ['reg' => $reg, 'acao' => 2]);
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
        // obtém os dados do form
        $dados = $request->all();

        // posiciona no registo a ser alterado
        $reg = Bicicleta::find($id);


            $path = $request->file('foto')->store('fotos','storage');
            
            $dados['foto'] = $path;

        // realiza a alteração
        $alt = $reg->update($dados);

        if ($alt) {
            return redirect()->route('bicicletas.index')
                            ->with('status', $request->chassi . ' Alterado!');
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
        //
        $bicicleta = Bicicleta::find($id);
        if ($bicicleta->delete()) {
            return redirect()->route('bicicletas.index')
                            ->with('status', $bicicleta->chassi . ' Excluído!');
        }
    }
}
