<?php


namespace Portal\Controller;

use Interop\Container\ContainerInterface;
use Interop\Container\Exception\ContainerException;
use Zend\ServiceManager\Exception\ServiceNotCreatedException;
use Zend\ServiceManager\Exception\ServiceNotFoundException;
use Zend\ServiceManager\Factory\FactoryInterface;
use ZFT\User;

class UserRelatedControllerFactory implements FactoryInterface {
    public function __invoke(ContainerInterface $serviceManager, $controllerName, array $options = null)
    {
        if(!class_exists($controllerName)){
            throw new ServiceNotFoundException("Requested controller name '".$controllerName."' does not exist.");

        }


        $repository = $serviceManager->get(User\Repository::class);

        //return new IndexController($repository);
        return new $controllerName($repository);
    }


}