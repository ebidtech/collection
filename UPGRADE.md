# Upgrade #

## From 1.* to 2.* ##

At 2.* the GetCollectionTrait is removed and all the traits call a getItems instead.

### 1.* Way ####

```php
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
}
```

### 2.* Way ###

```php
use EBT\Collection\CollectionDirectAccessInterface;
use EBT\Collection\CountableTrait;
use EBT\Collection\DirectAccessTrait;
use EBT\Collection\EmptyTrait;
use EBT\Collection\GetItemsTrait;
use EBT\Collection\IterableTrait;

/**
 * TestCollection
 */
class TestCollection implements CollectionDirectAccessInterface
{
    use CountableTrait;
    use DirectAccessTrait;
    use EmptyTrait;
    use GetItemsTrait;
    use IterableTrait;

    /**
     * @var array
     */
    protected $items = array(
        'test1' => 'val1',
        'test2' => 'val2',
        'test3' => 'val3'
    );
}
```
