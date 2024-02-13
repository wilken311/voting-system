<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon as Carbon;

class TracksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //List of Tracks offered
       
        $tracks = [
            [
                'id' => '1',
                'name' => 'Academic',
                'created_at' => Carbon::now(),
            ], 
            [
                'id' => '2',
                'name' => 'Technical-Vocational-Livelihood (TVL)',
                'created_at' => Carbon::now(),
            ], 
            [
                'id' => '3',
                'name' => 'Sports',
                'created_at' => Carbon::now(),
            ],
            [
                'id' => '4',
                'name' => 'Arts & Design',
                'created_at' => Carbon::now(),
            ]
        ];

        DB::table('tracks')->insert($tracks);
        
        $this->command->info('Tracks table seeded!');
    }
}
