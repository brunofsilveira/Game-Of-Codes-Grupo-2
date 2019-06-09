<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Carro;
use App\Marca;

class CarroController extends Controller
{

//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // se não autenticado
//        if(!Auth::check()) {
//            return redirect("/home");
//        }

//        $dados = Carro::all();
        $dados = Carro::paginate(3);

        $soma = Carro::sum('preco');     // obtém a soma do campo preço

        $numCarros = Carro::count('id');    // obtém o número de registros

        return view('admin.carros_list', ['carros'=>$dados, 
                                          'soma'=>$soma,
                                          'numCarros'=>$numCarros]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $marcas = Marca::orderBy('nome')->get();

        $combustiveis = Carro::combust();

        return view('admin.carros_form', ['marcas' => $marcas, 'acao' => 1,
                                          'comb' => $combustiveis]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // obtém todos os campos vindos do form
        $dados = $request->all();

        // se o usuário informou a foto e a imagem foi corretamente enviada
        if ($request->hasFile('foto') && $request->file('foto')->isValid()) {
            $path = $request->file('foto')->store('fotos');
            
            $dados['foto'] = $path;
        }

        $inc = Carro::create($dados);

        if ($inc) {
            return redirect()->route('carros.index')
                 ->with('status', $request->modelo . ' inserido com sucesso');
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
        // posiciona no registro a ser alterado e obtém seus dados
        $reg = Carro::find($id);

        $marcas = Marca::orderBy('nome')->get();

        $combustiveis = Carro::combust();
        
        return view('admin.carros_form', ['reg' => $reg, 'marcas' => $marcas, 
                                          'acao' => 2,
                                          'comb' => $combustiveis]);
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
        // obtém os dados do form
        $dados = $request->all();

        // posiciona no registo a ser alterado
        $reg = Carro::find($id);

        // se o usuário informou a foto e a imagem foi corretamente enviada
        if ($request->hasFile('foto') && $request->file('foto')->isValid()) {

            if (Storage::exists($reg->foto)) {
                Storage::delete($reg->foto);
            }

            $path = $request->file('foto')->store('fotos');
            
            $dados['foto'] = $path;
        }

        // realiza a alteração
        $alt = $reg->update($dados);

        if ($alt) {
            return redirect()->route('carros.index')
                            ->with('status', $request->modelo . ' Alterado!');
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
        $car = Carro::find($id);
        if ($car->delete()) {
            return redirect()->route('carros.index')
                            ->with('status', $car->modelo . ' Excluído!');
        }
    }

    public function grafico() {
        $carros = Carro::selectRaw('marcas.nome as marca, count(*) as num')
                          ->join('marcas', 'carros.marca_id', '=', 'marcas.id')
                          ->groupBy('marca')
                          ->get();         
    
        return view('admin.carros_graf', ['carros' => $carros]);
      }
    
    public function relatorio() {
        $carros = Carro::orderBy('modelo')->get();
    
        return \PDF::loadView('admin.relcarros', ['carros'=>$carros])
                     ->stream();
    }
    
}
