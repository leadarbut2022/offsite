<?php

use App\Http\Controllers\admin;
use App\Http\Controllers\firebase\user;
use App\Http\Controllers\HagezController;
use App\Http\Controllers\StdStdController;
use App\Http\Controllers\userstdm;
use App\Http\Middleware\user_pleyr;
use App\Models\hagez;
use App\Models\std_std;
use Carbon\Carbon;

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
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', [StdStdController::class, 'v_all_std'])->name('v_all_std');


/*         nav bar            */


Route::get('login-stadium', function () { return view('stadium/auth/login');});
Route::get('regester-stadium', function () { return view('stadium/auth/regester');});
// Route::get('req', function () { return view('home/reqoest');});



Route::get('valdate', function () { return view('home/valdate');});
Route::get('edit_user', function () { return view('user/edit_prohile');});












/*  std std */






// Route::get('signOut', [user::class, 'signOut'])->name('signOut');

/* std std */






// /*         nav bar            */





// Route::post('storeuser', [user::class, 'storeuser'])->name('storeuser');
// Route::post('login_r', [user::class, 'login'])->name('login_r');


// Route::get('get-firebase-data', [user::class, 'index'])->name('firebase.index');




 /*                      studm routes */






            /*  user Auth std */

            // Route::post('registrationstd',[userstdm::class,'regester'])->name('registrationstd');
            Route::post('registrationstd', [userstdm::class, 'registrationstd'])->name('registrationstd');
            Route::post('loginstd', [userstdm::class, 'loginuser'])->name('loginstd');
            Route::get('signOutstd', [userstdm::class, 'signOut'])->name('signOutstd');


            Route::group(['middleware' =>['std_std'] ],function (){


                        /*  user Auth  std*/

                        Route::post('add_std',[StdStdController::class, 'addstd'])->name('addstd');
                        Route::get('edditStd',[StdStdController::class, 'edditStd'])->name('edditStd');


                        
                        Route::get('dashbord', [StdStdController::class, 'dashbord']);
                        
                        // Route::get('v_stat_std', function () { return view('stadium/v_states');})->name('v_stat_std');
                        Route::get('v_stat_std',[StdStdController::class, 'v_stat_std'])->name('v_stat_std');

                        Route::get('v_stat_std_valdate',[StdStdController::class, 'v_stat_std_valdate'])->name('v_stat_std_valdate');
                        Route::get('v_allreqouest',[StdStdController::class, 'v_allreqouest'])->name('v_allreqouest');
                        Route::get('edditpassword_std',[StdStdController::class, 'edditpassword_std'])->name('edditpassword_std');
                        Route::post('edditpassword_std_post',[StdStdController::class, 'edditpassword_std_post'])->name('edditpassword_std_post');
                        
                        // Route::get('v_stat_std',[StdStdController::class, 'v_stat_std'])->name('v_stat_std');

                        Route::get('edit_std_inf', function () { return view('stadium/edit_inform');});
                        Route::get('edit_password', function () { return view('stadium/edit_password');});
                        Route::get('addstd', function () { return view('stadium/addstd_std');});


                        Route::post('delet_req_from_std', [StdStdController::class, 'delet_req_from_std'])->name('delet_req_from_std');

                        Route::post('update_req_from_std', [StdStdController::class, 'update_req_from_std'])->name('update_req_from_std');
            });
            
 /*                      studm routes */











 /*                      user routes */


 Route::get('login', function () { return view('user/auth/login');})->name('login');
Route::get('regester', function () { return view('user/auth/regester');});
Route::get('signOut', [user::class, 'signOut'])->name('signOut');



         /*  user Auth */

         Route::post('registrationuser', [user::class, 'regester'])->name('registrationuser');
         Route::post('loginuser', [user::class, 'loginuser'])->name('loginuser');

 Route::group(['middleware' =>['user_pleyr'] ],function (){


 
         /*  user Auth */


        Route::post('valdate_hag', [HagezController::class, 'hagz_'])->name('valdate_hag');
        Route::post('valdate_hagz', [HagezController::class, 'valdate_hagz'])->name('valdate_hagz');

        Route::get('req', [user::class, 'req'])->name('req');
        Route::get('req_hestory', [user::class, 'req_hestory'])->name('req_hestory');
        Route::get('v_qat', [StdStdController::class, 'more_games']);
        Route::get('resev', [StdStdController::class, 'resev']);



        
        Route::post('delet_req', [user::class, 'delet_req'])->name('delet_req');
        // Route::post('update_req', [user::class, 'update_req'])->name('update_req');


 /*                      user routes */

         });




        Route::get('date' , function (){

                $currentTime = Carbon::now();

                // dd( $currentTime->toArray());
                $arr= $currentTime->toArray();
              $er= $arr['year'];
               echo $er;

//      echo  array_keys($arr, "year");
        
        });









        // /var/www/html/pro/pro/firebase_php/resources/views/admin/v_stat.blade.php




        Route::get('dashbord', [admin::class, 'dashbord'])->name('dashbord');
        Route::get('v_s_admin', [admin::class, 'v_s_admin'])->name('v_s_admin');
        Route::get('v_s_edit', [admin::class, 'v_s_edit'])->name('v_s_edit');
