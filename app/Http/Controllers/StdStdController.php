<?php

namespace App\Http\Controllers;

use App\Models\hagez_end;
use App\Models\rate;
use App\Models\std_std;
use App\Models\users;
use App\Models\users_std;
// use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;


use Illuminate\Http\Request;

class StdStdController extends Controller
{
    public function addstd(Request $request){




        $request->validate([
            'name' =>'required',
            'address' =>'required',
            'phone'=>'required',
            'from_' =>'required',
            'to_' =>'required', 
            'prise' =>'required',
            'std_inf' =>'required',
            'id_user' =>'required',
            'img' =>'required',
            'type' =>'required',
            // 'name_studam'=>'required',
            // 'many_players'=>'required',
            // 'type_std'=>'required',
             ]);


             if ($request->hasFile('img')) {
                $filename=$request->img;
                $new_fill=time().$filename->getClientOriginalName();
                $filename->move(public_path('../img/std/'),$new_fill);
            } 

       $add=  std_std::create(
            [
                 'name' =>$request->name,
                 'address' => $request->address,
                 'phone' => $request->phone,
                 'from_' => $request->from_,
                 'to_' => $request->to_,
                 'prise' => $request->prise,
                 'std_inf' => $request->std_inf,
                 'id_user' => $request->id_user,
                 'img' => 'img/std/'.$new_fill,
                 'type' => $request->type,
                 
               
                 
                
             ]);


             $addstdstats=std_std::where('id_user','=',$request->id_user)->first();
             $request->session()->put('stat_std_add',@$addstdstats->id_);

             if ($add->false) {
                return back()->withErrors(['كلمه السر والبريد غير منطابقين']);
                
               }else{
                return redirect()->route('v_stat_std')->with('sacsess');   
        
               }
    }


    public function v_one_std_type(Request $request){
    
        // $prodect=std_std::latest()->paginate(20);
        // return view('prodacts.index',compact('prodect'));
    




        $i=$request->type_;

        if($i==1){ 
            $searchTerm=1;
            $prodect_1= std_std::query()->where('type_', 'LIKE', "%{$searchTerm}%")->latest()->paginate(4);
           
        }elseif($i==2){
            $searchTerm=2;
            $prodect_2= std_std::query()->where('type_', 'LIKE', "%{$searchTerm}%")->latest()->paginate(4);
        }elseif($i==3){
            $searchTerm=3;
            $prodect_3= std_std::query()->where('type_', 'LIKE', "%{$searchTerm}%")->latest()->paginate(4);
        }elseif($i==4){
            $searchTerm=4;
            $prodect_4= std_std::query()->where('type_', 'LIKE', "%{$searchTerm}%")->latest()->paginate(4);
        }elseif($i==5){ 
            $searchTerm=5;
            $prodect_5= std_std::query()->where('type_', 'LIKE', "%{$searchTerm}%") ->latest()->paginate(4);
        }elseif($i==6){ 
            $searchTerm=6;
            $prodect_6= std_std::query()->where('type_', 'LIKE', "%{$searchTerm}%") ->latest()->paginate(4);
        }else{
            $prodect=std_std::latest()->paginate(20);;
        }


        return view('/',compact('prodect'));

    
    }



    public function v_all_std(Request $request){
        $searchTerm_1 = 1;
        $searchTerm_2 = 2;
        $searchTerm_3 = 3;
        $searchTerm_4 = 4;
        $searchTerm_5 = 5;
        $searchTerm_6 = 6;
        
        $prodect_1=std_std::query()->where('type', 'LIKE', "%{$searchTerm_1}%")->latest()->paginate(4);
        $prodect_2=std_std::query()->where('type', 'LIKE', "%{$searchTerm_2}%")->latest()->paginate(4);
        $prodect_3=std_std::query()->where('type', 'LIKE', "%{$searchTerm_3}%")->latest()->paginate(4);
        $prodect_4=std_std::query()->where('type', 'LIKE', "%{$searchTerm_4}%")->latest()->paginate(4);
        $prodect_5=std_std::query()->where('type', 'LIKE', "%{$searchTerm_5}%")->latest()->paginate(4);
        $prodect_6=std_std::query()->where('type', 'LIKE', "%{$searchTerm_6}%")->latest()->paginate(4);
  
        return view('home/home',compact('prodect_1','prodect_2','prodect_3','prodect_4','prodect_5','prodect_6',));
    }



