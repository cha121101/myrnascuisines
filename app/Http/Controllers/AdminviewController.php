<?php

namespace App\Http\Controllers;

use App\Events\AdminCreated;
use App\Mail\acceptReservationEventMail;
use App\Mail\acceptReservationTableMail;
use App\Mail\declinetMail;
use App\Models\ArchivesEvents;
use App\Models\ArchivesTables;
use App\Models\AuditTrails;
use App\Models\Eventhall;
use App\Models\Gazebo;
use App\Models\HistoryEvents;
use App\Models\HistoryTables;
use App\Models\pendingeventreservations;
use App\Models\pendingreservations;
use App\Models\Pool;
use App\Models\ReservationEvent;
use App\Models\ReservationTable;
use App\Models\Restaurant;
use App\Models\User;
use App\Models\Userview;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Event as FacadesEvent;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use PhpParser\Node\Stmt\Foreach_;

use function Pest\Laravel\json;

class AdminviewController extends Controller
{
    public function __construct()
    {
        date_default_timezone_set('Asia/Manila');
    }

    public function showdashboard(){

        FacadesEvent::dispatch(new AdminCreated());
        $user = cache('user' , function(){
           return User::get();
        });
        echo Cache::get('user');
        $calendarReservations = [];

        $reservationEvent = DB::table('reservationevents')->get();
        $reservationTable = DB::table('reservationtables')->get();
        $scheduleDateEvent = ReservationEvent::selectRaw('DATE(scheduledate) as x, COUNT(*) as y')
        ->groupBy('x')
        ->where('scheduledate', '>', Carbon::now()->subWeek())
        ->get(); 
        $scheduleDateTable = ReservationTable::selectRaw('DATE(scheduledate) as x, COUNT(*) as y')
        ->groupBy('x')
        ->where('scheduledate', '>', Carbon::now()->subWeek())
        ->get();    
        
        //get the data of monthy reservation
        $monthlyeventdata = HistoryEvents::selectRaw('DATE(scheduledate) as month, COUNT(*) as count')
        ->whereYear('scheduledate' , date('Y'))
        ->groupBy('month')
        ->orderBy('month')
        ->get();

        $labels = [];
        $data = [];
        $colors = [];
        
      
        

        for($i = 1; $i <= 12; $i++ ){
            $month = date('F' , mktime(0,0,0,$i,1));
            $count = 0;

            foreach($monthlyeventdata as $m){
                if(Carbon::parse($m->month)->format('m') == $i){
                    $count += $m->count;
                    
                }
            }
            array_push($labels, $month);
            array_push($data, $count);
        }
        
        $datasets = $data;
        
        foreach($scheduleDateEvent as $key => $value){
        
            if( $value['y'] >= 3){
                $color = '#FF0000';
                $calendarReservations[]=[
                    'title' => "Fully booked",
                    'start' => $value['x'],
                    'color' => $color
                ];
            }else{
            }
        }
        // foreach($scheduleDateTable as $key => $value){
        //     if( $value['y'] >= 3){
        //         $color = '#FFA500';
        //         $calendarReservations[]=[
        //             'title' => "Fully booked",
        //             'start' => $value['x'],
        //             'color' => $color
        //         ];
        //     }else{
        //     }
            
        // }
        $todayScheduleEvent = [];
        foreach($reservationEvent as $value){
            if(date("Y-m-d") == $value->scheduledate){
                $fullname = $value->firstname . ' ' . $value->lastname;
                $todayScheduleEvent[]=[
                    'customerName' => $fullname
                ];
            }
        }
        $todayScheduleTable = [];
        foreach($reservationTable as $value){
            if(date("Y-m-d") == $value->scheduledate){
                $fullname = $value->firstname . ' ' . $value->lastname;
                $todayScheduleTable[]=[
                    'customerName' => $fullname
                ];
            }
        };

        foreach($calendarReservations as $k => $v){
            foreach($v as $key => $value){
                if($key == 'start'){
                }
            }
            
        }


        // if(Cache::has('display_dashboard')){
        //     return Cache::get('display_dashboard');
        // }else{
        //     $cachedata =  view('Adminview.dashboard', [
        //         'pendingreservation'=> DB::table('pendingreservations')->get(),
        //         'pendingeventreservation'=> DB::table('pendingeventreservations')->get(),
        //         'calendar'=> $calendarReservations,
        //         'todayscheduleevent' => $todayScheduleEvent,
        //         'todayscheduletable' => $todayScheduleTable,
        //         'datasets' => $datasets,
        //         'labels' => $labels,
        //         ]
        //    )->render();
        //     Cache::put('display_dashboard' , $cachedata);
        //     return $cachedata;
        // }
        return view('Adminview.dashboard', [
            'pendingreservation'=> DB::table('pendingreservations')->get(),
            'pendingeventreservation'=> DB::table('pendingeventreservations')->get(),
            'calendar'=> $calendarReservations,
            'todayscheduleevent' => $todayScheduleEvent,
            'todayscheduletable' => $todayScheduleTable,
            'datasets' => $datasets,
            'labels' => $labels,
            ]
        );
    }
    public function showpendingevent($id){
       $scheduleDateEvent = ReservationEvent::selectRaw('DATE(scheduledate) as x, COUNT(*) as y')
       ->groupBy('x')
       ->get(); 
       $fullybooked = "";

       $eventReservation = DB::table('reservationevents')->get();

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
       $packagesprices = [];
       foreach ($userviewpackage as $key => $value) {
        $packagesprices[$key] = $value->price;

       }
       $eventsprices = [];
       $eventsprices['restaurant'] = $userviewRestaurant->price;
       $eventsprices['gazebo'] = $userviewgazebo->price;
       $eventsprices['pool'] = $userviewpool->price;
       $eventsprices['event_hall'] = $userviewevent_hall->price;
      

       foreach($scheduleDateEvent as $key => $value){
        if( $value['y'] >= 3){
            $fullybooked = $value['y'];
            break;
        }
        }
       
       foreach (DB::table('pendingeventreservations')->get() as $key => $value) {
           $addons = json_decode($value->venueaddon);
       }
        return view('Adminview.Pending_reservation.event', [
            'data' => DB::table('pendingeventreservations')->where('customer_id' , $id)->get(),
            'addons' => $addons,
            'fullybooked' => $fullybooked,
            'packagesprices' => $packagesprices,
            'eventprice' => $eventsprices,
            'scheduledateevent' => $scheduleDateEvent,
            'reservationevent' => $eventReservation
        ]);
        if(Cache::has('display_redirect_dashboard')){
            return Cache::get('display_redirect_dashboard');
        }else{
            $cachedata =  redirect(route('dashboard'))->render();
            Cache::put('display_redirect_dashboard' , $cachedata);
            return $cachedata;
        }
        return redirect(route('dashboard'));
        
    }
    
