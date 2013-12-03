<?php

/*
 * This file is a part of the Collection library.
 *
 * (c) 2013 Ebidtech
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace EBT\Collection\Tests;

use EBT\Collection\CollectionDirectAccessInterface;
use EBT\Collection\CountableTrait;
use EBT\Collection\DirectAccessTrait;
use EBT\Collection\EmptyTrait;
use EBT\Collection\GetCollectionTrait;
use EBT\Collection\IterableTrait;

/**
 * TestCollection
 */
class TestCollection implements CollectionDirectAccessInterface
{
    use CountableTrait;
    use DirectAccessTrait;
    use EmptyTrait;
    use GetCollectionTrait;
    use IterableTrait;

    /**
     * @var array
     */
    protected $collection = array(
        'test1' => 'val1',
        'test2' => 'val2',
        'test3' => 'val3'
    );

    /**
     * @param array|null $collection
     */
    public function __construct($collection = null)
    {
        if (is_array($collection)) {
            $this->collection = $collection;
        }
    }
}
