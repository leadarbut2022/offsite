@extends('layout/navbar')
<link rel="stylesheet" id="" href="css/v_qat.css">

@section("v_qat")
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
</style>
            <div class="container">

                            <div class="row ">




                                <div class="col-md-12">

                                    <div class="serch">
                                        <form action="">
                                            <input type="search" name="" style="text-align: right" placeholder="اسم الملعب" id="">
                                            <button><img src="img/serch .png" alt=""></button>
                                        </form>
                                    </div>
                                </div>



                                {{-- <div class="col-md-6" style="text-align:start;">
                                    <b> المزيد</b>

                                </div>
                                <div class="col-md-6" style="text-align:end;">
                                            <b>كرة القدم</b>
                                </div> --}}

                            </div>

                            <br><br>
                            <div class="row row_bac">


                                @foreach ($prodect as $std )


                                <div class="col-md-3">

                                        <div class="game">
                                            <div class="game_img">
                                                <img src="{{ $std->img }}" alt="">
                                            </div>
                                            <div class="name_studum">
                                               <a href="resev?id={{  $std->id_ }}"> <h3>{{ $std->name }} </h3></a>
                                                <b><i class="ri-star-line"></i></b>
                                            </div>
                                        </div>   
                                </div>

                                @endforeach


                                {{-- @foreach ($prodect as $std )
                                        
                                <div class="col-md-3">

                                        <div class="game">
                                            <div class="game_img">
                                                <img src="{{ $std->img }}" alt="">
                                            </div>
                                            <div class="name_studum">
                                               <h3> <a style="color: black" href="">{{ $std->name }}</a></h3>
                                                <b><i class="ri-star-line"></i></b>
                                            </div>
                                        </div>   
                                </div>

                                @endforeach --}}
                                
                            <br><br>

            </div>
        </div>

            <br><br>
            <br><br>

@endsection