<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

$base = basename($_SERVER['SCRIPT_FILENAME']);

return [
    'navUpdater' => [
        [
            'id'          => 'root',
            'step'        => 0,
            'views'       => ['root' => []],
        ],
        [
            'id'          => 'root.home',
            'url'         => 'home',
            'templateUrl' => "$base/home",
            'title'       => 'Home',
            'header'      => 'Home',
            'nav'         => false,
            'default'     => true,
            'noMenu'      => true,
            'order'       => -1,
        ],
        [
            'id'          => 'root.cm',
            'url'         => 'component-grid',
            'templateUrl' => "$base/component-grid",
            'title'       => "Component Grid",
            'controller'  => 'componentGridController',
            'nav'         => false,
            'noMenu'      => true,
            'order'       => 1,
            'type'        => 'cm'
        ],
        [
            'id'          => 'root.su',
            'url'         => 'select-version',
            'templateUrl' => "$base/select-version",
            'title'       => 'Select Version',
            'controller'  => 'selectVersionController',
            'header'      => 'Step 1: Select Version',
            'order'       => 1,
            'nav'         => true,
            'type'        => 'su'
        ],
        [
            'id'          => 'root.readiness-check-cm',
            'url'         => 'readiness-check-updater',
            'templateUrl' => "{$base}/readiness-check-updater",
            'title'       => "Readiness \n Check",
            'header'      => 'Step 1: Readiness Check',
            'nav'         => true,
            'order'       => 2,
            'type'        => 'cm'
        ],
        [
            'id'          => 'root.readiness-check-cm.progress',
            'url'         => 'readiness-check-updater/progress',
            'templateUrl' => "$base/readiness-check-updater/progress",
            'title'       => 'Readiness Check',
            'header'      => 'Step 1: Readiness Check',
            'controller'  => 'readinessCheckController',
            'nav'         => false,
            'order'       => 3,
            'type'        => 'cm'
        ],
        [
            'id'          => 'root.create-backup-cm',
            'url'         => 'create-backup',
            'templateUrl' => "$base/create-backup",
            'title'       => "Create \n Backup",
            'header'      => 'Step 2: Create Backup',
            'controller'  => 'createBackupController',
            'nav'         => true,
            'validate'    => true,
            'order'       => 4,
            'type'        => 'cm'
        ],
        [
            'id'          => 'root.create-backup-cm.progress',
            'url'         => 'create-backup/progress',
            'templateUrl' => "$base/complete-backup/progress",
            'title'       => "Create \n Backup",
            'header'      => 'Step 2: Create Backup',
            'controller'  => 'completeBackupController',
            'nav'         => false,
            'order'       => 5,
            'type'        => 'cm'
        ],
        [
            'id'          => 'root.component-update',
            'url'         => 'component-update',
            'templateUrl' => "$base/component-update",
            'controller'  => 'componentUpdateController',
            'title'       => "Component \n Update",
            'header'      => 'Step 3: Component Update',
            'nav'         => true,
            'order'       => 6,
            'type'        => 'cm'
        ],
        [
            'id'          => 'root.component-update-success',
            'url'         => 'component-update-success',
            'templateUrl' => "$base/component-update-success",
            'controller'  => 'componentUpdateSuccessController',
            'order'       => 7,
            'main'        => true,
            'type'        => 'cm'
        ],
        [
            'id'          => 'root.readiness-check-su',
            'url'         => 'readiness-check-updater',
            'templateUrl' => "$base/readiness-check-updater",
            'title'       => 'Readiness Check',
            'controller'  => 'readinessCheckController',
            'header'      => 'Step 2: Readiness Check',
            'order'       => 2,
            'nav'         => true,
            'type'        => 'su'
        ],
        [
            'id'          => 'root.readiness-check-su.progress',
            'url'         => 'readiness-check-updater/progress',
            'templateUrl' => "$base/readiness-check-updater/progress",
            'title'       => 'Readiness Check',
            'header'      => 'Step 2: Readiness Check',
            'controller'  => 'readinessCheckController',
            'nav'         => false,
            'order'       => 3,
            'type'        => 'su'
        ],
        [
            'id'          => 'root.create-backup-su',
            'url'         => 'create-backup',
            'templateUrl' => "$base/create-backup",
            'title'       => 'Create Backup',
            'controller'  => 'createBackupController',
            'header'      => 'Step 3: Create Backup',
            'order'       => 4,
            'nav'         => true,
            'type'        => 'su'
        ],
        [
            'id'          => 'root.create-backup-su.progress',
            'url'         => 'create-backup/progress',
            'templateUrl' => "$base/complete-backup/progress",
            'title'       => "Create \n Backup",
            'header'      => 'Step 3: Create Backup',
            'controller'  => 'completeBackupController',
            'nav'         => false,
            'order'       => 5,
            'type'        => 'su'
        ],
        [
            'id'          => 'root.system-upgrade',
            'url'         => 'system-upgrade',
            'templateUrl' => "$base/system-upgrade",
            'title'       => "System \n Upgrade",
            'controller'  => 'systemUpgradeController',
            'header'      => 'Step 4: System Upgrade',
            'order'       => 6,
            'nav'         => true,
            'type'        => 'su'
        ],
    ],
];
