<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon as Carbon;

class PersonalInformationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //List of Personal Information registered in the system including Administrator, Teacher and Student.

        $person = [
            [
                'id' => '1',
                'lrn_or_id_no' => '000-0000',
                'lastname' => 'Lucena',
                'middlename' => 'L.',
                'firstname' => 'Amanda',  
                'suffix' => '',
                'date_of_birth' => '1990-10-05',  
                'gender' => 'Male',  
                'address' => '311 Nowhere, Mars Section 10',
                'contact_no' => '09463100957',
                'Photo' => '',
                'person_type' => 'Administrator',
                'created_at' => Carbon::now(),         
            ],
           
            [
                'id' => '2',
                'lrn_or_id_no' => '131270140191',
                'lastname' => 'Binas',
                'firstname' => 'Remy',
                'middlename' => 'Rosal',
                'suffix' => '',
                'date_of_birth' => '2000-03-09',  
                'gender' => 'Male',    
                'address' => '321 Sanguine, Mars Section 5',
                'contact_no' => '09364019104',
                'Photo' => '',
                'person_type' => 'Student',
                'created_at' => Carbon::now(), 
            ],
            [
                'id' => '3',
                'lrn_or_id_no' => '155270540191',
                'lastname' => 'Manquil',
                'firstname' => 'Emerson',
                'middlename' => 'G.',
                'suffix' => '',
                'date_of_birth' => '1992-04-03',  
                'gender' => 'Male',    
                'address' => '321 Sanguine, venus Sction 56',
                'contact_no' => '',
                'Photo' => '',
                'person_type' => 'Student',
                'created_at' => Carbon::now(), 
            ],
            [
                'id' => '4',
                'lrn_or_id_no' => '1993470540191',
                'lastname' => 'Gonzales',
                'firstname' => 'John',
                'middlename' => 'G.',
                'suffix' => '',
                'date_of_birth' => '1991-06-03',  
                'gender' => 'Male',    
                'address' => '355 Pluto, venus Sction 53',
                'contact_no' => '',
                'Photo' => '',
                'person_type' => 'Student',
                'created_at' => Carbon::now(), 
            ],
            [
                'id' => '5',
                'lrn_or_id_no' => '1003470540193',
                'lastname' => 'Tinio',
                'firstname' => 'Clarice',
                'middlename' => 'H.',
                'suffix' => '',
                'date_of_birth' => '1991-06-03',  
                'gender' => 'Female',    
                'address' => '355 Earth, venus Sction 44',
                'contact_no' => '',
                'Photo' => '',
                'person_type' => 'Student',
                'created_at' => Carbon::now(), 
            ],
            [
                'id' => '6',
                'lrn_or_id_no' => '1553470540193',
                'lastname' => 'Valdirama',
                'firstname' => 'Anabelle',
                'middlename' => 'A.',
                'suffix' => '',
                'date_of_birth' => '2001-16-03',  
                'gender' => 'Female',    
                'address' => '356 Earth, venus Sction 44',
                'contact_no' => '',
                'Photo' => '',
                'person_type' => 'Student',
                'created_at' => Carbon::now(), 
            ],
            [
                'id' => '7',
                'lrn_or_id_no' => '1663470540193',
                'lastname' => 'Macmood',
                'firstname' => 'Joharia',
                'middlename' => 'K.',
                'suffix' => '',
                'date_of_birth' => '1998-18-03',  
                'gender' => 'Female',    
                'address' => '357 Jupiter, venus Sction 44',
                'contact_no' => '',
                'Photo' => '',
                'person_type' => 'Student',
                'created_at' => Carbon::now(), 
            ],
            [
                'id' => '8',
                'lrn_or_id_no' => '1873440540193',
                'lastname' => 'Furton',
                'firstname' => 'Rhyan',
                'middlename' => 'G.',
                'suffix' => '',
                'date_of_birth' => '2000-11-03',  
                'gender' => 'Male',    
                'address' => '655 AAA, venus Sction 44',
                'contact_no' => '',
                'Photo' => '',
                'person_type' => 'Student',
                'created_at' => Carbon::now(), 
            ],
            [
                'id' => '9',
                'lrn_or_id_no' => '10073340540193',
                'lastname' => 'Baluyot',
                'firstname' => 'Carl',
                'middlename' => 'H.',
                'suffix' => '',
                'date_of_birth' => '2003-12-03',  
                'gender' => 'Male',    
                'address' => '555 ABA, venus Sction 44',
                'contact_no' => '',
                'Photo' => '',
                'person_type' => 'Student',
                'created_at' => Carbon::now(), 
            ],
            [
                'id' => '10',
                'lrn_or_id_no' => '11173340540192',
                'lastname' => 'Montero',
                'firstname' => 'Wilken',
                'middlename' => 'C.',
                'suffix' => '',
                'date_of_birth' => '1993-02-08',  
                'gender' => 'Male',    
                'address' => '999 ABC, venus Sction 44',
                'contact_no' => '',
                'Photo' => '',
                'person_type' => 'Student',
                'created_at' => Carbon::now(), 
            ],
            [
                'id' => '11',
                'lrn_or_id_no' => '22273340540192',
                'lastname' => 'Soliman',
                'firstname' => 'Avegail',
                'middlename' => 'A.',
                'suffix' => '',
                'date_of_birth' => '1991-02-08',  
                'gender' => 'Female',    
                'address' => '000 ADC, venus Sction 44',
                'contact_no' => '',
                'Photo' => '',
                'person_type' => 'Student',
                'created_at' => Carbon::now(), 
            ],
            [
                'id' => '12',
                'lrn_or_id_no' => '33373340540192',
                'lastname' => 'Granada',
                'firstname' => 'Elza',
                'middlename' => 'B.',
                'suffix' => '',
                'date_of_birth' => '1990-02-08',  
                'gender' => 'Female',    
                'address' => '444 ADC, venus Sction 44',
                'contact_no' => '',
                'Photo' => '',
                'person_type' => 'Student',
                'created_at' => Carbon::now(), 
            ],
            [
                'id' => '13',
                'lrn_or_id_no' => '44473340540192',
                'lastname' => 'Chu',
                'firstname' => 'Gerald',
                'middlename' => 'B.',
                'suffix' => '',
                'date_of_birth' => '1991-22-08',  
                'gender' => 'Male',    
                'address' => '999 ADC, venus Sction 44',
                'contact_no' => '',
                'Photo' => '',
                'person_type' => 'Student',
                'created_at' => Carbon::now(), 
            ],
            [
                'id' => '14',
                'lrn_or_id_no' => '88873340540192',
                'lastname' => 'Rueda',
                'firstname' => 'Kim',
                'middlename' => 'V.',
                'suffix' => '',
                'date_of_birth' => '1997-23-08',  
                'gender' => 'Female',    
                'address' => '999 ADC, venus Sction 44',
                'contact_no' => '',
                'Photo' => '',
                'person_type' => 'Student',
                'created_at' => Carbon::now(), 
            ],
            [
                'id' => '15',
                'lrn_or_id_no' => '75773340540192',
                'lastname' => 'Lazard',
                'firstname' => 'Louise',
                'middlename' => 'Z.',
                'suffix' => '',
                'date_of_birth' => '1993-07-08',  
                'gender' => 'Female',    
                'address' => '121 ADC, venus Sction 44',
                'contact_no' => '',
                'Photo' => '',
                'person_type' => 'Student',
                'created_at' => Carbon::now(), 
            ],
            [
                'id' => '16',
                'lrn_or_id_no' => '98973340540192',
                'lastname' => 'Supan',
                'firstname' => 'Rench',
                'middlename' => 'S.',
                'suffix' => '',
                'date_of_birth' => '1991-02-08',  
                'gender' => 'Male',    
                'address' => '113 ADC, venus Sction 44',
                'contact_no' => '',
                'Photo' => '',
                'person_type' => 'Student',
                'created_at' => Carbon::now(), 
            ],
        ];

        DB::table('personal_informations')->insert($person);
        
        $this->command->info('Personal_Information table seeded!');

    }
}
