<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Vehicle;

class DeleteVehicle extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'delete:vehicle';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Delete vehicles with inactive insurance';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $today = date("Y-m-d H:i:s");
        \DB::table('vehicles')->where('insurance_date', '<', $today)
                              ->orWhereNotNull('deleted_at')
                              ->delete();
    }
}
