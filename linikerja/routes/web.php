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

/*Route::get('/', function () {
    return view('welcome');
});
*/
/*Route::get('/index', function () {
    return view('index');
});

Route::get('/home_user', function () {
    return view('home_user');
});

Route::get('/daftar_lowongan', function () {
    return view('daftar_lowongan');
});

Route::get('/register', function () {
    return view('auth/register');
});

Route::get('/login', function () {
    return view('auth/login');
});
*/
//Route::get('/home_user', 'User@index');
Route::get('/index', function () {
    return view('index');
});

Route::get('/',function(){
    if (Session::get('id') == '') {
        return redirect('dashboard');
    } else {
        return redirect('login');
    }    
});
Route::get('/login', 'User@login')->name('login');
Route::post('/loginPost', 'User@loginPost');

Route::get('/register', 'User@register');
Route::post('/registerPost', 'User@registerPost');

Route::get('/dashboard', 'User@dashboard');

Route::get('/viewlowongan', 'BuatLowongan@viewlowongan');
Route::get('/detaillowongan', 'BuatLowongan@detaillowongan');


// Lowongan
Route::get('/lowongan', 'Lowongan@viewData');
Route::get('/detailLowongan', 'Lowongan@viewDataDetail');
Route::get('/addLowongan', 'Lowongan@openFormAddData');
Route::post('/sendAddLowongan', 'Lowongan@insertData');
Route::get('/editLowongan', 'Lowongan@openFormData');
Route::post('/sendEditLowongan', 'Lowongan@updateData');


// Profil
Route::get('/myProfile', 'Profil@viewData');
Route::get('/editProfile', 'Profil@openFormData');
Route::post('/sendEditProfile', 'Profil@updateData');
Route::post('/sendEditPhoto', 'Profil@updatePhoto');
Route::get('/legality', 'Profil@legality');
Route::post('/postLegality', 'Profil@postLegality');


//DSS
Route::post('/sendPelamar', 'Bobot@sendPelamar');
Route::post('/endDSS', 'Bobot@endDSS');


//User
Route::get('/accLogOut', 'User@accLogOut');
Route::get('/checkEmail', 'User@openCheckEmail');
Route::post('/sendEmailReq', 'User@sendEmailReq');
Route::get('/forget', 'User@openForgetPass');
Route::post('/sendForgetPass', 'User@updatePass');

/*Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/getDataUser','User@getDataUser');

Auth::routes();
Route::middleware('login_api')->group(function(){
    Route::get('/home_user', 'User@home_user')->name('home_user');
    Route::get('/logout_api', 'User@logout');
});


// Route::get('/search_perusahaan',function(){
//     return view('search_perusahaan');
// });
 Route::get('/search_perusahaan', 'search@searchp');
 Route::get('/cari', 'search@searchPerusahaan');

 Route::get('/list_pelamar', 'listpelamar@index');
 Route::get('/caripelamar', 'listpelamar@show');
 
  Route::get('/dss', 'Bobot@isi_bobot');
  Route::post('/bobotPost', 'Bobot@bobotPost');
  Route::get('/resultdss', 'Bobot@resultdss');


//Administrator
Route::get('/admin', 'Administrator@openFormData');
Route::post('/adminSignIn', 'Administrator@accSignIn');


Route::get('/adminDashboard', 'Administrator@dashboard');

Route::get('/adminPerusahaan', 'Administrator@perusahaan');
Route::get('/adminSertifikat', 'Administrator@sertifikat');
Route::get('/adminNilai', 'Administrator@nilai');
Route::get('/adminPengalaman', 'Administrator@pengalaman');

Route::get('/adminSertifikatAll', 'Administrator@sertifikatAll');
Route::get('/adminNilaiAll', 'Administrator@nilaiAll');
Route::get('/adminPengalamanAll', 'Administrator@pengalamanAll');

Route::post('/postVerify', 'Administrator@postVerify');