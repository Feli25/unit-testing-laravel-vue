<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LoginTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/login')
                ->assertSee('Welcome! Login Here')
                ->type('email', 'hello@spacesquad.de')
                ->type('password', 'supersafepassword1234')
                ->press('submitLogin')
                ->assertPathIs('/home');
        });
    }
}
