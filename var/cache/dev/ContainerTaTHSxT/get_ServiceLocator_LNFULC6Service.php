<?php

namespace ContainerTaTHSxT;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_LNFULC6Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.LNFULC6' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.LNFULC6'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'objectifRepository' => ['privates', 'App\\Repository\\ObjectifRepository', 'getObjectifRepositoryService', true],
            'security' => ['privates', 'security.helper', 'getSecurity_HelperService', true],
        ], [
            'objectifRepository' => 'App\\Repository\\ObjectifRepository',
            'security' => '?',
        ]);
    }
}
