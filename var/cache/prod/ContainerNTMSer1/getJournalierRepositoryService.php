<?php

namespace ContainerNTMSer1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getJournalierRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\JournalierRepository' shared autowired service.
     *
     * @return \App\Repository\JournalierRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\JournalierRepository'] = new \App\Repository\JournalierRepository(($container->services['doctrine'] ?? self::getDoctrineService($container)));
    }
}
