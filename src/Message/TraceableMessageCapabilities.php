<?php

namespace HMLB\UserBundle\Message;

use HMLB\UserBundle\User\User;

/**
 * @author Hugues Maignol <hugues@hmlb.fr>
 */
trait TraceableMessageCapabilities
{
    /**
     * The user responsible for the dispatching of a message.
     *
     * @var User
     */
    private $_initiator;

    /**
     * @param User $user
     *
     * @return self
     */
    public function hasBeenInitiatedBy(User $user)
    {
        $this->_initiator = $user;
    }

    /**
     * @return User
     */
    public function getMessageInitiator()
    {
        return $this->_initiator;
    }
}
