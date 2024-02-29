<?php

namespace ContainerNTMSer1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_GeTx0xSService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.GeTx0xS' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.GeTx0xS'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'taskRepository' => ['privates', 'App\\Repository\\TaskRepository', 'getTaskRepositoryService', true],
            'toDoListRepository' => ['privates', 'App\\Repository\\ToDoListRepository', 'getToDoListRepositoryService', true],
        ], [
            'taskRepository' => 'App\\Repository\\TaskRepository',
            'toDoListRepository' => 'App\\Repository\\ToDoListRepository',
        ]);
    }
}
