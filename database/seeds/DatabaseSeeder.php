<?php

use Illuminate\Database\Seeder;
use App\LeaveMessage;
use App\ClientDetail;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(LeaveMessage::class,15)->create();
        factory(ClientDetail::class,15)->create();
    }
}
