<?php

namespace ContainerB99DRRl;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTagControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\Frontend\TagController' shared autowired service.
     *
     * @return \App\Controller\Frontend\TagController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/Frontend/TagController.php';

        $container->services['App\\Controller\\Frontend\\TagController'] = $instance = new \App\Controller\Frontend\TagController();

        $instance->setContainer(($container->privates['.service_locator.jIxfAsi'] ?? $container->load('get_ServiceLocator_JIxfAsiService'))->withContext('App\\Controller\\Frontend\\TagController', $container));

        return $instance;
    }
}
