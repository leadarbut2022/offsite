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


    .navbar{
    display: none;
}

.footer{
    display: none;
}
    </style>

<div class="container">

    <div class="div_form">
        <div class="form_description">
            <img src="../img/b323c772-df2c-4dba-8ac0-c37869e37f65 1.png" alt="">

        </div>
        <div class="form_heder" style="left: 0px;"> اضافة ادمن  </div>
        <form action="regesterAdmin_post" method="post">
            @if (session('stat_add'))
                <h3> {{ session('stat_add') }}</h3>
            @endif
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <label for=""> البريد الاليكتروني</label>
                    <input type="text" name="email" class="textfeld"><br>
           
                    <label for=""> تاكيد كلمة السر </label>
                    <input type="text" name="password" class="textfeld"><br>
                </div>
                <div class="col-md-6">
                       <label for="">الاسم الاول</label>
                    <input type="text" name="name_1" class="textfeld"><br>
              
              
                    
                    <label for="">  كلمة السر</label>
                    <input type="text" name="password_2" class="textfeld"><br>
                </div>

           
                <!-- <label for="">البريد الاليكتروني</label>
            <input type="text" name="email" class="textfeld"><br>
            <label for="">  كلمة السر</label>
            <input type="text" name="password"  class="textfeld"><br>-->
           
         <div class="col-md-12">  <input type="submit" class="login" value="انشاء حساب"></div> 


         {{-- <label class="resetpass" for=""><a href="login">تملك حساب ..؟ , تسجيل الدخول</a></label>  --}}
        </div>



        </form>
    </div>

  </div>
@endsection