    public function more_games(Request $request){




        $i=$request->id;

        if($i==1){ 
            $searchTerm=1;
            $prodect= std_std::query()->where('type', 'LIKE', "%{$searchTerm}%")->latest()->paginate(20);
           
        }elseif($i==2){
            $searchTerm=2;
            $prodect= std_std::query()->where('type', 'LIKE', "%{$searchTerm}%")->latest()->paginate(20);
        }elseif($i==3){
            $searchTerm=3;
            $prodect= std_std::query()->where('type', 'LIKE', "%{$searchTerm}%")->latest()->paginate(20);
        }elseif($i==4){
            $searchTerm=4;
            $prodect= std_std::query()->where('type', 'LIKE', "%{$searchTerm}%")->latest()->paginate(20);
        }elseif($i==5){ 
            $searchTerm=5;
            $prodect= std_std::query()->where('type', 'LIKE', "%{$searchTerm}%") ->latest()->paginate(20);
        }elseif($i==6){ 
            $searchTerm=6;
            $prodect= std_std::query()->where('type', 'LIKE', "%{$searchTerm}%") ->latest()->paginate(20);
        }else{
            $prodect=std_std::latest()->paginate(20);
        }


        return view('home/v_qat',compact('prodect'));
    }




    

    public function dashbord(Request $request){


        $iduser=session('loged_std');
        $i=$request->id;
        // $prodect= std_std::query()->where('id_', 'LIKE', "%{$i}%")->first();

        $addstdstats_user=std_std::where('id_user','=',$iduser) ->first();
        $id_std=$addstdstats_user->id_ ;


        $currentTime = Carbon::now();

        // dd( $currentTime->toArray());
        $arr= $currentTime->toArray();
      $er= $arr['year'];
      $mon= $arr['month'];
      $day= $arr['day'];
    //    echo $er .$mon .$day;

    //    `day`, `month`, `year_`
        // $num_selers=users::count();
        $num_hagz=hagez_end::where('id_p','=',$id_std)->where('day','=',$day)->where('month','=', $mon )->where('year_','=', $er )->count();
        $num_hagz_ned=hagez_end::where('id_p','=',$id_std)->where('stat_','=', 0 )->count();
        $num_hagz_all=hagez_end::where('id_p','=',$id_std)->count();

        return view('stadium/profile',compact('num_hagz','num_hagz_ned','num_hagz_all'));
        
    }



  




    public function resev(Request $request){





        $i=$request->id;
        $prodect= std_std::query()->where('id_', 'LIKE', "%{$i}%")->first();

        $addstdstats=std_std::where('type','=',$prodect->type) ->latest()->paginate(4);
         $iduser=session('logeduser');

         $name_plyer= users::query()->where('id', 'LIKE', "%{$iduser}%")->first();

         

  
        return view('home/Reservation',compact('prodect','addstdstats','iduser','name_plyer'));

    }


    public function v_stat_std(Request $request){

        $iduser=session('loged_std');
        $i=$request->id;
        // $prodect= std_std::query()->where('id_', 'LIKE', "%{$i}%")->first();

        $addstdstats_user=std_std::where('id_user','=',$iduser) ->first();
        $id_std=$addstdstats_user->id_ ;
        $one=0;
        $currentTime = Carbon::now();

        // dd( $currentTime->toArray());
        $arr= $currentTime->toArray();
      $er= $arr['year'];
      $mon= $arr['month'];
      $day= $arr['day'];


        $addstdstats=hagez_end::where('id_p','=',$id_std)->where('stat_','=',$one)->latest()->get();
         

  
        return view('stadium/v_states',compact('addstdstats','iduser'));




    }
    

    public function v_stat_std_valdate(Request $request){

        $iduser=session('loged_std');
        $i=$request->id;
        $one=1;
        $req_day=1;
        // $prodect= std_std::query()->where('id_', 'LIKE', "%{$i}%")->first();

        $addstdstats_user=std_std::where('id_user','=',$iduser) ->first();
        $id_std=$addstdstats_user->id_ ;

        $currentTime = Carbon::now();

        // dd( $currentTime->toArray());
        $arr= $currentTime->toArray();
      $er= $arr['year'];
      $mon= $arr['month'];
      $day= $arr['day'];

        $addstdstats=hagez_end::where('id_p','=',$id_std)->where('id_p','=',$id_std)->where('day','=',$day)->where('month','=', $mon )->where('year_','=', $er ) ->latest()->get();
         
        // ->where('stat_','=',$one)
  
        return view('stadium/v_states',compact('addstdstats','req_day'));

    }

    public function v_allreqouest(Request $request){

        $iduser=session('loged_std');
        $i=$request->id;
        $one=1;
        $req_day=1;
        // $prodect= std_std::query()->where('id_', 'LIKE', "%{$i}%")->first();

        $addstdstats_user=std_std::where('id_user','=',$iduser) ->first();
        $id_std=$addstdstats_user->id_ ;
        $addstdstats=hagez_end::where('id_p','=',$id_std)->latest()->get();
         
        // ->where('stat_','=',$one)
  
        return view('stadium/v_states',compact('addstdstats','req_day'));

    }



    


