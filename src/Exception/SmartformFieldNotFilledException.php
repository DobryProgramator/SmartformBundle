<?php

declare(strict_types=1);

namespace DobryProgramator\SmartformBundle\Exception;

use holicz\SimpleException\BaseException;
use holicz\SimpleException\ExceptionContext;

final class SmartformFieldNotFilledException extends BaseException
{
    public function __construct()
    {
        $exceptionContext = new ExceptionContext(
            'Při zadávání adresy nastala chyba',
            'Some Smartform field was not filled',
            500 // HTTP status code
        );

        parent::__construct($exceptionContext);
    }
}
