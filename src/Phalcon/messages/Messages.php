<?php

namespace Phalcon\Messages;

use ArrayAccess;
use Countable;
use Iterator;
use JsonSerializable;
use Phalcon\Messages\Message;
use Phalcon\Messages\Exception;
use Phalcon\Messages\MessageInterface;

/**
 * Represents a collection of messages
 */
class Messages implements \ArrayAccess, \Countable, \Iterator, \JsonSerializable
{
    /**
     * @var int
     */
    protected $position = 0;

    /**
     * @var array
     */
    protected $messages;


    /**
     * Phalcon\Messages\Messages constructor
     *
     * @param array $messages
     */
    public function __construct(array $messages = array())
    {
    }

    /**
     * Appends a message to the collection
     *
     * ```php
     * $messages->appendMessage(
     *     new \Phalcon\Messages\Message("This is a message")
     * );
     * ```
     *
     * @param \Phalcon\Messages\MessageInterface $message
     */
    public function appendMessage(\Phalcon\Messages\MessageInterface $message)
    {
    }

    /**
     * Appends an array of messages to the collection
     *
     * ```php
     * $messages->appendMessages($messagesArray);
     * ```
     *
     * @param \Phalcon\Messages\MessageInterface[] messages
     * @param mixed $messages
     * @param \Phalcon\Messages\MessageInterface  [] messages
     */
    public function appendMessages($messages)
    {
    }

    /**
     * Returns the number of messages in the list
     *
     * @return int
     */
    public function count(): int
    {
    }

    /**
     * Returns the current message in the iterator
     *
     * @return \Phalcon\Messages\MessageInterface
     */
    public function current(): MessageInterface
    {
    }

    /**
     * Filters the message collection by field name
     *
     * @param string $fieldName
     * @return array
     */
    public function filter(string $fieldName): array
    {
    }

    /**
     * Returns serialised message objects as array for json_encode. Calls
     * jsonSerialize on each object if present
     *
     * ```php
     * $data = $messages->jsonSerialize();
     * echo json_encode($data);
     * ```
     *
     * @return array
     */
    public function jsonSerialize(): array
    {
    }

    /**
     * Returns the current position/key in the iterator
     *
     * @return int
     */
    public function key(): int
    {
    }

    /**
     * Moves the internal iteration pointer to the next position
     */
    public function next()
    {
    }

    /**
     * Checks if an index exists
     *
     * ```php
     * var_dump(
     *     isset($message["database"])
     * );
     * ```
     *
     * @param int $index
     * @return bool
     */
    public function offsetExists($index): bool
    {
    }

    /**
     * Gets an attribute a message using the array syntax
     *
     * ```php
     * print_r(
     *     $messages[0]
     * );
     * ```
     *
     * @param mixed $index
     * @return mixed
     */
    public function offsetGet($index)
    {
    }

    /**
     * Sets an attribute using the array-syntax
     *
     * ```php
     * $messages[0] = new \Phalcon\Messages\Message("This is a message");
     * ```
     *
     * @param \Phalcon\Messages\Message $message
     * @param mixed $index
     */
    public function offsetSet($index, $message)
    {
    }

    /**
     * Removes a message from the list
     *
     * ```php
     * unset($message["database"]);
     * ```
     *
     * @param mixed $index
     */
    public function offsetUnset($index)
    {
    }

    /**
     * Rewinds the internal iterator
     */
    public function rewind()
    {
    }

    /**
     * Check if the current message in the iterator is valid
     *
     * @return bool
     */
    public function valid(): bool
    {
    }

}
