<?php

namespace Tests\Unit;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ChangeNameTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function ChangeNameTest()
    {
        $user= App/User::find(1);

        $user->string = 'Steve Smith';

        $user->save();


    }
}
