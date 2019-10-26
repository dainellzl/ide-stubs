<?php

namespace Phalcon\Http\Message\Stream;

use Phalcon\Http\Message\Stream;

/**
 * Describes a data stream from "php://temp"
 *
 * Typically, an instance will wrap a PHP stream; this interface provides
 * a wrapper around the most common operations, including serialization of
 * the entire stream to a string.
 */
class Temp extends Stream
{

    /**
     * Constructor
     *
     * @param mixed $mode
     */
    public function __construct($mode = 'rb')
    {
    }

}
