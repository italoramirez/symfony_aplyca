<?php

namespace Container3wiEqSo;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_PHYVS7Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.pHY_vS7' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.pHY_vS7'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'person' => ['privates', '.errored..service_locator.pHY_vS7.App\\Entity\\Person', NULL, 'Cannot autowire service ".service_locator.pHY_vS7": it references class "App\\Entity\\Person" but no such service exists.'],
        ], [
            'person' => 'App\\Entity\\Person',
        ]);
    }
}