<?php

use Illuminate\Database\Seeder;
use App\Profile;
use Faker\Factory;

class ProfileTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Profile::truncate();
        $faker = Factory::create();

        foreach(range(1, 50) as $i){
            $profile = Profile::create([
                'user_id' => $i,
                'fullname' => $faker->firstName . ' '  . $faker->lastName,
            ]);
        }
    }
}
