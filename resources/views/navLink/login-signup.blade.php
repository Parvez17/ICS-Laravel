<br>
<div class="container">
  @if(Session::has('success_msg'))
  <div class="card bg-success text-white">
    <div class="card-body">{{session('success_msg')}}</div>
  </div>
  <br>
  @endif
  @if(Session::has('error_msg'))
  <div class="card bg-danger text-white">
    <div class="card-body">{{session('error_msg')}}</div>
  </div>
  <br>
  @endif
    <div class="row">
        <div class="col-md-6 col-sm-12">
                <H1> LOGIN </H1>            
            <br><br>
            <div class="border border-secondary" style="padding: 50px; height:330">
            <form  action="/login" method="POST">
              <input type="hidden" name="_token" value="{{csrf_token()}}" />
                <div class="form-group">
                  <label for="email">Email:</label>
                  <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
                </div>
                <div class="form-group">
                  <label for="pwd">Password:</label>
                  <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd" required>
                </div>
                <div class="checkbox">
                  <button type="submit" class="btn btn-Primary">Submit</button>
                  <label><input type="checkbox" name="remember"> Remember me</label>                 
                </div>               
              </form>
            </div>           
        </div>
        <div class="col-md-6 col-sm-12">
            <H1> REGISTER </H1>            
        <br><br>
        <div class="border border-secondary" style="padding: 50px; height:330" >
        <form  action="/registration" method="POST">
          <input type="hidden" name="_token" value="{{csrf_token()}}" />
            <div class="form-group">
              <label for="email">Email:</label>
              <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
            </div>
            <div class="form-group">
              <p> A password will be sent to your email address.</p>
              <p> Your personal data will be used to support your experience throughout this website, to manage access to your account, and for other purposes described in our privacy policy.<p>
            </div>
            <div >
              <button type="submit" class="btn btn-Primary">Regisgter</button>
              
              
            </div>
            
          </form>
        </div>
    </div>
</div>