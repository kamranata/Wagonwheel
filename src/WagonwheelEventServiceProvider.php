<?php

namespace Sammyjo20\Wagonwheel;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as EventServiceProvider;

use Illuminate\Mail\Events\MessageSending;
use Sammyjo20\Wagonwheel\Listeners\AppendOnlineMailableUrl;
use Sammyjo20\Wagonwheel\Listeners\CreateOnlineMailable;

class WagonwheelEventServiceProvider extends EventServiceProvider
{
    /**
     * Register our event listeners for Laravel's built in
     * mail message events.
     *
     * @var array[]
     */
    protected $listen = [
        MessageSending::class => [
            CreateOnlineMailable::class,
            AppendOnlineMailableUrl::class,
        ],
    ];
}
