<?php

namespace HMLB\UserBundle\Message;

use HMLB\UserBundle\User\User;

/**
 * Initiator of this kind of message is traceable.
 *
 * @author Hugues Maignol <hugues@hmlb.fr>
 */
interface TraceableMessage
{
    /**
     * @param User $user
     *
     * @return self
     */
    public function hasBeenInitiatedBy(User $user);

    /**
     * @return User
     */
    public function getMessageInitiator();
}
