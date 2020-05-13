@extends('mainLayout')
@section('content')
@include('navLink.carousel')
<br><br>
<div class="container">
    <div class="row">
        <div class="col-6">
            <h1> Design </h1>
            <ul>
                <li>24-48 hour turnaround</li>
                <li>Low Price</li>
                <li>Option To work with designers</li>
                </ul>
            </ul>
        </div>
        <div class="col-6">
            <img class="d-block w-100" src="/image/slide1.jpg" alt="First slide">
        </div>
    </div>
    <br><br>
    <div class="row">
        <div class="col-4">
            <div class="card">
                <div class="card-body">
                  <p style="text-align: center"><i class="fas fa-th-list" style="font-size:60px"></i> <p>
                  <h6 class="card-title" style="text-align: center">Header1</h6>
                  <p class="card-text"  style="text-align: center">We are here for your support 11 am - 7 pm Saturday- Thursday.</p>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card">
                <div class="card-body">
                  <p style="text-align: center"><i class="fas fa-th-list" style="font-size:60px"></i> <p>
                  <h6 class="card-title" style="text-align: center">Header2</h6>
                  <p class="card-text"  style="text-align: center">We are here for your support 11 am - 7 pm Saturday- Thursday.</p>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card">
                <div class="card-body">
                  <p style="text-align: center"><i class="fas fa-th-list" style="font-size:60px"></i> <p>
                  <h6 class="card-title" style="text-align: center">Header3</h6>
                  <p class="card-text"  style="text-align: center">We are here for your support 11 am - 7 pm Saturday- Thursday.</p>
                </div>
            </div>
        </div>
    </div>
    <br> <br>
    <h1 style="text-align: center">Today's Design</h1>
    <br> <br>
    
    <div class="row" style="display:flex">
        <div class="card; col-3" style="width:400px">
            <img class="card-img-top" src="image/paperbag.jpg" alt="Card image">
            <div class="card-body">
                <a href="#">3 Color 170gsm Art Paper Large Wide Shopping Bag</a>
            </div>
        </div>
          
        <div class="card; col-3" style="width:400px">
            <img class="card-img-top" src="image/paperbag.jpg" alt="Card image">
            <div class="card-body">
                <a href="#">3 Color 170gsm Art Paper Large Wide Shopping Bag</a>
            </div>
        </div>
          
        <div class="card; col-3" style="width:400px">
            <img class="card-img-top" src="image/paperbag.jpg" alt="Card image">
            <div class="card-body">
                <a href="#" class="">3 Color 170gsm Art Paper Large Wide Shopping Bag</a>
            </div>
        </div>
        <div class="card; col-3" style="width:400px">
            <img class="card-img-top" src="image/paperbag.jpg" alt="Card image">
            <div class="card-body">
                <a href="#" class="">3 Color 170gsm Art Paper Large Wide Shopping Bag</a>
            </div>
        </div>
    </div>

</div>
<br><br>
@include('home.subscribe')
<br>
<br>
@endsection
<b></b>