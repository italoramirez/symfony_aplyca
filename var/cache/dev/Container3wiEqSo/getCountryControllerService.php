<?php

namespace Container3wiEqSo;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCountryControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\CountryController' shared autowired service.
     *
     * @return \App\Controller\CountryController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/CountryController.php';

        $container->services['App\\Controller\\CountryController'] = $instance = new \App\Controller\CountryController();

        $instance->setContainer(($container->privates['.service_locator.W9y3dzm'] ?? $container->load('get_ServiceLocator_W9y3dzmService'))->withContext('App\\Controller\\CountryController', $container));

        return $instance;
    }
}