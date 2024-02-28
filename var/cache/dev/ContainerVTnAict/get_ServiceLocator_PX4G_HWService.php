<?php

namespace ContainerVTnAict;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_PX4G_HWService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.PX4G.HW' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.PX4G.HW'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'calendrierTelRepository' => ['privates', 'App\\Repository\\CalendrierTelRepository', 'getCalendrierTelRepositoryService', true],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'calendrierTelRepository' => 'App\\Repository\\CalendrierTelRepository',
            'entityManager' => '?',
        ]);
    }
}
