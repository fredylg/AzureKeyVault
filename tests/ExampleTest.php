<?php

namespace Fredylg\AzureKeyVault\Tests;

use Orchestra\Testbench\TestCase;
use Fredylg\AzureKeyVault\AzureKeyVaultServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [AzureKeyVaultServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
