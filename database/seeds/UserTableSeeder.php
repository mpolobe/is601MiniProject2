<?php

use App\Car;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 50)->create()->each(function ($u) {
        //    $u->cars()->save(factory(App\Car::class)->make());
        });
    }
}
