<?php

namespace Tests\Unit;

//use PHPUnit\Framework\TestCase;
use Tests\TestCase;
use Illuminate\Support\Facades\Http;


class ApiTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */

    public function testBasicTest()
    {
      
        $response = Http::get('http://localhost/api/fruits');
        $res = $response->json();
        $this->assertTrue(isset($res["fruit"]));
        $this->assertTrue(isset($res["fruit"][0]));
        $this->assertTrue($res["fruit"][0] == "Apple");
        $this->assertTrue(true);
    }
}
 