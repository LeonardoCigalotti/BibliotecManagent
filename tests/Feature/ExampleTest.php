<?php

namespace Tests\Feature;

<<<<<<< HEAD
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
=======
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
>>>>>>> 90e6203f02f4568467df115cb79298baa6769451

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
>>>>>>> 90e6203f02f4568467df115cb79298baa6769451
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
