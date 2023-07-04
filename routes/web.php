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

/*
The dispatchSync() and dispatchAfterResponse() methods let you run a job synchronously. The difference between the two methods is that the dispatchSync() method runs the job immediately, whereas the dispatchAfterResponse() method first returns the response to the user and then runs the job before closing the connection. Neither of these methods require a worker to be running in the background, and you can use them to run short-running jobs.

Working with multiple connections
By default, when you dispatch a job, the framework will push it into the default queue connection. However, if you want to push a job into another queue connection, such as redis, you can use the onConnection() method.
*/

Route::get('/', function () {
    // return view('welcome');
    // dispatch(new \App\Jobs\SendVerificationEmail());
    
    \App\Jobs\SendVerificationEmail::dispatch();
    // $userSignedUp = false;

    // \App\Jobs\SendVerificationEmail::dispatchIf($userSignedUp); //dispatch if true

    // \App\Jobs\SendVerificationEmail::dispatchUnless($userSignedUp); // dispatch unless false

    // \App\Jobs\SendVerificationEmail::dispatch()
   // ->onConnection('redis'); //to the default queue backend which in this case is database and to redis

    // \App\Jobs\SendVerificationEmail::dispatch()
    // ->onQueue('high-priority'); //going to same backend but this will interrupt the other on the default queue and will be executed before others. Calling it high priority doesn't make high priority. It just a descriptive name. You could have called it any other name

    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('users', [App\Http\Controllers\UserController::class, 'index'])->name('users.index');

Route::get('users/all', [App\Http\Controllers\UserController::class, 'all'])->name('users.all');

Route::get('users/{user}', [App\Http\Controllers\UserController::class, 'show'])->name('users.show');

Route::get('depts', [App\Http\Controllers\DeptController::class, 'index'])->name('depts.index');

Route::get('depts/{dept}', [App\Http\Controllers\DeptController::class, 'show'])->name('depts.show');

// Route::get('/depts', 'DeptController@index')->name('depts.index');

// Route::get('/depts/{dept}', 'DeptController@show')->name('depts.show');
