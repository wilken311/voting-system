<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon as Carbon;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DB::table('roles')->delete();

        $roles = [
            [
                'id' => '1',
                'name' => 'Administrator',
                'created_at' => Carbon::now(),
            ], 
            [
                'id' => '2',
                'name' => 'Teacher',
                'created_at' => Carbon::now(),
            ], 
            [
                'id' => '3',
                'name' => 'Student',
                'created_at' => Carbon::now(),
            ]
        ];

        DB::table('roles')->insert($roles);
        
        $this->command->info('Roles table seeded!');

    }
}
