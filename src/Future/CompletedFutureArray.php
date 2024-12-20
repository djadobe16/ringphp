<?php
namespace GuzzleHttp\Ring\Future;

use React\Promise\PromiseInterface;

/**
 * Represents a future array that has been completed successfully.
 */
class CompletedFutureArray implements FutureArrayInterface
{
    public function __construct(array $result)
    {
    }

    #[\ReturnTypeWillChange]
    /**
     * @return bool
     */
    public function offsetExists($offset)
    {
        return isset($this->result[$offset]);
    }

    #[\ReturnTypeWillChange]
    /**
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return $this->result[$offset];
    }

    #[\ReturnTypeWillChange]
    /**
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->result[$offset] = $value;
    }

    #[\ReturnTypeWillChange]
    /**
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->result[$offset]);
    }

    #[\ReturnTypeWillChange]
    /**
     * @return int
     */
    public function count()
    {
        return count($this->result);
    }

    #[\ReturnTypeWillChange]
    /**
     * @return \ArrayIterator
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->result);
    }

    public function wait()
    {
        // TODO: Implement wait() method.
    }

    public function cancel(): void
    {
        // TODO: Implement cancel() method.
    }

    public function then(?callable $onFulfilled = null, ?callable $onRejected = null): PromiseInterface
    {
        // TODO: Implement then() method.
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
