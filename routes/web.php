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
Route::get('/', function () {return view('welcome');});
Route::get('/welcom', function () {return view('welcome2');});
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/patients', [App\Http\Controllers\PatientController::class, 'index'])->name('patients');
Route::post('/patients/store',[PatientController::class,'store']);
Route::resource('patients','App\Http\Controllers\PatientController');
Route::post('index', [App\Http\Controllers\PatientController::class, 'show'])->name('show');
Route::post('index', [App\Http\Controllers\PatientController::class, 'index'])->name('edit');
Route::post('index', [App\Http\Controllers\PatientController::class, 'destroy'])->name('destroy');
use App\Http\Controllers\RendezvousController;
//fullcalender
Route::post('calendar-crud-ajax', [App\Http\Controllers\CalenderController::class, 'calendarEvents']);
Route::get('/rendez-vous',[App\Http\Controllers\RendezvousController::class,'index']);
Route::get('/rendez-vous/add',[App\Http\Controllers\RendezvousController::class,'add']);
Route::post('/rendez-vous/create',[App\Http\Controllers\RendezvousController::class,'create']);
Route::resource('rendez-vous','App\Http\Controllers\RendezvousController');
Route::post('/rendez-vous/update',[App\Http\Controllers\RendezvousController::class,'update']);
Route::post('/rendez-vous/delete',[App\Http\Controllers\RendezvousController::class,'destroy']);
Route::get('/historique', [App\Http\Controllers\HistoriqueController::class, 'index'])->name('historique');
Route::post('/historique/store',[App\Http\Controllers\HistoriqueController::class,'store']);
Route::resource('historique','App\Http\Controllers\HistoriqueController');
Route::post('index', [App\Http\Controllers\HistoriqueController::class, 'destroy'])->name('destroy');
Route::get('/historique/create', [App\Http\Controllers\HistoriqueController::class, 'create']);
Route::post('index', [App\Http\Controllers\HistoriqueController::class, 'show'])->name('show');
Route::post('index', [App\Http\Controllers\HistoriqueController::class, 'edit'])->name('edit');
Route::get('/Certif', [App\Http\Controllers\CertifController::class, 'index']);
Route::resource('Certif','App\Http\Controllers\CertifController');
Route::post('/Certif/store',[App\Http\Controllers\CertifController::class,'store']);
Route::post('/patients/store',[App\Http\Controllers\PatientController::class,'store']);
Route::resource('patients','App\Http\Controllers\PatientController');
Route::post('index', [App\Http\Controllers\PatientController::class, 'show'])->name('show');
Route::post('index', [App\Http\Controllers\PatientController::class, 'edit'])->name('edit');
Route::post('index', [App\Http\Controllers\PatientController::class, 'destroy'])->name('destroy');
Route::get('/add-ordonnance',[App\Http\Controllers\ordController::class,'addordonnance'])->name('ordonnance.add');
Route::post('/add-ordonnance',[App\Http\Controllers\ordController::class,'saveordonnance'])->name('save.ordonnance'); 
Route::post('/update-ord',[App\Http\Controllers\ordController::class,'updateord'])->name('update.ord');
Route::post('/saveordonnance',[App\Http\Controllers\ordController::class,'saveordonnance']);
Route::post('/ord-list',[App\Http\Controllers\ordController::class,'editord'])->name('editord');
Route::get('/ord-list',[App\Http\Controllers\ordController::class,'ordList'])->name('ord.add');
Route::post('/ord-list', [App\Http\Controllers\ordController::class, 'dest'])->name('dest');