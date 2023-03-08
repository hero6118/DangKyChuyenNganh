<?php
$routes =[
    '/'=>[
        'controller'=>'HomeController',
        'action'=>'Index'
    ],
    'register'=>[
        'controller'=>'MajorController',
        'action'=>'Index'

    ],
    'list'=>[
        'controller'=>'MajorController',
        'action'=>'getList'
        
    ],
    'edit'=>[
        'controller'=>'MajorController',
        'action'=>'edit'
        
    ],
    'Add'=>[
        'controller'=>'MajorController',
        'action'=>'add'
        
    ],
    'delete'=>[
        'controller'=>'MajorController',
        'action'=>'delete'
        
    ],
    'update'=>[
        'controller'=>'MajorController',
        'action'=>'update'
        
    ],

];