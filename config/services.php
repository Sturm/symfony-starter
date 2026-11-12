<?php

namespace Symfony\Component\DependencyInjection\Loader\Configurator;

return App::config([
    'parameters' => [],
    'services' => [
        'App\\' => [
            'resource' => '../src/',
        ],
    ],
]);
