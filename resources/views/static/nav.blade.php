<nav
class="navbar navbar-expand-lg navbar-light bg-light justify-content-sm-start sticky-top"
>
<div class="container">
  <!-- nav items start-->

  <a class="navbar-brand mx-0" style="display: none" href="/home">
   <img alt="TR Online Printing press" src="/image/logo.JPG"
   width="70" height="auto">
 </a>
 
  <button class="navbar-toggler " type="button">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div
    class="collapse navbar-collapse bg-light  p-3 p-lg-0 mt-2 mt-lg-0 d-flex flex-column flex-lg-row flex-xl-row justify-content-lg-end mobileMenu"
    id="navbarSupportedContent"
  >

  <i class="fas fa-times offButton"></i>
      
  <ul class="navbar-nav mr-auto ">
    <li class="nav-item active">
      <div class="nav-item dropdown firstNav">
        <a class="nav-link dropdown-toggle  ft" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-bars"></i>
          Shop By Catagories
        </a>
  
      <ul class="dropdown-menu" id="dropDown" aria-labelledby="navbarDropdown">
        <li class="dropdown-submenu" id="dropdownSubmenu">
          <a class="dropdown-item dropdown-toggle" href="#">Business Card</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/get/product">Business Cards</a></li>
            </ul>
        </li>
        <li class="dropdown-submenu" id="dropdownSubmenu">
          <a class="dropdown-item dropdown-toggle" href="#">Stationary Items</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/envelope">Envelope</a></li>
              <li><a class="dropdown-item" href="/money-receipt">Money receipt</a></li>
              <li><a class="dropdown-item" href="/note-pad">Note pad</a></li>
              <li><a class="dropdown-item" href="/register">Register</a></li>
              <li><a class="dropdown-item" href="/memo">Memo</a></li>
            </ul>
        </li>
        <li class="dropdown-submenu" id="dropdownSubmenu">
          <a class="dropdown-item dropdown-toggle" href="#">Marketing Materials</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/magazine">Magazine/brushier/leaflet</a></li>
              <li><a class="dropdown-item" href="/hangtag">Hangtag/waist tag/price tag</a></li>
              <li><a class="dropdown-item" href="/pvc">PVC</a></li>
              <li><a class="dropdown-item" href="/file-folder">File folder</a></li>
            </ul>
        </li>
        <li class="dropdown-submenu" id="dropdownSubmenu">
          <a class="dropdown-item dropdown-toggle" href="#">Packaging</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/calendar">Calendar(wall/desk/pocket)</a></li>
              <li><a class="dropdown-item" href="/dairy">Dairy</a></li>
              <li><a class="dropdown-item" href="/voucher">Voucher</a></li>
              <li><a class="dropdown-item" href="/tissue-bag">Tissue bag</a></li>
              <li><a class="dropdown-item" href="/tissue-box">Tissue box</a></li>
            </ul>
        </li>
        <li><a class="dropdown-item" href="/shop">View All Products</a></li>
    </ul>
  </div>
    </li>

    <li class="nav-item  {{Request::segment(1) === 'home' ? 'active' : null}}">
      <a class="nav-link" href="{{url("home")}}"><b>HOME</b> <span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item {{Request::segment(1) === 'corporate' ? 'active' : null}}">
      <a class="nav-link" href="{{url("corporate")}}">CORPORATE</a>
    </li>
    <li class="nav-item dropdown {{Request::segment(1) === 'shop' ? 'active' : null}}">
      <a class="nav-link dropdown-toggle" href="{{url("shop")}}" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        SHOP
      </a>
      <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
        <li><a class="dropdown-item" href="/shop">Shop</a></li>
        <li><a class="dropdown-item" href="/myaccount">My Account</a></li>
        <li><a class="dropdown-item" href="/checkout">Checkout</a></li>
        <li><a class="dropdown-item" href="/cart">Cart</a></li>
        <li><a class="dropdown-item" href="/wishlist">Wishlist</a></li>
      </ul>
    </li>
    <li class="nav-item  {{Request::segment(1) === 'blog' ? 'active' : null}}">
        <a class="nav-link" href="{{url("blog")}}">BLOG <span class="sr-only">(current)</span></a>
    </li> 
    <li class="nav-item {{Request::segment(1) === 'aboutus' ? 'active' : null}}">
        <a class="nav-link" href="{{url("aboutus")}}">ABOUT US <span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          CONTACT US
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="design">Design Service</a>
        </div>
    </li>    
  </ul>
 
  </div>
 
    <span class="nav-item " style="right:40px;position: absolute;">
      <a class="nav-link" href=""><i class="fas fa-shopping-cart"></i> <span class="sr-only">(current)</span></a>
    </span>
    <span class="nav-item " style="right:1px;position: absolute;">
      <a class="nav-link" href="/myaccount"><i class="far fa-user"></i></i> <span class="sr-only">(current)</span></a>
    </span>
  
</div>
</nav>
<div class="overlay"></div>