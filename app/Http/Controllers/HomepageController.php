<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\Owner;
use App\Models\Flat;
use App\Models\Renter;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class HomepageController extends Controller
{
   
    public function viewIndexPage(Request $request){
        $renterId=Session::get('renter_id');
        $renter=null;
        if(isset($renterId)){
            $renter = DB::table('renter')
            ->where ('id','=',$renterId)
            ->first();

        }
       
        $flats = DB::table('flats')
        ->get();
        return view ('index2',['flats'=>$flats,'renter'=>$renter]);


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
    public function goToDetailsPage3(Request $request){
        $flatId = $request->flat_id; 
        $flat = DB::table('flats')
        ->where ('id','=',$flatId)
        ->first();
        return view ('room_details3',['flat'=>$flat]);
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
    public function saveRenter(Request $request){
        
        $renter = new Renter();
        $renter->name = $request->name;
        $renter->phone_num = $request->phone;
        $renter->nid = $request->nid;
        $renter->profession = $request->profession;
        $renter->password = $request->password;
 
        $renter->save();
        $flats = DB::table('flats')
        ->get();
       
        return view ('index2',['renter'=>$renter,'flats'=>$flats]);
       
       
 
     }
     public function loginRenter(Request $request){
        $phone = $request->phone;
        $pass = $request->password;

        $renter = DB::table('renter')
        ->where ('phone_num','=',$phone)
        ->where ('password','=',$pass)
        ->first();

       if($renter)
       {
        $flats = DB::table('flats')
        ->get();
       
       return  redirect()->route('index2')->with( [ 'renter_id' => $renter->id]);

       }
       else{
        return view ('login_renter');
       }
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
        $flat->room_num = $request->room_num;
        $flat->bathroom_num = $request->bathroom_num;
        $flat->lift = $request->lift;
        $flat->details = $request->details;
        $flat->house_length = $request->house_length;
        $flat->floor_num = $request->floor_num;
        $flat->charge = $request->charge;
        

        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $location = 'files';
            $file->move($location, $filename);
            $flat->image = $filename;
        }
        
 
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
