<?php

namespace Phalcon\Storage\Serializer;

use InvalidArgumentException;
use Phalcon\Storage\Serializer\AbstractSerializer;

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
class Base64 extends AbstractSerializer
{

    /**
     * Serializes data
     *
     * @return string
     */
    public function serialize(): string
    {
    }

    /**
     * Unserializes data
     *
     * @param mixed $data
     */
    public function unserialize($data)
    {
    }

}
