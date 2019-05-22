<?php
/**
 * Spiral Framework.
 *
 * @license   MIT
 * @author    Anton Titov (Wolfy-J)
 */
declare(strict_types=1);

namespace Spiral\GRPC\Exception;

use Spiral\GRPC\StatusCode;

class ServiceException extends GRPCException
{
    protected const CODE = StatusCode::INTERNAL;
}