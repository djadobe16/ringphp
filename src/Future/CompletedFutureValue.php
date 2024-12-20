<?php
namespace GuzzleHttp\Ring\Future;

use React\Promise\FulfilledPromise;
use React\Promise\RejectedPromise;
use React\Promise\PromiseInterface;

/**
 * Represents a future value that has been resolved or rejected.
 */
class CompletedFutureValue implements FutureInterface
{
    protected $result;
    protected $error;

    private $cachedPromise;

    /**
     * @param mixed      $result Resolved result
     * @param \Exception $e      Error. Pass a GuzzleHttp\Ring\Exception\CancelledFutureAccessException
     *                           to mark the future as cancelled.
     */
    public function __construct($result, ?\Exception $e = null)
    {
        $this->result = $result;
        $this->error = $e;
    }

    /**
     * @return mixed
     */
    public function wait()
    {
        if ($this->error) {
            throw $this->error;
        }

        return $this->result;
    }

    public function cancel():void {}

    /**
     * @return PromiseInterface
     */
    public function promise()
    {
        if (!$this->cachedPromise) {
            $this->cachedPromise = $this->error
                ? new RejectedPromise($this->error)
                : new FulfilledPromise($this->result);
        }

        return $this->cachedPromise;
    }

    /**
     * @return PromiseInterface
     */
    public function then(
        ?callable $onFulfilled = null,
        ?callable $onRejected = null
    ):PromiseInterface {
        return $this->promise()->then($onFulfilled, $onRejected);
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
