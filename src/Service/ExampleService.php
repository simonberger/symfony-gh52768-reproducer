<?php

namespace App\Service;

use Psr\Log\LoggerInterface;

class ExampleService
{
    public function __construct (
        private readonly LoggerInterface $logger,
        private readonly array $someArray = [],
        private readonly string $someString = 'foo'
    ) {}
}