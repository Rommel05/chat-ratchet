<?php

namespace ContainerOzu1MX7;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getIconService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'EasyCorp\Bundle\EasyAdminBundle\Twig\Component\Icon' service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\Twig\Component\Icon
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/Twig/Component/Icon.php';

        $container->factories['service_container']['EasyCorp\\Bundle\\EasyAdminBundle\\Twig\\Component\\Icon'] = function () use ($container) {
            return new \EasyCorp\Bundle\EasyAdminBundle\Twig\Component\Icon(($container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Provider\\AdminContextProvider'] ?? $container->getAdminContextProviderService()));
        };

        return $container->factories['service_container']['EasyCorp\\Bundle\\EasyAdminBundle\\Twig\\Component\\Icon']();
    }
}
