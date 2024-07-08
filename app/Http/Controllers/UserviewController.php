<?php

namespace App\Http\Controllers;
use App\Mail\pendingConfirmationEventMail;
use App\Mail\pendingConfirmationTableMail;
use App\Models\AuditTrails;
use App\Models\pendingeventreservations;
use App\Models\pendingreservations;
use App\Models\ReservationEvent;
use App\Models\ReservationTable;
use App\Models\Userview;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class UserviewController extends Controller
{
    public function __invoke()
    {
        if(Cache::has('display_welcome')){
            return Cache::get('display_welcome');
        }else{
            $cachedata =  redirect('/welcome')->render();
            Cache::put('display_welcome' , $cachedata);
            return $cachedata;
        }
        

        return route('welcome');
      
    }
    public function __construct()
    {
        date_default_timezone_set('Asia/Manila');
    }

    public function index()
    {
        // if(Cache::has('display_welcome')){
        //     return Cache::get('display_welcome');
        // }else{
        //     $cachedata =  view('Userview.welcome')->render();
        //     Cache::put('display_welcome' , $cachedata);
        //     return $cachedata;
        // }
        $data = DB::table('userview')->get();
        foreach ($data as $key => $value) {
            $herocarousel = json_decode($value->herocarousel);
            $table = json_decode($value->reservation_tables);
            $event = json_decode($value->reservation_events);
            $restaurant = json_decode($value->restaurant);
            $gazebo = json_decode($value->gazebo);
            $package = json_decode($value->package);
            $description_about = $value->description_about;
            $event_hall = json_decode($value->event_hall);
            $pool = json_decode($value->pool);
            $picture_promo = json_decode($value->picture_promo);
            $client = json_decode($value->client);
        };
        return view('Userview.welcome', [
            'data' => DB::table('userview')->get(),
            'herocarousel' => $herocarousel,
            'table' => $table,
            'event' => $event,
            'restaurant' => $restaurant,
            'gazebo' => $gazebo,
            'event_hall' => $event_hall,
            'pool' => $pool,
            'package' => $package,
            'description_about' => $description_about,
            'picture_promo' => $picture_promo,
            'client' => $client,

        ]);
    }
    public function halldetails(){

        $data = DB::table('userview')->get();
        foreach ($data as $key => $value) {
            $herocarousel = json_decode($value->herocarousel);
            $table = json_decode($value->reservation_tables);
            $event = json_decode($value->reservation_events);
            $restaurant = json_decode($value->restaurant);
            $gazebo = json_decode($value->gazebo);
            $package = json_decode($value->package);
            $description_about = $value->description_about;
            $event_hall = json_decode($value->event_hall);
            $pool = json_decode($value->pool);
            $picture_promo = json_decode($value->picture_promo);
            $client = json_decode($value->client);
        };
        
        return view('Userview.venue_details.hall',[
            'data' => DB::table('userview')->get(),
            'herocarousel' => $herocarousel,
            'table' => $table,
            'event' => $event,
            'restaurant' => $restaurant,
            'gazebo' => $gazebo,
            'event_hall' => $event_hall,
            'pool' => $pool,
            'package' => $package,
            'description_about' => $description_about,
            'picture_promo' => $picture_promo,
            'client' => $client,
        ]);
    }
    public function pooldetails(){

        $data = DB::table('userview')->get();
        foreach ($data as $key => $value) {
            $herocarousel = json_decode($value->herocarousel);
            $table = json_decode($value->reservation_tables);
            $event = json_decode($value->reservation_events);
            $restaurant = json_decode($value->restaurant);
            $gazebo = json_decode($value->gazebo);
            $package = json_decode($value->package);
            $description_about = $value->description_about;
            $event_hall = json_decode($value->event_hall);
            $pool = json_decode($value->pool);
            $picture_promo = json_decode($value->picture_promo);
            $client = json_decode($value->client);
        };
        return view('Userview.venue_details.pool',[
            'data' => DB::table('userview')->get(),
            'herocarousel' => $herocarousel,
            'table' => $table,
            'event' => $event,
            'restaurant' => $restaurant,
            'gazebo' => $gazebo,
            'event_hall' => $event_hall,
            'pool' => $pool,
            'package' => $package,
            'description_about' => $description_about,
            'picture_promo' => $picture_promo,
            'client' => $client,
        ]);
    }
    public function gazebodetails(){

        $data = DB::table('userview')->get();
        foreach ($data as $key => $value) {
            $herocarousel = json_decode($value->herocarousel);
            $table = json_decode($value->reservation_tables);
            $event = json_decode($value->reservation_events);
            $restaurant = json_decode($value->restaurant);
            $gazebo = json_decode($value->gazebo);
            $package = json_decode($value->package);
            $description_about = $value->description_about;
            $event_hall = json_decode($value->event_hall);
            $pool = json_decode($value->pool);
            $picture_promo = json_decode($value->picture_promo);
            $client = json_decode($value->client);
        };

        return view('Userview.venue_details.gazebo',[
            'data' => DB::table('userview')->get(),
            'herocarousel' => $herocarousel,
            'table' => $table,
            'event' => $event,
            'restaurant' => $restaurant,
            'gazebo' => $gazebo,
            'event_hall' => $event_hall,
            'pool' => $pool,
            'package' => $package,
            'description_about' => $description_about,
            'picture_promo' => $picture_promo,
            'client' => $client,
        ]);
    }
    public function restaurantdetails(){

        $data = DB::table('userview')->get();
        foreach ($data as $key => $value) {
            $herocarousel = json_decode($value->herocarousel);
            $table = json_decode($value->reservation_tables);
            $event = json_decode($value->reservation_events);
            $restaurant = json_decode($value->restaurant);
            $gazebo = json_decode($value->gazebo);
            $package = json_decode($value->package);
            $description_about = $value->description_about;
            $event_hall = json_decode($value->event_hall);
            $pool = json_decode($value->pool);
            $picture_promo = json_decode($value->picture_promo);
            $client = json_decode($value->client);
        };
        return view('Userview.venue_details.restaurant',[
        'data' => DB::table('userview')->get(),
        'herocarousel' => $herocarousel,
        'table' => $table,
        'event' => $event,
        'restaurant' => $restaurant,
        'gazebo' => $gazebo,
        'event_hall' => $event_hall,
        'pool' => $pool,
        'package' => $package,
        'description_about' => $description_about,
        'picture_promo' => $picture_promo,
        'client' => $client,
    ]);

    }

    public function chooseReserve(){
        // if(Cache::has('display_reservation')){
        //     return Cache::get('display_reservation');
        // }else{
        //     $cachedata =  view('Userview.reserve')->render();
        //     Cache::put('display_reservation' , $cachedata);
        //     return $cachedata;
        // }
        $sameMonthLastYear = Carbon::now()->subYear()->format('Y-m-d'); //202009
        return $sameMonthLastYear;

    }
    public function createEvent(){      
        $calendarReservations = [];
        $reservationEvent = DB::table('reservationevents')->get();
        $scheduleDateEvent = ReservationEvent::selectRaw('DATE(scheduledate) as x, COUNT(*) as y')
        ->groupBy('x')
        ->where('scheduledate', '>', Carbon::now()->subWeek())
        ->get(); 

        $eventReservation = DB::table('reservationevents')->get();
        $fullybooked = "";

        $data = DB::table('userview')->get();
        foreach ($data as $key => $value) {
            $herocarousel = json_decode($value->herocarousel);
            $table = json_decode($value->reservation_tables);
            $event = json_decode($value->reservation_events);
            $restaurant = json_decode($value->restaurant);
            $gazebo = json_decode($value->gazebo);
            $package = json_decode($value->package);
            $description_about = $value->description_about;
            $event_hall = json_decode($value->event_hall);
            $pool = json_decode($value->pool);
            $picture_promo = json_decode($value->picture_promo);
            $client = json_decode($value->client);
        };
        foreach($scheduleDateEvent as $key => $value){
        
            if( $value['y'] >= 3){
                $color = '#FF0000';
                $calendarReservations[]=[
                    'title' => "Full",
                    'start' => $value['x'],
                    'color' => $color,
                    'editable' => false
                ];
            }
        }
        // if(Cache::has('display_create_event')){
        //     return Cache::get('display_create_event');
        // }else{
        //     $cachedata =  view('Userview.Reservation.event',  ['calendar'=> $calendarReservations])->render();
        //     Cache::put('display_create_evente' , $cachedata);
        //     return $cachedata;
        // }
        return view('Userview.Reservation.event',  [
            'calendar'=> $calendarReservations,
            'event' => $event,
            'restaurant' => $restaurant,
            'gazebo' => $gazebo,
            'event_hall' => $event_hall,
            'pool' => $pool,
            'package' => $package,    
            'scheduledateevent' => $scheduleDateEvent,
            'reservationevent' => $eventReservation
        ]); 
       
    }
    public function createTable(){
        $calendarReservations = [];

        $tables = DB::table('reservationtables')->get();
    

        $scheduleDateTable = ReservationTable::selectRaw('DATE(scheduledate) as x, COUNT(*) as y')
        ->groupBy('x')
        ->where('scheduledate', '>', Carbon::now()->subWeek())
        ->get();              
        $reservationtables = DB::table('reservationtables')->get();
        
        foreach($scheduleDateTable as $key => $value){

            foreach ($tables as $tablekey => $tablevalue) {
                # code...
           
            if( $tablevalue->scheduledate == $value['x']){
                $color = '#999999';
                $calendarReservations[]=[
                    'title' => $tablevalue->tablenumber.' '. $tablevalue->scheduletime,
                    'start' => $value['x'],
                    'color' => $color,
                    'editable' => false
                ];
            }
            }
            
            
        }
        // if(Cache::has('display_create_table')){
        //     return Cache::get('display_create_table');
        // }else{
        //     $cachedata =  view('Userview.Reservation.table',  ['calendar'=> $calendarReservations])->render();
        //     Cache::put('display_create_table' , $cachedata);
        //     return $cachedata;
        // }
        return view('Userview.Reservation.table' , [
            'calendar'=> $calendarReservations,
            'scheduledatetable' => $scheduleDateTable,
            'reservationtables' => $reservationtables

        ]);
    }
    public function storependingtable(Request $request)
    {
        
        $request->validate([
            "firstname" => ['required' , 'regex:/^[a-zA-Z0-9\s]+$/'],
            "lastname" =>['required' , 'regex:/^[a-zA-Z0-9\s]+$/'],
            "address" => 'required',
            "email" =>'required',
            "tablenumber" => 'required',
            "phonenumber" =>  'required',
            "scheduledate" => 'required',
            "scheduletime" => 'required', 
        ]);
        if($request->isadmin == "true"){
            ReservationTable::create([
                "customer_id" => 'T'. date("YmdHis"),
                "firstname" => strtoupper($request->firstname),
                "lastname" =>strtoupper($request->lastname),
                "address" =>strtoupper( $request->address),
                "email" => strtoupper( $request->email),
                "phonenumber" =>  $request->phonenumber,
                "tablenumber" =>  $request->tablenumber,
                "scheduledate" =>  $request->scheduledate,
                "scheduletime" =>  $request->scheduletime
                ]
            );
            AuditTrails::create([
                "customer_id" => 'T'. date("YmdHis"),
                "admin_name" => strtoupper($request->name),
                "action" =>strtoupper('create'),
                "customer_name" => strtoupper($request->firstname .' ' .  $request->lastname) ,
                "reservation_type" =>  "TABLE",
                "time_of_action" =>  date("Y-m-d H:i:s")
            ]);
            return redirect(route('dashboard'));
        }
        pendingreservations::create([
            "customer_id" => 'T'. date("YmdHis"),
            "firstname" => strtoupper($request->firstname),
            "lastname" =>strtoupper($request->lastname),
            "address" =>strtoupper( $request->address),
            "email" => strtoupper( $request->email),
            "phonenumber" =>  $request->phonenumber,
            "tablenumber" =>  $request->tablenumber,
            "scheduledate" =>  $request->scheduledate,
            "scheduletime" =>  $request->scheduletime
            ]
        );
        $mailContent = [
            'subject' => 'You have a New Reservation' ,
            'body' =>   'There is a new Table Reservation Form submitted to the website',
            'fullname' => $request->firstname .' ' .  $request->lastname ,
            'submittime' => $request->submittime,
            "scheduledate" =>  $request->scheduledate,
            "scheduletime" =>  $request->scheduletime
        ];
        Mail::to('myrnascuisinehead@gmail.com')->send(new pendingConfirmationTableMail($mailContent));
        return redirect('/welcome')->with('submitmsg', 'nice one');

        // if(Cache::has('display_confirm_welcome')){
        //     return Cache::get('display_confirm_welcome');
        // }else{
        //     $cachedata = redirect()->to(route('welcome'))->with( 'submitmsg','nice one')->render();
        //     Cache::put('display_confirm_welcome' , $cachedata);
        //     return $cachedata;
        // }
        
    }
     public function storependingnevent(Request $request)
     {

        $request->validate([
            "firstname" => ['required' , 'regex:/^[a-zA-Z0-9\s]+$/'],
            "lastname" =>['required' , 'regex:/^[a-zA-Z0-9\s]+$/'],
            "address" => 'required',
            "email" =>'required',
            "venue" => 'required',
            "package" => 'required',
            "phonenumber" =>  'required',
            "scheduledate" => 'required',
            "scheduletime" => 'required', 
        ]);
        $additionalguestRestaurant = 0;
        $additionalguestEventHall = 0;
        $additionalguestPoolArea = 0;
        $additionalguest = 0;   

        $data = Userview::find(4)->get();

        foreach ($data as $key => $value) {
            $userviewTable = json_decode($value->reservation_tables);
            $userviewdescription = $value->description_about;
            $userviewEvent = json_decode($value->reservation_events);
            $userviewCarousel =json_decode($value->herocarousel);
            $userviewAbout = json_decode($value->description_about);
            $userviewpackage= json_decode($value->package);
            $userviewRestaurant = json_decode($value->restaurant);
            $userviewgazebo = json_decode($value->gazebo);
            $userviewpool = json_decode($value->pool);
            $userviewevent_hall = json_decode($value->event_hall);
            $userviewpicture_promo = json_decode($value->picture_promo);
            $userviewclient = json_decode($value->client);
        }
        foreach ($userviewpackage as $key => $value) {
          if($key == $request->package){
                $packageprice = $value->price;            
          }
        }

        foreach ($data as $key => $value) {
            $selectedvenue = $request->venue;
            if($key == $request->event){
                foreach (json_decode($value->$selectedvenue) as $key => $value) {
                   if($key == "price"){
                    $venueprice = $value;
                   }
                }
                
            }

        }

        if($request->additionalguestRestaurant == "" || $request->additionalguestRestaurant == null ){
            $additionalguestRestaurant = 0;
        }else{
            $additionalguest = $request->additionalguestRestaurant;
        }
        if($request->additionalguestEventHall == "" || $request->additionalguestEventHall == null ){
            $additionalguestEventHall = 0;
        }else{
            $additionalguest = $request->additionalguestEventHall;
        }
        if($request->additionalguestPoolArea == "" || $request->additionalguestPoolArea == null ){
            $additionalguestPoolArea = 0;
        }else{
            $additionalguest = $request->additionalguestPoolArea;
        }
        $checkaddditionalguest = max($request->additionalguestRestaurant  , $request->additionalguestEventHall , $request->additionalguestPoolArea);
        if($checkaddditionalguest == 0){
            $additionalguest = 0;
        }else{
            $additionalguest = $checkaddditionalguest;
        }
        if($request->isadmin == "true"){
            ReservationEvent::create([
                "customer_id" => 'E'. date("YmdHis"),   
                "firstname" => strtoupper($request->firstname) ,
                "lastname" => strtoupper($request->lastname),
                "address" => strtoupper($request->address) ,
                "email" => strtoupper($request->email) ,
                "venueprice" => $venueprice,
                "phonenumber" =>  $request->phonenumber,
                "packageprice" => $packageprice,
                "additionalguest" => $additionalguest,
                "specialrequest" => strtoupper($request->specialrequest) ,
                "venue" =>strtoupper($request->venue),
                "venueaddon"=> json_encode($request->venueaddon),
                "package" =>$request->package,
                "scheduledate" =>  $request->scheduledate,
                "scheduletime" =>  $request->scheduletime
            ]);
            // if(Cache::has('display_redirect_dashboard')){
            //     return Cache::get('display_redirect_dashboard');
            // }else{
            //     $cachedata =  redirect(route('dashboard'))->render();
            //     Cache::put('display_redirect_dashboard' , $cachedata);
            //     return $cachedata;
            // }
            AuditTrails::create([
                "customer_id" => 'E'. date("YmdHis"),
                "admin_name" => strtoupper($request->name),
                "action" =>strtoupper('create'),
                "customer_name" => strtoupper($request->firstname .' ' .  $request->lastname) ,
                "reservation_type" =>  "EVENT",
                "time_of_action" =>  date("Y-m-d H:i:s")
            ]);

            return redirect(route('dashboard'));
            }
        $mailContent = [
            'subject' => 'You have a New Reservation' ,
            'body' =>   'There is a new Table Reservation Form submitted to the website',
            'fullname' => $request->firstname .' ' .  $request->lastname ,
            'submittime' => $request->submittime,
            "scheduledate" =>  $request->scheduledate,
            "scheduletime" =>  $request->scheduletime
        ];
        
        pendingeventreservations::create([
            "customer_id" => 'E'. date("YmdHis"),
            "firstname" => strtoupper($request->firstname) ,
            "lastname" => strtoupper($request->lastname),
            "address" => strtoupper($request->address) ,
            "email" => strtoupper($request->email) ,
            "venueprice" => $venueprice,
            "phonenumber" =>  $request->phonenumber,
            "packageprice" => $packageprice,
            "additionalguest" => $additionalguest,
            "specialrequest" => strtoupper($request->specialrequest) ,
            "venue" =>strtoupper($request->venue),
            "venueaddon"=> json_encode($request->venueaddon),
            "package" =>$request->package,
            "scheduledate" =>  $request->scheduledate,
            "scheduletime" =>  $request->scheduletime
        ]
        );
        Mail::to('myrnascuisinehead@gmail.com')->send(new pendingConfirmationEventMail($mailContent));   
        if(Cache::has('display_confirm_welcome')){
            // return Cache::get('display_confirm_welcome');
        }else{
            // $cachedata =  redirect('/welcome')->with('submitmsg', 'nice one')->render();
            // Cache::put('display_confirm_welcome' , $cachedata);
            // return $cachedata;
        }
        
        return redirect(route('welcome'));
     }
}