    public function showpendingtable($id){
        $data = DB::table('pendingreservations')->where('customer_id' , $id)->get();
        $scheduleDateTable= ReservationTable::selectRaw('DATE(scheduledate) as x, COUNT(*) as y')
        ->groupBy('x')
        ->get(); 
        
        $reservationtables = DB::table('reservationtables')->get();

        // if(Cache::has('display_pending_table')){
        //     return Cache::get('display_pending_table');
        // }else{
        //     $cachedata =  view('Adminview.Pending_reservation.table', [
        //         'data' => $data
        //     ])->render();
        //     Cache::put('display_pending_table' , $cachedata);
        //     return $cachedata;
        // }
        return view('Adminview.Pending_reservation.table', [
            'data' => $data,
            'scheduledatetable' => $scheduleDateTable,
            'reservationtables' => $reservationtables
        ]);
    }
    public function actionreservationtable(Request $request){
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
        switch ($request->input('action')) {
            case 'accept':
                ReservationTable::create([
                    "id"=> $request->id,
                    "customer_id" => $request->customer_id,
                    "firstname" => strtoupper($request->firstname),
                    "lastname" =>strtoupper($request->lastname),
                    "address" =>strtoupper( $request->address),
                    "email" => strtoupper( $request->email),
                    "phonenumber" =>  strtoupper($request->phonenumber),
                    "tablenumber" =>  $request->tablenumber,
                    "scheduledate" =>  $request->scheduledate,
                    "scheduletime" =>  $request->scheduletime
                ]);    
                pendingreservations::destroy($request->id);

                $mailContent = [
                    'subject' => 'Horray! Your reservation is confirm' ,
                    'body' =>   'New Pending reservation from \n ',
                    'fullname' => $request->firstname .' ' .  $request->lastname ,
                    "address" => $request->address,
                    "email" =>  $request->email,
                    "phonenumber" =>  $request->phonenumber,
                    "tablenumber" =>  $request->tablenumber,
                    "scheduledate" =>  $request->scheduledate,
                    "scheduletime" =>  $request->scheduletime
                ];
                AuditTrails::create([
                    "customer_id" => $request->customer_id,
                    "admin_name" => strtoupper($request->name),
                    "action" =>strtoupper('accept'),
                    "customer_name" => strtoupper($request->firstname .' ' .  $request->lastname) ,
                    "reservation_type" =>  "TABLE",
                    "time_of_action" =>  date("Y-m-d H:i:s")
                ]);

                Mail::to($request->email)->send(new acceptReservationTableMail($mailContent));
                break;
            case 'decline':
                $mailContent = [
                    'subject' => 'Your Reservation has been Declined' ,
                    'body' =>   `We apologize for any inconvenience this may cause. Unfortunately, your desired reservation is already taken. We are more than happy to assist you in booking another event on another day and venue, just contact us or you can visit our website www.myrnascuisine.online again to check the availability of our events place. Once again, apologies for having to cancel your reservation. We look forward to dining with you soon.`,
                    'fullname' => $request->firstname .' ' .  $request->lastname ,
                ];
                Mail::to($request->email)->send(new declinetMail($mailContent));
                pendingreservations::destroy($request->id);
                AuditTrails::create([
                    "customer_id" => $request->customer_id,
                    "admin_name" => strtoupper($request->name),
                    "action" =>strtoupper('decline'),
                    "customer_name" => strtoupper($request->firstname .' ' .  $request->lastname),
                    "reservation_type" =>  "TABLE",
                    "time_of_action" =>  date("Y-m-d H:i:s")
                ]);
                break;
        };
        return redirect(route('dashboard'));
       
    }
    public function actionreservationevent(Request $request){

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
    
        // $packageprice = 0;
        // switch ($request->package) {
        //     case 'Package A':
        //         $packageprice = 380;
        //         break;
        //     case 'Package B':
        //         $packageprice = 380;
        //         break;
        //     case 'Package C':
        //         $packageprice = 380;
        //         break;
        //     case 'Package D':
        //         $packageprice = 400;
        //         break;
        //     case 'Package E':
        //         $packageprice = 450;
        //     break;
        // };
        // $venueprice = 0;
        // switch ($request->venue) {
        //     case 'RESTAURANT':
        //         $venueprice = 10000;
        //         break;
        //     case 'EVENT HALL':
        //         $venueprice = 10000;
        //         break;
        //     case 'POOL AREA':
        //         $venueprice = 10000;
        //         break;
        // };
        $additionalguest  = $request->additionalguest;


        if($request->additionalguest == "" ||$request->additionalguest == null ){
            $additionalguest = 0;
        };

        echo $request->venueprice;
        switch ($request->input('action')) {
            case 'accept':
                ReservationEvent::create([
                    "id"=> $request->id,
                    "customer_id" => $request->customer_id,
                    "firstname" => strtoupper($request->firstname) ,
                    "lastname" => strtoupper($request->lastname),
                    "address" => strtoupper($request->address) ,
                    "email" => strtoupper($request->email) ,
                    "venueprice" => $request->venueprice,
                    "phonenumber" =>  $request->phonenumber,
                    "packageprice" => $request->packageprice,
                    "additionalguest" => $additionalguest,
                    "specialrequest" => strtoupper($request->specialrequest) ,
                    "venue" =>strtoupper($request->venue),
                    "venueaddon"=> json_encode($request->venueaddon),
                    "package" =>$request->package,
                    "scheduledate" =>  $request->scheduledate,
                    "scheduletime" =>  $request->scheduletime
                ]);
                $mailContent = [
                    'subject' => 'Horray! Your reservation is confirm' ,
                    'body' =>`We are pleased to inform you that your reservation is confirmed! Get ready to celebrate your upcoming event! You can find your booking information below.`,
                    'fullname' => $request->firstname .' ' .  $request->lastname ,
                    "address" => $request->address ,
                    "email" => $request->email ,
                    "venueprice" => $request->venueprice,
                    "phonenumber" =>  $request->phonenumber,
                    "packageprice" => $request->packageprice,
                    "additionalguest" => $additionalguest,
                    "specialrequest" => $request->specialrequest ,
                    "venue" =>$request->venue,
                    "package" =>$request->package,
                    "scheduledate" =>  $request->scheduledate,
                    "scheduletime" =>  $request->scheduletime
                ];
                Mail::to($request->email)->send(new acceptReservationEventMail($mailContent));
                pendingeventreservations::destroy($request->id);

                AuditTrails::create([
                    "customer_id" => $request->customer_id,
                    "admin_name" => strtoupper($request->name),
                    "action" =>strtoupper('accept'),
                    "customer_name" => strtoupper($request->firstname .' ' .  $request->lastname),
                    "reservation_type" =>  "EVENT",
                    "time_of_action" =>  date("Y-m-d H:i:s")
                ]);
                break;
            case 'decline':

                $mailContent = [
                    'subject' => 'Your Reservation has been Declined' ,
                    'body' =>   `We apologize for any inconvenience this may cause. Unfortunately, your desired reservation is already taken. We are more than happy to assist you in booking another event on another day and venue, just contact us or you can visit our website www.myrnascuisine.online again to check the availability of our events place. Once again, apologies for having to cancel your reservation. We look forward to dining with you soon.`,
                    'fullname' => $request->firstname .' ' .  $request->lastname ,
                ];
                Mail::to($request->email)->send(new declinetMail($mailContent));
                pendingeventreservations::destroy($request->id);
                AuditTrails::create([
                    "customer_id" => $request->customer_id,
                    "admin_name" => strtoupper($request->name),
                    "action" =>strtoupper('decline'),
                    "customer_name" => strtoupper($request->firstname .' ' .  $request->lastname) ,
                    "reservation_type" =>  "EVENT",
                    "time_of_action" =>  date("Y-m-d H:i:s")
                ]);
                break;
        };
        return redirect(route('dashboard'));
    }

