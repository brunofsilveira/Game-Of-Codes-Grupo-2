<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/usuario', function () {
    return view('usuario/usuario');
});

Route::get('/formulario', function () {
    return view('formulario');
});

Route::get('/ciclovias', function () {
    return view('usuario/ciclovias');
});

Route::get('/locais', function () {
    return view('usuario/locais');
});

Route::get('/informacoes', function () {
    return view('usuario/informacoes');
});

Route::get('/convenios', function () {
    return view('usuario/convenios');
});


Route::get('/admin', function() {
    return view('admin.index');
})->middleware('auth');

Route::prefix('admin')->group(function () {
    Route::resource('carros', 'Admin\CarroController');

    Route::get('/grafcarros', 'Admin\CarroController@grafico');

    Route::get('/rel', function() {
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadHTML('<h1>Teste Aula 29/05/2019</h1>');
        return $pdf->stream();    
    });
    
    Route::get('/relcarros', 'Admin\CarroController@relatorio');
    
    Route::resource('oficinas', 'Admin\OficinaController');

    Route::get('oficinasmarcas/{id}', 'Admin\OficinaController@marcas')
            ->name('oficinas.marcas');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('bicicletas', 'BicicletaController');

Route::get('/promocao', 'EmailController@enviaEmail');

Route::get('/clientes', function () {
    return view('admin.clientes_form');
});