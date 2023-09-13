@extends('layout/navbar')
    
@section("home")
      <!-- <div class="container"> -->
<style>
        body{
            background-image: url("img/texture-green-grass-surface-wallpaper-concept\ 1.jpg");
            /* background-repeat: no-repeat, repeat; */
            width: 100%;
            height: 100%;
        }

        .sectian_catogry{


            background-image: url("img/texture-green-grass-surface-wallpaper-concept\ 1.jpg");
            /* background-repeat: no-repeat, repeat; */
           width: 100%;
            height: 100%;
        }

        .row_bac{
            background-color: #D9D9D97A;
            height: 303px;
            padding: 17px 1px;
            border-radius: 14px;
        }

        a{
            text-decoration: none;
            color: white;
        }

        .name_std{
            color:blue ;
        }

        .name_std:hover{
            color:blue ;

        }
</style>
               <div class="slider container">
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="img/test.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="img/test.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="img/test.jpg" class="d-block w-100" alt="...">
                        </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                        </button>
                    </div>




                <!-- </div> -->

      </div>


<br><br>
                <section class="sectian_catogry container">
<div class="container">
                            <div class="fotball">


                                <div class="row">

                                    <div class="col-md-12" style="text-align:center;">

                                    <h1>  {{ __('avelb_spor') }} </h1>

                                    </div>
                                </div>
                                <br><br>
                                <div class="row">

                                    <div class="col-md-6" style="text-align:start;">
                                        <b class="headersports" > {{ __('footbal') }}</b>


                                    </div>
                                    <div class="col-md-6" style="text-align:end;">
                                        <a href="v_qat?id=1"><b> {{ __('more') }}</b></a>

                                    </div>

                                </div>
                                <br><br>
                                <div class="row row_bac">
              

                                    @foreach ($prodect_1 as $std )
                                        
                                    <div class="col-md-3">

                                            <div class="game">
                                                <div class="game_img">
                                                    <img src="{{ $std->img }}" alt="">
                                                </div>
                                                <div class="name_studum">
                                                   <h3> <a style="color: black" href="resev?id={{  $std->id_ }}">{{ $std->name }}</a></h3>
                                                  <b style="text-align:left;position: relative;
                                                  left: -63px;
                                                  top: -2px;">{{ __('pawend') }}</b><b style="position: relative;
right: -39px;">{{ $std->prise }}</b>

                                                </div>
                                            </div>   
                                    </div>

                                    @endforeach





                                </div>


















                            <!--
                                ---------------------------------------------------
                            -->
                            <br><br>

                            <div class="row">

                                <div class="col-md-12" style="text-align:center;">

                                <!-- <h1>الرياضات النتاحة</h1> -->

                                </div>
                            </div>
                            <br><br>
                            <div class="row">

                                <div class="col-md-6" style="text-align:start;">
                                 <b class="headersports">{{ __('tens') }} </b>


                                </div>
                                <div class="col-md-6" style="text-align:end;">

                                    <a href="v_qat?id=2">   <b> {{ __('more') }}</b></a>

                                </div>

                            </div>

                            <br><br>
                            <div class="row row_bac" >
          
                               
                                @foreach ($prodect_2 as $std )
                                        
                                <div class="col-md-3">

                                        <div class="game">
                                            <div class="game_img">
                                                <img src="{{ $std->img }}" alt="">
                                            </div>
                                            <div class="name_studum">
                                               <h3> <a style="color: black" href="resev?id={{  $std->id_ }}">{{ $std->name }}</a></h3>
                                               <b style="text-align:left;position: relative;
                                               left: -63px;
                                               top: -2px;">{{ __('pawend') }}</b><b style="position: relative;
right: -39px;">{{ $std->prise }}</b>
                                            </div>
                                        </div>   
                                </div>

                                @endforeach

          



                            </div>


                            <br><br>
 <!--
                                ---------------------------------------------------
                            -->


                            <div class="row">

                                <div class="col-md-12" style="text-align:center;">

                                <!-- <h1>الرياضات النتاحة</h1> -->

                                </div>
                            </div>
                            <br><br>
                            <div class="row">

                                <div class="col-md-6" style="text-align:start;">
                                    <b class="headersports">{{ __('padel') }} </b>


                                </div>
                                <div class="col-md-6" style="text-align:end;">
                                    <a href="v_qat?id=3"> <b> {{ __('more') }}</b></a>

                                </div>

                            </div>

                            <br><br>
                            <div class="row row_bac">
          
                              
                                @foreach ($prodect_3 as $std )
                                        
                                <div class="col-md-3">

                                        <div class="game">
                                            <div class="game_img">
                                                <img src="{{ $std->img }}" alt="">
                                            </div>
                                            <div class="name_studum">
                                               <h3> <a style="color: black" href="resev?id={{  $std->id_ }}">{{ $std->name }}</a></h3>
                                               <b style="text-align:left;position: relative;
                                               left: -63px;
                                               top: -2px;">{{ __('pawend') }}</b><b style="position: relative;
