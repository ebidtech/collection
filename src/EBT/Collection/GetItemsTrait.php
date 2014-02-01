<?php

/*
 * This file is a part of the Collection library.
 *
 * (c) 2013 Ebidtech
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace EBT\Collection;

/**
 * GetItemsTrait
 */
trait GetItemsTrait
{
    protected function &getItems()
    {
        return $this->items;
    }
}
