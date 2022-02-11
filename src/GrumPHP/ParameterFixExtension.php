<?php

/**
 * Copyright Youwe. All rights reserved.
 * https://www.youweagency.com
 */

declare(strict_types=1);

namespace Youwe\TestingSuite\Composer\GrumPHP;

use GrumPHP\Extension\ExtensionInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;

/**
 * @codeCoverageIgnore
 */
class ParameterFixExtension implements ExtensionInterface
{
    /**
     * Replace placeholders to
     * @param ContainerBuilder $container
     *
     * @return void
     */
    public function load(ContainerBuilder $container): void
    {
        $container->setParameter(
            'tasks',
            $container->resolveEnvPlaceholders(
                $container->getParameter('tasks'),
                true
            )
        );
    }
}