right: -39px;">{{ $std->prise }}</b>
                                            </div>
                                        </div>   
                                </div>

                                @endforeach

          

                            </div>







                             <!--
                                ---------------------------------------------------
                            -->
                            <br><br>

                            <div class="row">

                                <div class="col-md-12" style="text-align:center;">

                                <!-- <h1>الرياضات النتاحة</h1> -->

                                </div>
                            </div>
                            <br><br>
                            <div class="row">

                                <div class="col-md-6" style="text-align:start;">

                                    <b class="headersports" >  {{ __('backet') }}  </b>


                                </div>
                                <div class="col-md-6" style="text-align:end;">
                                    <a href="v_qat?id=4">  <b> {{ __('more') }}</b></a>

                                </div>

                            </div>

                            <br><br>
                            <div class="row row_bac">
          
                             
                                @foreach ($prodect_4 as $std )
                                        
                                <div class="col-md-3">

                                        <div class="game">
                                            <div class="game_img">
                                                <img src="{{ $std->img }}" alt="">
                                            </div>
                                            <div class="name_studum">
                                               <h3> <a style="color: black" href="resev?id={{  $std->id_ }}">{{ $std->name }}</a></h3>
                                               <b style="text-align:left;position: relative;
                                               left: -63px;
                                               top: -2px;">{{ __('pawend') }}</b><b style="position: relative;
right: -39px;">{{ $std->prise }}</b>
                                            </div>
                                        </div>   
                                </div>

                                @endforeach

          


                            </div>





                             <!--
                                ---------------------------------------------------
                            -->
                            <br><br>

                            <div class="row">

                                <div class="col-md-12" style="text-align:center;">

                                <!-- <h1>الرياضات النتاحة</h1> -->

                                </div>
                            </div>
                            <br><br>
                            <div class="row">

                                <div class="col-md-6" style="text-align:start;">
                                   <b class="headersports">  {{ __('scwash') }}</b>

                                </div>
                                <div class="col-md-6" style="text-align:end;">
                                    <a href="v_qat?id=5"> <b> {{ __('more') }}</b></a>

                                </div>

                            </div>

                            <br><br>
                            <div class="row row_bac">
          
                               
                                @foreach ($prodect_5 as $std )
                                        
                                <div class="col-md-3">

                                        <div class="game">
                                            <div class="game_img">
                                                <img src="{{ $std->img }}" alt="">
                                            </div>
                                            <div class="name_studum">
                                               <h3> <a style="color: black" href="resev?id={{  $std->id_ }}">{{ $std->name }}</a></h3>
                                               <b style="text-align:left;position: relative;
                                               left: -63px;
                                               top: -2px;">{{ __('pawend') }}</b><b style="position: relative;
right: -39px;">{{ $std->prise }}</b>
                                            </div>
                                        </div>   
                                </div>

                                @endforeach

          




                            </div>








                             <!--
                                ---------------------------------------------------
                            -->

                            <br><br>
                            <div class="row">

                                <div class="col-md-12" style="text-align:center;">

                                <!-- <h1>الرياضات النتاحة</h1> -->

                                </div>
                            </div>
                            <br><br>
                            <div class="row">

                                <div class="col-md-6" style="text-align:start;">
                                    <b class="headersports"> {{ __('volyball') }}</b>

                                </div>
                                <div class="col-md-6" style="text-align:end;">
                                    <a href="v_qat?id=6">  <b> {{ __('more') }}</b></a>

                                </div>

                            </div>

                            <br><br>
                            <div class="row row_bac">
          
                              
                                @foreach ($prodect_6 as $std )
                                        
                                <div class="col-md-3">

                                        <div class="game">
                                            <div class="game_img">
                                                <img src="{{ $std->img }}" alt="">
                                            </div>
                                            <div class="name_studum">
                                               <h3> <a style="color: black" href="resev?id={{  $std->id_ }}">{{ $std->name }}</a></h3>
                                               <b style="text-align:left;position: relative;
                                               left: -63px;
                                               top: -2px;">{{ __('pawend') }}</b><b style="position: relative;
right: -39px;">{{ $std->prise }}</b>
                                            </div>
                                        </div>   
                                </div>

                                @endforeach

                               


                            </div>


<!------------------------------------------------------------------------------------->




                            </div>

                </section>

    </div>
<br><br><br>


  
@endsection