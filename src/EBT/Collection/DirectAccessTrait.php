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
 * DirectAccessTrait
 */
trait DirectAccessTrait
{
    /**
     * @param mixed $index
     * @param mixed $defaultValue Will be returned if the index is not present at collection
     *
     * @return mixed Null if not present
     */
    public function get($index, $defaultValue = null)
    {
        $index = (string) $index;

        $collection = $this->getCollection();

        return isset($collection[$index]) ? $collection[$index] : $defaultValue;
    }

    /**
     * @param mixed $index
     *
     * @return mixed
     *
     * @throws ResourceNotFoundException
     */
    public function getOrException($index)
    {
        $index = (string) $index;
        $value = $this->get($index, null);
        if ($value === null) {
            throw new ResourceNotFoundException(sprintf('Get failed, index "%s" not found.', $index));
        }

        return $value;
    }

    /**
     * @return array
     */
    abstract protected function &getCollection();
}
