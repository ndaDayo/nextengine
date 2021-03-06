<?php

declare(strict_types=1);

namespace NdaDayo\NextEngine\Contracts;

interface NextEngineInterface
{
    public function __invoke(ConditionInterface $condition, string $accessToken, ?string $refreshToken = null): ResponseInterface;
}
