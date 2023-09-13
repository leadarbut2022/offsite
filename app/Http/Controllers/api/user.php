<?php

namespace App\Http\Controllers\api;

// use App\Http\Controllers\Controller;
// use App\Http\Resources\stdResorse;
// use App\Http\Resources\userResource;
// use App\Models\std_std;
// use App\Models\users;
// use Illuminate\Http\Request;
// use Kreait\Firebase\Factory;



use App\Http\Controllers\Controller;
use App\Http\Resources\hagzResorse;
use App\Http\Resources\stdResorse;
use App\Http\Resources\userResource;
use App\Models\hagez;
use App\Models\hagez_end;
use App\Models\std_std;
use App\Models\users;
use Illuminate\Http\Request;
use Kreait\Firebase\Factory;

use Illuminate\Support\Facades\Hash;
class user extends Controller
{
   

    public function regester(Request $request)
    {


    


        $regestersuccess='';
        $emailexets='';
        $users = users::where('email', $request->email)->get();

        # check if email is more than 1

        if(sizeof($users) > 0){
            # tell user not to duplicate same email
            $emailexets=true;
            return response()->json(['message' => trans('response.failed')], 444);
            
        }


        // $randomString =Str::upper(Str::random(16));

        // $check_token_ = user_vts::where('email', $randomString)->get();

        // if(sizeof($check_token_) != 0){
            
        //     $randomString =Str::upper(Str::random(16));

            
        // }

       
   

    
        $firebase = (new Factory)
        ->withServiceAccount(__DIR__.'/offsite-c9bd3-firebase-adminsdk-8z4tk-7bf092c829.json')
        ->withDatabaseUri('https://offsite-c9bd3-default-rtdb.firebaseio.com');

     $database = $firebase->createDatabase();

     $data_1= [
                                        
        'name' => $request->name,
        'emails' => $request->email,
        'password' =>Hash::make( $request->password ),
        'phone' => $request->phone,
        'city_' => $request->city_,
        'stat' => $request->stat,
       
        ];

   $add= $database->getReference('users')->push($data_1);

   if (!$add ) {
    return redirect("/");
   }


        $data= users::create(
            [
                 'name' => $request->name,
                 'email' => $request->email,
                 'phone' => $request->phone,
                 'password' =>Hash::make( $request->password ),
                 'stat' => $request->stat,
                 'city' => $request->city_,
                //  'ather_inform' => $request->ather_inform,
                 
                
             ]);



        if (!$data->save()) {
            $regestersuccess=false;
            return response()->json(['message' => trans('regester.failed')], 444);

        }



        $data->save();
        $regestersuccess=true;

        
        return response()->json(['data' => 
        userResource::collection(users::where('email', '=', $request->email,)->get()) 
        ,], 200);






    }











    public function login(Request $request)
    {



     


                $loginsuccess='';
                $request->validate([

                    'email' => 'required',
                    'password' => 'required',
                ]);

                $userinfo = users::where('email', '=', $request->email)->first();

                if (!$userinfo) {

                            return response()->json(['message' => trans('nooo')], 404);
                }else{

                    if (Hash::check($request->password, $userinfo->password)) {
       

                        $loginsuccess=true;
                        return response()->json(['data' => 
                        userResource::collection(users::where('email', '=', $request->email,)->get()) 
                       ], 200);

                    } else {
                        $loginsuccess=false;

                        return response()->json(['message' => trans('411111') , ], 404);
                    }
                
                }


 


    }
    
    
    
    
    public function all_std(Request $request){



    
        




        $searchTerm_1 = 1;
        $searchTerm_2 = 2;
        $searchTerm_3 = 3;
        $searchTerm_4 = 4;
        $searchTerm_5 = 5;
        $searchTerm_6 = 6;
        
             return [

                'foot' =>  stdResorse::collection(std_std::where('type', 'LIKE', "%{$searchTerm_1}%")->latest()->get()),
                'ten' =>  stdResorse::collection(std_std::where('type', 'LIKE', "%{$searchTerm_2}%")->latest()->get()),
                'badel' =>  stdResorse::collection(std_std::where('type', 'LIKE', "%{$searchTerm_3}%")->latest()->get()),
                'bask' =>  stdResorse::collection(std_std::where('type', 'LIKE', "%{$searchTerm_4}%")->latest()->get()),
                ' scwa' =>  stdResorse::collection(std_std::where('type', 'LIKE', "%{$searchTerm_5}%")->latest()->get()),
                'vol' =>  stdResorse::collection(std_std::where('type', 'LIKE', "%{$searchTerm_6}%")->latest()->get()),
          
            ];






       





    
    
    }
    
    
    
    
    
    
    
    
    
    
     public function hagz(Request $request) {



        // $i_=$request->id_user;
        // $i_2=$request->id_std;
        // $zero=0;

      
        $day=$request->day;
        $manth=$request->manth;
        $year=$request->year;
        $to=$request->from + $request->to ;
        $to_date=$request->day;
        $to_month=$request->manth;
        $to_year=$request->year;

        if ($to > 24) {
           $to=$to-24;
           $to_date=$to_date+1;
        }





$prise = $request->prise * $request->to ;

        hagez::create(
            [
                 'id_user' => $request->id_user,
                 'id_p' => $request->id_std,
                 'from' => $request->from,
                'name_std'=>$request->name_std,
                 'prise' => $prise,
                 'maney_h' => $request->to,
                 'name_plyer' => $request->name_plyer,
             
                 
                
             ]);

$zero="0" ;

              hagez_end::create(
                [
                     'id_user' => $request->id_user,
                     'id_p' => $request->id_std,
                     'from' => $request->from,
                     'to' => $to,
                     'name_std'=>$request->name_std,
                     'prise' => $prise ,
                     'maney_h' => $request->to,
                     'stat_' => $zero,
                     'name_plyer' => $request->name_plyer,

                     'day' => $request->day,
                     'month' => $request->manth,
                     'year_' => $request->year,
                     'to_date' => $to_date,
                     'to_month' => $to_month,
                     'to_year' => $to_year,

                 ]);



        $i=$request->id_user;
        $prodect= hagez::query()->where('id_user', 'LIKE', "%{$i}%")->first();

        $addstdstats=std_std::where('id_','=',$request->id_std) ->first();
         $iduser=session('logeduser');

  
        // return view('home/valdate',compact('prodect','addstdstats'));

        return [
            "id_reservation" => $prodect->id 
  
        ]; 

    }


    public function valdate_hagz(Request $request){
    
        // $request->validate([
        //     'id_hagez' =>'required',
        //     'num_user' =>'required',
        //     ]);



        hagez_end::where('id', $request->id_reservation)->update( ['phone_user' => $request->num_user ,]);
        hagez::where('id', $request->id_reservation)->delete();



        return [
            "data" => "تمت عملية الحجز"
  
        ]; 



    }






    public function v_stat_std_valdate(Request $request){

        $iduser=$request->idUser;

        $addstdstats=hagez_end::where('id_user','=',$iduser)->where('stat_','=', 0 )  ->get();
       
        // return $addstdstats;

        return [
            "data" => hagzResorse::collection( $addstdstats)
  
        ];

    }


    public function v_stat_std(Request $request){

        $iduser=$request->idUser;


        $addstdstatshistory=hagez_end::where('id_user','=',$iduser)->where('stat_','=', 1 )  ->get();

  

        return [
            "data" => hagzResorse::collection( $addstdstatshistory)
  
        ];


    }



}


