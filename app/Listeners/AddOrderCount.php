<?php

namespace App\Listeners;


use App\Services\ConfigServices;


class AddOrderCount
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct(ConfigServices $configSer)
    {
        $this->configSer = $configSer;
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        $this->configSer->addOrderCount();

    }
}
