@extends('mainLayout')
@section('content')
@include('navLink.carousel')
<br> <br> <br> <br>
<div class="container">
    <div class="row">
        <div class="col-4">
        <div class="input-group">
            <input class="form-control py-2" type="search" placeholder="Search" id="example-search-input">
            <span class="input-group-append">
              <button class="btn btn-outline-secondary" type="button">
                  <i class="fa fa-search"></i>
              </button>
            </span>
        </div>
        <br> <br>
        <h3> ARCHIBES </h3>
            <br> <br>
        <p>April 2019</p>
        <p>May 2020</p>
        <h3> TAGS </h3>
        <button type="button" class="btn btn-primary">Design</button>
        <button type="button" class="btn btn-primary">Lamination</button>
        <button type="button" class="btn btn-primary">Trade</button>
        </div>
        <div class="col-8">
            <div class="row">
                <p> Posted in Lessons by Rubikadmin</p>&nbsp;
                <p>|</p>&nbsp;
                <p> <i class="far fa-calendar-alt" style="color: blue"></i>May 2020</p>
            </div>
            <div class="card">
                <div class="card-body">
                  <h4 class="card-title">About Printing</h4>
                  <p class="card-text">Some example text. Some example text.</p>
                  <a href="#" class="card-link">Read More</a>
                </div>
              </div>

    </div>
</div>
<br>
<br>
<br>
<br>
@include('home.subscribe')
<br>
<br>
@endsection
<b></b>