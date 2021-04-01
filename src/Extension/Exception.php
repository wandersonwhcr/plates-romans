<?php

declare(strict_types=1);

namespace League\Plates\Romans\Extension;

use Exception as BaseException;

class Exception extends BaseException
{
    public function __construct(BaseException $previous)
    {
        parent::__construct($previous->getMessage(), $previous->getCode(), $previous);
    }
}
