@extends('mainLayout')
@section('content')
@include('navLink.carousel')
<div class="container">
<br>
<br>
<div class="row">
    <div class="col-4">
        <p>Showing 1–12 of 137 results</p>
    </div>
    <div class="col-4" style="text-align: right">
        <select class="browser-default custom-select" style="width:200;">
            <option selected="">Sort By</option>
            <option value="1">Sort By Popularity</option>
            <option value="2">Sort By Latest</option>
            <option value="3">Sort By Price </option>
          </select>
    </div>
    <div class="input-group col-md-4">
        <input class="form-control py-2" type="search" placeholder="Search" id="example-search-input">
        <span class="input-group-append">
          <button class="btn btn-outline-secondary" type="button">
              <i class="fa fa-search"></i>
          </button>
        </span>
  </div>
</div>
<br> <br>
<div class="row">
    <div class="col-8">
        <div class="row">
            <div class="col-6">
            <div class= "card">
            <img class="card-img-top" src="/image/lol.jpg" alt="Card image cap">
            <div class="card-body">
            <p class="card-text">Card No 1</p>
            <p class="card-text">Price BDT 100</p>
            </div>
        </div>
        </div>
        <div class="col-6">
        <div class= "card">
            <img class="card-img-top" src="/image/lol.jpg" alt="Card image cap">
            <div class="card-body">
            <p class="card-text">Card No 1</p>
            <p class="card-text">Price BDT 100</p>
            </div>
        </div>
        </div>
        
        </div>
    </div>
    <div class="col-4">
     @include('navLink.catagories')   
    </div>
</div>
<br><br>
      

@include('home.subscribe')
<br>
<br>
@endsection
<b></b>