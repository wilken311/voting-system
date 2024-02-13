<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PersonalInformationsSeeder::class);
        $this->call(RolesSeeder::class);
        $this->call(UserCodesSeeder::class);
        $this->call(RoleUserCode::class);
        $this->call(UsersTableSeeder::class);
        $this->call(TracksTableSeeder::class);
        $this->call(StrandsTableSeeder::class);
        $this->call(StudentsTableSeeder::class);
        $this->call(CandidatesTableSeeder::class);
        $this->call(TimerTableSeeder::class);
       
        
    }
}