    public function showmanagementevent(){                        
        // $reservationevent =  DB::table('reservationevents')->orderBy('scheduledate' , 'DESC')->get();

        // if(Cache::has('display_management_event')){
        //     return Cache::get('display_management_event');
        // }else{
        //     $cachedata =  view('Adminview.Management.show.event', [
        //         'reservationevent'=> $reservationevent
        //     ])->render();
        //     Cache::put('display_management_event' , $cachedata);
        //     return $cachedata;
        // }



       
        return view('Adminview.Management.show.event', [
            'reservationevent'=> DB::table('reservationevents')->orderBy('scheduledate' , 'DESC')->get(),
 
        ]);
    }

    public function showmanagementtable(){
        $reservationtable = DB::table('reservationtables')->orderBy('id' , 'DESC')->get();


    
        return view('Adminview.Management.show.table', [
                'reservationtable'=> $reservationtable
        ]);

                // if(Cache::has('display_management_table')){
        //     return Cache::get('display_management_table');
        // }else{
        //     $cachedata =  view('Adminview.Management.show.table', [
        //         'reservationtable'=> $reservationtable
        //     ])->render();
        //     Cache::put('display_management_table' , $cachedata);
        //     return $cachedata;
        // }
        // return view('Adminview.Management.show.table', [
        //     'reservationtable'=> DB::table('reservationtables')->orderBy('id' , 'DESC')->get(),
        // ]);
    }

