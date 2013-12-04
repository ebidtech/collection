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

use PHPUnit_Framework_TestCase;

/**
 * CollectionTest
 */
class CollectionTest extends PHPUnit_Framework_TestCase
{
    public function testCount()
    {
        $this->assertCount(3, new TestCollection());
    }

    public function testDirectAccess()
    {
        $collection = new TestCollection();
        $this->assertNull($collection->get('absent'));
        $this->assertEquals('val1', $collection->get('test1'));

        // test with default value
        $this->assertEquals('default', $collection->get('absent', 'default'));
        $this->assertEquals('val1', $collection->get('test1', 'default'));
    }

    public function testDirectAccessGetOrException()
    {
        $collection = new TestCollection();
        $this->assertEquals('val1', $collection->getOrException('test1'));
    }

    public function testDirectAccessHas()
    {
        $collection = new TestCollection();
        $this->assertTrue($collection->has('test1'));
        $this->assertFalse($collection->has('absent'));
    }

    /**
     * @expectedException \EBT\Collection\ResourceNotFoundException
     */
    public function testDirectAccessGetOrExceptionAbsent()
    {
        $collection = new TestCollection();
        $this->assertNull($collection->getOrException('absent'));
    }

    public function testEmpty()
    {
        $this->assertFalse((new TestCollection())->isEmpty());
        $this->assertTrue((new TestCollection(array()))->isEmpty());
    }

    public function testIterable()
    {
        $collectionArr = array(1 => 'val1', 2 => 'val2');
        $collection = new TestCollection($collectionArr);
        foreach ($collection as $key => $val) {
            $this->assertEquals($key, key($collectionArr));
            $this->assertEquals($val, current($collectionArr));
            next($collectionArr);
        }
    }
}
