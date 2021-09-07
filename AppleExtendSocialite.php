<?php

namespace SocialiteProviders\Apple2;

use SocialiteProviders\Manager\SocialiteWasCalled;

class AppleExtendSocialite
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
