@extends('admin/layay')


<link rel="stylesheet" href="css/stadium/dashbord.css">


@section("dashbord")







{{-- 

            <div class="row">
                <div class="col-md-8">
                    <br><br>
                    <h1>اسم الملعب</h1>
                </div>
                <div class="col-md-4">
                    <h1> </h1>
                </div>
            </div> --}}

            <br><br>


            <div class="ehsa">
                <div class="row">
                    <div class="col-md-6"> 

                   <a href="v_s_admin?id=1"> <button href="" style="background: none; border:none;                         color: white;
                    ">
    
                            <div class="v_e_w">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="infhorm">
                                            <h3> الملاعب</h3>
                                            <b>{{ @$StdInform }}</b>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="icon">
                                            <img src="img/ehsa.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>

                    </button>    </a>
                    </div>
                    <div class="col-md-6">
                        <a href="v_s_admin?id=2"> <button style="background: none; border:none;  position: relative;
                        right: 92px;                       color: white;
                        ">

                                <div class="v_e_w">
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <div class="infhorm">
                                                        <h3>اللاعبين </h3>
                                                        <b> {{ @$user }}</b>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="icon">
                                                        <img src="img/ ehsa2.png" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                </div>

                        </button></a>
        

                    </div>
                    <div class="col-md-6">
                        <a href="v_s_admin?id=3"> <button style="background: none; border:none; 
                        right: 0px;
                        position: relative;
                        color: white;
                    ">
                                <div class="v_e_w">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="infhorm">
                                                    <h3> اصحاب الملاعب</h3>
                                                    <b>{{ @$user_std }}</b>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="icon">
                                                    <img src="img/ ehsa2.png" alt="">
                                                </div>
                                            </div>
                                        </div>
                                </div>

                       </button></a>

                    </div>


                    <div class="col-md-6">
                        <a href="v_s_admin?id=4"> <button style="background: none; border:none; 
                        right: 92px;
                        position: relative;
                        color: white;
                    ">
                                <div class="v_e_w">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="infhorm">
                                                    <h3>الطلبات المعلقة </h3>
                                                    <b>{{ @$hagz_on_valdate }}</b>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="icon">
                                                    <img src="img/ ehsa2.png" alt="">
                                                </div>
                                            </div>
                                        </div>
                                </div>

                       </button></a>

                    </div>


                    <div class="col-md-6">
                        <a href="v_s_admin?id=5"> <button style="background: none; border:none; 
                        right: 0px;
                        position: relative;
                        color: white;
                    ">
                                <div class="v_e_w">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="infhorm">
                                                    <h3> الطلبات المؤكدة</h3>
                                                    <b>{{ @$hagz_valdeted }}</b>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="icon">
                                                    <img src="img/ ehsa2.png" alt="">
                                                </div>
                                            </div>
                                        </div>
                                </div>

                       </button></a>

                    </div>


                    <div class="col-md-6">
                        <a href="v_s_admin?id=6"> <button style="background: none; border:none; 
                        right: 92px;
                        position: relative;
                        color: white;
                    ">
                                <div class="v_e_w">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="infhorm">
                                                    <h3> كل الطلبات</h3>
                                                    <b>{{ @$all_request }}</b>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="icon">
                                                    <img src="img/ ehsa2.png" alt="">
                                                </div>
                                            </div>
                                        </div>
                                </div>

                       </button></a>

                    </div>



                    


                    
                </div>
            </div>





@endsection