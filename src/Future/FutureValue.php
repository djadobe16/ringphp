<?php
namespace GuzzleHttp\Ring\Future;

use React\Promise\PromiseInterface;

/**
 * Represents a future value that responds to wait() to retrieve the promised
 * value, but can also return promises that are delivered the value when it is
 * available.
 */
class FutureValue implements FutureInterface
{
    use BaseFutureTrait;

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
