<?php

declare(strict_types=1);

/*
 * @copyright  Copyright (C) 2017,2018,2019,2020,2021,2022,2023 Blue Flame Digital Solutions Limited / Phil Taylor. All rights reserved.
 * @author     Phil Taylor <phil@phil-taylor.com>
 * @see        https://github.com/PhilETaylor/manage.mysites.guru
 * @license    Commercial License - Not For Distribution.
 */

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->extension('twig', [
        'globals'              => [
            'test1' => '%test1%',
        ],
    ]);
};
