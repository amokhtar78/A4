<?php

use Illuminate\Database\Seeder;
use App\Grank;

class GranksTableSeeder extends Seeder {

      public function run() {
        Grank::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'Bad',
            'score' => 0,
        ]);
        Grank::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'Average',
            'score' => 1,
        ]);
        Grank::insert([
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            'name' => 'Good',
            'score' => 2,
        ]);
    }

}
