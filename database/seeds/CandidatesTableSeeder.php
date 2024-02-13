<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon as Carbon;
class CandidatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $candidates = [

            [
                'student_id' => '2',
                'position' => 'President',
                'coc_message' => '',
                'approval' => '2',
                'created_at' => Carbon::now(),                
            ],
            [
                'student_id' => '3',
                'position' => 'President',
                'coc_message' => '',
                'approval' => '2',
                'created_at' => Carbon::now(),                
            ],
            [
                'student_id' => '4',
                'position' => 'Vice President',
                'coc_message' => '',
                'approval' => '2',
                'created_at' => Carbon::now(),                
            ],
            [
                'student_id' => '5',
                'position' => 'Vice President',
                'coc_message' => '',
                'approval' => '2',
                'created_at' => Carbon::now(),                
            ],
            [
                'student_id' => '6',
                'position' => 'Secretary',
                'coc_message' => '',
                'approval' => '2',
                'created_at' => Carbon::now(),                
            ],
            [
                'student_id' => '7',
                'position' => 'Secretary',
                'coc_message' => '',
                'approval' => '2',
                'created_at' => Carbon::now(),                
            ],
            [
                'student_id' => '8',
                'position' => 'Treasurer',
                'coc_message' => '',
                'approval' => '2',
                'created_at' => Carbon::now(),                
            ],
            [
                'student_id' => '9',
                'position' => 'Treasurer',
                'coc_message' => '',
                'approval' => '2',
                'created_at' => Carbon::now(),                
            ],
            [
                'student_id' => '10',
                'position' => 'Auditor',
                'coc_message' => '',
                'approval' => '2',
                'created_at' => Carbon::now(),                
            ],
            [
                'student_id' => '11',
                'position' => 'Auditor',
                'coc_message' => '',
                'approval' => '2',
                'created_at' => Carbon::now(),                
            ],
            [
                'student_id' => '12',
                'position' => 'Business Manager',
                'coc_message' => '',
                'approval' => '2',
                'created_at' => Carbon::now(),                
            ],
            [
                'student_id' => '13',
                'position' => 'Business Manager',
                'coc_message' => '',
                'approval' => '2',
                'created_at' => Carbon::now(),                
            ],
            [
                'student_id' => '14',
                'position' => 'P.I.O',
                'coc_message' => '',
                'approval' => '2',
                'created_at' => Carbon::now(),                
            ],
            [
                'student_id' => '15',
                'position' => 'P.I.O',
                'coc_message' => '',
                'approval' => '2',
                'created_at' => Carbon::now(),                
            ],
            
            
        ];

        DB::table('candidates')->insert($candidates);
        
        $this->command->info('Candidates table seeded!');
    }
}
