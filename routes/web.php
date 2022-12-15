<?php

use App\Http\Controllers\PayControllers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthControllers;
use App\Http\Controllers\EventsControllers;
use App\Http\Controllers\UserControllers;
use App\Http\Controllers\UndianControllers;
use App\Http\Controllers\AgendaControllers;
use App\Http\Controllers\HadiahControllers;
use App\Http\Controllers\DashboardControllers;
use App\Http\Controllers\WinnerControllers;
use App\Http\Controllers\AmazingControllers;
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

Route::get('/', [AuthControllers::class, 'index'])->name('login');

Route::get('/ama22ing', [AmazingControllers::class, 'index'])->name('ama22ing');
Route::post('auth/login', [AuthControllers::class, 'login'])->name('auth');
Route::get('auth/logout', [AuthControllers::class, 'actionlogout'])->name('logout');
Route::get('/register', [AuthControllers::class, 'register'])-> name('register');
Route::post('/register/user', [AuthControllers::class, 'registerStore'])-> name('registerPost');

Route::get('pay', [PayControllers::class, 'pay'])->name('pembayaran.member');
Route::get('payGold', [PayControllers::class, 'paygold'])->name('pembayaran.memberGold');
Route::post('addpay', [PayControllers::class, 'addpay'])->name('update.addpay');
Route::get('listpembayaran', [PayControllers::class, 'listpembayaran'])->name('admin.listpembayaran');
Route::post('updatesubcribed/{id}', [PayControllers::class, 'updatesubcribed'])->name('update.subcribed');
Route::get('congratulation', [PayControllers::class, 'congratulation'])->name('upgrade.congratulation');

Route::get('upgrade', [EventsControllers::class, 'upgrade'])->name('register.upgrade');
Route::get('events/list/{tipe?}', [EventsControllers::class, 'index'])->name('eventlist');
Route::post('events/create', [EventsControllers::class, 'create'])->name('eventcreate');
Route::post('events/update', [EventsControllers::class, 'update'])->name('eventupdate');

Route::get('events/manage/{id}/{tipe?}/{user?}', [EventsControllers::class, 'manageEvents'])->name('manage');
Route::post('events/manage/generate/individual', [EventsControllers::class, 'generateRefInd'])->name('generateRefInd');
Route::post('events/manage/generate/multiple', [EventsControllers::class, 'import_excel'])->name('import_excel');
Route::get('events/export', [EventsControllers::class, 'export_excel'])->name('export_excel');
Route::post('gen/undangan', [AmazingControllers::class, 'generateRefInd'])->name('und');

Route::get('users/list/{user?}', [UserControllers::class, 'index'])->name('userslist');
Route::post('users/create', [UserControllers::class, 'create'])->name('usercreate');
Route::post('users/update', [UserControllers::class, 'update'])->name('userupdate');
Route::post('users/change', [UserControllers::class, 'change'])->name('userchange');

Route::get('dashboard/get', [DashboardControllers::class, 'get'])->name('get');

Route::get('notifikasi', [EventsControllers::class, 'notifikasi'])->name('notifikasi');

Route::get('grandprize', [UndianControllers::class, 'gp'])->name('gp');
Route::post('grandprize/setwinner', [UndianControllers::class, 'setWinner'])->name('setWinner');
Route::get('doorprize/{nomor?}', [UndianControllers::class, 'dp'])->name('dp');

Route::post('agenda/create', [AgendaControllers::class, 'create'])->name('agendacreate');
Route::post('agenda/update', [AgendaControllers::class, 'update'])->name('agendaupdate');

Route::post('hadiah/create', [HadiahControllers::class, 'create'])->name('hadiahcreate');
Route::post('hadiah/update', [HadiahControllers::class, 'update'])->name('hadiahupdate');

Route::get('winner/list', [WinnerControllers::class, 'index'])->name('list');
Route::get('winner/data', [WinnerControllers::class, 'getData'])->name('getData');

Route::get('/cek', function () {
    return view("cek");
});
