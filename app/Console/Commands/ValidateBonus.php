<?php

namespace App\Console\Commands;

use App\Point;
use Illuminate\Console\Command;
use Illuminate\Support\Carbon;

class ValidateBonus extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'bonus:validate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Convert suitable points to available';

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
     * @return int
     */
    public function handle()
    {
        Point::where('available', false)
            ->where('created_at', '<', Carbon::today()->subDays(config('bonus.pending_days')))
            ->update(['available' => true]);
    }
}
