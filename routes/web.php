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
/*
Route::get('/', function () {
    return view('welcome');
});


Route::get('/', 'ProductosController@index');
*/

Route::bind('producto', function($idproducto){
    return App\Producto::where('idproducto', $idproducto)->first();
});

Route::get('/', [
    'as'    => 'inicio',
    'uses'  => 'ProductosController@index'
]);


Route::get('detalles/{idproducto}', [
    'as'    => 'producto-detalles',
    'uses'  => 'ProductosController@show'
]);

Route::get('carritoShow',[
    'as'    => 'carrito',
    'uses'  => 'CarritoController@show'
]);

Route::get('carrito/agregar/{producto}',[
    'as'    => 'carrito-agregar',
    'uses'  => 'CarritoController@add'
])->middleware('auth');

Route::get('carrito/borrar/{producto}',[
    'as'    => 'carrito-borrar',
    'uses'  => 'CarritoController@delete'
]);

Route::get('carrito/actualizar/{producto}/{cantidad?}',[
    'as'    => 'carrito-actualizar',
    'uses'  => 'CarritoController@update'
]);

Route::get('orden-detalles',[
    'as'=>'orden-detalles',
    'uses'=>'CarritoController@ordenDetalles'
])->middleware('auth');

Route::get('payment', array(
    'as' => 'payment',
    'uses' => 'PaypalController@postPayment',
));

Route::get('payment/status', array(
    'as' => 'payment.status',
    'uses' => 'PaypalController@getPaymentStatus',
));

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('categorias', 'Admin\CategoriasController');
Route::get('/categorias/delete/{id}', 'admin\CategoriasController@destroy')->name("deleteCat");
Route::resource('productos', 'Admin\ProductosController');
Route::get('/productos/delete/{id}', 'admin\ProductosController@destroy')->name("delete");

Route::resource('users', 'Admin\UsersController');
Route::get('/users/delete/{id}', 'admin\UsersController@destroy')->name("deleteUser");

Route::resource('pedidos','Admin\PedidoController');


//Creando una ruta para una vista de home back
Route::get('back', function(){
    return view('admin.home');
});