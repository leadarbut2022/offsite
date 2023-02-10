<?php

namespace App\Http\Controllers;

use App\Http\Controllers\firebase\user;
use App\Models\hagez_end;
use App\Models\std_std;
use App\Models\users;
use App\Models\users_std;
use Illuminate\Http\Request;

class admin extends Controller
{
     public function dashbord()
    {
        $StdInform=std_std::count();
        $user=users::count();
        $user_std=users_std::count();
        $hagz_on_valdate=hagez_end::count();
        $hagz_valdeted=hagez_end::count();
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
        $hagz_on_valdate=hagez_end::count();
        $hagz_valdeted=hagez_end::count();
        $all_request=hagez_end::count();
        


        return  view( 'admin/editinform' , compact('StdInform','user'));
        
    }


    
}
