<?php

namespace ContainerBjCbsSB;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_AccessMapService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'security.access_map' shared service.
     *
     * @return \Symfony\Component\Security\Http\AccessMap
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'AccessMapInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'AccessMap.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-foundation'.\DIRECTORY_SEPARATOR.'RequestMatcherInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-foundation'.\DIRECTORY_SEPARATOR.'RequestMatcher.php';

        $container->privates['security.access_map'] = $instance = new \Symfony\Component\Security\Http\AccessMap();

        $a = new \Symfony\Component\HttpFoundation\RequestMatcher('^/accueil$');

        $instance->add($a, [0 => 'ROLE_GESTION_STOCK', 1 => 'ROLE_VENDEUR'], NULL);
        $instance->add($a, [0 => 'IS_AUTHENTICATED_FULLY', 1 => 'ROLE_USER'], NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/Produit/liste$'), [0 => 'ROLE_GESTION_STOCK'], NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/Categorie/liste$'), [0 => 'ROLE_GESTION_STOCK'], NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/Entree/liste$'), [0 => 'ROLE_GESTION_STOCK'], NULL);
        $instance->add(new \Symfony\Component\HttpFoundation\RequestMatcher('^/Sortie/liste$'), [0 => 'ROLE_GESTION_STOCK', 1 => 'ROLE_VENDEUR'], NULL);

        return $instance;
    }
}