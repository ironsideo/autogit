<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use \App\User;

class CountUserTest2 extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $user = Cars::where('is_seed', 1)->count();;

    	$result = ($user == 51)?true:false;

        $this->assertTrue($result);
    }
}
