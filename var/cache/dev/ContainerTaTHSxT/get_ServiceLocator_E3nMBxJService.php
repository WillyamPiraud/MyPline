<?php

namespace ContainerTaTHSxT;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_E3nMBxJService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.e3nMBxJ' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.e3nMBxJ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'calendrierTelRepository' => ['privates', 'App\\Repository\\CalendrierTelRepository', 'getCalendrierTelRepositoryService', true],
            'security' => ['privates', 'security.helper', 'getSecurity_HelperService', true],
        ], [
            'calendrierTelRepository' => 'App\\Repository\\CalendrierTelRepository',
            'security' => '?',
        ]);
    }
}