<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Rent</title>

    <link rel="icon" href="img/favicon.png" type="image/png">
    <link rel="stylesheet" href="vendors/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="vendors/linericon/style.css">
    <link rel="stylesheet" href="vendors/magnefic-popup/magnific-popup.css">
    <link rel="stylesheet" href="vendors/owl-carousel/owl.theme.default.min.css">
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="vendors/nice-select/nice-select.css">

    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <main class="site-main">



        <!-- ================ welcome section start ================= -->
        <section class="welcome">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 mb-4 mb-lg-0">
                        <div class="row no-gutters welcome-images">
                            <div class="col-sm-7">
                                <div class="card">
                                    <img style="height:500px; width:500px" class=""
                                        src="/files/{{ $flat->image }}" alt="Card image cap">
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="card">



                                </div>
                                <div style="margin-top:20px;">

                                    <p>{{ $flat->details }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="welcome-content">
                            <h2 class="mb-4"><span class="d-block">Details</span></h2>
                            <p style="font-size:20px;">Name: {{ $flat->flat_name }}</p>
                            <p style="font-size:20px;">Location: {{ $flat->area }} </p>
                            <p style="font-size:20px;">Room(s): {{ $flat->room_num }}</p>
                            <p style="font-size:20px;">Bathroom(s): {{ $flat->bathroom_num }}</p>
                            <p style="font-size:20px;">Specification: {{ $flat->house_length }} sq(feet)</p>
                            <p style="font-size:20px;">Lift: {{ $flat->lift }}</p>
                            <p style="font-size:20px;">Floor: {{ $flat->floor_num }}</p>
                            <p style="font-size:20px;">Rent: ৳ {{ $flat->rent }}</p>
                            <p style="font-size:20px;">Servicing-Charge: ৳{{ $flat->charge }}</p>
                            <p style="font-size:20px;">Status: {{ $booked }}</p>


                            <a class="button button--active home-banner-btn mt-4" href="tel:01747897071"
                                target="_blank">Call Now</a>
                            @if ($booked == 'Available')
                                <a style="margin-left:15px;" class="button button--active home-banner-btn mt-4"
                                    href="{{ route('payment', ['flat_id' => $flat->id]) }}" target="_blank">Book Now</a>
                            @else
                                <a style="margin-left:15px; color:#ffffff;background-color:#FF0000"
                                    class="button button--active home-banner-btn mt-4">Unavailable</a>
                            @endif

                        </div>
                    </div>
                </div>
            </div>
        </section>








    </main>




    <script src="vendors/jquery/jquery-3.2.1.min.js"></script>
    <script src="vendors/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="vendors/magnefic-popup/jquery.magnific-popup.min.js"></script>
    <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="vendors/easing.min.js"></script>
    <script src="vendors/superfish.min.js"></script>
    <script src="vendors/nice-select/jquery.nice-select.min.js"></script>
    <script src="vendors/jquery.ajaxchimp.min.js"></script>
    <script src="vendors/mail-script.js"></script>
    <script src="js/main.js"></script>
</body>

</html>
