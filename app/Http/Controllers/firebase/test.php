<?php

namespace App\Http\Controllers\firebase;

use App\Http\Controllers\Controller;
use App\Http\Resources\userResource;
use App\Models\users;
use Illuminate\Http\Request;
use Kreait\Firebase\Factory;

use Illuminate\Support\Facades\Hash;

class test extends Controller
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
            return response()->json(['message' => trans('response.failed'),compact('emailexets')], 444);
            
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
            return response()->json(['message' => trans('regester.failed'),compact('regestersuccess')], 444);

        }



        $data->save();
        $regestersuccess=true;

        
        return response()->json(['data' => 
        userResource::collection(users::where('email', '=', $request->email,)->get()) 
        ,compact('regestersuccess')], 200);






    }

}
