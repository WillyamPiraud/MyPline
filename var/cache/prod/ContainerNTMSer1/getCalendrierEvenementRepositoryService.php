<?php

namespace ContainerNTMSer1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCalendrierEvenementRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\CalendrierEvenementRepository' shared autowired service.
     *
     * @return \App\Repository\CalendrierEvenementRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\CalendrierEvenementRepository'] = new \App\Repository\CalendrierEvenementRepository(($container->services['doctrine'] ?? self::getDoctrineService($container)));
    }
}
