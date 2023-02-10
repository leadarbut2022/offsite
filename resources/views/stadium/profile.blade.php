{{-- @extends('layout/navbar') --}}
@extends('stadium/layaut')

<link rel="stylesheet" href="css/stadium/dashbord.css">



@section("dashbord_std")


            <div class="row">
                <div class="col-md-8">
                    <br><br>
                    <h1>اسم الملعب</h1>
                </div>
                <div class="col-md-4">
                    <h1> </h1>
                </div>
            </div>


            <div class="ehsa">
                <div class="row">
                    <div class="col-md-6"> 

                   <a href="v_stat_std_valdate"> <button href="" style="background: none; border:none;                         color: white;
                    ">
    
                            <div class="v_e_w">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="infhorm">
                                            <h3>حجوزات اليوم</h3>
                                            <b>{{ $num_hagz }}</b>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="icon">
                                            <img src="img/ehsa.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>

                    </button>    </a>
                    </div>
                    <div class="col-md-6">
                        <a href="v_allreqouest"> <button style="background: none; border:none;  position: relative;
                        right: 92px;                       color: white;
                        ">

                                <div class="v_e_w">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <div class="infhorm">
                                                        <h3>كل الطلبات</h3>
                                                        <b> {{ $num_hagz_all }}</b>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="icon">
                                                        <img src="img/ ehsa2.png" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                </div>

                        </button></a>
        

                    </div>
                    <div class="col-md-12">
                        <a href="v_stat_std"> <button style="background: none; border:none; 
                        right: 313px;
                        position: relative;
                        color: white;
                    ">
                                <div class="v_e_w">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="infhorm">
                                                    <h3>الطلبات المعلقة</h3>
                                                    <b>{{ $num_hagz_ned }}</b>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="icon">
                                                    <img src="img/ ehsa2.png" alt="">
                                                </div>
                                            </div>
                                        </div>
                                </div>

                       </button></a>

                    </div>
                </div>
            </div>



@endsection


{{--             
        </div>



        <div class="col-md-3" style="    height: 600px; ">
            <div class="butt_right">
                <button style="color:; background-color: none;" id="req_chin" onclick="req_chin()">
                    <h6><img style="    width: 29px;
                        " src="img/home.png" alt=""></h6>
                      الصفحة الرئيسية</button> <br>
                <button style="" id="req_chin_2" onclick="req_chin_2()">
                <img style="    width: 29px;
                    " src="img/home2.png" alt="">
                                    <h6>اعدادات الملعب</h6>

                    </button>
            </div>
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
    
    </script> --}}

{{-- <link rel="stylesheet" href="css/stadium/dashbord.css">
<style>
    .LIST_NAV .ul_1 {
        display: none;
        position: relative;
        left: 510px;
    }
    body{
                background-image: url("img/texture-green-grass-surface-wallpaper-concept\ 1.jpg");
                /* background-repeat: no-repeat, repeat; */
                width: 100%;
                height: 100%;
            }
    
    
            .dashbord{
                color: white;
            }
            b{
                font-size: 22px;

            }
    </style>

<div class="dashbord">

    <div class="row"> --}}
   
        {{-- <div class="col-md-9"> --}}