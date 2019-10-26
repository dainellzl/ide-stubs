<?php

namespace Phalcon\Logger\Formatter;

use Phalcon\Logger\Item;

/**
 * Phalcon\Logger\FormatterInterface
 *
 * This interface must be implemented by formatters in Phalcon\Logger
 */
interface FormatterInterface
{

    /**
     * Applies a format to an item
     *
     * @param \Phalcon\Logger\Item $item
     * @return string|array
     */
    public function format(\Phalcon\Logger\Item $item);

}
