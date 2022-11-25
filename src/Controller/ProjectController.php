<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;

class ProjectController
{
    #[Route('/')]
    public function homepage()
    {
        die('Project1');
    }

}