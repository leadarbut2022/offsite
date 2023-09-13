@extends('layout/navbar')

@section("regester")

<link rel="stylesheet" href="css/user/regester.css">
<style>
    body{
        background-image: url("img/texture-green-grass-surface-wallpaper-concept\ 1.jpg");
        background-repeat: no-repeat, repeat;
        width: 100%;
        height: 100%;
    }

    input{
        text-align: right;
    }

    select{
        text-align: right;

    }

    .login{
        text-align: center;

    }
    </style>

<div class="container">

    <div class="div_form">
        <div class="form_description">
            <img src="../img/b323c772-df2c-4dba-8ac0-c37869e37f65 1.png" alt="">

        </div>
        <div class="form_heder" style="left: 0px;">{{ __('reg_user') }}</div>
        <form action="registrationuser" method="post">
            @if (session('stat_add'))
                <h3> {{ session('stat_add') }}</h3>
            @endif
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <label for="">{{ __('s_name') }}</label>
                    <input type="text" name="name_2" class="textfeld"><br>
                    <label for="">  {{ __('phone') }}</label>
                    <input type="text" name="phone" class="textfeld"><br>
                    <label for="">{{ __('city') }}</label>
                    {{-- <select name="city_" id="">
                        <option value="الشروق">الشروق</option>
                        <option value="السلام">السلام</option>
                    </select> --}}
                    <input type="text" name="city_" class="textfeld"><br>

                    <label for="">   {{ __('v_pass') }} </label>
                    <input type="password" name="password" id="myInput_" class="textfeld"><br>
                    {{ __('vew_pass') }}<input type="checkbox" onclick="myFunction_()">  

                </div>
                <div class="col-md-6">
                       <label for=""> {{ __('f_name') }}</label>
                    <input type="text" name="name_1" class="textfeld"><br>
                    <label for="">  {{ 'Email' }}</label>
                    <input type="email" name="email" class="textfeld"><br>
                    <label for=""> {{ __('gafranator') }}</label>
                   
                    <input type="text" name="stat" class="textfeld"><br>

                    {{-- <select name="stat" id="">
                        <option value="القاهرة">القاهرة</option>
                        <option value="الجيزة">الجيزة</option>
                    </select> --}}
                    
                    <label for="">  {{ __('password') }} </label>
                    <input type="password" name="password_v" id="myInput" class="textfeld"><br>
                      {{ __('vew_pass') }} <input type="checkbox" onclick="myFunction()"> 

                </div>

           
                <!-- <label for="">البريد الاليكتروني</label>
            <input type="text" name="email" class="textfeld"><br>
            <label for="">  كلمة السر</label>
            <input type="text" name="password"  class="textfeld"><br>-->
           
         <div class="col-md-12">  <input type="submit" class="login" value="انشاء حساب"></div> 


         <label class="resetpass" for=""><a href="login">{{ __('uHaveAcc') }}</a></label> 
        </div>



        </form>
    </div>
    <script>
        function myFunction() {
          var x = document.getElementById("myInput");
          if (x.type === "password") {
            x.type = "text";
          } else {
            x.type = "password";
          }
        }


        function myFunction_() {
          var x = document.getElementById("myInput_");
          if (x.type === "password") {
            x.type = "text";
          } else {
            x.type = "password";
          }
        }
        </script>
  </div>
@endsection