<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class TempController extends AbstractController
{
    #[Route('/temp/xdebug-info')]
    public function xdebugInfo(): Response
    {
        return $this->render('temp/xdebug-info.php', [
            'content' => xdebug_info(),
        ]);
    }
}
