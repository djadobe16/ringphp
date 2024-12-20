<?php
namespace GuzzleHttp\Ring\Future;

use React\Promise\PromiseInterface;

/**
 * Represents a future array value that when dereferenced returns an array.
 */
#[\AllowDynamicProperties]
class FutureArray implements FutureArrayInterface
{
    use MagicFutureTrait;

    #[\ReturnTypeWillChange]
    /**
     * @return bool
     */
    public function offsetExists($offset)
    {
        return isset($this->_value[$offset]);
    }

    #[\ReturnTypeWillChange]
    /**
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return $this->_value[$offset];
    }

    #[\ReturnTypeWillChange]
    /**
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->_value[$offset] = $value;
    }

    #[\ReturnTypeWillChange]
    /**
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->_value[$offset]);
    }

    #[\ReturnTypeWillChange]
    /**
     * @return int
     */
    public function count()
    {
        return count($this->_value);
    }

    #[\ReturnTypeWillChange]
    /**
     * @return \ArrayIterator
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->_value);
    }

    public function catch(callable $onRejected): PromiseInterface
    {
        // TODO: Implement catch() method.
    }

    public function finally(callable $onFulfilledOrRejected): PromiseInterface
    {
        // TODO: Implement finally() method.
    }

    public function otherwise(callable $onRejected): PromiseInterface
    {
        // TODO: Implement otherwise() method.
    }

    public function always(callable $onFulfilledOrRejected): PromiseInterface
    {
        // TODO: Implement always() method.
    }
}
