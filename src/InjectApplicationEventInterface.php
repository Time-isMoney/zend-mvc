<?php
/**
 * @see       https://github.com/zendframework/zend-mvc for the canonical source repository
 * @copyright Copyright (c) 2005-2019 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   https://github.com/zendframework/zend-mvc/blob/master/LICENSE.md New BSD License
 */

declare(strict_types=1);

namespace Zend\Mvc;

use Zend\EventManager\EventInterface as Event;

interface InjectApplicationEventInterface
{
    /**
     * Compose an Event
     *
     * @param  Event $event
     * @return void
     */
    public function setEvent(Event $event);

    /**
     * Retrieve the composed event
     *
     * @return Event
     */
    public function getEvent();
}
