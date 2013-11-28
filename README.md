# Collection #

A set of interfaces and traits to speed up the creation of collections.

[![Latest Stable Version](https://poser.pugx.org/ebidtech/collection/v/stable.png)](https://packagist.org/packages/ebidtech/collection)
 [![Build Status](https://travis-ci.org/ebidtech/collection.png?branch=master)](https://travis-ci.org/ebidtech/collection) [![Coverage Status](https://coveralls.io/repos/ebidtech/collection/badge.png?branch=master)](https://coveralls.io/r/ebidtech/collection?branch=master) [![Dependency Status](https://www.versioneye.com/user/projects/52977b39632bac9f3c000002/badge.png)](https://www.versioneye.com/user/projects/52977b39632bac9f3c000002)

## Requirements ##

* PHP >= 5.4

## Installation ##

The recommended way to install is through composer.

Just create a `composer.json` file for your project:

``` json
{
    "require": {
        "ebidtech/collection": "@stable"
    }
}
```

**Tip:** browse [`ebidtech/collection`](https://packagist.org/packages/ebidtech/collection) page to choose a stable version to use, avoid the `@stable` meta constraint.

And run these two commands to install it:

```bash
$ curl -sS https://getcomposer.org/installer | php
$ composer install
```

Now you can add the autoloader, and you will have access to the library:

```php
<?php

require 'vendor/autoload.php';
```

## Usage ##

**Collection class example**:

```php
use EBT\Collection\CollectionDirectInterface;
use EBT\Collection\CountableTrait;
use EBT\Collection\DirectAccessTrait;
use EBT\Collection\EmptyTrait;
use EBT\Collection\GetCollectionTrait;
use EBT\Collection\IterableTrait;

/**
 * TestCollection
 */
class TestCollection implements CollectionDirectInterface
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
}
```

From outside you can:
* iterate (due to IterableTrait)
* direct access using get() (due to DirectAccessTrait)
* use count() (due to CountableTrait)

**Outside access example**:

```php
$collection = new TestCollection();
echo count($collection); // will print 3
echo $collection->get('test1');  // will print val1
foreach ($collection as $key => $val) {
    // will result in:
    // test1 val1
    // test2 val2
    // test3 val3
    echo sprintf("%s %s", $key, $val);
}
```

Notes:
* Traits use have an abstract getCollection() method that needs to be implemented on collection class, the GetCollectionTrait makes a simple implementation, you can override it if the property that holds the internal array is not named collection

## Contributing ##

See CONTRIBUTING file.

## Credits ##

* Ebidtech developer team, collection Lead developer [Eduardo Oliveira](https://github.com/entering) (eduardo.oliveira@ebidtech.com).
* [All contributors](https://github.com/ebidtech/collection/contributors)

## License ##

Collection library is released under the MIT License. See the bundled LICENSE file for details.

