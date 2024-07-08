<?php

namespace App\Console\Commands;

use App\Models\HistoryEvents;
use App\Models\HistoryTables;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class TransferDataArchives extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:transfer-data-archives';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        date_default_timezone_set('Asia/Manila');

        HistoryEvents::query()
        ->where('scheduledate','<', Carbon::now()->subYear()->format('Y-m-d'))
        ->each(function ($oldRecord) {
          $newRecord = $oldRecord->replicate();
          $newRecord->setTable('archives_events');
          $newRecord->save();
          $oldRecord->delete();
        });

        HistoryTables::query()
        ->where('scheduledate','<', Carbon::now()->subYear()->format('Y-m-d'))
        ->each(function ($oldRecord) {
          $newRecord = $oldRecord->replicate();
          $newRecord->setTable('archives_tables');
          $newRecord->save();
          $oldRecord->delete();
        });
    }
}
