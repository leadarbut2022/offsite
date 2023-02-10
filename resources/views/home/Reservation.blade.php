@extends('layout/navbar')
    
@section("resev")
<link rel="stylesheet" href="css/Reservation.css">


<style>
    body{
        background-image: url("img/texture-green-grass-surface-wallpaper-concept\ 1.jpg");

    }
            .container{
            /* background-repeat: no-repeat, repeat; */
            
            /* width: 100%;
            height: 100%; */
            color:  #163A5F;
;
        }

        .img_stad_prof{
            background-image: url(img/stad2.jpg);
            width: 531px;
            background-repeat: no-repeat, repeat;
            background-size: 100%;
            height: 352px;
            border-radius: 22px;

                    }


</style>

        <div class="container">

<div class="bac_body">

    <br>
            <div class="row">

            {{-- @foreach ($prodect as $std ) --}}
                <div class="col-md-6">
                    <div class="inform_stad">
                   

                        @if (Session::get('in_prosses'))
                            {{-- <div class="alert alert-danger"> --}}
                               <b style="position: relative;
                               top: 121px;
                               color: red;
                               background: white;"> {{ Session::get('in_prosses') }}</b>
                            {{-- </div> --}}
                        @endif
                     
                        <h1>اسم الملعب</h1>
                        <div class="h_from">
                            <button class="tag_a_prise" > . </button>  <b> مواعيد العمل من <span style=" position: relative; margin: 0px 7px;"> {{ ' '.$prodect->from_.' ' }} </span>  الي <span style=" position: relative; margin: 0px 5px;"> {{ ' '.$prodect->to_.' ' }} </span>  </b>
        
                        </div>
                        <div class="h_from">
                            <button class="tag_a_prise"  style="width: 242px;"> {{ ' '.$prodect->prise.' ' }} </button>  <b> سعر الساعه  <span style=" position: relative; margin: 0px 10px;">  </span>   <span style=" position: relative; margin: 0px 5px;">  </span>  </b>
        
                        </div>
                        {{-- <div class="h_to">
                            <button class="tag_a_prise" >100</button>  <b> سعر الساعه من <span>45</span>  الي <span>50</span>  </b>

                        </div> --}}
                        <br>

                        <p>اختيار التاريخ</p>

                            <div class="form">

                                <form action="valdate_hag" method="POST">
                                    @csrf
                                    <input type="hidden" name="id_std" value="{{ $prodect->id_}}">
                                    <input type="hidden" name="id_user" value="{{ $iduser }}">
                                    <input type="hidden" name="prise" value="{{ $prodect->prise }}">
                                    <input type="hidden" name="name_std" value="{{ $prodect->name }}">
                                    <input type="hidden" name="name_plyer" value="{{ $name_plyer->name }}">

                                    
                                  <div>

                                    <select name="day" style="text-align:right; margin-right: 25px;">
                                        <option value="">يوم</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="">10</option>
                                        <option value="">11</option>
                                        <option value="">12</option>
                                        <option value="">13</option>
                                        <option value="">14</option>
                                        <option value="">15</option>
                                        <option value="">16</option>
                                        <option value="">17</option>
                                        <option value="">18</option>
                                        <option value="">19</option>
                                        <option value="">20</option>
                                        <option value="">21</option>
                                        <option value="">22</option>
                                        <option value="">23</option>
                                        <option value="">24</option>
                                        <option value="">25</option>
                                        <option value="">26</option>
                                        <option value="">27</option>
                                        <option value="">28</option>
                                        <option value="">29</option>
                                        <option value="">30</option>
                                        <option value="">31</option>
                                      
                                    </select>

                                    <select name="manth" style="text-align:right; margin-right: 25px;">
                                        <option value="">شهر</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                    </select>

                                    <select name="year" style="text-align:right; margin-right: 25px;">
                                        <option value="">سنة</option>
                                        <option value="2023">2023</option>
                                        <option value="2024">2024</option>
                                        <option value="2025">2025</option>
                                        <option value="2026">2026</option>
                                        <option value="2027">2027</option>
                                        <option value="2028">2028</option>
                                        <option value="2029">2029</option>
                                        <option value="2023">2023</option>

                                    </select>

                                  

                                  </div>

                                  <br>
                                    

                                    <select name="from" id=""  style="text-align:right; margin-right: 25px;">
                                        <option value="1">1 Am</option>
                                        <option value="2">2 Am</option>
                                        <option value="3">3 Am</option>
                                        <option value="4">4 Am</option>
                                        <option value="5">5 Am</option>
                                        <option value="6">6 Am</option>
                                        <option value="7">7 Am</option>
                                        <option value="8">8 Am</option>
                                        <option value="9">9 Am</option>
                                        <option value="10">10 Am</option>
                                        <option value="11">11 Am</option>
                                        <option value="12">12 Am</option>
                                        <option value="13">13 Bm</option>
                                        <option value="14">14 Bm</option>
                                        <option value="15">15 Bm</option>
                                        <option value="16">16 Bm</option>
                                        <option value="17">17 Bm</option>
                                        <option value="18">18 Bm</option>
                                        <option value="19">19 Bm</option>
                                        <option value="20">20 Bm</option>
                                        <option value="21">21 Bm</option>
                                        <option value="22">22 Bm</option>
                                        <option value="23">23 Bm</option>
                                        <option value="24">24 Bm</option>
                                    
                                    </select>
                                    <label for="" style="    margin-right: 49px;
                                    "> من الساعة</label>
                                    <br>
