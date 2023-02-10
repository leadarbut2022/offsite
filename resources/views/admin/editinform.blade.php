@extends('admin/layay')




@section("edit_inform")


@if ( @$user > 0)


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

    
@endif




@if ( @$std >0)


<link rel="stylesheet" href="css/stadium/v_stat.css">
{{-- <link rel="stylesheet" id="css_req" href="css/req/req_.css"> --}}


@section("edit_inform")

<style>
    .dashbord {
  height: 929px;
}
/*
.body_edit {
  height: 906px;
  border-radius: 23px;
  color: #163A5F;
  width: 1001px;
  margin: 20px auto;
  margin: 13px auto;
  background: rgba(217, 217, 217, 0.5);
  padding-right: 14px;
  padding-top: 29px;
} */
</style>
<link rel="stylesheet" id="" href="css/stadium/edit_.css">


<div class="body_edit">
    <form action="add_std" method="POST"  enctype="multipart/form-data">
        @csrf
        <div class="row" >
            <div class="col-md-4">
                <div class="img_vw">
                    <img src="{{  @$StdInform->img }}" alt="">

                </div>
                <input class="button_edit" id="image" name="img" type="file" name="profile_photo" placeholder="Photo" required="" capture>


<br>
                <input type="submit" value="احفظ" class="save" >
            </div>
            
            <div class="col-md-8">

                <br><br>
                <label for="">  اسم الملعب </label>
                <br>
                <input type="text" class="phone" name="name" value=" {{  @$StdInform->name }}"  style="text-align:right;">
                <br>
                <br>
                <label for=""> رقم الملعب </label>
                <br>
                <input type="text" class="phone" name="phone"  value=" {{  @$StdInform->phone }}"  style="text-align:right;">
                <br>
                <br>
                <label for="">  عنوان الملعب بالتفصيل</label>
                <br>

                <input type="text" class="phone" name="address" value=" {{  @$StdInform->address }}"   style="text-align:right;">
                <br>


                <label for="">  نوع الرياضة</label>
                <br>
         
                <select name="type" id=""  class="phone"  style="text-align:right;">
                    <option value=" {{  @$StdInform->type }}" > {{  @$StdInform->type }} </option>
                    <option value="1">كرة القدم</option>
                    <option value="2">تنس</option>
                    <option value="3">بادل</option>
                    <option value="4">كرة السلة</option>
                    <option value="5">اسكواش</option>
                    <option value="6">كرة الطائرة</option>
                </select>
                {{-- <input type="text" class="phone" name="address"> --}}
                <br>
            

              
         
              
            
                <br>

                <div class="from_to">
                    <div class="row">
                        <div class="col-md-12">
                            <b>المواعيد</b>
                        </div>
                        <div class="col-md-12">
                             <div class="row">
                                <div class=" col-md-4"> السعر</div>
                                <div class=" col-md-4">الي</div>
                                <div class=" col-md-4"> من</div>
                             </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class=" col-md-4">
                                    <input type="text" name="prise" value="{{ $StdInform->prise }}"  style="text-align:right;">
                                    <input type="hidden" name="id_user" value="{{   session('loged_std') }}">
                                </div>
                                <div class=" col-md-4">
                                        <select name="to_" id=""  style="text-align:right;">
                                            <option value=" {{  @$StdInform->to_ }}" > {{  @$StdInform->to_ }} </option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    
                                        </select> 
                                    </div>
                                <div class=" col-md-4"> 
                                    <select name="from_" id=""  style="text-align:right;">
                                        <option value=" {{  @$StdInform->from_ }}" > {{  $StdInform->from_ }} </option>6
                                        <option value="1">4</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    
                                        </select> 
                                </div>
                             </div>
                        </div>
                        {{-- <div class="col-md-12">
                            <div class="row">
                                <div class=" col-md-4">السعر</div>
                                <div class=" col-md-4">الي</div>
                                <div class=" col-md-4">من</div>
                             </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class=" col-md-4">
                                    <input type="text">
                                </div>
                                <div class=" col-md-4">
                                    <select name="" id="">
                                        <option value="">1</option>
                                        <option value="">2</option>
                                        <option value="">3</option>
                                    
                                        </select> 
                                </div>
                                <div class=" col-md-4">
                                    <select name="" id="">
                                        <option value="">1</option>
                                        <option value="">2</option>
                                        <option value="">3</option>
                                    
                                        </select> 
                                </div>
                             </div> --}}
                        {{-- </div> --}}
                        <br>
                    </div>
                </div>


 <br><br>


                <label for=""> معلومات الملعب</label>

                <br>
                
                <textarea name="std_inf" id="" cols="30" rows="10"    style="text-align:right;">{{  @$StdInform->std_inf }}</textarea>
            </div>

        </div>
    </form>
</div>
    
@endif



@endsection