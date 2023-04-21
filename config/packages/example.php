<?php

declare(strict_types=1);

namespace Symfony\Component\DependencyInjection\Loader\Configurator;

return static function (ContainerConfigurator $container) {
    $container->parameters()
        ->set('test1', '%env(MY_EXAMPLE_ENV)%')
    ;
};
