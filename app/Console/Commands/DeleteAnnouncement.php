<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Carbon\Carbon;
use App\Announcement;

class DeleteAnnouncement extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'ann:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
        Announcement::where('ann_end','<',Carbon::now())->each(function($announcement){
            $announcement->delete();
        });
     
        /*
           Write your database logic we bellow:
           Item::create(['name'=>'hello new']);
        */
      
        $this->info('Announcement:Cron Cummand Run successfully!');
    }
}
