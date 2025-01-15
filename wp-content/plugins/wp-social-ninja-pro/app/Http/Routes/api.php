<?php

/**
 * @var $router WPFluent\Http\Router
 */

use WPSocialReviewsPro\App\Http\Controllers\ManagersController;

$router->prefix('pro')->withPolicy('SettingsPolicy')->group(function ($router) {
    $router->group(['prefix' => 'settings'], function ($router) {
        $router->get('/managers', [ManagersController::class, 'getManagers']);
        $router->post('/managers', [ManagersController::class, 'addManagers']);
        $router->put('/managers', [ManagersController::class, 'updateManagers']);
        $router->delete('/managers/{id}', [ManagersController::class, 'removeManagers'])->int('id');

        // $router->get('/managers', 'WPSocialReviewsPro\App\Http\Controllers\ManagersController@getManagers');
//        $router->post('/managers', 'WPSocialReviewsPro\App\Http\Controllers\ManagersController@addManagers');
//        $router->put('/managers', 'WPSocialReviewsPro\App\Http\Controllers\ManagersController@updateManagers');
//        $router->delete('/managers/{id}', 'WPSocialReviewsPro\App\Http\Controllers\ManagersController@removeManagers')->int('id');
    });
});

