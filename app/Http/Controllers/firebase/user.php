<?php

namespace App\Http\Controllers\firebase;

use App\Http\Controllers\Controller;
use App\Models\hagez_end;
use App\Models\users;
use Illuminate\Http\Request;
use Kreait\Laravel\Firebase\Facades\Firebase;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Cookie;
use Kreait\Firebase\Factory;
use Illuminate\Support\Facades\Session;



class user extends Controller
{

                public function index()
                        {
                        $firebase = (new Factory)
                        ->withServiceAccount(__DIR__.'/offsite-c9bd3-firebase-adminsdk-8z4tk-7bf092c829.json')
                        ->withDatabaseUri('https://offsite-c9bd3-default-rtdb.firebaseio.com');

                       
                        $database = $firebase->createDatabase();

                        $blog = $database
                        ->getReference('blog');

                        echo '<pre>';
                        print_r($blog->getvalue());
                        echo '</pre>';

                        }


                        // public function storeuser(Request $request)     
                        //              {


                        //                 $request->validate([
                        //                     'name_1' =>'required',
                        //                     'name_2' =>'required',
                        //                     'emails' =>'required',
                        //                     'phone'=>'required',
                        //                     'password' =>'required',
                        //                     'password_v' =>'required',
                        //                     'city_' =>'required',
                        //                     'stat' =>'required',

                        //                     // 'igree'=>'required',

                        //                      ]);



                        //                      $name=$request->name_1 .$request->name_2 ;
                        //                      $password='';
                        //                      if ($request->password !== $request->password_v ) {
                        //                         return view('user/auth/regester')->with('stat_add','password not match');
                                                
 
                        //                     }

                        //                     $password =$request->password ;

                        //                 $firebase = (new Factory)
                        //                 ->withServiceAccount(__DIR__.'/offsite-c9bd3-firebase-adminsdk-8z4tk-7bf092c829.json')
                        //                 ->withDatabaseUri('https://offsite-c9bd3-default-rtdb.firebaseio.com');

                        //              $database = $firebase->createDatabase();

                        //              $data= [
                                        
                        //                 'name' => $name,
                        //                 'emails' => $request->emails,
                        //                 'password' =>$password,
                        //                 'phone' => $request->phone,
                        //                 'city_' => $request->city_,
                        //                 'stat' => $request->stat,
                                       
                        //                 ];

                        //            $add= $database->getReference('users')->push($data);
                        //               if ($add ) {

                        //                if ($request->password == $request->password_v) {
                          
                        //                   $add= users::create(
                        //                        [
                        //                             'name' => $name,
                        //                             'email' => $request->emails,
                        //                             'phone' => $request->phone,
                        //                             'password' =>Hash::make( $request->password ),
                        //                             'stat' => $request->stat,
                        //                             'city' => $request->city_,
                        //                            //  'ather_inform' => $request->ather_inform,
                                                    
                                                   
                        //                         ]);
                                           
                                   
                        //                   if ($add->false) {
                        //                    return back()->withErrors(['كلمه السر والبريد غير منطابقين']);
                                           
                        //                   }else{
                        //                      return view('user/auth/login')->with('stat_add','تم الانضمام'); 
                                   
                        //                   }
                                   
                        //                }
                        //              }else{

                                   
                        //                 return view('user/auth/regester')->with('stat_add','حدث خطأ');
                        //              }


                        // }














