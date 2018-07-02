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
        //$this->call(UsersTableSeeder::class);

        // DB::table('admin')->insert([
        //     'fullname'=>'Admin...'
        // ]);
        DB::table('admin')
            ->where('id', 1)
            ->update(['fullname' => "Admin updated"]);


    }
}
