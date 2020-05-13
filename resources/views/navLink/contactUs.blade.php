@extends('mainLayout')
@section('content')
@include('navLink.carousel')
<br><br>
<div class="container">
    <div class="row">
    <div class="col-6">
        <h3> Get In Touch</h3>
        <br>
        <p> Contact With Us for any Query.</p>
        <p> <i class="fas fa-map-marker-alt" style="color: blue"></i>&nbsp; Banani, Dhaka.</p>
        <p><i class="fas fa-phone-alt"  style="color: blue"></i>&nbsp; +88-0923435</p>
        <p><i class="far fa-envelope" style="color: blue"></i>&nbsp; support@ics.com</p>
        <p><i class="fas fa-clock"  style="color: blue"></i>&nbsp; Sat - Thur : 9am - 7pm</p>

    </div>
    <div class="col-6">
        <h3> Send Message</h3>
        <br>
        
            <form  action="/action_page.php">
                <div class="form-group">
                  <label for="name">Your Name:</label>
                  <input type="name" class="form-control" id="name"  name="name">
                </div>
                <div class="form-group">
                  <label for="email">Email:</label>
                  <input type="email" class="form-control" id="email"  name="email">
                </div>
                <div class="form-group">
                    <label for="subject">Subject:</label>
                    <input type="subject" class="form-control" id="subject"  name="subject">
                </div>
                  <div class="form-group">
                    <label for="message">Message:</label>
                    <input type="message" class="form-control" style="height: 200" id="message"  name="message">
                </div>
                <div >
                  <button type="submit" class="btn btn-Primary" style="width: 200">Send Message</button>
                </div>
              </form>
    </div>
    </div>

<div id="googleMap" style="width:100%;height:400px;"></div>
</div>
<br>
<br>
@include('home.section')
<br>
<br>
@include('home.subscribe')
<br>
<br>
@endsection
<b></b>