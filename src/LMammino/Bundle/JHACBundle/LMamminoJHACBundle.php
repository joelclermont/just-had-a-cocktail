<?php

namespace LMammino\Bundle\JHACBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class LMamminoJHACBundle extends Bundle
{

    public function getParent()
    {
        return 'FOSUserBundle';
    }

}
