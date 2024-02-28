<?php

namespace ContainerTaTHSxT;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_SRKAw_PService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.sRKAw.P' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.sRKAw.P'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'calendrierEvenementRepository' => ['privates', 'App\\Repository\\CalendrierEvenementRepository', 'getCalendrierEvenementRepositoryService', true],
            'security' => ['privates', 'security.helper', 'getSecurity_HelperService', true],
        ], [
            'calendrierEvenementRepository' => 'App\\Repository\\CalendrierEvenementRepository',
            'security' => '?',
        ]);
    }
}
