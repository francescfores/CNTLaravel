<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
//                'uuid' => $user_id,
            'id' => 1,
            'name' => 'Test',
            'email' => "admin@gmail.com",
            'password' => bcrypt('admin'),
//            'password' => "admin"
        ]);
        // $this->call(UsersTableSeeder::class);
        $faker = Faker::create();
        foreach (range(1,50) as $index) {
            $user_id = $faker->unique()->randomNumber();
            //$user_id = Uuid::generate(1);
            DB::table('users')->insert([
//                'uuid' => $user_id,
                'id' => $user_id,
                'name' => $faker->name,
                'email' => $faker->email,
                //'password' => bcrypt('secret'),
                'password' => "Password"
            ]);

            DB::table('news')->insert([
                'id' => $faker->unique()->randomNumber(),
                'name' => $faker->name,
                'title' => $faker->email,
                'comment' => 'Comment',
//                'user_uuid' => $user_id,
                'user_id' => $user_id,

            ]);
        }
    }
}
