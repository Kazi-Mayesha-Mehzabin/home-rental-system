<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="..dashboard/assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="..dashboard/assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Dashboard</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="dashboard/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="dashboard/assets/css/light-bootstrap-dashboard.css?v=2.0.0 " rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="dashboard/assets/css/demo.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <section class="ftco-section">
        <div class="container">
            <h2> The Booked flats are shown here.</h2>
            <div class="card-body table-full-width table-responsive">
                <table class="table table-hover table-striped">
                    <thead style="background-color: #01C531;">
                        <th style="color: #000000;">Image</th>

                        <th style="color: #000000;">Flat Name</th>
                        <th style="color: #000000;">Address</th>
                        <th style="color: #000000;">Rent</th>
                        <th style="color: #000000;">Available Date</th>
                        <th style="color: #000000;">Status</th>
                        
                    </thead>
                    <tbody>
                        @foreach ($flats as $flat)
                            <tr>
                                <td>
                                    <img style="height:100px; width:100px;"src="/files/{{ $flat->image }}"> </img>

                                </td>
                                <td>
                                    {{ $flat->flat_name }}
                                </td>
                                <td>
                                    {{ $flat->area }}
                                </td>

                                <td>
                                    {{ $flat->rent }}
                                </td>

                                <td>
                                    {{ $flat->available_date }}
                                </td>
                                <td>
                                    {{ $flat->status??'Available' }} 
                                </td>


                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            
             <div class="row mb-5 mr-2 align-items-center justify-content-right-end">
                
            </div>





    </section>



</body>
<script src="dashboard/assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="dashboard/assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="dashboard/assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="dashboard/assets/js/plugins/bootstrap-switch.js"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!--  Chartist Plugin  -->
<script src="dashboard/assets/js/plugins/chartist.min.js"></script>
<!--  Notifications Plugin    -->
<script src="dashboard/assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
<script src="dashboard/assets/js/light-bootstrap-dashboard.js?v=2.0.0 " type="text/javascript"></script>
<!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
<script src="dashboard/assets/js/demo.js"></script>

</html>
