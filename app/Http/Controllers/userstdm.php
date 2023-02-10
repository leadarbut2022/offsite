<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\std_std;
use App\Models\users_std;
use Database\Factories\UserFactory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Cookie;
use Kreait\Firebase;
use Kreait\Firebase\Factory;

 use Illuminate\Support\Facades\Session;

class userstdm extends Controller

{
   
    public function registrationstd(Request $request){
        


        $userinfo=users_std::where('email','=',$request->email)->get();

        if(sizeof($userinfo) > 0){
           return back()->with('filll',' البريد مستخدم بالفعل ');   
        }

       

        $request->validate([
            'name_1' =>'required',
            'name_2' =>'required',
            'email' =>'required|unique:users|string|email|max:255',
            'phone'=>'required',
            'password' =>'required',
            'pass_v' =>'required', 
            'city' =>'required',
            'stat' =>'required',
            // 'ather_inform' =>'required',
            // 'name_studam'=>'required',
            // 'many_players'=>'required',
            // 'type_std'=>'required',
             ]);

             
        $name = $request->name_1 . $request->name_2 ; 

        if ($request->password == $request->pass_v) {
            $firebase = (new Factory)
            ->withServiceAccount(__DIR__.'/offsite-c9bd3-firebase-adminsdk-8z4tk-7bf092c829.json')
            ->withDatabaseUri('https://offsite-c9bd3-default-rtdb.firebaseio.com');

         $database = $firebase->createDatabase();

         $data= [
            
            'name' => $name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' =>Hash::make( $request->password ),
            'stat' => $request->stat,
            'city' => $request->city,
            'ather_inform' => $request->ather_inform,
            'name_studam' => $request->name_studam,
            'many_players' => $request->many_players,
            'type_std' => $request->type_std,
           
            ];

            $add= $database->getReference('users_stdm')->push($data);

       $add= users_std::create(
            [
                 'name' => $name,
                 'email' => $request->email,
                 'phone' => $request->phone,
                 'password' =>Hash::make( $request->password ),
                 'stat' => $request->stat,
                 'city' => $request->city,
                 'ather_inform' => $request->ather_inform,
                 'name_studam' => $request->name_studam,
                 'many_players' => $request->many_players,
                 'type_std' => $request->type_std,
                 
                
             ]);

        //      $userinfo=users_std::where('email','=',$request->email)->first();

        //      $request->session()->put('logedstd',$userinfo->id);
        //      $request->session()->put('namestd',$userinfo->name);
        //      $request->session()->put('phonestd',$userinfo->phone);
        //      $request->session()->put('mohfzastd',$userinfo->stat);
        //      $request->session()->put('city_std',$userinfo->city);
        //      $request->session()->put('ather_infoirmstd',$userinfo->ather_inform);
        //      $request->session()->put('mailstd',$userinfo->email);
       

        //    //   if($request->has('remember_me')){
        //        Cookie::queue('email', $request->email, 2629743);
        //        Cookie::queue('password', $request->password, 2629743);
        //    //   }
        

       if ($add->false) {
        return back()->withErrors(['كلمه السر والبريد غير منطابقين']);
        
       }else{
        return redirect()->route('/')->with('sacsess');   

       }

    }

}








public function loginuser(Request $request){

    $request->validate([
       
        'email' =>'required',
        'password' =>'required',
       

         ]);

         $userinfo=users_std::where('email','=',$request->email)->first();
         

         if (!$userinfo) {
           return back()->with('fill','thiomthong woring');
         }else{
            if (Hash::check($request->password,$userinfo->password)) {
                if (Session()->has('logeduser')) {
                    Session()->pull('logeduser');
                    // Session()->pull('numroes');
                    Session::flush();
                    
                    
                }
              $request->session()->put('loged_std',$userinfo->id);
              $request->session()->put('name_std',$userinfo->name);
              $request->session()->put('phone_std',$userinfo->phone);
              $request->session()->put('mohfza_std',$userinfo->stat);
              $request->session()->put('city__std',$userinfo->city);
              $request->session()->put('ather_infoirmu_std',$userinfo->ather_inform);
              $request->session()->put('mail_std',$userinfo->email);
        
              $addstdstats=std_std::where('id_user','=',$userinfo->id)->first();
              $request->session()->put('stat_std_add',$addstdstats->id_);


            //   if($request->has('remember_me')){
                Cookie::queue('email_std', $request->email, 2629743);
                Cookie::queue('password_std', $request->password, 2629743);
            //   }


              
                 return redirect('/');
            }else{
                return back()->with('fill','password woring');
            }
         }




       


     

}


public function signOut(){


    if (Session()->has('loged_std')) {
        Session()->pull('loged_std');
        
        Session::flush();
        
        return redirect('login-stadium');
    }
  }










}