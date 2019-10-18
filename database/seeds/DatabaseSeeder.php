<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this=>trun
        // $this->call(UsersTableSeeder::class);
    }

    protected function truncateTables(array $tablas){
        DB::statement('drop table users')
    }
}