<br>




                                    <select  id="" name="to"  style="  margin-right: 5px; text-align:right;">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                        <option value="13">13</option>
                                        <option value="14">14</option>
                                        <option value="15">15</option>
                                        <option value="16">16</option>
                                        <option value="17">17</option>
                                        <option value="18">18</option>
                                        <option value="19">19</option>
                                        <option value="20">20</option>
                                        <option value="21">21</option>
                                        <option value="22">22</option>
                                        <option value="23">23</option>
                                        <option value="24">24</option>
                                    
                                        
                                    </select>
                                    <label for=""style="    margin-right: 49px;
                                    "> عدد الساعات</label>

                                    <br>
                                         <button type="submit">  تأكيد الحجز </button>


                                    {{-- <input type="submit" value="تأكيد الحجز"> --}}

                                </form>
                            </div>
                    </div>
                </div>
                <div class="col-md-6">
                            <div class="img_stad" >
                                    
                                <div class="img_stad_prof" style="overflow: hidden;">
                                    <div class="name_stad">
                                        <img style="width: 100%;   height: 351px;" src="{{ $prodect->img }}" alt="" srcset="">
                                  
                                    </div>
                                </div>
                            </div>

                            <div class="address_std"></div>


                </div>

            </div>

                     
            

<br>

            <div class="row">
              <div class="col-md-12">  <div class="bau_std">
            <b>{{ $prodect->std_inf }}</b>    
            </div></div>

<h3 style="    margin: 15px -56px;">عنوان الملعب </h3>
            <div class="col-md-12">  <div class="bau_std">
                <b>{{ $prodect->address }}</b>    

            </div></div>

                {{-- @endforeach --}}
            </div>
          

            <hr style="    border: 2px solid beige;">


            <div class="row row_bac">



                                        
                            <div class="col-md-6" style="text-align:start;">
                                <b   style="  position: relative;
                                left: 18px;
                                font-size: 21px;"><a href="v_qat?id={{ $prodect->type }}"> المزيد </a></b>

                            </div>
                            <div class="col-md-6" style="text-align:end;">
                                        <b style="    position: relative;
                                        right: 18px;
                                        font-size: 21px;">ملاعب مقترحة</b>
                            </div>

                        </div>
                        
                        <div class="row row_bac">


                  @foreach ($addstdstats as $std )
                                          
                                    <div class="col-md-3">

                                            <div class="game">
                                                <div class="game_img">
                                                    <img src="{{ $std->img }}" alt="">
                                                </div>
                                                <div class="name_studum">
                                                   <h3> <a style="color: black" href="resev?id={{  $std->id_ }}">{{ $std->name }}</a></h3>
                                                    <b><i class="ri-star-line"></i></b>
                                                </div>
                                            </div>   
                                    </div>

                                    @endforeach

               
                                  
                                </div>




            </div>
            
        </div>
    </div>
        <br><br>


        <script src="js/jquery.min.js"></script>
        <script src="js/popper.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/main.js"></script>
@endsection