@extends('admin/layay')


<link rel="stylesheet" href="css/stadium/v_stat.css">
<link rel="stylesheet" id="css_req" href="css/req/req_.css">
<link rel="stylesheet" id="" href="css/req/req.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


@section("v_stat")

<style>
  .footer{
    display: none;
  }

  th,tr,td,table{
    text-align: right;
  }
</style>

<style>
    button{
        width: 50px;
        height: 36px;
        border-radius: 8px;
    }
</style>

<div class="page1">


    {{-- <div class="col-md-12">

        <div class="serch">
            <form action="">
                <input type="search" name="" style="text-align: right" placeholder="اسم الملعب" id="">
                <button><img src="img/serch .png" alt=""></button>
            </form>
        </div>
    </div> --}}

    {{-- {{ $iduser }} --}}


<div class="result">




{{-- <table class="table">
    <thead>
      <tr>
        {{-- <th scope="col"> </th>
        <th scope="col"> </th> --}}

        {{-- <th scope="col">التاريخ </th> --}}
        {{-- <th scope="col">المدينة </th>
        <th scope="col"> المحافظه  </th>
        <th scope="col"> البريد  </th>
        <th scope="col">  رقم تليفون  </th>
        <th scope="col">اسم اللاعب</th>
      </tr>
    </thead>


    <tbody> --}} 
        @if ( @$user > 0 )


        <table class="table">
            <thead>
              <tr>
                {{-- <th scope="col"> </th>
                <th scope="col"> </th> --}}
        
                <th scope="col" name="hh"> </th>
                <th scope="col" name="hh"> </th>
                <th scope="col">المدينة </th>
                <th scope="col"> المحافظه  </th>
                <th scope="col"> البريد  </th>
                <th scope="col">  رقم تليفون  </th>
                <th scope="col">اسم اللاعب</th>
              </tr>
            </thead>
        
        
            <tbody>



                @foreach ($StdInform as $va )

                <tr>
                    <th scope="row">
        
                     
                        <div class="row">
        
                        
{{--         
                            <div class="col-md-3">
        
                                 <form action="update_req_from_std" method="POST">
                                          @csrf
                                     <input type="hidden" name="id_hagz" value="{{ $va->id }}"> 
                                     <input type="hidden" name="stst" value="{{ $va->stat_ }}"> 
        
                                      <button type="submit" class="btn-success" name="delet"> تعديل</button>
                                </form>
                            </div> --}}
                        </div></th>
        
                            <th scope="row">
        
                     
                                <div class="row">
        
        
                                <div class="col-md-3">
        
                                                <form action="delet_user_from_admin" method="POST">
                                                    @csrf
                                                            <input type="hidden" name="id_" value="{{ $va->id }}">    
                                                            <button type="submit" class="btn-danger" name="edit"> <img src="img/remove.png" alt=""></button>
                                                </form>
                        
                                </div>
                                {{-- <div class="col-md-3">
                                </div>
                                <div class="col-md-3">
                                </div> --}}
                            </div>
        
                        </th>
                   
                 
                    <td>{{ $va->city }}</td>
                    <td>{{ $va->stat }}</td>
                    <td>{{ $va->phone }}</td>
                    <td>{{ $va->email }}</td>
                    <td>{{ $va->name }} </td>
                </tr>
                
                @endforeach   
        @endif


        @if ( @$std > 0 )

        <table class="table">
            <thead>
              <tr>
                {{-- <th scope="col"> </th>
                <th scope="col"> </th> --}}
        
                {{-- <th scope="col">التاريخ </th> --}}
                <th scope="col"> </th>
                <th scope="col"> </th>
                <th scope="col"> السعر</th>
                <th scope="col"> الي الساعه  </th>
                <th scope="col"> من الساعه  </th>
                <th scope="col">  رقم تليفون  </th>
                <th scope="col">اسم الملعب</th>
              </tr>
            </thead>
        
            <tbody>

        @foreach ($StdInform as $va )

        <tr>
            {{-- `id`, `name`, `email`, `phone`, `stat`, `city`, `ather_inform`,--}}
            {{-- <td> </td> --}}
            {{-- <td></td>--}}
            <tr>
                <th scope="row">
    
                 
                    <div class="row">
    
                    
    
                        {{-- <div class="col-md-3">
    
                             <form action="update_req_from_std" method="POST">
                                      @csrf
                                 <input type="hidden" name="id_hagz" value="{{ $va->id }}"> 
                                 <input type="hidden" name="stst" value="{{ $va->stat_ }}"> 
    
                                  <button type="submit" class="btn-success" name="delet"> تعديل</button>
                            </form>
                        </div> --}}
                    </div></th>
    
                        <th scope="row">
    
                 
                            <div class="row">
    
    
                            <div class="col-md-3">
    
                                            <form action="delet_std_from_admin" method="POST">
                                                @csrf
         
                                                        <input type="hidden" name="id" value="{{ $va->id }}">             
                                                        <input type="hidden" name="id_" value="{{ $va->id_ }}">             
                                                        <button type="submit" class="btn-danger" name="edit"> <img src="img/remove.png" alt=""></button>
                                            </form>
                    
                            </div>
                            {{-- <div class="col-md-3">
                            </div>
                            <div class="col-md-3">
                            </div> --}}
                        </div>
    
                    </th>
               
         
            <td>{{ $va->prise }}</td>
            <td>{{ $va->to_ }}</td>
            <td>{{ $va->from_ }}</td>
            <td>{{ $va->phone }}</td>
            <td>{{ $va->name }} </td>
        </tr>
        
        @endforeach   
    @endif



        @if ( @$req > 0 )


        <table class="table">
            <thead>
              <tr>
                <th scope="col"> </th>
                <th scope="col"> </th>
        
                {{-- <th scope="col">التاريخ </th> --}}
                <th scope="col">اسم الملعب </th>
                <th scope="col"> اسم اللاعب  </th>
                <th scope="col"> التاريخ  </th>
                <th scope="col">  تاريخ الانشاء   </th>
                <th scope="col">رقم الطلب </th>
              </tr>
            </thead>
        
            <tbody>

        <style>
            button{
                width: 50px;
                height: 36px;
                border-radius: 8px;
            }
        </style>

        @foreach ($StdInform as $va )

        <tr>
            <th scope="row">

             
                <div class="row">

                

                    {{-- <div class="col-md-3">

                         <form action="update_req_from_std" method="POST">
                                  @csrf
                             <input type="hidden" name="id_hagz" value="{{ $va->id }}"> 
                             <input type="hidden" name="stst" value="{{ $va->stat_ }}"> 

                              <button type="submit" class="btn-success" name="delet"> تعديل</button>
                        </form>
                    </div> --}}
                </div></th>

                    <th scope="row">

             
                        <div class="row">


                        <div class="col-md-3">

                                        <form action="delet_req_from_admin" method="POST">
                                            @csrf
                                                    <input type="hidden" name="id" value="{{ $va->id }}">             
                                                    <button type="submit" class="btn-danger" name="edit"> <img src="img/remove.png" alt=""></button>
                                        </form>
                
                        </div>
                        {{-- <div class="col-md-3">
                        </div>
                        <div class="col-md-3">
                        </div> --}}
                    </div>

                </th>
           
           
                {{-- `id`, `id_user`, `id_p`, `from`, `to`, `prise`, `remember_token`, `created_at`, `updated_at`, `maney_h`, `phone_user`, `stat_`, `name_std`, `name_plyer`, `date_`, `day`, `month`, `year_`, `to_date`, `to_month`, `to_year`  --}}

            
            <td>{{ $va->name_std }}</td>
            <td>{{ $va->name_plyer }}</td>
            {{-- <td>{{ $va->day . $va->month  .$va->year_ }}</td> --}}
            <td>  {{ $va->day }} /{{ $va->month }}/{{ $va->year_ }}</td>

            <td>{{ $va->created_at }}</td>
            <td>{{ $va->id }} </td>
        </tr>
        
        @endforeach   
     @endif


</tbody>
</table>

</div>

</div>



@endsection