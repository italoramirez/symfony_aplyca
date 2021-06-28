<?php

namespace Container3wiEqSo;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_D00XA5iService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.d00XA5i' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.d00XA5i'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'postRepository' => ['privates', 'App\\Repository\\PostRepository', 'getPostRepositoryService', true],
        ], [
            'postRepository' => 'App\\Repository\\PostRepository',
        ]);
    }
}