    public function editmanagementevent($id){
        $scheduleDateEvent = ReservationEvent::selectRaw('DATE(scheduledate) as x, COUNT(*) as y')
        ->groupBy('x')
        ->get(); 
        $fullybooked = "";
 
        $eventReservation = DB::table('reservationevents')->get();
        $addons = "";
       
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
        $packagesprices = [];
        foreach ($userviewpackage as $key => $value) {
         $packagesprices[$key] = $value->price;
 
        }
        $eventsprices = [];
        $eventsprices['restaurant'] = $userviewRestaurant->price;
        $eventsprices['gazebo'] = $userviewgazebo->price;
        $eventsprices['pool'] = $userviewpool->price;
        $eventsprices['event_hall'] = $userviewevent_hall->price;
        
        foreach (DB::table('reservationevents')->where('customer_id' , $id)->get() as $key => $value) {
            $addons = json_decode($value->venueaddon);
        }
        return view('Adminview.Management.edit.event', [
            'data' => DB::table('reservationevents')->where('customer_id' , $id)->get(),
            'addons' => $addons,
            'packagesprices' => $packagesprices,
            'eventprice' => $eventsprices,
            'scheduledateevent' => $scheduleDateEvent,
            'reservationevent' => $eventReservation
        ]);
        
    }
    public function editmanagementtable($id){
        $data = DB::table('pendingreservations')->where('customer_id' , $id)->get();
        $scheduleDateTable= ReservationTable::selectRaw('DATE(scheduledate) as x, COUNT(*) as y')
        ->groupBy('x')
        ->get(); 
        
        $reservationtables = DB::table('reservationtables')->get();


        return view('Adminview.Management.edit.table', [
            'data' => DB::table('reservationtables')->where('customer_id' , $id)->get(),
            'scheduledatetable' => $scheduleDateTable,
            'reservationtables' => $reservationtables
        ]);
    }
    public function actionmanagementevent(Request $request){


        $additionalguest  = $request->additionalguest;

        if($request->additionalguest == "" ||$request->additionalguest == null ){
            $additionalguest = 0;
        }

        switch ($request->input('action')) {
            case 'confirm':
                HistoryEvents::create([
                    "id" => $request->id,
                    "customer_id" => $request->customer_id,
                    "firstname" => strtoupper($request->firstname) ,
                    "lastname" => strtoupper($request->lastname),
                    "address" => strtoupper($request->address) ,
                    "email" => strtoupper($request->email) ,
                    "venueprice" => $request->venueprice,
                    "phonenumber" =>  $request->phonenumber,
                    "packageprice" => $request->packageprice,
                    "additionalguest" => $additionalguest,
                    "specialrequest" => strtoupper($request->specialrequest) ,
                    "venue" =>strtoupper($request->venue),
                    "venueaddon"=> json_encode($request->venueaddon),
                    "package" =>$request->package,
                    "scheduledate" =>  $request->scheduledate,
                    "scheduletime" =>  $request->scheduletime
                ]);
                ReservationEvent::destroy($request->id);

                AuditTrails::create([
                    "customer_id" => $request->customer_id,
                    "admin_name" => strtoupper($request->name),
                    "action" =>strtoupper('complete'),
                    "customer_name" => strtoupper($request->firstname .' ' .  $request->lastname) ,
                    "reservation_type" =>   "EVENT",
                    "time_of_action" =>  date("Y-m-d H:i:s")
                ]);

                break;
                case 'edit':
                    ReservationEvent::where('id' , $request->id)
                    ->update([
                        "id" => $request->id,
                        "customer_id" => $request->customer_id,
                        "firstname" => strtoupper($request->firstname) ,
                        "lastname" => strtoupper($request->lastname),
                        "address" => strtoupper($request->address) ,
                        "email" => strtoupper($request->email) ,
                        "venueprice" => $request->venueprice,
                        "phonenumber" =>  $request->phonenumber,
                        "packageprice" => $request->packageprice,
                        "additionalguest" => $additionalguest,
                        "specialrequest" => strtoupper($request->specialrequest) ,
                        "venue" =>strtoupper($request->venue),
                        "venueaddon"=> json_encode($request->venueaddon),
                        "package" =>$request->package,
                        "scheduledate" =>  $request->scheduledate,
                        "scheduletime" =>  $request->scheduletime
                    ]);

                    AuditTrails::create([
                        "customer_id" => $request->customer_id,
                        "admin_name" => strtoupper($request->name),
                        "action" =>strtoupper('edit'),
                        "customer_name" => strtoupper($request->firstname .' ' .  $request->lastname) ,
                        "reservation_type" =>  "EVENT",
                        "time_of_action" =>  date("Y-m-d H:i:s")
                    ]);
                break;
        };
        return redirect('/management/event');
    }

    public function actionmanagementtable(Request $request){
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
        switch ($request->input('action')) {
            case 'confirm':
                HistoryTables::create([
                    "id" => $request->id,
                    "customer_id" => $request->customer_id,
                    "firstname" => strtoupper($request->firstname),
                    "lastname" =>strtoupper($request->lastname),
                    "address" =>strtoupper( $request->address),
                    "email" => strtoupper( $request->email),
                    "phonenumber" =>  strtoupper($request->phonenumber),
                    "tablenumber" =>  $request->tablenumber,
                    "scheduledate" =>  $request->scheduledate,
                    "scheduletime" =>  $request->scheduletime
                ]);     
                AuditTrails::create([
                    "customer_id" => $request->customer_id,
                    "admin_name" => strtoupper($request->name),
                    "action" =>strtoupper('complete'),
                    "customer_name" => strtoupper($request->firstname .' ' .  $request->lastname) ,
                    "reservation_type" =>  "TABLE",
                    "time_of_action" =>  date("Y-m-d H:i:s")
                ]);
                ReservationTable::destroy($request->id);
                break;
            case 'edit':
                ReservationTable::where('id' , $request->id)
                ->update([
                    "id" => $request->id,
                    "customer_id" => $request->customer_id,
                    "firstname" => strtoupper($request->firstname),
                    "lastname" =>strtoupper($request->lastname),
                    "address" =>strtoupper( $request->address),
                    "email" => strtoupper( $request->email),
                    "phonenumber" =>  strtoupper($request->phonenumber),
                    "tablenumber" =>  $request->tablenumber,
                    "scheduledate" =>  $request->scheduledate,
                    "scheduletime" =>  $request->scheduletime
                ]);
                AuditTrails::create([
                    "customer_id" => $request->customer_id,
                    "admin_name" => strtoupper($request->name),
                    "action" =>strtoupper('edit'),
                    "customer_name" => strtoupper($request->firstname .' ' .  $request->lastname) ,
                    "reservation_type" =>  "TABLE",
                    "time_of_action" =>  date("Y-m-d H:i:s")
                ]);
                break;
        };
        return redirect('/management/table');
    }

