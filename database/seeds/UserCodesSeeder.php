<?php


use Illuminate\Database\Seeder;
use Carbon\Carbon as Carbon;

class UserCodesSeeder extends Seeder
{
 
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DB::table('user_codes')->delete();

        $user_code = [
            [
                'id'=>'1',
                'personal_information_id' => '1',
                'code' => 'A045RGJTIQ',
                'created_at' => Carbon::now(),
                
            ],
            [
                'id'=>'2',
                'personal_information_id' => '2',
                'code' => 'BGWERT3E$3',
                'created_at' => Carbon::now(),
                
            ],
            [
                'id'=> '3',
                'personal_information_id' => '3',
                'code' => 'QRQERA$#84',
                'create_at' => Carbon::now(),
            ],
        
            [
                'id'=> '4',
                'personal_information_id' => '4',
                'code' => 'ARARRRA$#84',
                'create_at' => Carbon::now(),
            ],
            [
                'id'=> '5',
                'personal_information_id' => '5',
                'code' => 'PORARRRA$#24',
                'create_at' => Carbon::now(),
            ],
            [
                'id'=> '6',
                'personal_information_id' => '6',
                'code' => 'LKOJARRRA$',
                'create_at' => Carbon::now(),
            ],
            [
                'id'=> '7',
                'personal_information_id' => '7',
                'code' => 'KDOJARARA$',
                'create_at' => Carbon::now(),
            ],
            
        ];

        DB::table('user_codes')->insert($user_code);

  
        
        $this->command->info('User_Code table seeded!');

    }
}
