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
Auth::routes(['verify' => true]);

use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;

Route::get('/email', function () {
    Mail::to('2018.shreyas.kotkar@ves.ac.in')->send(new WelcomeMail());
    return new WelcomeMail();
});


Route::get('/', function () {
    return view('welcome');
});

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout')->middleware('verified');

Route::get('/new-project', function () {
    return view('newProject');
})->name('new-project')->middleware('verified');

Route::get('/dashboard', function () {
return view('dashboard');
})->name('dashboard')->middleware('verified');

Route::get('/admin', '\App\Http\Controllers\AdminController@project')->name('admin')->middleware('verified');

Route::post('/delete', '\App\Http\Controllers\AdminController@reject')->name('reject')->middleware('verified');

Route::post('/accept', '\App\Http\Controllers\AdminController@accept')->name('accept')->middleware('verified');

Route::get('/admin_grievances', '\App\Http\Controllers\AdminController@ghome')->name('admin_grievances')->middleware('verified');

Route::post('/send', '\App\Http\Controllers\AdminController@send')->name('send')->middleware('verified');

Route::get('/user_status', '\App\Http\Controllers\AdminController@project1')->name('user_status')->middleware('verified');

Route::post('/answer', '\App\Http\Controllers\AdminController@answer')->name('answer')->middleware('verified');

// Route::get('/admin', function () {
//     return view('admin_project');
// })->name('admin')->middleware('verified');
    
Route::get('/home', function () {
    switch(\Illuminate\Support\Facades\Auth::user()->is_admin){
        case '0':
            return redirect(route('dashboard'));
            break;
        case '1':
            return redirect(route('admin'));
            break;
        default:
            return '/login';
            break;
    }});

Route::get('/developed', function () {
    return view('developed');
})->name('developed')->middleware('verified');

Route::get('/developing', function () {
    return view('developing');
})->name('developing')->middleware('verified');

Route::get('/to_develop', function () {
    return view('to_develop');
})->name('to_develop')->middleware('verified');

Route::get('/contacts', function () {
    return view('contacts');
})->name('contacts')->middleware('verified');

Route::get('/contractor', function () {
    return view('contractor');
})->name('contractor')->middleware('verified');

Route::get('/ghome', function () {
    return view('ghome');
})->name('ghome')->middleware('verified');

// Route::get('/admin_projects', function () {
//     return view('admin_project');
// })->name('admin_projects')->middleware('verified');

// Route::get('/admin_grievances', function () {
//     return view('admin_grievances');
// })->name('admin_grievances')->middleware('verified');

// Route::get('/user_status', function () {
//     return view('user_status');
// })->name('user_status')->middleware('verified');

Route::get('/about_us', function () {
    return view('about_us');
})->name('about_us')->middleware('verified');
    
Route::get('/faq', function () {
    return view('faq');
})->name('faq')->middleware('verified');
    
Route::post('/status','Regcontroller@index');

Route::post('/statusnew','Regcontroller@project')->name('statusnew');

Route::post('/newghome','Regcontroller@ghome')->name('newghome');


Auth::routes();


Auth::routes();

