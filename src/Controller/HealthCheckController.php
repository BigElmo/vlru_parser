<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/health-check', 'health-check', methods: ['GET'])]
class HealthCheckController
{
    public function __invoke(): Response
    {
        return new JsonResponse([
            'status' => 'ok'
        ]);
    }
}
