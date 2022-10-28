<?php

namespace App\Console\Commands;

use App\Models\TestUser;
use Illuminate\Console\Command;

class ReminderSubscriptionTest extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:name';

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
        $test_users = TestUser::get();
        foreach($test_users as $user){
            if(Carbon::parse($user->validts)->diffInDays(Carbon::now()) == 7){ //Or however your date field on user is called
                //Send an email
            }
        }
        return 0;
    }
}
