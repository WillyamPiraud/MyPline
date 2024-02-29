<?php

namespace ContainerNTMSer1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_E30j4FDService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.E30j4FD' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.E30j4FD'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'rendezVousRepository' => ['privates', 'App\\Repository\\RendezVousRepository', 'getRendezVousRepositoryService', true],
        ], [
            'entityManager' => '?',
            'rendezVousRepository' => 'App\\Repository\\RendezVousRepository',
        ]);
    }
}
