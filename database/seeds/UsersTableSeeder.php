<?php

use Illuminate\Database\Seeder;
use App\User;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        User::truncate();

        User::create([
            'name' => 'Marvin Phiri',
            'email' => 'marvinphirimv@gmail.com',
            'password' => Hash::make( 'TestP@ss123' ),
            'email_verified_at' => Carbon::now()
        ]);

        User::create([
            'name' => 'Arthur Kalikiti',
            'email' => 'arthurkalikiti@gmail.com',
            'password' => Hash::make( 'TestP@ss123' ),
            'email_verified_at' => Carbon::now()
        ]);
    }
}
