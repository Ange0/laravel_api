<?php

use App\Topicality;
use Illuminate\Database\Seeder;

class TopicalityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //je veux que tu execute la fonction factory
        factory(Topicality::class,30)->create();// je veux 30  actualité
    }
}
