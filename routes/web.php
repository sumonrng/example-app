<?php

use App\Http\Controllers\AuthOtpController;
use App\Http\Controllers\BalanceController;
use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\TestingController;
use Database\Factories\MemberFactory;

function getUsers(){
    return   [
        1 => ['name'=>'Amitav','mobile'=>'01787909190','email'=>'sumonmti498@gmail.com'],
        2 => ['name'=>'Razib','mobile'=>'01787909190','email'=>'razib@gmail.com'],
        3 => ['name'=>'Samiul','mobile'=>'01787909190','email'=>'samiul@gmail.com'],
        4 => ['name'=>'Raian','mobile'=>'01787909190','email'=>'raian@gmail.com']
    ];
}

Route::get('/', function () {
    return view('welcome');
});
Route::get('/test2', function () {
    // $names = [
    //     1 => ['name'=>'Amitav','mobile'=>'01787909190','email'=>'sumonmti498@gmail.com'],
    //     2 => ['name'=>'Razib','mobile'=>'01787909190','email'=>'razib@gmail.com'],
    //     3 => ['name'=>'Samiul','mobile'=>'01787909190','email'=>'samiul@gmail.com'],
    //     4 => ['name'=>'Raian','mobile'=>'01787909190','email'=>'raian@gmail.com']
    // ];
    $names = getUsers();
    return view('test2',['name'=>$names]);
    // return view('test2',['name'=>'sumon','city'=>'<script>alert("Hello")</script>']);
    // return view('test2')->withCity('No City')->withUser('Rafi');
    // return view('test2')->with('city','rangpur')->with('name',$names);
});
Route::get('/test2/{id}',function($id){
    $users = getUsers();
    abort_if(!isset($users[$id]),404);
    $user = $users[$id];
    return view('user',['id'=>$user]);
})->name('test2');

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::controller(AuthOtpController::class)->group(function(){
    Route::get('/otp/login','login')->name('otp.login');
    Route::post('/otp/generate','generate')->name('otp.generate');
    // Route::get('/otp/verification','generate')->name('otp.verification');
    Route::get('/otp/verification/{user_id}', 'verification')->name('otp.verification');
    Route::post('/otp/login','loginWithOtp')->name('otp.getLogin');
});


// Route::get('/blog',[MemberController::class,'showBlog'])->name('blog');
// Route::get('/user/{id}',[MemberController::class,'userMember'])->name('user');

// Route::controller(MemberController::class)->group(function(){
//     Route::get('/member','ShowMember')->name('member');
//     Route::get('/blog','showBlog')->name('blog');
//     Route::get('/user/{id}','userMember')->name('user');
// });
Route::get('/test',TestingController::class);
// Route::resource('balances',BalanceController::class)->only(['create','update']);
Route::resource('balances',BalanceController::class);
// Route::resource('balances',BalanceController::class)->except(['create','update']);
// Route::resource('balances',BalanceController::class)->names([
//     'create'=>'balances.save',
//     'show'=>'balances.allshow'
// ]);
// Route::resource('balances.comments',CommentController::class);
Route::resource('balances.comments',CommentController::class)->shallow();
Route::view('/addUser','member');
Route::controller(MemberController::class)->group(function(){
    Route::get('/member','store')->name('member');
    Route::post('/addUser','addUser')->name('addUser');
    Route::get('/showuser','show')->name('show');
    Route::get('/singleuser/{id}','singleUser')->name('singleuser');
    // Route::post('/update/{id}','updateMember')->name('update');
    Route::put('/update/{id}','updateMember')->name('update');
    Route::get('/update/edit/{id}','editUser')->name('update.edit');
    Route::get('/delete/{id}','deleteUser')->name('deleteuser');
    Route::get('/when','whenMethod')->name('when');
    Route::get('/rawshow','rawshow')->name('rawshow');
});

