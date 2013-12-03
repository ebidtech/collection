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
 * DirectAccessInterface allows direct access base on index.
 */
interface DirectAccessInterface
{
    /**
     * @param mixed $index
     * @param mixed $defaultValue Will be returned if the index is not present at collection
     *
     * @return mixed Null if not present
     */
    public function get($index, $defaultValue = null);

    /**
     * @param mixed $index
     *
     * @return mixed
     *
     * @throws ResourceNotFoundException
     */
    public function getOrException($index);
}
