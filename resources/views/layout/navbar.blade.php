<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    {{-- <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet"> --}}
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/home.css">



    <title>Document</title>
</head>
<body>
    

     
    <nav class="navbar  navbar-expand-lg bg-light  " style="padding: 0px;">
        <div class="container-fluid  LIST_NAV">
       
          <div class="collapse navbar-collapse " id="navbarNav">
            <ul class="navbar-nav ul_2">


                      @if (Session()->has('loged_std'))

                      <style>
                        .ul_1{
                           
                        }

                        .namepl_li{
                            width: 391px;
                            text-align: left;

                        }

                        .LIST_NAV .ul_1 {

                            position: relative;
                            /* left: 510px; */
                            width: auto;
                            }

                            .div_ul_2{
    width: 60%;

}


                      </style>

                            <li class="nav-item li_1" style="    margin: 0px 15px;
                            width: 51px;">
                                <a class="nav-link a_1 " href="signOutstd">  <img   style="width: 100%;" src="img/icon_log_out.png" alt=""></a>
                                
                            </li>


                            <li>
                                <a href="dashbord">   <div class="user_proff"><span class="user_icon"> <i class="ri-user-line"></i> </span></div></a>
                            </li>
            
            
                            <li class="namepl_li">
                                <a href="dashbord">  <p class="namepleyr"> plaere name</p></a>
            
                            </li>


                      @endif
               



                      @if (Session()->has('logeduser'))
<style>
    .div_ul_2{
    width: 60%;

}

.LIST_NAV .ul_1{
    position: relative;
 
    width: 228%;
}

</style>

                      <li class="nav-item li_1" style="    margin: 0px 15px;
                      width: 51px;">



                                <a class="nav-link a_1 " href="signOut">  <img   style="width: 100%;" src="img/icon_log_out.png" alt=""></a>
                  
                            </li>   
                                <li>
                                    <a href="req"> <div class="user_proff"><span class="user_icon"> <i class="ri-user-line"></i> </span></div></a>
                                </li>
                
                
                                <li>
                                  <a href="req"> <p class="namepleyr"> plaere name</p></a> 
                
                                </li>
                  
                     @endif
                 
                    {{-- @if (Session()->has('loged_std'))

                          <a class="nav-link a_1 " href="signOut">  <img   style="width: 100%;" src="img/icon_log_out.png" alt=""></a>
                    @endif --}}
                
              
       

            </ul>


     <div class="div_ul_2 ">
        <div class="row">
            
        
            @if (Session()->has('logeduser'))
            <style>
                /* .div_ul_2{
                width: 60%;
            
            } */
            
            .LIST_NAV .ul_1{
                position: relative;
             
                width: 200%;
            }
            
            </style>
@endif            

        <div class="col-4"></div>
        <div class="col-4">
            @if (Session()->has('loged_std') > 0 )
            
            @if (Session()->has('stat_std_add') < 1  )
              
            <a href="edit_std_inf" class="std_err" > <p class="std_err"> الرجاء اضافه ملعب </p></a>
              
            @endif

            @endif
        </div>
        <div class="col-4">

         <ul class="navbar-nav ul_1">

                @if (Session::get('logeduser') == 0 && Session::get('loged_std') == 0)
              <li class="nav-item li_1">
                <a class="nav-link a_1 " href="login">تسجيل الدخول كالاعب</a>
              </li>
              <li class="nav-item li_1">
                <a class="nav-link a_1" href="login-stadium">تسجيل الدخول كمقدم خدمة</a>
              </li>
              @endif
              {{-- <li class="nav-item li_1">
                <a class="nav-link" href="#"> تواصل معنا  </a>
              </li> --}}
              @if (Session::get('loged_std') > 0)

              {{-- <style>
                .ul_1{
                    left: -23px;
                    width: 115%;
                }
              </style> --}}
             <li class="nav-item li_1">
                  <a class="nav-link a_1" style="position: relative;
                  width: 118px;" href="dashbord">  لوحه التحكم  </a>
              </li>


@endif
           




              <li class="nav-item li_1">
                    <a class="nav-link a_qategry a_1 " aria-current="page" href="#footer">الفئات  </a>
              </li>
              <li class="nav-item li_1">
                <a class="nav-link a_1 " href="/" >الرئيسية</a>
              </li>
            </ul>

        </div>
              </div>
          </div>
          {{-- <img src="../img/b323c772-df2c-4dba-8ac0-c37869e37f65 1.png" alt=""> --}}
        </div>
    </div>
      </nav>


@yield("home")
@yield("login_user")
@yield("login_stad")
@yield("regester")
@yield("regester_stad")
@yield("request")
@yield("v_qat")
@yield("resev")
@yield("valdate_req")
@yield("editprof_user")
{{-- @yield("dashbord_std") --}}
@yield("std_layout")
@yield("admin_layout")
@yield("addstd")



















<div class="footer" id="footer">
            <br>
            <br>
            
    <div class="row" style="   
      --bs-gutter-x: 0rem; 
    --bs-gutter-y: 0;
    display: flex;
    flex-wrap: wrap;
    margin-top: calc(-1 * var(--bs-gutter-y)); 
     margin-right: calc(-.5 * var(--bs-gutter-x));
     margin-left: calc(-.5 * var(--bs-gutter-x));">
        <div class="col-md-4"> 
            <div class="binery" style="text-align: right; width: 249px;">
               <h3 style="position: relative; left: 0px;"> Powered by</h3>
                <img src="img/logo2.png" alt="" style="position: relative;  left: 0px; width: 85px;">
            </div>
        </div>
        <div class="col-md-2">
 
                        
                    <h3 style="position: relative;left: 0px;"> مواقع التواصل </h3>
<br>
                    <ul class="list_sochail">
                        <li>
                            <div class="row">
                                <div class="col-3">
                                    <img src="img/Vector.png" alt="">
                                </div>
                                <div class="col-3">
                                    <span>Facebook</span>
                                </div>
                                <div class="col-3"></div>
                                <div class="col-3"></div>


                            </div>




                            <div class="row">
                                <div class="col-3">
                                    {{-- <img src="img/insta.png" alt=""> --}}
                                    <span><i class="ri-instagram-line"></i></span>

                                </div>
                                <div class="col-3">
                                    <span>Instagram</span>
                                </div>
                                <div class="col-3"></div>
                                <div class="col-3"></div>


                            </div>


                            <div class="row">
                             
                                <div class="col-3">
                                    {{-- <img src="img/snap (1).png" alt=""> --}}
                                    <span><i class="ri-snapchat-line"></i></span>

                                </div>
                                <div class="col-3">
                                    <span>Snapshat</span>
                                </div>
                                <div class="col-3"></div>
                                <div class="col-3"></div>

                            </div>
                        </li>
                    </ul>

        </div>
        <div class="col-md-2">
                 
            <h3 style="position: relative;left: 0px; ">  سجل الان </h3>
            <br>
                                <ul class="list_sochail" style="position: relative; left: 0px; text-align: right;">
                                    <li>سجل كمقدم خدمة </li>
                                    <li>سجل كلاعب</li>
                                </ul>
        </div>
        <div class="col-md-2">

            <h3 style="position: relative;left: 0px;">   الفئات </h3>
            <br>
                                <ul class="list_sochail" style="position: relative;left: 0px; text-align: right;">
                                    <li>كره القدم </li>
                                    <li>تنس </li>
                                    <li>بادل </li>
                                    <li> سله</li>
                                    <li> اسكواش</li>
                                    <li>طايرة  </li>
                                </ul>
        </div>
        <div class="col-md-2">

            <div class="logo_footer">
                <img src="img/b323c772-df2c-4dba-8ac0-c37869e37f65 1.png" alt="">
            </div>
        </div>
    </div>



</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>