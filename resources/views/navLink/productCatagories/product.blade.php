@extends('mainLayout')
@section('content')
@include('navLink.carousel')
<br><br>
<div class="container">
    <div class="row">
        <div class="col-sm-6">
        <img src="/image/magazine/4.JPG" alt="Avatar" class="cardImg" style="width:100%; height:60vh">
        <div class="card-hover">
            <a class="" href="/product"> <i class="far fa-heart"></i></a>
            <a class="" href="/product"> <i class="fas fa-search"></i></a>
            
        </div>
        </div>
        <div class="col-sm-6">
            <h1 class="product_title entry-title">{{$data->name}}</h1>
            <p class="price"><span class="nbo-base-price-html">Total</span> <span class="woocommerce-Price-amount amount">৳&nbsp;{{$data->price}} </span></p>
            <p>Prestigious companies or individuals always tend to follow the norm of delivering paper inside envelope. It’s a crucial professional courtesy. Buy Printed Envelope in Dhaka or from any place in Bangladesh with convenience from TR Online Print.</p>
            <p>Materials: 80/100/120gsm Offset Paper<br>
                Size: 9.56 Inch x 4.70 Inch<br>
                Print: CMYK 1-Color Dedicated Print</p>
            <div class="product-size-guide"><a href="" class="product-size-guide-link">Product Guide</a></div>
            <div class="nbd-field-header" style="background-color: #f8f8f8;">
                <label for="nbd-field-f1578993979233">
                    <b>Paper Options </b>
                    <span class="nbd-required">*</span>
                </label> 
            </div><br>
            <label class="product-btn-price" for="nbd-field-f1578993979233-0" nbo-disabled="!status_fields['f1578993979233'][0].enable" nbo-disabled-type="class">
                80gsm Offset 
            </label>&nbsp; &nbsp;
            <label class="product-btn-price" for="nbd-field-f1578993979233-1" nbo-disabled="!status_fields['f1578993979233'][1].enable" nbo-disabled-type="class">
                100gsm Offset 
            </label>&nbsp; &nbsp;
            <label class="product-btn-price" for="nbd-field-f1578993979233-0" nbo-disabled="!status_fields['f1578993979233'][0].enable" nbo-disabled-type="class">
                120gsm Offset 
            </label><br><br>

            <div class="nbd-field-header" style="background-color: #f8f8f8;">
                <label for="nbd-field-f1578993979233">
                    <b>Paper Options </b>
                    <span class="nbd-required">*</span>
                </label> 
            </div><br>
            <label class="product-btn-price" for="nbd-field-f1578993979233-0" nbo-disabled="!status_fields['f1578993979233'][0].enable" nbo-disabled-type="class">
                ENVELOPE Window 
            </label>&nbsp; &nbsp;
            <label class="product-btn-price" for="nbd-field-f1578993979233-1" nbo-disabled="!status_fields['f1578993979233'][1].enable" nbo-disabled-type="class">
                DOUBLE TAP
            </label>&nbsp; &nbsp;
            <label class="product-btn-price" for="nbd-field-f1578993979233-0" nbo-disabled="!status_fields['f1578993979233'][0].enable" nbo-disabled-type="class">
                ENVELOPE AND DOUBLE TAP 
            </label><br>
            <label class="product-btn-price" for="nbd-field-f1578993979233-0" nbo-disabled="!status_fields['f1578993979233'][0].enable" nbo-disabled-type="class">
                N/A 
            </label><br><br>
            <div class="nbd-field-header" style="background-color: #f8f8f8;">
                <label for="nbd-field-f1578993979233">
                    <b>Quantity: {{$data->quantity}} </b>
                    
                </label> 
            </div><br>
            <button type="button" class="btn btn-Primary" onclick="cartAddAjax({{$data->PID}})">ADD TO CART  </button>
        </div>
        
    </div>
    <ul class="product_info_tabs nav nav-tabs box_shadow" id="myTab" role="tablist">
                                
        <li class="nav-item">
            <a class="tabHref active show" id="product_tab_info" data-toggle="tab" href="#description" role="tab" aria-controls="description" aria-selected="true"><b>Description</b></a>
        </li>
        <li class="nav-item">
            <a id="product_tab_portfolio" class="tabHref" data-toggle="tab" href="#information" role="tab" aria-controls="information" aria-selected="false"><b>Additional Information</b></a>
        </li>
        <li class="nav-item">
            <a id="product_tab_review" class="tabHref" data-toggle="tab" href="#reviews" role="tab" aria-controls="reviews" aria-selected="false"><b>Reviews</b></a>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab"><p>Prestigious companies or individuals always tend to follow the norm of delivering paper inside envelope. It’s a crucial professional courtesy. Buy Printed Envelope in Dhaka or from any place in Bangladesh with convenience from TR Online Print.</p>
            <p><strong>Product options</strong></p>
            <p><strong>Choosing your paper Options<br>
                • Budget:</strong> 80gsm Offset&nbsp; Paper – preferable for purpose-serving, not recommended to express reputation<br>
                <strong>•</strong>&nbsp;<strong>Standard:</strong> 100gsm Offset paper – preferable for new startups<br>
                <strong>•</strong>&nbsp;<strong>Premium:</strong> 120gsm Art Paper – preferable for popular brands
            </p>
            <p><strong>Creating an eye-catching design</strong><br>
                <strong>•</strong> Try to ensure visibility of your design by making consistent gap between contents (logo, text, icons)
            </p>
        </div>
        <div class="tab-pane fade" id="information" role="tabpanel" aria-labelledby="information-tab">B</div>
        <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">C</div>
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