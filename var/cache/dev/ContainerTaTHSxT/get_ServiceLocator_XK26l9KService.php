<?php

namespace ContainerTaTHSxT;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_XK26l9KService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.XK26l9K' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.XK26l9K'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'obligationFamilialeRepository' => ['privates', 'App\\Repository\\ObligationFamilialeRepository', 'getObligationFamilialeRepositoryService', true],
            'obligationFamilialeTempoRepository' => ['privates', 'App\\Repository\\ObligationFamilialeTempoRepository', 'getObligationFamilialeTempoRepositoryService', true],
            'security' => ['privates', 'security.helper', 'getSecurity_HelperService', true],
        ], [
            'entityManager' => '?',
            'obligationFamilialeRepository' => 'App\\Repository\\ObligationFamilialeRepository',
            'obligationFamilialeTempoRepository' => 'App\\Repository\\ObligationFamilialeTempoRepository',
            'security' => '?',
        ]);
    }
}
