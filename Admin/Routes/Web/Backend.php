<?php

use Modules\Job\Controller\BackendController;
use Modules\Job\Models\PermissionState;
use phpOMS\Account\PermissionType;
use phpOMS\Router\RouteVerb;

return [
    '^.*/backend/admin/job/list.*$' => [
        [
            'dest' => '\Modules\Job\Controller\BackendController:viewJobList',
            'verb' => RouteVerb::GET,
            'permission' => [
                'module' => BackendController::MODULE_NAME,
                'type'  => PermissionType::READ,
                'state' => PermissionState::JOB,
            ],
        ],
    ],
    '^.*/backend/admin/job/single.*$' => [
        [
            'dest' => '\Modules\Job\Controller\BackendController:viewJob',
            'verb' => RouteVerb::GET,
            'permission' => [
                'module' => BackendController::MODULE_NAME,
                'type'  => PermissionType::READ,
                'state' => PermissionState::JOB,
            ],
        ],
    ],
    '^.*/backend/admin/job/create.*$' => [
        [
            'dest' => '\Modules\Job\Controller\BackendController:viewJobCreate',
            'verb' => RouteVerb::GET,
            'permission' => [
                'module' => BackendController::MODULE_NAME,
                'type'  => PermissionType::CREATE,
                'state' => PermissionState::JOB,
            ],
        ],
    ],
];
