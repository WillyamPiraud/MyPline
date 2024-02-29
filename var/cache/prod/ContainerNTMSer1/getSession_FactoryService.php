<?php

namespace ContainerNTMSer1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSession_FactoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'session.factory' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\SessionFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->privates['session_listener'] ?? self::getSessionListenerService($container));

        if (isset($container->privates['session.factory'])) {
            return $container->privates['session.factory'];
        }

        return $container->privates['session.factory'] = new \Symfony\Component\HttpFoundation\Session\SessionFactory(($container->services['request_stack'] ??= new \Symfony\Component\HttpFoundation\RequestStack()), new \Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorageFactory($container->parameters['session.storage.options'], ($container->privates['session.handler.native'] ?? $container->load('getSession_Handler_NativeService')), new \Symfony\Component\HttpFoundation\Session\Storage\MetadataBag('_sf2_meta', 0), true), [$a, 'onSessionUsage']);
    }
}
