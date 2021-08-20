<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class RegisterTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/register')
                ->assertSee('Hello! Register here!')
                ->type('name', 'SSQ')
                ->type('email', 'hello@spacesquad.de')
                ->type('password', 'supersafepassword1234')
                ->press('submitRegister')
                ->assertPathIs('/home');
        });
    }
}
