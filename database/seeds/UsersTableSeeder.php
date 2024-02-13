<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon as Carbon;

class UsersTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DB::table('users')->delete();

        $users = [
            [
                'user_code_id' => '1',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('12345678'),
                'created_at' => Carbon::now(),
                
            ],
         
            [
                'user_code_id' => '2',
                'email' => 'user@gmail.com',
                'password' => bcrypt('87654321'),
                'created_at' => Carbon::now(),
            ],
        ];

        DB::table('users')->insert($users);

       
        
        $this->command->info('User table seeded!');

    }
}
