@extends('layout/navbar')
    
@section("regester_stad")

<link rel="stylesheet" href="css/user/regester.css">
<style>
    body{
        background-image: url("img/texture-green-grass-surface-wallpaper-concept\ 1.jpg");
        background-repeat: no-repeat, repeat;
        width: 100%;
        height: 100%;
        color: white;
    }

    .label{
        color: white;
    }
    </style>



<div class="container">

    <div class="div_form">
        <div class="form_description">
            <img src="../img/b323c772-df2c-4dba-8ac0-c37869e37f65 1.png" alt="">

        </div>
        <div class="form_heder" style="left: 29px;" {{ __('reg_std') }}></div>
        <form action="registrationstd" method="post">
            @csrf


            <div class="row">
                <div class="col-md-6">
                    <label for="">{{ __('f_name') }}</label>
                    <input type="text" name="name_2" class="textfeld"><br>
                    <label for=""> {{ __('phone') }}</label>
                    <input type="text" name="phone" class="textfeld"><br>
                    <label for="">{{ __('city') }}</label>
                                       <input type="text" name="city" class="textfeld"><br>

                    <!--<select name="city" id="">-->
                    <!--    <option value="الشروق">الشروق</option>-->
                    <!--    <option value="السلام">السلام</option>-->
                    <!--</select>-->
                    <label for="">{{ __('v_pass') }}</label>
                    <input type="text" name="pass_v" class="textfeld"><br>
                    {{-- <label for="">  العنوان بالتفصيل </label>
                    <input type="text" name="ather_inform" class="textfeld"><br>

                    <label for="">   نوع الرياضة </label>

                    <select name="type_std" id="">
                        <option value="1">كره قدم</option>
                        <option value="2">كره سله</option>
                    </select> --}}
                </div>
                <div class="col-md-6">
                       <label for=""> {{ __('s_name') }}</label>
                    <input type="text" name="name_1" class="textfeld"><br>
                    <label for=""> {{ __('Email') }}</label>
                    <input type="text" name="email" class="textfeld"><br>
                    <label for=""> {{ __('gafranator') }}</label>
                   <input type="text" name="stat" class="textfeld"><br>
                    <!--<select name="stat" id="">-->
                    <!--    <option value="القاهره">القاهره</option>-->
                    <!--    <option value="الاسكندريه"> الاسكندريه</option>-->
                    <!--</select>-->
                    
                    
                    <label for="">{{ __('password') }}</label>
                    <input type="text" name="password" class="textfeld"><br>

                    {{-- <label for="">   اسم الملعب</label>
                    <input type="text" name="name_studam" class="textfeld"><br>

                    <label for="">   عدد اللاعبين</label>
                                        
                    <select name="many_players" id="">
                        <option value="1">1</option>
                        <option value="2">2</option>
                    </select> --}}
                </div>

           
                <!-- <label for="">البريد الاليكتروني</label>
            <input type="text" name="email" class="textfeld"><br>
            <label for="">  كلمة السر</label>
            <input type="text" name="password"  class="textfeld"><br>-->
           
         <div class="col-md-12">  <input type="submit" class="login" value="{{ __('createAcc') }} "></div> 


         <label class="resetpass" for=""><a href="login-stadium">{{ __('uHaveAcc') }}  </a></label> 
        </div>



        </form>
    </div>

  </div>


@endsection