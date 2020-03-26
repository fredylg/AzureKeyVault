<?php

namespace Fredylg\AzureKeyVault;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Fredylg\AzureKeyVault\Skeleton\SkeletonClass
 */
class AzureKeyVaultFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'azurekeyvault';
    }
}
