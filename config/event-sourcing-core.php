<?php

return [
    'enabled' => env('EVENT_SOURCING_CORE_ENABLED', true),
    'timeout' => env('EVENT_SOURCING_CORE_TIMEOUT', 30),
    'log_channel' => env('EVENT_SOURCING_CORE_LOG', 'stack'),
];
