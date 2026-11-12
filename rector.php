<?php

declare(strict_types=1);

use Rector\CodeQuality\Rector\Concat\DirnameDirConcatStringToDirectStringPathRector;
use Rector\Config\RectorConfig;

return RectorConfig::configure()
    ->withPaths([
        __DIR__.'/bin',
        __DIR__.'/config',
        __DIR__.'/public',
        __DIR__.'/src',
    ])
    ->withSkip([
        __DIR__.'/config/bundles.php',
        __DIR__.'/config/reference.php',
        DirnameDirConcatStringToDirectStringPathRector::class,
    ])
    ->withCache(__DIR__.'/var/cache/rector')
    ->withPhpSets()
    ->withComposerBased(symfony: true)
    ->withSymfonyContainerXml(__DIR__.'/var/cache/dev/App_KernelDevDebugContainer.xml')
    ->withPreparedSets(
        deadCode: true,
        codeQuality: true,
        typeDeclarations: true,
        earlyReturn: true,
    )
    ->withImportNames(importShortClasses: false, removeUnusedImports: true);
