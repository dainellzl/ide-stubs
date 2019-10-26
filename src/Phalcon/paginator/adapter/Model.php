<?php

namespace Phalcon\Paginator\Adapter;

use Phalcon\Paginator\Exception;
use Phalcon\Paginator\Adapter\AbstractAdapter;
use Phalcon\Paginator\RepositoryInterface;

/**
 * Phalcon\Paginator\Adapter\Model
 *
 * This adapter allows to paginate data using a Phalcon\Mvc\Model resultset as a
 * base.
 *
 * ```php
 * use Phalcon\Paginator\Adapter\Model;
 *
 * $paginator = new Model(
 *     [
 *         "data"  => Robots::find(),
 *         "limit" => 25,
 *         "page"  => $currentPage,
 *     ]
 * );
 *
 * $paginate = $paginator->paginate();
 * ```
 */
class Model extends AbstractAdapter
{

    /**
     * Returns a slice of the resultset to show in the pagination
     *
     * @return \Phalcon\Paginator\RepositoryInterface
     */
    public function paginate(): RepositoryInterface
    {
    }

}
