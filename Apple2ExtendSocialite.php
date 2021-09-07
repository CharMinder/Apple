<?php

namespace CharMinder\Apple2;

use SocialiteProviders\Manager\SocialiteWasCalled;

class Apple2ExtendSocialite
{
    /**
     * Register the provider.
     *
     * @param \SocialiteProviders\Manager\SocialiteWasCalled $socialiteWasCalled
     */
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite('apple2', Provider::class);
    }
}
