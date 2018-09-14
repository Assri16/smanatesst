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
    return view('welcome');
});
Route::resource('mapel','MapelController');
Route::resource('kelas','KelasController');
Route::resource('soal','BanksoalController');
Route::post('datatable/soal','BanksoalController@index');
Route::get('soal/jawaban/{id}','BanksoalController@addjawaban');
Route::post('soal/jawaban','BanksoalController@createjawaban');
Route::resource('ujian','UjianController');
Route::get('ujian/soal/{id}','UjianController@managesoal');
Route::post('ujian/soal','UjianController@addsoal');
Route::resource('kelas_mapel_guru','KelasGuruController');
Route::resource('ujiansiswa','ujiansiswaController');
Route::post('ujiansiswa/do_ikut_ujian', [
		'as'	=> 'backend.siswaujian.do_ikut_ujian',
		'uses'	=> 'UjiansiswaController@do_ikut_ujian',
	]);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
