<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="login/fonts/icomoon/style.css">

    <link rel="stylesheet" href="login/css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="login/css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="login/css/style.css">

    <title>Register #1</title>
  </head>
  <body>
  

  <div class="d-lg-flex half">
    <div class="bg order-1 order-md-2" style="background-image: url('img/home/login1.jpg');"></div>
    <div class="contents order-2 order-md-1">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          
          <div class="col-md-7">
            <div class="row">
              <div class="col d-flex justify-content-end p-3">
                <img src="img\home\renter.png" alt="" height="45px">
              </div>
            </div>
            <h3>Register as <strong>Owner</strong></h3>
            <p class="mb-4">Register as an owner to start listing your properties now!</p>
            <form action="#" method="post">
              
              <div class="form-group first">
                <label for="username">First Name</label>
                <input type="text" class="form-control" placeholder="" id="firstname">
              </div>
              <div class="form-group first">
                <label for="username">Last Name</label>
                <input type="text" class="form-control" placeholder="" id="lastname">
              </div>
              <div class="form-group first">
                <label for="username">Email</label>
                <input type="text" class="form-control" placeholder="" id="email">
              </div>
              <div class="form-group first">
                <label for="username">NID</label>
                <input type="text" class="form-control" placeholder="" id="nid">
              </div>
              <div class="form-group first">
                <label for="username">Phone</label>
                <input type="tel" class="form-control" placeholder="" id="phone">
              </div>
              <div class="form-group first">
                <label for="password">Password</label>
                <input type="password" class="form-control" placeholder="" id="password">
              </div>
              <div class="form-group last mb-3">
                <label for="username">Confirm Password</label>
                <input type="password" class="form-control" placeholder="" id="confirm">
              </div>

            </form>
             <a href="{{ route('index2') }}" ><input type="submit" value="Register" class="btn btn-block btn-primary"></a>

            
          </div>
        </div>
      </div>
    </div>

    
  </div>
    
    

    <script src="login/js/jquery-3.3.1.min.js"></script>
    <script src="login/js/popper.min.js"></script>
    <script src="login/js/bootstrap.min.js"></script>
    <script src="login/js/main.js"></script>
  </body>
</html>