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
Route::group(['middleware'=>['language']], function() {
Route::get('lang.php {language}',[App\Http\Controllers\LangController::class, 'changeLanguage']);
Route::get('/', [App\Http\Controllers\HomeController::class, 'getIndex']);
Route::get('/contatti.php', [App\Http\Controllers\HomeController::class, 'getContatti']);
Route::get('/storia.php', [App\Http\Controllers\HomeController::class, 'getStoria']);
Route::get('/login.php', [App\Http\Controllers\HomeController::class, 'getLogin']);
Route::get('/hangoverAttoI.php', [App\Http\Controllers\HomeController::class, 'getHangoverI']);
Route::get('/hangoverAttoII.php', [App\Http\Controllers\HomeController::class, 'getHangoverII']);
Route::get('/hangoverAttoIII.php', [App\Http\Controllers\HomeController::class, 'getHangoverIII']);
Route::get('/hangoverAttoIV.php', [App\Http\Controllers\HomeController::class, 'getHangoverIV']);
Route::get('/hangoverAttoV.php', [App\Http\Controllers\HomeController::class, 'getHangoverV']);
Route::get('/hangoverAttoVI.php', [App\Http\Controllers\HomeController::class, 'getHangoverVI']);
Route::get('/FDFEI.php', [App\Http\Controllers\HomeController::class, 'getFDFEI']);
Route::get('/FDFE2.php', [App\Http\Controllers\HomeController::class, 'getFDFEII']);
Route::get('/carnival.php', [App\Http\Controllers\HomeController::class, 'getCarnival']);


Route::post('/login.php', [App\Http\Controllers\HomeController::class, 'login']);
Route::post('/register.php', [App\Http\Controllers\HomeController::class, 'registration']);
Route::get('/ajax.php', [App\Http\Controllers\HomeController::class, 'ajax_checkNomeUtente']);
});

Route::group(['middleware'=>['authCustom','language']], function() {
Route::get('/homePR.php', [App\Http\Controllers\PRController::class, 'getHome']);
Route::get('/anagraficaPR.php', [App\Http\Controllers\PRController::class, 'getAnagrafica']);
Route::get('/eventiPR.php', [App\Http\Controllers\PRController::class, 'getEventi']);
Route::get('/squadraPR.php', [App\Http\Controllers\PRController::class, 'getSquadra']);
Route::get('/squadraPR.php', [App\Http\Controllers\PRController::class, 'getSquadra']);

Route::get('/homeAdmin.php', [App\Http\Controllers\AdminController::class, 'index']);
Route::get('/eventiAdmin.php', [App\Http\Controllers\AdminController::class, 'getEventi']);
Route::get('/anagraficaAdmin.php', [App\Http\Controllers\AdminController::class, 'getAnagrafica']);
Route::get('/dettaglioEventoAdmin.php', [App\Http\Controllers\AdminController::class, 'getDettaglioEvento']);
Route::get('/dettaglioPromoterAdmin.php', [App\Http\Controllers\AdminController::class, 'getDettaglioPromoter']);
Route::get('/promoterAdmin.php', [App\Http\Controllers\AdminController::class, 'getPromoter']);
Route::get('/nuovoEventoAdmin.php', [App\Http\Controllers\AdminController::class, 'getnuovoEvento']);



Route::post('/salvaPrimoAccesso.php', [App\Http\Controllers\PRController::class, 'salvaPrimoAccesso']);

Route::get('/dettaglioEventoAdmin.php {nome}', [App\Http\Controllers\AdminController::class, 'getDettaglioEvento']);
Route::get('/abilitaEventoPromoter.php {evento}', [App\Http\Controllers\AdminController::class, 'getAbilitaEventoPromoter']);
Route::post('/dettaglioEventoAdmin.php {evento}', [App\Http\Controllers\AdminController::class, 'abilitaEventoPromoter']);

Route::get('/dettaglioPromoterAdmin.php {id}', [App\Http\Controllers\AdminController::class, 'getDettaglioPromoter']);

Route::get('/modificaInfoAdmin.php {parametro} {valParametro}', [App\Http\Controllers\AdminController::class, 'getModificaInfo']);
Route::post('/anagraficaAdmin.php {parametro}', [App\Http\Controllers\AdminController::class, 'modificaInfo']);

Route::post('/eventiAdmin.php', [App\Http\Controllers\AdminController::class, 'addNuovoEvento']);

Route::get('/modificaInfoPR.php {parametro} {valParametro}', [App\Http\Controllers\PRController::class, 'getModificaInfo']);
Route::post('/anagraficaPR.php {parametro}', [App\Http\Controllers\PRController::class, 'modificaInfo']);

Route::get('/homePR.php {idEvento} {idPr} {biglietti_venduti} {modifica}', [App\Http\Controllers\PRController::class, 'modificaVendite']);

Route::get('logout.php', [App\Http\Controllers\HomeController::class, 'logout']);



});