<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'App\Http\Controllers\IndexController@index');


Route::get('home', function () {
    return view ('home');
});

Route::get('data_peminjam', 'App\Http\Controllers\DataPeminjamController@index');

Route::get('data_peminjam/create', 'App\Http\Controllers\DataPeminjamController@create')->name('data_peminjam.create');

Route::post('data_peminjam/store', 'App\Http\Controllers\DataPeminjamController@store')->name('data_peminjam.store');

Route::get('lihat_data_peminjam', 'App\Http\Controllers\PeminjamController@lihat_data_peminjam');

Route::get('data_peminjam/edit/{id}', 'App\Http\Controllers\DataPeminjamController@edit')->name('data_peminjam.edit');

Route::post('data_peminjam/update/{id}', 'App\Http\Controllers\DataPeminjamController@update')->name('data_peminjam.update');

Route::post('data_peminjam/delete/{id}', 'App\Http\Controllers\DataPeminjamController@destroy')->name('data_peminjam.destroy');

Route::get('coba_collection', 'App\Http\Controllers\DataPeminjamController@CobaCollection');

Route::get('collection_first', 'App\Http\Controllers\DataPeminjamController@collection_first');

Route::get('collection_last', 'App\Http\Controllers\DataPeminjamController@collection_last');

Route::get('collection_count', 'App\Http\Controllers\DataPeminjamController@collection_count');

Route::get('collection_take', 'App\Http\Controllers\DataPeminjamController@collection_take');

Route::get('collection_pluck', 'App\Http\Controllers\DataPeminjamController@collection_pluck');

Route::get('collection_where', 'App\Http\Controllers\DataPeminjamController@collection_where');

Route::get('collection_wherein', 'App\Http\Controllers\DataPeminjamController@collection_wherein');

Route::get('collection_toarray', 'App\Http\Controllers\DataPeminjamController@collection_toarray');

Route::get('collection_tojson', 'App\Http\Controllers\DataPeminjamController@collection_tojson');




// Route::get('biodata', function(){
//     return 'Nama : Vito <br> Nim : 43320011 <br> Alamat : Pedurungan, Semarang <br> Hobi : Turu';
// });

// Route::get('mahasiswa/{prodi}', function ($prodi) {
//     return 'Mahasiswa Program Studi : '.$prodi;
// });

// Route::get('mahasiswa2/{prodi?}', function ($prodi=null) {
//     if($prodi == null)
//         return "Data Program Studi Kosong";
//     return "Mahasiswa Program Studi : ".$prodi;
// });

// Route::get('mahasiswa3/{prodi?}', function ($prodi = "Teknologi Rekayasa Komputer") {
//     return 'Mahasiswa Prodi : '.$prodi;
// });

// Route::get('biodata2', function(){
//     return view('biodata2');
// });

// Route::group([], function(){
//     Route::get('/pertama', function(){
//         echo "route pertama";
//     });
//     Route::get('/kedua', function(){
//         echo "route kedua";
//     });
//     Route::get('/ketiga', function(){
//         echo "route ketiga";
//     });
// });

// Route::group(['prefix' => 'latihan'], function(){
//     Route::get('/satu', function(){
//         echo "Latihan 1";
//     });
//     Route::get('/dua', function(){
//         echo "Latihan 2";
//     });
//     Route::get('/tiga', function(){
//         echo "Latihan 3";
//     });
// });

// Route::group(array('prefix' =>'admin'), function(){
//     // url ke home
//     Route::get('/', function(){
//         return 'Halaman Home Admin';
//     });
//     // route ke input data buku
//     Route::get('posts', function(){
//         return 'Halaman Input Data Buku';
//     });
//     // route ke halaman menyimpan data
//     Route::get('posts/simpan', function(){
//         return 'Data Berhasil Disimpan';
//     });
// });

// Route::name('kuliah')->group(function(){
//     Route::get('Teknologi Rekayasa Komputer', function(){
//         return "Kuliah di Program Studi Teknologi Rekayasa Komputer";
//     });
// });