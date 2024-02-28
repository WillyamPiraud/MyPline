<?php

namespace ContainerVTnAict;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_8N1MyUZService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.8N1MyUZ' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.8N1MyUZ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'calendrierChosesAFaireRepository' => ['privates', 'App\\Repository\\CalendrierChosesAFaireRepository', 'getCalendrierChosesAFaireRepositoryService', true],
            'security' => ['privates', 'security.helper', 'getSecurity_HelperService', true],
        ], [
            'calendrierChosesAFaireRepository' => 'App\\Repository\\CalendrierChosesAFaireRepository',
            'security' => '?',
        ]);
    }
}
