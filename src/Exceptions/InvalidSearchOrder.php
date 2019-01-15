<?php

namespace Maksa988\UnitPay\Exceptions;

use Throwable;

class InvalidSearchOrder extends \Exception
{
    /**
     * InvalidSearchOrder constructor.
     * @param string $message
     * @param int $code
     * @param Throwable|null $previous
     */
    public function __construct(string $message = "", int $code = 0, Throwable $previous = null)
    {
        if(empty($message))
            $message = "UnitPay config: searchOrder callback not set";

        parent::__construct($message, $code, $previous);
    }
}