<?php

namespace ContainerTaTHSxT;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_6YK09WJService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.6YK09WJ' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.6YK09WJ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'objectifRepository' => ['privates', 'App\\Repository\\ObjectifRepository', 'getObjectifRepositoryService', true],
        ], [
            'objectifRepository' => 'App\\Repository\\ObjectifRepository',
        ]);
    }
}
