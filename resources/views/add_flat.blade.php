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
    <link rel="stylesheet" href="login/css/style2.css">

    <title>Form</title>
  </head>
  <body>
  

  <div class="d-lg-flex half align-items-center justify-content-center">
    <div class="contents">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          
          <div class="col">
            <h3>Add New Property</h3>
            <form enctype="multipart/form-data" action="{{ route('save-flat') }}" method="post">
            @csrf
              
              <div class="form-group first">
                <label for="flat-name">Flat Name</label>
                <input type="text" class="form-control" placeholder="" id="flat-name" name="flat_name">
              </div>
              <div class="form-group first">
                <label for="house">Flat No.</label>
                <input type="text" class="form-control" placeholder="" id="house" name="flat_no">
              </div>
              <div class="form-group first">
                <label for="road">Road No.</label>
                <input type="text" class="form-control" placeholder="" id="road" name="road_no">
              </div>
              <div class="form-group first">
                <label for="area">Area</label>
                <input type="text" class="form-control" placeholder="" id="area" name="area">
              </div>
              <div class="form-group first">
                <label for="division">Division</label>
                <input type="text" class="form-control" placeholder="" id="division" name="division">
              </div>
              <!--<div class="form-group first">
                <label for="details">Detailed Address</label>
                <textarea class="form-control" placeholder="" name="details" rows="3" cols="50"></textarea>
              </div>-->
              <div class="form-group first">
                <label for="rent">Rent</label>
                <input type="number" class="form-control" placeholder="" id="rent" name="rent">
              </div>
              <input type="hidden" value = "{{ request('owner_id') }}" class="form-control" placeholder="" id="rent" name="owner_id">
              <div class="form-group first">
                <label for="date">Available Date</label>
                <input type="date" class="form-control" value="" id="date" name="available_date">
              </div>
              <div class="form-group last mb-3">
                <label for="image" class="file">Add Images</label>
                <br>
                <input type="file" class="form-control" accept="image/*" id="image" name="image">
              </div>
              <input type="submit" value="Add New Flat" class="btn btn-block btn-success">
            </form>
            

            
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