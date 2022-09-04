<?php

namespace ContainerB99DRRl;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFosElastica_ConfigManagerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'fos_elastica.config_manager' shared service.
     *
     * @return \FOS\ElasticaBundle\Configuration\ConfigManager
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/elastica-bundle/src/Configuration/ManagerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/elastica-bundle/src/Configuration/ConfigManager.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/elastica-bundle/src/Configuration/Source/SourceInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/elastica-bundle/src/Configuration/Source/ContainerSource.php';

        return $container->privates['fos_elastica.config_manager'] = new \FOS\ElasticaBundle\Configuration\ConfigManager([0 => new \FOS\ElasticaBundle\Configuration\Source\ContainerSource(['images' => ['elasticsearch_name' => 'images', 'reference' => ($container->privates['fos_elastica.index.images'] ?? $container->load('getFosElastica_Index_ImagesService')), 'model' => 'App\\Entity\\Images', 'name' => 'images', 'settings' => [], 'index_prototype' => [], 'use_alias' => false, 'mapping' => ['dynamic_templates' => [], 'properties' => ['id' => [], 'image_name' => [], 'provider' => ['type' => 'object', 'properties' => ['provider_name' => NULL]], 'tags' => ['type' => 'object', 'properties' => ['tag_name' => NULL]]]], 'config' => ['analyzer' => NULL, 'search_analyzer' => NULL, 'dynamic' => NULL, 'date_detection' => NULL, 'dynamic_date_formats' => [], 'numeric_detection' => NULL]], 'tags' => ['elasticsearch_name' => 'tags', 'reference' => ($container->privates['fos_elastica.index.tags'] ?? $container->load('getFosElastica_Index_TagsService')), 'model' => 'App\\Entity\\Tags', 'name' => 'tags', 'settings' => [], 'index_prototype' => [], 'use_alias' => false, 'mapping' => ['dynamic_templates' => [], 'properties' => ['tag_name' => [], 'images' => ['type' => 'object', 'properties' => ['image_name' => NULL]]]], 'config' => ['analyzer' => NULL, 'search_analyzer' => NULL, 'dynamic' => NULL, 'date_detection' => NULL, 'dynamic_date_formats' => [], 'numeric_detection' => NULL]], 'provider' => ['elasticsearch_name' => 'provider', 'reference' => ($container->privates['fos_elastica.index.provider'] ?? $container->load('getFosElastica_Index_ProviderService')), 'model' => 'App\\Entity\\Providers', 'name' => 'provider', 'settings' => [], 'index_prototype' => [], 'use_alias' => false, 'mapping' => ['dynamic_templates' => [], 'properties' => ['provider_name' => [], 'images' => ['type' => 'object', 'properties' => ['image_name' => NULL]]]], 'config' => ['analyzer' => NULL, 'search_analyzer' => NULL, 'dynamic' => NULL, 'date_detection' => NULL, 'dynamic_date_formats' => [], 'numeric_detection' => NULL]]])]);
    }
}
