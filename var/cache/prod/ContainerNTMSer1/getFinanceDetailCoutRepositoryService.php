<?php

namespace ContainerNTMSer1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFinanceDetailCoutRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\FinanceDetailCoutRepository' shared autowired service.
     *
     * @return \App\Repository\FinanceDetailCoutRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\FinanceDetailCoutRepository'] = new \App\Repository\FinanceDetailCoutRepository(($container->services['doctrine'] ?? self::getDoctrineService($container)));
    }
}
