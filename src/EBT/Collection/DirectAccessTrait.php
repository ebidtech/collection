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
 * DirectAccessTrait
 */
trait DirectAccessTrait
{
    /**
     * @param mixed $index
     *
     * @return mixed Null if not present
     */
    public function get($index)
    {
        $index = (string) $index;

        $collection = $this->getCollection();

        return isset($collection[$index]) ? $collection[$index] : null;
    }

    /**
     * @return array
     */
    abstract protected function &getCollection();
}
