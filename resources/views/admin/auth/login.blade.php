
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
.navbar{
    display: none;
}

.footer{
    display: none;
}
</style>


<div class="div_body">


<div class="container">

    <div class="div_form">
        <div class="form_description">
            <img src="../img/b323c772-df2c-4dba-8ac0-c37869e37f65 1.png" alt="">

        </div>
        <div class="form_heder">تسجيل دخول ادمن </div>
        <form action="loginAdmin_post" method="post">
        @csrf
                <label for="">البريد الاليكتروني</label>
            <input type="text" name="email" value="{{ Cookie::get('email_admin'); }}" class="textfeld"><br>
            <label for="">  كلمة السر</label>
            <input type="text" name="password" value="{{ Cookie::get('password_admin'); }}"  class="textfeld"><br>
            <label class="resetpass" for="">  نسيت كلمه السر ..؟</label>
            <input type="submit" class="login" value="تسجيل الدخول">

            <label class="createacc" for=""> <a href="regester"> لا تملك حساب ..؟ , انشاء حساب  </a> </label>



        </form>
    </div>

  </div>
</div>
@endsection