<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\Owner;
use App\Models\Flat;
use Illuminate\Support\Facades\DB;

class HomepageController extends Controller
{
   
    public function viewIndexPage(){
      
        $flats = DB::table('flats')
        ->get();
        return view ('index2',['flats'=>$flats]);


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
    public function goToCallingPage(){
        return view ('callNow');
    }
    public function goToFlatListPage(){
        return view ('flatlist');
    }
    public function goToPaymentPage(){
        return view ('payment');
    }
    public function saveOwner(Request $request){
        
       $owner = new Owner();
       $owner->name = $request->name;
       $owner->phone_num = $request->phone;
       $owner->nid = $request->nid;
       $owner->email = $request->email;
       $owner->password = $request->password;

       $owner->save();
       return view ('login_owner');
      

    }
    public function loginOwner(Request $request){
        $phone = $request->phone;
        $pass = $request->password;

        $owner = DB::table('owner')
        ->where ('phone_num','=',$phone)
        ->where ('password','=',$pass)
        ->first();

       if($owner)
       {
         $flats = DB::table('flats')
        ->where ('owner_id','=',$owner->id)
        ->get();
        
        return view ('owner-dashboard',['owner'=>$owner, 'flats'=>$flats]);

       }
       else{
        return view ('login_owner');
       }
    }

    public function goToOwnerDashboard(){
        return view ('owner-dashboard');
    }
    

    public function goToAddFlat(){
        return view ('add_flat');
    }

    public function saveFlat(Request $request){
        
        $flat = new Flat();
        $flat->owner_id = $request->owner_id;
        $flat->flat_name = $request->flat_name;
        $flat->flat_no = $request->flat_no;
        $flat->road_no = $request->road_no;
        $flat->division = $request->division;
        $flat->rent = $request->rent;
        $flat->area = $request->area;
        $flat->available_date = $request->available_date;
        
 
        $flat->save();
        $owner = DB::table('owner')
        ->where ('id','=',$request->owner_id)
        ->first();
        $flats = DB::table('flats')
        ->where ('owner_id','=',$request->owner_id)
        ->get();
        return view ('owner-dashboard',['owner'=>$owner, 'flats'=>$flats]);
        
       
       
 
     }

       
       
 
     
    
    
}