    public function showhistoryevent(){
        return view('Adminview.History.event', [
            'historyevents'=> DB::table('historyevents')->orderBy('scheduledate' , 'DESC')->get(),
        ]);
    }
    public function showhistorytable(){
        return view('Adminview.History.table', [
            'historytables'=> DB::table('historytables')->orderBy('scheduledate' , 'DESC')->get(),
        ]);
    }
    public function showsettings(){
        
        return view('Adminview.Settings.account_management' ,[
            'employeedata' => DB::table('users')->where('position' , 'employee')->get()
        ]);
    }
//Search-------------------------------
//search and filter for Reservation Event
public function searchreservationevent(Request $request) {
    $searchTerm = $request->search;
    $filterMonths = $request->months; // Note the change to 'months'
    $filterDays = $request->days;
    $filterTimes = $request->times;
    $reservationEventQuery = ReservationEvent::query();

    if ($searchTerm) {
        $reservationEventQuery->where(function($query) use ($searchTerm) {
            $query->where('firstname', 'like', '%' . $searchTerm . '%')
                ->orWhere('lastname', 'like', '%' . $searchTerm . '%')
                ->orWhere('phonenumber', 'like', '%' . $searchTerm . '%')
                ->orWhere('address', 'like', '%' . $searchTerm . '%')
                ->orWhere('email', 'like', '%' . $searchTerm . '%')
                ->orWhere('package', 'like', '%' . $searchTerm . '%')
                ->orWhere('venue', 'like', '%' . $searchTerm . '%')
                ->orWhere('scheduledate', 'like', '%' . $searchTerm . '%')
                ->orWhere('scheduletime', 'like', '%' . $searchTerm . '%');
        });
    }
    // Apply filter for the selected months
    if ($filterMonths) {
        $reservationEventQuery->whereIn(DB::raw('MONTH(scheduledate)'), $filterMonths);
    }    
    if ($filterDays) {
        $reservationEventQuery->whereIn(DB::raw('DAY(scheduledate)'), $filterDays);
    }

    if ($filterTimes) {
        foreach ($filterTimes as $time) {
            list($start, $end) = explode(' - ', $time);
            $reservationEventQuery->orWhereBetween('scheduletime', [$start, $end]);
        }
    }
    $selectedEvent = $request->input('venue', []);
    if (!empty($selectedEvent)) {
        $reservationEventQuery->whereIn('venue', $selectedEvent);
    }
    $reservationevent = $reservationEventQuery->get();
       return view('Adminview.Management.show.event', ['reservationevent' => $reservationevent]);
    }


//search and filter for Reservation table
public function searchreservationtable(Request $request){      
    $searchTerm = $request->search;
    $filterMonths = $request->months; // Note the change to 'months'
    $filterDays = $request->days;
    $filterTimes = $request->times;
    $reservationTableQuery = ReservationTable::query();

    if ($searchTerm) {
        $reservationTableQuery->where(function($query) use ($searchTerm) {
            $query->where('firstname', 'like', '%' . $searchTerm . '%')
                ->orWhere('lastname', 'like', '%' . $searchTerm . '%')
                ->orWhere('phonenumber', 'like', '%' . $searchTerm . '%')
                ->orWhere('address', 'like', '%' . $searchTerm . '%')
                ->orWhere('tablenumber', 'like', '%' . $searchTerm . '%')
                ->orWhere('phonenumber', 'like', '%' . $searchTerm . '%');
        });
    }    
    // Apply filter for the selected months
    if ($filterMonths) {
        $reservationTableQuery->whereIn(DB::raw('MONTH(scheduledate)'), $filterMonths);
    }    
    if ($filterDays) {
        $reservationTableQuery->whereIn(DB::raw('DAY(scheduledate)'), $filterDays);
    }
    if ($filterTimes) {
        foreach ($filterTimes as $time) {
            list($start, $end) = explode(' - ', $time);
            $reservationTableQuery->orWhereBetween('scheduletime', [$start, $end]);
        }
    }
    // Check if Venue Type is selected
    $selectedTables = $request->input('tables', []);
    if (!empty($selectedTables)) {
       $reservationTableQuery->whereIn('tablenumber', $selectedTables);
    }
       $reservationtable = $reservationTableQuery->get();
    return view('Adminview.Management.show.table',['reservationtable' => $reservationtable]);}

//search and filter for History Event
public function searchhistoryevent(Request $request){
    $searchTerm = $request->search;
    $filterMonths = $request->months; // Note the change to 'months'
    $filterDays = $request->days;
    $filterTimes = $request->times;
    $filterYears = $request->years;
    $historyeventsQuery = HistoryEvents::query();
    if ($searchTerm) {
        $historyeventsQuery->where(function($query) use ($searchTerm) {
            $query->where('firstname', 'like', '%' . $searchTerm . '%')
                ->orWhere('lastname', 'like', '%' . $searchTerm . '%')
                ->orWhere('phonenumber', 'like', '%' . $searchTerm . '%')
                ->orWhere('address', 'like', '%' . $searchTerm . '%')
                ->orWhere('email', 'like', '%' . $searchTerm . '%')
                ->orWhere('package', 'like', '%' . $searchTerm . '%')
                ->orWhere('venue', 'like', '%' . $searchTerm . '%')
                ->orWhere('scheduledate', 'like', '%' . $searchTerm . '%')
                ->orWhere('scheduletime', 'like', '%' . $searchTerm . '%');
        });
    }
    // Apply filter for the selected months
    if ($filterMonths) {
        $historyeventsQuery->whereIn(DB::raw('MONTH(scheduledate)'), $filterMonths);
    }
    if ($filterDays) {
        $historyeventsQuery->whereIn(DB::raw('DAY(scheduledate)'), $filterDays);
    }
    // Apply filter for the selected years
//     if ($filterYears) {
//         $historyeventsQuery->whereIn(DB::raw('YEAR(scheduledate)'), $filterYears);
// }
    if ($filterTimes) {
        foreach ($filterTimes as $time) {
            list($start, $end) = explode(' - ', $time);
            $historyeventsQuery->orWhereBetween('scheduletime', [$start, $end]);
        }
    }
       $selectedEvent = $request->input('venue', []);

    if (!empty($selectedEvent)) {
       $historyeventsQuery->whereIn('venue', $selectedEvent);
    }

    $historyevents = $historyeventsQuery->get();
    return view('Adminview.History.event',['historyevents' => $historyevents]);
}

//search and filter for History Table
public function searchhistorytable(Request $request){
    $searchTerm = $request->search;
    $filterMonths = $request->months; // Note the change to 'months'
    $filterDays = $request->days;
    $filterTimes = $request->times;
    $historytablesQuery = HistoryTables::query();
    if ($searchTerm) {
        $historytablesQuery->where(function($query) use ($searchTerm) {
            $query->where('firstname', 'like', '%' . $searchTerm . '%')
                ->orWhere('lastname', 'like', '%' . $searchTerm . '%')
                ->orWhere('phonenumber', 'like', '%' . $searchTerm . '%')
                ->orWhere('address', 'like', '%' . $searchTerm . '%')
                ->orWhere('tablenumber', 'like', '%' . $searchTerm . '%')
                ->orWhere('phonenumber', 'like', '%' . $searchTerm . '%');
        });
    }
    // Apply filter for the selected months
    if ($filterMonths) {
        $historytablesQuery->whereIn(DB::raw('MONTH(scheduledate)'), $filterMonths);
    }    
    if ($filterDays) {
        $historytablesQuery->whereIn(DB::raw('DAY(scheduledate)'), $filterDays);
    }
    if ($filterTimes) {
        foreach ($filterTimes as $time) {
            list($start, $end) = explode(' - ', $time);
            $historytablesQuery->orWhereBetween('scheduletime', [$start, $end]);
        }
    }
    // Check if Venue Type is selected
    $selectedTables = $request->input('tables', []);
    if (!empty($selectedTables)) {
    $historytablesQuery->whereIn('tablenumber', $selectedTables);
    }
    $historytables = $historytablesQuery->get();
    return view('Adminview.History.table',['historytables' => $historytables]);
    }

//search and filter for Archive Event
public function searcharchiveevent(Request $request)
{
        $searchTerm = $request->search;
        $filterMonths = $request->months; // Note the change to 'months'
        $filterDays = $request->days;
        $filterTimes = $request->times;
        $filterYears = $request->years;
        $archiveseventsQuery = ArchivesEvents::query();
        if ($searchTerm) {
            $archiveseventsQuery->where(function($query) use ($searchTerm) {
                $query->where('firstname', 'like', '%' . $searchTerm . '%')
                    ->orWhere('lastname', 'like', '%' . $searchTerm . '%')
                    ->orWhere('phonenumber', 'like', '%' . $searchTerm . '%')
                    ->orWhere('address', 'like', '%' . $searchTerm . '%')
                    ->orWhere('email', 'like', '%' . $searchTerm . '%')
                    ->orWhere('package', 'like', '%' . $searchTerm . '%')
                    ->orWhere('venue', 'like', '%' . $searchTerm . '%')
                    ->orWhere('scheduledate', 'like', '%' . $searchTerm . '%')
                    ->orWhere('scheduletime', 'like', '%' . $searchTerm . '%');
            });
        }
        // Apply filter for the selected months
        if ($filterMonths) {
            $archiveseventsQuery->whereIn(DB::raw('MONTH(scheduledate)'), $filterMonths);
        }       
        if ($filterDays) {
            $archiveseventsQuery->whereIn(DB::raw('DAY(scheduledate)'), $filterDays);
        }
        if ($filterYears) {
            $archiveseventsQuery->whereIn(DB::raw('YEAR(scheduledate)'), $filterYears);
        }
        if ($filterTimes) {
            foreach ($filterTimes as $time) {
                list($start, $end) = explode(' - ', $time);
                $archiveseventsQuery->orWhereBetween('scheduletime', [$start, $end]);
            } }
             $selectedEvent = $request->input('venue', []);  
        if (!empty($selectedEvent)) {
             $archiveseventsQuery->whereIn('venue', $selectedEvent);
        }
        $archivesevents = $archiveseventsQuery->get();
        return view("Adminview.Settings.Archives.event", ['archivesevents' => $archivesevents]);
}

//search and filter for Archive Table
public function searcharchivetable(Request $request)
{
        $searchTerm = $request->search;
        $filterMonths = $request->months; // Note the change to 'months'
        $filterDays = $request->days;
        $filterTimes = $request->times;
        $filterYears = $request->years;
        $archivestablesQuery = ArchivesTables::query();
        if ($searchTerm) {
            $archivestablesQuery->where(function($query) use ($searchTerm) {
                $query->where('firstname', 'like', '%' . $searchTerm . '%')
                ->orWhere('lastname', 'like', '%' . $searchTerm . '%')
                ->orWhere('phonenumber', 'like', '%' . $searchTerm . '%')
                ->orWhere('address', 'like', '%' . $searchTerm . '%')
                ->orWhere('tablenumber', 'like', '%' . $searchTerm . '%')
                ->orWhere('phonenumber', 'like', '%' . $searchTerm . '%');
            });
        }      
        // Apply filter for the selected months
        if ($filterMonths) {
            $archivestablesQuery->whereIn(DB::raw('MONTH(scheduledate)'), $filterMonths);
        }      
        if ($filterDays) {
            $archivestablesQuery->whereIn(DB::raw('DAY(scheduledate)'), $filterDays);
        }
        if ($filterYears) {
            $archivestablesQuery->whereIn(DB::raw('YEAR(scheduledate)'), $filterYears);
        }  
        if ($filterTimes) {
            foreach ($filterTimes as $time) {
                list($start, $end) = explode(' - ', $time);
                $archivestablesQuery->orWhereBetween('scheduletime', [$start, $end]);
                                            }            
        }
        $selectedTables = $request->input('tables', []);
        if (!empty($selectedTables)) {
            $archivestablesQuery->whereIn('tablenumber', $selectedTables);
        }
        $archivestables = $archivestablesQuery->get();
    return view("Adminview.Settings.Archives.table", ['archivestables' => $archivestables]);
}

//search and filter for Audit Trail
    public function searchaudit(Request $request) {  
        $searchTerm = $request->search;
        $auditQuery = AuditTrails::query();
        if ($searchTerm) {
            $auditQuery->where(function($query) use ($searchTerm) {
                $query->where('admin_name', 'like', '%' . $searchTerm . '%')
                ->orWhere('action', 'like', '%' . $searchTerm . '%')
                ->orWhere('customer_name', 'like', '%' . $searchTerm . '%')
                ->orWhere('reservation_type', 'like', '%' . $searchTerm . '%')
                ->orWhere('time_of_action', 'like', '%' . $searchTerm . '%')
                ->orWhere('reservation_type', 'like', '%' . $searchTerm . '%');
            });
        }
        $selectedaudit = $request->input('type', []);
        if (!empty($selectedaudit)) {
            $auditQuery->whereIn('reservation_type', $selectedaudit);
        }
        $selectedaudit = $request->input('actions', []);
        if (!empty($selectedaudit)) {
            $auditQuery->whereIn('action', $selectedaudit);
        }
        $audit = $auditQuery->get();
        return view("Adminview.Settings.audit", ['auditdata' => $audit]);
}

