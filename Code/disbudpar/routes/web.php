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

// Route::get('/', function () {
//     return view('user.index');
// });

Route::get('/','PariwisataController@index');

Auth::routes();

Route::get('/getKabupaten', 'PariwisataController@getKabupaten');

//halaman dashboard
Route::get('/home', 'HomeController@index')->name('home');

//Halaman input Destinasi
Route::get('/inputdestinasi','PariwisataController@halamanInputDestinasi')->name('inputdestinasi');
Route::post('/inputdestinasi','PariwisataController@inputDestinasi')->name('inputdestinasi');

//Halaman input Pemandu
Route::get('/inputpemandu','PariwisataController@halamanInputPemandu')->name('inputpemandu');
Route::post('/inputpemandu','PariwisataController@inputPemandu')->name('inputpemandu');

//Halaman input Souvenir
Route::get('/inputsouvenir','PariwisataController@halamanInputSouvenir')->name('inputsouvenir');
Route::post('/inputsouvenir','PariwisataController@inputSouvenir')->name('inputsouvenir');

//Halaman input Hotel
Route::get('/inputhotel','PariwisataController@halamanInputHotel')->name('inputhotel');
Route::post('/inputhotel','PariwisataController@inputHotel')->name('inputhotel');

//Halaman input Travel
Route::get('/inputtravel','PariwisataController@halamanInputTravel')->name('inputtravel');
Route::post('/inputtravel','PariwisataController@inputTravel')->name('inputtravel');

//Halaman input Kuliner
Route::get('/inputkuliner','PariwisataController@halamanInputKuliner')->name('inputkuliner');
Route::post('/inputkuliner','PariwisataController@inputKuliner')->name('inputkuliner');

//Halaman Lihat Data Destinasi
Route::get('/datadestinasi','PariwisataController@halamanDataDestinasi')->name('datadestinasi');

//Halaman Lihat Data Pemandu
Route::get('/datapemandu','PariwisataController@halamanDataPemandu')->name('datapemandu');

//Halaman Lihat Data Souvenir
Route::get('/datasouvenir','PariwisataController@halamanDataSouvenir')->name('datasouvenir');

//Halaman Lihat Data Hotel
Route::get('/datahotel','PariwisataController@halamanDataHotel')->name('datahotel');

//Halaman Lihat Data Travel
Route::get('/datatravel','PariwisataController@halamanDataTravel')->name('datatravel');

//Halaman Lihat Data Kuliner
Route::get('/datakuliner','PariwisataController@halamanDataKuliner')->name('datakuliner');

//Halaman Edit Travel
Route::get('/updatetravel/{id}','PariwisataController@editTravel')->name('updatetravel');
Route::post('/updatetravel/{id}','PariwisataController@updateTravel')->name('updatetravel');

//Halaman Edit Destinasi
Route::get('/updatedestinasi/{id}','PariwisataController@editDestinasi')->name('updatedestinasi');
Route::post('/updatedestinasi/{id}','PariwisataController@updateDestinasi')->name('updatedestinasi');

//Halaman Edit Pemandu
Route::get('/updatepemandu/{id}','PariwisataController@editPemandu')->name('updatepemandu');
Route::post('/updatepemandu/{id}','PariwisataController@updatePemandu')->name('updatepemandu');

//Halaman Edit Hotel
Route::get('/updatehotel/{id}','PariwisataController@editHotel')->name('updatehotel');
Route::post('/updatehotel/{id}','PariwisataController@updateHotel')->name('updatehotel');

//Halaman Edit Souvenir
Route::get('/updatesouvenir/{id}','PariwisataController@editSouvenir')->name('updatesouvenir');
Route::post('/updatesouvenir/{id}','PariwisataController@updateSouvenir')->name('updatesouvenir');

//Halaman Edit Kuliner
Route::get('/updatekuliner/{id}','PariwisataController@editKuliner')->name('updatekuliner');
Route::post('/updatekuliner/{id}','PariwisataController@updateKuliner')->name('updatekuliner');

// Route::get('/editdestinasi/{id_destinasi}','PariwisataController@editDestinasi')->name('editdestinasi');
// //Route::post('/editdestinasi/{id_destinasi}','PariwisataController@editDataDestinasi')->name('editdestinasi');

// Route::patch('/{id_destinasi}', 'PariwisataController@updateDestinasi')->name('updateDestinasi');

// Route::delete('/{id_destinasi}', 'PariwisataController@delete')->name('delete');

//Hapus Data Destinasi
Route::get('/hapusdestinasi/{id}','PariwisataController@hapusDestinasi')->name('hapusdestinasi');

//Hapus Data Pemandu
Route::get('/hapuspemandu/{id}','PariwisataController@hapusPemandu')->name('hapuspemandu');

//Hapus Data Hotel
Route::get('/hapushotel/{id}','PariwisataController@hapusHotel')->name('hapushotel');

//Hapus Data Souvenir
Route::get('/hapussouvenir/{id}','PariwisataController@hapusSouvenir')->name('hapussouvenir');

//Hapus Data Jasa Travel
Route::get('/hapustravel/{id}','PariwisataController@hapusTravel')->name('hapustravel');

//Hapus Data Kuliner
Route::get('/hapuskuliner/{id}','PariwisataController@hapuskuliner')->name('hapuskuliner');

//Halaman User 
//Destinasi
Route::get('/destinasiwisata','PariwisataController@halamanDestinasi')->name('destinasiwisata');
Route::get('/lihatdestinasi/{id}','PariwisataController@lihatDestinasi');

//Pemandu
Route::get('/pemanduwisata','PariwisataController@halamanPemandu')->name('pemanduwisata');
Route::get('/lihatpemandu/{id}','PariwisataController@lihatPemandu');

//Souvenir
Route::get('/souvenir','PariwisataController@halamanSouvenir')->name('souvenir');
Route::get('/lihatsouvenir/{id}','PariwisataController@lihatSouvenir');

//Hotel
Route::get('/hotel','PariwisataController@halamanHotel')->name('hotel');
Route::get('/lihathotel/{id}','PariwisataController@lihatHotel');

//Travel
Route::get('/travel','PariwisataController@halamanTravel')->name('travel');
Route::get('/lihattravel/{id}','PariwisataController@lihatTravel');

//Kuliner
Route::get('/kuliner','PariwisataController@halamanKuliner')->name('kuliner');
Route::get('/lihatkuliner/{id}','PariwisataController@lihatKuliner');