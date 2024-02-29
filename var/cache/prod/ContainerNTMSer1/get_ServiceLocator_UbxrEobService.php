<?php

namespace ContainerNTMSer1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_UbxrEobService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.UbxrEob' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.UbxrEob'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'fondUrgenceRepository' => ['privates', 'App\\Repository\\FondUrgenceRepository', 'getFondUrgenceRepositoryService', true],
            'journalierRepository' => ['privates', 'App\\Repository\\JournalierRepository', 'getJournalierRepositoryService', true],
            'mesRevenusRepository' => ['privates', 'App\\Repository\\MesRevenusRepository', 'getMesRevenusRepositoryService', true],
            'objectifFinanceLoisirRepository' => ['privates', 'App\\Repository\\ObjectifFinanceLoisirRepository', 'getObjectifFinanceLoisirRepositoryService', true],
            'security' => ['privates', 'security.helper', 'getSecurity_HelperService', true],
        ], [
            'entityManager' => '?',
            'fondUrgenceRepository' => 'App\\Repository\\FondUrgenceRepository',
            'journalierRepository' => 'App\\Repository\\JournalierRepository',
            'mesRevenusRepository' => 'App\\Repository\\MesRevenusRepository',
            'objectifFinanceLoisirRepository' => 'App\\Repository\\ObjectifFinanceLoisirRepository',
            'security' => '?',
        ]);
    }
}
