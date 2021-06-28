<?php

namespace Container9uUSJdq;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTwig_Runtime_MarkdownService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'twig.runtime.markdown' shared service.
     *
     * @return \Twig\Extra\Markdown\MarkdownRuntime
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/twig/markdown-extra/MarkdownRuntime.php';
        include_once \dirname(__DIR__, 4).'/vendor/twig/markdown-extra/MarkdownInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/twig/markdown-extra/DefaultMarkdown.php';

        return $container->privates['twig.runtime.markdown'] = new \Twig\Extra\Markdown\MarkdownRuntime(new \Twig\Extra\Markdown\DefaultMarkdown());
    }
}
