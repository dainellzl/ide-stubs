<?php

namespace Phalcon\Acl\Adapter;

use Phalcon\Events\ManagerInterface;
use Phalcon\Events\EventsAwareInterface;

/**
 * Adapter for Phalcon\Acl adapters
 */
abstract class AbstractAdapter implements \Phalcon\Acl\Adapter\AdapterInterface, \Phalcon\Events\EventsAwareInterface
{
    /**
     * Active access which the list is checking if some role can access it
     *
     * @var string
     */
    protected $activeAccess;

    /**
     * Access Granted
     *
     * @var bool
     */
    protected $accessGranted = false;

    /**
     * Role which the list is checking if it's allowed to certain
     * component/access
     *
     * @var string
     */
    protected $activeRole;

    /**
     * Component which the list is checking if some role can access it
     *
     * @var string
     */
    protected $activeComponent;

    /**
     * Default access
     *
     * @var bool
     */
    protected $defaultAccess = false;

    /**
     * Events manager
     *
     * @var mixed
     */
    protected $eventsManager;


    /**
     * Active access which the list is checking if some role can access it
     *
     * @return string
     */
    public function getActiveAccess(): string
    {
    }

    /**
     * Role which the list is checking if it's allowed to certain
     *
     * component/access
     *
     * @return string
     */
    public function getActiveRole(): string
    {
    }

    /**
     * Component which the list is checking if some role can access it
     *
     * @return string
     */
    public function getActiveComponent(): string
    {
    }

    /**
     * Returns the default ACL access level
     *
     * @return int
     */
    public function getDefaultAction(): int
    {
    }

    /**
     * Returns the internal event manager
     *
     * @return \Phalcon\Events\ManagerInterface
     */
    public function getEventsManager(): ManagerInterface
    {
    }

    /**
     * Sets the default access level (Phalcon\Acl::ALLOW or Phalcon\Acl::DENY)
     *
     * @param int $defaultAccess
     */
    public function setDefaultAction(int $defaultAccess)
    {
    }

    /**
     * Sets the events manager
     *
     * @param \Phalcon\Events\ManagerInterface $eventsManager
     */
    public function setEventsManager(\Phalcon\Events\ManagerInterface $eventsManager)
    {
    }

}
