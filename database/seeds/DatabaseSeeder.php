<?php

use App\Model\category;
use App\Model\Question;
use App\Model\replies;
use App\Model\likes;
use Illuminate\Database\Seeder;
use App\User;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        factory(user::class,10)->create();
        factory(category::class,5)->create();
        factory(Question::class,10)->create();
        factory(replies::class,50)->create()->each(function($reply){
            return $reply->like()->save(factory(likes::class)->make());
        });
 



    }
}
