<?php

namespace ContainerVTnAict;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_HsHXpSbService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.HsHXpSb' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.HsHXpSb'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'fondUrgenceRepository' => ['privates', 'App\\Repository\\FondUrgenceRepository', 'getFondUrgenceRepositoryService', true],
            'mesRevenusRepository' => ['privates', 'App\\Repository\\MesRevenusRepository', 'getMesRevenusRepositoryService', true],
            'objectifFinanceLoisirRepository' => ['privates', 'App\\Repository\\ObjectifFinanceLoisirRepository', 'getObjectifFinanceLoisirRepositoryService', true],
            'security' => ['privates', 'security.helper', 'getSecurity_HelperService', true],
        ], [
            'fondUrgenceRepository' => 'App\\Repository\\FondUrgenceRepository',
            'mesRevenusRepository' => 'App\\Repository\\MesRevenusRepository',
            'objectifFinanceLoisirRepository' => 'App\\Repository\\ObjectifFinanceLoisirRepository',
            'security' => '?',
        ]);
    }
}
