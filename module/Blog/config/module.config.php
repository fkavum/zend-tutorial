<?

namespace  Blog;
use Zend\Router\Http\Literal;
use Zend\Router\Http\Segment;
use Zend\ServiceManager\Factory\InvokableFactory;


return array(

    'router' => [
        'routes' => [

            'blog' => [
                'type'    => Segment::class,
                'options' => [
                    'route'    => '/Blog[/:action]',
                    'defaults' => [
                        //'__NAMESPACE__' => 'Blog\Controller',
                        'controller' => Controller\IndexController::class, //Index
                        'action'     => 'index', //Index
                    ],
                ],
            ],
        ],
    ],


    'controllers' => [
        'factories' => [
            Controller\IndexController::class => InvokableFactory::class,
        ],
        'invokables' => array(
            'Blog\Controller\Index' => Controller\IndexController::class
        )
    ],



    'view_manager' => [

        'template_path_stack' => [
            __DIR__ . '/../view',
        ],
    ],


);