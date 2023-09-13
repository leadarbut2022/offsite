
@extends('layout/navbar')




@section("login_user")
<link rel="stylesheet" href="css/user/login.css">

<style>


body{
    background-image: url("img/texture-green-grass-surface-wallpaper-concept\ 1.jpg");
    background-repeat: no-repeat, repeat;
    width: 100%;
    height: 100%;
}
</style>


<div class="div_body">


<div class="container">

    <div class="div_form">
        <div class="form_description">
            <img src="../img/b323c772-df2c-4dba-8ac0-c37869e37f65 1.png" alt="">

        </div>
        <div class="form_heder">  {{ __('log_user') }} </div>
        <form action="loginuser" method="post">
        @csrf
                <label for="">{{ __('Email') }} </label><br>
            <input type="text" name="email" value="{{ Cookie::get('email'); }}" class="textfeld"><br>
            <label for="">  {{ __('password') }} </label>
            <input type="text" name="password" value="{{ Cookie::get('password'); }}"  class="textfeld"><br>
            <label class="resetpass" for=""> {{ __('forget_pass') }}</label>
            <input type="submit" class="login" value="{{ __('login') }} ">

            <label class="createacc" for=""> <a href="regester"> {{ __('uDontHaveAcc') }} </a> </label>



        </form>
    </div>

  </div>
</div>
@endsection