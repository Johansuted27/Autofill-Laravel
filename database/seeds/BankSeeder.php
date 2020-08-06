<?php

use Illuminate\Database\Seeder;

class BankSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $path = './database/seeds/sql/banks.sql';

        DB::unprepared(File::get(base_path($path)));

    }
}
