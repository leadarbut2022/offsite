@extends('stadium/layaut')

<link rel="stylesheet" href="css/stadium/v_stat.css">
<link rel="stylesheet" id="css_req" href="css/req/req_.css">
<link rel="stylesheet" id="" href="css/req/req.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

@section("v_stat")
<style>
    .dashbord{
    height:auto;
    
}
.butt_right{
    height: 950px;
}
</style>

<div class="page1">


    <div class="col-md-12">

        <div class="serch">
            <form action="">
                <input type="search" name="" style="text-align: right" placeholder="اسم الملعب" id="">
                <button><img src="img/serch .png" alt=""></button>
            </form>
        </div>
    </div>

    {{-- {{ $iduser }} --}}

    <div class="col-md-12">







<div class="row">

    <div class="col-md-12">
        @if ( @$req_day > 0 )
        <h3> طلبات اليوم  </h3>
            
        @endif


        @if ( @$iduser > 0 )

        <h3> الطلبات  </h3>

        @endif

    </div>

</div>


<div class="result">



  
       

    {{-- @foreach ($addstdstats as $va )

    <div class="result_item">
                <div class="row">

                    @if ( @$iduser > 0 )
                    

                        <div class="col-md-2"> --}}
                            {{-- <form action=" " method="POST">
                                        <input type="hidden"> --}}

{{-- 
                                        <div class="row">

                    

                                            <div class="col-md-6">

                                                 <form action="update_req_from_std" method="POST">
                                                          @csrf
                                                     <input type="hidden" name="id_hagz" value="{{ $va->id }}"> 
                                                     <input type="hidden" name="stst" value="{{ $va->stat_ }}"> 

                                                      <button type="submit" name="delet"> تأكيد</button>
                                                </form>
                                            </div>

                    

                                                <div class="col-md-6">

                                                                <form action="delet_req_from_std" method="POST">
                                                                    @csrf
                                                                            <input type="hidden" name="id_hagz" value="{{ $va->id }}">             
                                                                            <button type="submit" name="edit"> <img src="img/remove.png" alt=""></button>
                                                                </form>
                                         --}}
                                        {{-- <button type="submit" name="edit"> <img src="img/remove.png" alt=""></button> --}}

                                                {{-- </div>
                                            </div> --}}

                                          
                            {{-- </form> --}}
                        {{-- </div>
                        <div class="col-md-5" style="text-align:center">
                            <b> {{ $va->created_at }} </b>
                        </div>

                        
                        <div class="col-md-5" >

                            <b> {{ $va->name_plyer }} </b>
                        </div>

                        @endif --}}

                        
                       
                       {{-- <div class="col-md-4"> {{ $va->maney_h }} </div>
                       <div class="col-md-4"> {{ $va->from }}  </div>

                       <div class="col-md-4"> {{ $va->name_plyer }}  </div> --}}
                       {{-- <div class="col-md-3"> {{ $va->name_plyer }} </div> --}}
                            
                      

   
                {{-- </div>
    </div>

    @endforeach    --}}

    <table class="table">
        <thead>
          <tr>
            <th scope="col"> </th>
            <th scope="col"> </th>

            <th scope="col">التاريخ </th>
            <th scope="col">عدد الساعات</th>
            <th scope="col"> الي الساعه </th>
            <th scope="col"> من الساعه </th>
            <th scope="col">  رقم تليفون الدفع </th>
            <th scope="col">اسم اللاعب</th>
          </tr>
        </thead>


        <tbody>
            @if ( @$req_day > 0 )

                    @foreach ($addstdstats as $va )

                    <tr>

                        <td></td>
                        <td></td>
                        <th scope="row">

                            {{-- <form action="delet_req_from_std" method="POST">
                                @csrf
                                        <input type="hidden" name="id_hagz" value="{{ $va->id }}">             
                                        {{-- <button type="submit" name="edit"> <img src="img/remove.png" alt=""></button> --}}
                           {{-- </form> --}}
                           {{ $va->day }} /{{ $va->month }}/{{ $va->year_ }}
                        </th>
                     
                        <td>{{ $va->maney_h }}</td>
                        <td>{{ $va->to }}</td>
                        <td>{{ $va->from }}</td>
                        <td>{{ $va->phone_user }}</td>
                        <td>{{ $va->name_plyer }} </td>
                    </tr>
                    
                    @endforeach   
            @endif



            @if ( @$iduser > 0 )

            <style>
                button{
                    width: 50px;
                    height: 36px;
                    border-radius: 8px;
                }
            </style>

            @foreach ($addstdstats as $va )

            <tr>
                <th scope="row">

                 
                    <div class="row">

                    

                        <div class="col-md-3">

                             <form action="update_req_from_std" method="POST">
                                      @csrf
                                 <input type="hidden" name="id_hagz" value="{{ $va->id }}"> 
                                 <input type="hidden" name="stst" value="{{ $va->stat_ }}"> 

                                  <button type="submit" class="btn-success" name="delet"> تأكيد</button>
                            </form>
                        </div>
                    </div></th>

                        <th scope="row">

                 
                            <div class="row">


                            <div class="col-md-3">

                                            <form action="delet_req_from_std" method="POST">
                                                @csrf
                                                        <input type="hidden" name="id_hagz" value="{{ $va->id }}">             
                                                        <button type="submit" class="btn-danger" name="edit"> <img src="img/remove.png" alt=""></button>
                                            </form>
                    
                            </div>
                            {{-- <div class="col-md-3">
                            </div>
                            <div class="col-md-3">
                            </div> --}}
                        </div>

                    </th>
               


                <td>  {{ $va->day }} /{{ $va->month }}/{{ $va->year_ }}</td>
                
                <td>{{ $va->maney_h }}</td>
                <td>{{ $va->to }}</td>
                <td>{{ $va->from }}</td>
                <td>{{ $va->phone_user }}</td>
                <td>{{ $va->name_plyer }} </td>
            </tr>
            
            @endforeach   
         @endif


    </tbody>
  </table>

</div>

</div>
</div>






@endsection