<?php

namespace HMLB\UserBundle\Event;

use HMLB\DDD\Entity\Identity;

/**
 * UserEnabled.
 *
 * @author Hugues Maignol <hugues.maignol@kitpages.fr>
 */
class UserEnabled extends UserEvent
{
    /**
     * @var Identity
     */
    protected $userId;

    /**
     * @var string
     */
    protected $email;

    /**
     * @var string
     */
    protected $username;

    public function __construct(Identity $userId, string $email, string $username)
    {
        $this->userId = $userId;
        $this->email = $email;
        $this->username = $username;
    }

    /**
     * @return Identity
     */
    public function getUserId(): Identity
    {
        return $this->userId;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }
}
