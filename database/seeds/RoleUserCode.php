<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon as Carbon;

class RoleUserCode extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $role_user = [

            //Administrator's Roles
            [
                'user_code_id' => '1',
                'role_id' => '1',
                'created_at' => Carbon::now(),                
            ],
            [
                'user_code_id' => '1',
                'role_id' => '2',
                'created_at' => Carbon::now(),                
            ],
            [
                'user_code_id' => '1',
                'role_id' => '3',
                'created_at' => Carbon::now(),                
            ],

       
            //Student's Roles
            [
                'user_code_id' => '2',
                'role_id' => '3',
                'created_at' => Carbon::now(),
            ],
            [
                'user_code_id' => '3',
                'role_id' => '3',
                'created_at' => Carbon::now(),
            ],
            [
                'user_code_id' => '4',
                'role_id' => '3',
                'created_at' => Carbon::now(),                
            ],
            [
                'user_code_id' => '5',
                'role_id' => '3',
                'created_at' => Carbon::now(),                
            ],
            [
                'user_code_id' => '6',
                'role_id' => '3',
                'created_at' => Carbon::now(),                
            ],
            [
                'user_code_id' => '7',
                'role_id' => '3',
                'created_at' => Carbon::now(),                
            ],
            
        ];

        DB::table('role_user_code')->insert($role_user);
        
        $this->command->info('Role_UserCode table seeded!');
    }
}
