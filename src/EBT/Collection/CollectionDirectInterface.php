<?php

/*
 * This file is a part of the Collection library.
 *
 * (c) 2013 Emailbidding
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace EBT\Collection;

/**
 * CollectionDirectInterface
 *
 * The CollectionInterface plus methods to allow direct access base on index.
 */
interface CollectionDirectInterface extends CollectionInterface
{
    /**
     * @param mixed $index
     *
     * @return mixed Null if not present
     */
    public function get($index);
}
