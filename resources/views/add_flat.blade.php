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
                                <input value="{{ $flat->flat_name ?? '' }}" type="text" class="form-control"
                                    placeholder="" id="flat-name" name="flat_name">
                            </div>
                            <div class="form-group first">
                                <label for="house">Flat No.</label>
                                <input value="{{ $flat->flat_no ?? '' }}" type="text" class="form-control"
                                    placeholder="" id="house" name="flat_no">
                            </div>
                            <div class="form-group first">
                                <label for="road">Road No.</label>
                                <input value="{{ $flat->road_no ?? '' }}" type="text" class="form-control"
                                    placeholder="" id="road" name="road_no">
                            </div>
                            <div class="form-group first">
                                <label for="area">Area</label>
                                <input value="{{ $flat->area ?? '' }}" type="text" class="form-control" placeholder=""
                                    id="area" name="area">
                            </div>
                            <div class="form-group first">
                                <label for="division">Division</label>
                                <input value="{{ $flat->division ?? '' }}" type="text" class="form-control"
                                    placeholder="" id="division" name="division">
                            </div>

                            <div class="form-group first">
                                <label for="rent">Rent</label>
                                <input value="{{ $flat->rent ?? '' }}" type="number" class="form-control" placeholder=""
                                    id="rent" name="rent">
                            </div>
                            <input type="hidden" value="{{ request('owner_id') }}" class="form-control" placeholder=""
                                id="rent" name="owner_id">
                            <input type="hidden" value="{{ $flat->id ?? '' }}" class="form-control" placeholder=""
                                id="rent" name="id">
                            <div class="form-group first">
                                <label for="date">Available Date</label>
                                <input value="{{ $flat->available_date ?? '' }}" type="date" class="form-control"
                                    value="" id="date" name="available_date">
                            </div>

                            <div class="form-group first">
                                <label for="division">Floor Number</label>
                                <input value="{{ $flat->floor_num ?? '' }}" available_datetype="text"
                                    class="form-control" placeholder="" id="division" name="floor_num">
                            </div>
                            <div class="form-group first">
                                <label for="rent">Number of Room(s)</label>
                                <input value="{{ $flat->room_num ?? '' }}" type="number" class="form-control"
                                    placeholder="" id="rent" name="room_num">
                            </div>
                            <div class="form-group first">
                                <label for="rent">Number of Bathroom(s)</label>
                                <input value="{{ $flat->bathroom_num ?? '' }}" type="number" class="form-control"
                                    placeholder="" id="rent" name="bathroom_num">
                            </div>
                            <div class="form-group first">
                                <label for="rent">(Sq)Feet</label>
                                <input value="{{ $flat->house_length ?? '' }}" type="number" class="form-control"
                                    placeholder="" id="rent" name="house_length">
                            </div>
                            <div class="form-group first">
                                <label for="division">Availability of Lift</label>
                                <input value="{{ $flat->lift ?? '' }}" type="text" class="form-control"
                                    placeholder="" id="division" name="lift">
                            </div>
                            <div class="form-group first">
                                <label for="rent">Service Charge</label>
                                <input value="{{ $flat->charge ?? '' }}" type="number" class="form-control"
                                    placeholder="" id="rent" name="charge">
                            </div>

                            <div class="form-group first">
                                <label for="division">Details</label>
                                <input value="{{ $flat->details ?? '' }}"type="text" class="form-control"
                                    placeholder="" id="division" name="details">
                            </div>
                            <div class="form-group first">
                                <label for="division">Location Link</label>
                                <input value="{{ $flat->location_link ?? '' }}" type="text" class="form-control"
                                    placeholder="" id="division" name="location_link">
                            </div>
                            <div class="form-group last mb-3">
                                <label for="image" class="file">Add Images</label>
                                <br>
                                <input type="file" class="form-control" accept="image/*" id="image"
                                    name="image">
                            </div>
                            @if (isset($flat))
                                <input type="submit" value="Update Flat" class="btn btn-block btn-success">
                            @else
                                <input type="submit" value="Add New Flat" class="btn btn-block btn-success">
                            @endif
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
