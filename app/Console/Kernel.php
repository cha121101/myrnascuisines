<?php

namespace App\Console;

use App\Models\ArchivesEvents;
use App\Models\ArchivesTables;
use App\Models\AuditTrails;
use App\Models\HistoryEvents;
use App\Models\HistoryTables;
use Carbon\Carbon;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {
        $schedule->call(function () {

            $historyEvents = HistoryEvents::get();

            $historyTable = HistoryTables::get();

            foreach( $historyEvents as $key => $value){
                ArchivesEvents::create([
                    "id"=> $value->id,
                    "customer_id" => $value->customer_id,
                    "firstname" => strtoupper($value->firstname),
                    "lastname" =>strtoupper($value->lastname),
                    "address" =>strtoupper( $value->address),
                    "email" => strtoupper( $value->email),
                    "phonenumber" =>  strtoupper($value->phonenumber),
                    "tablenumber" =>  $value->tablenumber,
                    "scheduledate" =>  $value->scheduledate,
                    "scheduletime" =>  $value->scheduletime
                ]);   
                HistoryEvents::where('id' , $value->id)->delete();
            }

            foreach( $historyTable as $key => $value){
                ArchivesTables::create([
                    "id"=> $value->id,
                    "customer_id" => $value->customer_id,
                    "firstname" => strtoupper($value->firstname),
                    "lastname" =>strtoupper($value->lastname),
                    "address" =>strtoupper( $value->address),
                    "email" => strtoupper( $value->email),
                    "phonenumber" =>  strtoupper($value->phonenumber),
                    "tablenumber" =>  $value->tablenumber,
                    "scheduledate" =>  $value->scheduledate,
                    "scheduletime" =>  $value->scheduletime
                ]);   
                HistoryTables::where('id' , $value->id)->delete();
            }

        })->yearly();
    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
