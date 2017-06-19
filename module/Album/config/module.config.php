<?php
namespace Album;


return array(
//    'controllers' => array(
//        'factories' => array(
//            Album\Controller\AlbumController::class => Album\Controller\AlbumController::class,
//        ),
//        'invokables' => array(
//            'Album\Controller\Album' => '\Album\Controller\AlbumController',
//        ),
//    ),



    'router' => array(
        'routes' => array(
            'album' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '/album[/:action][/:id]',
                    'constraints' => array(
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => Controller\AlbumController::class,
                        'action'     => 'index',
                    ),
                ),
            ),
        ),
    ),

    'view_manager' => array(
        'template_path_stack' => array(
            'album' => __DIR__ . '/../view',
        ),
    ),
);