    public function actionemployee(Request $request){
        $request->validate(
            [
            'password' => 'required'
            ]
        );

        switch ($request->option) {
            case 'edit':
                $user =  User::find($request->id);
                $user->password = Hash::make($request->password);
                $user->save();
                break;
            case 'delete':
                User::where('id' , $request->id)->delete();
                break;
            default:
                break;
        }
        return redirect('/dashboard');
    }
    public function changeadminpass(Request $request){
        $user =  User::find($request->id);
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect('/dashboard');
    }

    //function for audit trail
    public function showaudit(){
        return view('Adminview.Settings.audit', [
            'auditdata'=> DB::table('audittrails')->orderBy('time_of_action' , 'DESC')->get(),
        ]);
    } 

    //show dynamic web
    public function showdynamicweb(){
        $data = DB::table('userview')->get();
        foreach ($data as $key => $value) {
            $herocarousel = $value->herocarousel;
            $tables = json_decode($value->reservation_tables);
            $event = json_decode($value->reservation_events);
            $restaurant = json_decode($value->restaurant);
            $gazebo = json_decode($value->gazebo);
            $package = json_decode($value->package);
            $description_about = $value->description_about;
            $event_hall = json_decode($value->event_hall);
            $pool = json_decode($value->pool);
            $picture_promo = $value->picture_promo;
            $client = json_decode($value->client);
        }
        return view('Adminview.Settings.dynamic_webpage', [
            'data' => DB::table('userview')->get(),
            'herocarousel' => $herocarousel,
            'tables' => $tables,
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
    public function storedynamicweb(Request $request){
        
        $userview = Userview::find(4)->get();

        $userviewval = Userview::find(4);
        
        // echo var_dump($userview);

        foreach ($userview as $key => $value) {
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


        $data = DB::table('userview')->get();
  

        $carouselpicture =[];
        if($request->carousel_hero != ""){
            foreach ($request->carousel_hero as $val) {
                $imgname = time().rand(1,99).'.'.$val->extension();
                $val->move(public_path('img/editable') , $imgname);
                $carouselpicture[] = $imgname;
                
                
            }
            $userviewCarousel = $carouselpicture;
        }
        
        
        
        $tables = [];
        foreach($request->tables as $tableskey => $tablesvalue){
            if($tableskey == 'description'){
               $tables['description'] = $tablesvalue;
               $userviewTable->description = $tablesvalue;
            }
            if($tableskey == 'picture'){
                    $imgname = time().rand(1,99).'.'.$tablesvalue->extension();
                    $tablesvalue->move(public_path('img/editable') , $imgname);
                    $tables['picture'] = $imgname;
                    $userviewTable->picture = $imgname;  
            }
        
        }
        $event = [];
        foreach($request->event as $eventkey => $eventvalue){
            if($eventkey == 'description'){
                $event['description'] = $eventvalue;
                $userviewEvent->description = $eventvalue;
            }
            if($eventkey == 'picture'){
                    $imgname = time().rand(1,99).'.'.$eventvalue->extension();
                    $eventvalue->move(public_path('img/editable') , $imgname);                    
                    $userviewEvent->picture = $imgname;
                    $event['picture'] = $imgname;
            }
        }

        $restaurant =[];
        foreach($request->restaurant as $key => $value){
            if($key == 'picture'){
                    $imgname = time().rand(1,99).'.'.$value->extension();
                    $value->move(public_path('img/editable') , $imgname);
                    // $userviewRestaurant->picture ;
                    $restaurant = $imgname;
                    echo json_encode($restaurant);
            }


            // echo json_encode($request->restaurant);
            if($key == 'description'){
                $userviewRestaurant->description = $value;   
            }
            if($key == 'price'){
                $userviewRestaurant->price = $value;
            }
            if($key == 'time'){
                $userviewRestaurant->time = $value;
            }
            if($key == 'capacity'){
                $userviewRestaurant->capacity = $value;
            }
            if($key == 'amenities'){
                $userviewRestaurant->amenities = $value;
            }
            if($key == 'per_hour'){
                $userviewRestaurant->per_hour = $value;
            }
        }

        // echo json_encode($restaurant);
        foreach($request->event_hall as $key => $value){
            if($key == 'picture'){
                $imgname = time().rand(1,99).'.'.$value->extension();
                $value->move(public_path('img/editable') , $imgname);
                $userviewevent_hall->picture = $imgname;
            }
            if($key == 'description'){
                $event_hall['description'] = $value;
                $userviewevent_hall->description = $value;
            }
            if($key == 'price'){
                $event_hall['price'] = $value;
                $userviewevent_hall->price = $value;
            }
            if($key == 'time'){
                $event_hall['time'] = $value;
                $userviewevent_hall->time = $value;
            }
            if($key == 'capacity'){
                $event_hall['capacity'] = $value;
                $userviewevent_hall->capacity = $value;
            }
            if($key == 'amenities'){
                $event_hall['amenities'] = $value;
                $userviewevent_hall->amenities = $value;
            }
            if($key == 'per_hour'){
                $event_hall['per_hour'] = $value;
                $userviewevent_hall->per_hour = $value;
            }
        }
        foreach($request->gazebo as $key => $value){
            if($key == 'picture'){
                $imgname = time().rand(1,99).'.'.$value->extension();
                $value->move(public_path('img/editable') , $imgname); 
                $userviewgazebo->picture = $imgname;   
            }
            if($key == 'description'){
                $userviewgazebo->description = $value;
            }
            if($key == 'price'){
                $userviewgazebo->price = $value;
            }
            if($key == 'time'){
                $userviewgazebo->time = $value;
            }
            if($key == 'capacity'){
                $userviewgazebo->capacity = $value;
            }
            if($key == 'amenities'){
                $userviewgazebo->amenities = $value;
            }
            if($key == 'per_hour'){
                $userviewgazebo->per_hour = $value;
            }
        }

        echo json_encode($userviewgazebo);
        foreach($request->pool as $key => $value){
            if($key == 'picture'){
                $imgname = time().rand(1,99).'.'.$value->extension();
                $value->move(public_path('img/editable') , $imgname);
                $pool['picture'] = $imgname; 
                $userviewpool->picture = $imgname; 
            }

            if($key == 'description'){
                $userviewpool->description = $value;
                $pool['description'] = $value;
                $userviewpool->description = $value; 
            }
            if($key == 'price'){
                $userviewpool->price = $value;
                $pool['price'] = $value;
                $userviewpool->price = $value; 
            }
            
            if($key == 'time'){
                $userviewpool->time = $value;
                $pool['time'] = $value;
                $userviewpool->time = $value; 
            }
            if($key == 'capacity'){
                $userviewpool->capacity = $value;
                $pool['capacity'] = $value;
                $userviewpool->capacity = $value; 
            }
            if($key == 'amenities'){
                $userviewpool->amenities = $value;
                $pool['amenities'] = $value;
                $userviewpool->amenities = $value; 
            }
            if($key == 'per_hour'){
                $userviewpool->per_hour = $value;
                $pool['per_hour'] = $value;
                $userviewpool->per_hour = $value; 
            }
        }

        $promopicture =[];
        if($request->promo_picture != ""){
            foreach ($request->promo_picture as $value) {
                $imgname = time().rand(1,99).'.'.$value->extension();
                $value->move(public_path('img/editable') , $imgname);
                $promopicture[] = $imgname;
                
            }
            $userviewpicture_promo = $promopicture;
        }


        $package = [];
        foreach($request->package as $key => $value){
            $userviewpackage->$key->enable = "off";
            foreach ($value as $k => $v) {
                if(is_array($v) && $k == "package_lists"){
                    // echo json_encode($v);
                    $package[$key][$k] = $v;
                    $userviewpackage->$key->package_lists = $v;
                }
                else{
                    
                    if($k == 'name'){
                    $package[$key][$k] = $v;
                    $userviewpackage->$key->name = $v;
                    // $oldpackage = `old_$v`;
                    };
                    if($k == 'price'){
                    $package[$key][$k] = $v;
                    $userviewpackage->$key->price = $v;
                //         echo $v;
                    };
                    if($k == 'description'){
                    $package[$key][$k] = $v;
                    $userviewpackage->$key->description = $v;
                //         echo $v;
                    };
                    if($k == 'enable'){
                        $userviewpackage->$key->enable = $v;
                        $package[$key][$k] = 'true';  
                    }
                    if($k == 'picture'){
                            $imgname = time().rand(1,9999999).'.'.$v->extension();
                            $v->move(public_path('img/editable') , $imgname);
                            $userviewpackage->$key->picture = $imgname;
                            $package[$key][$k] = $imgname;
                    };
                    
                    
                }
            }
            echo json_encode($userviewpackage->$key->enable);
        }

        
    
      
        $client = [];
        foreach($request->client as $key => $value){
            if($key == 'email'){
                $userviewclient->email = $value;
            }
            if($key == 'address'){
                $userviewclient->address = $value;
            }
            if($key == 'phone'){
                $userviewclient->phone = $value;
            }
        }
            $userviewval->herocarousel = json_encode($userviewCarousel);
            $userviewval->reservation_tables =  json_encode($userviewTable);
            $userviewval->reservation_events = json_encode($userviewEvent);
            $userviewval->restaurant = json_encode($userviewRestaurant);
            $userviewval->gazebo = json_encode($userviewgazebo);
            $userviewval->package = json_encode($userviewpackage);
            $userviewval->description_about = $request->about_us_description;
            $userviewval->event_hall = json_encode($userviewevent_hall);
            $userviewval->pool = json_encode($userviewpool);
            $userviewval->picture_promo = json_encode($userviewpicture_promo);
            $userviewval->client = json_encode($userviewclient);
            $userviewval->update();

            
            
            return redirect(route('show.dynamicweb'));
        
        // }
    }
    
    //show archives
    public function showeventarchives(){

        return view('Adminview.Settings.Archives.event',[
            'archivesevents'=> DB::table('archives_events')->orderBy('scheduledate' , 'DESC')->get(),
        ]);
    }
    public function showtablearchives(){
        return view('Adminview.Settings.Archives.table',[
            'archivestables'=> DB::table('archives_tables')->orderBy('scheduledate' , 'DESC')->get(),
        ]);
    }
    public function showeventformarchives($id){
        $addons = "";
       
        foreach (DB::table('archives_events')->where('customer_id' , $id)->get() as $key => $value) {
            $addons = json_decode($value->venueaddon);
        }

        return view('Adminview.Settings.Archives.form.event' , [
            'data' => DB::table('archives_events')->where('customer_id' , $id)->get(),
            'addons' => $addons
        ]);
    }
    public function showtableformarchives($id){
        return view('Adminview.Settings.Archives.form.table' , [
            'data' => DB::table('archives_tables')->where('customer_id' , $id)->get()
        ]);
    }

    public function changeemployeepass(Request $request){

        $request->validate([
            'password_confirmation' => ['required','min:6' ],
            'password' => ['required','min:6' ],
        ]);

        if($request->password_confirmation != $request->password){
            return Redirect::back()->with('msg', 'Somethings wrong in Password');
        }
        $user =  User::find($request->id);
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect('/dashboard');
    }

    public function historyformevent($id){
        $addons = "";
       
        foreach (DB::table('historyevents')->where('customer_id' , $id)->get() as $key => $value) {
            $addons = json_decode($value->venueaddon);
        }
        return view('Adminview.History.form.event', [
            'data' => DB::table('historyevents')->where('customer_id' , $id)->get(),
            'addons' => $addons
        ]);

    }
    public function historyformtable($id){
        return view('Adminview.History.form.table', [
            'data' => DB::table('historytables')->where('customer_id' , $id)->get()
        ]);
    }
    

}

