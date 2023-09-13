<?php

namespace App\Http\Controllers;

use App\Http\Controllers\firebase\user;
use App\Models\Admin as ModelsAdmin;
use App\Models\hagez_end;
use App\Models\std_std;
use App\Models\users;
use App\Models\users_std;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Hash;

class admin extends Controller
{
     public function dashbord()
    {
        $StdInform=std_std::count();
        $user=users::count();
        $user_std=users_std::count();
        $hagz_on_valdate=hagez_end::where('stat_','=', 0)->count();
        $hagz_valdeted=hagez_end::where('stat_','=', 1)->count();
        $all_request=hagez_end::count();
        


        return  view( 'admin/dashbord' , compact('StdInform','user','user_std' ,'hagz_on_valdate','hagz_valdeted','all_request'));
        
    }



    public function v_s_admin(Request $request)
    {

        $id=$request->id;

        if ( $id == 1) {
             $StdInform=std_std::latest()->get();
             $std=1;
             return  view('admin/v_stat' , compact('StdInform','std'));
        }
                
        if ( $id == 2) {
            $StdInform=users::latest()->get();
            $user=1;
             return  view('admin/v_stat' , compact('StdInform','user'));
        }
               
       if ( $id == 3) {
        $StdInform=users_std::latest()->get();
            $user=1;
            return  view('admin/v_stat' , compact('StdInform','user'));
        }

           
        if ( $id == 4) {
            $StdInform=hagez_end::latest()->get();
            $req=1;

            return  view('admin/v_stat' , compact('StdInform','req'));
        }

        if ( $id == 5) {
            $StdInform=hagez_end::latest()->get();
            $req=1;

            return  view('admin/v_stat' , compact('StdInform','req'));
        }
        if ( $id == 6) {
            $StdInform=hagez_end::latest()->get();
            $req=1;

            return  view('admin/v_stat' , compact('StdInform','req'));
        }

        // $StdInform=std_std::count();
        // $user=users::count();
        // $user_std=users_std::count();
        // $hagz_on_valdate=hagez_end::count();
        // $hagz_valdeted=hagez_end::count();
        // $all_request=hagez_end::count();
        


        // return  view( 'admin/dashbord' , compact('StdInform','user','user_std' ,'hagz_on_valdate','hagz_valdeted','all_request'));
        
    }



 
    

    


    public function v_s_edit(Request $request)
    {
        $StdInform=std_std::count();
        $user=users::count();
        $user_std=users_std::count();
        $hagz_on_valdate=hagez_end::where('stat_','=', 0)->count();
        $hagz_valdeted=hagez_end::where('stat_','=', 1)->count();
        $all_request=hagez_end::count();
        


        return  view( 'admin/editinform' , compact('StdInform','user'));
        
    }



    public function delet_req_from_std(Request $request){
                   
        $id =$request->id;
        // $iduser=session('logeduser');
        hagez_end::where('id','=',$id)->delete();
       
        return back()->with('fill','sacess ');



    }


    


    public function delet_user_from_admin(Request $request){
                   
        $id =$request->id_;
        // $iduser=session('logeduser');
        users::where('id','=',$id)->delete();
       
        return back()->with('fill','sacess ');



    }



    public function delet_std_from_admin(Request $request){
                   
        $id_ =$request->id_;
        $id =$request->id;
        // $iduser=session('logeduser');
        std_std::where('id_','=',$id_)->delete();

        users_std::where('id','=',$id)->delete();
       
        return back()->with('fill','sacess ');



    }

    

    public function loginAdmin(Request $request){
                   
   
       
        return  view( 'admin/auth/login' );



    }



    public function regesterAdmin(Request $request){
                   
   
       
        return  view( 'admin/auth/regester' );



    }

    



    public function loginAdmin_post(Request $request){
                   
   
       
    $request->validate([
       
        'email' =>'required',
        'password' =>'required',
       

         ]);

         $userinfo=ModelsAdmin::where('email','=',$request->email)->first();
         

         if (!$userinfo) {
           return back()->with('fill','thiomthong woring');
         }else{
            if (Hash::check($request->password,$userinfo->password)) {
                if (Session()->has('logeduser')) {
                    Session()->pull('logeduser');
                    // Session()->pull('numroes');
                    Session::flush();
                    
                    
                }

                if (Session()->has('loged_std')) {
                    Session()->pull('loged_std');
                    
                    Session::flush();
                  }


              $request->session()->put('loged_admin',$userinfo->id);
      
        


            
                Cookie::queue('email_admin', $request->email, 2629743);
                Cookie::queue('password_admin', $request->password, 2629743);
            //   }


              
                 return redirect('dashbord');
            }else{
                return back()->with('fill','password woring');
            }
         }






    }

    





    


    public function regesterAdmin_post(Request $request){
                           
                   
        $request->validate([
            'name_1' =>'required',
            // 'email' =>'required|unique:users|string|email|max:255',
            'email' =>'required',
            'password' =>'required',
            'password_2' =>'required',
         
             ]);


             
        $name = $request->name_1 ;

        if ($request->password == $request->password_2) {
       
       $add= ModelsAdmin::create(
            [
                 'name' => $name,
                 'email' => $request->email,
                 'password' =>Hash::make( $request->password ),
              
                
             ]);
        

       if ($add->false) {
        return back()->withErrors(['كلمه السر والبريد غير منطابقين']);
        
       }else{
        return redirect()->route('dashbord')->with('sacsess');   

       }

    }

}




public function signOutAdmin(){
                   
                   
    if (Session()->has('loged_admin')) {
        Session()->pull('loged_admin');
        Session::flush();
        
        return redirect('loginAdmin');
    }
  }


}
