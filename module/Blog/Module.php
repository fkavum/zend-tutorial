<?php

namespace Blog;

use Zend\ModuleManager\Feature\AutoloaderProviderInterface;
use Zend\ModuleManager\Feature\ConfigProviderInterface;
use Zend\ModuleManager\Feature\ServiceProviderInterface;

class Module implements ConfigProviderInterface,ServiceProviderInterface,AutoloaderProviderInterface
{
    public function getAutoloaderConfig()
    {
        return array(
          'Zend\Loader\StandardAutoLoader' => array(
              'namespaces' => array(
                __NAMESPACE__ => __DIR__.'/src/'.__NAMESPACE__,
              ),
          ),
        );
    }

    public function getConfig()
    {
        return include __DIR__.'/config/module.config.php';
    }

    public function getServiceConfig()
    {
        return include __DIR__.'config/service.config.php';
    }


}