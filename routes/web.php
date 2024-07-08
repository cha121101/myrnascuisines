<?php

use App\Http\Controllers\AdminviewController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SubmiteventMailController;

use App\Http\Controllers\UserviewController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/welcome' , [UserviewController::class , 'index'])->name('welcome');

Route::get('/hall/details' , [UserviewController::class , 'halldetails'])->name('halldetails');
Route::get('/pool/details' , [UserviewController::class , 'pooldetails'])->name('pooldetails');
Route::get('/gazebo/details' , [UserviewController::class , 'gazebodetails'])->name('gazebodetails');
Route::get('/restaurant/details' , [UserviewController::class , 'restaurantdetails'])->name('restaurantdetails');

// Route::get('/eventemail' ,[ SubmiteventMailController::class, 'index'])->name('eventemail');
Route::get('/reserve' , [UserviewController::class , 'chooseReserve' ])->name('reserve');
Route::get('/create/event', [UserviewController::class , 'createEvent'])->name('Userview.Reservation.event');
Route::get('/create/table', [UserviewController::class , 'createTable'])->name('Userview.Reservation.table');
Route::post('/store/table' , [UserviewController::class , 'storependingtable'])->name('store.pending.table');
Route::post('/store/event' , [UserviewController::class , 'storependingnevent'])->name('store.pending.event');

Route::get('/pendingevent' , function(){
    return view('mail.pending.event');
});

Route::get('/pendingtable' , function(){
    return view('mail.pending.table');
});
Route::get('/reservationtable' , function(){
    return view('mail.reservation.accept.table');
});
Route::get('/reservationevent' , function(){
    return view('mail.reservation.accept.event');
});
Route::get('/reservationdecline' , function(){
    return view('mail.reservation.decline');
});

Route::fallback(UserviewController::class );
//need login
Route::get('/', [UserviewController::class, 'index']);

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })

Route::get('/dashboard' ,[ AdminviewController::class , 'showdashboard'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard' , [AdminviewController::class , 'showdashboard'])->name('dashboard');
    //pending reservation
    Route::get('/pending/event/{id}' , [AdminviewController::class , 'showpendingevent'])->name('pending.event');
    Route::get('/pending/table/{id}' , [AdminviewController::class , 'showpendingtable'])->name('pending.table');

    Route::match(['post' , 'delete'],'/action/reserve/table' , [AdminviewController::class , 'actionreservationtable'])->name('action.reservation.table');
    Route::match( ['post' , 'delete'],'/action/reserve/event' , [AdminviewController::class , 'actionreservationevent'])->name('action.reservation.event');

    //management reservation
    Route::get('/management/event' , [AdminviewController::class , 'showmanagementevent'])->name('show.management.event');
    Route::get('/management/table' , [AdminviewController::class , 'showmanagementtable'])->name('show.management.table');

    Route::get('/management/event/edit/{id}' , [AdminviewController::class, 'editmanagementevent'])->name('edit.management.event');
    Route::get('/management/table/edit/{id}' , [AdminviewController::class, 'editmanagementtable'])->name('edit.management.table');

    Route::match(['post' , 'delete'],'/action/management/table' , [AdminviewController::class , 'actionmanagementtable'])->name('action.management.table');
    Route::match( ['post' , 'delete'],'/action/management/event' , [AdminviewController::class , 'actionmanagementevent'])->name('action.management.event');

    Route::get('/Management/search/event', [AdminviewController::class, 'searchreservationevent'])->name('search.reservation.event');
    Route::get('/Management/search/table', [AdminviewController::class, 'searchreservationtable'])->name('search.reservation.table');

    //show history reservation
    Route::get('/history/event' , [AdminviewController::class , 'showhistoryevent'])->name('show.history.event');
    Route::get('/history/table' , [AdminviewController::class , 'showhistorytable'])->name('show.history.table');

    //search history reservation
    Route::get('/history/search/event' , [AdminviewController::class , 'searchhistoryevent'])->name('search.history.event');
    Route::get('/history/search/table' , [AdminviewController::class , 'searchhistorytable'])->name('search.history.table');

    //audit/archive
    Route::get('/setting/audit' , [AdminviewController::class , 'searchaudit'])->name('search.audit.trail');

    Route::get('/setting/archives/event' , [AdminviewController::class , 'searcharchiveevent'])->name('search.archive.event');
    Route::get('/setting/archives/table' , [AdminviewController::class , 'searcharchivetable'])->name('search.archive.table');

    //settings
    Route::get('/settings' , [AdminviewController::class , 'showsettings'])->name('show.settings');
    Route::post('/changeadminpass' , [AdminviewController::class , 'changeadminpass'])->name('settings.change.adminpass');
    
    Route::post('/changeemployeepass' , [AdminviewController::class , 'changeemployeepass'])->name('employee.newpassword');
    
    //delete or edit employee
    Route::match(['post' , 'delete', 'update'],'/actionemployee' , [AdminviewController::class , 'actionemployee'])->name('action.employee');

    //show audit trail
    Route::get('/showaudit' , [AdminviewController::class , 'showaudit'])->name('show.showaudit');

    //show dynamic website
    Route::get('/showdynamicweb' , [AdminviewController::class , 'showdynamicweb'])->name('show.dynamicweb');
    Route::post('/storedynamicweb' , [AdminviewController::class , 'storedynamicweb'])->name('store.dynamicweb');

    //show archives
    Route::get('/show/archives/event' , [AdminviewController::class , 'showeventarchives'])->name('show.archives.event');
    Route::get('/show/archives/table' , [AdminviewController::class , 'showtablearchives'])->name('show.archives.table');
    Route::get('/show/archives/form/event{id}' , [AdminviewController::class , 'showeventformarchives'])->name('archives.form.event');
    Route::get('/show/archives/form/table{id}' , [AdminviewController::class , 'showtableformarchives'])->name('archives.form.table');

    //show all data in past history
    Route::get('/history/form/event/{id}' , [AdminviewController::class , 'historyformevent'])->name('history.form.event');
    Route::get('/history/form/table/{id}' , [AdminviewController::class , 'historyformtable'])->name('history.form.table');


});

//need to 
require __DIR__.'/auth.php';

Route::resource('admin' , AdminviewController::class)->middleware(['auth']);