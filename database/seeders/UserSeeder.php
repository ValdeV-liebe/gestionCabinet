<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $table=  [
            ['name' => 'Valdex Kenne',
            'email' => 'valdexliebe@gmail.com',
            'password' => bcrypt('password') ],

            ['name' => 'Dr Benoit Azangeuzet',
            'email' => 'azangeuzet@gmail.com',
            'password' => bcrypt('password') ],

            ['name' => 'Dr Maurice Tchoupe',
            'email' => 'tchoupe@gmail.com',
            'password' => bcrypt('password') ],

            ['name' => 'Dr Vianney Kengne',
            'email' => 'kengne@gmail.com',
            'password' => bcrypt('password') ],
         ];

         foreach($table as $item){
             User::create($item);
         }
    }
}
