<?php

namespace Phalcon\Html;

use Phalcon\Escaper;
use Phalcon\Escaper\EscaperInterface;
use Phalcon\Factory\AbstractFactory;

/**
 * ServiceLocator implementation for Tag helpers
 */
class TagFactory extends AbstractFactory
{
    /**
     * @var EscaperInterface
     */
    private $escaper;


    /**
     * TagFactory constructor.
     *
     * @param \Phalcon\Escaper\EscaperInterface $escaper
     * @param array $services
     */
    public function __construct(\Phalcon\Escaper\EscaperInterface $escaper, array $services = array())
    {
    }

    /**
     * @param string $name *
     * @return mixed
     * @throws Exception
     */
    public function newInstance(string $name)
    {
    }

    /**
     * @return array
     */
    protected function getAdapters(): array
    {
    }

}
