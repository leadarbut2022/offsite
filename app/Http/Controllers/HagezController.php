<?php

namespace App\Http\Controllers;

use App\Models\hagez;
use App\Models\hagez_end;
use App\Models\std_std;
use Illuminate\Http\Request;

class HagezController extends Controller
{
    
    public function hagz_(Request $request){




        $request->validate([
            'id_user' =>'required',
            'id_std' =>'required',
            'from'=>'required',
            'to' =>'required',
            'prise' =>'required', 
            'name_plyer' =>'required', 
            // 'maney_h' =>'required',
            'day' => 'required',
            'manth' => 'required',
            'year' => 'required',
            
           
             ]);
             $i_=$request->id_user;
             $i_2=$request->id_std;
             $zero=0;
             $chek= hagez_end::where('id_user', '=', $i_)->where('stat_', '=', $zero)->where('id_p', '=', $i_2)->count();

                if ( $chek > 0) {
                    return redirect()->back()->with('in_prosses','لديك حجز تحت التأكيد');

                }

                // `id`, `id_user`, `id_p`, `from`, `to`, `prise`, `remember_token`, `created_at`, `updated_at`, `maney_h`, `phone_user`, `stat_`, `name_std`, `name_plyer`, `date_`, `day`, `month`, `year_`, `to_date`, `to_month`, `to_year`
                // $chek_date= hagez_end::where('id_user', '=', $i_)->where('stat_', '=', 1)->where('id_p', '=', $i_2)->where('id_p', '=', $i_2)->where('id_p', '=', $i_2)->->where('id_p', '=', $i_2)->->where('id_p', '=', $i_2)->->->count();

                // if ( $chek_date > 0) {
                //     return redirect()->back()->with('in_prosses','لديك حجز تحت التأكيد');

                // }




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

  
        return view('home/valdate',compact('prodect','addstdstats'));


    }


        public function valdate_hagz(Request $request){
    
            $request->validate([
                'id_hagez' =>'required',
                'num_user' =>'required',
                ]);



            hagez_end::where('id', $request->id_hagez)->update( ['phone_user' => $request->num_user ,]);
            hagez::where('id', $request->id_hagez)->delete();



            return redirect()->route('req');   



        }


}
