<?php

namespace Tests\Unit;

use Tests\TestCase;
use \App\Car;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UpdateCarTest extends TestCase
{
    public function testUpdateYear()
    {
        $cars = Car::all();
        $car = Car::find(10);
        $car->year = '2000';
        $car->save();
        $this->assertDatabaseHas('cars', ["year" => '2000']);
    }
}
