<?php

namespace Nikcani\IoTerminalSnipeItPlugin;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Nikcani\IoTerminalSnipeItPlugin\Skeleton\SkeletonClass
 */
class IoTerminalSnipeItPluginFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'io-terminal-snipe-it-plugin';
    }
}
