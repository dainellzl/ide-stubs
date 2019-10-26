<?php

namespace Phalcon\Logger;

/**
 * Phalcon\Logger\Item
 *
 * Represents each item in a logging transaction
 */
class Item
{

    protected $context;

    /**
     * Log message
     *
     * @var string
     */
    protected $message;

    /**
     * Log message
     *
     * @var string
     */
    protected $name;

    /**
     * Log timestamp
     *
     * @var integer
     */
    protected $time;

    /**
     * Log type
     *
     * @var integer
     */
    protected $type;



    public function getContext()
    {
    }

    /**
     * Log message
     *
     * @return string
     */
    public function getMessage(): string
    {
    }

    /**
     * Log message
     *
     * @return string
     */
    public function getName(): string
    {
    }

    /**
     * Log timestamp
     *
     * @return integer
     */
    public function getTime()
    {
    }

    /**
     * Log type
     *
     * @return integer
     */
    public function getType()
    {
    }

    /**
     * Phalcon\Logger\Item constructor
     *
     * @param string $message
     * @param string $name
     * @param int $type
     * @param int $time
     * @param mixed $context
     */
    public function __construct(string $message, string $name, int $type, int $time = 0, $context = array())
    {
    }

}
