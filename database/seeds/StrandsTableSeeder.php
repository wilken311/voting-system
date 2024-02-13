<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon as Carbon;

class StrandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       

       $strands = [

        //This strands are under in academic track.

        [
            'id' => '1',
            'name' => 'General Academic Strand',
            'abbreviation' => 'GAS',
            'created_at' => Carbon::now(),
        ],
        [
            'id' => '2',
            'name' => 'Science,Technology, Engineering and Mathematics',
            'abbreviation' => 'STEM',
            'created_at' => Carbon::now(),
        ],  
        [
            'id' => '3',
            'name' => 'Humanities and Social Sciences Strand',
            'abbreviation' => 'HUMMS',
            'created_at' => Carbon::now(),
        ],
        [
            'id' => '4',
            'name' => 'Accountancy, Business and Management Strand',
            'abbreviation' => 'ABM',
            'created_at' => Carbon::now(),
        ],

        //This strands are under in TVL track.
        [
            'id' => '5',
            'name' => 'Home Economics',
            'abbreviation' => 'HE',
            'created_at' => Carbon::now(),
        ], 
        [
            'id' => '6',
            'name' => 'Information and Communications Technology',
            'abbreviation' => 'ICT',
            'created_at' => Carbon::now(),
        ], 

         //This strands are under in Sports track.
         //This strands are under in Arts & Design track.
       
       
    ];

    DB::table('strands')->insert($strands);
    
    $this->command->info('Strands table seeded!');

    }
}
