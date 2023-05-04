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
use App\Models\Payment;
use App\Models\Booking;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class HomepageController extends Controller
{

    public function viewIndexPage(Request $request)
    {

        $data = json_decode(Storage::get('data.json'), true);
        if (isset($data)) $renterId = $data['renter_id'];
        $renter = null;
        if (isset($renterId)) {
            $renter = DB::table('renter')
                ->where('id', '=', $renterId)
                ->first();
        }

        if (isset($request->search_keyword)) {
            $min = 0;
            $max = 100000;

            $rent = $request->rent;
            if ($request->rent == '5-15') {

                $min = 5000;
                $max = 15000;
            } else if ($request->rent == '16-25') {

                $min = 16000;
                $max = 25000;
            } else if ($request->rent == '26-35') {

                $min = 26000;
                $max = 35000;
            } else if ($request->rent == '36-45') {

                $min = 36000;
                $max = 45000;
            } else if ($request->rent == '46-50') {

                $min = 46000;
                $max = 50000;
            } else if ($request->rent == '51') {

                $min = 51000;
                $max = 100000;
            }
            $rooms=$request->rooms;
            
            $flats = DB::table('flats')
                ->where('area', 'like', '%' . $request->search_keyword . '%')
                ->where('room_num', '=', $request->rooms)
                ->whereBetween('rent', [$min, $max])
                ->get();
        } else {
            $flats = DB::table('flats')
                ->get();
        }
        return view('index2', ['flats' => $flats, 'renter' => $renter]);
    }

    public function goToLogOutPage(Request $request)
    {
        $data = ['renter_id' => ''];
        Storage::put('data.json', json_encode($data));
        $data = json_decode(Storage::get('data.json'), true);
        if (isset($data)) $renterId = $data['renter_id'];
        $renter = null;
        if (isset($renterId)) {
            $renter = DB::table('renter')
                ->where('id', '=', $renterId)
                ->first();
        }

        if (isset($request->search_keyword)) {

            $flats = DB::table('flats')
                ->where('area', 'like', '%' . $request->search_keyword . '%')
                ->get();
        } else {
            $flats = DB::table('flats')
                ->get();
        }
        return view('index2', ['flats' => $flats, 'renter' => $renter]);
    }

    public function goToLoginPage()
    {
        return view('login');
    }
    public function goToOwnerRegistrationPage()
    {
        return view('registration_owner');
    }
    public function goToRenterRegistrationPage()
    {
        return view('registration_renter');
    }
    public function goToRenterLoginPage()
    {
        return view('login_renter');
    }
    public function goToOwnerLoginPage()
    {
        return view('login_owner');
    }
    public function goToDetailsPage()
    {
        return view('room_details');
    }
    public function goToDetailsPage2()
    {
        return view('room_details2');
    }
    public function bookedFlatListPage(Request $request)
    {

        $data = json_decode(Storage::get('data2.json'), true);
        if (isset($data)) $ownerId = $data['owner_id'];
        $flats = DB::table('flats')
            ->where('owner_id', '=', $ownerId)
            ->get();
        $bookingFlats = DB::table('booking_flats')
            ->get();
        foreach ($flats as $flat) {
            foreach ($bookingFlats as $book) {
                if ($book->flat_id == $flat->id) {
                    $flat->status = 'booked'; // change the status of the matched flat
                }
            }
        }

        return view('booked_list', ['book' => $bookingFlats, 'flats' => $flats]);
    }


    public function goToDetailsPage3(Request $request)
    {
        $flatId = $request->flat_id;
        $flat = DB::table('flats')
            ->where('id', '=', $flatId)
            ->first();
        $booked_flat = DB::table('booking_flats')
            ->where('flat_id', '=', $flatId)
            ->first();
        $isBooked = 'Available';
        if (isset($booked_flat)) {

            $isBooked = 'Booked';
        } else {
            $isBooked = 'Available';
        }
        return view('room_details3', ['flat' => $flat, 'booked' => $isBooked]);
    }
    public function goToBookingPage()
    {
        return view('bookNow');
    }
    public function goToCallingPage()
    {
        return view('callNow');
    }
    public function goToFlatListPage()
    {
        return view('index2');
    }
    public function goToPaymentPage(Request $request)
    {

        $flat = DB::table('flats')
            ->where('id', '=', $request->flat_id)
            ->first();
        return view('payment', ['flat' => $flat]);
    }
    public function saveOwner(Request $request)
    {

        $owner = new Owner();
        $owner->name = $request->name;
        $owner->phone_num = $request->phone;
        $owner->nid = $request->nid;
        $owner->email = $request->email;
        $owner->password = $request->password;

        $owner->save();
        return view('login_owner');
    }
    public function saveRenter(Request $request)
    {

        $renter = new Renter();
        $renter->name = $request->name;
        $renter->phone_num = $request->phone;
        $renter->nid = $request->nid;
        $renter->profession = $request->profession;
        $renter->password = $request->password;

        $renter->save();
        $flats = DB::table('flats')
            ->get();

        return view('index2', ['renter' => $renter, 'flats' => $flats]);
    }
    public function loginRenter(Request $request)
    {
        $phone = $request->phone;
        $pass = $request->password;

        $renter = DB::table('renter')
            ->where('phone_num', '=', $phone)
            ->where('password', '=', $pass)
            ->first();

        if ($renter) {
            $flats = DB::table('flats')
                ->get();
            // Save data to a file on the local storage
            $data = ['renter_id' => $renter->id];
            Storage::put('data.json', json_encode($data));
            return  redirect()->route('index2')->with(['renter_id' => $renter->id]);
        } else {
            return view('login_renter');
        }
    }
    public function loginOwner(Request $request)
    {
        $phone = $request->phone;
        $pass = $request->password;

        $owner = DB::table('owner')
            ->where('phone_num', '=', $phone)
            ->where('password', '=', $pass)
            ->first();

        if ($owner) {
            $data = ['owner_id' => $owner->id];
            Storage::put('data2.json', json_encode($data));
            $flats = DB::table('flats')
                ->where('owner_id', '=', $owner->id)
                ->get();

            return view('owner-dashboard', ['owner' => $owner, 'flats' => $flats]);
        } else {
            return view('login_owner');
        }
    }


    public function goToOwnerDashboard()
    {
        $data = json_decode(Storage::get('data2.json'), true);
        if (isset($data)) $ownerId = $data['owner_id'];
        $flats = DB::table('flats')
            ->where('owner_id', '=', $ownerId)
            ->get();
        $owner = DB::table('owner')
            ->where('id', '=', $ownerId)
            ->first();

        return view('owner-dashboard', ['owner' => $owner, 'flats' => $flats]);
    }

    public function goToRenterDashboard(Request $request)
    {
        $data = json_decode(Storage::get('data.json'), true);
        if (isset($data)) $renterId = $data['renter_id'];


        $bookingFlats = DB::table('booking_flats')
            ->where('renter_id', '=', $renterId)
            ->get();
        $renter = DB::table('renter')
            ->where('id', '=', $renterId)
            ->first();
        $flats = [];
        foreach ($bookingFlats as $book) {
            $flat = DB::table('flats')
                ->where('id', '=', $book->flat_id)
                ->get();
            array_push($flats, $flat);
        }

        return view('renter_dashboard', ['renter' => $renter, 'flats' => $flats, 'booked' => $bookingFlats]);
    }


    public function goToAddFlat()
    {
        return view('add_flat');
    }

    public function saveFlat(Request $request)
    {
        if(!isset($request->id)){

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
        $flat->location_link = $request->location_link;


        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $location = 'files';
            $file->move($location, $filename);
            $flat->image = $filename;
        }


        $flat->save();
    }
    else{
        $flat = $request->id ? Flat::findOrFail($request->id) : new Flat();
        
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
        $flat->location_link = $request->location_link;


        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $location = 'files';
            $file->move($location, $filename);
            $flat->image = $filename;
        }


        $flat->save();

    }
        $owner = DB::table('owner')
            ->where('id', '=', $request->owner_id)
            ->first();
        $flats = DB::table('flats')
            ->where('owner_id', '=', $request->owner_id)
            ->get();
        return view('owner-dashboard', ['owner' => $owner, 'flats' => $flats]);
    }
    public function saveBookedFlats(Request $request)
    {
        $payment = new Payment();
        $book = new Booking();
        $data = json_decode(Storage::get('data.json'), true);
        if (isset($data)) {
            $renterId = $data['renter_id'];
            $payment->renter_id = $renterId;
        }
        $payment->amount = $request->amount;
        $payment->method = 'Online Payment';
        $payment->save();
        $data = json_decode(Storage::get('data.json'), true);
        if (isset($data)) {
            $renterId = $data['renter_id'];
            $book->renter_id = $renterId;
            $book->flat_id = $request->flat_id;
            $book->payment_id = $payment->id;
        }
        $book->save();
        return  redirect()->route('index2');
    }
    public function deleteFlat(Request $request)
    {

        $flat = DB::table('flats')
            ->where('id', '=', $request->flat_id)
            ->delete();
        return  redirect()->route('owner-dashboard');
    }
    public function updateFlat(Request $request)
    {
       
        $flat = DB::table('flats')
            ->where('id', '=', $request->flat_id)
            ->first();
        return  view('add_flat',['flat' => $flat]);
    }
    public function toContactPage()
    {
        return  view ('contact');
    }
    public function goToOwnerLogoutPage()
    {
        $data = ['owner_id' => ''];
        Storage::put('data2.json', json_encode($data));
        return   redirect()->route('index2');
    }
    
    
}
