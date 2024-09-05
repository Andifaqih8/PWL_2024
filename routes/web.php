<?php

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

//Praktikum 1
// 1
Route::get('/hello', function () {
});
//2
Route::get('/world', function () {
    return 'World';
});
//3
Route::get('/selamat', function () {
    return 'Selamat datang';
});
//4
Route::get('/about', function () {
    return 'Nim  : 2241760124 Nama : A.Muh. Faqih';
});

//Praktikum 2
//1
Route::get('/user/{name}', function ($name) { 
    return 'Faqih'.$name; 
    }); 

//2
Route::get('/posts/{post}/comments/{comment}', function 
($postId, $commentId) { 
return 'Pos ke-'.$postId." Komentar ke-: ".$commentId; 
});

//3
Route::get('/user/{name}', function ($name='Faqih') { 
    return 'Faqih'.$name; 
    }); 

    Route::get('/user/profile', function () { 
        // 
        })->name('profile'); 
        Route::get( 
        '/user/profile', 
        [UserProfileController::class, 'show'] 
        )->name('profile'); 
         //Generating URLs... 
        $url = route('profile'); 
        // Generating Redirects... 
        return redirect()->route('profile');

       Route::get(‘/hello’, [WelcomeController::class,’hello’]);

      use App\Http\Controllers\PhotoController; 
      Route::resource('photos', PhotoController::class); 
      
      Route::resource('photos', PhotoController::class)->only([ 
        'index', 'show' 
        ]); 
        Route::resource('photos', PhotoController::class)->except([ 
        'create', 'store', 'update', 'destroy' 
        ]);