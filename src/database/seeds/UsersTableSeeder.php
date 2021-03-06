<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // factory(User::class, 10)->create();

        //faker呼び出し
        $faker = Faker\Factory::create('ja_JP');

        for ($i = 1; $i <= 10; $i++) {
            User::create([
                'name' => $faker->unique()->name,
                'email' => $faker->unique()->safeEmail,
                'email_verified_at' => now(),
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'remember_token' => Str::random(10),
                'career_id' =>  $i,
                'countries' =>  $faker->country,
                'birth_month' =>  $faker->monthName($max = 'now'),
                'sex' =>  $faker->randomElement($array=['男性','女性']),
            ]);
        }
    }
}
