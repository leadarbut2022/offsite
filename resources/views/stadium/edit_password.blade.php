@extends('stadium/layaut')

<link rel="stylesheet" href="css/stadium/v_stat.css">


@section("edit_password")

<style>
    .form_reset{ 
     border-radius: 23px;
    padding-top: 46px;
    height: 500px;
    width: 900px;
    margin: 50px auto;
    align-items: center;
    text-align: center;
    background: #30C385;
    color: black;

    }

    input{
        width: 300px;
    height: 39px;
    margin: 9px 0px;
    border-radius: 14px;
    }
    .save{
        width: 100px;
    height: 39px;
    margin: 9px 0px;
    border-radius: 14px;
    }
</style>

<div class="form_reset">
    <form action="edditpassword_std_post" method="POST">
        @csrf
        <label for=""> كلمة المرور القديمة</label> <br>
        <input type="text" name="old_pass"><br>

        <label for=""> كلمة المرور الديدة</label> <br>
        <input type="text" name="new_pass"><br>
        <label for="">تأكيد كلمة المرور الجديدة </label> <br>
        <input type="text" name="new_pass_valdate"><br>
        <input class="save" type="submit" value="احفظ">

    </form>
</div>

@endsection