    public function delet_req_from_std(Request $request){
                   
        $id =$request->id_hagz;
        // $iduser=session('logeduser');
        hagez_end::where('id','=',$id)->delete();
       
        return back()->with('fill','sacess ');



    }


    
    public function update_req_from_std(Request $request){
                   
      
        // $iduser=session('logeduser');
        // hagez_end::where('id','=',$id)->delete();

        $iduser=session('loged_std');
        $one=1;
       
        hagez_end::where('id', '=' , $request->id_hagz)->update( ['stat_' => $one ]);
        $addstdstats_user=std_std::where('id_user','=',$iduser) ->first();
        $id_std=$addstdstats_user->id_ ;
        $one=0;
        $addstdstats=hagez_end::where('id_p','=',$id_std)->where('stat_','=',$one)->latest()->get();
       
        $req_on=11;
        // back()->with('ss')->compact('addstdstats');
        return  view('stadium/v_states',compact('addstdstats','iduser','req_on'));

      }

      

      public function edditStd(Request $request){
                   
      
      

        $iduser=session('loged_std');
        // $iduser=1;
       
        $StdInform=std_std::where('id_user','=',$iduser)->first();

        // $StdInform=std_std::query()->where('id_user','=',$iduser)->first();
       
        
          return view('stadium/edit_inform',compact('StdInform','iduser'));

      }



      public function edditpassword_std(Request $request){
                   
      
      

        // $iduser=session('loged_std');
       
        // $StdInform=std_std::where('id_user','=',$iduser)->first();

       
        
        return view('stadium/edit_password');

      }

      public function edditpassword_std_post(Request $request){
                   
      
      

        $iduser=session('loged_std');
        $old_password=$request->old_pass;
        $new_password=$request->new_pass;
        $new_pass_valdate=$request->new_pass_valdate;

        if ( $new_password === $new_pass_valdate  ) {  
           

            $StdInform=users_std::where('id','=',$iduser)->first();
            if (Hash::check($request->old_pass,$StdInform->password)) {

         

                     users_std::where('id', '=' , $iduser)->update( [
                        'password' =>Hash::make( $new_password ),
                    ]);
                     return back()->with('ll','lll');

            }


        }
       

       
        
       

      }


      public function rateaction(Request $request){
                   
      
      
        $regestersuccess='';
        $emailexets='';
        $users = rate::where('id_user', $request->id_user)->where('id_std', $request->id_std)->where('rate', true)->get();

        # check if email is more than 1

        if(sizeof($users) > 0){
            # tell user not to duplicate same email
            $emailexets=true;
            return redirect('');
            
        }


        $iduser=$request->id_user;
        $idstd=$request->idstd;
        
       
          rate::create(
            [
                 'id_user' =>$request->name,
                 'id_std' => $request->address,
                 'rate' => $request->phone,
             
               
                 
                
             ]);

       
        return  redirect('');       

       
        
       

      }

      
      
      public function updatestd (Request $request){




        $request->validate([
            'id'=>'required',
            'name' =>'required',
            'address' =>'required',
            'phone'=>'required',
            'from_' =>'required',
            'to_' =>'required', 
            'prise' =>'required',
            'std_inf' =>'required',
            'id_user' =>'required',
            'img' =>'required',
            'type' =>'required',
            // 'name_studam'=>'required',
            // 'many_players'=>'required',
            // 'type_std'=>'required',
             ]);


             if ($request->hasFile('img')) {
                $filename=$request->img;
                $new_fill=time().$filename->getClientOriginalName();
                $filename->move(public_path('../img/std/'),$new_fill);
            } 

       $add=  std_std::where('id_','=',$request->id)->update(
            [
                 'name' =>$request->name,
                 'address' => $request->address,
                 'phone' => $request->phone,
                 'from_' => $request->from_,
                 'to_' => $request->to_,
                 'prise' => $request->prise,
                 'std_inf' => $request->std_inf,
                 'id_user' => $request->id_user,
                 'img' => 'img/std/'.$new_fill,
                 'type' => $request->type,
                 
               
                 
                
             ]);


             $addstdstats=std_std::where('id_user','=',$request->id_user)->first();
             $request->session()->put('stat_std_add',@$addstdstats->id_);

             if (!$add) {
                return back()->withErrors(['كلمه السر والبريد غير منطابقين']);
                
               }else{
                return redirect()->route('v_stat_std')->with('sacsess');   
        
               }
    }

     
}
