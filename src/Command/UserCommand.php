<?php

namespace HMLB\UserBundle\Command;

use HMLB\DDD\Message\Command\Command;
use HMLB\DDDBundle\Persistence\PersistentMessage;
use HMLB\DDDBundle\Persistence\PersistentMessageCapabilities;
use HMLB\UserBundle\Message\TraceableMessage;
use HMLB\UserBundle\Message\TraceableMessageCapabilities;

/**
 * UserCommand.
 *
 * @author Hugues Maignol <hugues.maignol@kitpages.fr>
 */
class UserCommand extends Command implements PersistentMessage, TraceableMessage
{
    use PersistentMessageCapabilities;
    use TraceableMessageCapabilities;
}
