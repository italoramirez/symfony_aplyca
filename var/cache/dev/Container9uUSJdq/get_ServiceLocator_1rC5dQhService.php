<?php

namespace Container9uUSJdq;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_1rC5dQhService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.1rC5dQh' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.1rC5dQh'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'countryRepository' => ['privates', 'App\\Repository\\CountryRepository', 'getCountryRepositoryService', true],
        ], [
            'countryRepository' => 'App\\Repository\\CountryRepository',
        ]);
    }
}
