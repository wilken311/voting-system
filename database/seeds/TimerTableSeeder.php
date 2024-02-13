<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon as Carbon;

class TimerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //These are the Teachers handled in this subject.

        $timer = [      
            [
                'id' => '1',
                'title' => 'Filling COC',
                'date_started' => 'MM/DD/YYYY HH:MM:SS',
                'date_ended' => 'MM/DD/YYYY HH:MM:SS',
                'created_at' => Carbon::now(),         
            ],
            [
                'id' => '2',
                'title' => 'Election',
                'date_started' => 'MM/DD/YYYY HH:MM:SS',
                'date_ended' => 'MM/DD/YYYY HH:MM:SS',
                'created_at' => Carbon::now(),         
            ],
 
        ];

        DB::table('timers')->insert($timer);
        
        $this->command->info('Timers table seeded!');
    }
    
}
