<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon as Carbon;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       //These are the list of students who enrolled per school year and semester

        $students = [

            //Student Remy
        
            [
                'id' => '1',
                'personal_information_id' => '2',
                'strand_id' => '1',
                'school_year' => '2019-2020',
                'semester' => 'First Semester',
                'grade_level' => 'G12',
                'section' => 'Tatualla',
                'status' => 'Regular',
                'created_at' => Carbon::now(),         
            ],

            [
                'id' => '2',
                'personal_information_id' => '3',
                'strand_id' => '1',
                'school_year' => '2019-2020',
                'semester' => 'First Semester',
                'grade_level' => 'G12',
                'section' => 'Apple',
                'status' => 'Regular',
                'created_at' => Carbon::now(),         
            ],
            [
                'id' => '3',
                'personal_information_id' => '4',
                'strand_id' => '1',
                'school_year' => '2019-2020',
                'semester' => 'First Semester',
                'grade_level' => 'G12',
                'section' => 'Tatualla',
                'status' => 'Regular',
                'created_at' => Carbon::now(),         
            ],
            [
                'id' => '4',
                'personal_information_id' => '5',
                'strand_id' => '1',
                'school_year' => '2019-2020',
                'semester' => 'First Semester',
                'grade_level' => 'G12',
                'section' => 'Mango',
                'status' => 'Regular',
                'created_at' => Carbon::now(),         
            ],
            [
                'id' => '5',
                'personal_information_id' => '6',
                'strand_id' => '1',
                'school_year' => '2019-2020',
                'semester' => 'First Semester',
                'grade_level' => 'G12',
                'section' => 'Papaya',
                'status' => 'Regular',
                'created_at' => Carbon::now(),         
            ],
            [
                'id' => '6',
                'personal_information_id' => '7',
                'strand_id' => '1',
                'school_year' => '2019-2020',
                'semester' => 'First Semester',
                'grade_level' => 'G12',
                'section' => 'Tatualla',
                'status' => 'Regular',
                'created_at' => Carbon::now(),         
            ],
            [
                'id' => '7',
                'personal_information_id' => '8',
                'strand_id' => '2',
                'school_year' => '2019-2020',
                'semester' => 'First Semester',
                'grade_level' => 'G12',
                'section' => 'Apple',
                'status' => 'Regular',
                'created_at' => Carbon::now(),         
            ],
            [
                'id' => '8',
                'personal_information_id' => '9',
                'strand_id' => '3',
                'school_year' => '2019-2020',
                'semester' => 'First Semester',
                'grade_level' => 'G12',
                'section' => 'Grapes',
                'status' => 'Regular',
                'created_at' => Carbon::now(),         
            ],
            [
                'id' => '9',
                'personal_information_id' => '10',
                'strand_id' => '3',
                'school_year' => '2019-2020',
                'semester' => 'First Semester',
                'grade_level' => 'G12',
                'section' => 'Tatualla',
                'status' => 'Regular',
                'created_at' => Carbon::now(),         
            ],
            [
                'id' => '10',
                'personal_information_id' => '11',
                'strand_id' => '4',
                'school_year' => '2019-2020',
                'semester' => 'First Semester',
                'grade_level' => 'G12',
                'section' => 'Tatualla',
                'status' => 'Regular',
                'created_at' => Carbon::now(),         
            ],
            [
                'id' => '11',
                'personal_information_id' => '12',
                'strand_id' => '1',
                'school_year' => '2019-2020',
                'semester' => 'First Semester',
                'grade_level' => 'G12',
                'section' => 'Banana',
                'status' => 'Regular',
                'created_at' => Carbon::now(),         
            ],
            [
                'id' => '12',
                'personal_information_id' => '13',
                'strand_id' => '1',
                'school_year' => '2019-2020',
                'semester' => 'First Semester',
                'grade_level' => 'G12',
                'section' => 'Guava',
                'status' => 'Regular',
                'created_at' => Carbon::now(),         
            ],
            [
                'id' => '13',
                'personal_information_id' => '14',
                'strand_id' => '2',
                'school_year' => '2019-2020',
                'semester' => 'First Semester',
                'grade_level' => 'G12',
                'section' => 'Tatualla',
                'status' => 'Regular',
                'created_at' => Carbon::now(),         
            ],
            [
                'id' => '14',
                'personal_information_id' => '15',
                'strand_id' => '1',
                'school_year' => '2019-2020',
                'semester' => 'First Semester',
                'grade_level' => 'G12',
                'section' => 'Tatualla',
                'status' => 'Regular',
                'created_at' => Carbon::now(),         
            ],
            [
                'id' => '15',
                'personal_information_id' => '16',
                'strand_id' => '3',
                'school_year' => '2019-2020',
                'semester' => 'First Semester',
                'grade_level' => 'G12',
                'section' => 'Tatualla',
                'status' => 'Regular',
                'created_at' => Carbon::now(),         
            ],

            //Student A
            //Student B
            //Student C
          
            
        ];

        DB::table('students')->insert($students);
        
        $this->command->info('Students table seeded!');
    }
}
