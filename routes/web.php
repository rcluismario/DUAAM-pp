<?php

use App\Http\Controllers\Admin\AdminsController;
use App\Http\Controllers\Admin\CounterController;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\DonationController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\TreeController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\WebController;
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

Route::get('/', [WebController::class, 'home'])->name('home');

Route::get('/quienes-somos', [WebController::class, 'about_us'])->name('about_us');

Route::get('/nuestro-equipo', [WebController::class, 'our_team'])->name('our_team');

Route::get('/sostenibilidad', [WebController::class, 'sustainability'])->name('sustainability');

Route::get('/transparencia', [WebController::class, 'transparency'])->name('transparency');

Route::get('/tu-arbolito', [WebController::class, 'your_tree'])->name('your_tree');

Route::get('/contador', [WebController::class, 'counter'])->name('counter');
Route::get('/contacto', [WebController::class, 'contact'])->name('contact');

Route::prefix('/admin')->name('admin.')->namespace('Admin')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('index');
    Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login'])->name('login.now');
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

    //Route example blade {{ Route('admin.admins.edit', ['id' => $request->req_id]) }}
    Route::get('/administradores', [AdminsController::class, 'index'])->name('admins.index');


    Route::get('/donaciones', [DonationController::class, 'index'])->name('donation.index');
    Route::get('/donaciones/{id}', [DonationController::class, 'show'])->name('donation.show');
    Route::post('/donaciones', [DonationController::class, 'store'])->name('donation.store');

    Route::get('/arboles', [TreeController::class, 'index'])->name('tree.index');
    Route::post('/arboles/cambiar-foto', [TreeController::class, 'updatePhoto'])->name('tree.update_photo');


    Route::get('/nuevoscontadores', [CounterController::class, 'index'])->name('counter.index');
    Route::post('/nuevoContador', [CounterController::class,'store'])->name('counter.store');
    Route::delete('/nuevoscontadores', [CounterController::class, 'delete'])->name('counter.delete');
    Route::get('/nuevoscontadores/{id}/edit', [CounterController::class, 'edit'])->name('counter.edit');
    Route::post('/nuevoscontadores/update', [CounterController::class, 'update'])->name('counter.update');

    Route::post('/administradores', [AdminsController::class, 'store'])->name('admins.store');
    Route::delete('/administradores', [AdminsController::class, 'delete'])->name('admins.delete');
    Route::get('/administradores/{id}/edit', [AdminsController::class, 'edit'])->name('admins.edit');
    Route::post('/administradores/update', [AdminsController::class, 'update'])->name('admins.update');
});

Route::post('/sendmail', [MailController::class, 'sendMail'])->name('sendmail');

Route::get('/test/', function () {
    $pdf = PDF::loadView('certificate');
    return $pdf->download('pruebapdf.pdf');
  });

Route::get('/donar', [WebController::class, 'donate'])->name('donate');
Route::get('/approval', [DonationController::class, 'approval'])->name('approval');
Route::get('/cancelled', [DonationController::class, 'cancelled'])->name('cancelled');
Route::get('/gracias', [WebController::class, 'thankyou'])->name('thankyou');
Route::get('/paypal/pay', 'PaymentController@payWithPayPal');
Route::get('/paypal/status', 'PaymentController@payPalStatus');

Auth::routes();

