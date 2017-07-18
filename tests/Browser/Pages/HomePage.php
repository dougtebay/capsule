<?php

namespace Tests\Browser\Pages;

use Laravel\Dusk\Browser;
use Laravel\Dusk\Page as BasePage;

class HomePage extends BasePage
{
	public function url()
	{
		return '/';
	}

	public function assert(Browser $browser)
    {
        $browser->assertPathIs($this->url());
    }
}
