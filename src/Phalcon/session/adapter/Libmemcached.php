<?php

namespace Phalcon\Session\Adapter;

use Phalcon\Storage\AdapterFactory;
use Phalcon\Session\Adapter\AbstractAdapter;

/**
 * Phalcon\Session\Adapter\Libmemcached
 */
class Libmemcached extends AbstractAdapter
{

    /**
     * Constructor
     *
     * @param \Phalcon\Storage\AdapterFactory $factory
     * @param array $options
     */
    public function __construct(\Phalcon\Storage\AdapterFactory $factory, array $options = array())
    {
    }

}
