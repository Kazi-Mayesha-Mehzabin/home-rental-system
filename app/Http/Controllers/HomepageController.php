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
}
