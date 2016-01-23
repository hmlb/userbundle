<?php

namespace HMLB\UserBundle\Event;

use HMLB\DDD\Message\Event\Event;
use HMLB\DDDBundle\Persistence\PersistentMessage;
use HMLB\DDDBundle\Persistence\PersistentMessageCapabilities;

/**
 * UserEvent.
 *
 * @author Hugues Maignol <hugues.maignol@kitpages.fr>
 */
class UserEvent extends Event implements PersistentMessage
{
    use PersistentMessageCapabilities;
}
