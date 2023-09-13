@extends('layout/navbar')
    
@section("valdate_req")

<style>
   .valdate_form {
            color: #163A5F;
            text-align: center;
            background: #D9D9D980;
            margin: 16px 0px;
            padding-top: 27px;
            border-radius: 23px;
            height: 459px;



    }

    body{
            background-image: url("img/texture-green-grass-surface-wallpaper-concept\ 1.jpg");
            /* background-repeat: no-repeat, repeat; */
            width: 100%;
            height: 100%;
        }

         label {
            background: white;
            width: 165px;
            position: relative;
            height: 36px;
            margin: 5px 0px;
            line-height: 34px;
            border-radius: 10px;

}

.text_feld{
    border-radius: 10px;

    height: 38px;
    width: 253px;
}


.sibmit{
    border-radius: 10px;
    height: 38px;
    width: 150px;
    margin: 15px 0px;
}
</style>

<div class="container">

    <div class="valdate_form">
        <h1> {{ __('valdate_res') }}</h1>
        <b>{{ __('all_mony') }}<span> {{ $prodect->prise }} </span></b>
<br>
<br>

        <b>{{ __('sen50poend') }}</b>
        <br>
        <label>0{{ $addstdstats->phone }}</label>
        <br>
        <br>
        <form action="valdate_hagz" method="POST">
            
            @csrf
            <b>{{ __('phone_sender') }}</b>
            <br>
            <br>
            <input type="hidden" name="id_hagez" class="text_feld"  value="{{ $prodect->id }}" id="">
            <input type="text" name="num_user" class="text_feld" id=""><br><br>
            <input type="submit" class="sibmit" value="{{ __('valdate') }}"><br>
        </form>
    </div>
    <br>
</div>



@endsection