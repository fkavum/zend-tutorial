<?php


namespace Portal\Controller;

use Interop\Container\ContainerInterface;
use Interop\Container\Exception\ContainerException;
use Zend\ServiceManager\Exception\ServiceNotCreatedException;
use Zend\ServiceManager\Exception\ServiceNotFoundException;
use Zend\ServiceManager\Factory\FactoryInterface;
use ZFT\User;

class IndexControllerFactory implements FactoryInterface {
    public function __invoke(ContainerInterface $serviceManager, $requestedName, array $options = null)
    {
        $repository = $serviceManager->get(User\Repository::class);

        return new IndexController($repository);
    }


}