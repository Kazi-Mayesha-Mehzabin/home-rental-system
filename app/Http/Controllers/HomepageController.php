<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class HomepageController extends Controller
{
   
    public function viewIndexPage(){
      
        return view ('index2');


    }
    public function goToLoginPage(){
        return view ('login');
    }
    public function goToOwnerRegistrationPage(){
        return view ('registration_owner');
    }
    public function goToRenterRegistrationPage(){
        return view ('registration_renter');
    }
    public function goToRenterLoginPage(){
        return view ('login_renter');
    }
    public function goToOwnerLoginPage(){
        return view ('login_owner');
    }
    public function goToDetailsPage(){
        return view ('room_details');
    }
    public function goToDetailsPage2(){
        return view ('room_details2');
    }
    public function goToDetailsPage3(){
        return view ('room_details3');
    }
    public function goToBookingPage(){
        return view ('bookNow');
    }
    
    
}
