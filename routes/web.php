<?php
use Illuminate\Http\Request;
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

/*Route::get('/', function () {
    return view('pages/home');
});*/
/*Route::post('procesandoimagen', function (Request $request) {
    // cache the file
    $file=$request->file('photo');

    //generate a new filename. gtClientOrignalExtension() for the file extension
    $filename='profile-photo-' . time() . '.' .$file->getClientOriginalExtension();


    //save to storage/app/photos as the new $filename
    $path=$file->storeAs('photos',$filename);

    dd($path);
});*/
/*Route::get('servicios', 'Controller@servicios');
Route::get('portafolio', 'Controller@portafolio');
Route::get('galeria', 'Controller@galeria');
Route::get('contacto', 'Controller@contacto');
Route::get('home', 'Controller@home');*/

//Route::resource('contacto','Controller');

