<?php

declare(strict_types=1);

namespace Vdlp\SitemapGenerators\Classes\EventSubscribers;

use Illuminate\Contracts\Events\Dispatcher;
use Vdlp\Sitemap\Classes\Contracts;
use Vdlp\SitemapGenerators\Classes\Contracts\EventSubscriber;
use Vdlp\SitemapGenerators\Classes\EventListeners\RegisterSitemapGenerators;

/**
 * Class SitemapSubscriber
 *
 * @package Vdlp\SitemapGenerators\Classes\EventSubscribers
 */
final class SitemapSubscriber implements EventSubscriber
{
    /**
     * @param Dispatcher $dispatcher
     * @return void
     */
    public function subscribe(Dispatcher $dispatcher): void
    {
        $dispatcher->listen(
            Contracts\SitemapGenerator::GENERATE_EVENT,
            RegisterSitemapGenerators::class
        );
    }
}
