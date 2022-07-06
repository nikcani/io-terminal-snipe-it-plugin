<?php

namespace Nikcani\SmartInventorySnipeItPlugin;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Nikcani\SmartInventorySnipeItPlugin\Skeleton\SkeletonClass
 */
class SmartInventorySnipeItPluginFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'smart-inventory-snipe-it-plugin';
    }
}
