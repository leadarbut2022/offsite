@extends('layout/navbar')

@section("admin_layout")


<link rel="stylesheet" href="css/stadium/dashbord.css">
{{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> --}}

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

    <div class="row" style="   
    --bs-gutter-x: 0rem; 
  --bs-gutter-y: 0;
  display: flex;
  flex-wrap: wrap;
  margin-top: calc(-1 * var(--bs-gutter-y)); 
   margin-right: calc(-.5 * var(--bs-gutter-x));
   margin-left: calc(-.5 * var(--bs-gutter-x));">
   
       <div class="col-md-9">

         @yield("dashbord")
       @yield("v_stat")
         @yield("edit_inform")
       {{-- @yield("edit_password") --}}


        
        
        
           {{--   <div class="row">
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

                    <button style="background: none; border:none;                         color: white;
                    ">
    
                            <div class="v_e_w">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="infhorm">
                                            <h3>حجوزات اليوم</h3>
                                            <b>12</b>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="icon">
                                            <img src="img/ehsa.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>

                    </button>    
                    </div>
                    <div class="col-md-6">
                        <button style="background: none; border:none;                         color: white;
                        ">

                                <div class="v_e_w">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <div class="infhorm">
                                                        <h3>سجل الطلبات</h3>
                                                        <b>12</b>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="icon">
                                                        <img src="img/ ehsa2.png" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                </div>

                        </button>
        

                    </div>
                    <div class="col-md-12">
                        <button style="background: none; border:none; 
                        right: 248px;
                        position: relative;
                        color: white;
                    ">
                                <div class="v_e_w">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="infhorm">
                                                    <h3>الطلبات المعلقة</h3>
                                                    <b>1212</b>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="icon">
                                                    <img src="img/ ehsa2.png" alt="">
                                                </div>
                                            </div>
                                        </div>
                                </div>

                       </button>

                    </div>
                </div>
            </div> --}}
        </div>
        <div class="col-md-3" style="   height: 940px; ">
            <div class="butt_right">
                <a href="dashbord">
                <button style="color:; background-color: none;" id="req_chin" onclick="req_chin()">
                    <h6><img style="    width: 29px;
                        " src="img/home.png" alt=""></h6>
                      الصفحة الرئيسية</button>
                    </a> <br>


              {{-- <a href="edditStd">  <button style="" id="req_chin_2" onclick="req_chin_2()">
                <img style="    width: 29px;
                    " src="img/home2.png" alt="">
                                    <h6>اعدادات عامة</h6>

                    </button>
              </a> --}}


              <a href="signOutAdmin">  <button style="" id="req_chin_2" onclick="req_chin_2()">
                <img style="    width: 29px;
                    " src="img/home2.png" alt="">
                                    <h6> تسجيل الخروج</h6>

                    </button>
              </a>

              {{-- <a href="edditpassword_std">    <button style="" id="req_chin_2" onclick="req_chin_2()">
                
                                            <h6> تغيير كلمة المرور</h6>
        
                            </button> --}}
              {{-- </a> --}}
            </div>
        </div>
    </div>
</div>


{{-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> --}}

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