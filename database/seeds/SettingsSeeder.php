<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Settings;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        DB::table('settings')->delete();

        $settings = new Settings;
        $settings->number_of_attendees = 200;
        $settings->daycare_limit = 25;
        $settings->daycare_min_age = 0;
        $settings->daycare_max_age = 17;
        $settings->save();

        Model::reguard();
    }
}
