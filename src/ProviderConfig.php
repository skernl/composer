<?php
declare(strict_types=1);

namespace Skernl\Config;

/**
 * @ProviderConfig
 * @\Skernl\Config\ProviderConfig
 */
class ProviderConfig
{
    static private array $providerConfigs = [];

    static public function load()
    {
    }
}