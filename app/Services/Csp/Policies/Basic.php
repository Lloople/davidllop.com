<?php

namespace App\Services\Csp\Policies;

use Spatie\Csp\Directive;
use Spatie\Csp\Policies\Basic as BasePolicies;

class Basic extends BasePolicies
{
    public function configure()
    {
        parent::configure();

        $this
            ->addDirective(Directive::IMG, 'data:')
            ->addNonceForDirective(Directive::IMG);
    }
}
