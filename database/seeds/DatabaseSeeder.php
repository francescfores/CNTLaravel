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
                'password' => bcrypt('secret'),
//                'password' => "Password"
            ]);

            DB::table('news')->insert([
                'id' => $faker->unique()->randomNumber(),
                'name' => $faker->name,
                'title' => $faker->email,
                'comment' => 'Comment',
//                'user_uuid' => $user_id,
                'user_id' => $user_id,

            ]);

//            $faker = Faker::create();
//            $img = $faker->imageUrl($width = 640, $height = 480);// 'http://lorempixel.com/640/480/'
//            var_dump($img);
//            var_dump(basename($img));
//            $info = getimagesize($img);
//            $extension1 = image_type_to_extension($info[2]);
//            $extension2 = pathinfo($img, PATHINFO_EXTENSION);
//            var_dump($extension1);
//            var_dump($extension2);
//
//            DB::table('news')->insert([
//                'id' => $faker->unique()->randomNumber(),
//                'name' => $faker->string, //10
//                'size' => $faker->email,
//                'real_name' => 'Comment', //255
//                'extension' => 'Comment', //10
//                'mime' => 'Comment', //15
//                'user_id' => $user_id,
//
//            ]);

        }
    }
}
