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
 * CountableTrait
 */
trait CountableTrait
{
    /**
     * Number of objects.
     *
     * @return integer
     */
    public function count()
    {
        return count($this->getCollection());
    }

    /**
     * @return array
     */
    abstract protected function &getCollection();
}
