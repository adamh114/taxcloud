<?php

namespace TaxCloud;

use Zend\Mvc\MvcEvent;
use Zend\ModuleManager\ModuleEvent;
use Zend\ModuleManager\EventInterface;

class Module
{

    public function init(\Zend\ModuleManager\ModuleManager $moduleManager)
    {

    }
    public function onBootstrap(MvcEvent $e)
    {

    }

    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\ClassMapAutoloader' => array(
                __DIR__ . '/autoload_classmap.php',
            ),
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        );
    }

    public function getConfig()
    {
        return array(); // include __DIR__ . '/config/module.config.php';
    }

    public function getServiceConfig()
    {
        return array(
            'factories' => array(
            ),
        );
    }
}