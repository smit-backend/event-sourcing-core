<?php

declare(strict_types=1);

namespace SmitBackend\EventStream;

use SmitBackend\EventStream\Contracts\AggregateRootInterface;

/**
 * Class EventStore
 *
 * @package SmitBackend\EventStream
 */
class EventStore implements AggregateRootInterface
{
    private array $config;

    public function __construct(array $config = [])
    {
        $this->config = $config;
    }

    public function execute(array $payload = []): mixed
    {
        // Primary lifecycle processing
        return array_merge($this->config, $payload);
    }
}
