<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class StagesTableSeeder extends Seeder
{
    public function run()
    {
        // TestDummy::times(20)->create('App\Post');
        $stages = ["inbox", "hr", "interview", "candidate", "intern", "negotiations", "working", "fired", "declined"];

        foreach ($stages as $stage){
            $s = new \App\Models\Stage(['name' =>ucwords($stage)]);
            $s->save();
        }

    }
}
