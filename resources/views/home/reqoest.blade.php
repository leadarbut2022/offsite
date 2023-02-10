@extends('layout/navbar')
    
@section("request")

<link rel="stylesheet" id="" href="css/req/req.css">
<link rel="stylesheet" id="css_req" href="css/req/req_.css">


<style>
    body{
        background-image: url("img/texture-green-grass-surface-wallpaper-concept\ 1.jpg");
        /* background-repeat: no-repeat, repeat; */
        width: 100%;
        height: 100%;

    }

    .sectian_catogry{


        background-image: url("img/texture-green-grass-surface-wallpaper-concept\ 1.jpg");
        /* background-repeat: no-repeat, repeat; */
        width: 100%;
        height: 100%;
    }

    
</style>
<div class="row" style="    --bs-gutter-x: 0;">
    <div class="col-md-10">

        
        <div class="body_div_req">


                    <div class="row">
<div class="col-12">

                        <div class="page1">


                                <div class="col-md-12">

                                    <div class="serch">
                                        <form action="">
                                            <input type="search" name="" style="text-align: right" placeholder="اسم الملعب" id="">
                                            <button><img src="img/serch .png" alt=""></button>
                                        </form>
                                    </div>
                                </div>



                                <div class="col-md-12">





      

                            <div class="row">

                                <div class="col-md-12">
                                    <h3> الطلبات  </h3>
                                </div>

                            </div>


                            <div class="result">



                               

                               {{--     @foreach ($addstdstats as $va )

                                    <div class="result_item">
                                        
                                  
                                            <div class="row">
                                                    <div class="col-md-2">
                                                        {{-- <form action="update_req" method="POST"> --}}
                                                          {{-- @csrf
                                                                    <input type="hidden" name="id_hagz" value="{{ $va->id }}"> 

                                                                    <button type="submit" name="delet"> <img src="img/edit .png" alt=""></button>
                                                                </form> --}}
                                                        {{-- <form action="delet_req" method="POST">
                                                            @csrf
                                                                    <input type="hidden" name="id_hagz" value="{{ $va->id }}">             
                                                                    <button type="submit" name="edit"> <img src="img/remove.png" alt=""></button>
                                                        </form>
                                                    </div>
                                                    <div class="col-md-5" style="text-align:center">
                                                        <b> {{ $va->created_at }} </b>
                                                    </div>
                                                    <div class="col-md-5" >


    
                                         <b> {{ $va->name_std }} </b>

                                                    </div>
                                            </div>

                                 

                                </div>

                                @endforeach
 --}} 












                                <table class="table">
                                    <thead>
                                      <tr>
                                        <th scope="col"></th>
                                        <th scope="col">عدد الساعات</th>
                                        <th scope="col"> الي الساعه </th>
                                        <th scope="col"> من الساعه </th>
                                        <th scope="col">  التاريخ </th>
                                        <th scope="col">اسم اللاعب</th>
                                      </tr>
                                    </thead>
                                    <style>
                                        .bx{
                                            width: 50px;
                                            height: 36px;
                                            border-radius: 8px;
                                            background-color: red;
                                        }
                                    </style>
                            
                                    <tbody>
                                     
                            
                                                @foreach ($addstdstats as $va )
                            
                                                <tr>
                                                    <th scope="row">
                            
                                                        <form action="delet_req_from_std" method="POST">
                                                            @csrf
                                                                    <input type="hidden" name="id_hagz" value="{{ $va->id }}">             
                                                                    <button class="bx" type="submit" name="edit"> <img src="img/remove.png" alt=""></button>
                                                        </form>
                                                    </th>
                                                    <td>{{ $va->maney_h }}</td>
                                                    <td>{{ $va->to }}</td>
                                                    <td>{{ $va->from }}</td>
                                                    <td>{{ $va->day }} / {{ $va->month }} / {{ $va->year_ }}</td>
                                                    <td>{{ $va->name_plyer }} </td>
                                                </tr>
                                                
                                               
                                                @endforeach 

                                            </tbody>
                                        </table>



                            </div>

        </div></div></div>


    </div>

    <div class="col-12">

                <div class="page_2">
                    <div class="col-md-12">

                        <div class="serch">
                            <form action="">
                                <input type="search" name="" style="text-align: right" placeholder="اسم الملعب" id="">
                                <button><img src="img/serch .png" alt=""></button>
                            </form>
                        </div>
                    </div>



                    <div class="col-md-12">


                            <div class="row">

                                <div class="col-md-12">
                                    <h3> السجل </h3>
                                </div>

                            </div>

                            <div class="result_2">




                                <table class="table">
                                    <thead>
                                      <tr>
                                        <th scope="col"></th>
                                        <th scope="col">عدد الساعات</th>
                                        <th scope="col"> الي الساعه </th>
                                        <th scope="col"> من الساعه </th>
                                        <th scope="col">  التاريخ </th>
                                        <th scope="col">اسم اللاعب</th>
                                      </tr>
                                    </thead>
                                    <style>
                                        .bx{
                                            width: 50px;
                                            height: 36px;
                                            border-radius: 8px;
                                            background-color: red;
                                        }
                                    </style>
                            
                                    <tbody>
                                     
                            
                                                @foreach ($addstdstatshistory as $va )
                            
                                                <tr>
                                                    <th scope="row">
                            
                                                        {{-- <form action="delet_req_from_std" method="POST">
                                                            @csrf
                                                                    <input type="hidden" name="id_hagz" value="{{ $va->id }}">             
                                                                    <button class="bx" type="submit" name="edit"> <img src="img/remove.png" alt=""></button>
                                                        </form> --}}
                                                    </th>
                                                    <td>{{ $va->maney_h }}</td>
                                                    <td>{{ $va->to }}</td>
                                                    <td>{{ $va->from }}</td>
                                                    <td>{{ $va->day }} / {{ $va->month }} / {{ $va->year_ }}</td>
                                                    <td>{{ $va->name_plyer }} </td>
                                                </tr>
                                                
                                               
                                                @endforeach 

                                            </tbody>
                                        </table>


                                {{-- <div class="result_item">

                                    @foreach ($addstdstatshistory as $va )
                                            <div class="row">
                                                    <div class="col-md-2">
                                               
                                                                
                                                                <form action="delet_req" method="POST">
                                                                        @csrf
                                                                                <input type="hidden" name="id_hagz" value="{{ $va->id }}">             
                                                                                <button type="submit" name="edit"> <img src="img/remove.png" alt=""></button>
                                                                    </form>
                                                    </div>
                                                    <div class="col-md-5" style="text-align:center">
                                                        <b> {{ $va->created_at }} </b>
                                                    </div>
                                                    <div class="col-md-5" >

                                                        <b>  {{ $va->name_std }}</b>
                                                    </div>
                                            </div>

                                 
                                        
                                    @endforeach        
                                </div> --}}



                            </div>

                </div>

 


            </div>
        </div>

    </div>  
  </div>



    <div class="col-md-2">
        <div class="butt_right">
            <button style="color:#30C385; background-color: black;" id="req_chin" onclick="req_chin()">الطلبات </button> <br>
            <button style="" id="req_chin_2" onclick="req_chin_2()"> تمت الموافقه عليها</button>
        </div>
    </div>
</div>





<script>

function req_chin() {


        var link = document.getElementById('css_req');
        link.setAttribute('href', 'css/req/req_.css');

        var link_1 = document.getElementById('req_chin');
        link_1.setAttribute('style', 'color:#30C385; background-color: black;');

        var link_2 = document.getElementById('req_chin_2');
        link_2.setAttribute('style', 'color:black; background-color: #30C385;');
    
}


function req_chin_2() {


var link = document.getElementById('css_req');

    link.setAttribute('href', 'css/req/req_2.css');


        var link_1 = document.getElementById('req_chin');
         link_1.setAttribute('style', 'color:black; background-color: #30C385;');

        var link_2 = document.getElementById('req_chin_2');
 
        link_2.setAttribute('style', 'color:#30C385; background-color: black;');

}

</script>


@endsection