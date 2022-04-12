<?php

namespace Tests\Feature;

<<<<<<< HEAD
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
=======
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
>>>>>>> b9465da18a749f9912d6769c811145f40955fb33

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
<<<<<<< HEAD
    public function test_example()
=======
    public function testBasicTest()
>>>>>>> b9465da18a749f9912d6769c811145f40955fb33
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
