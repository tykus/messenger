<?php

namespace Tykus\Messenger;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Tykus\Messenger\Skeleton\SkeletonClass
 */
class MessengerFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'messenger';
    }
}
