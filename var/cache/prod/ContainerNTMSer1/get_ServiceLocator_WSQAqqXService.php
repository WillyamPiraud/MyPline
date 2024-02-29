<?php

namespace ContainerNTMSer1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_WSQAqqXService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.wSQAqqX' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.wSQAqqX'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'besoinsVitauxRepository' => ['privates', 'App\\Repository\\BesoinsVitauxRepository', 'getBesoinsVitauxRepositoryService', true],
            'security' => ['privates', 'security.helper', 'getSecurity_HelperService', true],
        ], [
            'besoinsVitauxRepository' => 'App\\Repository\\BesoinsVitauxRepository',
            'security' => '?',
        ]);
    }
}
