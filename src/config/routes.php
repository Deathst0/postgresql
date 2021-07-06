<?php
    return array(
        //UsersController
        'user/filter/([0-9]+)' => 'users/filter/$1', //actionFilter
        'user/edit/([0-9]+)' => 'users/edit/$1', //actionEdit
        'user/delete/([0-9]+)' => 'users/delete/$1', //actionDelete
        'user/create' => 'users/create', //actionCreate
        'user/view/([0-9]+)' => 'users/view/$1', //actionView
        'users' => 'users/index', //actionIndex
        //departmentController
        'department/view/([0-9]+)' => 'departments/view/$1', //actionView
        'department/edit/([0-9]+)' => 'departments/edit/$1', //actionEdit
        'department/create' => 'departments/create', //actionCreate
        'department/delete/([0-9]+)' => 'departments/delete/$1', //actionDelete
        'departments' => 'departments/index', //actionIndex
    );