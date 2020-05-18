@extends('mainLayout')
@section('content')
@include('navLink.carousel')
<br>
<br>
<div class="container">
<div class="row" style="display:flex">
    <div class="card col-md-4 col-sm-6 col-sm-12 mb-3">
        <img class="card-img-top" src="image/paperbag.jpg" alt="Card image">
        <div class="card-body">
            <a href="#">3 Color 170gsm Art Paper Large Wide Shopping Bag</a>
        </div>
    </div>
    <div class="card col-md-4 col-sm-6 mb-3" >
        <img class="card-img-top" src="image/paperbag.jpg" alt="Card image">
        <div class="card-body">
            <a href="#">3 Color 170gsm Art Paper Large Wide Shopping Bag</a>
        </div>
    </div>
    <div class="col-md-4 col-sm-6 mb-3">
        @include('navLink.catagories')   
    </div>
</div>
<br><br>
<input type="submit" class="btn btn-info" value="Return To Home"><br><br>
</div>
@include('home.subscribe')
<br>
<br>
@endsection
<b></b>