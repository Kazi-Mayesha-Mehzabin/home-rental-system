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
    <!-- ================ header section start ================= -->
    <header class="header_area">
        <div class="header-top">
            <div class="container">
                <div class="d-flex align-items-center">
                    <div id="logo">
                        <a href="index.html"><img style="height:70px;" src="img/home/logo.png" alt=""
                                title="" /></a>
                        <a style="color:#b58c52; font-size:25px; font-family: 'Playfair Display', serif;"><b>Home
                                Rent</b></a>
                    </div>
                    <div class="ml-auto d-none d-md-block d-md-flex">

                        <div class="media header-top-info">

                        </div>


                    </div>
                </div>
            </div>
        </div>


        <div class="main_menu">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <!-- <a class="navbar-brand logo_h" href="index.html"><img src="img/logo.png" alt=""></a> -->
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav">
                            <li class="nav-item active"><a class="nav-link" href="index.html">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="about.html">About</a></li>
                            <li class="nav-item"><a class="nav-link" href="properties.html">Flats</a></li>


                            <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
                        </ul>
                    </div>
                    <ul class="nav navbar-nav menu_nav">
                        <li class="nav-item"><a style="color:#0276EA;" class="nav-link"
                                href="{{ route('login-renter') }}"><b>Log In</b></a></li>
                        <li class="nav-item"><a style="color:#0276EA;" class="nav-link"
                                href="{{ route('register-renter') }}"><b>Sign Up</b></a></li>

                    </ul>


                </div>
            </nav>

            <!-- <div class="search_input" id="search_input_box">
        <div class="container">
          <form class="d-flex justify-content-between">
            <input type="text" class="form-control" id="search_input" placeholder="Search Here">
            <button type="submit" class="btn"></button>
            <span class="lnr lnr-cross" id="close_search" title="Close Search"></span>
          </form>
        </div>
      </div> -->
        </div>
    </header>
    <!-- ================ header section end ================= -->

    <main class="site-main">


        <!-- ================ start banner area ================= -->
        <section class="home-banner-area" id="home">
            <div class="container h-100">
                <div class="home-banner">
                    <div class="text-center">
                        <h4>Find your perfect place to call home</h4>
                        <h1>Home <em> </em> Rent</h1>

                    </div>
                </div>
            </div>
        </section>
        <!-- ================ end banner area ================= -->


        <!-- ================ start banner form ================= -->
        <form action="{{ route('flat-list') }}" method="get" class="form-search form-search-position">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 gutters-19">
                        <div class="form-group">
                            <input class="form-control" type="text" placeholder="Enter your Preferred Location.."
                                required>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-sm gutters-19">
                        <div class="form-group">
                            <div class="form-select-custom">
                                <select name="" id="">
                                    <option value="" disabled selected>Price Range</option>
                                    <option value="8 AM">5K-15K</option>
                                    <option value="12 PM">16K-25K</option>
                                    <option value="8 AM">26K-35K</option>
                                    <option value="12 PM">36K-45K</option>
                                    <option value="8 AM">46K-50K</option>
                                    <option value="12 PM">51K & Above</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm gutters-19">
                        <div class="form-group">
                            <div class="form-select-custom">
                                <select name="" id="">
                                    <option value="" disabled selected>Minimum number of Beds</option>
                                    <option value="8 AM">1 Bed</option>
                                    <option value="12 PM">2 Beds</option>
                                    <option value="12 PM">3 Beds</option>
                                    <option value="12 PM">4 Beds</option>
                                    <option value="12 PM">5 Beds</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 gutters-19">

                        <div class="form-group">
                            <button class="button button-form" type="submit">Search Now</button>
                        </div>

                    </div>
                </div>
            </div>
        </form>
        <!-- ================ end banner form ================= -->

        <!-- ================ welcome section start ================= -->
        <section class="welcome">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 mb-4 mb-lg-0">
                        <div class="row no-gutters welcome-images">
                            <div class="col-sm-7">
                                <div class="card">
                                    <img class="" src="img/home/welcome1.jpg" alt="Card image cap">
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="card">
                                    <img class="" src="img/home/welcome2.jpg" alt="Card image cap">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="card">
                                    <img class="" src="img/home/welcome3.jpg" alt="Card image cap">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="welcome-content">
                            <h2 class="mb-4"><span class="d-block">Welcome</span>to Home Rental Site</h2>
                            <p>Whether you're a renter in search of the perfect place to call home, or an owner looking
                                to list your property, you're in the right place! Our platform is designed to connect
                                renters with the ideal rental property, while providing owners with a convenient way to
                                manage their listings.</p>
                            <p>We're committed to helping you find the perfect rental property or tenant and to making
                                your rental experience as smooth as possible. We can't wait to help you find your
                                perfect match and make your rental dreams a reality!</p>
                            <a class="button button--active home-banner-btn mt-4" href="#">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-margin">
            <div class="container">
                <div class="section-intro text-center pb-80px">
                    <div class="section-intro__style">
                        <img src="img/home/home-icon.png" height="35px" alt="">
                    </div>
                    <h2>Explore Our Featured Homes</h2>
                </div>

                <div class="row">
                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                        <div class="card card-explore">
                            <div class="card-explore__img">
                                <img class="card-img" src="img/home/room1.jpg" alt="">
                            </div>
                            <div class="card-body">
                                <h3 class="card-explore__price">৳15,000 <sub>/ Per Month</sub></h3>
                                <h4 class="card-explore__title"><a href="#">Apartment</a></h4>
                                <div class="row">
                                    <a href="https://www.google.com/maps/place/Mohammadpur,+Dhaka/@23.764598,90.3509938,15z/data=!3m1!4b1!4m6!3m5!1s0x3755c09f9ba3d447:0x1babce9f1c6c95a3!8m2!3d23.7661639!4d90.3588734!16s%2Fm%2F02phgj5"
                                        target="_blank">
                                        <img style="height:20px; width:20px; margin-left:10px"
                                            src="https://cdn-icons-png.flaticon.com/512/2991/2991231.png">


                                    </a>
                                    <h6 style="margin-left:5px;">Mohammadpur, Dhaka</h6>
                                </div>

                                <p>A cozy 1100 square feet flat in the heart of Mohammadpur, with two beds and two
                                    baths.</p>

                                <a class="card-explore__link" href="{{ route('room-details3') }}">View Details <i
                                        class="ti-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                      @foreach ($flats as $flat) 
                       <tr>
                       <td>
                       {{ $flat->flat_name}}
                       </td>
                       <td>
                       {{ $flat->area}}
                       </td>

                       <td>
                       {{ $flat->rent}}
                       </td>

                       <td>
                       {{ $flat->available_date}}
                       </td>
                       
                       </tr>

                        @endforeach

                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                        <div class="card card-explore">
                            <div class="card-explore__img">
                                <img class="card-img" src="img/home/room2.jpg" alt="">
                            </div>
                            <div class="card-body">
                                <h3 class="card-explore__price">৳17,000 <sub>/ Per Month</sub></h3>
                                <h4 class="card-explore__title"><a href="#">Apartment</a></h4>
                                <div class="row">
                                    <a href="https://www.google.com/maps/place/23%C2%B046'02.0%22N+90%C2%B022'05.0%22E/@23.7671737,90.3678945,17z"
                                        target="_blank">
                                        <img style="height:20px; width:20px; margin-left:10px"
                                            src="https://cdn-icons-png.flaticon.com/512/2991/2991231.png">


                                    </a>
                                    <h6 style="margin-left:5px;">Mirpur, Dhaka</h6>
                                </div>

                                <p>A 1400 square feet flat with a scenic view located in Mirpur, with two beds and
                                    three baths.
                                    <!--<ul>
                    <li><img src="img/home/size.png" alt="size-icon"> 1100 sqft</li>
                    <li><img src="img/home/bed.png" alt="size-icon"> 3 beds</li>
                    <li><img src="img/home/bath.png" alt="size-icon"> 4 baths</li>
                  </ul>-->
                                </p>
                                <a class="card-explore__link" href="{{ route('room-details3') }}">View Details <i
                                        class="ti-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                        <div class="card card-explore">
                            <div class="card-explore__img">
                                <img class="card-img" src="img/home/room3.jpeg" alt="">
                            </div>
                            <div class="card-body">
                                <h3 class="card-explore__price">৳19,000 <sub>/ Per Month</sub></h3>
                                <h4 class="card-explore__title"><a href="#">Apartment</a></h4>
                                <div class="row">
                                    <a href="https://www.google.com/maps/place/Dhanmondi,+Dhaka+1205/@23.74705,90.3670858,15z/data=!3m1!4b1!4m6!3m5!1s0x3755b8b33cffc3fb:0x4a826f475fd312af!8m2!3d23.7461495!4d90.3742307!16s%2Fm%2F02phgcq"
                                        target="_blank">
                                        <img style="height:20px; width:20px; margin-left:10px"
                                            src="https://cdn-icons-png.flaticon.com/512/2991/2991231.png">


                                    </a>
                                    <h6 style="margin-left:5px;">Dhanmondi, Dhaka</h6>

                                </div>

                                <p>A luxurious 1600 square feet apartment situated in Dhanmondi, with three beds and
                                    four baths.</p>
                                <a class="card-explore__link" href="{{ route('room-details3') }}">View Details <i
                                        class="ti-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                        <div class="card card-explore">
                            <div class="card-explore__img">
                                <img class="card-img" src="img/home/room4.jpg" alt="">
                            </div>
                            <div class="card-body">
                                <h3 class="card-explore__price">৳16,000 <sub>/ Per Month</sub></h3>
                                <h4 class="card-explore__title"><a href="#">Apartment</a></h4>
                                <div class="row">
                                    <a href="https://www.google.com/maps/place/Mirsharai/@22.767116,91.5594576,14z/data=!3m1!4b1!4m6!3m5!1s0x37533714e1dc3c01:0xea6d667f3606eb3d!8m2!3d22.773039!4d91.5741517!16s%2Fm%2F028c46d"
                                        target="_blank">
                                        <img style="height:20px; width:20px; margin-left:10px"
                                            src="https://cdn-icons-png.flaticon.com/512/2991/2991231.png">

                                    </a>
                                    <h6 style="margin-left:5px;">Mirsharai, Chittagong</h6>

                                </div>
                                <p>A beautiful 1300 square feet flat in the quiet city of Mirsharai, with two beds and
                                    two baths.</p>
                                <a class="card-explore__link" href="#">View Details <i
                                        class="ti-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                        <div class="card card-explore">
                            <div class="card-explore__img">
                                <img class="card-img" src="img/home/room5.jpg" alt="">
                            </div>
                            <div class="card-body">
                                <h3 class="card-explore__price">৳12,000 <sub>/ Per Month</sub></h3>
                                <h4 class="card-explore__title"><a href="#">Apartment</a></h4>
                                <div class="row">
                                    <a href="https://www.google.com/maps/place/Basundhara+Residential+Area,+Dhaka/@23.8195825,90.4368029,14z/data=!3m1!4b1!4m6!3m5!1s0x3755c62fce7d991f:0xacfaf1ac8e944c05!8m2!3d23.8191441!4d90.4525954!16s%2Fg%2F1yfdrwxvj"
                                        target="_blank">
                                        <img style="height:20px; width:20px; margin-left:10px"
                                            src="https://cdn-icons-png.flaticon.com/512/2991/2991231.png">

                                    </a>
                                    <h6 style="margin-left:5px;">Bashundhara R/A, Dhaka</h6>

                                </div>
                                <p>A modest 800 square feet bachelor home at the center of Bashundhara, with one bed and
                                    one bath.</p>
                                <a class="card-explore__link" href="#">View Details <i
                                        class="ti-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                        <div class="card card-explore">
                            <div class="card-explore__img">
                                <img class="card-img" src="img/home/room6.jpg" alt="">
                            </div>
                            <div class="card-body">
                                <h3 class="card-explore__price">৳11,000 <sub>/ Per Month</sub></h3>
                                <h4 class="card-explore__title"><a href="#">Apartment</a></h4>
                                <div class="row">
                                    <a href="https://www.google.com/maps/place/Gulshan,+Dhaka/@23.789747,90.3928819,14z/data=!3m1!4b1!4m6!3m5!1s0x3755c7a0f70deb73:0x30c36498f90fe23!8m2!3d23.7924961!4d90.4078058!16s%2Fm%2F02phgdd"
                                        target="_blank">
                                        <img style="height:20px; width:20px; margin-left:10px"
                                            src="https://cdn-icons-png.flaticon.com/512/2991/2991231.png">

                                    </a>
                                    <h6 style="margin-left:5px;">Gulshan, Dhaka</h6>

                                </div>
                                <p>A 600 square feet studio apartment in the middle of Gulshan, with one bed and
                                    one bath.</p>
                                <a class="card-explore__link" href="#">View Details <i
                                        class="ti-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                        <div class="card card-explore">
                            <div class="card-explore__img">
                                <img class="card-img" src="img/home/room7.jpg" alt="">
                            </div>
                            <div class="card-body">
                                <h3 class="card-explore__price">৳20,000 <sub>/ Per Month</sub></h3>
                                <h4 class="card-explore__title"><a href="#">Apartment</a></h4>
                                <div class="row">
                                    <a href="https://www.google.com/maps/place/Lakhaura/@24.950621,91.8790121,14.25z/data=!4m6!3m5!1s0x3750559f6e5d7ab1:0x9b9bfd3dc0ed8b04!8m2!3d24.9441117!4d91.8505067!16s%2Fg%2F11fqzmqk40"
                                        target="_blank">
                                        <img style="height:20px; width:20px; margin-left:10px"
                                            src="https://cdn-icons-png.flaticon.com/512/2991/2991231.png">

                                    </a>
                                    <h6 style="margin-left:5px;">Lakhuara, Sylhet</h6>

                                </div>
                                <p>A picturesque 1800 square feet apartment in Lakhuara, Sylhet, with four beds and
                                    three baths.</p>
                                <a class="card-explore__link" href="#">View Details <i
                                        class="ti-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                        <div class="card card-explore">
                            <div class="card-explore__img">
                                <img class="card-img" src="img/home/room8.jpg" alt="">
                            </div>
                            <div class="card-body">
                                <h3 class="card-explore__price">৳18,000 <sub>/ Per Month</sub></h3>
                                <h4 class="card-explore__title"><a href="#">Apartment</a></h4>
                                <div class="row">
                                    <a href="https://www.google.com/maps/place/23%C2%B046'02.0%22N+90%C2%B022'05.0/www.google.com/maps/place/Dhanmondi,+Dhaka+1205/@23.74705,90.3670858,15z/data=!3m1!4b1!4m6!3m5!1s0x3755b8b33cffc3fb:0x4a826f475fd312af!8m2!3d23.7461495!4d90.3742307!16s%2Fm%2F02phgcq"
                                        target="_blank">
                                        <img style="height:20px; width:20px; margin-left:10px"
                                            src="https://cdn-icons-png.flaticon.com/512/2991/2991231.png">

                                    </a>
                                    <h6 style="margin-left:5px;">Dhanmondi, Dhaka</h6>

                                </div>

                                <p>An upscale 1400 square feet apartment located in Dhanmondi, with three beds and
                                    two baths.</p>
                                <a class="card-explore__link" href="#">View Details <i
                                        class="ti-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                        <div class="card card-explore">
                            <div class="card-explore__img">
                                <img class="card-img" src="img/home/room9.jpg" alt="">
                            </div>
                            <div class="card-body">
                                <h3 class="card-explore__price">৳15,000 <sub>/ Per Month</sub></h3>
                                <h4 class="card-explore__title"><a href="#">Apartment</a></h4>
                                <div class="row">
                                    <a href="https://www.google.com/maps/place/Kotwali,+Chattogram/@22.3394155,91.8120737,14z/data=!3m1!4b1!4m6!3m5!1s0x30acd8a71c5c3451:0x8145d1408572eb24!8m2!3d22.3414146!4d91.8269573!16s%2Fm%2F02phg7l"
                                        target="_blank">
                                        <img style="height:20px; width:20px; margin-left:10px"
                                            src="https://cdn-icons-png.flaticon.com/512/2991/2991231.png">
                                    </a>
                                    <h6 style="margin-left:5px;">Kotwali, Cox's Bazar</h6>

                                </div>

                                <p>A secure 1200 square feet flat in the quiet area of Kotwali, with two beds and
                                    one bath.</p>
                                <a class="card-explore__link" href="#">View Details <i
                                        class="ti-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="video-area">
            <div class="container">
                <div class="row justify-content-center align-items-center flex-column text-center">

                    <h3>Home Rent</h3>

                </div>
            </div>
        </section>




        <!-- ================ carousel section start ================= -->
        <section class="section-margin">
            <div class="container">
                <div class="section-intro text-center pb-20px">
                    <div class="section-intro__style">
                        <img src="img/home/team.png" alt="" height="60px">
                    </div>
                    <h2>Meet Our Team</h2>
                </div>
                <div class="owl-carousel owl-theme testi-carousel">
                    <div class="testi-carousel__item">
                        <div class="media">
                            <div class="testi-carousel__img">
                                <img height:74px; style="border-radius:50px;" src="img/home/me.jpeg" alt="">
                            </div>
                            <div class="media-body">
                                <div class="testi-carousel__intro">
                                    <h3>Kazi Mayesha Mehzabin</h3>
                                    <p>Developer</p>
                                </div>
                                <p>Technical expert, responsible for the creation, deployment and creative direction
                                    of the project</p>

                            </div>
                        </div>
                    </div>

                    <div class="testi-carousel__item">
                        <div class="media">
                            <div class="testi-carousel__img">
                                <img style="border-radius:50px;" src="img/home/sami.jpeg" alt="">
                            </div>
                            <div class="media-body">
                                <div class="testi-carousel__intro">
                                    <h3>Sami Ibn Rashid</h3>
                                    <p>Developer</p>
                                </div>
                                <p>UI/UX specialist, responsible for creating intuitive user interface and ensuring
                                    completion
                                    of the project.
                                </p>

                            </div>
                        </div>
                    </div>

                    <div class="testi-carousel__item">
                        <div class="media">
                            <div class="testi-carousel__img">
                                <img style="height:74px; border-radius:50px"src="img/home/faria.jpg" alt="">
                            </div>
                            <div class="media-body">
                                <div class="testi-carousel__intro">
                                    <h3>Faria Anjum</h3>
                                    <p>Developer</p>
                                </div>
                                <p>Designer, responsible for producing written content and researching and executing
                                    visual aspects of the project.</p>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- ================ carousel section end ================= -->




    </main>



    <!-- ================ start footer Area ================= -->
    <footer class="footer-area section-gap">
        <div class="container">
            <div class="row">
                <div class="col-xl-2 col-sm-6 mb-4 mb-xl-0 single-footer-widget">
                    <h4>About Us</h4>

                </div>
                <div class="col-xl-2 col-sm-6 mb-4 mb-xl-0 single-footer-widget">
                    <h4>Support</h4>

                </div>
                <div class="col-xl-2 col-sm-6 mb-4 mb-xl-0 single-footer-widget">
                    <h4>Contact Us</h4>

                </div>
                <div class="col-xl-2 col-sm-6 mb-4 mb-xl-0 single-footer-widget">
                    <h4>FAQ</h4>

                </div>
                <div class="col-xl-4 col-md-8 mb-4 mb-xl-0 single-footer-widget">
                    <h4>Terms and Conditions</h4>

                    <div class="form-wrap" id="mc_embed_signup">

                    </div>
                </div>
            </div>
            <div class="footer-bottom row align-items-center text-center text-lg-left">


            </div>
        </div>
    </footer>
    <!-- ================ End footer Area ================= -->



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
