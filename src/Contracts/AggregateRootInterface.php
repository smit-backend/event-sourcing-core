<?php

declare(strict_types=1);

namespace SmitBackend\EventStream\Contracts;

/**
 * Interface AggregateRootInterface
 *
 * @package SmitBackend\EventStream
 */
interface AggregateRootInterface
{
    public function execute(array $payload = []): mixed;
}
