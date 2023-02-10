@extends('layout/navbar')
    
@section("editprof_user")
<link rel="stylesheet" href="css/user/edit.css">

<style>
            body{
            background-image: url("img/texture-green-grass-surface-wallpaper-concept\ 1.jpg");
            /* background-repeat: no-repeat, repeat; */
            width: 100%;
            height: 100%;
        }
        input { 
    text-align: right; 
    padding: 0px 5px;
}


</style>

<div class="container ">
    <div class="edit_inform">
        <form action="" method="" >
            @csrf
                <div class="row">
                    <div class="col-md-5">
                        <div class="input_edit_prof_img">
                            <div class="vw_photo">
                                <img src="img/stad.jpg" alt="" srcset="">
                            </div>
                            <input id="image" type="file" name="profile_photo" placeholder="Photo" required="" capture>
                        </div>
                    </div>
                    <div class="col-md-7">
        
                        <div class="row">
                            <div class="col-md-6"> <label for="">الاسم الثاني</label> </div>
                            <div class="col-md-6"><label for=""> الاسم الاول</label></div>
                        </div>

                        <div class="input_edit_prof_1">
                            <input type="text" class="input_name">
                            <input type="text" class="input_name">
                            <br><br>
                            
                            <label for="">رقم الهاتف</label>
                            <br>
                            <input type="text" class="phone">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6"> <label for="">المدينة</label> </div>
                            <div class="col-md-6"><label for=""> المحافظة</label></div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="input_edit_prof_2">
                            <input type="text" class="mohawza">
                            <input type="text" class="city">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="input_edit_prof_3">
                            <input type="submit" value="احفظ">

                        </div>
                    </div>
                </div>
        </form>


    </div>
    <div class="edit_password">
        <form action="">
            @csrf
            <div class="row">
                <div class="col-md-12">
                    <h2 style="    POSITION: RELATIVE;
                    right: 233px;
                    margin-bottom: 42px;
                ">تغيير كلمة المرور</h2>
                </div>

                <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="">تأكيد كلمة المرور القديمة</label>
                            </div>
                            <div class="col-md-6">
                                <label for="">
                                    كلمة المرور القديمة
                                </label>
                            </div>
                        </div>
                </div>


                <div class="col-md-12">
                    <div class="input_reset_pass_1">
                        <input type="text">
                        <input type="text">
                    </div>
                </div>

                {{-- <div class="col-md-12">

            </div> --}}
                <div class="col-md-12">
                    <div class="input_reset_pass_2">
                        <div class="row">
                            <div class="col-md-12">
                                <label for="" style="
                                position: relative;
                                margin-top: 46px;
                            ">كلمة المرور الجديدة</label>
                            </div>
                        </div>

                        <input type="submit" class="btn_submit" value="احفظ">
                        <input type="text" >
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>


@endsection
