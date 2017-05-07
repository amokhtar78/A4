<?php

use Illuminate\Database\Seeder;
use App\Developer;

class DevelopersTableSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        # Array of developer data to add
        $developers = [
            ['Nintendo', 'Japan'],
            ['Sega', 'Japan']
        ];

        # Initiate a new timestamp we can use for created_at/updated_at fields
        $timestamp = Carbon\Carbon::now()->subDays(count($developers));

        # Loop through each developer, adding them to the database
        foreach ($developers as $developer) {

            # Set the created_at/updated_at for each Game to be one day less than
            # the Game before. That way each Game will have unique timestamps.
            $timestampForThisDeveloper = $timestamp->addDay()->toDateTimeString();
            Developer::insert([
                'created_at' => $timestampForThisDeveloper,
                'updated_at' => $timestampForThisDeveloper,
                'dev_name' => $developer[0],
                'dev_country' => $developer[1],
            ]);
        }
    }
}