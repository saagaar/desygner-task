<?php

namespace ContainerB99DRRl;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_8pvc0ZBService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.8pvc0ZB' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.8pvc0ZB'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\AuthController::login' => ['privates', '.service_locator.zFcJjKU', 'get_ServiceLocator_ZFcJjKUService', true],
            'App\\Controller\\Frontend\\ProviderController::createProvider' => ['privates', '.service_locator.GQZbvNR', 'get_ServiceLocator_GQZbvNRService', true],
            'App\\Controller\\Frontend\\ProviderController::searchProviders' => ['privates', '.service_locator.T6GxgJA', 'get_ServiceLocator_T6GxgJAService', true],
            'App\\Controller\\Frontend\\TagController::createTag' => ['privates', '.service_locator.GQZbvNR', 'get_ServiceLocator_GQZbvNRService', true],
            'App\\Controller\\Frontend\\TagController::searchTags' => ['privates', '.service_locator.EbJBY34', 'get_ServiceLocator_EbJBY34Service', true],
            'App\\Controller\\RegistrationController::register' => ['privates', '.service_locator.spC.Z_T', 'get_ServiceLocator_SpC_ZTService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.bRdave9', 'get_ServiceLocator_BRdave9Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::terminate' => ['privates', '.service_locator.bRdave9', 'get_ServiceLocator_BRdave9Service', true],
            'App\\Controller\\AuthController:login' => ['privates', '.service_locator.zFcJjKU', 'get_ServiceLocator_ZFcJjKUService', true],
            'App\\Controller\\Frontend\\ProviderController:createProvider' => ['privates', '.service_locator.GQZbvNR', 'get_ServiceLocator_GQZbvNRService', true],
            'App\\Controller\\Frontend\\ProviderController:searchProviders' => ['privates', '.service_locator.T6GxgJA', 'get_ServiceLocator_T6GxgJAService', true],
            'App\\Controller\\Frontend\\TagController:createTag' => ['privates', '.service_locator.GQZbvNR', 'get_ServiceLocator_GQZbvNRService', true],
            'App\\Controller\\Frontend\\TagController:searchTags' => ['privates', '.service_locator.EbJBY34', 'get_ServiceLocator_EbJBY34Service', true],
            'App\\Controller\\RegistrationController:register' => ['privates', '.service_locator.spC.Z_T', 'get_ServiceLocator_SpC_ZTService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:terminate' => ['privates', '.service_locator.bRdave9', 'get_ServiceLocator_BRdave9Service', true],
        ], [
            'App\\Controller\\AuthController::login' => '?',
            'App\\Controller\\Frontend\\ProviderController::createProvider' => '?',
            'App\\Controller\\Frontend\\ProviderController::searchProviders' => '?',
            'App\\Controller\\Frontend\\TagController::createTag' => '?',
            'App\\Controller\\Frontend\\TagController::searchTags' => '?',
            'App\\Controller\\RegistrationController::register' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\AuthController:login' => '?',
            'App\\Controller\\Frontend\\ProviderController:createProvider' => '?',
            'App\\Controller\\Frontend\\ProviderController:searchProviders' => '?',
            'App\\Controller\\Frontend\\TagController:createTag' => '?',
            'App\\Controller\\Frontend\\TagController:searchTags' => '?',
            'App\\Controller\\RegistrationController:register' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}