                           public function regester(Request $request){
                           
                   
                           $request->validate([
                               'name_1' =>'required',
                               'name_2' =>'required',
                               'email' =>'required',
                               'phone'=>'required',
                               'password' =>'required',
                               'city_' =>'required',
                               'stat' =>'required',
                               // 'ather_inform' =>'required',
                               // 'igree'=>'required',
                                ]);
                   
                   
                                
                           $name = $request->name_1 . $request->name_2 ; 
                   
                           if ($request->password == $request->password_v) {




                                        $firebase = (new Factory)
                                        ->withServiceAccount(__DIR__.'/offsite-c9bd3-firebase-adminsdk-8z4tk-7bf092c829.json')
                                        ->withDatabaseUri('https://offsite-c9bd3-default-rtdb.firebaseio.com');

                                     $database = $firebase->createDatabase();

                                     $data= [
                                        
                                        'name' => $name,
                                        'emails' => $request->email,
                                        'password' =>Hash::make( $request->password ),
                                        'phone' => $request->phone,
                                        'city_' => $request->city_,
                                        'stat' => $request->stat,
                                       
                                        ];

                                   $add= $database->getReference('users')->push($data);

                                   if (!$add ) {
                                    return redirect("/");
                                   }
                          
                          $add= users::create(
                               [
                                    'name' => $name,
                                    'email' => $request->email,
                                    'phone' => $request->phone,
                                    'password' =>Hash::make( $request->password ),
                                    'stat' => $request->stat,
                                    'city' => $request->city_,
                                   //  'ather_inform' => $request->ather_inform,
                                    
                                   
                                ]);
                           
                   
                          if ($add->false) {
                           return back()->withErrors(['كلمه السر والبريد غير منطابقين']);
                           
                          }else{

                           // if (Session()->has('loged_std')) {
                           //    Session()->pull('loged_std');
                              
                           //    Session::flush();
                           //  }

                           //  $userinfo=users::where('email','=',$request->email)->first();

                           // $request->session()->put('logeduser',$userinfo->id);
                           // $request->session()->put('nameUser',$userinfo->name);
                           // $request->session()->put('phoneuser',$userinfo->phone);
                           // $request->session()->put('mohfzauser',$userinfo->stat);
                           // $request->session()->put('city_user',$userinfo->city);
                           // $request->session()->put('ather_infoirmuser',$userinfo->ather_inform);
                           // $request->session()->put('mailuser',$userinfo->email);
                     
                           // $request->session()->put('stat_std_add',1);

                           //   Cookie::queue('email', $request->email, 2629743);
                           //   Cookie::queue('password', $request->password, 2629743);
                         
                           return redirect()->route('login')->with('sacsess');   
                   
                          }
                   
                       }
                   
                   }
                   
                   
                   
                   
                   
                   
                   
                   
                   public function loginuser(Request $request){
                   
                       $request->validate([
                          
                           'email' =>'required',
                           'password' =>'required',
                          
                   
                            ]);
                   

                            $userinfo=users::where('email','=',$request->email)->first();
                   
                           if (!$userinfo) {
                           return back()->with('fill','thiomthong woring');
                           }else{
                               if (Hash::check($request->password,$userinfo->password)) {

                                 if (Session()->has('loged_std')) {
                                    Session()->pull('loged_std');
                                    
                                    Session::flush();
                                  }
                                 $request->session()->put('logeduser',$userinfo->id);
                                 $request->session()->put('nameUser',$userinfo->name);
                                 $request->session()->put('phoneuser',$userinfo->phone);
                                 $request->session()->put('mohfzauser',$userinfo->stat);
                                 $request->session()->put('city_user',$userinfo->city);
                                 $request->session()->put('ather_infoirmuser',$userinfo->ather_inform);
                                 $request->session()->put('mailuser',$userinfo->email);
                           
                                 $request->session()->put('stat_std_add',1);
   
                                   Cookie::queue('email', $request->email, 2629743);
                                   Cookie::queue('password', $request->password, 2629743);
                               
                   
                   
                                 
                                    return redirect('/');
                               }else{
                                   return back()->with('fill','password woring');
                               }
                            }
                   
                   
                   
                   
                          
                   
                   
                        
                   
                   }
                   
                   
                   public function signOut(){
                   
                   
                       if (Session()->has('logeduser')) {
                           Session()->pull('logeduser');
                          //  Session()->forget('my_key');
                          //  Session::flush();

                          session()->forget([
                            'logeduser',
                            'nameUser',
                            'phoneuser',
                            'mohfzauser',
                            'city_user',
                            'ather_infoirmuser',
                            'mailuser'
                        ]);
                    
                           
                           return redirect('login');
                       }
                     }
                   


                     public function req(){
                   
                        $iduser=session('logeduser');
                        $addstdstats=hagez_end::where('id_user','=',$iduser)->where('stat_','=', 0 )  ->get();
                         $addstdstatshistory=hagez_end::where('id_user','=',$iduser)->where('stat_','=', 1 )  ->get();
                        return view('home/reqoest',compact('addstdstats','addstdstatshistory'));
         
                      }



                     // public function req_hestory(){
                   
                     //    $iduser=session('logeduser');
                     //    $addstdstats=hagez_end::where('id_user','=',$iduser)->where('stat_','=', 1 )  ->get();
                       
                     //    return view('home/reqoest',compact('addstdstats'));

         
                     //  }

                      public function delet_req(Request $request){
                   
                        $id =$request->id_hagz;
                        $iduser=session('logeduser');
                        hagez_end::where('id','=',$id)->delete();
                       
                        return back()->with('fill','password woring');
         
                      }


                     
                     //  public function update_req(Request $request){
                   
                     //    $iduser=session('logeduser');
                     //    $addstdstats=hagez_end::where('id_user','=',$iduser)->where('stat_','=', 0 )  ->get();
                       
                     //    return back()->with('fill','password woring');
         
                     //  }

                     

}
