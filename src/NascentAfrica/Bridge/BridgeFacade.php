<?php

namespace NascentAfrica\Bridge;

use Illuminate\Support\Facades\Facade;

/**
 * @see \NascentAfrica\Bridge\Skeleton\SkeletonClass
 */
class BridgeFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'bridge';
    }
}
