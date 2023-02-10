
@extends('layout/navbar')
    
@section("login_stad")

<link rel="stylesheet" href="css/user/login.css">

<style>
    body{
        background-image: url("img/texture-green-grass-surface-wallpaper-concept\ 1.jpg");
        background-repeat: no-repeat, repeat;
        width: 100%;
        height: 100%;
    }
    </style>


      <div class="container">

        <div class="div_form">
            <div class="form_description">
                <img src="../img/b323c772-df2c-4dba-8ac0-c37869e37f65 1.png" alt="">

            </div>
            <div class="form_heder"style="width: 252px; left: 18px;">تسجيل الدخول  كمقدم خدمة </div>
            <form action="loginstd" method="POST">
                @csrf
                    <label for="">البريد الاليكتروني</label>
                <input type="text" name="email" value="{{ Cookie::get('email_std'); }}" class="textfeld"><br>
                <label for="">  كلمة السر</label>
                <input type="text" name="password"  value="{{ Cookie::get('password_std'); }}" class="textfeld"><br>
                <label class="resetpass" for="">  نسيت كلمه السر ..؟</label>
                <input type="submit" class="login" value="تسجيل الدخول">

                <label class="createacc" for="">   <a href="regester-stadium">لا تملك حساب ..؟ , انشاء حساب  </a> </label>



            </form>
        </div>

      </div>

      @endsection